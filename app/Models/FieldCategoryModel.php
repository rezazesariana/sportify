<?php

namespace App\Models;

use CodeIgniter\Model;

class FieldCategoryModel extends Model
{
    protected $table = 'field_category';
    protected $primaryKey = 'kategori_id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama'];
}