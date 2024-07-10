<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\UserModel;
use App\Models\FieldModel;
use App\Models\PaymentModel;

class BookingHistory extends BaseController
{
    public function index()
    {
        $bookingModel = new BookingModel();
        $paymentModel = new PaymentModel();
        $fieldModel = new FieldModel();
        $userModel = new UserModel();

        $user = $userModel->where('user_id', session()->get('user_id'))->first();

        $bookings = $bookingModel->where('user_id', session()->get('user_id'))->findAll();
        foreach ($bookings as &$booking) {
            $field = $fieldModel->where('field_id', $booking['field_id'])->first();
            $payment = $paymentModel->where('booking_id', $booking['booking_id'])->first();
            
            $booking['field'] = $field;
            $booking['payment'] = $payment;
        }

        $data = [
            'bookings' => $bookings,
            'user' => $user,
        ];

        echo view('part/header.php');
        echo view('booking_history.php', $data);
        echo view('part/footer.php');
    }
}
