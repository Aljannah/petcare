<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');
		$data= $this->db->query('select * from t_user');
		foreach ($data->result_array() as $d) {
			echo "Nama :" . $d['nama']."<br/>";
			# code...
		}
	}
}
