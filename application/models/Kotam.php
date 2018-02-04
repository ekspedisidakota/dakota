<?php

class Kotam extends CI_Model{

// =========================================================================================================== //
// =========================================================================================================== //
    function get_all_data_kota($id_provinsi){
        return $this->db->query("
            SELECT *
            FROM tbl_propinsi_kota a
            WHERE a.propinsiid = '$id_provinsi'
        ")->result();
    }


// Source Code by : Aldy Muldani
// Email : dieabra@gmail.com
// Github : https://github.com/alldie1207
// Line : alldie1207
// No: 082295673583

// ===========================================          Script         ======================================= //
// ===========================================                         ======================================= //

}
