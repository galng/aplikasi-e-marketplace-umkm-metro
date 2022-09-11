<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class cek_konfirmasi extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
    
        $this->load->model('m_konfirmasi');
        
    }
    
    public function index()
    {

        $data = array(
            'title' => '',
            
            'cek_konfirmasi' => $this->m_konfirmasi->get_all_data(),
            'isi' => 'admin/cek_konfirmasi/v_cek_konfirmasi',
        );
        $this->load->view('layout/v_wrapper_backend',$data, FALSE);
        
    }

    
}


  





