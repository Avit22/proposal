<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Insert_rab extends CI_Controller{

	function __Construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kaprodi_ptik" && $this->session->userdata('tingkatan') != "kaprodi_ptik"){
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
		$this->load->view('kaprodi_ptik/insert_rab',$data);
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
		$this->load->view('kaprodi_ptik/update_rab',$data);
	}

	function update1($id_proposal,$id_rab){
		$this->load->model('Input_model');
		$data = array("id_proposal"=>$id_proposal);
		if($query = $this->Input_model->get_all_rab_id_rab($id_rab)) {
			$data['rab'] = $query;
		}
		else{
			$data['rab'] = NULL;
		}
		$this->load->view('kaprodi_ptik/update_rab1',$data);
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
				redirect('kaprodi_ptik/insert_rab/index/'.$id_proposal);	
	}
}

public function add_rab1($id_proposal){
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
				redirect('kaprodi_ptik/detail_rab/detail/'.$id_proposal);	
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
				redirect('kaprodi_ptik/insert_rab/index/'.$id_proposal);	
	}
}

public function update_rab1($id_rab,$id_proposal){
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
				redirect('kaprodi_ptik/detail_rab/detail/'.$id_proposal);	
	}
}

public function delete_rab($id_proposal,$id_rab){
	if($this->Input_model->delete_rab($id_rab));
	redirect('kaprodi_ptik/insert_rab/index/'.$id_proposal);	
	}

public function delete_rab1($id_proposal,$id_rab){
	if($this->Input_model->delete_rab($id_rab));
	redirect('kaprodi_ptik/detail_rab/detail/'.$id_proposal);	
	}	

	public function tambah_catatan_rab($id_proposal) {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	
	$this->form_validation->set_rules('catatan', 'catatan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
			$tgl = date("Y-m-d");
			$data = array(				
				'catatan_rab' => $this->input->post('catatan'),
				//'id_proposal' => $id_proposal,
				//'tgl_input' => $tgl,
				//'id_user' => $id_user_session,
				);

			if($this->Input_model->tambah_catatan_rab($id_proposal,$data));
				
		}	
		redirect('kaprodi_ptik/notifikasi_rab');	
}
}
