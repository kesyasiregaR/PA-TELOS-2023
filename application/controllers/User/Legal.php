<?php
defined('BASEPATH') or exit('No direct script access allowed');

class legal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in2();
        $this->load->model('Legal_Model', 'legal');
        $this->load->model('DataProjek_Model', 'dataproject');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Legal";
        $data['legal'] = $this->legal->getLegalId($this->session->userdata('id_public'));
        // $data['legal'] = $this->legal->get();
        $this->load->view('user/header');
        $this->load->view('user/legal/vw_legal', $data);
        $this->load->view('user/footer');
    }
    public function hapus($id)
    {
        $this->legal->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Legalitas Berhasil dihapus!</div>');
        redirect('User/legal');
    }
    function tambah()
    {
        $data['legal'] = $this->legal->get2($this->session->userdata('id_public'));
        $data['judul'] = "Halaman Tambah Data Legal";
        $data['dataproject'] = $this->dataproject->get();

        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->form_validation->set_rules('name', 'Nama legal', 'required', [
        //     'required' => 'Nama Wajib di isi'
        // ]);
        $this->form_validation->set_rules('jenis', 'Jenis legal', 'required', [
            'required' => 'Jenis Produk  Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama_jenis_produk', 'Jenis legal', 'required', [
            'required' => 'Nama Jenis Produk Wajib di isi'
        ]);
        $this->form_validation->set_rules('description', 'Deskripsi legal', 'required', [
            'required' => 'Deskripsi Wajib di isi'
        ]);
        $this->form_validation->set_rules('status', 'Status legal', 'required', [
            'required' => 'Status legal Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/legal/vw_tambah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
               
                // 'name' => $this->input->post('name'),
                'jenis' => $this->input->post('jenis'),
                'nama_jenis_produk' => $this->input->post('nama_jenis_produk'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'id_public' => $this->session->userdata('id_public'),

            ];
            $this->legal->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Legalitas Berhasil Ditambah!</div>');
            redirect('user/legal');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['dataproject'] = $this->dataproject->get();
        $data['legal'] = $this->legal->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $this->form_validation->set_rules('name', 'Nama legal', 'required', [
        //     'required' => 'Nama projek Wajib di isi'
        // ]);
        $this->form_validation->set_rules('jenis', 'Jenis legal', 'required', [
            'required' => 'Jenis produk  Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama_jenis_produk', 'Jenis legal', 'required', [
            'required' => 'Nama Jenis Produk Wajib di isi'
        ]);
        $this->form_validation->set_rules('description', 'Deskripsi legal', 'required', [
            'required' => 'Deskripsi  Wajib di isi'
        ]);
        $this->form_validation->set_rules('status', 'status legal', 'required', [
            'required' => 'Status Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/legal/vw_ubah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
                // 'name' => $this->input->post('name'),
                'jenis' => $this->input->post('jenis'),
                'nama_jenis_produk' => $this->input->post('nama_jenis_produk'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'id_legal' => $this->input->post('id_legal')
            ];

            $this->legal->update($data, $data['id_legal']);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Legalitas Berhasil Diubah!</div>');
            redirect('user/legal');
        }
    }
}
