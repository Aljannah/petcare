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
     public function paket_mitra(){ 
        $this->load->library('session');
        $session_id = $this->session->userdata('username');
        $this->db->where('user_partners', $session_id);//buat nongolin usernya
        $query = $this->db->get('petgrooming');
        return $query->result();      

     }

     public function lihat_pesanan(){ 
        $this->load->library('session');
        $session_id = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('orders a');
        $this->db->join('order_det b','b.no_orderdetail=a.no_orderdetail', 'left');
        $this->db->join('customer c','c.username=a.user_customer', 'left');
        $this->db->join('petgrooming d','d.id_petgrooming=b.id_petgrooming', 'left');
        $this->db->where('b.user_partners', $session_id);//buat nongolin usernya
        $this->db->order_by("a.order_date", "asc");
        $query = $this->db->get();
        return $query->result();      

     }
     public function edit($kode_event,$data_event){
            $this->db->where('id_petgrooming',$kode_event)->update('petgrooming',$data_event);
        }

     public function edit_status($no_orders,$data_pesanan){
            $this->db->where('no_orders',$no_orders)->update('orders',$data_pesanan);
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
        
        public function finding($no_orders){ 
            $code = $this->db->where('no_orders',$no_orders)->limit(1)->get('orders');
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
