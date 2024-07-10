<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\UserModel;
use App\Models\FieldModel;

class PrivacyPolicy extends BaseController
{
    public function index()
    {
        echo view('part/header.php');
        echo view('privacy_policy.php');
        echo view('part/footer.php');
    }
}
