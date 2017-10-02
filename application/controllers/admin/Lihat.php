<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lihat extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "admin" && $this->session->userdata('tingkatan') != "admin") {

   		redirect('login', 'refresh');
	   	}
		//$this->load->model('input_model');
	}

	
	public function index() {

		$this->load->view('admin/proposal_masuk');
		
	}

	
	public function wd()
	{

		if($query = $this->input_model->get_wd()) {
			$data['data_wd'] = $query;
		}
		else
			$data['data_wd'] = NULL;

		
		$this->load->view('pjk/input_proposal',$data);
	} 

	

}
