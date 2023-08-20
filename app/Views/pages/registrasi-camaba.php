<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>


<div class="container-fluid bg-white py-5">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center">Form Pendaftaran Calon Mahasiswa Baru</h1>
            <h5 class="text-center">Universitas Muhammadiyah Bulukumba Tahun Akademik <?= date('Y') ?> - <?= date('Y') + 1 ?></h5>
        </div>
    </div>

    <?php if (session()->getFlashdata('AlertPendaftaran')) : ?>
        <div class="alert-akun mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </symbol>
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </symbol>
            </svg>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    <?= session()->getFlashdata('AlertPendaftaran') ?>
                </div>
            </div>
        </div>
    <?php endif ?>

    <form action="/pendaftaran-firstregistration" method="POST" class="needs-validation" novalidate>
        <?= csrf_field() ?>

        <div class="border border-warning p-2 mt-5 rounded-3 pb-4">
            <div class="alert alert-primary" role="alert">
                Data Diri
            </div>

            <div class="row px-3">
                <div class="col-md-7">
                    <div class="mb-3">
                        <label for="aa" class="form-label">Nama Lengkap :</label>
                        <input type="text" class="form-control" id="aa" required placeholder="Sesuaikan dengan Ijazah" name="nama">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="bb" class="form-label">NIK :</label>
                        <input type="text" class="form-control" id="bb" required placeholder="Sesuaikan dengan KTP / KK" name="ktp" maxlength="16" minlength="16">
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
                        <input type="text" class="form-control" id="cc" required placeholder="Sesuaikan dengan Ijazah" name="tempatlahir">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="dd" class="form-label">Tanggal Lahir :</label>
                        <input type="date" class="form-control" id="dd" required placeholder="Sesuaikan dengan Ijazah" name="tanggallahir">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="ee" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="ee" required placeholder="Pastikan masih dalam keadaan aktif" name="email">
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
                        <input type="text" class="form-control" id="ff" required placeholder="Pastikan selalu dalam keadaan aktif" name="wa">
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
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Lainnya</option>
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
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
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
                        <label for="select-provinsi" class="form-label">Provinsi :</label>
                        <select class="form-select" id="select-provinsi" required name="provinsi">
                            <option selected disabled value="">Sesuaikan dengan KTP</option>
                            <?php foreach ($provinsimodel as $provinsi) : ?>
                                <option value="<?= $provinsi['prov_id'] ?>"><?= $provinsi['prov_name'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="select-kabupaten" class="form-label">Kabupaten/Kota :</label>
                        <img src="/img/assets/loading.gif" id="load-kab" width="15%" style="display: none;">
                        <select class="form-select" id="select-kabupaten" required name="kabupaten">
                            <option selected disabled value="">Sesuaikan dengan KTP</option>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="select-kecamatan" class="form-label">Kecamatan :</label>
                        <img src="/img/assets/loading.gif" id="load-kec" width="15%" style="display: none;">
                        <select class="form-select" id="select-kecamatan" required name="kecamatan">
                            <option selected disabled value="">Sesuaikan dengan KTP</option>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="select-desa" class="form-label">Desa/Kelurahan :</label>
                        <img src="/img/assets/loading.gif" id="load-desa" width="15%" style="display: none;">
                        <select class="form-select" id="select-desa" required name="desa">
                            <option selected disabled value="">Sesuaikan dengan KTP</option>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-">
                    <div class="mb-3">
                        <label for="mmxx" class="form-label">Alamat :</label>
                        <input type="text" class="form-control" id="mmxx" required placeholder="Cth: Jln. Poros Salassae, Dusun Samaenre RT 001/RW 003" name="alamat">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="border border-warning p-2 mt-4 rounded-3 pb-4">
            <div class="alert alert-primary" role="alert">
                Data Orang Tua Kandung
            </div>

            <div class="row px-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="mm" class="form-label">Nama Ayah :</label>
                        <input type="text" class="form-control" id="mm" required placeholder="Sesuaikan KK" name="namaayah">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nn" class="form-label">Nama Ibu :</label>
                        <input type="text" class="form-control" id="nn" required placeholder="Sesuaikan KK" name="namaibu">
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
                            <option>Kepala desa</option>
                            <option>Lurah</option>
                            <option>Camat</option>
                            <option>Bupati</option>
                            <option>Gubenur</option>
                            <option>Presiden</option>
                            <option>pedagang</option>
                            <option>PNS</option>
                            <option>Guru</option>
                            <option>Dokter</option>
                            <option>Dosen</option>
                            <option>Penjahit</option>
                            <option>Pengrajin</option>
                            <option>Koki</option>
                            <option>Polisi</option>
                            <option>TNI</option>
                            <option>Pilot</option>
                            <option>Petani</option>
                            <option>Nelayan</option>
                            <option>Perantau</option>
                            <option>Wiraswasta</option>
                            <option>Honorer</option>
                            <option>Lainnya</option>
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
                            <option>Kepala desa</option>
                            <option>Lurah</option>
                            <option>Camat</option>
                            <option>Bupati</option>
                            <option>Gubenur</option>
                            <option>Presiden</option>
                            <option>pedagang</option>
                            <option>PNS</option>
                            <option>Guru</option>
                            <option>Dokter</option>
                            <option>Dosen</option>
                            <option>Penjahit</option>
                            <option>Pengrajin</option>
                            <option>Koki</option>
                            <option>Polisi</option>
                            <option>TNI</option>
                            <option>Pilot</option>
                            <option>Petani</option>
                            <option>Nelayan</option>
                            <option>Perantau</option>
                            <option>Wiraswasta</option>
                            <option>Honorer</option>
                            <option>Ibu Rumah Tangga</option>
                            <option>Lainnya</option>
                        </select>
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="pp" class="form-label">No Hp Ayah :</label>
                        <input type="text" class="form-control" id="pp" required placeholder="Masukkan dengan angka" name="hpayah">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="qq" class="form-label">No Hp Ibu :</label>
                        <input type="text" class="form-control" id="qq" required placeholder="Masukkan dengan angka" name="hpibu">
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
                            <option> Tidak berpenghasilan</option>
                            <option> Kurang dari Rp.500.001 per bulan</option>
                            <option> Rp.500.001 - Rp.1.000.000 per bulan</option>
                            <option> Rp.1.000.001 - Rp.2.000.000 per bulan</option>
                            <option> Rp.2.000.001 - Rp.3.000.000 per bulan</option>
                            <option> Rp.3.000.001 - Rp.4.000.000 per bulan</option>
                            <option> Rp.4.000.001 - Rp.5.000.000 per bulan</option>
                            <option> Rp.5.000.001 - Rp.6.000.000 per bulan</option>
                            <option> Rp.6.000.001 - Rp.7.000.000 per bulan</option>
                            <option> Rp.7.000.001 - Rp.8.000.000 per bulan</option>
                            <option> Rp.8.000.001 - Rp.9.000.000 per bulan</option>
                            <option> Rp.9.000.001 - Rp.10.000.000 per bulan</option>
                            <option> Lebih dari Rp. 10.000.000 per bulan</option>
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
                            <option> Tidak berpenghasilan</option>
                            <option> Kurang dari Rp.500.001 per bulan</option>
                            <option> Rp.500.001 - Rp.1.000.000 per bulan</option>
                            <option> Rp.1.000.001 - Rp.2.000.000 per bulan</option>
                            <option> Rp.2.000.001 - Rp.3.000.000 per bulan</option>
                            <option> Rp.3.000.001 - Rp.4.000.000 per bulan</option>
                            <option> Rp.4.000.001 - Rp.5.000.000 per bulan</option>
                            <option> Rp.5.000.001 - Rp.6.000.000 per bulan</option>
                            <option> Rp.6.000.001 - Rp.7.000.000 per bulan</option>
                            <option> Rp.7.000.001 - Rp.8.000.000 per bulan</option>
                            <option> Rp.8.000.001 - Rp.9.000.000 per bulan</option>
                            <option> Rp.9.000.001 - Rp.10.000.000 per bulan</option>
                            <option> Lebih dari Rp. 10.000.000 per bulan</option>
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
                                <option><?= $i ?></option>
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
                                <option value="<?= $i ?>">Anak ke <?= $i ?></option>
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
                        <input type="text" class="form-control" id="aaa" required placeholder="Sesuaikan dengan Ijazah" name="nisn" maxlength="10" minlength="10">
                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="bbs" class="form-label">Asal Sekolah :</label>
                        <input type="text" class="form-control" id="bbs" required placeholder="Sesuaikan dengan Ijazah" name="sekolah">
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
                        <input type="text" class="form-control" id="cca" required placeholder="Cth: XII IPA 1" name="jurusan">
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
                                <option><?= $i ?></option>
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
                        <label for="pilkul" class="form-label">Pilihan Kuliah :</label>
                        <select class="form-select" id="pilkul" required name="pilihankuliah">
                            <option selected disabled value="">Pilih</option>
                            <option>Reguler</option>
                            <option>Non Reguler</option>
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

                            <?php foreach ($prodi as $prd) : ?>
                                <option class="prodi-reguler" value="<?= $prd['fakultas'] ?> <?= $prd['prodifull'] ?>"><?= $prd['fakultas'] ?> <?= $prd['prodifull'] ?></option>
                            <?php endforeach ?>

                            <option class="prodi-nonreguler d-none">FKIP. Pend. Non Formal</option>
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

                            <?php foreach ($prodi as $prd) : ?>
                                <option class="prodi-reguler" value="<?= $prd['fakultas'] ?> <?= $prd['prodifull'] ?>"><?= $prd['fakultas'] ?> <?= $prd['prodifull'] ?></option>
                            <?php endforeach ?>

                            <option class="prodi-nonreguler d-none">FKIP. Pend. Non Formal 2</option>
                        </select>

                        <div class="invalid-feedback">
                            Isi bagian ini
                        </div>
                    </div>
                    <div class="pringatansamaprodi text-danger mt-2"></div>
                </div>
            </div>
        </div>

        <div class="border border-warning p-2 mt-4 rounded-3 pb-4">
            <div class="alert alert-primary" role="alert">
                Deskripsi Diri
            </div>

            <div class="row px-3">
                <div class="col-md-12">
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Diri" id="floatingTextarea2" style="height: 100px;"></textarea>
                            <label for="floatingTextarea2">Deskripsi Diri</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-2 offset-md-10 mt-4">
            <button class="btn btn-primary" type="submit" name="daftarcamaba">Selanjutnya</button>
        </div>

    </form>
</div>


<?php $this->endSection() ?>