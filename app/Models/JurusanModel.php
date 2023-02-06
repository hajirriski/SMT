<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
  protected $table = 'data_jurusan';
  protected $primaryKey = 'kode_jurusan';
  protected $allowedFields = [
    'kode_jurusan', 'jurusan'
  ];
  protected $returnType = 'App\Entities\Jurusan';
  protected $useTimestamps = false;
}