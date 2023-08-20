<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>

<div class="container">
    <div class="row mb-md-4">
        <div class="col-md-10 offset-md-1 bg-white my-md-5 py-4 py-md-5 px-md-5 rounded-3 border">
            <h1 class="text-center h2">Laman Pengumuman <br> Hasil Seleksi Calon Mahasiswa Baru</h1>
            <h5 class="text-center mb-4">Universitas Muhammadiyah Bulukumba Tahun Akademik <?= date('Y') ?> - <?= date('Y') + 1 ?></h5>

            <div class="bg-white my-2 p-2 border border-warning rounded-top">
                <div class="alert alert-success">
                    <strong class="">SELAMAT ANDA DINYATAKAN LULUS</strong>
                </div>

                <div class="row px-3">
                    <div class="col-md-3 p-0 text-center mb-2">
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
                        <div class="row">
                            <div class="col-md-4">
                                <span class="fw-bold">Program Study :</span>
                            </div>
                            <div class="col-md-7 mb-2">
                                <span class="fw-bold"><?= $datarow["prodilulus"] ?></span>
                            </div>
                        </div>

                        <div class=" text-center">
                            <div class="mt-3">
                                <span>Persyaratan dan alur pendaftaran ulang dapat dilihat
                                    <a href="/alur-pendaftaran-ulang">disini</a>
                                </span>
                            </div>
                            <div class="mt-0">
                                <span>Anda dapat mencetak kembali Kartu Test anda
                                    <a href="/pendaftaran-byaccount">disini</a>
                                </span>
                            </div>
                            <div class="d-grid my-3">
                                <a href="<?= $linkskpengumuman['linkskpengumuman'] ?>" class="btn btn-primary btn-block">Unduh SK Pengumuman</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Row Luar -->
            </div>

            <div class="row">
                <div class="col-sm">
                    <a href="/pengumuman-pendaftaran" class="btn btn-primary btn-block">Kembali ke pencarian</a>
                </div>
            </div>

        </div>
    </div>
</div>




<?php $this->endSection() ?>