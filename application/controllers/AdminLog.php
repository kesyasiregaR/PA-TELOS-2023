<?php

class AdminLog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_Model', 'Auth_Model');
    }
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('Admin/Home');
        }

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('vw_admin_log');
        } else {
            $this->login();
        }
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();
        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                $data = [
                    'nama_admin' => $admin['nama_admin'],
                    'username' => $admin['username'],
                    'id_admin' => $admin['id_admin'],
                    'level' => $admin['level'],
                ];
                $this->session->set_userdata($data);

                redirect('Admin/Home');
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
    // 				'id_admin' => $user->id_admin,
    // 				'nama_admin' => $user->nama_admin,
    // 				'username' => $user->username,
    // 				'hp_admin' => $user->hp_admin
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
        $this->session->unset_userdata('id_admin');
        $this->session->unset_userdata('nama_admin');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout! </div>');
        redirect('AdminLog');
    }
}
