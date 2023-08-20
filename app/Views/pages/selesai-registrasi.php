<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>


<div class="container pt-4 px-md-5">
    <h1 class="text-center h2">SLIP INFORMASI PEMBAYARAN PENDAFATARAN</h1>
    <h5 class="text-center">Calon Mahasiswa Baru Universitas Muhammadiyah Bulukumba </h5>
    <h6 class="text-center">Tahun Akademik <?= date('Y') ?> - <?= date('Y') + 1 ?></h6>

    <div class="bg-white my-4 border border-warning rounded-3 mx-md-5">
        <div class="row">
            <div class="col-sm-12 text-center pt-4">
                <img src="/img/assets/umb.png" width="85">
                <h4 class="mt-3 mb-2 text-primary fw-bold">LIPMB UMB</h4>
                <p class="px-md-5 px-3">
                    Terima kasih telah melakukan pendaftaran di UM Bulukumba Selanjutnya silahkan melakukan pembayaran pendaftaran di Bank Syariah Indonesia atau Transfer ke No Rek. <span class="text-info">1506201302.</span> an. <span class="text-info"> Universitas Muhammadiyah Bulukumba </span>
                    <br><br>
                    Kemudian konfirmasi di No WA <?= $akunwa['wa'] ?> (<?= $akunwa['nama'] ?>) <span class="text-danger"> Sebagai syarat untuk mendapatkan username dan Password Akun Pendaftaran </span>
                </p>
            </div>
        </div>
    </div>

    <div class="bg-white my-3 px-md-5 px-2 border border-warning rounded-3 mx-md-5">
        <div class="row">
            <div class="col-12 text-center">
                <h5 class="mt-3 mb-2 fw-bold">CATATAN :</h5>
            </div>
        </div>

        <ul>
            <li>Transfer dapat dilakukan dari BANK manapun.</li>
            <li>
                <span>Kode BSM</span> <span class=" text-info">451 </span>
                <span class=" text-danger">(Khusus yang transfer dari Non BANK Syariah Indonesia).</span>
            </li>
            <li>
                <span>Jika transfer menggunakan via Non Teller (</span>
                <span class="text-info">ATM, Link, Bangkin, Mobile</span>
                <span>) maka tidak dianjurkan menggunakan</span>
                <span class="text-danger">selain dari pada milik peserta atau milik Orang Tua.</span>
            </li>
            <li>
                <span>Konfirmasi pembayaran harus menggunakan No HP dari Peserta Pendaftar</span>
            </li>
        </ul>

    </div>

    <div class="bg-white my-3 p-2 border border-warning rounded-3 mx-md-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h5 class="mt-3 mb-2 fw-bold">INFORMASI AKUN ANDA :</h5>
            </div>
        </div>

        <div class="row p-2 selesaidaftar-informasiakun">
            <div class="col-4 text-end">
                <h5>Nama</h5>
            </div>
            <div class="col-7 mx-0 px-0">
                <h5> : <?php echo $peserta[0]; ?>
            </div>

            <div class="col-4 text-end">
                <h5>NO HP</h5>
            </div>
            <div class="col-7 mx-0 px-0">
                <h5> : <?php echo $peserta[1]; ?> </h5>
            </div>

            <div class="col-4 text-end">
                <h5>Username</h5>
            </div>
            <div class="col-7 mx-0 px-0">
                <h5> : (Silahkan membayar terlebih dahulu)</h5>
            </div>

            <div class="col-4 text-end">
                <h5>Password</h5>
            </div>
            <div class="col-7 mx-0 px-0">
                <h5> : (Silahkan membayar terlebih dahulu)</h5>
            </div>
        </div>
    </div>

    <div class="bg-white my-3 p-2 border border-warning rounded-3 mx-md-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h5 class="mt-3 mb-2 fw-bold">NOMINAL PEMBAYARAN :</h5>
            </div>

            <div class="col-sm-12 text-center">
                <h3 class="text-danger 150 mt-2 fw-bold">Rp.<?= $akunwa['biaya'] ?></h3>
                <h4 class="text-info"><i><?= $akunwa['terbilang'] ?></i></h4>
            </div>
        </div>
    </div>

    <div class="bg-white my-3 p-2 pb-4 border border-warning rounded-3 mx-md-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h5 class="mt-3 mb-2 fw-bold">FORMAT KONFIMASI PENDAFATARAN :</h5>
            </div>

            <div class="text-center col-sm-12">
                <h5 class="mt-2">
                    Salam.<br>
                    Nama : (Nama Anda)<br>
                    NIK : (Nik Anda)<br>
                    No HP : (No HP Anda)<br>
                    (Lampiran File Slip Pembayaran)

                    <br><br>

                    Contoh : <br>
                    Assalamualaikum Warahmatullahi Wabaraqatuh. <br>
                    Nama : Sarly Asri<br>
                    NIK : 7302070703001112<br>
                    No HP : 085343652494
                </h5>
                <a href="https://api.whatsapp.com/send?phone=<?= $akunwa['wa'] ?>&text=Assalamualaikum%20Warahmatullahi%20Wabaraqatuh.%0A%0ASaya%20calon%20mahasiswa%20baru%20*Universitas%20Muhammadiyah%20Bulukumba*%20mau%20melakukan%20komfirmasi%20pembayaran%20pendaftaran%20sebesar%20*<?= $akunwa['biaya'] ?>*.%0A%0A_Dengan%20identitas%20:_%0ANama%20%20%20:%20<?= $peserta[0]; ?>%0ANIK%20%20%20%20%20%20%20:%20<?= $peserta[2]; ?>%0ANo%20Hp%20%20:%20<?= $peserta[1]; ?>%0A%0A@LIPMB-Team">Atau klik disini!</a>
            </div>
        </div>
    </div>

</div> <!-- End Container -->



<?php $this->endSection() ?>