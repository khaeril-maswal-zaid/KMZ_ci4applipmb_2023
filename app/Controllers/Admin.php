<?php

namespace App\Controllers;

use App\Models\ConfWebFakultasProdiModel;

use App\Models\AdminModel;
use App\Models\CamabaModel;

use App\Libraries\NotifikasiEmail;

class Admin extends BaseController
{

    //instansiasi modelS
    //........................................................
    protected $camabamodel;
    protected $adminmodel;
    protected $adminlogin;
    protected $fakultasprodimodel;
    protected $templatelayout;
    protected $classbody;

    protected $session;
    protected $notifemail;

    public function __construct()
    {
        $this->session = session();

        $this->camabamodel = new CamabaModel();
        $this->adminmodel = new AdminModel;
        $this->fakultasprodimodel = new ConfWebFakultasProdiModel();

        $this->templatelayout = ['layout/nav-admin', 'layout/footer-admin'];
        $this->classbody = 'admin';


        if ($this->session->get("adminlogin")) {

            //Ambil id admin login untuk queri
            $id = $this->session->get("adminlogin");
            $this->adminlogin = $this->adminmodel->where('id', $id)->first();
        }
    }
    //--------------------------------------------------------


    //method pages
    //........................................................
    public function index()
    {
        $data = [
            'title' => 'Admin | login',
            'classbody' =>  'home',
            'templatelayout' =>  ['layout/nav-pages', 'layout/footer-pages'],
        ];

        echo view('admin/index', $data);

        hapussessions1($this->session, 'adminlogin');
    }

    public function home()
    {
        // $arrayHp = $this->camabamodel->select('nohp')->findAll();

        // $rows = [];
        // foreach ($arrayHp as $value) {
        //     $rows[] = generateWhatsappLink($value['nohp']);
        // }
        // dd($rows);

        // if (!$this->session->get("adminlogin")) {
        //     return redirect()->to(URL . 'admin');
        // }

        $data = [
            'title' => 'LIPMB UMB | Admin - Home',
            'classbody' =>  $this->classbody,
            'templatelayout' =>  $this->templatelayout
        ];

        // dd(password_hash('satria2018', PASSWORD_DEFAULT));

        return view('admin/home', $data);
    }

