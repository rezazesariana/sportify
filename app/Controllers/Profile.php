<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\UserModel;
use App\Models\FieldModel;

class Profile extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $user = $userModel->where('user_id', session()->get('user_id'))->first();

        $data = [
            'user' => $user,
        ];

        echo view('part/header.php');
        echo view('profile.php', $data);
        echo view('part/footer.php');
    }
}
