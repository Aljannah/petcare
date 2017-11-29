<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mitra extends CI_Model {
	public function create($data_partner,$data_pengguna){
		$this->db->insert($data_partner,$data_pengguna);
	}
	/*public function create($data_partner){
		$this->db->insert('partners',$data_partner);
	}

/*	public function find($kode){
		$hasil = $this->db->where('kode',$kode)->limit(1)->get(t_master);
		if($hasil->num_rows()>0){
			return $hasil->row();
		}else{
			return aray();
		}
	}
	
	public function update($kode,$data_dvd){
		$this->db->where('kode',$kode)->update('t_master',$data_dvd);
	}
	public function delete($kode){
		$this->db->where('kode',$kode)->delete('t_master');
	}
	*/
}
