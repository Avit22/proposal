<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 public function __construct() {

	 	parent::__construct();
	 	if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
	   	elseif($this->session->userdata('tingkatan') != "wd3" && $this->session->userdata('tingkatan') != "wd3") {

	   		redirect('login', 'refresh');
	   	}
	 }

	 function index() {
	   
	   	$this->load->view('wd3/home');
	}
}
