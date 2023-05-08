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

        $this->form_validation->set_rules('project', 'project', 'required', [
            'required' => 'project Wajib di isi'
        ]);
        $this->form_validation->set_rules('technological', 'technological', 'required', [
            'required' => 'technological Wajib di isi'
        ]);
        $this->form_validation->set_rules('economic', 'economic', 'required', [
            'required' => 'economic Wajib di isi'
        ]);
        $this->form_validation->set_rules('legal', 'legal ', 'required', [
            'required' => 'legal Wajib di isi'
        ]);
        $this->form_validation->set_rules('operational', 'operational', 'required', [
            'required' => 'operational Wajib di isi'
        ]);
        $this->form_validation->set_rules('schedule', 'schedule', 'required', [
            'required' => 'schedule Wajib di isi'
        ]);
        $this->form_validation->set_rules('hasil_akhir', 'hasil_akhir', 'required', [
            'required' => 'hasil_akhir Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/summary/vw_tambah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
                'project' => $this->input->post('project'),
                'technological' => $this->input->post('technological'),
                'economic' => $this->input->post('economic'),
                'legal' => $this->input->post('legal'),
                'operational' => $this->input->post('operational'),
                'schedule' => $this->input->post('schedule'),
                'hasil_akhir' => $this->input->post('hasil_akhir'),
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

        $this->form_validation->set_rules('project', 'project', 'required', [
            'required' => 'project Wajib di isi'
        ]);
        $this->form_validation->set_rules('technological', 'technological', 'required', [
            'required' => 'technological Wajib di isi'
        ]);
        $this->form_validation->set_rules('economic', 'economic', 'required', [
            'required' => 'economic Wajib di isi'
        ]);
        $this->form_validation->set_rules('legal', 'legal ', 'required', [
            'required' => 'legal Wajib di isi'
        ]);
        $this->form_validation->set_rules('operational', 'operational', 'required', [
            'required' => 'operational Wajib di isi'
        ]);
        $this->form_validation->set_rules('schedule', 'schedule', 'required', [
            'required' => 'schedule Wajib di isi'
        ]);
        $this->form_validation->set_rules('hasil_akhir', 'hasil_akhir', 'required', [
            'required' => 'hasil_akhir Wajib di isi'
        ]);



        if ($this->form_validation->run() == false) {
            $this->load->view("user/header", $data);
            $this->load->view("user/summary/vw_ubah", $data);
            $this->load->view("user/footer");
        } else {
            $data = [
                'project' => $this->input->post('project'),
                'technological' => $this->input->post('technological'),
                'economic' => $this->input->post('economic'),
                'legal' => $this->input->post('legal'),
                'operational' => $this->input->post('operational'),
                'schedule' => $this->input->post('schedule'),
                'hasil_akhir' => $this->input->post('hasil_akhir'),
                'id_summary' => $this->input->post('id_summary')
            ];

            $this->summary->update($data, $data['id_summary']);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Summary Berhasil Diubah!</div>');
            redirect('user/summary');
        }
    }
}
