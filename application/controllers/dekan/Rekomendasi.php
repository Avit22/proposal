<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekomendasi extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "dekan" && $this->session->userdata('tingkatan') != "dekan") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {


		if($query = $this->Input_model->get_data()) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;
		$this->load->view('dekan/lihat_rekomendasi',$data);
		
	}



}
