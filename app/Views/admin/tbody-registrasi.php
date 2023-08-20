<?php
$no = 1;
foreach ($camabaregistrasi as $cmball) :
    if ($cmball['username'] == "") {
        $btn = "primary";
    } elseif ($cmball['username'] != "" && $cmball['nomorpeserta'] == "") {
        $btn = "warning";
    }
?>
    <tr>
        <td class="text-center"><?= $no++ ?></td>
        <td class="text-center">
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-<?= $btn ?> dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Action
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li>
                        <button type="button" class="dropdown-item set-akun-peserta" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?= $cmball['id'] ?>">Set Akun </button>
                    </li>
                    <li><a href="<?= generateWhatsappLink($cmball['nohp'], $cmball['nama']) ?>" class="dropdown-item" target="_blank">Chat WA</a></li>
                    <li><a href="#" class="dropdown-item">Send Email</a></li>
                    <li><a href="#" class="dropdown-item">Hapus</a></li>
                </ul>
            </div>
        </td>

        <td><?= $cmball['wakturegist'] ?> || <?= $cmball['tanggalregist'] ?></td>
        <td><?= $cmball['username'] ?></td>
        <td><?= $cmball['password'] ?></td>
        <td><?= strtoupper($cmball['nama']) ?></td>
        <td><?= $cmball['nik'] ?></td>
        <td><?= $cmball['jeniskelamin'] ?></td>
        <td><?= $cmball['tempatlahir'] ?>, <?= $cmball['tanggallahir'] ?></td>
        <td><?= $cmball['nohp'] ?></td>
        <td><?= $cmball['alamat'] ?></td>
        <td><?= $cmball['desa'] ?></td>
        <td><?= $cmball['kecamatan'] ?></td>
        <td><?= $cmball['kabupaten'] ?></td>
        <td><?= $cmball['provinsi'] ?></td>
        <td><?= $cmball['email'] ?></td>
        <td><?= $cmball['namaayah'] ?></td>
        <td><?= $cmball['namaibu'] ?></td>
        <td><?= $cmball['pekerjaanayah'] ?></td>
        <td><?= $cmball['pekerjaanibu'] ?></td>
        <td><?= $cmball['hpayah'] ?></td>
        <td><?= $cmball['hpibu'] ?></td>
        <td><?= $cmball['gajiayah'] ?></td>
        <td><?= $cmball['gajiibu'] ?></td>
        <td class="text-center"><?= $cmball['anakke'] ?></td>
        <td class="text-center"><?= $cmball['bersaudara'] ?></td>
        <td><?= $cmball['nisn'] ?></td>
        <td><?= $cmball['namasekolah'] ?></td>
        <td><?= $cmball['jurusan'] ?></td>
        <td class="text-center"><?= $cmball['tahunlulus'] ?></td>
        <td><?= $cmball['prodi1'] ?></td>
        <td><?= $cmball['prodi2'] ?></td>
        <td><?= $cmball['jeniskuliah'] ?></td>
        <td><?= $cmball['akunby'] ?></td>
    </tr>
<?php endforeach ?>