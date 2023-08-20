<?php

namespace App\Controllers;

class Home extends BaseController
{
    //instansiasi  conf halaman
    //........................................................
    protected $templatelayout;
    protected $classbody;

    protected $ciqrcode;

    public function __construct()
    {
        $this->templatelayout = ['layout/nav-home', 'layout/footer-pages'];
        $this->classbody = 'pengunjung';


        //hapus session setiap load index home
        session_start();
        $_SESSION = [];
        session_unset();
        session_destroy();
    }
    //--------------------------------------------------------

    public function index()
    {
        $data = [
            'classbody' =>  $this->classbody,
            'title' => 'LIPMB UMB',
            'templatelayout' =>  $this->templatelayout
        ];

        return view('home/index', $data);
    }
}
