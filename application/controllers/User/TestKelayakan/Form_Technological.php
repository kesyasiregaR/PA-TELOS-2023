<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Technological extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		 $this->load->model('FormTechnological_Model','form_technological');
		$this->load->library('form_validation');
	}
	public function index()
	{
		// $data['judul']="Halaman Data Project";
		$data['judul1'] = "Maaf Anda Telah Melakukan Test Kelayakan Pada Form Teknologi";
		$data['form_technological']=$this->form_technological->get();
		$this->load->view('user/header');
		$this->load->view('user/testlayak/formtechnological',$data);
		$this->load->view('user/footer');
		
	}
	public function hapus($id){
		$this->form_technological->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data teknologi Berhasil dihapus!</div>');
		redirect('User/form_technological');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Data technological";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('a1', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('a2', '', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('a3', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('a4', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('a5', '', 'required', [
			'required' => ' Wajib di isi'
		]);
	
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/testlayak/form_technological", $data);
			$this->load->view("user/footer");
		}  else {
			$data = [
				'a1' => $this->input->post('a1'),
				'a2' => $this->input->post('a2'),
				'a3' => $this->input->post('a3'),
				'a4' => $this->input->post('a4'),
				'a5' => $this->input->post('a5'),
		
			];
			$this->form_technological->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data data projek Berhasil Ditambah!</div>');
			redirect('user/TestKelayakan/form_technological');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['form_technological'] = $this->form_technological->getById($id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('a1', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('a2', '', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('a3', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('a4', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('a5', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/testlayak/form_technological", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'a1' => $this->input->post('a1'),
				'a2' => $this->input->post('a2'),
				'a3' => $this->input->post('a3'),
				'a4' => $this->input->post('a4'),
				'a5' => $this->input->post('a5'),
			];

			$this->form_technological->update($data,$data ['id_form_technological']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data form_technological Berhasil Diubah!</div>');
			redirect('user/testlayak/form_technological');
		}
	}
}