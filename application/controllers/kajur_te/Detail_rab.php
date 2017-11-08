<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_rab extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kajur_te" && $this->session->userdata('tingkatan') != "kajur_te") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {
		if($query = $this->Input_model->get_revisi_rab()) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;
		$this->load->view('kajur_te/detail_rab', $data);
	}
	
	public function detail($id) {		
		
		$data['id_proposal'] = $id;
		if($query = $this->Input_model->get_all_rab_id_proposal($id)) {
			$data['rab'] = $query;
		}
		else{
			$data['rab'] = NULL;
		}

		if($query = $this->Input_model->get_all_rab_keu_id_proposal($id)) {
			$data['rab_keu'] = $query;
		}
		else{
			$data['rab_keu'] = NULL;
		}
		if($query = $this->Input_model->get_total_rab($id)) {
			$data['totalrab'] = $query;
		}
		else{
			$data['totalrab'] = NULL;
		}
		if($query = $this->Input_model->get_total_rab_keu($id)) {
			$data['totalrab_keu'] = $query;
		}
		else{
			$data['totalrab_keu'] = NULL;
		}
		$this->load->view('kajur_te/detail_rab', $data);
	}

}
