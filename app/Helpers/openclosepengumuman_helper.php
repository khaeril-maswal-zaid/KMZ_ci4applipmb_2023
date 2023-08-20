<?php

function OpenClosePengumuman($datas)
{
    function ketPengu($data, $e)
    {
        $kets = [
            ['MOHON MAAF, Pengumuman akan tersedia pada ' . $data, 'danger', 'disabled'],

            ['Masukkan No Peserta & Tanggsl Lahir Anda !', 'primary', ''],

            ['MOHON MAAF, Pengumuman akan tersedia pada pukul ' . $data . ' WITA', 'danger', 'readonly'],

            ['MOHON MAAF, Pengumuman belum tersedia.', 'danger', 'readonly']
        ];

        return $kets[$e];
    }



    $dTglSkr = strtotime(date('d-m-Y'));

    $dwg1 = strtotime($datas->select('awal_gel_1')->first()['awal_gel_1']);
    $dwg2 = strtotime($datas->select('awal_gel_2')->first()['awal_gel_2']);
    $dwg3 = strtotime($datas->select('awal_gel_3')->first()['awal_gel_3']);

    $dJskr = strtotime(date("H:i"));

    $dpg1 = strtotime($datas->select('pengu_gel_1')->first()['pengu_gel_1']);
    $dpg2 = strtotime($datas->select('pengu_gel_2')->first()['pengu_gel_2']);
    $dpg3 = strtotime($datas->select('pengu_gel_3')->first()['pengu_gel_3']);

    $dwpg1 = strtotime($datas->select('waktu_pengu_gel_1')->first()['waktu_pengu_gel_1']);
    $dwpg2 = strtotime($datas->select('waktu_pengu_gel_2')->first()['waktu_pengu_gel_2']);
    $dwpg3 = strtotime($datas->select('waktu_pengu_gel_3')->first()['waktu_pengu_gel_3']);

    $ket = [];

    //Open lihat pengumuman
    //Jika pendaftaran telah terbuka dan belum pengumuman
    if ($dTglSkr >= $dwg1 && $dTglSkr < $dpg1) {

        $ket = ketPengu($datas->select('pengu_gel_1')->first()['pengu_gel_1'], 0);
    } elseif ($dTglSkr >= $dwg2 && $dTglSkr < $dpg2) {

        $ket = ketPengu($datas->select('pengu_gel_2')->first()['pengu_gel_2'], 0);
    } elseif ($dTglSkr >= $dwg3 && $dTglSkr < $dpg3) {

        $ket = ketPengu($datas->select('pengu_gel_3')->first()['pengu_gel_3'], 0);
    }


    //jika tgl skr == tgl pengu
    elseif ($dTglSkr == $dpg1) {
        if ($dJskr >= $dwpg1) {
            $ket = ketPengu(false, 1);
        } else {
            $ket = ketPengu($datas->select('waktu_pengu_gel_1')->first()['waktu_pengu_gel_1'], 2);
        }
    } elseif ($dTglSkr == $dpg2) {
        if ($dJskr >= $dwpg2) {
            $ket = ketPengu(false, 1);
        } else {
            $ket = ketPengu($datas->select('waktu_pengu_gel_2')->first()['waktu_pengu_gel_2'], 2);
        }
    } elseif ($dTglSkr == $dpg3) {
        if ($dJskr >= $dwpg3) {
            $ket = ketPengu(false, 1);
        } else {
            $ket = ketPengu($datas->select('waktu_pengu_gel_3')->first()['waktu_pengu_gel_3'], 2);
        }


        //Jika sudah lewat tanggal pengumuman
    } elseif ($dTglSkr > $dpg1 || $dTglSkr > $dpg2 || $dTglSkr > $dpg3) {
        $ket = ketPengu(false, 1);;

        //Lainnya
    } else {
        $ket = ketPengu(false, 3);
    }

    return $ket;
}
