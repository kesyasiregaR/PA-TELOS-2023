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
        $this->load->model('Keuntungan_Model', 'economic_keuntungan');
        $this->load->library('form_validation');
    }
    public function index() 
    {
        $data['judul'] = "Halaman Data Economic";
        $data['economic'] = $this->economic->get();
        $data['economic_keuntungan']= $this->economic_keuntungan->get();
        $this->load->view('user/header');
        $this->load->view('user/economic/vw_economic', $data);
        $this->load->view('user/footer');
    }
   
    public function hapus($id)
    {
        $this->economic->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Berhasil dihapus!</div>');
        redirect('User/economic');
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Data Economic";
        $data['dataproject'] = $this->dataproject->get();
        $data['economic_keuntungan'] = $this->economic_keuntungan->get();

        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'name ', 'required', [
            'required' => ' Wajib di isi'
        ]);
        $this->form_validation->set_rules('akumulasi_biaya', 'akumulasi_biaya ', 'required', [
            'required' => ' Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun1', 'tahun1 ', 'required', [
            'required' => ' Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun2', 'tahun2 ', 'required', [
            'required' => ' Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun3', 'tahun3 ', 'required', [
            'required' => ' Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun4', 'tahun4 ', 'required', [
            'required' => ' Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun5', 'tahun5 ', 'required', [
            'required' => 'Wajib di isi'
        ]);
        $this->form_validation->set_rules('npv', 'npv ', 'required', [
            'required' => ' Wajib di isi'
        ]);
		$this->form_validation->set_rules('irr', 'irr', 'required', [
            'required' => ' Wajib di isi'
        ]);
		$this->form_validation->set_rules('pp', 'pp', 'required', [
            'required' => '	 Wajib di isi'
        ]);
        $this->form_validation->set_rules('roi', 'roi ', 'required', [
            'required' => ' Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/economic/vw_tambah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'akumulasi_biaya' => $this->input->post('akumulasi_biaya'),
                'tahun1' => $this->input->post('tahun1'),
                'tahun2' => $this->input->post('tahun2'),
                'tahun3' => $this->input->post('tahun3'),
                'tahun4' => $this->input->post('tahun4'),
                'tahun5' => $this->input->post('tahun5'),
                'npv' => $this->input->post('npv'),
                'irr' => $this->input->post('irr'),
                'pp' => $this->input->post('pp'),
                'roi' => $this->input->post('roi'),
               
            ];
            $this->economic->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('user/economic');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['economic'] = $this->economic->getById($id);
        $data['dataproject'] = $this->dataproject->get();
        $data['economic_keuntungan'] = $this->economic_keuntungan->get();
       
        $this->form_validation->set_rules('name', 'name', 'required', [
            'required' => 'Wajib di isi'
        ]);
        $this->form_validation->set_rules('akumulasi_biaya', 'akumulasi_biaya ', 'required', [
            'required' => ' Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun1', 'tahun1 ', 'required', [
            'required' => ' Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun2', 'tahun2 ', 'required', [
            'required' => ' Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun3', 'tahun3 ', 'required', [
            'required' => ' Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun4', 'tahun4 ', 'required', [
            'required' => ' Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun5', 'tahun5 ', 'required', [
            'required' => 'Wajib di isi'
        ]);
        $this->form_validation->set_rules('npv', 'npv ', 'required', [
            'required' => ' Wajib di isi'
        ]);
		$this->form_validation->set_rules('irr', 'irr', 'required', [
            'required' => ' Wajib di isi'
        ]);
		$this->form_validation->set_rules('pp', 'pp', 'required', [
            'required' => '	 Wajib di isi'
        ]);
        $this->form_validation->set_rules('roi', 'roi ', 'required', [
            'required' => ' Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/economic/vw_ubah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'akumulasi_biaya' => $this->input->post('akumulasi_biaya'),
                'tahun1' => $this->input->post('tahun1'),
                'tahun2' => $this->input->post('tahun2'),
                'tahun3' => $this->input->post('tahun3'),
                'tahun4' => $this->input->post('tahun4'),
                'tahun5' => $this->input->post('tahun5'),
                'npv' => $this->input->post('npv'),
                'irr' => $this->input->post('irr'),
                'pp' => $this->input->post('pp'),
                'roi' => $this->input->post('roi'),
                'id_economic' => $this->input->post('id_economic')
            ];

            $this->economic->update($data, $data['id_economic']);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('user/economic');
        }
    }
    public function investasiawal() 
    {
        $data['judul'] = "Halaman Data Economic";
        $data['economic'] = $this->economic->get();
        $this->load->view('user/header');
        $this->load->view('user/economic/vw_economic', $data);
        $this->load->view('user/footer');
    }
}
