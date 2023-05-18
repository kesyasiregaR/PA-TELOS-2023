<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataprojek extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('DataProjek_Model','dataproject');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul']="Halaman Data Project";
		$data['dataproject']=$this->dataproject->get();
		$this->load->view('admin/header');
		$this->load->view('admin/dataprojek/vw_dataprojek',$data);
		$this->load->view('admin/footer');
		
	}
	public function hapus($id){
		$this->dataproject->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data data projek Berhasil dihapus!</div>');
		redirect('admin/dataprojek');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Projek";

		// $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->admindata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Nama dataproject', 'required', [
			'required' => 'Nama dataproject Wajib di isi'
		]);
		$this->form_validation->set_rules('description', 'Deskripsi dataproject', 'required', [
			'required' => 'Deskripsi dataproject Wajib di isi'
		]);
		$this->form_validation->set_rules('team_name', 'Team Name dataproject', 'required', [
			'required' => 'Team name Wajib di isi'
		]);
	
	
		if ($this->form_validation->run() == false) {
			$this->load->view("admin/header", $data);
			$this->load->view("admin/dataprojek/vw_tambah", $data);
			$this->load->view("admin/footer");
		}  else {
			$data = [
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'team_name' => $this->input->post('team_name'),
		
			];
			$this->dataproject->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data data projek Berhasil Ditambah!</div>');
			redirect('admin/dataprojek');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['dataproject'] = $this->dataproject->getById($id);
		// $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->admindata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Nama dataproject', 'required', [
			'required' => 'Nama dataproject Wajib di isi'
		]);
		$this->form_validation->set_rules('description', 'Deskripsi dataproject', 'required', [
			'required' => 'Deskripsi dataproject Wajib di isi'
		]);
		$this->form_validation->set_rules('team_name', 'Team Name dataproject', 'required', [
			'required' => 'Deskripsi dataproject Wajib di isi'
		]);
		
	
		if ($this->form_validation->run() == false) {
			$this->load->view("admin/header", $data);
			$this->load->view("admin/dataprojek/vw_ubah", $data);
			$this->load->view("admin/footer");
		} else {
			$data = [
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'team_name' => $this->input->post('team_name'),
				'id_dataproject' => $this->input->post('id_dataproject')
			];

			$this->dataproject->update($data,$data ['id_dataproject']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data dataproject Berhasil Diubah!</div>');
			redirect('admin/dataprojek');
		}
	}
}