<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kiriman_paketc extends CI_Controller {
    function __construct(){
        parent::__construct();

        if($this->session->userdata('LEVEL') == '' ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };

    }
    
  public function data_kiriman()
  {

        $data=array(
            'headerTitle'=>'Kiriman Paket',
            'formTitle'=>'Halaman Kiriman Paket',

            'active_kiriman'=>'active',
            'data_kiriman'=>$this->Global_model->getAllData('tbl_mitra'),
            'data_layanan'=>$this->Global_model->getAllData('tbl_layanan'),
           
            
        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/kiriman_paket/data_kiriman_paket');
        $this->load->view('elements/footer');
  }


    public function manage_data_kiriman()
    {

        $data=array(
            'headerTitle'=>'Kiriman Paket',
            'formTitle'=>'Halaman Kiriman Paket',

            'active_kiriman'=>'active',
                   
        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/kiriman_paket/tambah_datakiriman');
        $this->load->view('elements/footer');
    }

    function proses_cart(){
        $id = $this->input->post('id');
        $data = array(
            'id'      => 'barang'.$id,
            'qty'     => 1,
            'price'   => 1,
            'name'    => 'vol'.$id,
            'options' => array(
                'panjang' =>$this->input->post('panjang'),
                'lebar' => $this->input->post('lebar'),
                'tinggi' => $this->input->post('tinggi'),
                'volume' => $this->input->post('volume'),
            )
        );

        $this->cart->insert($data);
        redirect('kiriman_paketc/manage_data_kiriman');

    }

}
