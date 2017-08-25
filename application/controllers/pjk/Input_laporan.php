<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_laporan extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "pjk" && $this->session->userdata('tingkatan') != "pjk") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {

		$this->load->view('pjk/input_laporan');
		
	}

	
	public function tambah_proses() {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('nama_pjk', 'Nama PJK', 'required');
	$this->form_validation->set_rules('rincian_kegiatan', 'Rincian Kegiatan', 'required');
	$this->form_validation->set_rules('rincian_biaya', 'Rincian Biaya', 'required');
	$this->form_validation->set_rules('bukti_biaya', 'Bukti Biaya', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$tgl = date("Y-m-d");
			$data = array(				
				'judul' => $this->input->post('judul'),
				'nama_pjk' => $this->input->post('nama_pjk'),
				'rincian_kegiatan' => $this->input->post('rincian_kegiatan'),
				'rincian_biaya' => $this->input->post('rincian_biaya'),
				'bukti_biaya' => $this->input->post('bukti_biaya'),
				'tgl_input' => $tgl,
				);
						//set preferences
        $config['upload_path'] = base_url('assets/image/');
        $config['allowed_types'] = 'txt|pdf|jpg|JPEG|png';
        $config['max_size']    = '10000';
        //load upload class library
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('filename'))
        {
            // case - failure
            $upload_error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload_file_view', $upload_error);
        }
        else
        {
            // case - success
            $upload_data = $this->upload->data();
            $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
            //$this->load->view('upload_file_view', $data);
        }

			if($this->Input_model->tambah_laporan($data)){
				redirect('pjk/data_kirim');
			}
		}

	}

	

}
