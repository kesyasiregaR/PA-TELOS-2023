<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class technological extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('Technological_Model','technological');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul']="Halaman Data Project";
		$data['technological']=$this->technological->get();
		$this->load->view('user/header');
		$this->load->view('user/technological/vw_technological',$data);
		$this->load->view('user/footer');
		
	}
	public function hapus($id){
		$this->technological->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data data projek Berhasil dihapus!</div>');
		redirect('User/technological');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Technology";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('category', 'Category', 'required', [
			'required' => 'category Wajib diisi'
		]);
		$this->form_validation->set_rules('item', 'Item', 'required', [
			'required' => 'Item Wajib diisi'
		]);
		$this->form_validation->set_rules('specification', 'Specification', 'required', [
			'required' => 'Specification Wajib diisi'
		]);
		$this->form_validation->set_rules('price', 'Price', 'required', [
			'required' => 'Price Wajib diisi'
		]);
		$this->form_validation->set_rules('source', 'Source', 'required', [
			'required' => 'Source Wajib diisi'
		]);
	
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/technological/vw_tambah", $data);
			$this->load->view("user/footer");
		}  else {
			$data = [
				'category' => $this->input->post('category'),
				'item' => $this->input->post('item'),
				'specification' => $this->input->post('specification'),
				'price' => $this->input->post('price'),
				'source' => $this->input->post('source'),
		
			];
			$this->technological->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data data projek Berhasil Ditambah!</div>');
			redirect('user/technological');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['technological'] = $this->technological->getById($id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('category', 'Category', 'required', [
			'required' => 'category Wajib diisi'
		]);
		$this->form_validation->set_rules('item', 'Item', 'required', [
			'required' => 'Item Wajib diisi'
		]);
		$this->form_validation->set_rules('specification', 'Specification', 'required', [
			'required' => 'Specification Wajib diisi'
		]);
		$this->form_validation->set_rules('price', 'Price', 'required', [
			'required' => 'Price Wajib diisi'
		]);
		$this->form_validation->set_rules('source', 'Source', 'required', [
			'required' => 'Source Wajib diisi'
		]);
		
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/technological/vw_ubah", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'category' => $this->input->post('category'),
				'item' => $this->input->post('item'),
				'specification' => $this->input->post('specification'),
				'price' => $this->input->post('price'),
				'source' => $this->input->post('source'),
				'id_technologic' => $this->input->post('id_technologic')
			];

			$this->technological->update($data,$data ['id_technologic']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data technological Berhasil Diubah!</div>');
			redirect('user/technological');
		}
	}
}