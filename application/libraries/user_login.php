<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class user_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_auth');
    }

    public function login_user($username, $password)
    {
        $cek =  $this->ci->m_auth->login($username, $password);

            // if($cek_admin->num_rows() > 0){ //jika login sebagai dosen
            //             $data=$cek_admin->row_array();
            //     $this->session->set_userdata('masuk',TRUE);
            //     if($data['level_user']=='1'){ //Akses admin
            //         $this->session->set_userdata('level_user','1');
            //         $this->session->set_userdata('nama_lengkap',$data['nama_lengkap']);
            //         $this->session->set_userdata('username',$data['username']);
            //         redirect('admin');

            //     }else{ //akses dosen
            //         $this->session->set_userdata('level_user','2');
            //                     $this->session->set_userdata('username ',$data['username']);
            //         $this->session->set_userdata('nama_lengkap',$data['nama_lengkap']);
            //         redirect('pedagang');
            //     }

            // }else{ //jika login sebagai mahasiswa
            //         $cek_pembeli=$this->login_model->login_pembeli($email,$password);
            //         if($cek_pembeli->num_rows() > 0){
            //                 $data=$cek_pembeli->row_array();
            //         $this->session->set_userdata('masuk',TRUE);
            //                 $this->session->set_userdata('akses','3');
            //                 $this->session->set_userdata('ses_id',$data['nim']);
            //                 $this->session->set_userdata('ses_nama',$data['nama']);
            //                 redirect('page');
            //         }else{  // jika username dan password tidak ditemukan atau salah
            //                 $url=base_url();
            //                 echo $this->session->set_flashdata('msg','Username Atau Password Salah');
            //                 redirect($url);
            //         }

        

        if ($cek) {
            $nama_lengkap = $cek->nama_lengkap;
            $username   = $cek->username;
            $level_user = $cek->level_user;

            //membuat session
            $this->ci->session->set_userdata('nama_lengkap', $nama_lengkap);
            $this->ci->session->set_userdata('username', $username);
            $this->ci->session->set_userdata('level_user', $level_user);     
                redirect('admin');
                
           
        } else {

            //jika salah
            $this->ci->session->set_flashdata('error', 'Username atau Password salah');
            
            redirect('auth/login_user');
            
        } 

       
        
    }

    public function proteksi_halaman()
    {
        if ($this->ci->session->userdata('username') == '') {
            $this->ci->session->set_flashdata('error', 'login terlebih dahulu !');
            redirect('auth/login_user');
        } 

    }

    public function logout()
    {
        $this->ci->session->unset_userdata('username');
            $this->ci->session->unset_userdata('nama_lengkap');
            $this->ci->session->unset_userdata('level_user');
            $this->ci->session->set_flashdata('pesan', 'anda berhasil logout !');
            redirect('auth/login_user');
    }
    

}


/* End of file user_login.php */
