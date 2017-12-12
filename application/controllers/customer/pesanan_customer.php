<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_customer extends CI_Controller {

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
		$data['pesanan'] = $this->model_allevents->lihat_pesanan_customer();	
		$this->load->view('customer/lihat_pesanan',$data);
	}
	public function lihat($no_orders)
	{	
		
		//$user='username';
		//$data['tampiluser'] = $this->model_login->datauser($user,$data['username']);
		$data['pesanan'] = $this->model_allevents->detail_lihat_pesanan_customer($no_orders);	
		$this->load->view('customer/lihat_detail_pesanan',$data);
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


	public function edit($no_orders){
		$this->form_validation->set_rules('feedback_user','Ketersediaan Anda','required');
		
		if ($this->form_validation->run() == FALSE)	{
				$data['pesanan'] = $this->model_allevents->finding($no_orders);
				$this->load->view('customer/update_status',$data);
			} else {
				if($_FILES['userfile']['name'] != ''){
						
						$this->load->view('customer/update_status',$data);
						
							$data_pesanan = array(
								'no_orders'              => set_value('no_orders'),
                                'feedback_user'           => set_value('feedback_user')
							);
							$this->model_allevents->edit_status($no_orders,$data_pesanan);
							redirect('customer/pesanan_customer');
				}
				else{
						
						$data_pesanan = array(
								'no_orders'              => set_value('no_orders'),
                                'feedback_user'           => set_value('feedback_user')
							);
						$this->model_allevents->edit_status($no_orders,$data_pesanan);
						$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">Data Tersimpan</div>');
						redirect('customer/pesanan_customer');
				}				
			}		

		
	}
	public function delete($kode_event)	{
		$this->model_allevents->delete($kode_event);
		redirect('customer/event');
	}	
}