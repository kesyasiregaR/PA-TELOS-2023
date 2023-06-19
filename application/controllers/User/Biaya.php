<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class biaya extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('Biaya_Model','economic_komponen_biaya');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul']="Halaman Data Komponen Biaya";
		$data['economic_komponen_biaya']=$this->economic_komponen_biaya->get();
		$this->load->view('user/header');
		$this->load->view('user/biaya/vw_biaya',$data);
		$this->load->view('user/footer');
		
	}
	public function hapus($id){
		$this->economic_komponen_biaya->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Berhasil dihapus!</div>');
		redirect('User/biaya');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Komponen Biaya";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('komponen_biaya', 'komponen biaya', 'required', [
			'required' => 'Wajib di isi'
		]);
		$this->form_validation->set_rules('jenis_cost', 'jenis ', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('biaya_tahun1', 'tahun 1', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('biaya_tahun2', 'tahun 2', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('biaya_tahun3', 'tahun 3', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('biaya_tahun4', 'tahun 4', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('biaya_tahun5', 'ttahun 5', 'required', [
			'required' => ' Wajib di isi'
		]);
		
		
		
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/biaya/vw_tambah", $data);
			$this->load->view("user/footer");
		}  else {
			$data = [
				'komponen_biaya' => $this->input->post('komponen_biaya'),
				'jenis_cost' => $this->input->post('jenis_cost'),
				'biaya_tahun1' => $this->input->post('biaya_tahun1'),
				'biaya_tahun2' => $this->input->post('biaya_tahun2'),
				'biaya_tahun3' => $this->input->post('biaya_tahun3'),
				'biaya_tahun4' => $this->input->post('biaya_tahun4'),
				'biaya_tahun5' => $this->input->post('biaya_tahun5'),
		
			];
			$this-> economic_komponen_biaya->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
			redirect('user/biaya');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['economic_komponen_biaya'] = $this->economic_komponen_biaya->getById($id);

        $this->form_validation->set_rules('komponen_biaya', 'tingkat pengembalian', 'required', [
			'required' => 'tingkat pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('jenis_cost', 'taraf pajak', 'required', [
			'required' => 'taraf pajak Wajib di isi'
		]);
		$this->form_validation->set_rules('biaya_tahun1', 'tahun 1', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('biaya_tahun2', 'tahun 2', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('biaya_tahun3', 'tahun 3', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('biaya_tahun4', 'tahun 4', 'required', [
			'required' => ' Wajib di isi'
		]);
		$this->form_validation->set_rules('biaya_tahun5', 'ttahun 5', 'required', [
			'required' => ' Wajib di isi'
		]);
		
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/biaya/vw_ubah", $data);
			$this->load->view("user/footer");
		} else {
			$data = [
				'komponen_biaya' => $this->input->post('komponen_biaya'),
				'jenis_cost' => $this->input->post('jenis_cost'),
				'biaya_tahun1' => $this->input->post('biaya_tahun1'),
				'biaya_tahun2' => $this->input->post('biaya_tahun2'),
				'biaya_tahun3' => $this->input->post('biaya_tahun3'),
				'biaya_tahun4' => $this->input->post('biaya_tahun4'),
				'biaya_tahun5' => $this->input->post('biaya_tahun5'),
		
				'id_economic_komponen_biaya' => $this->input->post('id_economic_komponen_biaya')
			];

			$this-> economic_komponen_biaya->update($data,$data ['id_economic_komponen_biaya']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
			redirect('user/biaya');
		}
	}
}