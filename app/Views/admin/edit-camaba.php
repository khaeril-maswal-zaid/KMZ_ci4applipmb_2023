<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-5">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center">Form Pendaftaran Calon Mahasiswa Baru</h1>
            <h5 class="text-center">Universitas Muhammadiyah Bulukumba Tahun Akademik <?= date('Y') ?> - <?= date('Y') + 1 ?></h5>
        </div>
    </div>

    <form action="/admin/edit/camaba/<?= $camabaedit['id'] ?>" method="POST" class="needs-validation" novalidate>
        <?= csrf_field() ?>
        <?php
        $pekerjaans = ['Kepala desa', 'Lurah', 'Camat', 'Bupati', 'Gubenur', 'Presiden', 'pedagang', 'PNS', 'Guru', 'Dokter', 'Dosen', 'Penjahit', 'Pengrajin', 'Koki', 'Polisi', 'TNI', 'Pilot', 'Petani', 'Nelayan', 'Perantau', 'Wiraswasta', 'Honorer', 'Ibu Rumah Tangga', 'Lainnya'];
        $gajis = ['Tidak berpenghasilan', 'Kurang dari Rp.500.001 per bulan', 'Rp.500.001 - Rp.1.000.000 per bulan', 'Rp.1.000.001 - Rp.2.000.000 per bulan', 'Rp.2.000.001 - Rp.3.000.000 per bulan', 'Rp.3.000.001 - Rp.4.000.000 per bulan', 'Rp.4.000.001 - Rp.5.000.000 per bulan', 'Rp.5.000.001 - Rp.6.000.000 per bulan', 'Rp.6.000.001 - Rp.7.000.000 per bulan', 'Rp.7.000.001 - Rp.8.000.000 per bulan', 'Rp.8.000.001 - Rp.9.000.000 per bulan', 'Rp.9.000.001 - Rp.10.000.000 per bulan', 'Lebih dari Rp. 10.000.000 per bulan'];
        ?>
        <div class="border border-warning p-2 mt-5 rounded-3 pb-4">
            <div class="alert alert-primary" role="alert">
                Data Diri
            </div>

            <div class="row px-3">
                <div class="col-md-7">
                    <div class="mb-3">
                        <label for="aa" class="form-label">Nama Lengkap :</label>
                        <input value="<?= $camabaedit['nama'] ?>" type="text" class="form-control" id="aa" required placeholder="Sesuaikan dengan Ijazah" name="nama">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="bb" class="form-label">NIK :</label>
                        <input value="<?= $camabaedit['nik'] ?>" type="text" class="form-control" id="bb" required placeholder="Sesuaikan dengan KTP / KK" name="ktp" maxlength="16" minlength="16">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>
            </div>

            <div class="row px-3">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="cc" class="form-label">Tempat Lahir :</label>
                        <input value="<?= $camabaedit['tempatlahir'] ?>" type="text" class="form-control" id="cc" required placeholder="Sesuaikan dengan Ijazah" name="tempatlahir">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="dd" class="form-label">Tanggal Lahir :</label>
                        <input value="<?= $camabaedit['tanggallahir'] ?>" type="date" class="form-control" id="dd" required placeholder="Sesuaikan dengan Ijazah" name="tanggallahir">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="ee" class="form-label">Email :</label>
                        <input value="<?= $camabaedit['email'] ?>" type="email" class="form-control" id="ee" required placeholder="Pastikan masih dalam keadaan aktif" name="email">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>
            </div>

            <div class="row px-3">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="ff" class="form-label">No WhatsApp :</label>
                        <input value="<?= $camabaedit['nohp'] ?>" type="text" class="form-control" id="ff" required placeholder="Pastikan selalu dalam keadaan aktif" name="wa">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="gg" class="form-label">Agama :</label>
                        <select class="form-select" id="gg" required name="agama">
                            <option selected disabled value="">Pilih</option>
                            <option <?php if ($camabaedit['agama'] == 'Islam') echo 'selected=' ?>>Islam</option>
                            <option <?php if ($camabaedit['agama'] == 'Kristen') echo 'selected=' ?>>Kristen</option>
                            <option <?php if ($camabaedit['agama'] == 'Katolik') echo 'selected=' ?>>Katolik</option>
                            <option <?php if ($camabaedit['agama'] == 'Hindu') echo 'selected=' ?>>Hindu</option>
                            <option <?php if ($camabaedit['agama'] == 'Budha') echo 'selected=' ?>>Budha</option>
                            <option <?php if ($camabaedit['agama'] == 'Lainnya') echo 'selected=' ?>>Lainnya</option>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="hh" class="form-label">Jenis Kelamin :</label>
                        <select class="form-select" id="hh" required name="jk">
                            <option selected disabled value="">Pilih</option>
                            <option <?php if ($camabaedit['jeniskelamin'] == 'Laki-laki') echo 'selected=' ?>>Laki-laki</option>
                            <option <?php if ($camabaedit['jeniskelamin'] == 'Perempuan') echo 'selected=' ?>>Perempuan</option>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>
            </div>

            <div class="row px-3">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="ffx" class="form-label">Provinsi :</label>
                        <input value="<?= $camabaedit['provinsi'] ?>" type="text" class="form-control" id="ffx" required name="provinsi">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="ffz" class="form-label">Kabupaten :</label>
                        <input value="<?= $camabaedit['kabupaten'] ?>" type="text" class="form-control" id="ffz" required name="kabupaten">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="ffzx" class="form-label">Kecamatan :</label>
                        <input value="<?= $camabaedit['kecamatan'] ?>" type="text" class="form-control" id="ffzx" required name="kecamatan">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="ffzx" class="form-label">Desa :</label>
                        <input value="<?= $camabaedit['alamat'] ?>" type="text" class="form-control" id="ffzx" required name="desa">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="border border-warning p-2 mt-4 rounded-3 pb-4">
            <div class="alert alert-primary" role="alert">
                Data Orang Tua
            </div>

            <div class="row px-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="mm" class="form-label">Nama Ayah :</label>
                        <input value="<?= $camabaedit['namaayah'] ?>" type="text" class="form-control" id="mm" required placeholder="Sesuaikan KK" name="namaayah">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nn" class="form-label">Nama Ibu :</label>
                        <input value="<?= $camabaedit['namaibu'] ?>" type="text" class="form-control" id="nn" required placeholder="Sesuaikan KK" name="namaibu">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>
            </div>

            <div class="row px-3">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="oo" class="form-label">Pekerjaan Ayah :</label>
                        <select class="form-select" id="oo" required name="pekerjaanayah">
                            <option selected disabled value="">Pilih</option>
                            <?php foreach ($pekerjaans as $pkj) : ?>
                                <option <?php if ($camabaedit['pekerjaanayah'] == $pkj) echo 'selected=' ?>><?= $pkj; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="ooo" class="form-label">Pekerjaan Ibu :</label>
                        <select class="form-select" id="ooo" required name="pekerjaanibu">
                            <option selected disabled value="">Pilih</option>
                            <?php foreach ($pekerjaans as $pkj) : ?>
                                <option <?php if ($camabaedit['pekerjaanibu'] == $pkj) echo 'selected=' ?>><?= $pkj; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="pp" class="form-label">No Hp Ayah :</label>
                        <input value="<?= $camabaedit['hpayah'] ?>" type="text" class="form-control" id="pp" required placeholder="Masukkan dengan angka" name="hpayah">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="qq" class="form-label">No Hp Ibu :</label>
                        <input value="<?= $camabaedit['hpibu'] ?>" type="text" class="form-control" id="qq" required placeholder="Masukkan dengan angka" name="hpibu">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>
            </div>

            <div class="row px-3">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="rrr" class="form-label">Gaji Ayah :</label>
                        <select class="form-select" id="rrr" required name="gajiayah">
                            <option selected disabled value="">Pilih</option>
                            <?php foreach ($gajis as $gj) : ?>
                                <option <?php if ($camabaedit['gajiayah'] == $gj) echo 'selected=' ?>><?= $gj; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="sss" class="form-label">Gaji Ibu :</label>
                        <select class="form-select" id="sss" required name="gajiibu">
                            <option selected disabled value="">Pilih</option>
                            <?php foreach ($gajis as $gj) : ?>
                                <option <?php if ($camabaedit['gajiibu'] == $gj) echo 'selected=' ?>><?= $gj; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="ttt" class="form-label">Jumlah Bersaudara :</label>
                        <select class="form-select" id="ttt" required name="bersaudara">
                            <option selected disabled value="">Pilih</option>
                            <?php for ($i = 1; $i < 11; $i++) : ?>
                                <option <?php if ($camabaedit['bersaudara'] == $i) echo 'selected=' ?>><?= $i ?></option>
                            <?php endfor ?>
                        </select>

                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="rr" class="form-label">Anak ke :</label>
                        <select class="form-select" id="rr" required name="anakke">
                            <option selected disabled value="">Pilih</option>
                            <?php for ($i = 1; $i < 11; $i++) : ?>
                                <option value="<?= $i ?>" <?php if ($camabaedit['anakke'] == $i) echo 'selected=' ?>>Anak ke <?= $i ?></option>
                            <?php endfor ?>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="border border-warning p-2 mt-4 rounded-3 pb-4">
            <div class="alert alert-primary" role="alert">
                Data Pendidikan
            </div>

            <div class="row px-3">
                <div class="col-md-5 offset-md-1">
                    <div class="mb-3">
                        <label for="aaa" class="form-label">NISN :</label>
                        <input value="<?= $camabaedit['nisn'] ?>" type="text" class="form-control" id="aaa" required placeholder="Sesuaikan dengan Ijazah" name="nisn" maxlength="10" minlength="10">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="bbs" class="form-label">Asal Sekolah :</label>
                        <input value="<?= $camabaedit['namasekolah'] ?>" type="text" class="form-control" id="bbs" required placeholder="Sesuaikan dengan Ijazah" name="sekolah">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>
            </div>

            <div class="row px-3">
                <div class="col-md-5 offset-md-1">
                    <div class="mb-3">
                        <label for="cca" class="form-label">Jurusan :</label>
                        <input value="<?= $camabaedit['jurusan'] ?>" type="text" class="form-control" id="cca" required placeholder="Cth: XII IPA 1" name="jurusan">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="vvv" class="form-label">Tahun Tamat :</label>
                        <select class="form-select" id="vvv" required name="tahuntamat">
                            <option selected disabled value="">Pilih</option>
                            <?php for ($i = date('Y'); $i > date('Y') - 10; $i--) : ?>
                                <option <?php if ($camabaedit['tahunlulus'] == $i) echo 'selected=' ?>><?= $i ?></option>
                            <?php endfor ?>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="border border-warning p-2 mt-4 rounded-3 pb-4">
            <div class="alert alert-primary" role="alert">
                Pilihan
            </div>

            <div class="row px-3">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="zzx" class="form-label">Pilihan Kuliah :</label>
                        <select class="form-select" id="zzx" required name="pilihankuliah">
                            <option selected disabled value="">Pilih</option>
                            <option <?php if ($camabaedit['jeniskuliah'] == 'Reguler') echo 'selected=' ?>>Reguler</option>
                            <option <?php if ($camabaedit['jeniskuliah'] == 'Non Reguler') echo 'selected=' ?>>Non Reguler</option>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="selectprdodi1" class="form-label">Pilihan Prodi 1 :</label>
                        <select class="form-select" id="selectprdodi1" required name="pilihanprodi1">
                            <option selected disabled value="">Pilih</option>

                            <?php foreach ($fakultasprodiall as $prd) : ?>
                                <option <?php if ($camabaedit['prodi1'] == $prd['fakultas'] . ' ' . $prd['prodifull']) echo 'selected=' ?>><?= $prd['fakultas'] ?> <?= $prd['prodifull'] ?></option>
                            <?php endforeach ?>

                        </select>

                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="selectprdodi2" class="form-label">Pilihan Prodi 2 :</label>
                        <select class="form-select" id="selectprdodi2" required name="pilihanprodi2">
                            <option selected disabled value="">Pilih</option>

                            <?php foreach ($fakultasprodiall as $prd) : ?>
                                <option <?php if ($camabaedit['prodi2'] == $prd['fakultas'] . ' ' . $prd['prodifull']) echo 'selected=' ?>><?= $prd['fakultas'] ?> <?= $prd['prodifull'] ?></option>
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


        <div class="d-grid mt-3">
            <button type="submit" name="edit" class="btn btn-success">Edit Data Camaba</button>
        </div>

    </form>
</main>


<?php $this->endSection() ?>