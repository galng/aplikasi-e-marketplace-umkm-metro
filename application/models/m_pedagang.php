<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_pedagang extends CI_Model {
    // public function total_barang()
    // {
    //     return $this->db->get('tbl_barang')->num_rows();    
    // }
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_pedagang');
        // $this->db->join('tbl_barang', 'tbl_barang.id_barang = tbl_pedagang.id_barang', 'left');
        
        $this->db->order_by('id_pedagang','desc');
        return $this->db->get()->result();
        ;
    }

    public function add($data)
    {
        $this->db->insert('tbl_pedagang', $data);
        
    }
    public function edit($data)
    {
        $this->db->where('id_pedagang', $data['id_pedagang']);
        $this->db->update('tbl_pedagang', $data);
        
        
    }
    public function delete($data)
    {
        $this->db->where('id_pedagang', $data['id_pedagang']);
        $this->db->delete('tbl_pedagang', $data);
        
        
    }
}