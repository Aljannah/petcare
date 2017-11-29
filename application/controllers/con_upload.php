<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_upload extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('model_event');  
        $table = 'petgrooming';
        $data['kodeunik'] = $this->model_event->getkodeunik($table);               
    }

	public function index()
	{
		$table = 'petgrooming';
        $data['kodeunik'] = $this->model_event->getkodeunik($table);
       // $this->load->view('fhome',$data);
		$this->load->view('menu/upload',$data);
	}
	public function uploadevent1(){
		$table = 'petgrooming';
        $data['kodeunik'] = $this->model_event->getkodeunik($table);       
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
		$this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: 5px">', '</div>');


		$id_petgrooming = $this->input->post('id_petgrooming');
		$package_name = $this->input->post('package_name');
		$price = $this->input->post('price');
		$description = $this->input->post('description');
		$petcategory = $this->input->post('petcategory');
		//$deskripsi = $this->input->post('deskripsi');
		//$poster = $this->input->post('poster');
		//$tanggal = $this->input->post('tanggal');
		//$username = $this->input->post('username');
		//$status_konfirm = $this->input->post('status_konfirm');

		$this->form_validation->set_rules('package_name','Nama Acara','required');
		$this->form_validation->set_rules('price', 'Lokasi Acara', 'required');
		$this->form_validation->set_rules('description', 'Universitas', 'required');
		$this->form_validation->set_rules('petcategory', 'Kategori Acara', 'required');
		/*$this->form_validation->set_rules('deskripsi', 'Deskripsi Acara', 'required|min_length[30]');
		//$this->form_validation->set_rules('poster', 'Poster Acara', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Acara', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');*/

		if($this->form_validation->run()==false){
			$this->load->view('menu/upload',$data);
		}
		else{
		 /*if($this->input->post('submit')){
             $config['upload_path']    = "./assets/gambar/";
             $config['allowed_types']  = 'gif|jpg|png|jpeg';
             $config['max_size']       = '2000';
             $config['max_width']      = '2000';
             $config['max_height']     = '2000';
             //$config['file_name']      = 'event-'.$kode_event;
            $config['file_name']      = 'event-'.trim(str_replace(" ","",date('dmYHis')));
            
             $this->load->library('upload', $config);
                
            if (!$this->upload->do_upload("poster")) {
                 $this->load->view('menu/upload',$data);
            }else{*/
                //$gambar = $this->upload->data();
                $data_event = array(
				'id_petgrooming' => $id_petgrooming,
				'user_partners' => $this->session->userdata('username'),
				'package_name' => $package_name,
				'price' => $price,
				'description' => $description,	
				'petcategory' => $petcategory,
				/*'poster' => $gambar['file_name'],
				'kategori' => $kategori,
				'tanggal' => $tanggal,
				'status_konfirm' => $status_konfirm*/
				);
			$this->model_event->create($data_event);
			redirect('con_user');
            }
        }   
	//}
//}
}


/*	public function uploadevent(){
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
		$this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: 5px">', '</div>');

		$kode_event = $this->input->post('kode_event');
		$nama = $this->input->post('nama');
		$lokasi = $this->input->post('lokasi');
		$universitas = $this->input->post('universitas');
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');
		//$poster = $this->input->post('poster');
		$tanggal = $this->input->post('tanggal');
		$username = $this->input->post('username');
		$status_konfirm = $this->input->post('status_konfirm');
		

		$this->form_validation->set_rules('nama','Nama Acara','required');
		$this->form_validation->set_rules('lokasi', 'Lokasi Acara', 'required');
		$this->form_validation->set_rules('universitas', 'Universitas', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori Acara', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Acara', 'required|min_length[30]');
		//$this->form_validation->set_rules('poster', 'Poster Acara', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Acara', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		
		if($this->form_validation->run()==false){
			redirect('menu/upload');
		}else{
			if($this->input->post('submit')){
			$config=array(
	    'upload_path' => './assets/gambar/', //lokasi gambar akan di simpan
	    'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
	    'max_size' => '1000', //batas maksimal ukuran gambar
	    'max_width' => '1024', //batas maksimal lebar gambar
	    'max_height' => '768', //batas maksimal tinggi gambar
	   	//'file_name' => url_title($this->input->post('poster')) //nama gambar
	   );
			$this->load->library('upload', $config);
			//$this->upload->initialize($config);
			//$this->upload->do_upload('poster');
			if (!$this->upload->do_upload("poster")) {
                 echo "Error";
            }else{
            	echo "Data berhasil terupload";
               /* $data_event = array(
				'kode_event' => $kode_event,
				'username' => $username,
				'nama' => $nama,
				'lokasi' => $lokasi,
				'universitas' => $universitas,	
				'deskripsi' => $deskripsi,
				'poster' => $this->upload->data("poster"),
				'kategori' => $kategori,
				'tanggal' => $tanggal,
				'status_konfirm' => $status_konfirm
				);
			$this->model_event->create($data_event);
			redirect('con_home');*/
    /*        }
           }
       }
}
}



	  /* if (!$upload)
	   {
	    $error = $this->upload->display_errors();
	    echo $error;
	   } else {
	   	echo "berhasil";
	   /* $file = $this->upload->data("poster");
	    $data_event = array(
				'kode_event' => $kode_event,
				'username' => $username,
				'nama' => $nama,
				'lokasi' => $lokasi,
				'universitas' => $universitas,	
				'deskripsi' => $deskripsi,
				'poster' => $file,
				'kategori' => $kategori,
				'tanggal' => $tanggal,
				'status_konfirm' => $status_konfirm
				);
			$this->model_event->create($data_event);
			redirect('con_home'); */
	//	}
	//}
//}

	 
	 /*  $this->load->library('upload', $config);
	   $upload = $this->upload->do_upload($poster);
	   if ( ! $upload)
	   {
	    $error = $this->upload->display_errors();
	    echo $error;
	   } else {
	    $file = $this->upload->file_name;
		} 

		
		if($this->form_validation->run()==false){
			$this->load->view('menu/upload');
		}else{
			$this->load->model('model_event');
			$data_event = array(
				'kode_event' => $kode_event,
				'username' => $username,
				'nama' => $nama,
				'lokasi' => $lokasi,
				'universitas' => $universitas,	
				'deskripsi' => $deskripsi,
				'poster' => $file,
				'kategori' => $kategori,
				'tanggal' => $tanggal,
				'status_konfirm' => $status_konfirm
				);
			$this->model_event->create($data_event);
			redirect('con_home');
		} */
	
	
