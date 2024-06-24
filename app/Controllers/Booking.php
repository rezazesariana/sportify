<?php

namespace App\Controllers;

class Booking extends BaseController
{
    public function index()
    {
        echo view('part/header.php');
        echo view('booking.php');
        echo view('part/footer.php');
    }
}
