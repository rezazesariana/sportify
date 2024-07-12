<?php

namespace App\Models;

use CodeIgniter\Model;

class FacilityModel extends Model
{
    protected $table = 'facility';
    protected $primaryKey = 'facility_id';
    protected $allowedFields = ['field_id', 'nama_fasilitas', 'keterangan'];
}