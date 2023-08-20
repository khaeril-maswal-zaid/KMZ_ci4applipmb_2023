<?php

namespace App\Libraries;

class NotifikasiEmail
{

    protected $email;

    function __construct()
    {
        $this->email = \Config\Services::email();
    }

    //Notifikasi ke peserta saat berhasil registrasi
    public function kePeserta(string $emailTo = null, string $namaCmb = null, array $dataAdmin = null)
    {
        $this->email->setTo($emailTo); //muhammadkhaerilzaid@gmail.com
        $this->email->setFrom($this->email->fromEmail, $this->email->fromName);
        $this->email->setSubject('Pendaftaran Berhasil');

        $this->email->setMessage('
            <p>Assalamualaikum Wr. Wb.</p>
            <p>Dear <strong>' . $namaCmb . '</strong>,</p>
            <p>Kami mengucapkan terima kasih atas pendaftaran Anda di laman portal LIPMB UMB. Kami ingin memberitahukan bahwa pendaftaran Anda telah berhasil kami terima.</p>
            <p>Tahap selanjutnya silahkan melakukan pembayaran pendaftaran di Bank Syariah Indonesia atau Transfer ke No Rek. 1506201302. an. Universitas Muhammadiyah Bulukumba sebsesar Rp.' . $dataAdmin['biaya'] . '. <br>
            Untuk konfirmasi pembayaran di No WhatsApp ' . $dataAdmin['wa'] . ' an. Wahyuni, sebagai syarat untuk mendapatkan username dan Password Akun Pendaftaran</p>

            <p>Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami di <a href="https://wa.me/' . $dataAdmin['wa'] . '">' . $dataAdmin['wa'] . '</a>.</p>
            
            <p>Salam,</p>
            <p>Kepala LIPMB UMB</p>
            <p>Wassalamualaikum Wr. Wb.</p>
        ');

        if ($this->email->send()) {
            return true;
        } else {
            $data = $this->email->printDebugger(['headers']);
            print_r($data);
        }
    }

    //Notifikasi ke Nyonya saat ada peserta berhasil registrasi
    public function keBos(string $emailTo = null, string $namaCmb = null, string $waCmb = null, string $alamatCmb = null, string $sekolahCmb = null, string $prodi1 = null, string $prodi2 = null)
    {
        $this->email->setTo($emailTo); //muhammadkhaerilzaid@gmail.com
        $this->email->setFrom($this->email->fromEmail, $this->email->fromName);
        $this->email->setSubject('Notifikasi PMB | ' . $namaCmb);

        $link_whatsapp = generateWhatsappLink($waCmb, $namaCmb);

        $this->email->setMessage('
            <p>Assalamualaikum Wr. Wb.</p>
            <p>Kepada Yth. <strong>Kakak Windi kuuu...,</p>
            <p>Dengan hormat,</p>

            <p>Bersama ini kami ingin memberitahukan bahwa terdapat pendaftaran mahasiswa baru di laman portal LIPMB. Berikut adalah detail pendaftaran yang perlu Anda ketahui:</p>
            <ul>
                <li><strong>Nama Mahasiswa:</strong> ' . $namaCmb . '</li>
                <li><strong>Nomor WhatsApp: </strong><a href="' . $link_whatsapp . '" target="_blank"> ' . $waCmb . '</a></li>
                <li><strong>Alamat:</strong> ' . $alamatCmb . '</li>
                <li><strong>Asal Sekolah:</strong> ' . $sekolahCmb . '</li>
                <br>
                <li><strong>Pilihan Prodi 1:</strong> ' . $prodi1 . '</li>
                <li><strong>Pilihan Prodi 2:</strong> ' . $prodi2 . '</li>
            </ul>
            <p>Kami mohon perhatian Anda dalam menindaklanjuti pendaftaran tersebut sesuai dengan prosedur yang telah ditentukan.</p>
            <p>Demikian pemberitahuan ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih.</p>
            <p>Hormat kami,</p>
            <p>AL-Zd_73</p>
            <p>Wassalamualaikum Wr. Wb.</p>
        ');

        if ($this->email->send()) {
            return true;
        } else {
            $data = $this->email->printDebugger(['headers']);
            print_r($data);
        }
    }

    //Notifikasi ke Peserta jika set akun peserta
    public function akunPeserta(string $emailTo = null, string $namaCmb = null, string $username = null, string $password = null)
    {
        $this->email->setTo($emailTo); //muhammadkhaerilzaid@gmail.com
        $this->email->setFrom($this->email->fromEmail, $this->email->fromName);
        $this->email->setSubject('Akun Peserta Calon Mahaiswa Baru UMB');

        $this->email->setMessage('
            <p>Assalamualaikum Wr. Wb.</p>

            <p>Kepada Yth. ' . $namaCmb . ',</p>
        
            <p>Kami ucapkan terima kasih atas pendaftaran anda di Portal Resmi LIPMB UMB. Dengan ini, kami ingin memberikan informasi akun login Anda untuk melanjutkan tahap Pemilihan Program Studi, Pilihan Kuliah, dan Mengunggah Foto Diri Anda.</p>
        
            <p>Silakan gunakan informasi login berikut ini untuk masuk ke situs <a href="https://lipmb.umbulukumba.ac.id/pendaftaran-secondregistration">https://lipmb.umbulukumba.ac.id/pendaftaran-secondregistration</a> :</p>
        
            <p><strong>Nama Pengguna:</strong> ' . $username . '</p>
        
            <p><strong>Kata Sandi:</strong> ' . $password . '</p>
        
            <p>Kami menghimbau agar Anda menjaga kerahasiaan informasi login Anda dan tidak memberikannya kepada orang lain. Jika Anda mengalami kesulitan atau pertanyaan, jangan ragu untuk menghubungi kami kembali.</p>
        
            <p>Terima kasih atas perhatiannya.</p>
        
            <p>Wassalamualaikum Wr. Wb.</p>
        
            <p>Hormat kami,</p>
        
            <p>AL-Zd_73</p>
        ');

        if ($this->email->send()) {
            return true;
        } else {
            $data = $this->email->printDebugger(['headers']);
            print_r($data);
        }
    }

    //SEMENTARA -----------------------------------------------------
    //...............................................................
    public function jamak(string $emailTo = null)
    {
        $emailTo = ['khaerilmaswalzaid73@gmail.com', 'adriansuryapratama000@gmail.com', 'selviandriani0101@gmail.com', 'adigtarahmaadiza@gmail.com', 'annisadwikurnian@gmail.com', 'ayniwitia@gmail.com', 'amaliazahra0605@gmail.com', 'cekkengvhiadayak@gmail.com'];

        for ($i = 0; $i < count($emailTo); $i++) {

            $this->email->setTo($emailTo[$i]); //muhammadkhaerilzaid@gmail.com
            $this->email->setFrom($this->email->fromEmail, $this->email->fromName);
            $this->email->setSubject('LIPMB UMB | Pengunduhan Kartu Peserta');

            $this->email->setMessage('
                <p>Kepada Peserta yang Terhormat,</p>

                <p>Kami ingin memberitahukan bahwa beberapa peserta yang telah mendaftar di situs <a href="https://lipmb.umbulukumba.ac.id/">https://lipmb.umbulukumba.ac.id/</a> mengalami kesulitan dalam mengunduh kartu peserta mereka. Kami memohon maaf atas ketidaknyamanan yang mungkin terjadi.</p>
            
                <p>Setelah melakukan pengecekan dan perbaikan, kami senang untuk mengumumkan bahwa masalah tersebut telah diselesaikan dan sekarang kartu peserta sudah dapat diunduh melalui <a href="https://lipmb.umbulukumba.ac.id/pendaftaran-secondregistration">https://lipmb.umbulukumba.ac.id/pendaftaran-secondregistration</a></p>
            
                <p>Kami mengimbau kepada peserta yang sebelumnya belum dapat mengunduh kartu peserta untuk segera mengunjungi situs LIPMB UMB dan melakukan unduhan kartu peserta pada halaman masing-masing peserta.</p>
            
                <p>Mohon untuk peserta agar memeriksa kembali semua informasi yang tercantum pada kartu peserta, dan jika terdapat kesalahan atau ketidaksesuaian data, harap segera menghubungi kami kembali.</p>
            
                <p>Terima kasih atas perhatian dan kerjasamanya.</p>
            
                <p>Hormat kami,</p>
            
                <p>Panitia PMB UMB</p>
            ');

            if ($this->email->send()) {
                return true;
            } else {
                $data = $this->email->printDebugger(['headers']);
                print_r($data);
            }
        }
    }

    //END SEMENTARA -----------------------------------------------------
    //...............................................................
}
