<?php

namespace App\Controllers;

use App\Models\FieldModel;
use App\Models\PictureModel;
use App\Models\ReviewModel;
use App\Models\FieldCategoryModel;

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
        $totalReviews = count($reviews);
        $averageRating = $totalReviews ? array_sum(array_column($reviews, 'rating')) / $totalReviews : 0;
        
        $field['total_reviews'] = $totalReviews;
        $field['average_rating'] = $averageRating;
        $field['reviews'] = $reviews;

        $data = [
            'field' => $field
        ];

        echo view('part/header.php');
        echo view('item_detail.php', $data);
        echo view('part/footer.php');
    }
}
