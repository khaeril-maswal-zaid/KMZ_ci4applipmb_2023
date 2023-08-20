<?php $this->extend('layout/template') ?>

<?php $this->section('content');
//dd($conftahapan) 
?>

<div class="container">
    <div class="row mb-md-4">
        <div class="col-md-10 offset-md-1 bg-white my-md-5 py-4 py-md-5 px-md-5 rounded-3 border">
            <h1 class="text-center h2">Syarat & Prosedur <br> Pendaftaran Calon Mahasiswa Baru</h1>
            <h5 class="text-center">Universitas Muhammadiyah Bulukumba Tahun Akademik <?= date('Y') ?> - <?= date('Y') + 1 ?></h5>

            <?= $confwebmodel['sppcamaba'] ?>

            <div class="overflow-auto">
                <table class="table table-bordered mt-5  text-center" id="JP">
                    <thead>
                        <tr class="table-warning">
                            <th colspan="4">
                                <h6><b>JADWAL PENDAFTARAN</b></h6>
                            </th>
                        </tr>

                        <tr class="table-warning">
                            <th scope="col">PRIODE</th>
                            <th scope="col">PENDAFTARAN</th>
                            <th scope="col">UJIAN</th>
                            <th scope="col">PENGUMUMAN</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="table-info">
                            <td scope="col">Gelombang I</td>
                            <td scope="col" class="text-start"><?= kelenderina($conftahapan['awal_gel_1']) ?>- <?= kelenderina($conftahapan['akhir_gel_1']) ?></td>
                            <td scope="col"><?= kelenderina($conftahapan['test_gel_1']) ?></td>
                            <td scope="col"><?= kelenderina($conftahapan['pengu_gel_1']) ?></td>
                        </tr>

                        <tr class="table-info">
                            <td scope="col">Gelombang II</td>
                            <td scope="col" class="text-start"><?= kelenderina($conftahapan['awal_gel_2']) ?>- <?= kelenderina($conftahapan['akhir_gel_2']) ?></td>
                            <td scope="col"><?= kelenderina($conftahapan['test_gel_2']) ?></td>
                            <td scope="col"><?= kelenderina($conftahapan['pengu_gel_2']) ?></td>
                        </tr>

                        <tr class="table-info">
                            <td scope="col">Gelombang III</td>
                            <td scope="col" class="text-start"><?= kelenderina($conftahapan['awal_gel_3']) ?>- <?= kelenderina($conftahapan['akhir_gel_3']) ?></td>
                            <td scope="col"><?= kelenderina($conftahapan['test_gel_3']) ?></td>
                            <td scope="col"><?= kelenderina($conftahapan['pengu_gel_3']) ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>




<?php $this->endSection() ?>