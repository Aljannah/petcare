<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_home extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('model_daftarevents');
		$this->load->model('model_home');
	}

	public function index()
	{	
		echo $this->session->flashdata('msg'); 		
		$isi['data']= $this->model_home->tampilsemuadata();
		$this->load->view('menu/home',$isi);
		
	}

	public function detail(){
	/*$this->load->model('model_event');
		$isi['dt6']= $this->model_barang->categoridress();
		$isi['data']= $this->model_barang->newarrival();*/
		$key = $this->uri->segment(3);
		$this->db->where('kode_event', $key);
		$query=$this->db->get('event');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$isi['kode_event']	= $row->kode_event;
				$isi['nama']	= $row->nama;
				$isi['lokasi']		= $row->lokasi;
				$isi['universitas']		= $row->universitas;
				$isi['deskripsi']		= $row->deskripsi;
				$isi['poster']	= $row->poster;
				$isi['kategori']	= $row->kategori;
				$isi['tanggal']	= $row->tanggal;
			}
			$this->load->view('menu/detailevent',$isi);
		}
		else{
				echo "error";
		}
	}


	public function semuaevent()
	{
		$data['event'] = $this->model_daftarevents->semua();
		$data['kategori'] = "Daftar Event - Event Terbaru";
		$this->load->view('menu/daftarevents',$data);
		
	}

	public function sport()
	{
		$data['event'] = $this->model_daftarevents->all_events_sport();
		$data['kategori'] = "Sportainment";
		$this->load->view('menu/daftarevents',$data);
		
	}
	public function competition()
	{
		$data['event'] = $this->model_daftarevents->all_events_compt();
		$data['kategori'] = "Competition";
		$this->load->view('menu/daftarevents',$data);
		
	}



	public function seminar()
	{
		$data['event'] = $this->model_daftarevents->all_events_seminar();
		$data['kategori'] = "Seminar & Conference";
		$this->load->view('menu/daftarevents',$data);
		
	}
	public function expo()
	{
		$data['event'] = $this->model_daftarevents->all_events_expo();
		$data['kategori'] = "Expo & Bazaar";
		$this->load->view('menu/daftarevents',$data);
		
	}
	public function workshop()
	{
		$data['event'] = $this->model_daftarevents->all_events_workshop();
		$data['kategori'] = "Workshop & Training";
		$this->load->view('menu/daftarevents',$data);
		
	}
	public function paper()
	{
		$data['event'] = $this->model_daftarevents->all_events_paper();
		$data['kategori'] = "Paper / LKTI";
		$this->load->view('menu/daftarevents',$data);
		
	}
	public function other()
	{
		$data['event'] = $this->model_daftarevents->all_events_other();
		$data['kategori'] = "Others";
		$this->load->view('menu/daftarevents',$data);
		
	}
	public function social()
	{
		$data['event'] = $this->model_daftarevents->all_events_social();
		$data['kategori'] = "Social & Politics";
		$this->load->view('menu/daftarevents',$data);
		
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

	public function about(){
		$this->load->view('menu/about');
	}

	public function hubungi_kami()

	{redirect("con_contact/hubungi");


	/***capcai**

		$path ='./assets/captcha/';

		if (!file_exists($path)) {
			$create = mkdir($path,0777);
			if (!$create)
				return;
		}

		$word = array_merge(range('0', '9'), range('A', 'Z'));
        $acak = shuffle($word);
        $str  = substr(implode($word), 0, 5);
 
        //Menyimpan huruf acak tersebut kedalam session
        //$data_ses = array('captcha_str' => $str  );
        //$this->session->set_userdata($data_ses);


		$vals = array(
			'word'	=>$str,
			'img_path' => $path,
			'img_url' => base_url().'assets/captcha/',
			'font_path' => './system/fonts/impact.ttf',
			'img_width' => '155',
			'img_height' => '40',
			'expiration' => 90
		);
		$cap = create_captcha($vals);
	 
		$datamasuk = array(
			'captcha_time' => $cap['time'],
			'ip_address' => $this->input->ip_address(),
			'word' => $cap['word']
		);
		
		$this->app_model->insertData('captcha', $datamasuk);
			
		$d['gbr_captcha'] = $cap['image'];
				
		//$dd['data'] ='';
		$d['isi']= ('hubungi');//$this->load->view('hubungi',$dd,true);
		$this->load->view('hubungi',$d);*/
	}
	

	public function simpan_hubungi()
	{
		
		$dt['nama'] = mysql_real_escape_string($this->input->post('nama'));
		$dt['email'] = $this->input->post('email');
		$dt['telepon'] = $this->input->post('telepon');
		$dt['subjek'] = mysql_real_escape_string($this->input->post('subjek'));
		$dt['pesan'] = $this->input->post('pesan');
		$dt['tanggal'] = date('Y-m-d');
		$cap = 	$this->input->post('captcha');
		
		
		$expiration = time()-9000;
		$this->app_model->manualQuery("DELETE FROM captcha WHERE captcha_time < ".$expiration);
		
		$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
		$binds = array($cap, $this->input->ip_address(), $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->num_rows();
		if ($row == 0){
			echo "Captcha salah silahkan ulangi lagi.";
		}else{			
			$this->app_model->insertData("hubungi",$dt);
			
			/** variabel **/
			$email = $this->input->post('email');
			$telepon = $this->input->post('telepon');
			$nama = mysql_real_escape_string($this->input->post('nama'));
			$subjek =  mysql_real_escape_string($this->input->post('subjek'));
			$isi = $this->input->post('pesan');
			
			/**config **/
			$config = Array( 
			  'protocol' => 'smtp', 
			 'smtp_host' => 'ssl://smtp.googlemail.com', 
			  'smtp_port' => 465, 
			 'smtp_user' => 'mc@mahasiswacerdas.com', 
			 'smtp_pass' => '', );
			 
			$this->email->from($email, $nama);
			$this->email->to('mc@mahasiswacerdas.com'); 
			$this->email->cc('mc@mahasiswacerdas.com'); 
			//$this->email->bcc('them@their-example.com'); 
			
			$this->email->subject($subjek);
			$this->email->message($isi);	
			
			$this->email->send();
			
			echo "sukses";
		}
		
	}
}