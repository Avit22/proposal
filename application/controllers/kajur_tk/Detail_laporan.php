<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_laporan extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kajur_tk" && $this->session->userdata('tingkatan') != "kajur_tk") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {
		if($query = $this->Input_model->get_data_by_idlaporan()) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;
		$this->load->view('kajur_tk/detail_laporan', $data);
	}
	public function detail($id) {		
		if($query = $this->Input_model->get_data_by_idlaporan($id)) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;

		$this->load->view('kajur_tk/detail_laporan', $data);
	}

}
