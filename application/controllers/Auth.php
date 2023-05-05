<?php

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		 $this->load->model('Auth_model', 'auth_model');
		
	}
	public function index()
	{
		if ($this->session->userdata('username')) {
			redirect('User/Home');
		}

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('vw_login');
		} else {
			$this->login();
		}
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$calon = $this->db->get_where('public', ['username' => $username])->row_array();
		if ($calon) {
			if (password_verify($password, $calon['password'])) {
				$data = [
					'nama_lengkap' => $calon['nama_lengkap'],
					'username' => $calon['username'],
					'id_public' => $calon['id_public'],
					'level' => $calon['level'],
				];
				$this->session->set_userdata($data);
				
					redirect('User/Home');
				
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Belum Tedaftar! </div>');
			redirect('auth');
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('id_public');
		$this->session->unset_userdata('nama_lengkap');
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout! </div>');
		redirect('Beranda');
	}

	public function regis()
	{
		if ($this->session->userdata('username')) {
			redirect('User/Home');
		}
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', [
			'required' => 'Nama Pengguna Wajib di isi'
		]);
		$this->form_validation->set_rules('email', 'No Hp', 'required', [
			'required' => 'No Hp Pengguna Wajib di isi'
		]);
		$this->form_validation->set_rules('username', 'username', 'required', [
			'required' => 'username Pengguna Wajib di isi'
		]);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[5]',
			[
				'min_length' => 'Password Terlalu Pendek',
				'required' => 'password Pengguna Wajib di isi'
			]
		);
		if ($this->form_validation->run() == false) {
		
		// var_dump($data['konfigurasi']);
		// die;
			$this->load->view('vw_registrasi');
		} else {
			$data = [
				'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level'=> 'masyarakat'
			];
			$this->auth_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Registrasi Berhasil</div>');
			redirect('Auth');
		}
	}

}