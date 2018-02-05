<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kotac extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Kotam');
        if($this->session->userdata('LEVEL') == '' ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };

    }
    
	public function data_kota()
	{
        $id_provinsi = $this->uri->segment(3);
        $data=array(
            'headerTitle'=>'Wilayah',
            'headerTitle2'=>'Provinsi Dan Kota',
            'formTitle'=>'Kota',

            'active_wilayah'=>'active',
            'active_prov'=>'active',
            'data_kota'=>$this->Kotam->get_all_data_kota($id_provinsi),
        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/kota/data_kota');
        $this->load->view('elements/footer');
	}

        function proses_simpan_kota() {
        $data=array(
            'create_date'=>$this->input->post('create_date'),
            'create_userid'=>$this->input->post('create_userid'),
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'nama'=>$this->input->post('nama'),
            'propinsiid'=>$this->input->post('propinsiid'),
        );
        $this->Global_model->insertData('tbl_propinsi_kota',$data);
        redirect("provc/data_prov");
    }

    function proses_ubah_kota() {
        $id['propinsikotaid'] = $this->input->post('propinsikotaid');
        $data=array(
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'nama'=>$this->input->post('nama'),
            'propinsiid'=>$this->input->post('propinsiid'),
        );
        $this->Global_model->updateData('tbl_propinsi_kota',$data,$id);
        redirect("kotac/data_kota/".$this->input->post('propinsiid'));
    }

    function proses_hapus_kota(){
        $id['propinsikotaid'] = $this->uri->segment(3);
        $id_provinsi = $this->uri->segment(4);
        $this->Global_model->deleteData('tbl_propinsi_kota',$id);

        redirect("kotac/data_kota");
    }



}
