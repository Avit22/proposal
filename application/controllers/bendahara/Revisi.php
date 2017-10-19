<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Revisi extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "bendahara" && $this->session->userdata('tingkatan') != "bendahara") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {

		if($query = $this->Input_model->get_revisi_laporan()) {
			$data['revisi_laporane'] = $query;
		}
		else
			$data['revisi_laporane'] = NULL;


		$this->load->view('bendahara/revisi_laporan',$data);
		
	}

	
	
}
