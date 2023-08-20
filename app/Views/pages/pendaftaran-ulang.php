<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>



<div class="container">
    <div class="row mb-md-4">
        <div class="col-md-10 offset-md-1 bg-white my-md-5 py-4 py-md-5 px-md-5 rounded-3 border">
            <h1 class="text-center h2">Informasi Pendaftaran Ulang Calon Mahasiswa Baru</h1>
            <h5 class="text-center mb-5">Universitas Muhammadiyah Bulukumba Tahun Akademik <?= date('Y') ?> - <?= date('Y') + 1 ?></h5>

            <?= $confwebpendulangmodel['pendulang'] ?>
        </div>
    </div>
</div>




<?php $this->endSection() ?>