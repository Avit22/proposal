<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_terkirim extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "bendahara" && $this->session->userdata('tingkatan') != "bendahara") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {

		$sessiondata = $this->session->userdata('id_user');
		if($query = $this->Input_model->get_laporan()) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;
		$this->load->view('bendahara/lihat_laporan', $data);
	}

	
	public function detail ($id){

		if($query = $this->Input_model->get_data_laporan($id)) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;

		$this->load->view('bendahara/detail_laporan', $data);
	}
	

	public function revisi($id) {		
		if($query = $this->Input_model->get_data_laporan($id)) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;

		$this->load->view('bendahara/revisinya', $data);
	}

	public function tambah_revisi() {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('id_pjk', 'Id PJK', 'required');
	$this->form_validation->set_rules('id_laporan', 'Id laporan', 'required');
	$this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('nama_pjk', 'Nama PJK', 'required');
	$this->form_validation->set_rules('revisi1', 'Revisi', 'required');
	
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
			$tgl = date("Y-m-d");
			$data = array(				
				'id_pjk' => $this->input->post('id_pjk'),
				'id_laporan' => $this->input->post('id_laporan'),
				'judul' => $this->input->post('judul'),
				'nama_pjk' => $this->input->post('nama_pjk'),
				'catatan_revisi' => $this->input->post('revisi1'),
				'tgl_revisi' => $tgl,
				'id_user' => $id_user_session,
				);

			if($this->Input_model->tambah_revisi_laporan($data));
			
				
		}	
		redirect('bendahara/lihat');	
}
}
