<?php
defined('BASEPATH') or exit('No direct script access allowed');

class summary extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in2();
        $this->load->model('Summary_Model', 'summary');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data summary";
        $data['summary'] = $this->summary->get();
        $this->load->view('user/header');
        $this->load->view('user/summary/vw_summary', $data);
        $this->load->view('user/footer');
    }
    public function hapus($id)
    {
        $this->summary->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data summary Berhasil dihapus!</div>');
        redirect('User/summary');
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Data summary";

        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('cost_benefit_type', 'cost_benefit_type summary', 'required', [
            'required' => 'cost_benefit_type Wajib di isi'
        ]);
        $this->form_validation->set_rules('cost_type', 'cost_type summary', 'required', [
            'required' => 'cost_type Wajib di isi'
        ]);
        $this->form_validation->set_rules('cost_component', 'cost_component summary', 'required', [
            'required' => 'Specifikation Wajib di isi'
        ]);
		$this->form_validation->set_rules('item_type', 'item_type summary', 'required', [
            'required' => 'item_type Wajib di isi'
        ]);
		$this->form_validation->set_rules('Qty', 'Qty summary', 'required', [
            'required' => 'Qty Wajib di isi'
        ]);
        $this->form_validation->set_rules('price', 'price summary', 'required', [
            'required' => 'price Wajib di isi'
        ]);
        $this->form_validation->set_rules('tco', 'tco summary', 'required', [
            'required' => 'tco Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/summary/vw_tambah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
                'cost_benefit_type' => $this->input->post('cost_benefit_type'),
                'cost_type' => $this->input->post('cost_type'),
                'cost_component' => $this->input->post('cost_component'),
                'item_type' => $this->input->post('item_type'),
                'Qty' => $this->input->post('Qty'),
                'price' => $this->input->post('price'),
                'tco' => $this->input->post('tco'),

            ];
            $this->summary->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data summary Berhasil Ditambah!</div>');
            redirect('user/summary');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['summary'] = $this->summary->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('cost_benefit_type', 'cost_benefit_type summary', 'required', [
            'required' => 'cost_benefit_type Wajib di isi'
        ]);
        $this->form_validation->set_rules('cost_type', 'cost_type summary', 'required', [
            'required' => 'cost_type Wajib di isi'
        ]);
        $this->form_validation->set_rules('cost_component', 'cost_component economic', 'required', [
            'required' => 'Specifikation Wajib di isi'
        ]);
		$this->form_validation->set_rules('item_type', 'item_type economic', 'required', [
            'required' => 'item_type Wajib di isi'
        ]);
		$this->form_validation->set_rules('Qty', 'Qty economic', 'required', [
            'required' => 'Qty Wajib di isi'
        ]);
        $this->form_validation->set_rules('price', 'price economic', 'required', [
            'required' => 'price Wajib di isi'
        ]);
        $this->form_validation->set_rules('tco', 'tco economic', 'required', [
            'required' => 'tco Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/economic/vw_ubah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
                'cost_benefit_type' => $this->input->post('cost_benefit_type'),
                'cost_type' => $this->input->post('cost_type'),
                'cost_component' => $this->input->post('cost_component'),
                'item_type' => $this->input->post('item_type'),
                'Qty' => $this->input->post('Qty'),
                'price' => $this->input->post('price'),
                'tco' => $this->input->post('tco'),
                'id_economic' => $this->input->post('id_economic')
            ];

            $this->economic->update($data, $data['id_economic']);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data economic Berhasil Diubah!</div>');
            redirect('user/economic');
        }
    }
}
