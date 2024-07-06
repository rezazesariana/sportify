<?php

namespace App\Controllers;

use App\Models\FieldModel;
use App\Models\PictureModel;
use App\Models\ReviewModel;
use App\Models\PaymentMethodModel;
use App\Models\BookingModel;
use App\Models\PaymentModel;

class Booking extends BaseController
{
    public function index()
    {
        $fieldModel = new FieldModel();
        $pictureModel = new PictureModel();
        $reviewModel = new ReviewModel();
        $paymentMethodModel = new PaymentMethodModel();

        $payment_methods = $paymentMethodModel->findAll();

        $field_id = $this->request->getPost('field_id');
        $tanggal = $this->request->getPost('tanggal');
        $waktu_awal = $this->request->getPost('waktu_awal');
        $durasi = $this->request->getPost('durasi');

        $field = $fieldModel->where('field_id', $field_id)->first();

        // Get Photo
        $field['main_photo'] = $pictureModel->where([
            'field_id' => $field_id,
            'main_picture' => true
        ])->first();

        // Get Reviews
        $reviews = $reviewModel->where('field_id', $field['field_id'])->findAll();
        $totalReviews = count($reviews);
        $averageRating = $totalReviews ? array_sum(array_column($reviews, 'rating')) / $totalReviews : 0;
        
        $field['total_reviews'] = $totalReviews;
        $field['average_rating'] = $averageRating;

        $subtotal = $field['harga'] * $durasi;
        $tax = $subtotal * 0.11;
        $total = $subtotal + $tax;

        $data = [
            'field' => $field,
            'tanggal' => $tanggal,
            'waktu_awal' => $waktu_awal,
            'durasi' => $durasi,
            'total' => $total,
            'subtotal' => $subtotal,
            'tax' => $tax,
            'payment_methods' => $payment_methods,
        ];

        return view('part/header')
            .view('booking.php', $data)
            .view('part/footer');
    }

    public function confirm()
    {
        $user_id = session()->get('user_id');
        $field_id = $this->request->getPost('field_id');
        $tanggal = $this->request->getPost('tanggal');
        $waktu_awal = $this->request->getPost('waktu_awal');
        $durasi = $this->request->getPost('durasi');
        $payment_method_id = $this->request->getPost('payment_method');
        $amount = $this->request->getPost('amount');
        $payment_date = $this->request->getPost('payment_date');

        $model = new BookingModel();
        $data = [
            'user_id' => $user_id,
            'field_id' => $field_id,
            'tanggal' => $tanggal,
            'waktu_awal' => $waktu_awal,
            'durasi' => $durasi,
        ];
        $model->save($data);

        $paymentModel = new PaymentModel();
        $dataPayment = [
            'booking_id' => $model->insertID(),
            'payment_method_id' => $payment_method_id,
            'amount' => $amount,
            'tanggal' => $payment_date,
        ];
        $paymentModel->save($dataPayment);

        return redirect()->to('/booking-success/' . $model->insertID());
    }
}
