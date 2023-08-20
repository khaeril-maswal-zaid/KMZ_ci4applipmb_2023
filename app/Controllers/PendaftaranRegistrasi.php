<?php

namespace App\Controllers;

use App\Models\ConfWebFakultasProdiModel;
use App\Models\CamabaModel;

use App\Models\ProvinsiModel;
use App\Models\KabupatenModel;
use App\Models\KecamatanModel;
use App\Models\DesaModel;
use App\Models\ConfWebAkunWaModel;

use App\Libraries\NotifikasiEmail;

class PendaftaranRegistrasi extends BaseController
{

    //instansiasi modelS
    //........................................................
    protected $provinsimodel;
    protected $kabupatenmodel;
    protected $kecamatanmodel;
    protected $desamodel;

    protected $camabamodel;
    protected $templatelayout;
    protected $classbody;

    protected $notifemail;

    public function __construct()
    {
        $this->provinsimodel = new ProvinsiModel;
        $this->kabupatenmodel = new KabupatenModel;
        $this->kecamatanmodel = new KecamatanModel;
        $this->desamodel = new DesaModel;

        $this->camabamodel = new CamabaModel();
        $this->templatelayout = ['layout/nav-pages', 'layout/footer-pages'];
        $this->classbody = 'pengunjung';
    }

    public function index()
    {
        $fakultasprodimodel = new ConfWebFakultasProdiModel();

        $data = [
            'provinsimodel' =>  $this->provinsimodel->findAll(),
            'classbody' =>  $this->classbody,
            'prodi' =>  $fakultasprodimodel->findAll(),
            'title' => 'LIPMB UMB | Pendaftaran Firts-Registration',
            'templatelayout' =>  $this->templatelayout
        ];

        session()->setFlashdata('forvalidasi', true);

        return view('pages/registrasi-camaba', $data);
    }

    public function Validasi()
    {
        if (session()->getFlashdata('forvalidasi')) {

            $strData =implode('|*|', $this->request->getVar());
            
            $data = [
                'classbody' =>  $this->classbody,
                'title' => 'Validasi Pendaftaran',
                'templatelayout' =>  $this->templatelayout,
                'validasi' => $_POST,
                'strData' => $strData,
                'hpw' => $this->hasilPilihanWilayah($_POST['provinsi'], $_POST['kabupaten'], $_POST['kecamatan'], $_POST['desa'])

            ];

            return view('pages/validasi-registrasi', $data);
        } else {
            return redirect()->to(URL . 'pendaftaran-registrasi');
        }
    }

    public function addCamaba($data)
    {
        $arrData = explode('|*|', $this->request->getVar('datacamaba'));
        $yLahir = explode('-', $arrData[4]);

        $hpw = $this->hasilPilihanWilayah($arrData[9], $arrData[10], $arrData[11], $arrData[12]);
        
        $getNik = $this->camabamodel->getNotDuplicat($arrData[2]);

        // dd($arrData);
        
        if ($getNik) {
            session()->setFlashdata('AlertPendaftaran', 'Maaf pendaftaran Anda tidak dapat diproses. Kamu telah terdaftar sebelumnya');
            return redirect()->to(URL . 'pendaftaran-firstregistration');
        }

        if (isset($arrData[0])) {
            $this->camabamodel->save([
                'id'                    => '',

                'wakturegist'           => date('H:i:s'),
                'tanggalregist'         => date('d-m-Y'),
                'waktudaftar'           => '',
                'tanggaldaftar'         => '',
                'waktudaftarulang'      => '',

                'tanggaldaftarulang'    => '',
                'username'              => '',
                'password'              => '',
                'gelombang'             => '',
                'nama'                  => $arrData[1],


                'nik'                   => $arrData[2],
                'jeniskelamin'          => $arrData[8],
                'tempatlahir'           => $arrData[3],
                'tanggallahir'          => $arrData[4],
                'ylahir'                => $yLahir[0],

                'agama'                 => $arrData[7],
                'nohp'                  => $arrData[6],
                'provinsi'              => $hpw[0],
                'kabupaten'             => $hpw[1],
                'kecamatan'             => $hpw[2],
                'desa'                  => $hpw[3],


                'alamat'                => $arrData[13],
                'email'                 => $arrData[5],
                'namaayah'              => $arrData[14],
                'namaibu'               => $arrData[15],
                'pekerjaanayah'         => $arrData[16],

                'pekerjaanibu'          => $arrData[17],
                'hpayah'                => $arrData[18],
                'hpibu'                 => $arrData[19],
                'gajiayah'              => $arrData[20],
                'gajiibu'               => $arrData[21],


                'anakke'                => $arrData[22],
                'bersaudara'            => $arrData[23],
                'nisn'                  => $arrData[24],
                'namasekolah'           => $arrData[25],
                'jurusan'               => $arrData[26],

                'tahunlulus'            => $arrData[27],
                'prodi1'                => $arrData[29],
                'prodi2'                => $arrData[30],
                'prodilulus'            => '',
                'nomorpeserta'          => '',


                'jeniskuliah'           => $arrData[28],
                'foto'                  => '',
                'raport'                => '',
                'alasankuliah'          => '',
                'ruanganujian'          => '',

                'akunby'                => '',
                'editby'                => '',
                'pengumumanby'          => '',
                'daftarulangby'         => '',
                'deskripsi'             => $arrData[31],
            ]);
        }


        $this->notifemail = new NotifikasiEmail;
        $akunAdmin = new ConfWebAkunWaModel;
        $dataAdmin = $akunAdmin->first();

        if ($this->notifemail->kePeserta($arrData[5], $arrData[1], $dataAdmin) && $this->notifemail->keBos('lipmbumb@gmail.com', $arrData[1], $arrData[6], $arrData[13], $arrData[25], $arrData[29], $arrData[30])) {
            session()->setFlashdata('add', true); //| TIDAK ADA GUNANYA KAYAKNYA | BAA ADA JI
            return redirect()->to(URL . 'pendaftaran-firstregistration/' . url_title($arrData[1], '-', true) . '/' . $arrData[6]);
        } else {
            session()->setFlashdata('AlertPendaftaran', 'Email kamu tiak valid');
            return redirect()->to(URL . 'pendaftaran-firstregistration');
        }
    }


