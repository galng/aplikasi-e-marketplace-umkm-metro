<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_barang extends CI_Model {
    // public function total_barang()
    // {
    //     return $this->db->get('tbl_barang')->num_rows();    
    // }
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->order_by('id_barang','desc');
        return $this->db->get()->result();
        ;
    }

    public function get_data($id_barang)
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
       // $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');
        $this->db->where('id_barang', $id_barang);
        
        return $this->db->get()->row();
    }

    public function total_barang()
    {
        return $this->db->get('tbl_barang')->num_rows();
    }

    public function add($data)
    {
        $this->db->insert('tbl_barang', $data);
    }

    public function find($id)
    {
        $result = $this->db->where('id_barang', $id)
        ->limit(1)
        ->get('tbl_barang');

        if ($result->num_rows() >0) {
                return $result->row();
        }else {
            return array();
        }
        
    }

    public function edit($data)
    {
        $this->db->where('id_barang', $data['id_barang']);
        $this->db->update('tbl_barang', $data);
    }
}