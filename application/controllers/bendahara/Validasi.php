<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi extends CI_Controller {

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
		if($query = $this->Input_model->get_laporan()) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;


		$this->load->view('bendahara/validasi_laporan',$data);
		
	}

	public function validasi($id) {
		$this->load->model('Input_model');
		
		if($query = $this->Input_model->get_data_laporan($id)) {
			$data['laporane'] = $query;
		}
		else
			$data['laporane'] = NULL;

		$this->load->view('bendahara/validasi_diterima', $data);
	}	


	public function update_review($id) {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('validasi_proposal', 'Validasi Proposal', 'required');
	$this->form_validation->set_rules('alasan', 'Alasan', 'required');
	$this->form_validation->set_rules('nama_pjk', 'Nama PJK', 'required');
	$this->form_validation->set_rules('judul', 'Judul', 'required');	
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
			$tgl = date("Y-m-d");
			$data = array(
				'laporan_review' => $this->input->post('validasi_proposal'),
				'keterangan_review' => $this->input->post('alasan'),				
				'nama_pjk' => $this->input->post('nama_pjk'),
				'judul' => $this->input->post('judul'),
				'tgl_input_bendahara' => $tgl,
				);

			if($this->Input_model->update_laporan($id,$data));
				redirect('bendahara/validasi');	
		}	
	redirect('bendahara/validasi');	
}

public function insert_panjar($id) {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('total', 'Total Nominal', 'required');
	$this->form_validation->set_rules('noseri', 'Nomor Seri', 'required');
	$this->form_validation->set_rules('nosurat', 'Nomor Surat Jalan', 'required');
	$this->form_validation->set_rules('pencairanke', 'pencairan', 'required');
	$this->form_validation->set_rules('pencairan', 'Pencairan Minimal 70%', 'required');
	$this->form_validation->set_rules('sisa', 'Sisa', 'required');
	$this->form_validation->set_rules('lalu', 'Pencairan Lalu', 'required');
	$this->form_validation->set_rules('sumberdana', 'Sumber Dana', 'required');
	$this->form_validation->set_rules('terbilang', 'Terbilang Rupiah', 'required');
	$this->form_validation->set_rules('tujuanbayar', 'Tujuan Pembayaaran', 'required');
	$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
			$tgl = date("Y-m-d");
			$data = array(
				'id_proposal' => $id,
				'pencairanke' => $this->input->post('pencairanke'),
				'nominal_total' => $this->input->post('total'),
				'noseri' => $this->input->post('noseri'),
				'nosurat' => $this->input->post('nosurat'),
				'nominal_70' => $this->input->post('pencairan'),
				'sisa' => $this->input->post('sisa'),
				'lalu' => $this->input->post('lalu'),				
				'sumberdana' => $this->input->post('sumberdana'),
				'terbilang' => $this->input->post('terbilang'),
				'tujuanbayar' => $this->input->post('tujuanbayar'),
				'keterangan' => $this->input->post('keterangan'),
				'tgl_input'=>$tgl,
				'keterangan_input'=>"Sudah Input",
				);
			if($this->Input_model->insert_panjar($data));
				redirect('bendahara/validasi');	
		}	
	redirect('bendahara/validasi');	
}	

public function insert_sisa_panjar($id) {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('total', 'Total Nominal', 'required');
	$this->form_validation->set_rules('noseri', 'Nomor Seri', 'required');
	$this->form_validation->set_rules('nosurat', 'Nomor Surat Jalan', 'required');
	$this->form_validation->set_rules('pencairanke', 'pencairan', 'required');
	$this->form_validation->set_rules('pencairan', 'Pencairan Minimal 70%', 'required');
	$this->form_validation->set_rules('sisa', 'Sisa', 'required');
	$this->form_validation->set_rules('lalu', 'Pencairan Lalu', 'required');
	$this->form_validation->set_rules('sumberdana', 'Sumber Dana', 'required');
	$this->form_validation->set_rules('terbilang', 'Terbilang Rupiah', 'required');
	$this->form_validation->set_rules('tujuanbayar', 'Tujuan Pembayaaran', 'required');
	$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
			$tgl = date("Y-m-d");
			$data = array(
				'id_proposal' => $id,
				'pencairanke' => $this->input->post('pencairanke'),
				'nominal_total' => $this->input->post('total'),
				'noseri' => $this->input->post('noseri'),
				'nosurat' => $this->input->post('nosurat'),
				'nominal_70' => $this->input->post('pencairan'),
				'sisa' => $this->input->post('sisa'),
				'lalu' => $this->input->post('lalu'),				
				'sumberdana' => $this->input->post('sumberdana'),
				'terbilang' => $this->input->post('terbilang'),
				'tujuanbayar' => $this->input->post('tujuanbayar'),
				'keterangan' => $this->input->post('keterangan'),
				'tgl_input'=>$tgl,
				'keterangan_input'=>"Sudah Input",
				);
			if($this->Input_model->insert_panjar($data));
				redirect('bendahara/validasi');	
		}	
	redirect('bendahara/validasi');	
}	
}
