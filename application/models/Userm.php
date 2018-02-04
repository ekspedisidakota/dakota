<?php

class Userm extends CI_Model{

// =========================================================================================================== //
// =========================================================================================================== //
    public function id_user()
    {
        $q = $this->db->query("select MAX(RIGHT(id_user,4)) as id_max from tbl_user");
        $id = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%06s", $tmp);
            }
        }
        else
        {
            $id = "000001";
        }
        return "US-".$id;
    }


// Source Code by : Aldy Muldani
// Email : dieabra@gmail.com
// Github : https://github.com/alldie1207
// Line : alldie1207
// No: 082295673583

// ===========================================          Script         ======================================= //
// ===========================================                         ======================================= //

}
