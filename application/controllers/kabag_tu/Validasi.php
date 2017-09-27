<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kabag_tu" && $this->session->userdata('tingkatan') != "kabag_tu") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {
<<<<<<< HEAD

		if($query = $this->Input_model->get_data_proposal_disetujui()) {
=======
		if($query = $this->Input_model->get_data()) {
>>>>>>> 6bf281f07eaede1079bbc843f79ac251b94ad412
			$data['proposale'] = $query;
		}
		else{
			$data['proposale'] = NULL;
		}
		$this->load->view('kabag_tu/validasi_proposal',$data);		
	}
	public function validasi($id) {
		$this->load->model('Input_model');
		if($query = $this->Input_model->get_wd()) {
			$data['data_wd'] = $query;
		}
		else{
			$data['data_wd'] = NULL;
		}
		if($query = $this->Input_model->get_data_by_idproposal($id)) {
			$data['proposale'] = $query;
		}
		else{
			$data['proposale'] = NULL;
		}

		$this->load->view('kabag_tu/validasi_diterima', $data);
	}	
}
