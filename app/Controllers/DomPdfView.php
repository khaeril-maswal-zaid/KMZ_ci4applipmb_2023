<?php

namespace App\Controllers;

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

class DomPdfView extends BaseController
{
    protected $session;
    protected $dompdf;

    public function __construct()
    {
        $this->session = session();

        $options = new Options();
        $options->set('defaultFont', 'Helvetica');
        $options->set('isRemoteEnabled', TRUE);
        $options->set('debugKeepTemp', true);
        $options->set('isHtml5ParserEnabled', true);
        $this->dompdf = new Dompdf($options);
    }

    public function index($target)
    {
        $datapdfview =  $this->session->get('datapdfview');

        $html = view('dompdf/' . $target, $datapdfview);

        // echo $html;
        // die;

        #viewpage data
        $this->dompdf->loadHtml($html);
        $this->dompdf->set_option('defaultMediaType', 'all');
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();

        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $datapdfview['title'] . '_' .  $target . '.pdf"');

        // output the generated PDF directly to browser
        $this->dompdf->stream($datapdfview['title'] . '_' . $target . '.pdf');

        // exit script after sending the PDF to the browser
        exit();

        //Kayaknya tidak dipakai ji
        // $this->dompdf->stream();
        // $this->dompdf->stream($datapdfview['title'], array("Attachment" => false));
    }
}
