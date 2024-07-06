<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\PaymentModel;
use App\Models\PaymentMethodModel;
use App\Models\UserModel;
use App\Models\FieldModel;

class BookingSuccess extends BaseController
{
    public function index($booking_id)
    {
        $bookingModel = new BookingModel();
        $paymentModel = new PaymentModel();
        $paymentMethodModel = new PaymentMethodModel();
        $userModel = new UserModel();
        $fieldModel = new FieldModel();

        $booking = $bookingModel->where('booking_id', $booking_id)->first();
        $user = $userModel->where('user_id', $booking['user_id'])->first();
        $field = $fieldModel->where('field_id', $booking['field_id'])->first();

        $payment = $paymentModel->where('booking_id', $booking['booking_id'])->first();
        $payment_method = $paymentMethodModel->where('payment_method_id', $payment['payment_method_id'])->first();
        

        $data = [
            'booking' => $booking,
            'payment' => $payment,
            'payment_method' => $payment_method,
            'user' => $user,
            'field' => $field,
        ];

        echo view('part/header.php');
        echo view('booking_success.php', $data);
        echo view('part/footer.php');
    }
}
