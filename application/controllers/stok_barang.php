<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class stok_barang  extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
    
        $this->load->model('m_barang');
        
    }
    
    public function index()
    {
        $data = array(
            'title' => '',
            'stok_barang' => $this->m_barang->get_all_data(),
            'isi' => 'pedagang/stok_barang',
        );
        $this->load->view('layout/v_wrapper_backend',$data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_barang', 'Nama barang', 'required',
        array('required' => '%s harus diisi !!!' ));

        $data = array(
            'id_barang' => $this->input->post('id_barang'),
            'kode_barang' => $this->input->post('kode_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'jumlah_barang' => $this->input->post('jumlah_barang'),
            'harga' => $this->input->post('harga'),
            'nama_usaha' => $this->input->post('nama_usaha'),
            'alamat_toko' => $this->input->post('alamat_toko'),
            'telepon' => $this->input->post('telepon'),
            'gambar' => $this->input->post('gambar'),
            'deskripsi' => $this->input->post('deskripsi'),
            );

        $this->m_barang->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil DiTambahkan !!!');
        
        redirect('stok_barang');
    }

    public function edit($id_barang)
    { 
        $data = array(
            'id_barang'   => $id_barang,
            'jumlah_barang' => $this->input->post('jumlah_barang'),
        );

        $this->m_barang->edit($data);
        $this->session->set_flashdata('pesan', 'Stok Berhasil Ditambahkan !!!');
        
        redirect('stok_barang');
    }
}


  