    public function Grafik($gel = false)
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }

        $data = [
            'title' => 'Admin | Chart',
            'grafikUmum' => $this->camabamodel->grafikUmum($gel),
            'grafikKhusus' => $this->camabamodel->grafikKhusus($gel),
            'fakultasprodiall' => $this->fakultasprodimodel->findAll(),
            'classbody' =>  $this->classbody,
            'templatelayout' =>  $this->templatelayout
        ];

        return view('admin/chart', $data);
    }


    public function dtbRegistrasi($gel = false, $prodi1 = false, $prodi2 = false)
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }

        $filter = [$gel, $prodi1, $prodi2];

        $data = [
            'title' => 'Admin | DTB Pendaftaran',
            'camabaregistrasi' => $this->camabamodel->getCamabaRegistrasi($filter),
            'fakultasprodiall' => $this->fakultasprodimodel->findAll(),
            'classbody' =>  $this->classbody,
            'templatelayout' =>  $this->templatelayout
        ];

        return view('admin/dtb-registrasi', $data);
    }

    public function album($gel = false, $prodi1 = false, $prodi2 = false)
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }

        $filter = [$gel, $prodi1, $prodi2];

        $data = [
            'title' => 'Admin | DTB Album',
            'camabapendaftaran' => $this->camabamodel->getCamabaPendaftaran($filter),
            'fakultasprodiall' => $this->fakultasprodimodel->findAll(),
            'classbody' =>  $this->classbody,
            'templatelayout' =>  $this->templatelayout
        ];

        return view('admin/album', $data);
    }

    public function dtbPendaftaran($gel = false, $prodi1 = false, $prodi2 = false)
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }

        $filter = [$gel, $prodi1, $prodi2];

        $data = [
            'title' => 'Admin | DTB Pendaftaran',
            'camabapendaftaran' => $this->camabamodel->getCamabaPendaftaran($filter),
            'fakultasprodiall' => $this->fakultasprodimodel->findAll(),
            'classbody' =>  $this->classbody,
            'templatelayout' =>  $this->templatelayout
        ];
        return view('admin/dtb-pendfataran', $data);
    }

    public function PageEdit($id = false)
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }

        $data = [
            'title' => 'Admin | DTB Pendaftaran',
            'camabaedit' => $this->camabamodel->where('id', $id)->first(),
            'fakultasprodiall' => $this->fakultasprodimodel->findAll(),
            'classbody' =>  $this->classbody,
            'templatelayout' =>  $this->templatelayout
        ];
        return view('admin/edit-camaba', $data);
    }

    public function detailPeserta($id)
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }

        $data = [
            'title' => 'LIPMB | ' . $this->camabamodel->select('nama')->where('id', $id)->first()['nama'],
            'detail' => $this->camabamodel->where('id', $id)->first(),
            'classbody' =>  $this->classbody,
            'templatelayout' =>  $this->templatelayout
        ];

        //UNTUK digunakan di kartu peserta domppdf ----
        $this->session->set('datapdfview', $data);

        return view('admin/detail-peserta', $data);
    }

    public function detailPesertaAll()
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }

        $data = [
            'title' => 'Admin | Detail Peserta',
            'detailPeserta' => $this->camabamodel->where('gelombang', 'gel-2')->findAll(20, 20),
            'classbody' =>  $this->classbody,
            'templatelayout' =>  $this->templatelayout
        ];

        return view('admin/detail-peserta-all', $data);
    }

    public function dtbDaftarUlang($gel = false, $prodilulus = false)
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }

        $filter = [$gel, $prodilulus];

        $data = [
            'title' => 'Admin | DTB Daftar Ulang',
            'camabadaftarulang' => $this->camabamodel->getDaftarUlang($filter),
            'fakultasprodiall' => $this->fakultasprodimodel->findAll(),
            'classbody' =>  $this->classbody,
            'templatelayout' =>  $this->templatelayout
        ];

        return view('admin/dtb-daftar-ulang', $data);
    }


    public function PengumumanProses($gel = false, $prodi1 = false, $prodi2 = false)
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }

        $filter = [$gel, $prodi1, $prodi2];

        $data = [
            'title' => 'Admin | Proses Penentuan Program Studi Camaba',
            'setprodilulus' => $this->camabamodel->getProdiLulus($filter),
            'classbody' =>  $this->classbody,
            'templatelayout' =>  $this->templatelayout
        ];

        return view('admin/proses-pengumuman', $data);
    }

    public function PengumumanHasil($gel = false, $prodi1 = false, $prodi2 = false)
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }

        $filter = [$gel, $prodi1, $prodi2];

        $data = [
            'title' => 'Admin | Hasil Penentuan Program Studi Camaba',
            'setprodilulus' => $this->camabamodel->getProdiLulus($filter),
            'classbody' =>  $this->classbody,
            'templatelayout' =>  $this->templatelayout
        ];

        return view('admin/hasil-pengumuman', $data);
    }
    //---------------------------------------------------------





    //Proses tekan tombol Aksi
    //........................................

    //Query data yang mau di set akun
    public function whereOneQuery()
    {
        $a = $_GET['namekey'];
        $b = $_GET['valuekey'];

        echo json_encode($this->camabamodel->getCamabaWhereOneFirst($a, $b));
    }

    //Update akun peserta
    public function updateSetAkun($id, $nama)
    {
        // dd($this->request->getVar());

        if ($this->request->getVar()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $sendTo = $this->request->getVar('notifEmail');

            $this->camabamodel->save([
                'id' => $id,
                'username' => $username,
                'password' => $password,
                'akunby' => $this->adminlogin['nama']
            ]);

            if ($this->request->getVar('notifEmail')) {

                $this->notifemail = new NotifikasiEmail;

                if ($this->notifemail->akunPeserta($sendTo, $nama, $username, $password)) {
                    return redirect()->to(URL . 'admin/dtb-registrasi');
                } else {
                    session()->setFlashdata('EmailError', 'Email Peserta tiak valid');
                    return redirect()->to(URL . 'admin/dtb-registrasi');
                }
            }
        }

        // return redirect()->to(URL . 'admin/dtb-registrasi');
    }

    //Proses Eksekusi
    public function ProsesEdit($id)
    {
        if ($this->request->getVar()) {
            $this->camabamodel->save([
                'id'                    => $id,

                'nama'                  => $this->request->getVar('nama'),
                'nik'                   => $this->request->getVar('ktp'),
                'jeniskelamin'          => $this->request->getVar('jk'),
                'tempatlahir'           => $this->request->getVar('tempatlahir'),
                'tanggallahir'          => $this->request->getVar('tanggallahir'),

                'agama'                 => $this->request->getVar('agama'),
                'nohp'                  => $this->request->getVar('wa'),
                'provinsi'              => $this->request->getVar('provinsi'),
                'kabupaten'             => $this->request->getVar('kabupaten'),
                'kecamatan'             => $this->request->getVar('kecamatan'),


                'alamat'                => $this->request->getVar('desa'),
                'email'                 => $this->request->getVar('email'),
                'namaayah'              => $this->request->getVar('namaayah'),
                'namaibu'               => $this->request->getVar('namaibu'),
                'pekerjaanayah'         => $this->request->getVar('pekerjaanayah'),

                'pekerjaanibu'          => $this->request->getVar('pekerjaanibu'),
                'hpayah'                => $this->request->getVar('hpayah'),
                'hpibu'                 => $this->request->getVar('hpibu'),
                'gajiayah'              => $this->request->getVar('gajiayah'),
                'gajiibu'               => $this->request->getVar('gajiibu'),


                'anakke'                => $this->request->getVar('anakke'),
                'bersaudara'            => $this->request->getVar('bersaudara'),
                'nisn'                  => $this->request->getVar('nisn'),
                'namasekolah'           => $this->request->getVar('sekolah'),
                'jurusan'               => $this->request->getVar('jurusan'),

                'tahunlulus'            => $this->request->getVar('tahuntamat'),
                'prodi1'                => $this->request->getVar('pilihanprodi1'),
                'prodi2'                => $this->request->getVar('pilihanprodi2'),
                'jeniskuliah'           => $this->request->getVar('pilihankuliah'),

                'editby'                => $this->adminlogin['nama']
            ]);
        }

        return redirect()->to(URL . 'admin/dtb-pendaftaran');
    }

    public function ProsesDU($id)
    {
        if ($this->request->getVar()) {
            $this->camabamodel->save([
                'id' => $id,
                'waktudaftarulang' => date('H:i:s'),
                'tanggaldaftarulang' => date('d-m-Y'),
                'daftarulangby' => $this->adminlogin['nama']
            ]);
        }

        return redirect()->to(URL . 'admin/dtb-daftar-ulang');
    }

    public function ResetDU($id)
    {
        if ($this->request->getVar()) {
            $this->camabamodel->save([
                'id' => $id,
                'waktudaftarulang' => '',
                'tanggaldaftarulang' => '',
                'daftarulangby' => ''
            ]);
        }
        return redirect()->to(URL . 'admin/dtb-pendaftaran');
    }

    public function TentukanPL()
    {
        // dd($this->request->getVar());

        if ($this->request->getVar()) {

            $xi = count($this->request->getVar()) / 2;
            $id = [];

            for ($i = 1; $i < $xi; $i++) {
                $prodi[] = $this->request->getVar('prodi-lulus-' . $i);
                $id[] = $this->request->getVar('id-' . $i);

                $this->camabamodel->save([
                    'id' => $id[$i - 1],
                    'prodilulus' => $prodi[$i - 1],
                    'pengumumanby' => $this->adminlogin['nama']
                ]);
            }

            return redirect()->to(URL . 'admin/set-pengumuman');
        }
    }
    //--------------------------------------------------





    //Query untuk data Filter Registrasi
    //.....................................
    public function dataFilterRegistrasi()
    {
        $data = [
            'camabaregistrasi' => $this->camabamodel->getCamabaRegistrasi($this->request->getVar()),
        ];

        return view('admin/tbody-registrasi', $data);
    }

    //Query untuk data Filter Album 
    //.....................................
    public function dataFilterAlbum()
    {
        $data = [
            'camabapendaftaran' => $this->camabamodel->getCamabaPendaftaran($this->request->getVar()),
        ];

        return view('admin/card-album', $data);
    }

    //Query untuk data Filter Pendaftaran 
    //.....................................
    public function dataFilterPendaftaran()
    {
        $data = [
            'camabapendaftaran' => $this->camabamodel->getCamabaPendaftaran($this->request->getVar()),
        ];

        return view('admin/tbody-pendaftaran', $data);
    }

    //Query untuk data Filter Daftar Ulang
    //.....................................
    public function dataFilterDaftarUlang()
    {
        $data = [
            'camabadaftarulang' => $this->camabamodel->getDaftarUlang($this->request->getVar()),
        ];

        return view('admin/tbody-daftar-ulang', $data);
    }

    public function dataFilterPengumumanProses()
    {
        $data = [
            'setprodilulus' => $this->camabamodel->getProdiLulus($this->request->getVar()),
        ];

        return view('admin/tbody-set-prodi-lulus', $data);
    }





    public function proseslogin()
    {
        $this->adminmodel = new AdminModel();

        if ($this->request->getVar('csrf_test_name')) {

            $username = stripcslashes($this->request->getVar('username'));
            $password = stripcslashes($this->request->getVar('password'));

            $numRows = $this->adminmodel->where('email', $username)->countAllResults();

            // Cek username
            if ($numRows === 1) {

                $row = $this->adminmodel->where('email', $username)->first();

                // cek password
                if (password_verify($password, $row['password'])) {

                    // jika berhasil login set session
                    $this->session->set('adminlogin', $row['id']);

                    return redirect()->to(URL . 'admin/' . url_title($row['nama'], '-', true));
                    exit;
                } else {
                    session()->setFlashdata('akunSalah', ['Password anda salah !', 'danger']);
                    return redirect()->to(URL . 'admin');
                    exit;
                }
            } //Jika username salah
            else {
                session()->setFlashdata('akunSalah', ['Username anda tidak ditemukan !', 'danger']);
                return redirect()->to(URL . 'admin');
                exit;
            }
        }
    }
}
