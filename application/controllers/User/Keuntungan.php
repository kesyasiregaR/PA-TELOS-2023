<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keuntungan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('Keuntungan_Model','economic_keuntungan');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul']="Data Keuntungan ";
		$data['economic_keuntungan'] = $this->economic_keuntungan->getKeuntunganId($this->session->userdata('id_public'));
		// $data['economic_keuntungan']=$this->economic_keuntungan->get();
		$this->load->view('user/header');
		$this->load->view('user/keuntungan/vw_keuntungan',$data);
		$this->load->view('user/footer');
		
	}
	public function hapus($id){
		$this-> economic_keuntungan->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Berhasil dihapus!</div>');
		redirect('User/keuntungan');
	}
	function tambah()
	{
		$data['economic_keuntungan'] = $this->economic_keuntungan->get2($this->session->userdata('id_public')); 
		$data['judul'] = " Tambah Data ";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('sumber_keuntungan', 'sumber_keuntungan', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('keuntungan_tahun1', 'keuntungan_tahun1', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('keuntungan_tahun2', 'keuntungan_tahun2', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('keuntungan_tahun3', 'keuntungan_tahun3', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('keuntungan_tahun4', 'keuntungan_tahun4', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('keuntungan_tahun5', 'keuntungan_tahun5', 'required', [
			'required' => 'Wajib di isi'
		]);
		
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/keuntungan/vw_tambah", $data);
			$this->load->view("user/footer");
		}  else {
			$data = [
				'sumber_keuntungan' => $this->input->post('sumber_keuntungan'),
				'keuntungan_tahun1' => $this->input->post('keuntungan_tahun1'),
				'keuntungan_tahun2' => $this->input->post('keuntungan_tahun2'),
				'keuntungan_tahun3' => $this->input->post('keuntungan_tahun3'),
				'keuntungan_tahun4' => $this->input->post('keuntungan_tahun4'),
				'keuntungan_tahun5' => $this->input->post('keuntungan_tahun5'),
				'id_public' => $this->session->userdata('id_public'),
				
			];
			$this-> economic_keuntungan->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
			redirect('user/keuntungan');
		}
	}
	public function edit($id)
	{
		$data['judul'] = " Ubah Data";
		$data['economic_keuntungan'] = $this->economic_keuntungan->getById($id);

		$this->form_validation->set_rules('sumber_keuntungan', 'sumber_keuntungan', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('keuntungan_tahun1', 'keuntungan_tahun1', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('keuntungan_tahun2', 'keuntungan_tahun2', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('keuntungan_tahun3', 'keuntungan_tahun3', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('keuntungan_tahun4', 'keuntungan_tahun4', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('keuntungan_tahun5', 'keuntungan_tahun5', 'required', [
			'required' => 'Wajib di isi'
		]);
		
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/keuntungan/vw_ubah", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'sumber_keuntungan' => $this->input->post('sumber_keuntungan'),
				'keuntungan_tahun1' => $this->input->post('keuntungan_tahun1'),
				'keuntungan_tahun2' => $this->input->post('keuntungan_tahun2'),
				'keuntungan_tahun3' => $this->input->post('keuntungan_tahun3'),
				'keuntungan_tahun4' => $this->input->post('keuntungan_tahun4'),
				'keuntungan_tahun5' => $this->input->post('keuntungan_tahun5'),
				'id_economic_keuntungan' => $this->input->post('id_economic_keuntungan')
			];

			$this-> economic_keuntungan->update($data,$data ['id_economic_keuntungan']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
			redirect('user/keuntungan');
		}
	}
}