<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kaprodi_te" && $this->session->userdata('tingkatan') != "kaprodi_te") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {
		$sessiondata = $this->session->userdata('id_user');
		if($query = $this->Input_model->get_revisi_by_iduser($sessiondata)) {
			$data['revisine'] = $query;
		}
		else
			$data['revisine'] = NULL;
		
		$this->load->view('kaprodi_te/notifikasi',$data);
	}

	public function edit_proposal() {

		if($query = $this->Input_model->get_data()) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('kaprodi_te/edit_proposal', $data);

		
	}
	public function edit($id) {
		$this->load->model('Input_model');
		if($query = $this->Input_model->get_wd()) {
			$data['data_wd'] = $query;
		}
		else{
			$data['data_wd'] = NULL;
		}

		if($query = $this->Input_model->get_jurusan()) {
			$data['data_jurusan'] = $query;
		}
		else{
			$data['data_jurusan'] = NULL;
		}

		if($query = $this->Input_model->get_prodi()) {
			$data['data_prodi'] = $query;
		}
		else{
			$data['data_prodi'] = NULL;
		}


		if($query = $this->Input_model->get_data_by_idproposal($id)) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('kaprodi_te/edit_proposal', $data);
	}	
	

	

}
