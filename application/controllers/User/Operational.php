<?php
defined('BASEPATH') or exit('No direct script access allowed');

class operational extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('Operational_Model', 'operational');
		// $this->load->model('DataProjek_Model', 'dataproject');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul'] = "Halaman Data operational";
		$data['operational'] = $this->operational->getOperationalId($this->session->userdata('id_public'));
		// $data['operational'] = $this->operational->get();
		$this->load->view('user/header');
		$this->load->view('user/operational/vw_operational', $data);
		$this->load->view('user/footer');
	}
	public function hapus($id)
	{
		$this->operational->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Operational Berhasil dihapus!</div>');
		redirect('User/operational');
	}
	public function Detail($id)
	{
		$data['judul'] = "Detail Data Operational";
		$data['operational'] = $this->operational->getOperationalId($id);
		$this->load->view('user/header');
		$this->load->view('user/operational/vw_detail_opr', $data);
		$this->load->view('user/footer');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Operational";
		$data['operational'] = $this->operational->get2($this->session->userdata('id_public'));
		// $data['dataproject'] = $this->dataproject->get();

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		// $this->form_validation->set_rules('name', 'Nama operational', 'required', [
		// 	'required' => 'Nama Wajib di isi'
		// ]);
		$this->form_validation->set_rules('description_before_perfomance', 'deskripsi_before_perfomance operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after_perfomance', 'deskripsi_after_perfomance operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_before_information', 'deskripsi_before_information operational', 'required', [
			'required' => 'deskripsi sebelum operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after_information', 'deskripsi_after_information operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_before_economic', 'deskripsi_before_economic operational', 'required', [
			'required' => 'deskripsi sebelum operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after_economic', 'deskripsi_after_economic operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_before_control', 'deskripsi_before_control operational', 'required', [
			'required' => 'deskripsi sebelum operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after_control', 'deskripsi_after_control operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_before_efficiency', 'deskripsi_before_efficiency operational', 'required', [
			'required' => 'deskripsi sebelum operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after_efficiency', 'deskripsi_after_efficiency operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_before_services', 'deskripsi_before_services operational', 'required', [
			'required' => 'deskripsi sebelum operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after_services', 'deskripsi_after_services operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/operational/vw_tambah", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				// 'id_public' => $this->input->post('id_public'), //ditambah adib
				// 'name' => $this->input->post('name'),
				'description_before_perfomance' => $this->input->post('description_before_perfomance'),
				'description_after_perfomance' => $this->input->post('description_after_perfomance'),
				'description_before_information' => $this->input->post('description_before_information'),
				'description_after_information' => $this->input->post('description_after_information'),
				'description_before_economic' => $this->input->post('description_before_economic'),
				'description_after_economic' => $this->input->post('description_after_economic'),
				'description_before_control' => $this->input->post('description_before_control'),
				'description_after_control' => $this->input->post('description_after_control'),
				'description_before_efficiency' => $this->input->post('description_before_efficiency'),
				'description_after_efficiency' => $this->input->post('description_after_efficiency'),
				'description_before_services' => $this->input->post('description_before_services'),
				'description_after_services' => $this->input->post('description_after_services'),
				'id_public' => $this->session->userdata('id_public'),
			];
			$this->operational->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data operational Berhasil Ditambah!</div>');
			redirect('user/operational');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['operational'] = $this->operational->getById($id);
		// $data['dataproject'] = $this->dataproject->get();

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		// $this->form_validation->set_rules('name', 'Nama operational', 'required', [
		// 	'required' => 'Nama Wajib di isi'
		// ]);
		$this->form_validation->set_rules('description_before_perfomance', 'deskripsi_before_perfomance operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after_perfomance', 'deskripsi_after_perfomance operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_before_information', 'deskripsi_before_information operational', 'required', [
			'required' => 'deskripsi sebelum operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after_information', 'deskripsi_after_information operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_before_economic', 'deskripsi_before_economic operational', 'required', [
			'required' => 'deskripsi sebelum operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after_economic', 'deskripsi_after_economic operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_before_control', 'deskripsi_before_control operational', 'required', [
			'required' => 'deskripsi sebelum operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after_control', 'deskripsi_after_control operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_before_efficiency', 'deskripsi_before_efficiency operational', 'required', [
			'required' => 'deskripsi sebelum operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after_efficiency', 'deskripsi_after_efficiency operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_before_services', 'deskripsi_before_services operational', 'required', [
			'required' => 'deskripsi sebelum operational Wajib di isi'
		]);
		$this->form_validation->set_rules('description_after_services', 'deskripsi_after_services operational', 'required', [
			'required' => 'deskripsi sesudah operational Wajib di isi'
		]);



		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/operational/vw_ubah", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				// 'name' => $this->input->post('name'),
				'description_before_perfomance' => $this->input->post('description_before_perfomance'),
				'description_after_perfomance' => $this->input->post('description_after_perfomance'),
				'description_before_information' => $this->input->post('description_before_information'),
				'description_after_information' => $this->input->post('description_after_information'),
				'description_before_economic' => $this->input->post('description_before_economic'),
				'description_after_economic' => $this->input->post('description_after_economic'),
				'description_before_control' => $this->input->post('description_before_control'),
				'description_after_control' => $this->input->post('description_after_control'),
				'description_before_efficiency' => $this->input->post('description_before_efficiency'),
				'description_after_efficiency' => $this->input->post('description_after_efficiency'),
				'description_before_services' => $this->input->post('description_before_services'),
				'description_after_services' => $this->input->post('description_after_services'),
				'id_operational' => $this->input->post('id_operational')
			];

			$this->operational->update($data, $data['id_operational']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data operational Berhasil Diubah!</div>');
			redirect('user/operational');
		}
	}
}
