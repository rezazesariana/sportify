<?php

namespace App\Controllers;

use App\Models\FieldModel;
use App\Models\PictureModel;
use App\Models\ReviewModel;
use App\Models\FieldCategoryModel;
use App\Models\BookingModel;
use App\Models\UserModel;
use App\Models\FacilityModel;

class Shop extends BaseController
{
    public $methods = [
        'POST' => ['csrf'],
    ];

    public function index()
    {
        $fieldModel = new FieldModel();
        $pictureModel = new PictureModel();
        $reviewModel = new ReviewModel();
        $categoryModel = new FieldCategoryModel();
        
        $page = $this->request->getVar('page') ?? 1;
        $perPage = 10; // Jumlah item per halaman

        $sortBy = $this->request->getVar('sort_by') ?? 'field_id';
        if ($sortBy == 'price_low') {
            $sortColumn = 'harga';
            $sortOrder = 'ASC';
        } else if ($sortBy == 'price_high') {
            $sortColumn = 'harga';
            $sortOrder = 'DESC';
        } else if ($sortBy == 'average_rating') {
            $sortColumn = 'average_rating';
            $sortOrder = 'DESC';
        } else {
            $sortColumn = $sortBy;
            $sortOrder = 'ASC';
        }

        $kategori_id = $this->request->getVar('kategori_id');

        $total = $fieldModel->countFields($kategori_id);

        $fields = $fieldModel->getFields($perPage, ($page - 1) * $perPage, $sortColumn, $sortOrder, $kategori_id);
        foreach ($fields as &$field) {
            // Get Photo
            $field['main_photo'] = $pictureModel->where([
                'field_id' => $field['field_id'],
                'main_picture' => true
            ])->first();

            // Get Reviews
            $reviews = $reviewModel->where('field_id', $field['field_id'])->findAll();
            $totalReviews = count($reviews);
            $averageRating = $totalReviews ? array_sum(array_column($reviews, 'rating')) / $totalReviews : 0;
            
            $field['total_reviews'] = $totalReviews;
            $field['average_rating'] = $averageRating;
        }

        $data = [
            'fields' => $fields,
            'pager' => \Config\Services::pager(),
            'currentPage' => $page,
            'perPage' => $perPage,
            'total' => $total,
            'sortBy' => $sortBy,
            'sortOrder' => $sortOrder,
            'startNumber' => ($page - 1) * $perPage + 1,
            'endNumber' => min($page * $perPage, $total),
            'categories' => $categoryModel->findAll(),
            'kategori_id' => $kategori_id,
        ];

        echo view('part/header.php');
        echo view('shop.php', $data);
        echo view('part/footer.php');
    }

    public function detail($field_id)
    {
        $fieldModel = new FieldModel();
        $pictureModel = new PictureModel();
        $reviewModel = new ReviewModel();
        $bookingModel = new BookingModel();
        $userModel = new UserModel();
        $facilityModel = new FacilityModel();

        $field = $fieldModel->where('field_id', $field_id)->first();

        if (!$field) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Field with ID $field_id not found.");
        }

        // Get Photo
        $field['photos'] = $pictureModel->where([
            'field_id' => $field['field_id'],
        ])->findAll();

        // Get Reviews
        $reviews = $reviewModel->where('field_id', $field['field_id'])->findAll();
        foreach ($reviews as &$review) {
            // Get Reviews
            $user = $userModel->where('user_id', $review['user_id'])->first();
            
            $review['user'] = $user;
        }

        $totalReviews = count($reviews);
        $averageRating = $totalReviews ? array_sum(array_column($reviews, 'rating')) / $totalReviews : 0;
        
        $field['total_reviews'] = $totalReviews;
        $field['average_rating'] = $averageRating;
        $field['reviews'] = $reviews;

        $user_id = session()->get('user_id');

        $hasBooked = $bookingModel->where(['user_id' => $user_id, 'field_id' => $field_id])->countAllResults() > 0;
        $hasReviewed = $reviewModel->where(['user_id' => $user_id, 'field_id' => $field_id])->countAllResults() > 0;

        $canReview = $hasBooked && !$hasReviewed;

        $bookings = $bookingModel->where(['field_id' => $field_id])->findAll();
        $facilities = $facilityModel->where('field_id', $field['field_id'])->findAll();

        $data = [
            'field' => $field,
            'canReview' => $canReview,
            'bookings' => $bookings,
            'facilities' => $facilities,
        ];

        echo view('part/header.php');
        echo view('item_detail.php', $data);
        echo view('part/footer.php');
    }

    public function postReview()
    {
        $session = session();
        $user_id = $session->get('user_id');
        
        $reviewModel = new ReviewModel();

        $data = [
            'user_id' => $user_id,
            'field_id' => $this->request->getPost('field_id'),
            'rating' => $this->request->getPost('rating'),
            'komentar' => $this->request->getPost('komentar'),
        ];

        $reviewModel->insert($data);

        return redirect()->to('/shop/' . $data['field_id']);
    }

    public function fetchBookings()
    {
        $bookingModel = new BookingModel();

        // Mendapatkan tanggal awal dan akhir dari request
        $start = $this->request->getGet('start');
        $end = $this->request->getGet('end');
        $field_id = $this->request->getGet('field_id');

        // Mengambil reservasi dalam rentang tanggal yang diberikan
        $bookings = $bookingModel->where('waktu_awal >=', $start)
                                 ->where('waktu_awal <=', $end)
                                 ->where('field_id', $field_id)
                                 ->findAll();
        
        $timeSlots = [
            "06:00:00", "07:00:00", "08:00:00", "09:00:00", "10:00:00", "11:00:00", "12:00:00", "13:00:00",
            "14:00:00", "15:00:00", "16:00:00", "17:00:00", "18:00:00", "19:00:00", "20:00:00", "21:00:00", "22:00:00",
        ];

        $dates = [];
        $currentDate = strtotime($start);
        $endDate = strtotime($end);

        while ($currentDate <= $endDate) {
            $dates[] = date('Y-m-d', $currentDate);
            $currentDate = strtotime('+1 day', $currentDate);
        }

        $events = [];
        foreach ($dates as $date) {
            foreach ($timeSlots as $time) {
                $dateTime = $date . ' ' . $time;
                foreach ($bookings as $booking) {
                    $bookingStart = strtotime($booking['waktu_awal']);
                    $bookingEnd = strtotime($booking['waktu_awal'] . ' + ' . $booking['durasi'] . ' hours');
                    if ($bookingStart <= strtotime($dateTime) && strtotime($dateTime) < $bookingEnd) {
                        $events[] = [
                            'title' => 'Booked',
                            'start' => $dateTime,
                            'end' => date('Y-m-d\TH:i:s', strtotime($dateTime . ' +1 hour')),
                            'color' => 'red'
                        ];
                        break;
                    }
                }
            }
        }
        
        return $this->response->setJSON($events);
    }
}
