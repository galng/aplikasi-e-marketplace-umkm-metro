<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class checkout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        
        $this->load->model('m_barang');
        // $this->load->model('m_pedagang');
        $this->load->model('m_transaksi');
        
    }

    public function index()
    {
        if (empty($this->cart->contents())) {
            
            redirect('barang');
            
        }

       $this->login_pembeli->proteksi_halaman_pembeli();

       $this->form_validation->set_rules('alamat', 'Alamat', 'required',
        array('required' => '%s harus diisi !!!' ));
       
       $this->form_validation->set_rules('penerima', 'Nama Penerima', 'required',
        array('required' => '%s harus diisi !!!' ));
       
        $this->form_validation->set_rules('telepon_penerima', 'Telepon Penerima', 'required',
        array('required' => '%s harus diisi !!!' ));
       

       if ($this->form_validation->run() == FALSE) {
        $data = array(
            'title' => '',
            // 'barang' => $this->m_barang->detail_barang(),
            'isi' => 'barang/checkout',
        );
        $this->load->view('layout/v_wrapper_frontend',$data, false);
       } else {
           $data = array(
               'id_pembeli' => $this->session->userdata('id_pembeli'),
               'nama' => $this->session->userdata('nama'),
               'telepon' => $this->session->userdata('telepon'),
               'no_order' => $this->input->post('no_order'),
               'tanggal' => date('Y-m-d'),
               'alamat' => $this->input->post('alamat'),
               'penerima' => $this->input->post('penerima'),
               'telepon_penerima' => $this->input->post('telepon_penerima'),
               'total_bayar' => $this->input->post('total_bayar'),
               'status_bayar' => '0',
               'status_order' => '0',
                );
                $this->m_transaksi->simpan_transaksi($data);
                //simpan ke rinci transaksi
                $i=1;
                foreach ($this->cart->contents() as $items) {
                    $data_rinci = array(
                        'no_order' => $this->input->post('no_order'),
                        'id_barang'=>$items['id'],
                        'qty' => $this->input->post('qty'. $i++),
                    );
                    $this->m_transaksi->simpan_rinci_transaksi($data_rinci);
                }
                $this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Proses');
                $this->cart->destroy();
                
                redirect('pesanan_saya');
                
       }
        
    }

   
}