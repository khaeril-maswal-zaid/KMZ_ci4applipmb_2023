<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfWebSppModel extends Model
{
    protected $table = 'confweb_spp';
    protected $useTimestamps = true;
    protected $createdField  = false;
    protected $updatedField   = false;
    protected $allowedFields = ['sppcamaba']; //table yang diizinkan untuk di kelola
}
