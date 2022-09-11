<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class chat_realtime extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('m_pedagang');
        

    }

    // List all your items
    public function index()
    {
		$data = array(
            'title' => '',
            
            'pedagang' => $this->m_pedagang->get_all_data(),
            'isi' => 'pedagang/chat',
        );
        // $this->m_pedagang->get_all_data($data);
        $this->load->view('layout/v_wrapper_backend',$data, FALSE);
    }
}