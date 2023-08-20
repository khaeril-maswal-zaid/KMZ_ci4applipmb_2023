<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfWebBiayaPendidikan extends Model
{
    protected $table = 'confweb_biayapendidikan';
    protected $useTimestamps = true;
    protected $createdField  = false;
    protected $updatedField   = false;
    protected $allowedFields = ['confweb_biayapendidikan']; //table yang diizinkan untuk di kelola
}
