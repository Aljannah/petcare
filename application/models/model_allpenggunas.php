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
     public function find($user_partners){ 
            
            $code = $this->db->where('username',$id_pengguna)->limit(1)->get('user');
            if ($code->num_rows() > 0 )
                {
                    return $code->row();
                }else {
                    return array();
                }           
        }
        
        public function delete($id_pengguna){
            $this->db->where('username',$id_pengguna)->delete('user');
        }
}