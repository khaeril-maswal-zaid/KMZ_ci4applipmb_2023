<?php

namespace App\Controllers;

use App\Models\ConfWebPendUlangModel;

class PendaftaranUlang extends BaseController
{
    //instansiasi conf halaman dan Model
    //........................................................
    protected $templatelayout;
    protected $classbody;

    protected $confwebpendulangmodel;


    public function __construct()
    {
        $this->templatelayout = ['layout/nav-pages', 'layout/footer-pages'];
        $this->classbody = 'pengunjung';

        $this->confwebpendulangmodel = new ConfWebPendUlangModel();
    }
    //--------------------------------------------------------


    public function index()
    {
        $data = [
            'classbody' =>  $this->classbody,
            'title' => 'LIPMB UMB | Pendaftaran Ulang',
            'confwebpendulangmodel' => $this->confwebpendulangmodel->first(),
            'templatelayout' =>  $this->templatelayout
        ];

        return view('pages/pendaftaran-ulang', $data);
    }
}
