<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_allevents extends CI_Model {
    
	public function all_events_belum(){ 
        $this->db->where('status', 'Belum Dikonfirmasi');
        $query = $this->db->get('petgrooming');
        return $query->result();      
     }

     public function all_events_konfirm(){ 
        $this->db->where('status', 'Konfirmasi');
        $query = $this->db->get('petgrooming');
        return $query->result();      
     }

     public function edit($kode_event,$data_event){
            $this->db->where('id_petgrooming',$kode_event)->update('petgrooming',$data_event);
        }

        public function find($kode_event){ 
            $code = $this->db->where('id_petgrooming',$kode_event)->limit(1)->get('petgrooming');
            if ($code->num_rows() > 0 )
                {
                    return $code->row();
                }else {
                    return array();
                }           
        }
        
        public function delete($kode_event){
            $this->db->where('id_petgrooming',$kode_event)->delete('petgrooming');
        }
}
