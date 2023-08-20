<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>

<script src="/js/hightchart/highcharts.js"></script>
<script src="/js/hightchart/exporting.js"></script>
<script src="/js/hightchart/export-data.js"></script>
<script src="/js/hightchart/accessibility.js"></script>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Chart Pendaftaran Mahasiswa Baru (Masih Bug)</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <select class="form-select form-select-sm" style="width: 135px;" id="filter-gel">
                <option value="">Pilih Gel.</option>
                <option value="gel-1">Gelombang 1</option>
                <option value="gel-2">Gelombang 2</option>
                <option value="gel-3">Gelombang 3</option>
            </select>
        </div>
    </div>

    <div class="row">
        <?php
        $labely = ['Gelombang', 'Jenis Kelamin',  'Tahun lahir', 'Provinsi', 'Tahun lulus', 'Jenis Kuliah', 'Pilihan 1', 'Pilihan 2'];
        $targety = ['gelombang', 'jeniskelamin',  'ylahir', 'provinsi', 'tahunlulus', 'jeniskuliah', 'prodi1', 'prodi2'];
        $count = count($targety);
        for ($i = 0; $i < $count; $i++) :
        ?>
            <div class="col-md-6">
                <div class="card mb-3">
                    <h5 class="card-header">Diagram <?= $labely[$i]; ?></h5>
                    <div class="card-body">
                        <figure class="highcharts-figure">
                            <div id="<?= $labely[$i]; ?>"></div>
                            <p class="highcharts-description">
                                Diagram <?= $labely[$i]; ?> Calon Mahasiswa Baru Universitas Muhammadiyah Bulukumba.
                            </p>
                        </figure>
                    </div>
                </div>

                <script type="text/javascript">
                    Highcharts.chart('<?= $labely[$i]; ?>', {
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'pie'
                        },
                        title: {
                            text: 'Diagram Calon Mahasiswa Baru'
                        },
                        subtitle: {
                            text: 'Data Camaba berdasarkan <?= $labely[$i]; ?>'
                        },
                        tooltip: {
                            pointFormat: '{point.percentage:.1f} %'
                        },
                        accessibility: {
                            point: {
                                valueSuffix: '%'
                            }
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.name} : <br> {point.y:.f} Mhs'
                                }
                            }
                        },
                        series: [{
                            name: 'Mahasiswa',
                            colorByPoint: true,
                            data: [
                                <?php
                                $nox = 0;

                                $rowy = [];

                                foreach ($grafikUmum['countValues'][$targety[$i]] as $data) {
                                    $rowy[] = $data;
                                }

                                foreach ($grafikUmum['unique'][$targety[$i]] as $provinsi) :
                                ?> {
                                        name: '<?= $provinsi; ?>',
                                        y: <?= $rowy[$nox++]; ?>
                                    },
                                <?php endforeach ?>

                            ]
                        }]
                    });
                </script>
            </div>
        <?php endfor; ?>

        <?php
        $label = ['Kecamatan',  'Kabupaten', 'Kab. di luar Sul-Sel'];
        $target = ['nmKecamatan',  'nmKabupaten', 'nmKabupatenExt'];
        $count = count($target);
        for ($i = 0; $i < $count; $i++) :
        ?>
            <div class="col-md-6">
                <div class="card mb-3">
                    <h5 class="card-header">Diagram <?= $label[$i]; ?></h5>
                    <div class="card-body">
                        <figure class="highcharts-figure">
                            <div id="<?= $label[$i]; ?>"></div>
                            <p class="highcharts-description">
                                Diagram <?= $label[$i]; ?> Calon Mahasiswa Baru Universitas Muhammadiyah Bulukumba.
                            </p>
                        </figure>
                    </div>
                </div>

                <script type="text/javascript">
                    Highcharts.chart('<?= $label[$i]; ?>', {
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'pie'
                        },
                        title: {
                            text: 'Diagram Calon Mahasiswa Baru'
                        },
                        subtitle: {
                            text: 'Data Berdasarkan <?= $label[$i]; ?>'
                        },
                        tooltip: {
                            pointFormat: '{point.percentage:.1f} %'
                        },
                        accessibility: {
                            point: {
                                valueSuffix: '%'
                            }
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.name} : <br> {point.y:.f} Mhs'
                                }
                            }
                        },
                        series: [{
                            name: 'Mahasiswa',
                            colorByPoint: true,
                            data: [
                                <?php
                                $nox = 0;

                                $row = [];

                                foreach ($grafikKhusus['countValues'][$target[$i]] as $data) {
                                    $row[] = $data;
                                }

                                foreach ($grafikKhusus['unique'][$target[$i]] as $provinsi) :
                                ?> {
                                        name: '<?= $provinsi; ?>',
                                        y: <?= $row[$nox++]; ?>
                                    },
                                <?php endforeach ?>

                            ]
                        }]
                    });
                </script>
            </div>
        <?php endfor; ?>
    </div>

</main>


<?php $this->endSection() ?>