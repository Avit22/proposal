<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Barcode extends CI_Controller{

 	public function __Construct(){
 		parent::__Construct();
 		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "admin" && $this->session->userdata('tingkatan') != "admin") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
 	}

 	function index(){
 	//$this->load->library('zend');
 	$this->load->library('zend','Zend/Barcode/Barcode');
    $this->zend->load('Zend/Barcode');
    Zend_Barcode::render('code39', 'image', array('text' => '125000'), array());
 	}
 }