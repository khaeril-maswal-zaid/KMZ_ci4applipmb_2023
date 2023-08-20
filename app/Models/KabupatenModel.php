<?php

namespace App\Models;

use CodeIgniter\Model;

class KabupatenModel extends Model
{
    protected $table = 'wilayah_cities';
    protected $useTimestamps = true;
    protected $createdField  = false;
    protected $updatedField   = false;
}
