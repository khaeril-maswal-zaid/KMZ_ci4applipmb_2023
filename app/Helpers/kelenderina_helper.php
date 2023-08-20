<?php

function KelenderIna($data = '1999-03-7')
{
    $bulan = [
        1 => 'Januari',     'Februari',     'Maret',
        'April',        'Mei',          'Juni',
        'Juli',         'Agustus',      'September',
        'Oktober',      'November',     'Desember'
    ];

    $tglexp = explode('-', $data);

    return $tglexp[2] . ' ' . $bulan[(int)$tglexp[1]] . ' ' . $tglexp[0];
}
