<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataprojek extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('DataProjek_Model','dataproject');
		$this->load->model('Public_Model','public');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul']="Data Projek";
		$data['dataproject'] = $this->dataproject->getDataprojectId($this->session->userdata('id_public'));
		$this->load->view('user/header');
		$this->load->view('user/dataprojek/vw_dataprojek',$data);
		$this->load->view('user/footer');
		
	}
	public function hapus($id){
		$this->dataproject->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Berhasil dihapus!</div>');
		redirect('User/dataprojek');
	}
	function tambah()
	{
		$data['dataproject'] = $this->dataproject->get2($this->session->userdata('id_public')); 
		$data['judul'] = "Tambah Data Projek";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

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
			$this->load->view("user/header", $data);
			$this->load->view("user/dataprojek/vw_tambah", $data);
			$this->load->view("user/footer");
		}  else {
			$data = [
				'id_public' => $this->input->post('id_public'), //ditambah adib
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'team_name' => $this->input->post('team_name'),
				'id_public' => $this->session->userdata('id_public'),
		
			];
			$this->dataproject->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
			redirect('user/dataprojek');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['dataproject'] = $this->dataproject->getById($id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

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
			$this->load->view("user/header", $data);
			$this->load->view("user/dataprojek/vw_ubah", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'team_name' => $this->input->post('team_name'),
				'id_dataproject' => $this->input->post('id_dataproject')
			];

			$this->dataproject->update($data,$data ['id_dataproject']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
			redirect('user/dataprojek');
		}
	}
}