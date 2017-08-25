<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisuda extends CI_Controller {


	public function __construct() {

		parent::__construct();
		$this->load->library('fpdf');
		$this->load->model('Wisuda_model');
	}

	public function index()	{

		if($query = $this->Wisuda_model->get_nopen()) {

			$data['data_nopen'] = $query;
		}
		else
			$data['data_nopen'] = NULL;

		if($query = $this->Wisuda_model->get_jurusan()) {

			$data['data_jurusan'] = $query;
		}
		else
			$data['data_jurusan'] = NULL;

		if($query = $this->Wisuda_model->get_prodi()) {

			$data['data_prodi'] = $query;
		}
		else
			$data['data_prodi'] = NULL;

		if($query = $this->Wisuda_model->get_setting()) {

			$data['data_setting'] = $query;
		}
		else
			$data['data_setting'] = NULL;

		foreach($data['data_setting'] as $dt) {
			$status = $dt->status;
		}

		if($status == 1) {

			$this->load->view('wisuda',$data);
		}
		elseif($status == 0 )  {

			$this->load->view('wisuda_tidak_aktif',$data);
		}

	}

	public function tambah() {

		$this->index();	

	}

	public function tambah_proses() {

		$this->load->library('form_validation');
		$this->form_validation->set_message('required', '%s Harus Diisi.');
		$this->form_validation->set_message('is_unique', '%s sudah ada. Silahkan input lagi dengan NIM yang berbeda.');
		
		$this->form_validation->set_rules('periode', 'Periode', 'required');
		$this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');
		$this->form_validation->set_rules('nim', 'NIM Mahasiswa', 'required|is_unique[wisuda.nim]');
		$this->form_validation->set_rules('id_jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('id_prodi', 'Prodi', 'required');
		$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('nope', 'No. HP', 'required');
		$this->form_validation->set_rules('nama_ortu', 'Nama_ortu', 'required');
		$this->form_validation->set_rules('ipk', 'IPK', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->tambah();
		}
		else {
			$tgl = date("Y-m-d");
			$data = array(
				'no_pendaftaran' => $this->input->post('no_pendaftaran'),
				'periode' => $this->input->post('periode'),
				'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
				'nim' => $this->input->post('nim'),
				'id_jurusan' => $this->input->post('id_jurusan'),
				'id_prodi' => $this->input->post('id_prodi'),
				'kelamin' => $this->input->post('kelamin'),
				'nope' => $this->input->post('nope'),
				'nama_ortu' => $this->input->post('nama_ortu'),
				'ipk' => $this->input->post('ipk'),
				'tanggal_input' => $tgl,
				'validasi' => 'N'
				);
			
			$last_id = $this->Wisuda_model->tambah($data);
			echo "<script>alert('Data Anda sudah Tersimpan ! Silahkan menunggu Untuk Di Validasi Admin. Setelah Divalidasi, Data anda akan tercantum di Daftar Rekap.');
					document.location='rekap'</script>";
		}

	}

	function pdf($id) {

		if($query = $this->Wisuda_model->get_pdf($id)) {

			$data['data_wisuda'] = $query;
		}
		else
			$data['data_wisuda'] = NULL;

		$this->load->view('wisuda_pdf',$data);
	}

	function rekap() {

		$periode = "";
		if($query = $this->Wisuda_model->get_setting()) {

			$data_setting = $query;

			foreach($data_setting as $setting) {
				if($setting->status == 1)
					$periode = $setting->periode;
			}
		}

		if($query = $this->Wisuda_model->get_rekapDepan($periode)) {

			$data['data_rekap'] = $query;
		}
		else
			$data['data_rekap'] = NULL;

		$data['periode'] = $periode;		

		$this->load->view('wisuda_rekap',$data);
	}

	function tataCara() {
		
		$this->load->view('wisuda_tatacara');
	}


}
