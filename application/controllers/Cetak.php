<?php
// require FCPATH. 'vendor/autoload.php';
defined('BASEPATH') or exit('No direct script access allowed');
// require_once __DIR__ . 'uploads/vendor/autoload.php';
// use Mpdf\Mpdf;
// require_once 'vendor/autoload.php';
class Cetak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in2();
        $this->load->model('Public_Model', 'public');
        // $this->load->model('DataProject_Model', 'dataproject');
        $this->load->model('Technological_Model', 'technological');
        $this->load->model('DataPerusahaan_Model', 'economic_data_perusahaan');
        $this->load->model('Auth_Model', 'calon');

    }

    public function index()
    {
       
		$data['judul']="Bukti Pendaftaran";
        $data['technological'] = $this->technological->getTechnologicalId($this->session->userdata('id_public'));

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->set_option('isRemoteEnabled', true);
        // $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('cetak',$data);

        // $mpdf->WriteHTML($html);
        // $mdf->Output();
    }



    

}