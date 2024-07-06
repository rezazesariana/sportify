<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'booking_id';
    protected $allowedFields = ['user_id', 'field_id', 'tanggal', 'waktu_awal', 'durasi'];
}