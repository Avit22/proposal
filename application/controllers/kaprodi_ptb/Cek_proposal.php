<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek_proposal extends CI_Controller {

	 public function __construct() {

	 	parent::__construct();
	 	if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
	   	elseif($this->session->userdata('tingkatan') != "kaprodi_ptb") {

	   		redirect('login', 'refresh');
	   	}
	 }

	 function index() {
	   
	   	$this->load->view('kaprodi_ptb/cek_proposal');
	}

	
}
