<?php

namespace App\Models;

use CodeIgniter\Model;

class PinModel extends Model
{
    protected $table = 'pin';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'panggilan', 'tanggalLahir', 'alamat'];

    public function getPin($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        // $builder = $this->table('pin');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('pin')->like('nama', $keyword)->orLike('alamat', $keyword);
    }
}
