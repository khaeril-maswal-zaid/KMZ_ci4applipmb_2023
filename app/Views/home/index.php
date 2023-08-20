<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>

<!-- Layar Home -->
<section id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item">
            <img src="/img/assets/crl1.jpg" class="a" alt="crousel">

            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Rektorat UM Bulukumba</h1>
                    <p>Gedung Pimpinan Universitas, beserta pusat layanan administrasi kemahasiswaan.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item active">
            <img src="/img/assets/crl2.jpg" class="b" alt="crousel">

            <div class="container">
                <div class="carousel-caption">
                    <h1>Rusunawa UM Bulukumba</h1>
                    <p>Dengan gedung 4 lantai, Rusunawa siap huni untuk mahasiswi UM Bulukumba.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/assets/crl3.jpg" class="c" alt="crousel">
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>Mahasiswi UM Bulukumba</h1>
                    <p>Enterpreneur Muslim tingkat Nasional Yang Unggul dan Berakhlak Karimah.</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>

<!-- Pimpinan -->
<section class="row bidum-row border-bottom border-dark border-2">
    <div class="col-md-3">
        <div class="rounded-circle border-danger border border-2 bidum">
            <img src="/img/assets/rektor.jpeg" style="width:100%;">
        </div>
        <h3 class="mt-3">Rektor UMB</h3>
        <h5>Drs. Jumasse Basra, M.Si</h5>
    </div>
    <div class="col-md-3">
        <div class="rounded-circle border-danger border border-2 bidum">
            <img src="/img/assets/wr1.jpeg" style="width:100%;">
        </div>
        <h3 class="mt-3">Wakil Rektor I UMB</h3>
        <h5>Muh Asdar, S.Pd M.Pd</h5>
    </div>
    <div class="col-md-3">
        <div class="rounded-circle border-danger border border-2 bidum">
            <img src="/img/assets/wr2.jpeg" style="width:100%;">
        </div>

        <h3 class="mt-3">Wakil Rektor II UMB</h3>
        <h5>Yuliartati, SE M.M</h5>
    </div>
    <div class="col-md-3">
        <div class="rounded-circle border-danger border border-2 bidum">
            <img src="/img/assets/wr3.jpeg" style="width:100%;">
        </div>

        <h3 class="mt-3">Wakil Rektor III UMB</h3>
        <h5>Irfan, S.Pd M.Pd</h5>
    </div>
</section>


