<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>


<div class="container validasi bg-white py-5 my-3 rounded-3 px-md-5">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center">INFORMASI BIODATA</h1>
            <h4 class="text-center">Calon Mahasiswa Baru UM Bulukumba </h4>
            <h5 class="text-center">Tahun Akademik 2022-2023</h5>
        </div>
    </div>

    <div class="border border-warning p-2 mx-md-5 mt-3 rounded-3 pb-4 text-center">
        <img src="/img/assets/umb.png" width="85">
        <h4 class="my-2 text-primary"><b>LIPMB UMB</b></h4>
        <h5>Silahkan validasi kembali data anda </h5>
    </div>

    <div class="border border-warning p-2 mx-md-5 mt-5 rounded-3 pb-4">
        <div class="alert alert-primary" role="alert">
            Data Diri
        </div>

        <div class="row px-3 ">
            <div class="text-end col-md-6">
                <h5>Nama Lengkap :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi['nama'] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Nomor Induk Keluarga :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi['ktp'] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Tempat/Tanggal Lahir :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi['tempatlahir'] ?>, <?= $validasi['tanggallahir'] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Jenis Kelamin :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi['jk'] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Alamat Email :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi['email'] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>No WhatsApp :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi['wa'] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Agama :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi['agama'] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Alamat :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi['alamat'] ?>, Desa <?= $hpw[3] ?>, Kec. <?= $hpw[2] ?>, Kab. <?= $hpw[1] ?>, <?= $hpw[0] ?></h5>
            </div>


        </div>
    </div>

    <div class="border border-warning p-2 mx-md-5 mt-5 rounded-3 pb-4">
        <div class="alert alert-primary" role="alert">
            Data Orang Tua Kandung
        </div>

        <div class="row px-3">
            <div class="text-end col-md-6">
                <h5>Nama Ayah :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["namaayah"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Nama Ibu :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["namaibu"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Pekerjaan Ayah :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["pekerjaanayah"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Pekerjaan Ibu :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["pekerjaanibu"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>No Hp Ayah :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["hpayah"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>No Hp Ibu :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["hpibu"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Gaji Ayah :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["gajiayah"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Gaji Ibu :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["gajiibu"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Jumlah Bersaudara :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["bersaudara"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Anak ke :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["anakke"] ?></h5>
            </div>
        </div>
    </div>

    <div class="border border-warning p-2 mx-md-5 mt-5 rounded-3 pb-4">
        <div class="alert alert-primary" role="alert">
            Data Pendidikan
        </div>

        <div class="row px-3">
            <div class="text-end col-md-6">
                <h5>Asal Sekolah :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["sekolah"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>NISN :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["nisn"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Jurusan :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["jurusan"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Tahun Tamat :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["tahuntamat"] ?></h5>
            </div>
        </div>
    </div>

    <div class="border border-warning p-2 mx-md-5 mt-5 rounded-3 pb-4">
        <div class="alert alert-primary" role="alert">
            Pilihan
        </div>

        <div class="row px-3">
            <div class="text-end col-md-6">
                <h5>Pilihan Kuliah :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["pilihankuliah"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Pilihan Prodi 1 :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["pilihanprodi1"] ?></h5>
            </div>


            <div class="text-end col-md-6">
                <h5>Pilihan Prodi 2 :</h5>
            </div>
            <div class="col-md-6 mb-3 mb-md-1">
                <h5><?= $validasi["pilihanprodi2"] ?></h5>
            </div>
        </div>
    </div>

    <div class="border border-warning p-2 mx-md-5 mt-5 rounded-3 pb-4">
        <div class="alert alert-primary" role="alert">
            Deskripsi Diri
        </div>

        <div class="row px-3">
            <p><?= $validasi["deskripsi"] ?></p>
        </div>
    </div>


    <div class="col-md-2 offset-md-10 mt-5">
        <form action="pendaftaran-firstregistration/kmz_165" method="post" class="d-inline">
            <?= csrf_field() ?>
            <input type="hidden" value="<?= $strData ?>" name="datacamaba">
            <button class="btn btn-primary d-inline" type="submit" name="daftarcamaba">Daftar</button>
        </form>
        <a href="/pendaftaran-registrasi" class="btn btn-secondary d-inline" name="daftarcamaba">Reset</a>
    </div>

    </form>
</div>

<?php $this->endSection() ?>