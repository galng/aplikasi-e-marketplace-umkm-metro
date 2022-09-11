<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pembeli extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pembeli');
     

    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'pembeli' => $this->m_pembeli->get_all_data(),
            // 'total_user' => $this->m_admin->total_user(),
            'isi' => 'pembeli/v_pembeli',
        );
        $this->load->view('layout/v_wrapper_frontend',$data, FALSE);
    }
    
    
    public function register()
    {
        // $data = array(
        //     'title' => 'Register Pembeli',
        //     // 'total_barang' => $this->m_admin->total_barang(),
        //     // 'total_user' => $this->m_admin->total_user(),
        //     'isi' => 'v_register',
        // );
        // $this->load->view('layout/v_wrapper_backend',$data, FALSE);

        
        
        $this->form_validation->set_rules('email','email', 'required|is_unique[tbl_pembeli.email]', array(
            'required' => '%s Harus Diisi !!!',
            'is_unique' => '%s ini Sudah Terdaftar'
        ));
        $this->form_validation->set_rules('password', 'password', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('ulangi_password','Password', 'required|matches[password]', array(
            'required' => '%s Harus Diisi',
            'matches' => '%s tidak sama ..!!!'
        ));
        //  $this->form_validation->set_rules('alamat ', 'alamat', 'required', array(
        //     'required' => '%s Harus Diisi !!!'
        // ));
        $this->form_validation->set_rules('NIK', 'NIK', 'required', array(
             'required' => '%s Harus Diisi !!!'
             ));
        $this->form_validation->set_rules('nama', 'nama', 'required', array(
             'required' => '%s Harus Diisi !!!'
             ));
        $this->form_validation->set_rules('telepon', 'telepon', 'required', array(
             'required' => '%s Harus Diisi !!!'
             ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'registrasi Pembeli',
                'isi'   =>'auth/v_register',
             );
            
             $this->load->view('auth/v_register',$data, FALSE);
            } else {
                $data = array(
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'NIK' => $this->input->post('NIK'),
                    'telepon' => $this->input->post('telepon'),
                
                );
                $this->m_pembeli->register($data);
                $this->session->set_flashdata('pesan', 'Register Berhasil Silahkan Login !!!');
                
                redirect('pembeli/register');
                
            }
        }
    public function login()
    { 
        $this->form_validation->set_rules ('email', 'email', 'required', array(
        'required' => '%s Harus Diisi !!!'
    ));
    
    $this->form_validation->set_rules('password', 'password', 'required', array(
        'required' => '%s Harus Diisi !!!'
    ));

    

    if ($this->form_validation->run() == TRUE) {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->login_pembeli->login($email, $password);
    }

    $data = array(
        'title' => 'Login Pembeli',
    );
    $this->load->view('auth/v_login_pembeli',$data, FALSE);

}

public function logout()
    {
        $this->login_pembeli->logout();

    }
}


