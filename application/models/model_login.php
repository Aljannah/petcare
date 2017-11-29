<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			return $query;
		}
	public function datauser($user,$data){
		//$tampil = $this->db->get_where('event',$data);
		$this->db->where($user,$data);
		//$this->db->order_by("verified","asc");
		$tampil = $this->db->get('user');

		return $tampil;
	}
	
/*	public function getlogin($u,$p)
	{
		$pwd = md5($p);
		$this->db->where('username',$u);
		$this->db->where('password',$p);
		$query = $this->db->get('pengguna');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$sess = array('username' => $row->username,
								'nama_depan' => $row->nama_depan);
				$this->session->set_userdata($sess);
				redirect('con_home');
			}
		}
		else{
			$this->session->set_flashdata('info','Maaf username atau password salah');
			redirect('login');
		}

	} 

 public function getlogin($u,$p)
		{
			$pwd = md5($p);
			$this->db->where('username',$u);
			$this->db->where('password',$pwd);
			$query = $this->db->get('pengguna');
			if($query->num_rows()>0){
				foreach ($query->result() as $row)
				{
					$sess = array('username' => $row->username,
									'nama_depan' => $row->nama_depan);
					$this->session->set_userdata($sess);
					redirect('con_upload');
				}
			}
			else{
				$this->session->set_flashdata('info','Maaf username atau password salah');
				redirect('con_login');
			}
		}*/

}