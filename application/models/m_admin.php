<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
    // public function total_barang()
    // {
    //     return $this->db->get('tbl_barang')->num_rows();    
    // }
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
    //  $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');
        
        $this->db->order_by('id_user');
        return $this->db->get()->result();
        ;
    }
    public function total_pedagang()
    {
        return $this->db->get('tbl_pedagang')->num_rows();    
    }
    public function total_pembeli()
    {
        return $this->db->get('tbl_pembeli')->num_rows();    
    }
    public function total_user()
    {
        return $this->db->get('tbl_user')->num_rows();    
    }
    public function total_transaksi()
    {
        return $this->db->get('tbl_rinci_transaksi')->num_rows();    
    }
}