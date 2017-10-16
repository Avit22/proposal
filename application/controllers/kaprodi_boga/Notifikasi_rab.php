<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi_rab extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kaprodi_boga" && $this->session->userdata('tingkatan') != "kaprodi_boga") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {
		$sessiondata = $this->session->userdata('id_user');
		
		if($query = $this->Input_model->get_revisi_rab($sessiondata)) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;
		
		$this->load->view('kaprodi_boga/notifikasi_rab',$data);
	}

	
	

}
