<?php

function gelpendaftaran($datas)
{
    $dTglSkr = strtotime(date('d-m-Y'));

    $dwg1 = strtotime($datas->select('awal_gel_1')->first()['awal_gel_1']);
    $dwg2 = strtotime($datas->select('awal_gel_2')->first()['awal_gel_2']);
    $dwg3 = strtotime($datas->select('awal_gel_3')->first()['awal_gel_3']);

    $dkg1 = strtotime($datas->select('akhir_gel_1')->first()['akhir_gel_1']);
    $dkg2 = strtotime($datas->select('akhir_gel_2')->first()['akhir_gel_2']);
    $dkg3 = strtotime($datas->select('akhir_gel_3')->first()['akhir_gel_3']);

    //Penentuan gelombang 
    if ($dTglSkr >= $dwg1 && $dTglSkr <= $dkg1) {
        $gel = '1';
    } elseif ($dTglSkr >= $dwg2 && $dTglSkr <= $dkg2) {
        $gel = '2';
    } elseif ($dTglSkr >= $dwg3 && $dTglSkr <= $dkg3) {
        $gel = '3';
    } else {
        return false;
    }

    return $gel;
}
