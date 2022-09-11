<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class login_pembeli
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_auth');
    }

    public function login($email, $password)
    {
        $cek =  $this->ci->m_auth->login_pembeli($email, $password);
        if ($cek) {
            $id_pembeli = $cek->id_pembeli;
            $NIK = $cek->NIK;
            $email   = $cek->email;
            $alamat = $cek->alamat;
            $nama   = $cek->nama;
            $telepon    = $cek->telepon;

            //membuat session
            $this->ci->session->set_userdata('id_pembeli', $id_pembeli);
            $this->ci->session->set_userdata('NIK', $NIK);
            $this->ci->session->set_userdata('email', $email);
            $this->ci->session->set_userdata('alamat', $alamat);
            $this->ci->session->set_userdata('nama', $nama);
            $this->ci->session->set_userdata('telepon', $telepon);
          
            redirect('pembeli');
        } else {
            //jika salah
            $this->ci->session->set_flashdata('error', 'Username atau Password salah');
            
            redirect('pembeli/login');
            
        }
    }

    public function proteksi_halaman_pembeli()
    {
        if ($this->ci->session->userdata('email') == '') {
            $this->ci->session->set_flashdata('error', 'login terlebih dahulu !');
            redirect('pembeli/login');
        } 
    }

    public function logout()
    {
            $this->ci->session->unset_userdata('id_pembeli');
            $this->ci->session->unset_userdata('NIK');
            $this->ci->session->unset_userdata('email');
            $this->ci->session->unset_userdata('alamat');
            $this->ci->session->unset_userdata('nama');
            $this->ci->session->unset_userdata('telepon');
            $this->ci->session->set_flashdata('pesan', 'anda berhasil logout !');
            redirect('pembeli/login');
    }

    

}

/* End of file user_login.php */
