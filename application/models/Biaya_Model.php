<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Biaya_Model extends CI_Model
{
    public $table = 'economic_komponen_biaya';
    public $id = 'economic_komponen_biaya.id_economic_komponen_biaya';
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
    public function getBiayaId($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_public', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_economic_komponen_biaya', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($data, $where)
    {
        $this->db->update($this->table, $data, array('id_economic_komponen_biaya' => $where));
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
        $this->db->from('economic_komponen_biaya');
        return $this->db->get()->num_rows();
    }
}
