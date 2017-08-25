<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_terkirim extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kaprodi_pto" && $this->session->userdata('tingkatan') != "kaprodi_pto") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {

		if($query = $this->Input_model->get_laporan()) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;
		$this->load->view('kaprodi_pto/lihat_laporan', $data);
	}

	
	

	

}
