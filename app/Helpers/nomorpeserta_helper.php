<?php

function nomorpeserta($lastNoPeserta)
{
    //set Nomor pserta default untuk pertama
    if ($lastNoPeserta == '') {
        $kodetahun = substr(date('Y'), 2, 2);

        return 'LIPMB' . $kodetahun . '-12A-51-1'; // LIPMB22-12A-51-1
    }

    $nopsdsr = explode('-', $lastNoPeserta);

    $title = $nopsdsr[0];
    $ruangan = substr($nopsdsr[1], -1);
    $jmlh = $nopsdsr[2];

    if ($jmlh >= 75) {
        $ruangan++;
        $jmlh = 51;
    } else {
        $jmlh++;
    }

    $nopeserta = $title . '-12' . $ruangan . '-' . $jmlh . '-';
    return $nopeserta;
}
