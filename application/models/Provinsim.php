<?php

class Provinsim extends CI_Model{

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

    public function viewByProvinsi($propinsiid){
    
	    $this->db->where('propinsiid', $propinsiid);
	    $result = $this->db->get('tbl_propinsi_kota')->result();
        
	    return $result; 
    }


// Source Code by : Aldy Muldani
// Email : dieabra@gmail.com
// Github : https://github.com/alldie1207
// Line : alldie1207
// No: 082295673583

// ===========================================          Script         ======================================= //
// ===========================================                         ======================================= //

}
