<?php 

class COlshop extends CI_Controller{

    public function index(){
        $this->load->model('m_toko');
        $data['tokokue']= $this->m_toko->get_data();

        $this->load->view('viewtable', $data);
    }
}

?>