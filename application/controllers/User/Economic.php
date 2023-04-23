<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class economic extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('Economic_Model','economic');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul']="Halaman Data Economic";
		$data['economic']=$this->economic->get();
		$this->load->view('user/header');
		$this->load->view('user/economic/vw_economic',$data);
		$this->load->view('user/footer');
		
	}
	public function hapus($id){
		$this->economic->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data economic Berhasil dihapus!</div>');
		redirect('User/economic');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Economic";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('cost_benefit_type', 'Cost Benefit Type', 'required', [
			'required' => 'wajib diisi'
		]);
		$this->form_validation->set_rules('cost_type', 'Cost Type', 'required', [
			'required' => 'wajib diisi'
		]);
		$this->form_validation->set_rules('cost_component', 'Cost Component', 'required', [
			'required' => 'wajib diisi'
		]);
		$this->form_validation->set_rules('item_type', 'Item Type', 'required', [
			'required' => 'wajib diisi'
		]);
		$this->form_validation->set_rules('Qty', 'Quantity', 'required', [
			'required' => 'wajib diisi'
		]);
		$this->form_validation->set_rules('price', 'Price', 'required', [
			'required' => 'wajib diisi'
		]);
		$this->form_validation->set_rules('tco', 'TCO', 'required', [
			'required' => 'wajib diisi'
		]);
	
	
		if ($this->form_validation->run() == false) {
			$this->load->view("user/header", $data);
			$this->load->view("user/economic/vw_tambah", $data);
			$this->load->view("user/footer");
		}  else {
			$data = [
				'cost_benefit_type' => $this->input->post('cost_benefit_type'),
				'cost_type' => $this->input->post('cost_type'),
				'cost_component' => $this->input->post('cost_component'),
				'item_type' => $this->input->post('item_typet'),
				'Qty' => $this->input->post('Qtyt'),
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
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('cost_benefit_type', 'Cost Benefit Type', 'required', [
			'required' => 'wajib diisi'
		]);
		$this->form_validation->set_rules('cost_type', 'Cost Type', 'required', [
			'required' => 'wajib diisi'
		]);
		$this->form_validation->set_rules('cost_component', 'Cost Component', 'required', [
			'required' => 'wajib diisi'
		]);
		$this->form_validation->set_rules('item_type', 'Item Type', 'required', [
			'required' => 'wajib diisi'
		]);
		$this->form_validation->set_rules('Qty', 'Quantity', 'required', [
			'required' => 'wajib diisi'
		]);
		$this->form_validation->set_rules('price', 'Price', 'required', [
			'required' => 'wajib diisi'
		]);
		$this->form_validation->set_rules('tco', 'TCO', 'required', [
			'required' => 'wajib diisi'
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
				'item_type' => $this->input->post('item_typet'),
				'Qty' => $this->input->post('Qtyt'),
				'price' => $this->input->post('price'),
				'tco' => $this->input->post('tco'),
				'id_economic' => $this->input->post('id_economic')
			];

			$this->economic->update($data,$data ['id_economic']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data economic Berhasil Diubah!</div>');
			redirect('user/economic');
		}
	}
}