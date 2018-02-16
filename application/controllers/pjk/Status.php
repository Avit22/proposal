<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

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
		if($query = $this->Input_model->get_data_pjk($sessiondata)) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('pjk/status_proposal',$data);
		
	}

	public function history($id_proposal) {
		if($query = $this->Input_model->get_data_validasi($id_proposal)) {
			$data['proposale'] = $query;
		}
		else{
			$data['proposale'] = NULL;
		}		

		$this->load->view('pjk/history_proposal',$data);
		
	}
	

}
