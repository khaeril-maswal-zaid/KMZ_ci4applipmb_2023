<?php

namespace App\Models;

use CodeIgniter\Model;

class CamabaModel extends Model
{
    protected $table = 'calonmahasiswabaru';
    protected $useTimestamps = true;
    protected $createdField  = false;
    protected $updatedField   = false;
    protected $allowedFields = //table yang diizinkan untuk di kelola
    [
        'wakturegist',      'tanggalregist',        'waktudaftar',
        'tanggaldaftar',    'waktudaftarulang',     'tanggaldaftarulang',
        'username',         'password',             'gelombang',
        'nama',             'nik',                  'jeniskelamin',
        'tempatlahir',      'tanggallahir',         'ylahir',
        'agama',            'nohp',                 'provinsi',
        'kabupaten',   'kecamatan', 'desa',         'alamat',
        'email',            'namaayah',             'namaibu',
        'pekerjaanayah',    'pekerjaanibu',         'hpayah',
        'hpibu',            'gajiayah',             'gajiibu',
        'anakke',           'bersaudara',           'nisn',
        'namasekolah',      'jurusan',              'tahunlulus',
        'prodi1',           'prodi2',               'prodilulus',
        'nomorpeserta',     'jeniskuliah',          'foto',
        'raport',           'alasankuliah',         'ruanganujian',
        'koderuanganujian', 'akunby',               'editby',
        'pengumumanby',     'daftarulangby',        'deskripsi'

    ];


    public function getCamabaRegistrasi($filter)
    {
        if ($filter[0] == false && $filter[1] == false && $filter[2] == false) {
            return $this->getCamabaWhereOneAll("nomorpeserta", '');
        }

        return $this->getCamabaFilterGelProdi12($filter)->getCamabaWhereOneAll("nomorpeserta", '');
    }

    public function getCamabaPendaftaran($filter)
    {
        if ($filter[0] == false && $filter[1] == false && $filter[2] == false) {
            return $this->getCamabaWhereTwoAll("nomorpeserta !=", '', 'daftarulangby', '');
        }

        return $this->getCamabaFilterGelProdi12($filter)->getCamabaWhereTwoAll("nomorpeserta !=", '', 'daftarulangby', '');
    }

    public function getDaftarUlang($filter)
    {
        if ($filter[0] == false && $filter[1] == false) {
            return $this->getCamabaWhereOneAll("daftarulangby !=", '');
        }

        return $this->getCamabaFilterGelProdilulusForDaftarUlang($filter)->getCamabaWhereOneAll("daftarulangby !=", '');
    }

    public function getProdiLulus($filter)
    {
        if ($filter[0] == false && $filter[1] == false) {
            return $this->getCamabaWhereOneAll("nomorpeserta !=", '');
        }

        return $this->getCamabaFilterGelProsesProdiLulus($filter)->getCamabaWhereOneAll("nomorpeserta !=", '');
    }

    public function grafikUmum()
    {
        $target = ['gelombang', 'jeniskelamin',  'ylahir', 'provinsi', 'tahunlulus', 'jeniskuliah', 'prodi1', 'prodi2', 'prodilulus'];
        $loop = count($target);

        $datatarget = [];
        $count = [];

        for ($e = 0; $e < $loop; $e++) {
            $unique = [$target[$e] => []];
            $countValues = [$target[$e] => []];
        }

        for ($o = 0; $o < $loop; $o++) {
            $mau = [$target[$o] => []];

            $datatarget[] = $this->select($target[$o])->where('nomorpeserta !=', '')->findAll();
            $count[] = $this->select($target[$o])->where('nomorpeserta !=', '')->countAllResults();

            for ($i = 0; $i < $count[$o]; $i++) {
                $mau[$target[$o]][] = $datatarget[$o][$i][$target[$o]];
            }

            $unique[$target[$o]] = array_unique($mau[$target[$o]]);
            $countValues[$target[$o]] = array_count_values($mau[$target[$o]]);



            // $uniqueArray[] = array_unique($mau[$target[$o]]);
            // $implodeUniqu[] = implode('*|*', $uniqueArray[$o]);
            // $unique[$target[$o]] = explode('*|*', $implodeUniqu[$o]);

            // $countValuesArray[] = array_count_values($mau[$target[$o]]);
            // $implodeCountValues[] = implode('*|*', $countValuesArray[$o]);
            // $countValues[$target[$o]] = explode('*|*', $implodeCountValues[$o]);
        }
        return ['unique' => $unique, 'countValues' => $countValues];
    }

