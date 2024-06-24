<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        echo view('part/header.php');
        echo view('contact.php');
        echo view('part/footer.php');
    }
}
