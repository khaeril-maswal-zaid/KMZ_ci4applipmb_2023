<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'akunadmin';
    protected $useTimestamps = true;
    protected $createdField  = false;
    protected $updatedField   = false;
    // protected $allowedFields = ['']; //table yang diizinkan untuk di kelola
}
