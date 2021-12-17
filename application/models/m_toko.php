<?php 

class M_toko extends CI_Model{
    public function get_data (){
        return $this->db->get('cake_table')->result();
    }

    public function edit_data($where, $table){
        return $this->db->get_where($table, $where);
        
    }

    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
?>