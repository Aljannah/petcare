<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_event extends CI_Controller {

	public function index()
	{	
		/*$this->load->model('model_event');
		$isi['dt6']= $this->model_barang->categoridress();
		$isi['data']= $this->model_barang->newarrival();*/
		$key = $this->uri->segment(2);
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
}