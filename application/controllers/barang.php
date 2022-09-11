<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        
        $this->load->model('m_barang');
        $this->load->model('m_pedagang');

    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Daftar Barang',
            'barang' => $this->m_barang->get_all_data(),
            'pedagang' => $this->m_pedagang->get_all_data(),
            'isi' => 'barang/v_barang',
        );
        $this->load->view('layout/v_wrapper_frontend',$data, FALSE);
    }

  

    public function add_keranjang($id)
    {
        $barang = $this->m_barang->find($id);
        $data = array(
            'id' => $barang->id_barang,
            'qty'=> 1,
            'price'=> $barang->harga,
            'name'  => $barang->nama_barang
         , );
         $this->cart->insert($data);
         
         redirect('barang');
         
    }

    

}

/* End of file barang.php */

