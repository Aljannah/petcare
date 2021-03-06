<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('model_allevents');
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
/*
	public function create_event(){	
		$this->load->view('crud/tambah_event');		
		$this->form_validation->set_rules('npm','NPM Mahasiswa','required|max_length[12]|is_unique[biodata.npm]');
		$this->form_validation->set_rules('nama','Nama Mahasiswa','required|max_length[40]');
		$this->form_validation->set_rules('alamat','Alamat Mahasiswa','required|max_length[100]');
		$this->form_validation->set_rules('jk','Jenis Kelamin','required');
		$this->form_validation->set_rules('tgl_lhr','Tanggal Lahir','required');

		if ($this->form_validation->run() == FALSE)	{
			$this->load->view('crud/tambah_mhs');	
				
		}else{
					$data_galeri = array
					(
						'npm'				=> set_value('npm'),
						'nama'				=> set_value('nama'),
						'alamat'			=> set_value('alamat'),
						'jk'				=> set_value('jk'),
						'tgl_lhr'			=> set_value('tgl_lhr'),
					);					
					$this->model_biodata->create($data_galeri);
					redirect('admin/biodata');	
			}
		}	

	
	public function delete_event($npm)	{
		$this->model_biodata->delete($npm);
		redirect('admin/biodata');
	}*/


	public function edit($kode_event){
		$this->form_validation->set_rules('username','Username','required|max_length[25]');
		$this->form_validation->set_rules('package_name','Nama Paket','required|max_length[50]');
		$this->form_validation->set_rules('description','Deskripsi','required|max_length[50]');
		$this->form_validation->set_rules('petcategory','Kategori PetGrooming','required|max_length[50]');
		$this->form_validation->set_rules('status','Status','required|max_length[5000]');
		
		if ($this->form_validation->run() == FALSE)	{
				$data['events'] = $this->model_allevents->find($kode_event);
				$this->load->view('admin/update_events',$data);
			} else {
				if($_FILES['userfile']['name'] != ''){
						
						$this->load->view('admin/update_events',$data);
						
							$data_event = array(
								'user_partners'              => set_value('username'),
                                'package_name'          => set_value('package_name'),
                                'description'           => set_value('description'),
                                'petcategory'           => set_value('petcategory'),
                                'status'                => set_value('status')
							);
							$this->model_allevents->edit($kode_event,$data_event);
							redirect('admin/event');
				}
				else{
						
						$data_event = array(
								'user_partners'              => set_value('username'),
                                'package_name'          => set_value('package_name'),
                                'description'           => set_value('description'),
                                'petcategory'           => set_value('petcategory'),
                                'status'                => set_value('status')

						);
						$this->model_allevents->edit($kode_event,$data_event);
						redirect('admin/event');						
				}				
			}		

		
	}
	public function delete($kode_event)	{
		$this->model_allevents->delete($kode_event);
		redirect('admin/event');
	}	
}