<?php

namespace App\Models;

use CodeIgniter\Model;

class PictureModel extends Model
{
    protected $table = 'picture';
    protected $primaryKey = 'picture_id';
    protected $allowedFields = ['field_id', 'link', 'main_picture'];
}