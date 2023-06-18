<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('Technological_Model', 'technological');
		$this->load->model('Public_Model', 'Public');


	

	}

	public function index()
	{
		
		$id = $this->session->userdata('id_public');
		$this->load->view('user/header');
		$this->load->view('user/index');
		$this->load->view('user/footer');
		
	}

	
}
