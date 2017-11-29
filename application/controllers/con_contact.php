<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_contact extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('model_hubungis');
	}

	public function index()
	{	
		 $this->load->view('hubungi');
		
	}
	public function hubungi(){
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
		$this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: 5px">', '</div>');


		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$telepon = $this->input->post('telepon');
		$subjek = $this->input->post('subjek');
		$pesan = $this->input->post('pesan'); 
	
		$this->form_validation->set_rules('nama','Nama Anda','required|max_length[50]');
		$this->form_validation->set_rules('email','Email Anda','required|max_length[100]');
		$this->form_validation->set_rules('telepon','Nomor Telepon Anda','required|max_length[13]');
		$this->form_validation->set_rules('subjek','Subjek Pesan','required');
		$this->form_validation->set_rules('pesan','Pesan Anda','required');
		
		if ($this->form_validation->run() == FALSE)	{
			$this->load->view('hubungi');	
				
		}else{
					$data_hubungi = array
					(
						'nama'				=> set_value('nama'),
						'email'				=> set_value('email'),
						'telepon'			=> set_value('telepon'),
						'subjek'			=> set_value('subjek'),
						'pesan'				=> set_value('pesan'), 
					);					
					$this->model_hubungis->create($data_hubungi);
					redirect('con_contact/hubungi');	
			}
	}
		
}