    public function selesaiRegistrasi($nama = 'LIPMB UM Bulukumba', $hp = '085343652494', $nik = '730207')
    {
        $akunwamodel = new ConfWebAkunWaModel;

        $namaR = explode('-', $nama);
        $namaR = ucwords(implode(' ', $namaR));

        //$JsonToArraySlugFromApiPPC = file_get_contents("https://pintuperadaban.com/api/artikel-populer/peradaban165_"); // pass = peradaban165_
        //$slugPopulerPPC = json_decode($JsonToArraySlugFromApiPPC, TRUE);

        if (session()->getFlashdata('add')) { //| TIDAK ADA GUNANYA KAYAKNYA | BAA ADA JI
            $data = [
                'classbody' =>  $this->classbody,
                'title' => 'Registrasi ' . $nama,
                'templatelayout' =>  ['layout/nav-pages', 'layout/footer-pages-dan-redirect'], //tidak amabil di '$this->templatelayout' karena akan di redirect ke Halaman lain setelh beberapa detik
                'akunwa' => $akunwamodel->first(),
                'peserta' => [$namaR, $hp, $nik],

                //'slugPopulerPPC' => 'https://pintuperadaban.com/' . $slugPopulerPPC['slug'] . '/' . $slugPopulerPPC['time']
                
                'slugPopulerPPC' => 'https://instagram.com/umb_news?igshid=NTc4MTIwNjQ2YQ=='
            ];

            return view('pages/selesai-registrasi', $data);
        } else {
            return redirect()->to(URL);
        }
    }

    public function TampilkanKabupatendariAjax()
    {
        $listkabupaten =  $this->kabupatenmodel->where('prov_id', $_POST["idProv"])->findAll();

        return json_encode($listkabupaten);
    }

    public function TampilkanKecamatandariAjax()
    {
        $listkecamatan = $this->kecamatanmodel->where('city_id', $_POST["idKab"])->findAll();

        return json_encode($listkecamatan);
    }

    public function TampilkanDesadariAjax()
    {
        $listdesa = $this->desamodel->where('dis_id', $_POST["idKec"])->findAll();

        return json_encode($listdesa);
    }

    public function hasilPilihanWilayah($Prov, $Kab, $Kec, $Desa)
    {
        $Prov = $this->provinsimodel->select('prov_name')->where('prov_id', $Prov)->first()['prov_name'];
        $Kab = $this->kabupatenmodel->select('city_name')->where('city_id', $Kab)->first()['city_name'];
        $Kec = $this->kecamatanmodel->select('dis_name')->where('dis_id', $Kec)->first()['dis_name'];
        $Desa = $this->desamodel->select('subdis_name')->where('subdis_id', $Desa)->first()['subdis_name'];

        return [ucwords(strtolower($Prov)), ucwords(strtolower($Kab)), ucwords(strtolower($Kec)), ucwords(strtolower($Desa))];
    }
}
