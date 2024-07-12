<?php

namespace App\Models;

use CodeIgniter\Model;

class FieldModel extends Model
{
    protected $table = 'field';
    protected $primaryKey = 'field_id';
    protected $returnType = 'array';
    protected $allowedFields = ['nama', 'lokasi', 'kategori_id', 'harga', 'deskripsi', 'deskripsi_pendek'];

    public function getFields($limit, $offset, $sortColumn = 'field_id', $sortOrder = 'ASC', $kategori_id = null)
    {
        if ($kategori_id != null) {
            return $this->select('field.*, AVG(review.rating) as average_rating')
                ->where('kategori_id', $kategori_id)
                ->join('review', 'review.field_id = field.field_id', 'left')
                ->groupBy('field.field_id')
                ->orderBy($sortColumn, $sortOrder)
                ->findAll($limit, $offset);
        }

        return $this->select('field.*, AVG(review.rating) as average_rating')
                    ->join('review', 'review.field_id = field.field_id', 'left')
                    ->groupBy('field.field_id')
                    ->orderBy($sortColumn, $sortOrder)
                    ->findAll($limit, $offset);
    }

    public function countFields($kategori_id = null)
    {
        if ($kategori_id != null) {
            return $this->where('kategori_id', $kategori_id)->countAllResults();
        }

        return $this->countAllResults();
    }
}