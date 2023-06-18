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
        $this->form_validation->set_rules('name', 'name ', 'required', [
            'required' => 'name Wajib di isi'
        ]);
        $this->form_validation->set_rules('	id_economic_investasi', '	id_economic_investasi ', 'required', [
            'required' => '	id_economic_investasi Wajib di isi'
        ]);
        $this->form_validation->set_rules('	id_keuntungan', '	id_keuntungan ', 'required', [
            'required' => '	id_keuntungan Wajib di isi'
        ]);
        $this->form_validation->set_rules('id_economic_komponen_biaya', 'id_economic_komponen_biaya ', 'required', [
            'required' => 'Specifikation Wajib di isi'
        ]);
		$this->form_validation->set_rules('	total_pajak', '	total_pajak', 'required', [
            'required' => '	total_pajak Wajib di isi'
        ]);
		$this->form_validation->set_rules('	total_nilai_setelah_pajak', '	total_nilai_setelah_pajak', 'required', [
            'required' => '	total_nilai_setelah_pajak Wajib di isi'
        ]);
        $this->form_validation->set_rules('total_arus_kas', 'total_arus_kas ', 'required', [
            'required' => 'total_arus_kas Wajib di isi'
        ]);
        $this->form_validation->set_rules('total_arus_kas_kumulatif', 'total_arus_kas_kumulatif ', 'required', [
            'required' => 'total_arus_kas_kumulatif Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/economic/vw_tambah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'id_economic_investasi ' => $this->input->post('id_economic_investasi '),
                'id_keuntungan' => $this->input->post('id_keuntungan'),
                'id_economic_komponen_biaya' => $this->input->post('	id_economic_komponen_biaya'),
                'total_pajak' => $this->input->post('total_pajak'),
                'total_nilai_setelah_pajak' => $this->input->post('total_nilai_setelah_pajak'),
                'total_arus_kas' => $this->input->post('total_arus_kas'),
                'total_arus_kas_kumulatif' => $this->input->post('total_arus_kas_kumulatif'),

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
       
        $this->form_validation->set_rules('name', 'name technological', 'required', [
            'required' => 'name Wajib di isi'
        ]);
        $this->form_validation->set_rules('	id_economic_investasi', 'id_economic_investasi ', 'required', [
            'required' => '	id_economic_investasi Wajib di isi'
        ]);
        $this->form_validation->set_rules('	id_keuntungan', 'id_keuntungan ', 'required', [
            'required' => '	id_keuntungan Wajib di isi'
        ]);
        $this->form_validation->set_rules('id_economic_komponen_biaya', 'id_economic_komponen_biaya ', 'required', [
            'required' => 'Specifikation Wajib di isi'
        ]);
		$this->form_validation->set_rules('	total_pajak', '	total_pajak', 'required', [
            'required' => '	total_pajak Wajib di isi'
        ]);
		$this->form_validation->set_rules('	total_nilai_setelah_pajak', 'total_nilai_setelah_pajak', 'required', [
            'required' => '	total_nilai_setelah_pajak Wajib di isi'
        ]);
        $this->form_validation->set_rules('total_arus_kas', 'total_arus_kas ', 'required', [
            'required' => 'total_arus_kas Wajib di isi'
        ]);
        $this->form_validation->set_rules('total_arus_kas_kumulatif', 'total_arus_kas_kumulatif ', 'required', [
            'required' => 'total_arus_kas_kumulatif Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/economic/vw_ubah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'id_economic_investasi ' => $this->input->post('id_economic_investasi '),
                'id_keuntungan' => $this->input->post('id_keuntungan'),
                'id_economic_komponen_biaya' => $this->input->post('id_economic_komponen_biaya'),
                'total_pajak' => $this->input->post('total_pajak'),
                'total_nilai_setelah_pajak' => $this->input->post('total_nilai_setelah_pajak'),
                'total_arus_kas' => $this->input->post('total_arus_kas'),
                'total_arus_kas_kumulatif' => $this->input->post('total_arus_kas_kumulatif'),
                'id_economic' => $this->input->post('id_economic')
            ];

            $this->economic->update($data, $data['id_economic']);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data economic Berhasil Diubah!</div>');
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
