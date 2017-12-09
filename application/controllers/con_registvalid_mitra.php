<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_registvalid_mitra extends CI_Controller {
		
	public function index()
	{
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
		$this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: 5px">', '</div>');

		$nama_depan = $this->input->post('nama_depan');
		$nama_petcare = $this->input->post('nama_petcare');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$repass = $this->input->post('repass');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$city = $this->input->post('city');
		$postal_code = $this->input->post('postal_code');
		$wop = $this->input->post('wop');
		$wop_time_open_hour = $this->input->post('$wop_time_open_hour');
		$wopnya = 
			$this->input->post('wopsenin')." ".
			$this->input->post('wopselasa')." ".
			$this->input->post('woprabu')." ".
			$this->input->post('wopkamis')." ".
			$this->input->post('wopjumat')." ".
			$this->input->post('wopsabtu')." ".
			$this->input->post('wopminggu')."pukul ".
			$this->input->post('wop_time_open_hour').":".
			$this->input->post('wop_time_open_mnt')." ".
			$this->input->post('wop_time_open_day')." sampai ".
			$this->input->post('wop_time_close_hour').":".
			$this->input->post('wop_time_close_mnt')." ".
			$this->input->post('wop_time_close_day');
		echo $wopnya;
		$role = $this->input->post('role');
		$hp = $this->input->post('hp');

		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('nama_depan', 'Nama Pemilik Perusahaan', 'required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('nama_petcare', 'Nama Perusahaan', 'required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[6]|max_length[12]|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('repass', 'Repassword', 'required|min_length[6]|matches[password]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[4]|max_length[100]');
		$this->form_validation->set_rules('city', 'Kabupaten/Kota', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('postal_code', 'Kode Pos', 'required|min_length[4]|max_length[7]');
		$this->form_validation->set_rules('wop_time_open_hour', 'Waktu Operasional', 'required');
		$this->form_validation->set_rules('wop_time_open_mnt', 'Waktu Operasional', 'required');
		$this->form_validation->set_rules('wop_time_open_day', 'Waktu Operasional', 'required');
		$this->form_validation->set_rules('wop_time_close_hour', 'Waktu Operasional', 'required');
		$this->form_validation->set_rules('wop_time_close_mnt', 'Waktu Operasional', 'required');
		$this->form_validation->set_rules('wop_time_close_day', 'Waktu Operasional', 'required');
		
		$this->form_validation->set_rules('hp', 'Nomor Telepon/Handphone', 'required|min_length[9]|max_length[15]');
		

		if($this->form_validation->run()==false){
			$this->load->view('menu/register_mitra');
		}else{
			$this->load->model('model_mitra');
			$data_pengguna = array(
				'username' => set_value('username'),
				'password' => md5($password),
				'role' => set_value('role'),
				);
			$this->model_mitra->create('user',$data_pengguna);
			
			$data_partner = array(
				'user_partners' => set_value('username'),
				'owner' => set_value('nama_depan'),
				'partners_name' => set_value('nama_petcare'),	
				'password' => md5($password),
				'email' => set_value('email'),
				'hp' => set_value('hp'),
				'address' => set_value('alamat'),
				'city' => set_value('city'),
				'postal_code' => set_value('postal_code'),
				'wop' => $wopnya,
					
				);
			$this->model_mitra->create('partners',$data_partner);
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">Data Tersimpan</div>');
			redirect('con_home');
		}
				
	/*	function cekUser($username){
           $this -> db -> select('username');
		   $this -> db -> from('data_pengguna');
		   $this -> db -> where('username', $username);
		   $this -> db -> limit(1);
    
   			$query = $this -> db -> get();
            if($query->num_rows == 1){
            	$this->form_validation->set_message('cekUser', 'Username telah digunakan');
				return FALSE;
                
            }else{
                return true;
            }
        }    */

		
	}
	
}