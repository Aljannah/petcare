<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_registvalid extends CI_Controller {
		
	public function index()
	{
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
		$this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: 5px">', '</div>');

		$name			= $this->input->post('name');
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');
		$repass 		= $this->input->post('repass');
		$email 			= $this->input->post('email');
		$address		= $this->input->post('address');
		$city			= $this->input->post('city');
		$postal_code	= $this->input->post('postal_code');
		$hp				= $this->input->post('hp');
		$role 			= $this->input->post('role');
		
		

		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('name', 'Nama Lengkap', 'required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[6]|max_length[15]|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('repass', 'Repassword', 'required|min_length[6]|matches[password]');
		$this->form_validation->set_rules('address', 'Alamat', 'required|min_length[6]|max_length[100]');
		$this->form_validation->set_rules('city', 'Kota', 'required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('postal_code', 'Kode Pos', 'required|min_length[4]|max_length[7]');
		$this->form_validation->set_rules('hp', 'No. Handphone', 'required|min_length[9]|max_length[15]');
		

		if($this->form_validation->run()==false){
			$this->load->view('menu/register');
		}else{
			$this->load->model('model_member');
			$data_pengguna = array(
				'username'	=> set_value('username'),
				'password'	=> md5($password),
				'role' 		=> set_value('role'),
				);
			$this->model_member->create('user', $data_pengguna);
			$data_member = array(
				'username' 			=> set_value('username'),
				'name' 		=> set_value('name'),
				'password' 			=> md5($password),
				'email' 			=> set_value('email'),
				'address' 			=> set_value('address'),
				'city' 				=> set_value('city'),
				'postal_code' 		=> set_value('postal_code'),
				'hp' 				=> set_value('hp'),
			);
			$this->model_member->create('customer',$data_member);
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