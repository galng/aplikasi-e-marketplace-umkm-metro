<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Login',
            // 'isi' => 'auth/v_login_user',
        );
        $this->load->view('auth/v_login',$data, FALSE);
        
        // $this->load->view('layout/v_wrapper_backend',$data, FALSE);
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

        
        
        // $this->form_validation->set_rules('email','email', 'required|is_unique[tbl_pembeli.email]', array(
        //     'required' => '%s Harus Diisi !!!',
        //     'is_unique' => '%s ini Sudah Terdaftar'
        // ));
        // $this->form_validation->set_rules('password', 'password', 'required', array(
        //     'required' => '%s Harus Diisi !!!'
        // ));
        // $this->form_validation->set_rules('ulangi_password','Password', 'required|matches[password]', array(
        //     'required' => '%s Harus Diisi',
        //     'matches' => '%s tidak sama ..!!!'
        // ));
        // //  $this->form_validation->set_rules('alamat ', 'alamat', 'required', array(
        // //     'required' => '%s Harus Diisi !!!'
        // // ));
        // $this->form_validation->set_rules('NIK', 'NIK', 'required', array(
        //      'required' => '%s Harus Diisi !!!'
        //      ));
        // $this->form_validation->set_rules('nama', 'nama', 'required', array(
        //      'required' => '%s Harus Diisi !!!'
        //      ));
        // $this->form_validation->set_rules('telepon', 'telepon', 'required', array(
        //      'required' => '%s Harus Diisi !!!'
        //      ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'registrasi Pedagang',
                'isi'   =>'auth/v_register_pedagang',
             );
            
             $this->load->view('auth/v_register_pedagang',$data, FALSE);
            } else {
                $data = array(
                    'nama_pedagang' => $this->input->post('nama_pedagang'),
                    'nama_usaha' => $this->input->post('nama_usaha'),
                    'jenis_usaha' => $this->input->post('jenis_usaha'),
                    'alamat' => $this->input->post('alamat'),
                    'telepon' => $this->input->post('telepon'),
                
                );
                $this->m_pembeli->register($data);
                $this->session->set_flashdata('pesan', 'Register Berhasil Silahkan Login !!!');
                
                redirect('auth/register');
                
            }
        }
    

    public function login_user()
    {


        $this->form_validation->set_rules ('username', 'username', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        
        $this->form_validation->set_rules('password', 'password', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->user_login->login_user($username, $password);
        }

        $data = array(
            'title' => 'Login User',
        );
        $this->load->view('auth/v_login',$data, FALSE);

    }

    public function logout_user()
    {
        $this->user_login->logout();

    }
}

/* End of file auth.php */
