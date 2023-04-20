<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelulusan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in2();
		$this->load->model('CalonSiswa_Model', 'calonsiswa');
		$this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');
		$this->load->library('form_validation');
	}
	public function terima()
	{
		$data['judul'] = "Halaman Data Siswa Diterima";
		$data['calonsiswa'] = $this->calonsiswa->get_terima();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelulusan/diterima', $data);
		$this->load->view('admin/footer');
	}

	public function tolak()
	{
		$data['judul'] = "Halaman Data Siswa Ditolak";
		$data['calonsiswa'] = $this->calonsiswa->get_tolak();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelulusan/ditolak', $data);
		$this->load->view('admin/footer');
	}

	public function belum_diverifikasi()
	{
		$data['judul'] = "Halaman Data Siswa Diverifikasi";
		$data['calonsiswa'] = $this->calonsiswa->get_verifikasi();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelulusan/verifikasi', $data);
		$this->load->view('admin/footer');
	}
	public function verifikasi($id)
	{

		$data['judul'] = "Halaman Ubah Status";
		$data['calonsiswa'] = $this->calonsiswa->getById($id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('status', 'Status', 'required', [
			'required' => 'Status Wajib di isi'
		]);

		//$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
		//'required' => 'Gambar Wajib di isi'
		//]);

		if ($this->form_validation->run() == false) {
			$this->load->view("admin/header", $data);
			$this->load->view("admin/siswa/vw_ubah", $data);
			$this->load->view('admin/footer', $data);
		} else {
			$data = [

				'status' => $this->input->post('status'),
				// 'id_siswa' => $this->session->userdata('id_siswa'),

			];
			// var_dump($id);die();
			$this->pendaftaran->update(['id_siswa' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Kelulusan siswa berhasil di ubah!</div>');
			redirect('admin/Siswa');
		}
	}
}