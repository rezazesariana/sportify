<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        echo view('part/header.php');
        echo view('about.php');
        echo view('part/footer.php');
    }
}
