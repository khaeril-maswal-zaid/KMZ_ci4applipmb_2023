<?php

namespace App\Controllers;

use App\Models\ConfWebSppModel;
use App\Models\ConfJadwalTahapanPendaftaran;

class InformasiPendaftaran extends BaseController
{
    //instansiasi conf halaman dan Model
    //........................................................
    protected $templatelayout;
    protected $classbody;

    protected $confwebmodel;

    protected $conftahapan;


    public function __construct()
    {
        $this->templatelayout = ['layout/nav-pages', 'layout/footer-pages'];
        $this->classbody = 'pengunjung';

        $this->confwebmodel = new ConfWebSppModel();
        $this->conftahapan = new ConfJadwalTahapanPendaftaran();
    }
    //--------------------------------------------------------


    public function index()
    {
        $data = [
            'classbody' =>  $this->classbody,
            'title' => 'LIPMB UMB | Informasi Pendaftaran',
            'confwebmodel' => $this->confwebmodel->first(),
            'templatelayout' =>  $this->templatelayout,

            'conftahapan' => $this->conftahapan->first()
        ];

        return view('pages/informasi-pendaftaran', $data);
    }
}
