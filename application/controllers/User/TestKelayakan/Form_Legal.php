<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_Legal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('FormLegal_Model', 'form_legal');
		$this->load->library('form_validation');
	}
	public function index()
	{
		// $data['judul']="Halaman Data Project";
		$data['form_legal'] = $this->form_legal->get();
		$this->load->view('user/header');
		$data['judul1'] = "Maaf Anda Telah Melakukan Test Kelayakan Pada Form Legalitas";
		$this->load->view('user/testlayak/formlegal', $data);
		$this->load->view('user/footer');

	}
	public function hapus($id)
	{
		$this->dataproject->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data data projek Berhasil dihapus!</div>');
		redirect('User/form_legal');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Legalitas";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('c1', '', 'required', [
			'required' => ' Wajic di isi'
		]);
		$this->form_validation->set_rules('c2', '', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('c3', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('c4', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('c5', '', 'required', [
			'required' => ' Wajib di isi'
		]);


		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/testlayak/form_legal", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'c1' => $this->input->post('c1'),
				'c2' => $this->input->post('c2'),
				'c3' => $this->input->post('c3'),
				'c4' => $this->input->post('c4'),
				'c5' => $this->input->post('c5'),

			];
			$this->form_legal->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data data projek Berhasil Ditambah!</div>');
			redirect('user/TestKelayakan/form_legal');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['form_legal'] = $this->form_legal->getById($id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('c1', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('c2', '', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('c3', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('c4', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('c5', '', 'required', [
			'required' => ' Wajib di isi'
		]);


		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/testlayak/form_legal", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'c1' => $this->input->post('c1'),
				'c2' => $this->input->post('c2'),
				'c3' => $this->input->post('c3'),
				'c4' => $this->input->post('c4'),
				'c5' => $this->input->post('c5'),
			];

			$this->form_legal->update($data, $data['id_form_legal']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data dataproject Berhasil Diubah!</div>');
			redirect('user/testlayak/form_legal');
		}
	}
}