<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Set Pengumuman Mahasiswa Baru</h1>

        <div class="btn-toolbar mb-2 mb-md-0">

            <select class="form-select form-select-sm" style="width: 135px;" id="filter-gel">
                <option value="">Semua Gel.</option>
                <option value="gel-1">Gelombang 1</option>
                <option value="gel-2">Gelombang 2</option>
                <option value="gel-3">Gelombang 3</option>
            </select>
        </div>
    </div>

    <div class="table-responsive">
        <table id="example" class="table table-sm table-bordered table-striped" style="width:100%;">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor Peserta</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kuliah</th>
                    <th>hasil Prodi Lulus</th>
                </tr>
            </thead>
            <tbody id="getforfilter">
                <?= $this->include('admin/tbody-hasil-prodi-lulus'); ?>
            </tbody>
        </table>
    </div>

</main>


<?php $this->endSection() ?>