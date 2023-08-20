<?php

namespace App\Controllers;

use App\Models\ConfJadwalTahapanPendaftaran;
use App\Models\ConfWebRuanganUjian;
use App\Models\CamabaModel;

class Pengumuman extends BaseController
{
    protected $jadwaltahapan;
    protected $camabamodel;

    protected $templatelayout;
    protected $classbody;

    protected $session;
    protected $linkskpengumuman;

    public function __construct()
    {
        $this->session = session();

        $this->jadwaltahapan = new ConfJadwalTahapanPendaftaran;
        $this->linkskpengumuman = new ConfWebRuanganUjian();
        $this->camabamodel = new CamabaModel();

        $this->templatelayout = ['layout/nav-pages', 'layout/footer-pages'];
        $this->classbody = 'pengunjung';
    }


    public function index()
    {
        $data = [
            'classbody' =>  $this->classbody,
            'title' => 'LIPMB UMB | Pengumuman Pendaftaran',
            'templatelayout' =>  $this->templatelayout,

            'openclosepengumuman' => openclosepengumuman($this->jadwaltahapan)
        ];

        return view('pages/pengumuman-pendaftaran', $data);
    }


    public function Proses()
    {
        if ($this->request->getVar('csrf_test_name')) {

            $nomorpeserta = $this->request->getVar('nopeserta');
            $tanggallahir = $this->request->getVar('tgl');

            $numRows = $this->camabamodel->where('nomorpeserta', $nomorpeserta)->countAllResults();

            // Cek nomorpeserta
            if ($numRows === 1) {

                $row = $this->camabamodel->where('nomorpeserta', $nomorpeserta)->first();

                // cek tanggallahir
                if ($tanggallahir == $row['tanggallahir']) {

                    // jika berhasil login set session
                    $this->session->set('daftarByAccount', $row['id']);

                    return redirect()->to(URL . 'pengumuman-pendaftaran/' . url_title($row['nama'], '-', true));

                    exit;
                } else {
                    session()->setFlashdata('akunSalah', ['Tanggal Lahir tidak ditemukan !', 'danger']);
                    return redirect()->to(URL . 'pengumuman-pendaftaran');
                    exit;
                }
            } //Jika nomorpeserta salah
            else {
                session()->setFlashdata('akunSalah', ['Nomor Peserta tidak ditemukan !', 'danger']);
                return redirect()->to(URL . 'pengumuman-pendaftaran');
                exit;
            }
        }
    }

    public function HasilPengumuman()
    {
        if (!$this->session->get("daftarByAccount")) {
            return redirect()->to(URL . 'pendaftaran-byaccount');
        }

        //$JsonToArraySlugFromApiPPC = file_get_contents("https://pintuperadaban.com/api/artikel-populer/peradaban165_"); // pass = peradaban165_
       // $slugPopulerPPC = json_decode($JsonToArraySlugFromApiPPC, TRUE);

        $id = $this->session->get("daftarByAccount");

        $datarow = $this->camabamodel->where('id', $id)->first();

        $data = [
            'classbody' =>  $this->classbody,
            'title' => 'Pengumuman ' . $datarow['nama'],
            'templatelayout' =>  ['layout/nav-pages', 'layout/footer-pages-dan-redirect'], //tidak amabil di '$this->templatelayout' karena akan di redirect ke Halaman lain setelh beberapa detik

            'datarow' => $datarow,
            'linkskpengumuman' => $this->linkskpengumuman->select('linkskpengumuman')->first(),

            'slugPopulerPPC' => 'https://instagram.com/umb.news?igshid=MzRlODBiNWFlZA=='

        ];

        if ($datarow['prodilulus'] == 'Tidak Lulus' || $datarow['prodilulus'] == '') {
            return view('pages/hasil-gagal-pengumuman', $data);
        } else {
            return view('pages/hasil-lulus-pengumuman', $data);
        }
    }
}
