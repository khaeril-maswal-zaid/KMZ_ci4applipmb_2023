<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Biodata Lengkap Calon Mahasiswa Baru</h1>

        <a href="/viewpdf/download/cv-peserta/" class="btn btn-sm btn-danger me-2">Unduh PDF</a>
    </div>

    <div id="kartuPeserta">
        <div class="rounded shadow position-relative bg-white pt-5" style="min-height: 1122.5px;">
            <section class="position-relative">
                <div class="row">
                    <div class="offset-sm-8 col-sm-6">
                        <h5>Tgl dfr. <?= $detail['tanggaldaftar']; ?></h5>
                    </div>

                    <div class="col-md-4 offset-md-1">
                        <h3 class="fw-bold">Biodata lengkap</h3>
                    </div>

                    <div class="offset-sm-3 col-sm-4">
                        <h6>No Pst. <b><?= $detail['nomorpeserta']; ?></b></h6>
                    </div>

                    <div class="text-center px-4">
                        <hr class="mt-0 mb-0 mx-5 border border-3">
                        <hr class="mt-1 mb-0 mx-5">
                    </div>
                </div>
            </section>

            <section class="position-relative">
                <div class="row mt-4">
                    <div class="offset-1">
                        <h5 style="max-width:210px" class="text-white py-1 px-2 border border-warning rounded bg-primary shadow">Data diri pribadi : </h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 offset-1">
                        <ul class="pl-3">
                            <li>NIK</li>
                            <li>Nama Lengkap</li>
                            <li>Tempat / Tanggal Lahir</li>
                            <li>Jenis Kelamin</li>
                            <li>Email</li>
                            <li>No Hp / WA</li>
                            <li>Agama</li>
                            <li>Alamat</li>
                        </ul>
                    </div>

                    <div class="col-4">
                        <div>: <span class="fw-bold"><?= $detail['nik']; ?></span></div>
                        <div>: <?= $detail['nama']; ?></div>
                        <div>: <?= $detail['tempatlahir']; ?>, <?= KelenderIna($detail['tanggallahir']); ?></div>
                        <div>: <?= $detail['jeniskelamin']; ?></div>
                        <div>: <?= $detail['email']; ?></div>
                        <div>: <?= $detail['nohp']; ?></div>
                        <div>: Islam</div>
                        <div>: <?= $detail['alamat']; ?>, Kec. <?= $detail['kecamatan']; ?>, Kab. <?= $detail['kabupaten']; ?></div>
                    </div>

                    <div class="col-3">
                        <div class="overflow-hidden" style="max-width: 120.4px; max-height: 189px;">
                            <img src="https://lipmb.umbulukumba.ac.id/img/fotocamaba2023/<?= $detail['foto']; ?>" height="180">
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="offset-1">
                        <h5 style="max-width:210px" class="text-white py-1 px-2 border border-warning rounded bg-primary shadow">Data diri Orang Tua : </h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 offset-1">
                        <ul class="pl-3">
                            <li>Nama Orang Tua :
                                <ul class="">
                                    <li>Ayah</li>
                                    <li>Ibu</li>
                                </ul>
                            </li>
                            <li>Pekerjaan Ortu :
                                <ul class="">
                                    <li>Ayah</li>
                                    <li>Ibu</li>
                                </ul>
                            </li>
                            <li>No HP Ortu :
                                <ul class="">
                                    <li>Ayah</li>
                                    <li>Ibu</li>
                                </ul>
                            </li>
                            <li>Gaji Ortu :
                                <ul class="">
                                    <li>Ayah</li>
                                    <li>Ibu</li>
                                </ul>
                            </li>
                            <li>Jumlah Saudara</li>
                            <li>Anak ke</li>
                        </ul>
                    </div>

                    <div class="col-6">
                        <br>
                        <div>: <?= $detail['namaayah']; ?></div>
                        <div>: <?= $detail['namaibu']; ?></div>
                        <br>
                        <div>: <?= $detail['pekerjaanayah']; ?></div>
                        <div>: <?= $detail['pekerjaanibu']; ?></div>
                        <br>
                        <div>: <?= $detail['hpayah']; ?></div>
                        <div>: <?= $detail['hpibu']; ?></div>
                        <br>
                        <div>: <?= $detail['gajiayah']; ?></div>
                        <div>: <?= $detail['gajiibu']; ?></div>
                        <div>: <?= $detail['bersaudara']; ?></div>
                        <div>: <?= $detail['anakke']; ?></div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="offset-1">
                        <h5 style="max-width:210px" class="text-white py-1 px-2 border border-warning rounded bg-primary shadow">Data asal sekolah : </h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 offset-1">
                        <ul class="pl-3">
                            <li>NISN</li>
                            <li>Nama Sekolah</li>
                            <li>Jurusan</li>
                            <li>Tahun Lulus</li>
                        </ul>
                    </div>

                    <div class="col-6">
                        <div>: <?= $detail['nisn']; ?></div>
                        <div>: <?= $detail['namasekolah']; ?></div>
                        <div>: <?= $detail['jurusan']; ?></div>
                        <div>: <?= $detail['tahunlulus']; ?></div>
                    </div>
                </div>
            </section>

            <img class="background position-absolute opacity-5" src="/img/assets/umb.png" style="left: 210px;top: 310px;opacity: 0.06">
        </div>
    </div>

</main>
<?php $this->endSection() ?>