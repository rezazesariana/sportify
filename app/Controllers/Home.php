<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('part/header.php');
        echo view('home.php');
        echo view('part/footer.php');
    }
}
