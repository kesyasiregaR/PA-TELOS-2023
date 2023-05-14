<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in2();
        $this->load->model('Technological_Model', 'technological');
        $this->load->model('DataProjek_Model', 'dataproject');
        $this->load->model('Public_Model', 'Public');
        $this->load->model('Auth_model', 'auth_model');

        // $this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');
        // $this->load->model('Pembayaran_Model', 'pembayaran');
        // $this->load->model('Auth_Model','calon');

    }

    public function index()
    {

        $id = $this->session->userdata('id_public');
        $data['jml_data'] = $this->dataproject->jml_data();
        $this->load->view('admin/header');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }
}
