<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekomendasi_rab extends CI_Controller {

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

		if($query = $this->Input_model->get_data_proposal_disetujui_akun()) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('admin/input_rekomendasi_rab',$data);
		
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
		if($query = $this->Input_model->get_total_rab($id_proposal)) {
			$data['totalrab'] = $query;
		}
		else{
			$data['totalrab'] = NULL;
		}

		if($query = $this->Input_model->get_all_rab_id_proposal_keu($id_proposal,$id_usernya)) {
			$data['rab_keu'] = $query;
		}
		else{
			$data['rab_keu'] = NULL;
		}
		if($query = $this->Input_model->get_total_rab_keu($id_proposal,$id_usernya)) {
			$data['totalrab_keu'] = $query;
		}
		else{
			$data['totalrab_keu'] = NULL;
		}
		$this->load->view('admin/input_rab',$data);
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
			redirect('kabag_keu/rekomendasi/input_rab/'.$id_proposal);	
	}
}

public function tambah_catatan_rab_keu($id_proposal){

		$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
		$tgl = date("Y-m-d");
		$catatan_keu = $this->input->post('catatan');
		//echo 'aaaaaaaaaaaaaaaaaaaaaaa'.$catatan_keu;		
		if ($catatan_keu==""){
			$catatan_keu = "-";
		}
			$data = array(
				'id_proposal' => $id_proposal,
				'catatan_keu' => $catatan_keu,
				'revisi_rab_keu' => $this->input->post('revisi'),
				);
			if($this->Input_model->update($id_proposal,$data));
			redirect('kabag_keu/rekomendasi/input_rab/'.$id_proposal);	

}

public function add_rab_keu($id_proposal){
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('nb', 'Nama Barang', 'required');
	$this->form_validation->set_rules('harga', 'Harga Barang', 'required');
	$this->form_validation->set_rules('jumlah', 'Jumlah Barang', 'required');
	$this->form_validation->set_rules('total', 'Total Barang', 'required');
	if ($this->form_validation->run() == FALSE) {
		//$this->index();
		//redirect('pjk/insert_rab');	
		redirect('admin/rekomendasi_rab/input_rab/'.$id_proposal);	
	}	else {		
		$tgl = date("Y-m-d");
			$data = array(
				'id_proposal' => $id_proposal,
				'id_user' => 6,	//diset id user keuangan pasti 6			
				'barang' => $this->input->post('nb'),
				'harga' => $this->input->post('harga'),
				'jumlah' => $this->input->post('jumlah'),
				'total' => $this->input->post('total'),
				);
			if($this->Input_model->tambah_rab_keu($data));
			redirect('admin/rekomendasi_rab/input_rab/'.$id_proposal);	
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
	redirect('kabag_keu/rekomendasi');
	}

}
