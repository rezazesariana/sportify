<?php

namespace App\Models;

use CodeIgniter\Model;

class FieldModel extends Model
{
    protected $table = 'field';
    protected $primaryKey = 'field_id';
    protected $allowedFields = ['nama', 'lokasi', 'kategori_id', 'fasilitas', 'harga', 'deskripsi'];
}