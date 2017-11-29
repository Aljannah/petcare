<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_daftarevents extends CI_Model {
    
    public function semua(){ 
        $this->db->get('event','kategori');
        $this->db->where('status_konfirm', 'Konfirmasi');
        $this->db->order_by("tanggal","desc");
        $query = $this->db->get('event');
        return $query->result();      
     }

	public function all_events_sport(){ 
        $this->db->where('kategori', 'Sportainment');
        $this->db->where('status_konfirm', 'Konfirmasi');
        $this->db->order_by("tanggal","desc");
        $query = $this->db->get('event');
        return $query->result();      
     }

     public function all_events_compt(){ 
        $this->db->where('kategori', 'Competition');
        $this->db->where('status_konfirm', 'Konfirmasi');
        $this->db->order_by("tanggal","desc");
        $query = $this->db->get('event');
        return $query->result();      
     }

     public function all_events_seminar(){ 
        $this->db->where('kategori', 'Seminar & Conference');
        $this->db->where('status_konfirm', 'Konfirmasi');
        $this->db->order_by("tanggal","desc");
        $query = $this->db->get('event');
        return $query->result();      
     }

     public function all_events_expo(){ 
        $this->db->where('kategori', 'Expo & Bazaar');
        $this->db->where('status_konfirm', 'Konfirmasi');
        $this->db->order_by("tanggal","desc");
        $query = $this->db->get('event');
        return $query->result();      
     }

     public function all_events_workshop(){ 
        $this->db->where('kategori', 'Workshop & Training');
        $this->db->where('status_konfirm', 'Konfirmasi');
        $this->db->order_by("tanggal","desc");
        $query = $this->db->get('event');
        return $query->result();      
     }

     public function all_events_paper(){ 
        $this->db->where('kategori', 'Paper/LKTI');
        $this->db->where('status_konfirm', 'Konfirmasi');
        $this->db->order_by("tanggal","desc");
        $query = $this->db->get('event');
        return $query->result();      
     }

     public function all_events_other(){ 
        $this->db->where('kategori', 'Others');
        $this->db->where('status_konfirm', 'Konfirmasi');
        $this->db->order_by("tanggal","desc");
        $query = $this->db->get('event');
        return $query->result();      
     }

     public function all_events_social(){ 
        $this->db->where('kategori', 'Social & Politics');
        $this->db->where('status_konfirm', 'Konfirmasi');
        $this->db->order_by("tanggal","desc");
        $query = $this->db->get('event');
        return $query->result();      
     }
}
