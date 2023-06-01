<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Economic extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('FormEconomic_Model','form_economic');
		$this->load->library('form_validation');
	}
	public function index()
	{
		// $data['judul']="Halaman Data Project";
		// $data['form_economic']=$this->form_economic->get();
		$data['form_economic'] = $this->form_economic->get();
		$this->load->view('user/header');
		$data['judul1'] = "Maaf Anda Telah Melakukan Test Kelayakan Pada Form Economic";
		$this->load->view('user/testlayak/formeconomic',$data);
		$this->load->view('user/footer');
		
	}
	public function hapus($id){
		$this->form_economic->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data data projek Berhasil dihapus!</div>');
		redirect('User/form_economic');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Projek";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('b1', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('b2', '', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('b3', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('b4', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('b5', '', 'required', [
			'required' => ' Wajib di isi'
		]);
	
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/testlayak/form_economic", $data);
			$this->load->view("user/footer");
		}  else {
			$data = [
				'b1' => $this->input->post('b1'),
				'b2' => $this->input->post('b2'),
				'b3' => $this->input->post('b3'),
				'b4' => $this->input->post('b4'),
				'b5' => $this->input->post('b5'),
		
			];
			$this->form_economic->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data data projek Berhasil Ditambah!</div>');
			redirect('user/TestKelayakan/form_economic');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['form_economic'] = $this->form_economic->getById($id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('b1', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('b2', '', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('b3', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('b4', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('b5', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/testlayak/form_economic", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'b1' => $this->input->post('b1'),
				'b2' => $this->input->post('b2'),
				'b3' => $this->input->post('b3'),
				'b4' => $this->input->post('b4'),
				'b5' => $this->input->post('b5'),
			];

			$this->form_economic->update($data,$data ['id_form_economic']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data form_economic Berhasil Diubah!</div>');
			redirect('user/testlayak/form_economic');
		}
	}
}