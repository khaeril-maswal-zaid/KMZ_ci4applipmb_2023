<?php $this->extend('layout/template') ?>

<?php $this->section('content'); ?>

<div class="container">
    <div class="row mb-md-4">
        <div class="col-md-10 offset-md-1 bg-white my-md-5 py-4 py-md-5 px-md-5 rounded-3 border">
            <h1 class="text-center h2">Laman Pengumuman <br> Hasil Seleksi Calon Mahasiswa Baru</h1>
            <h5 class="text-center mb-4">Universitas Muhammadiyah Bulukumba Tahun Akademik <?= date('Y') ?> - <?= date('Y') + 1 ?></h5>


            <div class="bg-white my-2 p-2 border border-warning rounded-top">
                <div class="alert alert-danger">
                    <strong class="">MOHON MAAF, &nbsp; PESERTA DENGAN IDENTITAS : </strong>
                </div>

                <div class="row px-3">
                    <div class="col-md-3 p-0 text-center  mb-2">
                        <img src="/img/fotocamaba2023/<?= $datarow["foto"] ?>" style="width: 85%;" class="img-thumbnail">
                    </div>

                    <div class="col-md-9 bg-light pt-3 border">
                        <div class="row">
                            <div class="col-md-4">
                                <span>Nomor Peserta :</span>
                            </div>
                            <div class="col-md-7 mb-2">
                                <span><?= $datarow["nomorpeserta"] ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <span>Nama Lengkap :</span>
                            </div>
                            <div class="col-md-7 mb-2">
                                <span><?= $datarow["nama"] ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <span>Tanggal Lahir :</span>
                            </div>
                            <div class="col-md-7 mb-2">
                                <span><?= kelenderina($datarow["tanggallahir"]) ?></span>
                            </div>
                        </div>

                        <div class="text-center col-md mt-4">
                            <h5 class="text-danger p-0 m-0 fw-bold">DINYATAKAN TIDAK LULUS</h5>
                            <h6 class="fw-bold">Jangan Putus Asa dan Tetap Semangat !!!</h6>
                            <h6 class="my-3">Anda masih bisa mendaftar kembali di Gelombang berikutnya </h6>
                        </div>
                    </div>

                </div><!-- Row Luar -->

            </div> <!-- Garis Kuning -->

            <div class="row">
                <div class="col-sm">
                    <a href="/pengumuman-pendaftaran" class="btn btn-primary btn-block">Kembali ke pencarian</a>
                </div>
            </div>

        </div>
    </div>
</div>




<?php $this->endSection() ?>