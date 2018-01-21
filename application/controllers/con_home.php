<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_home extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('model_daftarevents');
		$this->load->model('model_home');
        
		$this->load->model('model_allevents');
	}

	public function index()
	{	
		echo $this->session->flashdata('msg'); 		
		$isi['data']= $this->model_home->tampilsemuadata();
		$this->load->view('menu/home',$isi);
		
	}


	public function register()
	{
		$this->load->view('menu/register');
		
	}
	public function register_mitra()
	{
		$this->load->view('menu/register_mitra');
		
	}

	public function login(){
		$this->load->view('menu/login');
	}

	/*public function about(){
		$this->load->view('menu/about');
	}*/

	public function Our_product()

	{ redirect('customer/pesan_tanpa_login');


	}
	public function Mitra_list_dog()

	{  
		$data['pesan'] = $this->model_allevents->paket_anjing();	
		$this->load->view('menu/mitra_list_dog',$data);

     
	}
    public function Mitra_list_cat()

	{ 
        $data['pesan'] = $this->model_allevents->paket_kucing();	
		$this->load->view('menu/mitra_list_cat',$data);

     
	}
    public function Paket_anjing($user_partners)

	{ 
        $data['pesan'] = $this->model_allevents->lihat_paket($user_partners);	
		$this->load->view('menu/lihat_paket_anjing',$data);

     
	}
    public function Paket_kucing($user_partners)

	{ 
        $data['pesan'] = $this->model_allevents->lihat_paketcat($user_partners);	
		$this->load->view('menu/lihat_paket_kucing',$data);

     
	}

}