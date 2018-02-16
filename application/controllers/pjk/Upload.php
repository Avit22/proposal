<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	 public function __construct() {

	 	parent::__construct();
	 	if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
	   	elseif($this->session->userdata('tingkatan') != "pjk") {

	   		redirect('login', 'refresh');
	   	}
	   	$this->load->model('Input_model');
	 }

	 function index() {

	 	if($query = $this->Input_model->get_wd()) {
			$data['data_wd'] = $query;
		}
		else{
			$data['data_wd'] = NULL;
		}

		if($query = $this->Input_model->get_jurusan()) {
			$data['data_jurusan'] = $query;
		}
		else{
			$data['data_jurusan'] = NULL;
		}

		if($query = $this->Input_model->get_prodi()) {
			$data['data_prodi'] = $query;
		}
		else{
			$data['data_prodi'] = NULL;
		}
	   
	   	$this->load->view('pjk/upload_proposal',$data);
	}

	public function tambah_proses() {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('nama_pjk', 'Nama PJK', 'required');
	$this->form_validation->set_rules('jenis_proposal', 'Jenis Proposal', 'required');
	$this->form_validation->set_rules('email_pjk', 'Email PJK', 'required');
	$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
	$this->form_validation->set_rules('prodi', 'Prodi', 'required');
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

                        $this->load->view('pjk/upload_proposal', $error);
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
				'jenis_proposal' => $this->input->post('jenis_proposal'),
				'email_pjk' => $this->input->post('email_pjk'),
				'jurusan' => $this->input->post('jurusan'),
				'prodi' => $this->input->post('prodi'),
				'tgl_input' => $tgl,
				'file1' => $name_of_file,       // Returns: mypic.jpg,
				'id_user' => $id_user_session,
				
				);	

			if($this->Input_model->tambah($data)){
			//redirect('pjk/laporan_terkirim');
			}

		redirect('pjk/terkirim');
	}
	}
}

