<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {
	public function tampilsemuadata()
	{
		/*//select *from t_obat where kadaluarsa<>curdate() and kadaluarsa>curdate()
		//$this->db->where('kode_event','EVT.001,EVT.002,EVT.003')
	
		//$data = $this->db->where('status_konfirm','Terkonfirmasi')
		//				  -> limit(3)
		//				  ->get('event');
		$data=	"SELECT *
				FROM
				event where status_konfirm='Konfirmasi' AND tanggal>=curdate() limit 6";
		return $this->db->query($data);*/
	}
}