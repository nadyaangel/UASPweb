<?php 

class M_toko extends CI_Model{
    public function get_data (){
        return $this->db->get('cake_table')->result_array();
    }
}
?>