<?php

namespace App\Models\Dosen;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table      = 'matkul';
    protected $allowedFields = ['matkul', 'status'];
    protected $useTimestamps = true;
}
