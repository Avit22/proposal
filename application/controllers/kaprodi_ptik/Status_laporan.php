<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_laporan extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kaprodi_ptik" && $this->session->userdata('tingkatan') != "kaprodi_ptik") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {
		$sessiondata = $this->session->userdata('id_user');
		if($query = $this->Input_model->get_data_laporan_pjk($sessiondata)) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;

		$this->load->view('kaprodi_ptik/status_laporan',$data);
		
	}
}
