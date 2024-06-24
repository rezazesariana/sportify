<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        echo view('part/header.php');
        echo view('shop.php');
        echo view('part/footer.php');
    }
}
