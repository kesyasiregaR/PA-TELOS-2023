<?php

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if ($this->session->userdata('username')) {
			redirect('User/Home');
		}

		$this->form_validation->set_rules('email_pengguna', 'email_pengguna', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('vw_login');
		} else {
			$this->login();
		}
	}

	public function login()
	{
		$email_pengguna = $this->input->post('email_pengguna');
		$password = $this->input->post('password');
		$calon = $this->db->get_where('pengguna', ['email_pengguna' => $email_pengguna])->row_array();
		if ($calon) {
			if (password_verify($password, $calon['password'])) {
				$data = [
					'nama_lengkap' => $calon['nama_lengkap'],
					'email_pengguna' => $calon['email_pengguna'],
					//'id_siswa' => $calon['id_siswa'],
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

	// public function login()
	// {
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');

	// 	$user = $this->auth_model->read_by_username($username);

	// 	if ($user) {

	// 		if (password_verify($password, $user->password)) {

	// 			$session = [
	// 				'id_pengguna' => $user->id_pengguna,
	// 				'nama_pengguna' => $user->nama_pengguna,
	// 				'username' => $user->username,
	// 				'hp_pengguna' => $user->hp_pengguna
	// 			];
	// 			$this->session->set_userdata($session);
	// 			redirect('Admin/Home');

	// 		} else {
	// 			$this->session->set_flashdata('error', 'Wrong password!');
	// 			redirect('');

	// 		}
	// 	} else {
	// 		$this->session->set_flashdata('error', 'Wrong username!');
	// 		redirect('');
	// 		var_dump($user);
	// 		die();
	// 	}
	// }

	public function logout()
	{
		//$this->session->unset_userdata('id_siswa');
		$this->session->unset_userdata('nama_lengkap');
		$this->session->unset_userdata('email_pengguna');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout! </div>');
		redirect('Landing');
	}

	public function regis()
	{
		if ($this->session->userdata('email_pengguna')) {
			redirect('User/Home');
		}
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', [
			'required' => 'Nama Pengguna Wajib di isi'
		]);
		// $this->form_validation->set_rules('no_hp', 'No Hp', 'required', [
		// 	'required' => 'No Hp Pengguna Wajib di isi'
		// ]);

		$this->form_validation->set_rules('email_pengguna', 'email_pengguna', 'required', [
			'required' => 'email_pengguna Pengguna Wajib di isi'
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
		//$data['konfigurasi'] = $this->konfigurasi->get2();
		// var_dump($data['konfigurasi']);
		// die;
			$this->load->view('vw_registrasi');
		} else {
			$data = [
				'nama_pengguna' => htmlspecialchars($this->input->post('nama_pengguna', true)),
				//'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
				'email_pengguna' => htmlspecialchars($this->input->post('email_pengguna', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level'=> 'user'
			];
			$this->calon_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Registrasi Berhasil</div>');
			redirect('Auth');
		}
	}

}