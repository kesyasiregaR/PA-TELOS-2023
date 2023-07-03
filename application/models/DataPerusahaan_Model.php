<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DataPerusahaan_Model extends CI_Model
{
    public $table = 'economic_data_perusahaan';
    public $id = 'economic_data_perusahaan.id_economic_data_perusahaan';
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
    public function get2($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_public', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataPerusahaanId($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_public', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_economic_data_perusahaan', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($data, $where)
    {
        $this->db->update($this->table, $data, array('id_economic_data_perusahaan' => $where));
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
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function jml_data()
    {
        $this->db->select('*');
        $this->db->from('economic_data_perusahaan');
        return $this->db->get()->num_rows();
    }
}
