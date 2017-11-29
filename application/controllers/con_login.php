<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('menu/login');
	}
	/*public function getlogin()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$this->load->model('model_login');
		$this->model_login->getlogin($u,$p);
	}*/
	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('model_login'); // load model_user
		$hasil = $this->model_login->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['is_logged_in'] = true;
				$sess_data['id_pengguna'] = $sess->id_pengguna;
				$sess_data['username'] = $sess->username;
				$sess_data['role'] = $sess->role;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('role')=='1') {
				redirect('con_admin');
			}
			elseif ($this->session->userdata('role')=='2') {
				redirect('con_user');
			}
			elseif ($this->session->userdata('role')=='3') {
				redirect('con_user');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Username atau password salah. Cek username dan password!');history.go(-1);</script>";
		}
	}
	
}