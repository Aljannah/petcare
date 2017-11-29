<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_hubungis extends CI_Model {
    
    public function create($data_hubungi){
        $this->db->insert('hubungi',$data_hubungi);
    }

	public function all_hubungis(){ 
            $query = $this->db->get('hubungi');
        return $query->result();  
        }


    public function semua(){ 
        $this->db->get('event','kategori');
        $this->db->where('status_konfirm', 'Konfirmasi');
        $this->db->order_by("tanggal","desc");
        $query = $this->db->get('event');
        return $query->result();      
     }


     public function find($id_hubungi){ 
            $code = $this->db->where('id_hubungi',$id_hubungi)->limit(1)->get('hubungi');
            if ($code->num_rows() > 0 )
                {
                    return $code->row();
                }else {
                    return array();
                }           
        }
        
        public function delete($id_hubungi){
            $this->db->where('id_hubungi',$id_hubungi)->delete('hubungi');
        }
}