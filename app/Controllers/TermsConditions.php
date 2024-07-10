<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\UserModel;
use App\Models\FieldModel;

class TermsConditions extends BaseController
{
    public function index()
    {
        echo view('part/header.php');
        echo view('terms_conditions.php');
        echo view('part/footer.php');
    }
}
