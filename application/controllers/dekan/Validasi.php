<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "dekan" && $this->session->userdata('tingkatan') != "dekan") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {

		if($query = $this->Input_model->get_data_proposal_disetujui_wd2_validasi()) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('dekan/validasi_proposal',$data);
		
	}

	public function index2() {

				$this->load->view('dekan/cek_proposal');

	}

	public function validasi($id) {
		$this->load->model('Input_model');
		if($query = $this->Input_model->get_wd()) {
			$data['data_wd'] = $query;
		}
		else{
			$data['data_wd'] = NULL;
		}
		if($query = $this->Input_model->get_data_by_idproposal($id)) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('dekan/validasi_diterima', $data);
	}	
	
	public function update_review($id) {
	$this->load->helper('fungsidate'); //kita load helper yang kita buat cukup   
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('validasi_proposal', 'Validasi Proposal', 'required');
	$this->form_validation->set_rules('alasan', 'Alasan', 'required');
	$this->form_validation->set_rules('nama_pjk', 'Nama PJK', 'required');
	//$this->form_validation->set_rules('jenis_proposal', 'Jenis Proposal', 'required');
	$this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('pendahuluan', 'Pendahuluan', 'required');
	$this->form_validation->set_rules('dasar_hukum', 'Dasar Hukum', 'required');
	$this->form_validation->set_rules('rab', 'RAB', 'required');
	$this->form_validation->set_rules('tempat', 'Tempat', 'required');
	$this->form_validation->set_rules('keluaran', 'Keluaran', 'required');
	//$this->form_validation->set_rules('tgl_pelaksanaan', 'Tanggal Pelaksanaan', 'required');
	$this->form_validation->set_rules('penutup', 'Penutup', 'required');
	//$this->form_validation->set_rules('nominal', 'Nominal', 'required');
	//$this->form_validation->set_rules('terbilang', 'Terbilang', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
			$tgl = date("Y-m-d");
			$nominal_rp = rupiah3($this->input->post('nominal'));
			$data = array(
				'dekan_review' => $this->input->post('validasi_proposal'),
				'keterangan_review' => $this->input->post('alasan'),				
				'nama_pjk' => $this->input->post('nama_pjk'),
				//'jenis_proposal' => $this->input->post('jenis_proposal'),
				'judul' => $this->input->post('judul'),
				'pendahuluan' => $this->input->post('pendahuluan'),
				'dasar_hukum' => $this->input->post('dasar_hukum'),
				'rab' => $this->input->post('rab'),
				'tempat' => $this->input->post('tempat'),
				'keluaran' => $this->input->post('keluaran'),
				'penutup' => $this->input->post('penutup'),
				//'tgl_pelaksanaan' => $this->input->post('tgl_pelaksanaan'),
				'tgl_validasi' => $tgl,
				'nominal_disetujui_dekan' => $this->input->post('nominal'),
				'nominal_disetujui_rp' => $nominal_rp,
				'terbilang' => $this->input->post('terbilang'),
				'kode' => $this->input->post('kode'),
				);

			if($this->Input_model->update($id,$data));
if($this->input->post('validasi_proposal')=="TIDAK DISETUJUI"){
 		// tidak disetujui = do nothing
 }else {
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
 }
			
				redirect('dekan/validasi');	
		}	
	redirect('dekan/validasi');	
}
	public function cek_proposal() {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('kode', 'Kode Proposal', 'required');
	
		if ($this->form_validation->run() == FALSE) {
			$this->index2();
		}
		else {
			if($query = $this->Input_model->search_proposal_bykode($this->input->post('kode'))) {
			$data['proposale'] = $query;
			}
			else{
				$data['proposale'] = NULL;
			}
			$this->load->view('dekan/cek_proposal2',$data);
		}
		
}

}
