<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_item extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "admin" && $this->session->userdata('tingkatan') != "admin") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {
		if($query = $this->Input_model->get_data_proposal_disetujui_wd2_validasi()) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;
		$this->load->view('admin/detail_item', $data);
	}
	
	public function detail($id) {
		$data['id_proposal'] = $id;
		if($query = $this->Input_model->get_all_rab_item_wd2_id_proposal($id)) {
			$data['item_wd2'] = $query;
		}
		else{
			$data['rab'] = NULL;
		}
		$this->load->view('admin/detail_item', $data);
	}

}
