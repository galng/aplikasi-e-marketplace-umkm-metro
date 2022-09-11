<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pedagang extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
    
        $this->load->model('m_pedagang');
        $this->load->model('m_barang');
        
    }
    
    public function index()
    {
        $data = array(
            'title' => '',
            
            'pedagang' => $this->m_pedagang->get_all_data(),
            'isi' => 'admin/cek_data_pedagang/v_pedagang',
        );
        // $this->m_pedagang->get_all_data($data);
        $this->load->view('layout/v_wrapper_backend',$data, FALSE);
    }

    // Add a new item
    public function add()
    {

        $this->form_validation->set_rules('nama_pedagang', 'Nama Pedagang', 'required',
        array('required' => '%s harus diisi !!!' ));
        $this->form_validation->set_rules('nama_usaha', 'Nama Usaha', 'required',
        array('required' => '%s harus diisi !!!' ));
        $this->form_validation->set_rules('alamat', 'alamat', 'required',
        array('required' => '%s harus diisi !!!' ));
        $this->form_validation->set_rules('telepon', 'telepon', 'required',
        array('required' => '%s harus diisi !!!' ));

        $data = array(
            'nama_pedagang' => $this->input->post('nama_pedagang'),
            'nama_usaha' => $this->input->post('nama_usaha'),
            'jenis_usaha' => $this->input->post('jenis_usaha'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon')
        );

        $this->m_pedagang->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil DiTambahkan !!!');
        
        redirect('pedagang');


        $data = array(
            'title' => 'Add Barang',
            //'kategori'=> $this->m_kategori->get_all_data(),
            'isi' => 'admin/cek_data_pedagang/v_pedagang',
        );
        $this->load->view('layout/v_wrapper_backend',$data, FALSE);
        
    }

    

    //Update one item
    public function edit( $id_pedagang = NULL )
    {
        $data = array(
            'id_pedagang'   => $id_pedagang,
            'nama_pedagang' => $this->input->post('nama_pedagang'),
            'nama_usaha' => $this->input->post('nama_usaha'),
            'jenis_usaha' => $this->input->post('jenis_usaha'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon')
        );

        $this->m_pedagang->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil DiEdit !!!');
        
        redirect('pedagang');
    }

    //Delete one item
    public function delete( $id_pedagang = NULL )
    {
        $data = array(
            'id_pedagang' => $id_pedagang, );
            $this->m_pedagang->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil DiHapus !!!');
             redirect('pedagang');
    }
}


  





