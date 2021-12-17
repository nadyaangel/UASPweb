<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function _construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function dashboard()
	{
		$this->load->model('m_toko');
		$data['cake_table']= $this->m_toko->get_data();
		$this->load->view('layout/header');
		$this->load->view('dashboard', $data);
		$this->load->view('layout/about');
		$this->load->view('layout/footer');
	}

	public function create()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$data = array(
				'id' => $this->input->post('id'),
				'nama_kue' => $this->input->post('nama_kue'),
				'harga' => $this->input->post('harga'),
				'deskripsi' => $this->input->post('deskripsi')
			);
			$this->db->insert('cake_table', $data);

			redirect('admin/dashboard');
		}
		else{
		$this->load->view('layout/header');
		$this->load->view('create');
		$this->load->view('layout/footer');
		}
	}

	public function edit($id)
	{
		$where = array('id' => $id);
		$data['data'] = $this->m_toko->edit_data($where, 'cake_table')->result();
		$this->load->view('layout/header');
		$this->load->view('update', $data);
	}

	public function update(){
		$id = $this->input->post('id');
		$nama_kue = $this->input->post('nama_kue');
		$harga = $this->input->post('harga');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
			'id' => $id,
			'nama_kue' =>$nama_kue,
			'harga' => $harga,
			'deskripsi' => $deskripsi
		);

		$where = array(
			'id' =>$id
		);

		$this->m_toko->update_data($where, $data, 'cake_table');
		redirect('admin/dashboard');
	}

	
}
