<?php
defined('BASEPATH') or exit('No direct script access allowed');

class operational extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('Operational_Model', 'operational');
		$this->load->model('DataProjek_Model', 'dataproject');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul'] = "Halaman Data Operational";
		$data['operational'] = $this->operational->get();
		$this->load->view('user/header');
		$this->load->view('user/operational/vw_operational', $data);
		$this->load->view('user/footer');
	}
	public function hapus($id)
	{
		$this->operational->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data data operational Berhasil dihapus!</div>');
		redirect('User/operational');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Operational";

		$data['dataproject'] = $this->dataproject->get();

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('name', 'name technological', 'required', [
			'required' => 'name Wajib di isi'
		]);
		$this->form_validation->set_rules('category', 'category operational', 'required', [
			'required' => 'Categori operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_before', 'deskripsi_before operational', 'required', [
			'required' => 'deskripsi_before operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after', 'deskripsi_after operational', 'required', [
			'required' => 'deskripsi__after operational Wajib di isi'
		]);
		//$this->form_validation->set_rules('improvement', 'improvement dataproject', 'required', [
		//	'required' => 'improvement dataproject Wajib di isi'
		//]);


		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/operational/vw_tambah", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'name' => $this->input->post('name'),
				'category' => $this->input->post('category'),
				'description_before' => $this->input->post('description_before'),
				'description_after' => $this->input->post('description_after'),
				//'improvement' => $this->input->post('improvement'),//

			];
			$this->operational->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data data projek Berhasil Ditambah!</div>');
			redirect('user/operational');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['operational'] = $this->operational->getById($id);
		$data['dataproject'] = $this->dataproject->get();

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'name technological', 'required', [
			'required' => 'name Wajib di isi'
		]);
		$this->form_validation->set_rules('category', 'category dataproject', 'required', [
			'required' => 'category operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_before', 'deskripsi_before operational', 'required', [
			'required' => 'deskripsi_before operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after', 'deskripsi_after operational', 'required', [
			'required' => 'deskripsi__after operational Wajib di isi'
		]);
		//$this->form_validation->set_rules('improvement', 'improvement dataproject', 'required', [
		//	'required' => 'improvement dataproject Wajib di isi'
		//]);


		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/operational/vw_ubah", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'name' => $this->input->post('name'),
				'category' => $this->input->post('category'),
				'description_before' => $this->input->post('description_before'),
				'description_after' => $this->input->post('description_after'),
				//'improvement' => $this->input->post('improvement'),
				'id_operational' => $this->input->post('id_operational')
			];

			$this->operational->update($data, $data['id_operational']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data operational Berhasil Diubah!</div>');
			redirect('user/operational');
		}
	}
}
