<?php

namespace App\Controllers;

use App\Models\FieldCategoryModel;
use App\Models\FieldModel;
use App\Models\PictureModel;
use App\Models\ReviewModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    public function index()
    {
        $kategoriModel = new FieldCategoryModel();
        $fieldModel = new FieldModel();
        $pictureModel = new PictureModel();

        echo view('part/admin/header.php');
        echo view('part/admin/top_menu');
        echo view('part/admin/side_menu');
        echo view('admin.php');
        echo view('part/admin/footer.php');
    }
}
