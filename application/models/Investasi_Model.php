<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Investasi_Model extends CI_Model
{
    public $table = 'economic_investasi';
    public $id = 'economic_investasi.id_economic_investasi';
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
    public function getInvestasiId($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_public', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_economic_investasi', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($data, $where)
    {
        $this->db->update($this->table, $data, array('id_economic_investasi' => $where));
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
        $this->db->from('economic_investasi');
        return $this->db->get()->num_rows();
    }
}
