<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfJadwalTahapanPendaftaran extends Model
{
    protected $table = 'confweb_jadwalgpendaftaran';
    protected $useTimestamps = true;
    protected $createdField  = false;
    protected $updatedField   = false;


    public function jadwalUjianByGel($gel)
    {
        $tglUjian = $this->select('test_gel_' . $gel)->first()['test_gel_' . $gel];
        $waktuUjian = $this->select('waktu_test_gel_' . $gel)->first()['waktu_test_gel_' . $gel];

        return [$tglUjian, $waktuUjian];
    }
}
