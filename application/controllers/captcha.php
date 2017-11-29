<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
  	{
    $this->load->library('recaptcha');
    $this->load->library('form_validation');
    $this->lang->load('recaptcha');
    $this->load->helper('form');

    if ($this->form_validation->run()) 
    {
      $this->load->view('recaptcha_demo',array('recaptcha'=>'Yay! You got it right!'));
    }
    else
    {
      //the desired language code string can be passed to the get_html() method
      //"en" is the default if you don't pass the parameter
      //valid codes can be found here:http://code.google.com/apis/recaptcha/docs/customization.html#i18n
      $this->load->view('recaptcha_demo',array('recaptcha'=>$this->recaptcha->get_html()));
    }
  } 
}

