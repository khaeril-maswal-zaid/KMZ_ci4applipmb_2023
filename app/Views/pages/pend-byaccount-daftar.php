<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>

<div class="container my-md-5 rounded-3 bg-white p-md-5 p-3">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Form Pendaftaran Calon Mahasiswa Baru</h1>
            <h5 class="text-center">Universitas Muhammadiyah Bulukumba Tahun Akademik <?= date('Y') ?> - <?= date('Y') + 1 ?></h5>
        </div>
    </div>

    <?php if (session()->getFlashdata('oops')) : ?>
        <div class="alert-akun mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </symbol>
            </svg>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    <?= session()->getFlashdata('oops') ?>
                </div>
            </div>
        </div>
    <?php endif ?>

    <form action="/pendaftaran-secondregistration/<?= $camaba['id'] ?>" method="post" class="needs-validation" novalidate>
        <?= csrf_field() ?>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="border border-warning p-2 mt-md-5 mt-3 rounded-3 pb-4">
                    <div class="alert alert-primary fw-bold" role="alert">
                        Data Diri
                    </div>

                    <div class="row px-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="aa" class="form-label">Nama Lengkap :</label>
                                <input type="" readonly class="form-control" value="<?= $camaba['nama'] ?>" name="nama" id="nama">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="bb" class="form-label">NIK :</label>
                                <input type="" readonly class="form-control" value="<?= $camaba['nik'] ?>" name="nik" id="nik">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="border border-warning p-2 rounded-3 pb-4 pb-4  mt-3">
                            <div class="alert alert-primary fw-bold" role="alert">
                                Unggah Foto
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" required name="foto" id="photocamaba">
                                <div class="invalid-feedback">
                                    Isi bagian ini
                                </div>
                            </div>

                            <div id="uploaded_image1" height="52" width="147" class="text-center">
                                <span class="fw-bold">Contoh Photo Peserta </span> <br>
                                <img src="/img/assets/maba.png" height="50" width="140" class="img-thumbnail">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="border border-warning p-2 rounded-3 pb-4 pb-4  mt-3">
                            <div class="alert alert-primary fw-bold" role="alert">
                                Tentukan Pilihan
                            </div>

                            <div class="mb-3">
                                <label for="zzx" class="form-label">Pilihan Kuliah :</label>
                                <select class="form-select" id="zzx" required name="pilihankuliah">
                                    <option selected disabled value="">Pilih</option>
                                    <option>Reguler</option>
                                    <option>Non Reguler</option>
                                </select>
                                <div class="invalid-feedback">
                                    Isi bagian ini
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="selectprdodi1" class="form-label">Pilihan Prodi 1 :</label>
                                <select class="form-select" id="selectprdodi1" required name="pilihanprodi1">
                                    <option selected disabled value="">Pilih</option>

                                    <?php foreach ($prodi as $prd) : ?>
                                        <option><?= $prd['fakultas'] ?> <?= $prd['prodifull'] ?></option>
                                    <?php endforeach ?>

                                </select>

                                <div class="invalid-feedback">
                                    Isi bagian ini
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="selectprdodi2" class="form-label">Pilihan Prodi 2 :</label>
                                <select class="form-select" id="selectprdodi2" required name="pilihanprodi2">
                                    <option selected disabled value="">Pilih</option>

                                    <?php foreach ($prodi as $prd) : ?>
                                        <option><?= $prd['fakultas'] ?> <?= $prd['prodifull'] ?></option>
                                    <?php endforeach ?>

                                </select>

                                <div class="invalid-feedback">
                                    Isi bagian ini
                                </div>
                            </div>
                            <div class="pringatansamaprodi text-danger mt-2"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="border border-warning p-2 rounded-3 pb-4 pb-4  mt-3">
                            <div class="alert alert-primary fw-bold" role="alert">
                                Alasan Memilih Kampus UM Bulukumba
                            </div>

                            <div class="form-label">
                                <textarea name="alasan" rows="9" style="width: 100%;" required></textarea>
                                <div class="invalid-feedback">
                                    Isi bagian ini
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div class="col-md-4">-->
                    <!--    <div class="border border-warning p-2 rounded-3 pb-4 pb-4  mt-3">-->
                    <!--        <div class="alert alert-primary fw-bold" role="alert">-->
                    <!--            Unggah Raport (Pdf) *Tidak Wajib-->
                    <!--        </div>-->
                    <!--        <div class="mb-3">-->
                    <!--            <input type="file" class="form-control" name="raport">-->
                    <!--        </div>-->

                    <!--        <div id="uploaded_image1" class="text-center">-->
                    <!--            <span class="fw-bold">Contoh Sampul Raport </span> <br>-->
                    <!--            <img src="/img/assets/df2.jpg" class="img-thumbnail" style="height: 148px;">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="col-md-2 offset-md-10 mt-4 text-end">
                        <button class="btn btn-primary" type="submit" name="daftarcamaba">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>





<?php $this->endSection() ?>