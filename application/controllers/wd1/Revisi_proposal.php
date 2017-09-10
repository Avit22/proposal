<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Revisi_proposal extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "wd1" && $this->session->userdata('tingkatan') != "wd1") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {
		if($query = $this->Input_model->get_data_by_idproposal()) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;
		$this->load->view('wd1/revisinya', $data);
	}
	public function detail($id) {		
		if($query = $this->Input_model->get_data_by_idproposal($id)) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('wd1/revisinya', $data);
	}

}
