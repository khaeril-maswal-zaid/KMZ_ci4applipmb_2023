<?php

namespace App\Controllers;

use App\Models\ConfWebBiayaPendidikan;
use App\Models\ConfWebFakultasProdiModel;

class BiayaPendidikan extends BaseController
{
    //instansiasi conf halaman dan Model
    //........................................................
    protected $templatelayout;
    protected $classbody;

    protected $confwebmodel;

    protected $biayaProdi;
    protected $biayaDll;


    public function __construct()
    {
        $this->templatelayout = ['layout/nav-pages', 'layout/footer-pages'];
        $this->classbody = 'pengunjung';

        $this->biayaDll = new ConfWebBiayaPendidikan();
        $this->biayaProdi = new ConfWebFakultasProdiModel();
    }
    //--------------------------------------------------------


    public function index()
    {
        $biayaDll = $this->biayaDll->first();
        $imp = implode('*||*', $biayaDll);

        $data = [
            'classbody' =>  $this->classbody,
            'title' => 'LIPMB UMB | Informasi Biaya Pendidikan',
            'exp' => explode('*||*', $imp),
            'biayadll' => $biayaDll,
            'biayaProdi' => $this->biayaProdi->findALL(),
            'templatelayout' =>  $this->templatelayout,

            //Seharsnya Model Vertikal di Database
            'komponenBiaya' => [
                1 => ['Biaya Pendaftaran', ''],
                ['Infag', '1 Tahun @60.000'],
                ['Almamater', ''],
                ['Kartu Mahasiswa', ''],
                ['Kartu Rencana Ujian (KRU)', 'Per Mata Kuliah'],
                ['Siakad', 'Per Semister'],
                ['Buku Tarjih', ''],
                ['Praktek/Lab Prodi Biologi', 'Per Semister'],
                ['Praktek/Lab Prodi Peternakan', 'Per Semister (I sd VI)'],
                ['Praktek/Lab Prodi Kimia', 'Per Semister (I sd VI)'],
                ['Praktek/Lab Prodi Aktuaria', 'Per Semister (I sd VI)'],
                ['Praktek/Lab Prodi PWK', 'Per Semister'],
                ['PLP 1 FKIP', 'Semister 3'],
                ['PLP 2 FKIP', 'Semister 5'],
                ['Seminar Proposal', 'Semister 7'],
                ['KKN', 'Semister 8'],
                ['Ujian Skripsi', ''],
                ['Lembar Pengesahan Skripsi', ''],
                ['Wisudah', ''],
                ['Ijazah', ''],
                ['Cuti Kuliah', 'Per Semister']
            ]
        ];

        return view('pages/biaya-pendidikan', $data);
    }
}
