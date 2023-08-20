<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfWebAkunWaModel extends Model
{
    protected $table = 'confweb_adminwa';
    protected $useTimestamps = true;
    protected $createdField  = false;
    protected $updatedField   = false;
    protected $allowedFields = ['nama', 'wa', 'biaya', 'terbilang', 'edited']; //table yang diizinkan untuk di kelola
}
