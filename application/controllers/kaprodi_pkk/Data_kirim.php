<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kirim extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kaprodi_pkk" && $this->session->userdata('tingkatan') != "kaprodi_pkk") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	public function index() {
		
		if($query = $this->Input_model->get_proposal($this->session->userdata('id_user'))) {

			$data['proposal'] = $query;
		}
		else
			$data['proposal'] = NULL;

		$this->load->view('kaprodi_pkk/lihat_proposal',$data);
	}
}
