<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_pembeli extends CI_Model {
    // public function total_barang()
    // {
    //     return $this->db->get('tbl_barang')->num_rows();    
    // }

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_pembeli');
        $this->db->order_by('id_pembeli','desc');
        return $this->db->get()->result();
    }

    public function register($data)
    {
        return $this->db->insert('tbl_pembeli',$data);    
    }

    public function add($data)
    {
        $this->db->insert('tbl_pembeli', $data);
        
    }
    public function edit($data)
    {
        $this->db->where('id_pembeli', $data['id_pembeli']);
        $this->db->update('tbl_pembeli', $data);
        
    }
    public function delete($data)
    {
        $this->db->where('id_pembeli', $data['id_pembeli']);
        $this->db->delete('tbl_pembeli', $data);
        
        
    }
    
}