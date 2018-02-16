<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek_proposal extends CI_Controller {

	 public function __construct() {

	 	parent::__construct();
	 	if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
	   	elseif($this->session->userdata('tingkatan') != "kabag_tu") {

	   		redirect('login', 'refresh');
	   	}
	 }

	 function index() {
	   
	   	$this->load->view('kabag_tu/cek_proposal');
	}

	
}
