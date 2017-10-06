<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekomendasi extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "wd2" && $this->session->userdata('tingkatan') != "wd2") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {

		if($query = $this->Input_model->get_data_proposal_disetujui_keu()) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('wd2/input_rekomendasi',$data);
		
	}	

	public function input_rab($id_proposal){ 
		if($query = $this->Input_model->get_data_by_idproposal($id_proposal)) {
			$data['proposale'] = $query;
		}
		else{
			$data['proposale'] = NULL;
		}

		$data = array("id_proposal"=>$id_proposal);
		$id_usernya = $this->session->userdata('id_user');
		if($query = $this->Input_model->get_all_rab_id_proposal($id_proposal)) {
			$data['rab'] = $query;
		}
		else{
			$data['rab'] = NULL;
		}
		if($query = $this->Input_model->get_all_rab_keu_id_proposal($id_proposal)) {
			$data['rab_keu'] = $query;
		}
		else{
			$data['rab_keu'] = NULL;
		}
		if($query = $this->Input_model->get_total_rab($id_proposal,$id_usernya)) {
			$data['totalrab'] = $query;
		}
		else{
			$data['totalrab'] = NULL;
		}

<<<<<<< HEAD
=======
		
>>>>>>> ea62222ede9bc9043e038ddbcbe1e77bd2d258ca
		if($query = $this->Input_model->get_total_rab_keu($id_proposal,$id_usernya)) {
			$data['totalrab_keu'] = $query;
		}
		else{
			$data['totalrab_keu'] = NULL;
		}
		$this->load->view('wd2/input_rab',$data);
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
			redirect('wd2/rekomendasi/input_rab/'.$id_proposal);	
	}
}

public function add_rab_keu($id_proposal){
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
			if($this->Input_model->tambah_rab_keu($data));
			redirect('wd2/rekomendasi/input_rab/'.$id_proposal);	
	}
}

	public function tambah_proses($id_proposal){
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('nominal_rab', 'Nama PJK', 'required');	
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
			$tgl = date("Y-m-d");
			$data = array(				
				'rab' => $this->input->post('nominal_rab'),
			);
			$this->Input_model->update($id_proposal,$data);
			//redirect('admin/data_kirim');	
		}	
	redirect('wd2/rekomendasi');
	}

}
