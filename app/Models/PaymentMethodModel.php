<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentMethodModel extends Model
{
    protected $table = 'payment_method';
    protected $primaryKey = 'payment_method_id';
    protected $allowedFields = ['logo', 'nama_bank', 'nama_rekening', 'no_rekening'];
}