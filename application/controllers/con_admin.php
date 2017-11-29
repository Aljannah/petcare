<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->is_logged_in();
		if ($this->session->userdata('username')=="") {
			redirect('con_login');
		}
		$this->load->helper('text');
	}

	public function logout() {
		session_destroy();
		redirect('con_login');
	}

	public function index()
	{
		redirect('admin/event');
		
	}
	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'Maaf anda diharuskan login untuk mengakses halaman ini. <a href="<../login">Login</a>';	
			die();		
			$this->load->view('menu/login');
		}		
	}	
	public function sudah_konfirmasi()
	{
		redirect('admin/event/sudah_konfirm');
		
	}
	
	public function events()
	{
		$this->load->view('admin/all_events');
	}
	public function alls_hubungi()
	{
		redirect('admin/hubungi');
	}
	public function alls_user()
	{
		redirect('admin/pengguna');
	}
	public function notification()
	{
		redirect('admin/event');
	}



	public function tambah_event()
	{
		redirect('admin/event/create_event');
	}
	public function edit_event()
	{
		redirect('admin/event/edit');
	}
	public function hapus_event()
	{
		redirect('admin/event/delete_event');
	}
}