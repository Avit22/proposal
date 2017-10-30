<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_laporan extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kajur_tjp" && $this->session->userdata('tingkatan') != "kajur_tjp") {

   		redirect('login', 'refresh');
	   	}
	   	$this->load->helper(array('form', 'url'));
		$this->load->model('Input_model');
	}

	
	public function index() {

		$sessiondata = $this->session->userdata('id_user');
		if($query = $this->Input_model->get_data_pjk($sessiondata)) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;
		$this->load->view('kajur_tjp/proposalku', $data);
		
	}

	public function input($id){

		
		if($query = $this->Input_model->get_data_input_laporan($id)) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;
		$this->load->view('kajur_tjp/input_laporan',$data);
	}

	
	public function tambah_proses() {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('nama_pjk', 'Nama PJK', 'required');
	$this->form_validation->set_rules('nominal', 'Nominal', 'required');
	//$this->form_validation->set_rules('bukti_biaya', 'Bukti Biaya', 'required');
	$name_of_file = "empty.jpg";
				$config['upload_path']          = 'assets/image/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|doc|docx';
                $config['max_size']             = 10000;
                $config['max_width']            = 4086;
                $config['max_height']           = 2048;
                $this->upload->initialize($config);
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('filename'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('pjk/input_laporan', $error);
                }
                else
                {
                        $datas = $this->upload->data();
                        $name_of_file = $datas['file_name'];
                        //$this->load->view('upload_success', $data);
                }
                
    
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
			$tgl = date("Y-m-d");
			$data = array(				
				'judul' => $this->input->post('judul'),
				'nama_pjk' => $this->input->post('nama_pjk'),
				'rincian_biaya' => $this->input->post('nominal'),
				//'bukti_biaya' => $this->input->post('bukti_biaya'),
				'tgl_input' => $tgl,
				'file1' => $name_of_file,       // Returns: mypic.jpg,
				'id_user' => $id_user_session,
				'id_proposal'=>$this->input->post('id_proposalnya'),
				);	

			if($this->Input_model->tambah_laporan($data)){
				redirect('kajur_tjp/laporan_terkirim');
			}
		}
		redirect('kajur_tjp/laporan_terkirim');
	}

	public function update_proses($id_laporan) {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('nama_pjk', 'Nama PJK', 'required');
	$this->form_validation->set_rules('nominal', 'Nominal', 'required');
	//$this->form_validation->set_rules('bukti_biaya', 'Bukti Biaya', 'required');
	$name_of_file = "empty.jpg";
				$config['upload_path']          = 'assets/image/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|doc|docx';
                $config['max_size']             = 10000;
                $config['max_width']            = 4086;
                $config['max_height']           = 2048;
                $this->upload->initialize($config);
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('filename'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('pjk/input_laporan', $error);
                }
                else
                {
                        $datas = $this->upload->data();
                        $name_of_file = $datas['file_name'];
                        //$this->load->view('upload_success', $data);
                }
                
    

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$id_user_session = $this->session->userdata('id_user'); // tambahkan penanda user
			$tgl = date("Y-m-d");
			$data = array(				
				'judul' => $this->input->post('judul'),
				'nama_pjk' => $this->input->post('nama_pjk'),
				'rincian_kegiatan' => $this->input->post('rincian_kegiatan'),
				'rincian_biaya' => $this->input->post('rincian_biaya'),
				//'bukti_biaya' => $this->input->post('bukti_biaya'),
				'tgl_input' => $tgl,
				'file1' => $name_of_file,       // Returns: mypic.jpg,
				
				'id_user' => $id_user_session,
				'id_proposal'=>$this->input->post('id_proposalnya'),
				'revisi'=>$this->input->post('catatan_revisi'),
				);	

			if($this->Input_model->update_laporan($id_laporan,$data)){
				redirect('kajur_tjp/laporan_terkirim');
			}
		}
		redirect('kajur_tjp/laporan_terkirim');
	}
}
