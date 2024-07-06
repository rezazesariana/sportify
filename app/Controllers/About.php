<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\UserModel;
use App\Models\FieldModel;

class About extends BaseController
{
    public function index()
    {
        $bookingModel = new BookingModel();
        $userModel = new UserModel();
        $fieldModel = new FieldModel();

        $totalBookings = $bookingModel->countAll();
        $totalUsers = $userModel->countAll();
        $totalFields = $fieldModel->countAll();

        $data = [
            'totalBookings' => $totalBookings,
            'totalUsers' => $totalUsers,
            'totalFields' => $totalFields,
        ];

        echo view('part/header.php');
        echo view('about.php', $data);
        echo view('part/footer.php');
    }
}
