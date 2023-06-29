<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Keuntungan_Model extends CI_Model
{
    public $table = 'economic_keuntungan';
    public $id = ' economic_keuntungan.id_economic_keuntungan';
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
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_economic_keuntungan', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($data, $where)
    {
        $this->db->update($this->table, $data, array('id_economic_keuntungan' => $where));
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
         $this->db->select('*');
         $this->db->from('economic');
        //  $this->db->join('economic_keuntungan', 'economic.id = economic_keuntungan.economic_id', 'inner');
         $query = $this->db->get();

if ($query->num_rows() > 0) {
    foreach ($query->result() as $row) {
        // Lakukan sesuatu dengan data yang dihasilkan
        echo $row->column1;
        echo $row->column2;
    }
}

        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
        return $this->db->economic_id();
        
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
        $this->db->from('economic_keuntungan');
        return $this->db->get()->num_rows();
    }
}