    public function grafikKhusus($gel)
    {
        $target = [
            ['nmKecamatan', 'kecamatan', 'kabupaten', 'bulukumba'],
            ['nmKabupaten', 'kabupaten', 'provinsi', 'Sulawesi Selatan'],
            ['nmKabupatenExt', 'kabupaten', 'provinsi !=', 'Sulawesi Selatan']
        ];
        $loop = count($target);

        $datatarget = [];
        $count = [];

        for ($e = 0; $e < $loop; $e++) {
            //Ambil Berdasarkan label (index 0) untuk menyimpanan array
            $unique = [$target[$e][0] => []];
            $countValues = [$target[$e][0] => []];
        }

        for ($o = 0; $o < $loop; $o++) {
            $mau = [$target[$o][1] => []];

            $datatarget[] = $this->select($target[$o][1])->where([$target[$o][2] => $target[$o][3], 'nomorpeserta !=' => ''])->findAll();
            $count[] = $this->select($target[$o][1])->where([$target[$o][2] => $target[$o][3], 'nomorpeserta !=' => ''])->countAllResults();

            for ($i = 0; $i < $count[$o]; $i++) {
                $mau[$target[$o][1]][] = $datatarget[$o][$i][$target[$o][1]];
            }

            //Ambil Berdasarkan label (index 0) untuk menyimpanan array
            $unique[$target[$o][0]] = array_unique($mau[$target[$o][1]]);
            $countValues[$target[$o][0]] = array_count_values($mau[$target[$o][1]]);
        }

        return ['unique' => $unique, 'countValues' => $countValues];
    }



    public function getCamabaWhereOneAll($namekey, $valuekey)
    {
        return $this->where([$namekey => $valuekey])->orderBy('password, id', 'DESC')->findAll(); // jumlah data, start dari data ke
    }

    public function getCamabaWhereTwoAll($namekey1, $valuekey1, $namekey2, $valuekey2)
    {
        return $this->where([$namekey1 => $valuekey1, $namekey2 => $valuekey2])->orderBy('nomorpeserta', 'DESC')->findAll();
    }

    public function getCamabaWhereOneFirst($namekey, $valuekey)
    {
        return $this->where([$namekey => $valuekey])->first();
    }




    public function getCamabaFilterGelProdi12($filter)
    {
        if ($filter[0] == "") {
            $filter[0] = false;
        }

        if ($filter[1] == "") {
            $filter[1] = false;
        }

        if ($filter[2] == "") {
            $filter[2] = false;
        }

        return $this->where(['gelombang' => $filter[0], 'prodi1' => $filter[1], 'prodi2' => $filter[2]]);
    }

    public function getCamabaFilterGelProdilulusForDaftarUlang($filter)
    {
        if ($filter[0] == '') {
            $filter[0] = false;
        }

        if ($filter[1] == '') {
            $filter[1] = false;
        }

        return $this->where(['gelombang' => $filter[0], 'prodilulus' => $filter[1]]);
    }

    public function getCamabaFilterGelProsesProdiLulus($filter)
    {
        if ($filter[0] == '') {
            $filter[0] = false;
        }

        return $this->where(['gelombang' => $filter[0]]);
    }
    
        public function getNotDuplicat($nik)
    {
        return $this->select('nik')->where('nik', $nik)->first();
    }
}
