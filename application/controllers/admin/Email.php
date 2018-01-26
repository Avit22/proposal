<?php
defined('BASEPATH') or exit ('No direct script allowed');

class Email extends CI_Controller{

	public function __Construct(){
		parent :: __construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
	   	elseif($this->session->userdata('tingkatan') != "admin") {
	   		redirect('login', 'refresh');
	   	}
	}

	function index(){
	$config = Array(  
    'protocol' => 'smtp',  
    'smtp_host' => 'ssl://smtp.googlemail.com',  
    'smtp_port' => 465,  
    'smtp_user' => 'serendipity.10they@gmail.com',   
    'smtp_pass' => 'MyLifeJourney2016',   
    'mailtype' => 'html',   
    'charset' => 'iso-8859-1'  
   );  
   $this->load->library('email', $config);  
   $this->email->set_newline("\r\n");  
   $this->email->from('serendipity.10they@gmail.com', 'ADMIN PROPOSAL');   
   $this->email->to('atanasiustendy@hotmail.com');   
   $this->email->subject('Percobaan email');   
   $this->email->message('Ini adalah email percobaan untuk Tutorial CodeIgniter: Mengirim Email via Gmail SMTP menggunakan Email Library CodeIgniter Tendy Developer');  
   if (!$this->email->send()) {  
    show_error($this->email->print_debugger());   
   }else{  
    echo 'Success to send email';   

   }  
  }  

  function dir(){
    $this->load->helper('url');
    $currentURL = current_url();
    print_r($currentURL);
  }
	}