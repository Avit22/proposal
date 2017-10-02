<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_terkirim extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kaprodi_kecantikan" && $this->session->userdata('tingkatan') != "kaprodi_kecantikan") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {

		$sessiondata = $this->session->userdata('id_user');
		if($query = $this->Input_model->get_laporan_by_idproposal($sessiondata)) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;
		$this->load->view('kaprodi_kecantikan/lihat_laporan', $data);
	}

	public function detail ($id){

		if($query = $this->Input_model->get_data_laporan($id)) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;

		$this->load->view('kaprodi_kecantikan/detail_laporan', $data);
	}
	

	

}
