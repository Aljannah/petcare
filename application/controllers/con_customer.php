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
		$this->load->model('model_detor');
		$this->load->model('model_ordet');
		//$this->load->helper('text');
		$table = 'order_det';
        $data['detor'] = $this->model_detor->getdetor($table);
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
    public function mitracat()
	{	
		
		//$user='username';
		//$data['tampiluser'] = $this->model_login->datauser($user,$data['username']);
		$data['pesan'] = $this->model_allevents->paket_kucing();	
		$this->load->view('customer/lihat_paket_kucing',$data);
	}
	public function lihat_paket($user_partners)
	{	
		
		//$user='username';
		$data['pesan'] = $this->model_allpenggunas->lihat_profile_customer();
		$data['pesan'] = $this->model_allevents->lihat_paket($user_partners);	
		$this->load->view('customer/lihat_paket',$data);
	}
    public function lihat_paket_detail($user_partners)
	{	
		
		//$user='username';
		$data['pesan'] = $this->model_allpenggunas->lihat_profile_customer();
		$data['pesan'] = $this->model_allevents->lihat_paketcat($user_partners);	
		$this->load->view('customer/lihat_paket_detail',$data);
	}
	public function lihat_detail_paket_anjing($id_petgrooming)
	{	
		$table = 'order_det';
        $this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: 5px">', '</div>');
        $data['detor'] = $this->model_detor->getdetor($table);
		//$this->form_validation->set_rules('jumlah_hewan','jumlah hewan','required');
		$this->form_validation->set_rules('grooming_date','tanggal grooming','required');
		$this->form_validation->set_rules('jumlah_hewan','jumlah hewan','required');
		$this->form_validation->set_rules('time_hour','Jam Grooming','required');
		$this->form_validation->set_rules('mnt_hour','Menit Grooming','required');
		$this->form_validation->set_rules('day_hour','Waktu Grooming','required');
		
		
		if ($this->form_validation->run() == FALSE)	{
				$data['pesan'] = $this->model_allevents->finding_pesanan($id_petgrooming);
				$this->load->view('customer/input_petgrooming',$data);
			} else {

							
							$jumlah_hewan = $this->input->post('jumlah_hewan');
							$quantity = $this->input->post('price');
							$total= $quantity * $jumlah_hewan  ;
							$wopnya = 
							$this->input->post('time_hour').":".
							$this->input->post('mnt_hour')." ".
							$this->input->post('day_hour');

							$data_ordersdet = array(
								'id_petgrooming'         => set_value('id_petgrooming'),
                                'quantity'           	 => set_value('jumlah_hewan'),
                                'unit_price'         	=> set_value('price'),
                                'user_partners'			=> set_value('user_partners'),
                                'no_orderdetail'		=> set_value('no_orderdetail')

							);
							$this->model_ordet->create('order_det',$data_ordersdet);
							$data_orders = array(
								'user_customer'         => $this->session->userdata('username'),
                                'total'           	 	=> $total,
                                'order_date'         	=> set_value('order_date'),
                                'grooming_date'			=> set_value('grooming_date'),
                                'grooming_time'			=> $wopnya,
                                'status_order'			=> set_value('status_order'),
                                'feedback_mitra'		=> set_value('feedback_mitra'),
                                'feedback_user'			=> set_value('feedback_user'),
                                'no_orderdetail'		=> set_value('no_orderdetail')

							);
							$this->model_ordet->create('orders',$data_orders);
							$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">Pesanan Anda Telah Disimpan</div>');
							redirect('con_customer');
						
			}		

		
	
	}

}