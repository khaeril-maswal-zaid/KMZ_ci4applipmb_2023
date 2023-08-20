<?php
$no = 1;
foreach ($camabapendaftaran as $cmball) :
?>
    <div class="card mb-2 p-1" style="max-width: 202px;">
        <div class="# border border-warning overflow-hidden rounded" style="height: 253px;">
            <img src="/img/fotocamaba<?= date('Y') ?>/<?= $cmball['foto'] ?>" class="card-img-top" alt="foto <?= $cmball['nama'] ?>">
        </div>
        <div class="card-body">
            <h6 class="card-title"><?= strtoupper($cmball['nama']) ?></h6>
            <span class="card-title"><?= kelenderina($cmball['tanggallahir']) ?></span>
            <p class="card-text m-0 mt-3">Pilihan Prodi 1 :</p>
            <p class="card-text m-0"><?= $cmball['prodi1'] ?></p>
            <p class="card-text mt-2 mb-0">Pilihan Prodi 2 : </p>
            <p class="card-text m-0"><?= $cmball['prodi2'] ?></p>
            <p class="text-white mt-2"><?= $no++ ?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted fw-bold"><?= $cmball['nomorpeserta'] ?></small>
        </div>
    </div>
<?php endforeach ?>