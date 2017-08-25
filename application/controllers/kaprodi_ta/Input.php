<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kaprodi_ta" && $this->session->userdata('tingkatan') != "kaprodi_ta") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {

		if($query = $this->Input_model->get_wd()) {
			$data['data_wd'] = $query;
		}
		else
			$data['data_wd'] = NULL;

		if($query = $this->Input_model->get_jurusan()) {
			$data['data_jurusan'] = $query;
		}
		else
			$data['data_jurusan'] = NULL;

		if($query = $this->Input_model->get_prodi()) {
			$data['data_prodi'] = $query;
		}
		else
			$data['data_prodi'] = NULL;

		$this->load->view('kaprodi_ta/input_proposal',$data);
		
	}

	function hapus($id) {
		$this->Input_model->hapus($id);
		redirect('terkirim');
	}

	
public function tambah_proses() {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('nama_pjk', 'Nama PJK', 'required');
	$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
	$this->form_validation->set_rules('prodi', 'Prodi', 'required');
	$this->form_validation->set_rules('jenis_proposal', 'Jenis Proposal', 'required');
	$this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('pendahuluan', 'Pendahuluan', 'required');
	$this->form_validation->set_rules('dasar_hukum', 'Dasar Hukum', 'required');
	$this->form_validation->set_rules('rab', 'RAB', 'required');
	$this->form_validation->set_rules('tempat', 'Tempat', 'required');
	$this->form_validation->set_rules('keluaran', 'Keluaran', 'required');
	$this->form_validation->set_rules('tgl_pelaksanaan', 'Tanggal Pelaksanaan', 'required');
	$this->form_validation->set_rules('penutup', 'Penutup', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
			$tgl = date("Y-m-d");
			$data = array(				
				'nama_pjk' => $this->input->post('nama_pjk'),
				'jurusan' => $this->input->post('jurusan'),
				'prodi' => $this->input->post('prodi'),
				'jenis_proposal' => $this->input->post('jenis_proposal'),
				'judul' => $this->input->post('judul'),
				'pendahuluan' => $this->input->post('pendahuluan'),
				'dasar_hukum' => $this->input->post('dasar_hukum'),
				'rab' => $this->input->post('rab'),
				'tempat' => $this->input->post('tempat'),
				'keluaran' => $this->input->post('keluaran'),
				'penutup' => $this->input->post('penutup'),
				'tgl_pelaksanaan' => $this->input->post('tgl_pelaksanaan'),
				'tgl_input' => $tgl,
				'id_user' => $id_user_session,
				);

			if($this->Input_model->tambah($data));
				
		}	
		redirect('kaprodi_ta/terkirim');	
}
	
	public function update_proses($id) {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('nama_pjk', 'Nama PJK', 'required');
	$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
	$this->form_validation->set_rules('prodi', 'Prodi', 'required');
	$this->form_validation->set_rules('jenis_proposal', 'Jenis Proposal', 'required');
	$this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('pendahuluan', 'Pendahuluan', 'required');
	$this->form_validation->set_rules('dasar_hukum', 'Dasar Hukum', 'required');
	$this->form_validation->set_rules('rab', 'RAB', 'required');
	$this->form_validation->set_rules('tempat', 'Tempat', 'required');
	$this->form_validation->set_rules('keluaran', 'Keluaran', 'required');
	//$this->form_validation->set_rules('tgl_pelaksanaan', 'Tanggal Pelaksanaan', 'required');
	$this->form_validation->set_rules('penutup', 'Penutup', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
			$tgl = date("Y-m-d");
			$data = array(				
				'nama_pjk' => $this->input->post('nama_pjk'),
				'jurusan' => $this->input->post('jurusan'),
				'prodi' => $this->input->post('prodi'),
				'jenis_proposal' => $this->input->post('jenis_proposal'),
				'judul' => $this->input->post('judul'),
				'pendahuluan' => $this->input->post('pendahuluan'),
				'dasar_hukum' => $this->input->post('dasar_hukum'),
				'rab' => $this->input->post('rab'),
				'tempat' => $this->input->post('tempat'),
				'keluaran' => $this->input->post('keluaran'),
				'penutup' => $this->input->post('penutup'),
				//'tgl_pelaksanaan' => $this->input->post('tgl_pelaksanaan'),
				'tgl_input' => $tgl,
				);

			if($this->Input_model->update($id,$data));
				redirect('kaprodi_ta/terkirim');	
		}	
	redirect('kaprodi_ta/terkirim');	
}

public function update_review($id) {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('validasi_proposal', 'Validasi Proposal', 'required');
	$this->form_validation->set_rules('alasan', 'Alasan', 'required');
	$this->form_validation->set_rules('nama_pjk', 'Nama PJK', 'required');
	$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
	$this->form_validation->set_rules('prodi', 'Prodi', 'required');
	$this->form_validation->set_rules('jenis_proposal', 'Jenis Proposal', 'required');
	$this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('pendahuluan', 'Pendahuluan', 'required');
	$this->form_validation->set_rules('dasar_hukum', 'Dasar Hukum', 'required');
	$this->form_validation->set_rules('rab', 'RAB', 'required');
	$this->form_validation->set_rules('tempat', 'Tempat', 'required');
	$this->form_validation->set_rules('keluaran', 'Keluaran', 'required');
	$this->form_validation->set_rules('tgl_pelaksanaan', 'Tanggal Pelaksanaan', 'required');
	$this->form_validation->set_rules('penutup', 'Penutup', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
			$tgl = date("Y-m-d");
			$data = array(
				'status_review' => $this->input->post('validasi_proposal'),
				'keterangan_review' => $this->input->post('alasan'),				
				'nama_pjk' => $this->input->post('nama_pjk'),
				'jurusan' => $this->input->post('jurusan'),
				'prodi' => $this->input->post('prodi'),
				'jenis_proposal' => $this->input->post('jenis_proposal'),
				'judul' => $this->input->post('judul'),
				'pendahuluan' => $this->input->post('pendahuluan'),
				'dasar_hukum' => $this->input->post('dasar_hukum'),
				'rab' => $this->input->post('rab'),
				'tempat' => $this->input->post('tempat'),
				'keluaran' => $this->input->post('keluaran'),
				'penutup' => $this->input->post('penutup'),
				'tgl_pelaksanaan' => $this->input->post('tgl_pelaksanaan'),
				'tgl_input' => $tgl,
				);

			if($this->Input_model->update($id,$data));
				redirect('kaprodi_ta/terkirim');	
		}	
	redirect('kaprodi_ta/terkirim');	
}
	

}
