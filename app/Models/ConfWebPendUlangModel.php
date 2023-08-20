<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfWebPendUlangModel extends Model
{
    protected $table = 'confweb_pendulang';
    protected $useTimestamps = true;
    protected $createdField  = false;
    protected $updatedField   = false;
    protected $allowedFields = ['pendulang']; //table yang diizinkan untuk di kelola
}
