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

		if($query = $this->Input_model->get_all_rab_item_wd2_id_proposal($id_proposal)) {
			$data['item_wd2'] = $query;
		}
		else{
			$data['item_wd2'] = NULL;
		}

		if($query = $this->Input_model->get_total_rab($id_proposal,$id_usernya)) {
			$data['totalrab'] = $query;
		}
		else{
			$data['totalrab'] = NULL;
		}

		if($query = $this->Input_model->get_total_item($id_proposal,$id_usernya)) {
			$data['totalitem'] = $query;
		}
		else{
			$data['totalitem'] = NULL;
		}

		if($query = $this->Input_model->get_total_rab_keu($id_proposal)) {

		
			$data['totalrab_keu'] = $query;
		}
		else{
			$data['totalrab_keu'] = NULL;
		}
		$this->load->view('wd2/input_rab',$data);
	}

	public function tambah_catatan_rab_keu($id_proposal){
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('catatan', 'Catatan', 'required');
	if ($this->form_validation->run() == FALSE) {
		$this->index();
		//redirect('pjk/insert_rab');	
	}	else {
		$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
		$tgl = date("Y-m-d");
			$data = array(
				'id_proposal' => $id_proposal,
				'catatan_wd2' => $this->input->post('catatan'),
				'validasi_wd2'=> "DISETUJUI",
				);
			if($this->Input_model->update($id_proposal,$data));

$config = Array(  
    'protocol' => 'smtp',  
    'smtp_host' => 'ssl://smtp.googlemail.com',  
    'smtp_port' => 465,  
    'smtp_user' => 'proposalft22@gmail.com',   
    'smtp_pass' => 'adminproposal22',   
    'mailtype' => 'html',   
    'charset' => 'iso-8859-1'  
   );  
   $this->load->library('email', $config);  
   $this->email->set_newline("\r\n");  
   $this->email->from('proposalft22@gmail.com', 'ADMIN PROPOSAL');   
   $this->email->to('avitwisnu22@gmail.com');   
   $this->email->subject('Proposal Masuk');   
   $this->email->message('Menginformasikan Bahwa Telah Masuk Proposal Baru Ke Dashboard Anda'.'<br />'.
   						 'Nama Pjk   :'. $this->input->post('nama_pjk').'<br />'.
   						 'Judul :'.$this->input->post('judul').'<br />');  
   if (!$this->email->send()) {  
    show_error($this->email->print_debugger());   
   }else{  
    //echo 'Success to send email';   
   } 

			
			redirect('wd2/rekomendasi/input_rab/'.$id_proposal);	
	}
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

public function add_rab_item($id_proposal){
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
			if($this->Input_model->tambah_rab_item($data));
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
