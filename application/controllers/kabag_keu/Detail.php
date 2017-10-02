<?php
defined('BASEPATH') OR exit("No direct script allowed");

class Detail extends CI_Controller{

	public function __Construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kabag_keu" && $this->session->userdata('tingkatan') != "kabag_keu") {

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

		$this->load->view('kabag_keu/detail_proposal',$data);
	}
}