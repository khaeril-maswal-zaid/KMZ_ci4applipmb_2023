<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>



<main id="trg-exp-pdf" class="container">
    <section class="row">
        <div class="col-md-8 offset-md-2 overflow-auto my-md-5">
            <div class="px-4 py-5 rounded-3 bg-white" id="target-pdf" style="min-width: 753px!important;">
                <div class="row">
                    <div class="col-3 mb-1">
                        <img src="/img/assets/umb.png" alt="logoumb" width="80" class="float-end">
                    </div>
                    <div class="col-7">
                        <h1 class="text-center h5 fw-bold">
                            LEMBAGA INFORMASI<br>
                            DAN PENERIMAAN MAHASISWA BARU<br>
                            UNIVERSITAS MUHAMMADIYAH BULUKUMBA
                        </h1>
                    </div>
                </div>

                <hr class="my-0 kop-kartupeserta mx-5" style="border: 2px solid;">
                <hr class="kop-kartupeserta mx-5 mb-5" style="border: 1px solid; margin-top:1px">

                <div class="row text-center mt-4">
                    <h5 class="fw-bold text-decoration-underline">Kartu Peserta Ujian</h5>
                </div>

                <div class="row mt-4">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-6 text-end">
                                No Peserta :
                            </div>
                            <div class="col-6 fw-bold">
                                <?= $camaba['nomorpeserta'] ?>
                            </div>

                            <div class="col-6 text-end">
                                Nama :
                            </div>
                            <div class="col-6">
                                <?= $camaba['nama'] ?>
                            </div>

                            <div class="col-6 text-end">
                                Jenis Kelamin :
                            </div>
                            <div class="col-6">
                                <?= $camaba['jeniskelamin'] ?>
                            </div>

                            <div class="col-6 text-end">
                                Tanggal Lahir :
                            </div>
                            <div class="col-6">
                                <?= $camaba['tanggallahir'] ?>
                            </div>

                            <div class="col-6 text-end">
                                Nomor WA :
                            </div>
                            <div class="col-6">
                                <?= $camaba['nohp'] ?>
                            </div>

                            <div class="col-6 text-end">
                                Pilihan Kuliah :
                            </div>
                            <div class="col-6 fw-bold">
                                <?= $camaba['jeniskuliah'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="/img/fotocamaba<?= date('Y') ?>/<?= $camaba['foto'] ?>" width="85">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-5 offset-1">
                        <h6 class="fw-bold">Program Studi Pilihan :</h6>
                        <h6>Pilihan 1 : <?= $camaba['prodi1'] ?></h6>
                        <h6>Pilihan 2 : <?= $camaba['prodi2'] ?></h6>
                    </div>

                    <div class="col-5">
                        <h6 class="fw-bold">Saat ujian peserta wajib membawa :</h6>
                        <ol>
                            <li>Kartu ujian ini</li>
                            <li>Tanda pengenal (KTP/ SIM / KTS)</li>
                            <li>Pensil 2B dan Alat Tulis lainnya</li>
                        </ol>
                    </div>
                </div>

                <div class="row my-4">
                    <div class="#">
                        <table class="text-center table align-middle table-bordered table-fluid">
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

                        <h6 class="fw-bold">Catatan :</h6>
                        <ol>
                            <li>Lokasi ujian bertempat di Kampus 2 UM Bulukumba, Jl. Poros Bulukumba - Bantaeng Kel. Jalanjang Kec. Gantarang.</li>
                            <li>Berpakaian sopan dan rapi (Hitam Putih).</li>
                            <li>Mematuhi protokol kesehatan.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-10 mb-4">
            <a href="/viewpdf/download/kartu-peserta" target="_blank" class="btn btn-danger my-4 bt-sm float-end" id="tombol-pdfX">Unduh PDF</a>
            <!-- <button type="" class="btn btn-danger my-4 bt-sm float-end" id="tombol-pdf">Unduh PDF</button> -->

        </div>
    </section>

</main>


<?php $this->endSection() ?>