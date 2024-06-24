<?php

namespace App\Controllers;

class Confirmation extends BaseController
{
    public function index()
    {
        echo view('part/header.php');
        echo view('confirmation.php');
        echo view('part/footer.php');
    }
}
