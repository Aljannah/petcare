<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('model_allpenggunas');
		$this->load->model('model_login');
	}
	
	public function index()
	{	
		echo $this->session->flashdata('msg');
		//$user='username';
		//$data['tampiluser'] = $this->model_login->datauser($user,$data['username']);
		$data['profile'] = $this->model_allpenggunas->lihat_profile();	
		$this->load->view('menu/lihat_profile',$data);
		//redirect('user/profile/edit_biodata');
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


	public function edit_biodata($user_partners){
		//$this->form_validation->set_rules('username','Username','required|max_length[25]');
		$this->form_validation->set_rules('email','Nama Paket','required');
		$this->form_validation->set_rules('hp','nomor telepon','required');
		$this->form_validation->set_rules('partners_name','Nama PetShop','required');
		$this->form_validation->set_rules('address','Alamat Lengkap','required');
		$this->form_validation->set_rules('city','Deskripsi','required');
		$this->form_validation->set_rules('postal_code','Kode Pos','required');
		$this->form_validation->set_rules('wop','Waktu Operasiona;','required');
		$this->form_validation->set_rules('owner','Nama Pemilik','required');
		
		if ($this->form_validation->run() == FALSE)	{
				$data['profile'] = $this->model_allpenggunas->find_user($user_partners);
				$this->load->view('menu/update_profile',$data);
			} else {
				if($_FILES['userfile']['name'] != ''){
						
						$this->load->view('menu/update_profile',$data);
						
						if($this->input->post('password')==""){
							$data_user = array(
								'user_partners'              => set_value('user_partners'),
                                'email'                      => set_value('email'),
                                'hp'                         => set_value('hp'),
                                'partners_name'              => set_value('partners_name'),
                                'address'                    => set_value('address'),
                                'city'                       => set_value('city'),
                                'postal_code'                => set_value('postal_code'),
                                'wop'                        => set_value('wop'),
                                'owner'                      => set_value('owner')
							);}else{
								$password = $this->input->post('password');
								$data_user = array(
								'user_partners'              => set_value('user_partners'),
                                'password'                   => md5($password),
                                'email'                      => set_value('email'),
                                'hp'                         => set_value('hp'),
                                'partners_name'              => set_value('partners_name'),
                                'address'                    => set_value('address'),
                                'city'                       => set_value('city'),
                                'postal_code'                => set_value('postal_code'),
                                'wop'                        => set_value('wop'),
                                'owner'                      => set_value('owner')
							);
								$data_diuser = array(
									'password'                   => md5($password));
								$this->model_allpenggunas->edit_password($user_partners,$data_diuser);
							}

							$this->model_allpenggunas->edit_biodata($user_partners,$data_user);
							redirect('user/profile');
				}
				else{
						
						if($this->input->post('password')==""){
							$data_user = array(
								'user_partners'              => set_value('user_partners'),
                                'email'                      => set_value('email'),
                                'hp'                         => set_value('hp'),
                                'partners_name'              => set_value('partners_name'),
                                'address'                    => set_value('address'),
                                'city'                       => set_value('city'),
                                'postal_code'                => set_value('postal_code'),
                                'wop'                        => set_value('wop'),
                                'owner'                      => set_value('owner')
							);}else{
								$password = $this->input->post('password');
								$data_user = array(
								'user_partners'              => set_value('user_partners'),
                                'password'                   => md5($password),
                                'email'                      => set_value('email'),
                                'hp'                         => set_value('hp'),
                                'partners_name'              => set_value('partners_name'),
                                'address'                    => set_value('address'),
                                'city'                       => set_value('city'),
                                'postal_code'                => set_value('postal_code'),
                                'wop'                        => set_value('wop'),
                                'owner'                      => set_value('owner')
							);
								$data_diuser = array(
									'password'                   => md5($password));
								$this->model_allpenggunas->edit_password($user_partners,$data_diuser);
							}


						$this->model_allpenggunas->edit_biodata($user_partners,$data_user);
						
						
						$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">Data Berhasil Diubah</div>');
						redirect('user/profile');						
				}				
			}		

		
	}
	
}