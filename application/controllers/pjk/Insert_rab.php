<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Insert_rab extends CI_Controller{

	function __Construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "pjk" && $this->session->userdata('tingkatan') != "pjk"){
   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	function index($id_proposal){
		$this->load->model('Input_model');
		$data = array("id_proposal"=>$id_proposal);
		if($query = $this->Input_model->get_all_rab_id_proposal($id_proposal)) {
			$data['rab'] = $query;
		}
		else{
			$data['rab'] = NULL;
		}
		$this->load->view('pjk/insert_rab',$data);
	}

	function update($id_proposal,$id_rab){
		$this->load->model('Input_model');
		$data = array("id_proposal"=>$id_proposal);
		if($query = $this->Input_model->get_all_rab_id_rab($id_rab)) {
			$data['rab'] = $query;
		}
		else{
			$data['rab'] = NULL;
		}
		$this->load->view('pjk/update_rab',$data);
	}
	
	public function add_rab($id_proposal){
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('nb', 'Nama Barang', 'required');
	$this->form_validation->set_rules('harga', 'Harga Barang', 'required');
	$this->form_validation->set_rules('jumlah', 'Jumlah Barang', 'required');
	$this->form_validation->set_rules('total', 'Total Barang', 'required');
	if ($this->form_validation->run() == FALSE) {
		$this->index();
		//redirect('pjk/insert_rab');	
	}	else {
		$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
		$tgl = date("Y-m-d");
			$data = array(
				'id_proposal' => $id_proposal,
				'id_user' => $id_user_session,				
				'barang' => $this->input->post('nb'),
				'harga' => $this->input->post('harga'),
				'jumlah' => $this->input->post('jumlah'),
				'total' => $this->input->post('total'),
				);
			if($this->Input_model->tambah_rab($data));
				redirect('pjk/insert_rab/index/'.$id_proposal);	
	}
}

public function update_rab($id_rab,$id_proposal){
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('nb', 'Nama Barang', 'required');
	$this->form_validation->set_rules('harga', 'Harga Barang', 'required');
	$this->form_validation->set_rules('jumlah', 'Jumlah Barang', 'required');
	$this->form_validation->set_rules('total', 'Total Barang', 'required');
	if ($this->form_validation->run() == FALSE) {
		//$this->index();
		//redirect('pjk/insert_rab');	
	}	else {
		$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
		$tgl = date("Y-m-d");
			$data = array(
				'id_proposal' => $id_proposal,
				'id_user' => $id_user_session,				
				'barang' => $this->input->post('nb'),
				'harga' => $this->input->post('harga'),
				'jumlah' => $this->input->post('jumlah'),
				'total' => $this->input->post('total'),
				);
			if($this->Input_model->update_rab($id_rab,$data));
				redirect('pjk/insert_rab/index/'.$id_proposal);	
	}
}

public function delete_rab($id_proposal,$id_rab){
	if($this->Input_model->deleting_rab($id_rab));
	redirect('pjk/insert_rab/index/'.$id_proposal);	
}
}
