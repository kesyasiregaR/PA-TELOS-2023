<?php
defined('BASEPATH') or exit('No direct script access allowed');

class economic extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in2();
        $this->load->model('Economic_Model', 'economic');
        $this->load->model('DataProjek_Model', 'dataproject');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Economic";
        $data['economic'] = $this->economic->get();
        $this->load->view('user/header');
        $this->load->view('user/economic/vw_economic', $data);
        $this->load->view('user/footer');
    }
    public function hapus($id)
    {
        $this->economic->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data economic Berhasil dihapus!</div>');
        redirect('User/economic');
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Data Economic";
        $data['dataproject'] = $this->dataproject->get();

        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'name technological', 'required', [
            'required' => 'name Wajib di isi'
        ]);
        $this->form_validation->set_rules('cost_benefit_type', 'cost_benefit_type economic', 'required', [
            'required' => 'cost_benefit_type Wajib di isi'
        ]);
        $this->form_validation->set_rules('cost_type', 'cost_type economic', 'required', [
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
            $this->load->view("user/economic/vw_tambah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'cost_benefit_type' => $this->input->post('cost_benefit_type'),
                'cost_type' => $this->input->post('cost_type'),
                'cost_component' => $this->input->post('cost_component'),
                'item_type' => $this->input->post('item_type'),
                'Qty' => $this->input->post('Qty'),
                'price' => $this->input->post('price'),
                'tco' => $this->input->post('tco'),

            ];
            $this->economic->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data economic Berhasil Ditambah!</div>');
            redirect('user/economic');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['economic'] = $this->economic->getById($id);
        $data['dataproject'] = $this->dataproject->get();
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'name technological', 'required', [
            'required' => 'name Wajib di isi'
        ]);
        $this->form_validation->set_rules('cost_benefit_type', 'cost_benefit_type economic', 'required', [
            'required' => 'cost_benefit_type Wajib di isi'
        ]);
        $this->form_validation->set_rules('cost_type', 'cost_type economic', 'required', [
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
                'name' => $this->input->post('name'),
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
