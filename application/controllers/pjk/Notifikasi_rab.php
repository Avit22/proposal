<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi_rab extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "pjk" && $this->session->userdata('tingkatan') != "pjk") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {
		$sessiondata = $this->session->userdata('id_user');
		if($query = $this->Input_model->get_data($sessiondata)) {
			$data['revisine'] = $query;
		}
		else
			$data['revisine'] = NULL;
		
		$this->load->view('pjk/notifikasi_rab',$data);
	}

	
	

}
