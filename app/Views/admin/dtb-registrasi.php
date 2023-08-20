<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Database Registrasi Calon Mahasiswa Baru</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <select class="form-select form-select-sm" style="width: 135px;" id="filter-gel" disabled>
                <!-- di Registrasi belum ada gelombang -->
                <option value="">Semua Gel.</option>
                <option value="gel-1">Gelombang 1</option>
                <option value="gel-2">Gelombang 2</option>
                <option value="gel-3">Gelombang 3</option>
            </select>

            <select class="form-select form-select-sm mx-1" style="width: 135px;" id="filter-prodi1">
                <option value="">All Prodi Pil. 1</option>
                <?php foreach ($fakultasprodiall as $prodi) : ?>
                    <option value="<?= $prodi['fakultas'] ?> <?= $prodi['prodifull'] ?>"><?= $prodi['prodi'] ?></option>
                <?php endforeach ?>
            </select>

            <select class="form-select form-select-sm mx-1" style="width: 135px;" id="filter-prodi2">
                <option value="">All Prodi Pil. 2</option>
                <?php foreach ($fakultasprodiall as $prodi) : ?>
                    <option value="<?= $prodi['fakultas'] ?> <?= $prodi['prodifull'] ?>"><?= $prodi['prodi'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>

    <div class="table-responsive">
        <table id="example" class="table table-sm table-bordered table-striped" style="min-width:6000px;">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Waktu Registrasi</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat / Taggal Lahir</th>
                    <th>No Hp (WA)</th>
                    <th>Alamat</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                    <th>Provinsi</th>
                    <th>Email</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Pekerjaan Ibu</th>
                    <th>No Hp Ayah</th>
                    <th>No Hp Ibu</th>
                    <th>Gaji Ayah</th>
                    <th>Gaji Ibu</th>
                    <th>Anak ke</th>
                    <th>Jumlah Bersaudara</th>
                    <th>NISN</th>
                    <th>Asal Sekolah</th>
                    <th>Jurusan</th>
                    <th>Tahun Lulus</th>
                    <th>Prodi Pilihan 1</th>
                    <th>Prodi Pilihan 2</th>
                    <th>Jenis Kuliah</th>
                    <th>Akun By</th>
                </tr>
            </thead>
            <tbody id="getforfilter">
                <?= $this->include('admin/tbody-registrasi'); ?>
            </tbody>
        </table>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">LIPMB UMB</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="post" class="form-set-akun">
                    <!-- Atribut action dibuat melalaui jQuery -->

                    <?= csrf_field() ?>

                    <div class="modal-body pt-2 pb-4 text-center">
                        <div class="form-signin">
                            <img class="mb-4" src="/img/assets/umb.png" alt="umb.png" width="72">
                            <h1 class="h3 fw-normal">Tentukan Akun Peserta</h1>

                            <h6 class="fw-normal nama-peserta text-primary">Diisi dengan jQuery</h6>
                            <h6 class="fw-normal nik-peserta text-primary">Diisi dengan jQuery</h6>

                            <div class="form-floating mt-4">
                                <input type="text" class="form-control" id="floatingUsername" name="username" required>
                                <label for="floatingInput">Username Peserta</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="password" required>
                                <label for="floatingPassword">Password Peserta</label>
                            </div>

                            <div class="mb-0 mt-4 form-check form-switch">
                                <input class="form-check-input" name="notifEmail" type="checkbox" id="notifEmail" checked style="width:3rem; height:1.5rem">
                                <label class="form-check-label mt-1" for="notifEmail">Berikan Notifikasi ke Email Peserta</label>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="w-100 btn btn-lg btn-primary" type="submit" name="setakunpeserta">Set Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>


<?php $this->endSection() ?>