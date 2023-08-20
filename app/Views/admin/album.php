<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Album Calon Masiswa Baru</h1>

        <div class="btn-toolbar mb-2 mb-md-0">

            <select class="form-select form-select-sm" style="width: 135px;" id="filter-gel">
                <option value="">Semua Gel.</option>
                <option value="gel-1">Gelombang 1</option>
                <option value="gel-2">Gelombang 2</option>
                <option value="gel-3">Gelombang 3</option>
            </select>

            <select class="form-select form-select-sm mx-1" style="width: 135px;" id="filter-prodi1">
                <option value="">All Prodi Pil. 1</option>
                <?php foreach ($fakultasprodiall as $prodi) : ?>
                    <option><?= $prodi['prodi'] ?></option>
                <?php endforeach ?>
            </select>

            <select class="form-select form-select-sm mx-1" style="width: 135px;" id="filter-prodi2">
                <option value="">All Prodi Pil. 2</option>
                <?php foreach ($fakultasprodiall as $prodi) : ?>
                    <option><?= $prodi['prodi'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 border mb-5 overflow-auto px-3 pt-2" style="max-height: 700px;">
                <div class="card-group">
                    <div class="row" id="getforfilter">
                        <?= $this->include('admin/card-album'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php $this->endSection() ?>