<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_tanpa_login extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('model_allevents');
	}
	
	public function index()
	{	
		echo $this->session->flashdata('msg');
		//$user='username';
		//$data['tampiluser'] = $this->model_login->datauser($user,$data['username']);
		//$data['pesanan'] = $this->model_allevents->lihat_pesanan();	
		$this->load->view('customer/input_pesan_nologin');
	}
	
	

}