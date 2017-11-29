<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allevents extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('Model_daftarevents');
	}
	
	public function index()
	{	
		$data['event'] = $this->model_allevents->all_events_belum();	
		$this->load->view('admin/all_events',$data);
	}
	public function sudah_konfirm()
	{	
		$data['event'] = $this->model_allevents->all_events_konfirm();	
		$this->load->view('admin/all_events',$data);
	}
}