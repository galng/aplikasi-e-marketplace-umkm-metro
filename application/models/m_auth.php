<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class m_auth extends CI_Model {


    public function login($username, $password)    
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        
        $this->db->where(array(
            'username'=> $username,
            'password'=> $password,
        )); 
        return $this->db->get()->row();
        
    }

    public function login_pembeli($email, $password)
    {
        $this->db->select('*');
        $this->db->from('tbl_pembeli');
        $this->db->where(array(
            'email'=> $email,
            'password'=> $password,
        )); 
        return $this->db->get()->row();
        
    }

   



}

/* End of file m_auth.php */
