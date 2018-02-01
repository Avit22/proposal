<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_proposal extends CI_Controller {

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
		if($query = $this->Input_model->get_data_by_idproposal2()) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;
		$this->load->view('bendahara/detail_proposal', $data);
	}
	
	public function detail($id) {		
		if($query = $this->Input_model->get_data_by_idproposal2($id)) {
			$data['proposale'] = $query;
		}
		else{
			$data['proposale'] = NULL;
		
		}

		if($query = $this->Input_model->get_all_rab_id_proposal($id)) {
			$data['rab'] = $query;
		}
		if($query = $this->Input_model->get_total_rab($id)) {
			$data['totalrab'] = $query;
		}
		else{
			$data['rab'] = NULL;
		}

		$this->load->view('bendahara/detail_proposal', $data);
	}

	public function input_panjar($id) {		
		if($query = $this->Input_model->get_data_by_idproposal($id)) {
			$data['proposale'] = $query;
		}
		else{
			$data['proposale'] = NULL;
		
		}

		if($query = $this->Input_model->get_all_rab_id_proposal($id)) {
			$data['rab'] = $query;
		}
		else{
			$data['rab'] = NULL;
		}

		$this->load->view('bendahara/input_panjar', $data);
	}

	public function input_sisa_panjar($id) {		
		if($query = $this->Input_model->get_data_by_idproposal2($id)) {
			$data['proposale'] = $query;
		}
		else{
			$data['proposale'] = NULL;
		
		}

		if($query = $this->Input_model->get_all_rab_id_proposal($id)) {
			$data['rab'] = $query;
		}
		else{
			$data['rab'] = NULL;
		}

		$this->load->view('bendahara/input_sisa_panjar', $data);
	}

}
