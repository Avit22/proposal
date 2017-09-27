<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Revisi extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kabag_akun" && $this->session->userdata('tingkatan') != "kabag_akun") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {

		if($query = $this->Input_model->get_data_proposal_disetujui()) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('kabag_akun/revisi_proposal',$data);
		
	}



	
}
