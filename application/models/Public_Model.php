<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Public_Model extends CI_Model
{
    public $table = 'public';
    public $id = 'public.id_public';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    
    public function getSiswaId($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_public', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_public', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, array('id_public' => $where));
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table,);
        return $this->db->affected_rows();
    }
    public function cetak()
    {
        $id = $this->session->userdata('id_public');
        $this->db->select('c.*, p.alamat as alamat,p.status as status');
        $this->db->from('calonsiswa c');
        $this->db->join('pendaftaran p', 'p.id_public = c.id_public');
        $this->db->where('c.id_public', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    
}