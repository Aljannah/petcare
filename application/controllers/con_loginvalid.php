<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_loginvalid extends CI_Controller {

    public function index($error = NULL) {
       /* $data = array(
            'title' => 'Login Page',
            'action' => site_url('auth/login'),
            'error' => $error
        ); */
        $this->load->view('menu/login');
    }
 
    public function login() {
        $this->load->model('model_login');
        $login = $this->model_login->login($this->input->post('username'), md5($this->input->post('password')));
 
        if ($login == 1) {
//          ambil detail data
            $row = $this->model_login->data_login($this->input->post('username'), md5($this->input->post('password')));
 
//          daftarkan session
            $data = array(
                'logged' => TRUE,
                'username' => $row->username
            );
            $this->session->set_userdata($data);
 
//            redirect ke halaman sukses
            redirect(site_url('con_home'));
        } else {
//            tampilkan pesan error
            $error = 'username / password salah';
            $this->index($error);
        }
    }
 
    function logout() {
//        destroy session
        $this->session->sess_destroy();
        
//        redirect ke halaman login
        redirect(site_url('Con_loginvalid'));
    }
 
}