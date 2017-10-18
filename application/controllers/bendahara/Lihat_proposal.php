<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lihat_proposal extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "bendahara") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {
		$sessiondata = $this->session->userdata('id_user');
		if($query = $this->Input_model->get_data_proposal_disetujui_dekan($sessiondata)) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;
		$this->load->view('bendahara/lihat_proposal', $data);
	}
}
