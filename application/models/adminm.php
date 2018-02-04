<?php

class adminm extends CI_Model{

// =========================================================================================================== //
// =========================================================================================================== //


    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }

    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data)->result();
    }

    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }

    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }

    public function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }

    public function viewByProvinsi($propinsiid){
    $this->db->where('propinsiid', $propinsiid);
    $result = $this->db->get('tbl_propinsi_kota')->result();
    
    return $result; 
  }


// =========================================================================================================== //
// =========================================================================================================== //
    function get_all_data_prov(){
        return $this->db->query("
            SELECT *, a.nama, a.propinsiid,
            (select count(propinsiid) as jum from tbl_propinsi_kota where propinsiid=a.propinsiid) as jumlah_kota
            FROM tbl_propinsi a
            LEFT JOIN tbl_propinsi_kota b ON a.propinsiid = b.propinsiid
            GROUP BY a.propinsiid
        ")->result();
    }

// =========================================================================================================== //
// =========================================================================================================== //
    function get_all_data_kota($id_provinsi){
        return $this->db->query("
            SELECT *
            FROM tbl_propinsi_kota a
            WHERE a.propinsiid = '$id_provinsi'
        ")->result();
    }

// =========================================================================================================== //
// =========================================================================================================== //
    function get_all_data_kecamatan(){
        return $this->db->query("
            SELECT *, a.nama, a.propinsiid,
            (select count(propinsiid) as jum from tbl_propinsi_kota where propinsiid=a.propinsiid) as jumlah_kota
            FROM tbl_propinsi a
            LEFT JOIN tbl_propinsi_kota b ON a.propinsiid = b.propinsiid
        ")->result();
    }

// =========================================================================================================== //
// =========================================================================================================== //
    function get_all_data_kelurahan(){
        return $this->db->query("
            SELECT *, a.nama, a.propinsiid,
            (select count(propinsiid) as jum from tbl_propinsi_kota where propinsiid=a.propinsiid) as jumlah_kota
            FROM tbl_propinsi a
            LEFT JOIN tbl_propinsi_kota b ON a.propinsiid = b.propinsiid
        ")->result();
    }
// =========================================================================================================== //
// =========================================================================================================== //

    function login($username, $password) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $this->db->limit(1);

        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

// Source Code by : Aldy Muldani
// Email : dieabra@gmail.com
// Github : https://github.com/alldie1207
// Line : alldie1207
// No: 082295673583

// ===========================================          Script         ======================================= //
// ===========================================                         ======================================= //

}