<section class="container my-5 ">
    <!-- akun camaba -->
    <div class="row">
        <div class="col-md-10 my-4 offset-md-1 bg-white border-start border-end border-danger border-5 rounded-3">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="text-center pt-4 pb-2 mb-3 border-bottom mx-2">
                        <h1 class="display-6 fw-bold h-4 ">Akun Calon Mahasiswa Baru</h1>
                    </div>
                </div>
            </div>

            <div class="row mb-5 text-center">
                <div class="col-md-2 mt-4 offset-md-3">
                    <a href="/pendaftaran-firstregistration">
                        <h3>
                            <svg class="bi bi-person-plus-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"></path>
                                <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"></path>
                            </svg><br>
                            Daftar
                        </h3>
                    </a>
                </div>

                <div class="col-md-2 mt-4">
                    <a href="/pendaftaran-secondregistration">
                        <h3>
                            <svg class="bi bi-lock-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <rect width="11" height="9" x="2.5" y="7" rx="2"></rect>
                                <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"></path>
                            </svg> <br>
                            Login
                        </h3>
                    </a>
                </div>

                <div class="col-md-2 mt-4">
                    <a href="/pengumuman-pendaftaran">
                        <h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                                <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z"></path>
                            </svg> <br>
                            Pengumuan
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Kotak Informasi -->
    <div class="row mt-5">
        <div class="col-md-3 mt-2">
            <div class="card border border-primary">
                <div class="card-header bg-info text-white bg-info text-white">
                    INFORMASI PENDAFTARAN
                </div>
                <div class="card-body">
                    <p class="card-text">Sebelum melakukan pendaftaran, Calon Mahasiwa Baru diminta membaca dan memahami semua Persyaratan, Prosedur, dan Jadwal Pendaftaran</p>
                    <a href="/informasi-pendaftaran" class="btn btn-primary btn-sm">Selengkapnya...</a>
                </div>
            </div>
        </div>

        <div class="col-md-3  mt-2">
            <div class="card border border-primary">
                <div class="card-header bg-info text-white">
                    ALIH JENJANG / TRANSFER
                </div>
                <div class="card-body">
                    <p class="card-text">Universitas Muhammadiyah Bulukumba juga menyediakan jalur khusus Transfer / Pindahan / Alih Jenjang untuk tahun akademik 2023 - 2024. </p>
                    <a href="https://pintuperadaban.com" class="btn btn-primary btn-sm">Selengkapnya...</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mt-2">
            <div class="card border border-primary">
                <div class="card-header bg-info text-white">
                    BEASISWA
                </div>
                <div class="card-body">
                    <p class="card-text">Universitas Muhammadiyah Bulukumba menyediakan berbagai skema bantuan biaya pendidikan bagi calon mahasiswa prestasi, kurang mampu, Hafidz Qur`an dan lain-lain.</p>
                    <a href="/beasiswa" class="btn btn-primary btn-sm">Selengkapnya...</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mt-2">
            <div class="card border border-primary">
                <div class="card-header bg-info text-white">
                    ALUR PENDAFTARAN ULANG
                </div>
                <div class="card-body">
                    <p class="card-text ">Peserta Yang Telah Dinyatakan Lulus Segera Melakukan Pendaftaran Ulang. <br>
                        KLik selengkapnya untuk mengetahui alur beserta syarat penndaftaran ulang</p>
                    <a href="/alur-pendaftaran-ulang" class="btn btn-primary btn-sm">Selengkapnya...</a>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

<!-- Maps -->
<section>
    <div class="bg-danger text-white">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mx-3">
            <h2 class="h2 fw-bold">Lokasi Kampus 2 UM Bulukumba</h2>
        </div>

        <div class="mx-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4058.82488653566!2d120.1277052313817!3d-5.577844536024944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db9550e42b0855d%3A0xb21347c869e2ff01!2sKampus%20II%20Universitas%20Muhammadiyah%20Bulukumba!5e1!3m2!1sid!2sid!4v1644288878621!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<!-- Footer Informasi Website -->
<section class="footer py-4 bg-blackx borderborder-buttom" style="background-color:rgb(74, 82, 90)">
    <div class="container-fluid">
        <div class="row mx-md-5">
            <div class="col-md-7">
                <img src="/img/assets/umb.png" width="70px">
                <span class="text-white d-block mt-2">Situs resmi Lembaga Informasi Penerimaan Mahasiswa Baru Universitas Muhammadiyah Bulukumba</span>
                <span class="font-weight-bolder text-white d-block mt-3">Alamat kampus 1 :</span>
                <span class="d-block text-white">Jl. Ir. Sokarno No. 17, Kel. Tanah Kongkong Kec. Ujung Bulu</span>
                <span class="font-weight-bolder text-white d-block mt-3">Alamat kampus 2 :</span>
                <span class="d-block text-white">Jl. Poros Bulukumba - Bantaeng, Kel. Mariorennu Kec. Gantarang </span>
            </div>
            <div class="col-md-3">
                <h5 class="font-weight-bolder text-warning my-3" style="text-shadow:1px 1px 1px black">Sosial Media</h5>
                <a href="https://www.instagram.com/lipmb.umbulukumba/" class="text-white pl-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                    </svg>
                    <span>&nbsp;lipmb.umbulukumba</span>
                </a>

                <a href="https://www.facebook.com/lipmb.umbulukumba" class="text-white pl-2 d-inline-block mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg>
                    <span>&nbsp;Lipmb UM Bulukumba</span>
                </a>
            </div>
            <div class="col-md-2">
                <h5 class="font-weight-bolder text-warning my-3" style="text-shadow:1px 1px 1px black">Kontak</h5>
                <span class="font-weight-bolder text-white d-block mt-3">WhatsApp :</span>
                <span class="d-block text-white pl-2">+62 852-4000-5373</span>
                <span class="d-block text-white pl-2">+62 821-9269-9975</span>
                <!--<span class="d-block text-white pl-2">+62 853-4365-2494</span>-->
            </div>
        </div>
    </div>
</section>


<?php $this->endSection() ?>