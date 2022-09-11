<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pedagng extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
    
        $this->load->model('m_barang');
        
    }
    
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            
            // 'total_barang' => $this->m_barang->total_barang(),
            // 'total_pedagang' => $this->m_admin->total_pedagang(),
            // 'total_pembeli' => $this->m_admin->total_pembeli(),
            // 'total_user' => $this->m_admin->total_user(),
            'isi' => 'pedagang/v_pedagang',
        );
        $this->load->view('layout/v_wrapper_backend',$data, FALSE);
    }

  


}


