<?php

namespace App\Controllers;

class Beasiswa extends BaseController
{
    //instansiasi conf halaman dan Model
    //........................................................
    protected $templatelayout;
    protected $classbody;


    public function __construct()
    {
        $this->templatelayout = ['layout/nav-pages', 'layout/footer-pages'];
        $this->classbody = 'pengunjung';
    }
    //--------------------------------------------------------


    public function index()
    {
        $data = [
            'classbody' =>  $this->classbody,
            'title' => 'LIPMB UMB | Informasi Beasiswa UM Bulukumba',
            'templatelayout' =>  $this->templatelayout
        ];

        return view('pages/beasiswa', $data);
    }
}
