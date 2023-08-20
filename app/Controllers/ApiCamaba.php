<?php

namespace App\Controllers;

use App\Models\CamabaModel;

class ApiCamaba extends BaseController
{

    //instansiasi modelS
    //........................................................
    protected $camabamodel;
    
    public function __construct()
    {
        $this->camabamodel = new CamabaModel();
    }
    //--------------------------------------------------------


    //method pages
    //........................................................
    public function index($slc)
    {
       $datacmb = $this->camabamodel->select($slc)->findAll();
        
        $rows = [];
        foreach($datacmb as $cmb){
            $rows[] = $cmb[$slc];
        }
        
        return json_encode($rows);
    }

}
