<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Database Pendaftaran Calon Mahasiswa Baru</h1>

        <div class="btn-toolbar mb-2 mb-md-0">

            <select class="form-select form-select-sm" style="width: 135px;" id="filter-gel">
                <option value="">Pilih Gel.</option>
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
                    <th>Waktu Daftar</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>No Peserta</th>
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
                    <th>Jenis Pilihan Kuliah</th>
                    <th>Telah diedit oleh</th>
                </tr>
            </thead>
            <tbody id="getforfilter">
                <?= $this->include('admin/tbody-pendaftaran'); ?>
            </tbody>
        </table>
    </div>

</main>


<?php $this->endSection() ?>