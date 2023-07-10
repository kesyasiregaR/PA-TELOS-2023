<?php
defined('BASEPATH') or exit('No direct script access allowed');

class technological extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in2();
        $this->load->model('Technological_Model', 'technological');
        $this->load->model('DataProjek_Model', 'dataproject');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = " Data Teknologi";
        $data['technological'] = $this->technological->getTechnologicalId($this->session->userdata('id_public'));
        // $data['technological'] = $this->technological->get();
        $this->load->view('user/header');
        $this->load->view('user/technological/vw_technological', $data);
        $this->load->view('user/footer');
    }
    public function hapus($id)
    {
        $this->technological->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Berhasil dihapus!</div>');
        redirect('User/technological');
    }
    function tambah()
    {
        $data['technological'] = $this->technological->get2($this->session->userdata('id_public')); 
        $data['judul'] = "Tambah Data ";
        $data['dataproject'] = $this->dataproject->get();

        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->form_validation->set_rules('name', 'name technological', 'required', [
        //     'required' => 'name Wajib di isi'
        // ]);
        $this->form_validation->set_rules('category', 'category technological', 'required', [
            'required' => 'Category Wajib di isi'
        ]);
        $this->form_validation->set_rules('item', 'item technological', 'required', [
            'required' => 'Item Wajib di isi'
        ]);
        $this->form_validation->set_rules('specification', 'specification technological', 'required', [
            'required' => 'Specifikation Wajib di isi'
        ]);
        // $this->form_validation->set_rules('price', 'price technological', 'required', [
        //     'required' => 'Price Wajib di isi'
        // ]);
        $this->form_validation->set_rules('Date', 'Date technological', 'required', [
            'required' => 'Date Wajib di isi'
        ]);
        // $this->form_validation->set_rules('source', 'source technological', 'required', [
        //     'required' => 'source Wajib di isi'
        // ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/technological/vw_tambah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [

                // 'name' => $this->input->post('name'),
                'category' => $this->input->post('category'),
                'item' => $this->input->post('item'),
                'specification' => $this->input->post('specification'),
                // 'price' => $this->input->post('price'),
                'Date' => $this->input->post('Date'),
                // 'source' => $this->input->post('source'),
                'id_public' => $this->session->userdata('id_public'),

            ];
            $this->technological->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('user/technological');
        }
    }
    public function edit($id)
    {
        $data['judul'] = " Ubah Data";
        $data['dataproject'] = $this->dataproject->get();
        $data['technological'] = $this->technological->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $this->form_validation->set_rules('name', 'name technological', 'required', [
        //     'required' => 'name Wajib di isi'
        // ]);
        $this->form_validation->set_rules('category', 'category technological', 'required', [
            'required' => 'Category Wajib di isi'
        ]);
        $this->form_validation->set_rules('item', 'item technological', 'required', [
            'required' => 'Item Wajib di isi'
        ]);
        $this->form_validation->set_rules('specification', 'specification technological', 'required', [
            'required' => 'Specifikation Wajib di isi'
        ]);
        // $this->form_validation->set_rules('price', 'price technological', 'required', [
        //     'required' => 'Price Wajib di isi'
        // ]);
        $this->form_validation->set_rules('Date', 'Date technological', 'required', [
            'required' => 'Date Wajib di isi'
        ]);
        // $this->form_validation->set_rules('source', 'source technological', 'required', [
        //     'required' => 'source Wajib di isi'
        // ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/technological/vw_ubah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
                // 'name' => $this->input->post('name'),
                'category' => $this->input->post('category'),
                'item' => $this->input->post('item'),
                'specification' => $this->input->post('specification'),
                // 'price' => $this->input->post('price'),
                'Date' => $this->input->post('Date'),
                // 'source' => $this->input->post('source'),
                'id_technological' => $this->input->post('id_technological')
            ];

            $this->technological->update($data, $data['id_technological']);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('user/technological');
        }
    }
}
