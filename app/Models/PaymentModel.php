<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table = 'payment';
    protected $primaryKey = 'payment_id';
    protected $allowedFields = ['booking_id', 'payment_method_id', 'amount', 'tanggal'];
}