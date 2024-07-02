<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'review';
    protected $primaryKey = 'review_id';
    protected $allowedFields = ['user_id', 'field_id', 'rating', 'tanggal', 'komentar'];
}