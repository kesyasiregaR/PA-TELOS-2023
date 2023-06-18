<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class investasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('Investasi_Model','economic_investasi');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul']="Halaman Data Investasi";
		$data['economic_investasi']=$this->economic_investasi->get();
		$this->load->view('user/header');
		$this->load->view('user/investasi/vw_investasi',$data);
		$this->load->view('user/footer');
		
	}
	public function hapus($id){
		$this-> economic_investasi->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Berhasil dihapus!</div>');
		redirect('User/investasi');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Investasi";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('rincian_investasi', 'rincian_investasi', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('harga_tahun1', 'harga_tahun1', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('total', 'total', 'required', [
			'required' => ' Wajib di isi'
		]);
	
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/investasi/vw_tambah", $data);
			$this->load->view("user/footer");
		}  else {
			$data = [
				'rincian_investasi' => $this->input->post('rincian_investasi'),
				'harga_tahun1' => $this->input->post('harga_tahun1'),
				'total' => $this->input->post('total'),
		
			];
			$this-> economic_investasi->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
			redirect('user/investasi');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['economic_investasi'] = $this->economic_investasi->getById($id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('rincian_investasi', 'rincian investasi', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('harga_tahun1', 'harga tahun1', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('total', 'Total', 'required', [
			'required' => ' Wajib di isi'
		]);
		
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/investasi/vw_ubah", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'rincian_investasi' => $this->input->post('rincian_investasi'),
				'harga_tahun1' => $this->input->post('harga_tahun1'),
				'total' => $this->input->post('total'),
				'id_economic_investasi' => $this->input->post('id_economic_investasi')
			];

			$this-> economic_investasi->update($data,$data ['id_economic_investasi']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
			redirect('user/investasi');
		}
	}
}