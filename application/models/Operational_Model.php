<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Operational_Model extends CI_Model
{
    public $table = 'operational';
    public $id = 'operational.id_operational';
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
    public function getOperationalId($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_operational', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_operational', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($data, $where)
    {
        $this->db->update($this->table, $data, array('id_operational' => $where));
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
    public function getDataById($id)
    {
        // Query untuk mengambil data berdasarkan ID
        $query = $this->db->get_where('operational', array('id' => $id));

        // Mengembalikan hasil query dalam bentuk objek atau array
        return $query->row(); // Mengembalikan satu baris hasil query
        // atau
        // return $query->result(); // Mengembalikan beberapa baris hasil query
    }
}
