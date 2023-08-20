<?php
$no = 1;
foreach ($camabapendaftaran as $cmball) :
?>
    <tr>
        <td class="text-center"><?= $no++ ?></td>
        <td>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Action
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li>
                        <form method="post" class="d-inline" action="/admin/proses-du/<?= $cmball['id'] ?>">
                            <?= csrf_field() ?>
                            <button type="submit" name="proses-du" class="dropdown-item">Selesai DU</button>
                        </form>
                    </li>

                    <li><a href="/admin/edit-camaba/<?= $cmball['id'] ?>" class="dropdown-item">Edit</a></li>

                    <li>
                        <form method="post" class="d-inline" action="/admin/delete/camaba/<?= $cmball['id'] ?>">
                            <?= csrf_field() ?>
                            <button type="submit" name="delete" class="dropdown-item">Delete</button>
                        </form>
                    </li>

                    <li><a href="<?= generateWhatsappLink($cmball['nohp'], $cmball['nama']) ?>" class="dropdown-item" target="_blank">Chat WA</a></li>
                    <li><a href="#" class="dropdown-item">Send Email</a></li>
                    <li><a href="/admin/detail-peserta/<?= $cmball['id'] ?>" class="dropdown-item">CV Peserta</a></li>
                </ul>
            </div>
        </td>

        <td><?= $cmball['wakturegist'] ?> || <?= $cmball['tanggalregist'] ?></td>
        <td><?= $cmball['waktudaftar'] ?> || <?= $cmball['tanggaldaftar'] ?></td>
        <td><?= $cmball['username'] ?></td>
        <td><?= $cmball['password'] ?></td>
        <td><?= $cmball['nomorpeserta'] ?></td>
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
        <td class="text-center"><?= $cmball['jeniskuliah'] ?></td>
        <td><?= $cmball['editby'] ?></td>
    </tr>
<?php endforeach ?>