<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('model_hubungis');
	}
	
	public function index()
	{	
		$data['hubungi'] = $this->model_hubungis->all_hubungis();	
		$this->load->view('admin/all_hubungi',$data);
	}

	public function delete($id_hubungi)	{
		$this->model_hubungis->delete($id_hubungi);
		redirect('admin/hubungi');
	}	
	
}