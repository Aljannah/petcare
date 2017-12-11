<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_allpenggunas extends CI_Model {
    
	public function all_penggunas(){ 
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('partners', 'user.username = partners.user_partners');
        $this->db->where('role', '3');
        $query = $this->db->get('');
        return $query->result();      
     }
     public function lihat_profile(){ 
        $this->load->library('session');
        $session_id = $this->session->userdata('username');
        $this->db->where('user_partners', $session_id);//buat nongolin usernya
        $query = $this->db->get('partners');
        return $query->result();      

     }

     public function lihat_profile_customer(){ 
        $this->load->library('session');
        $session_id = $this->session->userdata('username');
        $this->db->where('username', $session_id);//buat nongolin usernya
        $query = $this->db->get('customer');
        return $query->result();      

     }
     public function find($user_partners){ 
            $this->load->library('session');
            $user_partners = $this->session->userdata('username');
            $code = $this->db->where('username',$user_partners)->limit(1)->get('user');
            if ($code->num_rows() > 0 )
                {
                    return $code->row();
                }else {
                    return array();
                }           
        }

     public function find_user($user_partners){ 
            $this->load->library('session');
            $user_partners = $this->session->userdata('username');
            $code = $this->db->where('user_partners',$user_partners)->limit(1)->get('partners');
            if ($code->num_rows() > 0 )
                {
                    return $code->row();
                }else {
                    return array();
                }           
        }

     public function find_customer($user_partners){ 
            $this->load->library('session');
            $user_partners = $this->session->userdata('username');
            $code = $this->db->where('username',$user_partners)->limit(1)->get('customer');
            if ($code->num_rows() > 0 )
                {
                    return $code->row();
                }else {
                    return array();
                }           
        }
        public function edit_biodata($user_partners,$data_user){
            
            $this->db->where('user_partners', $user_partners)->update('partners',$data_user);
        }

        public function edit_biodata_customer($username,$data_dicustomer){
            
            $this->db->where('username', $username)->update('customer',$data_dicustomer);
        }

        public function edit_password($user_partners,$data_diuser){
            
            $this->db->where('username', $user_partners)->update('user',$data_diuser);
        }

        public function edit_password_customer($username,$data_dicustomer){
            
            $this->db->where('username', $username)->update('user',$data_dicustomer);
        }
        public function delete($id_pengguna){
            $this->db->where('user_partners',$id_pengguna)->delete('user');
        }
}