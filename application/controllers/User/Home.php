<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		// $this->load->model('CalonSiswa_Model', 'calonsiswa');
		// $this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');
		// $this->load->model('Pembayaran_Model', 'pembayaran');
		// $this->load->model('Auth_Model','calon');
		
	}

	public function index()
	{
		
		
		$this->load->view('user/header');
		$this->load->view('user/index');
		$this->load->view('user/footer');
		
	}

	
}
