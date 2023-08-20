<?php $this->extend('dompdf/template') ?>
<?php $this->section('viewpdf') ?>

<main>
    <div class="row">
        <div class="col-3 mb-1">
            <!-- <img src="https://lipmb.umbulukumba.ac.id/img/assets/umb.png"> -->
        </div>
        <div class="col-7">
            <h1 class="text-center h5 fw-bold mt-3">
                LEMBAGA INFORMASI<br>
                DAN PENERIMAAN MAHASISWA BARU<br>
                UNIVERSITAS MUHAMMADIYAH BULUKUMBA
            </h1>
        </div>
    </div>

    <hr class="my-0 kop-kartupeserta mx-5" style="border: 2px solid;">
    <hr class="kop-kartupeserta mx-5 mb-4" style="border: 1px solid; margin-top:1px">

    <div class="row text-center my-3">
        <h5 class="fw-bold text-decoration-underline">Kartu Peserta Ujian</h5>
    </div>

    <table class="mx-5 mb-4">
        <tr>
            <td> No Peserta </td>
            <td style="width:70px" class="text-center">:</td>
            <td class="fw-bold"> <?= $camaba['nomorpeserta'] ?></td>
        </tr>
        <tr>
            <td> Nama </td>
            <td style="width:70px" class="text-center">:</td>
            <td> <?= $camaba['nama'] ?></td>
        </tr>
        <tr>
            <td> Jenis Kelamin </td>
            <td style="width:70px" class="text-center">:</td>
            <td> <?= $camaba['jeniskelamin'] ?></td>
        </tr>
        <tr>
            <td> Tanggal Lahir</td>
            <td style="width:70px" class="text-center">:</td>
            <td> <?= $camaba['tanggallahir'] ?></td>
        </tr>
        <tr>
            <td> Nomor WA </td>
            <td style="width:70px" class="text-center">:</td>
            <td> <?= $camaba['nohp'] ?></td>
        </tr>
        <tr>
            <td> Pilihan Kuliah </td>
            <td style="width:70px" class="text-center">:</td>
            <td class="fw-bold"> <?= $camaba['jeniskuliah'] ?></td>
        </tr>
    </table>

    <table class="mx-5 mb-4">
        <tr>
            <td>
                <h6 class="fw-bold">Program Studi Pilihan :</h6>
                <span>Pilihan 1 : <?= $camaba['prodi1'] ?></span> <br>
                <span>Pilihan 2 : <?= $camaba['prodi2'] ?></span>
            </td>

            <td>
                <h6 class="fw-bold">Saat ujian peserta wajib membawa :</h6>
                <ol>
                    <li>Kartu ujian ini</li>
                    <li>Tanda pengenal (KTP/ SIM / KTS)</li>
                    <li>Pensil 2B dan Alat Tulis lainnya</li>
                </ol>
            </td>
        </tr>
    </table>

    <table class="text-center table align-middle table-bordered mx-4" style="border: 1px solid ;">
        <thead>
            <tr height="35">
                <th colspan="4">Jadwal ujian</th>
            </tr>
            <tr height="40">
                <th>Tanggal</th>
                <th>Jam (WITA)</th>
                <th>Kegiatan</th>
                <th>Ruangan</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td rowspan="2">
                    <?= $jadwalujian[0] ?>
                </td>
                <td>09:00 - 10:00</td>
                <td>Validasi kartu ujian</td>
                <td rowspan="2"><?= $camaba['ruanganujian'] ?></td>
            </tr>
            <tr>
                <td>10:00 - 12:00</td>
                <td>Tes Wawancara dan Qiroatil Qur`an</td>
            </tr>
        </tbody>
    </table>

    <div class="mx-5">
        <h6 class="fw-bold">Catatan :</h6>
        <ol>
            <li>Lokasi ujian bertempat di Kampus 2 UM Bulukumba, Jl. Poros Bulukumba - Bantaeng Kel. Jalanjang Kec. Gantarang.</li>
            <li>Berpakaian sopan dan rapi (Hitam Putih).</li>
            <li>Mematuhi protokol kesehatan.</li>
        </ol>
    </div>
</main>

<?php $this->endSection() ?>