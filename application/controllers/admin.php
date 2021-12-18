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
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('m_toko');
    }

	public function about(){
		$title['title'] = "About Us";
		$this->load->view('layout/header', $title);
		$this->load->view('about');
		$this->load->view('layout/footer');
	}

	public function login(){
		$title['title'] = "Log In";

		$this->load->view('layout/header', $title);
		$this->load->view('login');
		$this->load->view('layout/footer');
		

		
	}
	
	public function login_aksi(){
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		
		if($this->form_validation->run() != false){
			$where = array(
				'username' =>$username,
				'password' =>$password
			);

			$cekLogin = $this->m_toko->cek_login("user",$where)->num_rows();

			if($cekLogin >0){
				$sess_data = array(
					'username' => $username,
					'login' => 'OK'

				);
				$this->session->set_userdata($sess_data);
			redirect('admin/dashboard');
			}
			else{
				redirect('admin/registration');
			}
		}
		else{
		$this->load->view('layout/header', $title);
		$this->load->view('login');
		$this->load->view('layout/footer');
		}
	 }
    
    public function dashboard()
	{
		$title['title'] = 'Dashboard';
		$this->load->model('m_toko');
		$data['cake_table']= $this->m_toko->get_data();
		$this->load->view('layout/header', $title);
		$this->load->view('dashboard', $data);
		$this->load->view('layout/footer');
	}

	public function create()
	{	
		$title['title'] = 'Edit Data';
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
		$this->load->view('layout/header', $title);
		$this->load->view('create');
		$this->load->view('layout/footer');
		}
	}

	public function edit($id)
	{	$title['title'] = 'Edit Data';
		$where = array('id' => $id);
		$data['data'] = $this->m_toko->edit_data($where, 'cake_table')->result();
		$this->load->view('layout/header', $title);
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

	public function hapus($id){
		$where = array('id' => $id);

		$this->m_toko->hapus_data($where, 'cake_table');
		redirect('admin/dashboard');
	}

	public function index(){

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
		if($this->form_validation->run() == false){
			$data['title'] = 'Register';
			$this->load->view('layout/header', $data);
			$this->load->view('registration');
			$this->load->view('layout/footer');

		}else {
			$data = [
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email')
			];

			$this->db->insert('user', $data);
			redirect('admin/dashboard');

			
		}
	}
	
}
