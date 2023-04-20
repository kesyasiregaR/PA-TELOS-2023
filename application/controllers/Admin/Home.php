<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in2();
		$this->load->model('CalonSiswa_Model', 'calonsiswa');
		$this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');
		$this->load->model('Pembayaran_Model', 'pembayaran');
		$this->load->model('Auth_Model','calon');
		
	}

	public function index()
	{
		
		$data['jml_siswa'] = $this->calonsiswa->jml_siswa();
		$data['jml_lulus'] = $this->pendaftaran->jml_lulus();
		$data['jml_lunas'] = $this->pembayaran->jml_lunas();
		$this->load->view('admin/header');
		$this->load->view('admin/index',$data);
		$this->load->view('admin/footer');
		
	}

	
}
