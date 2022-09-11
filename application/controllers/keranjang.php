
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class keranjang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        
        $this->load->model('m_barang');
        // $this->load->model('m_pedagang');

    }

    public function index()
    {
        if (empty($this->cart->contents())) {
            
            redirect('barang');
            
        }
        $data = array(
            'title' => 'Keranjang',
            // 'barang' => $this->m_barang->detail_barang(),
            'isi' => 'barang/keranjang',
        );
        $this->load->view('layout/v_wrapper_frontend',$data, false);
    }

    public function delete($rowid)
    {
        $this->cart->remove($rowid);
        
        redirect('keranjang');   
    }
    public function update()
    {
        $i=1;
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid' => $items['rowid'],
                'qty'   => $this->input->post($i.'[qty]'),
        );
             $this->cart->update($data);
             $i++;
        }
            redirect('keranjang');  
    }

   
}
    