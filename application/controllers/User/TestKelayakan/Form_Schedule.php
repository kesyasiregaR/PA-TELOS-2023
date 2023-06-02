<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Schedule extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('FormSchedule_Model','form_schedule');
		$this->load->library('form_validation');
	}
	public function index()
	{
		// $data['judul']="Halaman Data Project";
		$data['form_schedule']=$this->form_schedule->get();
		$this->load->view('user/header');
		$data['judul1'] = "Maaf Anda Telah Melakukan Test Kelayakan Pada Form Economic";
		$this->load->view('user/testlayak/formschedule',$data);
		$this->load->view('user/footer');
		
	}
	public function hapus($id){
		$this->form_schedule->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data data projek Berhasil dihapus!</div>');
		redirect('User/form_schedule');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Projek";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('e1', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('e2', '', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('e3', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('e4', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('e5', '', 'required', [
			'required' => ' Wajib di isi'
		]);
	
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/testlayak/form_schedule", $data);
			$this->load->view("user/footer");
		}  else {
			$data = [
				'e1' => $this->input->post('e1'),
				'e2' => $this->input->post('e2'),
				'e3' => $this->input->post('e3'),
				'e4' => $this->input->post('e4'),
				'e5' => $this->input->post('e5'),
		
			];
			$this->form_schedule->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data data projek Berhasil Ditambah!</div>');
			redirect('user/TestKelayakan/form_schedule');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['form_schedule'] = $this->form_schedule->getById($id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('e1', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('e2', '', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('e3', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('e4', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('e5', '', 'required', [
			'required' => ' Wajib di isi'
		]);
		
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/testlayak/form_schedule", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'e1' => $this->input->post('e1'),
				'e2' => $this->input->post('e2'),
				'e3' => $this->input->post('e3'),
				'e4' => $this->input->post('e4'),
				'e5' => $this->input->post('e5'),
			];

			$this->form_schedule->update($data,$data ['id_form_schedule']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data form_schedule Berhasil Diubah!</div>');
			redirect('user/testlayak/form_schedule');
		}
	}
}