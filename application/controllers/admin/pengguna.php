<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('model_allpenggunas');
	}
	
	public function index()
	{	
		$data['pengguna'] = $this->model_allpenggunas->all_penggunas();	
		$this->load->view('admin/all_users',$data);
	}

	public function delete($id_pengguna)	{
		$this->model_allpenggunas->delete($id_pengguna);
		redirect('admin/pengguna');
	}	

}