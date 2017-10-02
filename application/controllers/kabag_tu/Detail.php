<?php
defined('BASEPATH') OR exit("No direct script allowed");

class Detail extends CI_Controller{

	public function __Construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kabag_tu" && $this->session->userdata('tingkatan') != "kabag_tu") {

   		redirect('login', 'refresh');
	   	}
	   	$this->load->model('Input_model');
	}

	public function index($id_proposal){
		if($query = $this->Input_model->get_data_by_idproposal($id_proposal)) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('kabag_tu/detail_proposal',$data);
	}
}