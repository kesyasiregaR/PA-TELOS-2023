<?php
defined('BASEPATH') or exit('No direct script access allowed');

class schedule extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('Schedule_Model', 'schedule');
		$this->load->model('DataProjek_Model', 'dataproject');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul'] = "Halaman Data Schedule";
		$data['schedule'] = $this->schedule->get();
		$this->load->view('user/header');
		$this->load->view('user/schedule/vw_schedule', $data);
		$this->load->view('user/footer');
	}
	public function hapus($id)
	{
		$this->schedule->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Legalitas Berhasil dihapus!</div>');
		redirect('User/schedule');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Schedule";

		$data['dataproject'] = $this->dataproject->get();

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('name', 'name technological', 'required', [
			'required' => 'name Wajib di isi'
		]);

		// $this->form_validation->set_rules('name_of_activity', 'name_of_activity schedule', 'required', [
		// 	'required' => 'Name schedule Wajib di isi'
		// ]);
		$this->form_validation->set_rules('start_date', 'start_date schedule', 'required', [
			'required' => 'start_date schedule Wajib di isi'
		]);
		$this->form_validation->set_rules('end_date', 'end_date schedule', 'required', [
			'required' => 'end_date schedule Wajib di isi'
		]);


		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/schedule/vw_tambah", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'name' => $this->input->post('name'),
				// 'name_of_activity' => $this->input->post('name_of_activity'),
				'start_date' => $this->input->post('start_date'),
				'end_date' => $this->input->post('end_date'),


			];
			$this->schedule->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data data projek Berhasil Ditambah!</div>');
			redirect('user/schedule');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['schedule'] = $this->schedule->getById($id);
		$data['dataproject'] = $this->dataproject->get();
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'name technological', 'required', [
			'required' => 'name Wajib di isi'
		]);
		// $this->form_validation->set_rules('name_of_activity', 'name_of_activity schedule', 'required', [
		// 	'required' => 'Name schedule Wajib di isi'
		// ]);
		$this->form_validation->set_rules('start_date', 'start_date schedule', 'required', [
			'required' => 'start_date schedule Wajib di isi'
		]);
		$this->form_validation->set_rules('end_date', 'end_date schedule', 'required', [
			'required' => 'end_date schedule Wajib di isi'
		]);


		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/schedule/vw_ubah", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'name' => $this->input->post('name'),
				// 'name_of_activity' => $this->input->post('name_of_activity'),
				'start_date' => $this->input->post('start_date'),
				'end_date' => $this->input->post('end_date'),
				'id_schedule' => $this->input->post('id_schedule')
			];

			$this->schedule->update($data, $data['id_schedule']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data schedule Berhasil Diubah!</div>');
			redirect('user/schedule');
		}
	}
}
