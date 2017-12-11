<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

//session_start();

class Con_customer extends CI_Controller {
	public function __construct() {
		parent::__construct();
		//$this->is_logged_in();
		if ($this->session->userdata('username')=="") {
			redirect('con_login');
		}
		$this->load->model('model_allevents');
		$this->load->model('model_allpenggunas');
		//$this->load->helper('text');
	}
	public function index()
	{
		echo $this->session->flashdata('msg');
		$data['username'] = $this->session->userdata('username');
		//$this->db->where('username',$data['username']);
		//$data['tampiluser'] = $this->db->get('event');
		$this->load->model('model_login');
		$user='username';
		$data['tampiluser'] = $this->model_login->datauser($user,$data['username']);
		$this->load->view('customer/user',$data);
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
		
		redirect('customer/event');
		
	}

	public function profile()
	{	
		
		redirect('customer/profile');
		
	}
	
	public function lihat_pesanan_customer()
	{	
		
		redirect('customer/pesanan_customer');
		
	}
	public function pesan()
	{	
		
		redirect('customer/pesan');
		
	}
	public function mitradog()
	{	
		
		//$user='username';
		//$data['tampiluser'] = $this->model_login->datauser($user,$data['username']);
		$data['pesan'] = $this->model_allevents->paket_anjing();	
		$this->load->view('customer/lihat_paket_anjing',$data);
	}
	public function lihat_paket($user_partners)
	{	
		
		//$user='username';
		$data['pesan'] = $this->model_allpenggunas->lihat_profile_customer();
		$data['pesan'] = $this->model_allevents->lihat_paket($user_partners);	
		$this->load->view('customer/lihat_paket',$data);
	}
	public function lihat_detail_paket_anjing($id_petgrooming)
	{	
		$this->form_validation->set_rules('jumlah_hewan','jumlah hewan','required');
		$this->form_validation->set_rules('tanggal','tanggal grooming','required');
		
		if ($this->form_validation->run() == FALSE)	{
				$data['pesan'] = $this->model_allevents->finding_pesanan($id_petgrooming);
				//$data['pesan'] = $this->model_allevents->finding_user($session_id);
				//$data['pesan'] = $this->model_allevents->finding_partner($id_petgrooming);
				$this->load->view('customer/input_petgrooming',$data);
			} else {
				if($_FILES['userfile']['name'] != ''){
						
						$this->load->view('customer/input_petgrooming',$data);
						
							$data_pesanan = array(
								'no_orders'              => set_value('no_orders'),
                                'status_order'           => set_value('status_order'),
                                'feedback_mitra'         => set_value('feedback_mitra')
							);
							$this->model_allevents->edit_status($no_orders,$data_pesanan);
							redirect('con_customer');
				}
				else{
						
						$data_pesanan = array(
								'no_orders'              => set_value('no_orders'),
                                'status_order'           => set_value('status_order'),
                                'feedback_mitra'         => set_value('feedback_mitra')
							);
						$this->model_allevents->edit_status($no_orders,$data_pesanan);
						$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">Data Tersimpan</div>');
						redirect('con_customer');
				}				
			}		

		
	
	}

}