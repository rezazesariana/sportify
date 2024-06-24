<?php

namespace App\Controllers;

class ItemDetail extends BaseController
{
    public function index()
    {
        echo view('part/header.php');
        echo view('item_detail.php');
        echo view('part/footer.php');
    }
}
