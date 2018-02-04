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

    function proses_simpan_mitra() {
        $data=array(
            'create_date'=>$this->input->post('create_date'),
            'create_userid'=>$this->input->post('create_userid'),
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'nama'=>$this->input->post('nama'),
            'alamat'=>$this->input->post('alamat'),
            'negaraid'=>$this->input->post('negaraid'),
            'propinsiid'=>$this->input->post('propinsiid'),
            'propinsikotaid'=>$this->input->post('propinsikotaid'),
            'kodepos'=>$this->input->post('kodepos'),
            'telp'=>$this->input->post('telp'),
            'fax'=>$this->input->post('fax'),
            'email'=>$this->input->post('email'),
            'website'=>$this->input->post('website'),
            'personal_nama'=>$this->input->post('personal_nama'),
            'personal_hp'=>$this->input->post('personal_hp'),
            'personal_email'=>$this->input->post('personal_email'),
            'keterangan'=>$this->input->post('keterangan'),
        );
        $this->Global_model->insertData('tbl_mitra',$data);
        redirect("mitrac/data_mitra");
    }

    function proses_ubah_pelanggan() {
        $id['mitraid'] = $this->input->post('mitraid');
        $data=array(
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'tipeid'=>$this->input->post('tipeid'),
            'nama'=>$this->input->post('nama'),
            'alamat'=>$this->input->post('alamat'),
            'negaraid'=>$this->input->post('negaraid'),
            'propinsiid'=>$this->input->post('propinsiid'),
            'propinsikotaid'=>$this->input->post('propinsikotaid'),
            'kodepos'=>$this->input->post('kodepos'),
            'telp'=>$this->input->post('telp'),
            'fax'=>$this->input->post('fax'),
            'email'=>$this->input->post('email'),
            'website'=>$this->input->post('website'),
            'personal_nama'=>$this->input->post('personal_nama'),
            'personal_hp'=>$this->input->post('personal_hp'),
            'personal_email'=>$this->input->post('personal_email'),
            'keterangan'=>$this->input->post('keterangan'),
        );
        $this->Global_model->updateData('tbl_mitra',$data,$id);
        redirect("mitrac/data_mitra");
    }

    function proses_hapus_pelanggans(){
        $id['mitraid'] = $this->uri->segment(3);
        $this->Global_model->deleteData('tbl_mitra',$id);

        redirect("mitrac/data_mitra");
    }


}
