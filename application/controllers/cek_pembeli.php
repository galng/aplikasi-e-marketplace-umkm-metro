<?php

use phpDocumentor\Reflection\Types\Null_;

defined('BASEPATH') OR exit('No direct script access allowed');

class cek_pembeli extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
    
        $this->load->model('m_pembeli');
        
    }
    
    public function index()
    {

        $data = array(
            'title' => '',
            
            'cek_pembeli' => $this->m_pembeli->get_all_data(),
            'isi' => 'admin/cek_data_pembeli/v_pembeli',
        );
        $this->load->view('layout/v_wrapper_backend',$data, FALSE);
        
    }

    // Add a new item
    public function add()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'alamat' => $this->input->post('alamat'),
            'NIK' => $this->input->post('NIK'),
            'telepon' => $this->input->post('telepon')
        );

        $this->m_pembeli->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil DiTambahkan !!!');
        
        redirect('cek_pembeli');
        
    }

    //Update one item
    public function edit($id_pembeli = Null)
    {
        $data = array(
            'id_pembeli'=> $id_pembeli,
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'alamat' => $this->input->post('alamat'),
            'NIK' => $this->input->post('NIK'),
            'telepon' => $this->input->post('telepon'),
        );

        $this->m_pembeli->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil DiEdit !!!');
        
        redirect('cek_pembeli');
    }

    //Delete one item
    public function delete( $id_pembeli = NULL )
    {
        $data = array(
            'id_pembeli' => $id_pembeli, );
            $this->m_pembeli->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil DiHapus !!!');
             redirect('cek_pembeli');
    }
}


  





