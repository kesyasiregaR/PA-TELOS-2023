<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataperusahaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('DataPerusahaan_Model','economic_data_perusahaan');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul']="Halaman Data Usaha";
		$data['economic_data_perusahaan'] = $this->economic_data_perusahaan->getDataPerusahaanId($this->session->userdata('id_public'));
		// $data['economic_data_perusahaan']=$this->economic_data_perusahaan->get();
		$this->load->view('user/header');
		$this->load->view('user/dataperusahaan/vw_dataperusahaan',$data);
		$this->load->view('user/footer');
		
	}
	public function hapus($id){
		$this->economic_data_perusahaan->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Berhasil dihapus!</div>');
		redirect('User/dataperusahaan');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Usaha";
		$data['economic_data_perusahaan'] = $this->economic_data_perusahaan->get2($this->session->userdata('id_public')); 

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('tingkat_pengembalian', 'tingkat pengembalian', 'required', [
			'required' => 'tingkat pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('tarif_pajak', 'taraf pajak', 'required', [
			'required' => 'taraf pajak Wajib di isi'
		]);
		
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/dataperusahaan/vw_tambah", $data);
			$this->load->view("user/footer");
		}  else {
			$data = [
				'tingkat_pengembalian' => $this->input->post('tingkat_pengembalian'),
				'tarif_pajak' => $this->input->post('tarif_pajak'),
				'id_public' => $this->session->userdata('id_public'),
				// 'team_name' => $this->input->post('team_name'),
		
			];
			$this-> economic_data_perusahaan->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
			redirect('user/dataperusahaan');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['economic_data_perusahaan'] = $this->economic_data_perusahaan->getById($id);

        $this->form_validation->set_rules('tingkat_pengembalian', 'tingkat pengembalian', 'required', [
			'required' => 'tingkat pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('tarif_pajak', 'taraf pajak', 'required', [
			'required' => 'taraf pajak Wajib di isi'
		]);
		// $this->form_validation->set_rules('team_name', 'Team tingkat pengembalian', 'required', [
		// 	'required' => 'Deskrtingkat pengembalian Wajib di isi'
		// ]);
		
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/dataperusahaan/vw_ubah", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'tingkat_pengembalian' => $this->input->post('tingkat_pengembalian'),
				'tarif_pajak' => $this->input->post('tarif_pajak'),
				'id_economic_data_perusahaan' => $this->input->post('id_economic_data_perusahaan')
			];

			$this-> economic_data_perusahaan->update($data,$data ['id_economic_data_perusahaan']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
			redirect('user/dataperusahaan');
		}
	}
}