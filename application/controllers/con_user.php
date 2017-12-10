<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

//session_start();

class Con_user extends CI_Controller {
	public function __construct() {
		parent::__construct();
		//$this->is_logged_in();
		if ($this->session->userdata('username')=="") {
			redirect('con_login');
		}
		//$this->load->helper('text');
	}
	public function index()
	{
		$data['username'] = $this->session->userdata('username');
		//$this->db->where('username',$data['username']);
		//$data['tampiluser'] = $this->db->get('event');
		$this->load->model('model_login');
		$user='username';
		$data['tampiluser'] = $this->model_login->datauser($user,$data['username']);
		$this->load->view('menu/user',$data);
	}
	public function logout() {
		$this->session->unset_userdata('username');
		//$this->session->unset_userdata('level');
		session_destroy();
		redirect('con_login');
	}
	
	public function is_logged_in()
	{
		$data['is_logged_in'] = $this->session->userdata('is_logged_in');
		if(!isset($data['is_logged_in']) || $data['is_logged_in'] != true)
		{
			echo "Maaf anda diharuskan login untuk mengakses halaman ini.";	
			die();		
			$this->load->view('menu/login');
		}		
	}	

	public function daftar_paket()
	{	
		
		redirect('user/event');
		
	}

	public function profile()
	{	
		
		redirect('user/profile');
		
	}
	
	public function lihat_pesanan()
	{	
		
		redirect('user/pesanan');
		
	}

}