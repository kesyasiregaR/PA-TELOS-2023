<?php
defined('BASEPATH') or exit('No direct script access allowed');

class technological extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in2();
        $this->load->model('Technological_Model', 'technological');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Technological";
        $data['technological'] = $this->technological->get();
        $this->load->view('user/header');
        $this->load->view('user/technological/vw_technological', $data);
        $this->load->view('user/footer');
    }
    public function hapus($id)
    {
        $this->technological->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Technological Berhasil dihapus!</div>');
        redirect('User/technological');
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Data Technological";

        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('category', 'category technological', 'required', [
            'required' => 'Category Wajib di isi'
        ]);
        $this->form_validation->set_rules('item', 'item technological', 'required', [
            'required' => 'Item Wajib di isi'
        ]);
        $this->form_validation->set_rules('specification', 'specification technological', 'required', [
            'required' => 'Specifikation Wajib di isi'
        ]);
		$this->form_validation->set_rules('price', 'price technological', 'required', [
            'required' => 'Price Wajib di isi'
        ]);
		$this->form_validation->set_rules('source', 'source technological', 'required', [
            'required' => 'source Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/technological/vw_tambah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
                'category' => $this->input->post('category'),
                'item' => $this->input->post('item'),
                'specification' => $this->input->post('specification'),
                'price' => $this->input->post('price'),
                'source' => $this->input->post('source'),

            ];
            $this->technological->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Technological Berhasil Ditambah!</div>');
            redirect('user/technological');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['technological'] = $this->technological->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('category', 'category technological', 'required', [
            'required' => 'Category Wajib di isi'
        ]);
        $this->form_validation->set_rules('item', 'item technological', 'required', [
            'required' => 'Item Wajib di isi'
        ]);
        $this->form_validation->set_rules('specification', 'specification technological', 'required', [
            'required' => 'Specifikation Wajib di isi'
        ]);
		$this->form_validation->set_rules('price', 'price technological', 'required', [
            'required' => 'Price Wajib di isi'
        ]);
		$this->form_validation->set_rules('source', 'source technological', 'required', [
            'required' => 'source Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/technological/vw_ubah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
                'category' => $this->input->post('category'),
                'item' => $this->input->post('item'),
                'specification' => $this->input->post('specification'),
                'price' => $this->input->post('price'),
                'source' => $this->input->post('source'),
                'id_technologic' => $this->input->post('id_technologic')
            ];

            $this->technological->update($data, $data['id_technologic']);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Technological Berhasil Diubah!</div>');
            redirect('user/technological');
        }
    }
}
