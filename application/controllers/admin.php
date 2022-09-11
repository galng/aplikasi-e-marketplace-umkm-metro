<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
    
        $this->load->model('m_admin');
        
    }
    
    public function index()
    {
        if ($this->session->userdata('level_user') ==1 ) {
            $data = array(
                'title' => 'Dashboard',
                'pedagang' => $this->m_admin->get_all_data(),
                'total_pedagang' => $this->m_admin->total_pedagang(),
                'total_pembeli' => $this->m_admin->total_pembeli(),
                'total_user' => $this->m_admin->total_user(),
                'total_transaksi'=> $this->m_admin->total_transaksi(),
                'isi' => 'v_admin',
            );
            $this->load->view('layout/v_wrapper_backend',$data, FALSE);
        } else {
            
            redirect('pedagng');
            
        }
        
    }

  


}


