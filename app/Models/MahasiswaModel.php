<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
  protected $table = 'data_mahasiswa';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'id','nim', 'nama', 'jurusan', 'tempat_lahir', 'tanggal_lahir', 'alamat_lengkap'
  ];
  protected $returnType = 'App\Entities\Mahasiswa';
  protected $useTimestamps = false;
}