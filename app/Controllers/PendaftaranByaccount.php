<?php

namespace App\Controllers;

use App\Models\ConfWebFakultasProdiModel;
use App\Models\ConfJadwalTahapanPendaftaran;
use App\Models\CamabaModel;
use App\Models\ConfWebRuanganUjian;

class PendaftaranByaccount extends BaseController
{

    protected $camabamodel;
    protected $templatelayout;
    protected $classbody;

    protected $session;

    public function __construct()
    {
        $this->session = session();

        $this->camabamodel = new CamabaModel();
        $this->templatelayout = ['layout/nav-pages', 'layout/footer-pages'];
        $this->classbody = 'pengunjung';
    }

    public function index()
    {

        $data = [
            'classbody' =>  $this->classbody,
            'title' => 'LIPMB UMB | Second-Registration Login',
            'templatelayout' =>  $this->templatelayout
        ];

        session()->setFlashdata('forDaftarByA', true);

        return view('pages/pend-byaccount-login', $data);
    }

    public function ProsesLoginDaftarByA()
    {
        if ($this->request->getVar('csrf_test_name')) {

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $numRows = $this->camabamodel->where('username', $username)->countAllResults();

            // Cek username
            if ($numRows === 1) {

                $row = $this->camabamodel->where('username', $username)->first();

                // cek password
                if ($password == $row['password']) {

                    $this->session->set('daftarByAccount', $row['id']);
                    return redirect()->to(URL . 'pendaftaran-secondregistration/' . url_title($row['nama'], '-', true));

                    exit;
                } else {
                    session()->setFlashdata('akunSalah', ['Password anda salah !', 'danger']);
                    return redirect()->to(URL . 'pendaftaran-secondregistration');
                    exit;
                }
            } //Jika username salah
            else {
                session()->setFlashdata('akunSalah', ['Username anda tidak ditemukan !', 'danger']);
                return redirect()->to(URL . 'pendaftaran-secondregistration');
                exit;
            }
        }
    }

    //SETELAH LOGIN
    public function ProsesDaftarByA()
    {
        if (!$this->session->get("daftarByAccount")) {
            return redirect()->to(URL . 'pendaftaran-secondregistration');
        }

        $prodimodel = new ConfWebFakultasProdiModel();
        $tahapanpendaftaran = new ConfJadwalTahapanPendaftaran();

        $idcamabalogin = $this->session->get("daftarByAccount");

        $datarow = $this->camabamodel->select()->where('id', $idcamabalogin)->first();

        if ($datarow['nomorpeserta'] != '') {
            $jdwUjian = $tahapanpendaftaran->jadwalUjianByGel($datarow['gelombang'][4]); //ambil hanya angka 'gel' (index 4) dari gel-1 atau gel-2 atau gel-3

            $data = [
                'classbody' =>  $this->classbody,
                'title' => 'LIPMB | ' . $datarow['nama'],
                'templatelayout' =>  $this->templatelayout,
                'camaba' => $this->camabamodel->where('id', $datarow['id'])->first(),
                'jadwalujian' => $jdwUjian
            ];

            //UNTUK digunakan di kartu peserta domppdf ----
            $this->session->set('datapdfview', $data);

            return view('pages/kartu-peserta', $data);
        }

        $data = [
            'classbody' =>  $this->classbody,
            'title' => 'LIPMB | ' . $datarow['nama'],
            'templatelayout' =>  $this->templatelayout,
            'camaba' => $this->camabamodel->where('id', $datarow['id'])->first(),
            'prodi' => $prodimodel->findAll(),
        ];

        return view('pages/pend-byaccount-daftar', $data);
    }

    public function ProsesUpdateByA($id)
    {
        //Tentukan ValuesUpdateCamaba
        $jadwalpendaftaran = new ConfJadwalTahapanPendaftaran();
        $ruanganujianDtb = new ConfWebRuanganUjian();

        $nikPost = $this->request->getVar('nik');
        $nikDenganIdPost = $this->camabamodel->select('nik')->where('id', $id)->first()['nik'];

        $lastNoPeserta = $this->camabamodel->select('nomorpeserta')->orderBy('nomorpeserta', 'DESC')->first()['nomorpeserta'];

        if ($nikDenganIdPost === $nikPost) {

            $nama = $this->camabamodel->select('nama')->where('id', $id)->first()['nama'];

            if ($this->request->getVar('fotopost') == false) {
                session()->setFlashdata('oops', 'Anda Belum Mengunggah Foto !');
                return redirect()->to(URL . 'pendaftaran-secondregistration/' . url_title($nama, '-', true));
            }

            $gel = gelpendaftaran($jadwalpendaftaran);

            if ($gel === false || $gel === null || $gel === '') {
                session()->setFlashdata('oops', 'Maaf Pendaftaran Telah Berakhir !');
                return redirect()->to(URL . 'pendaftaran-secondregistration/' . url_title($nama, '-', true));
            }

            $nopst = nomorpeserta($lastNoPeserta) . $gel;

            $kodeRu = substr($nopst, 10, 1); //Ambil nomor peserta index 10 (kode ruangan ujiang)
            $ruanganujian = $ruanganujianDtb->select('gedung_' . $kodeRu)->first()['gedung_' . $kodeRu];


            $this->camabamodel->save([
                'id'                    => $id,

                'waktudaftar'           => date('H:i:s'),
                'tanggaldaftar'         => date('d-m-Y'),
                'gelombang'             => 'gel-' . $gel,

                'prodi1'                => $this->request->getVar('pilihanprodi1'),
                'prodi2'                => $this->request->getVar('pilihanprodi2'),
                'jeniskuliah'           => $this->request->getVar('pilihankuliah'),
                'foto'                  => $this->request->getVar('fotopost'),
                'raport'                => $this->request->getVar('raportpost'),
                'alasankuliah'          => $this->request->getVar('alasan'),

                'nomorpeserta'          => $nopst,
                'ruanganujian'          => $ruanganujian,
            ]);

            return redirect()->to(URL . 'pendaftaran-secondregistration/' . url_title($this->request->getVar('nama'), '-', true));
        } else {
            return redirect()->to(URL);
        }
    }
}
