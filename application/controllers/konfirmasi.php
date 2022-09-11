<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class konfirmasi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_konfirmasi');
    }

    public function index()
    {
            $data = array(
                'title' => 'Konfirmasi',
                'pesanan'=> $this->m_konfirmasi->pesanan(),
                'pesanan_diproses'=> $this->m_konfirmasi->pesanan_diproses(),
                'pesanan_dikirim'=> $this->m_konfirmasi->pesanan_dikirim(),
                'pesanan_selesai'=> $this->m_konfirmasi->pesanan_selesai(),
               
                'isi' => 'pedagang/konfirmasi',
            );
            $this->load->view('layout/v_wrapper_backend',$data, FALSE);
    }

    public function kirim($id_transaksi)
    {
        $data = array(
            'id_transaksi' => $id_transaksi,
            'no_resi'   => $this->input->post('no_resi'),
            'status_order' => '2',
     );
     $this->m_konfirmasi->update_order($data);
     $this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Konfirmasi Atau Dikemas');
     
     redirect('konfirmasi');
    }
    public function diproses($id_transaksi)
    {
        $data = array(
            'id_transaksi' => $id_transaksi,
            'status_order' => '1',
     );
     $this->m_konfirmasi->update_order($data);
     $this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Konfirmasi Atau Dikemas');
     
     redirect('konfirmasi');
    }

    
}