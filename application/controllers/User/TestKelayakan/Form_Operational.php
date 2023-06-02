<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_Operational extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('FormOperational_Model', 'form_operational');
		$this->load->library('form_validation');
	}
	public function index()
	{
		// $data['judul']="Halaman Data Project";
		$data['form_operational'] = $this->form_operational->get();
		$this->load->view('user/header');
		$data['judul1'] = "Maaf Anda Telah Melakukan Test Kelayakan Pada Form Operational";
		$this->load->view('user/testlayak/formoperational', $data);
		$this->load->view('user/footer');

	}
	public function hapus($id){
		$this->form_operational->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data data projek Berhasil dihapus!</div>');
		redirect('User/form_operational');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Operational";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('d1', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('d2', '', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('d3', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('d4', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('d5', '', 'required', [
			'required' => ' Wajib di isi'
		]);


		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/testlayak/form_operational", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'd1' => $this->input->post('d1'),
				'd2' => $this->input->post('d2'),
				'd3' => $this->input->post('d3'),
				'd4' => $this->input->post('d4'),
				'd5' => $this->input->post('d5'),

			];
			$this->form_operational->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data data projek Berhasil Ditambah!</div>');
			redirect('user/TestKelayakan/form_operational');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['form_operational'] = $this->form_operational->getById($id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('d1', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('d2', '', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('d3', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('d4', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('d5', '', 'required', [
			'required' => ' Wajib di isi'
		]);


		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/testlayak/form_operational", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'd1' => $this->input->post('d1'),
				'd2' => $this->input->post('d2'),
				'd3' => $this->input->post('d3'),
				'd4' => $this->input->post('d4'),
				'd5' => $this->input->post('d5'),
			];

			$this->form_operational->update($data, $data['id_form_operational']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data dataproject Berhasil Diubah!</div>');
			redirect('user/testlayak/form_operational');
		}
	}
}
