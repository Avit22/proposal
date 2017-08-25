<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 public function __construct() {

	 	parent::__construct();
	 	if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
	   	elseif($this->session->userdata('tingkatan') != "admin") {

	   		redirect('login', 'refresh');
	   	}
	   	$this->load->model('User_model');
	 }

	 function index() {

	 	if($query = $this->User_model->get_user()) {

			$data['data_user'] = $query;
		}
		else
			$data['data_user'] = NULL;

	   
	   	$this->load->view('user/user_data',$data);
	}

	function tambah() { 

		if($query = $this->User_model->get_tingkatan()) {

			$data['data_tingkatan'] = $query;
		}
		else
			$data['data_tingkatan'] = NULL;

		$this->load->view('user/user_tambah',$data);
	}

	function tambah_proses() {

		$this->load->library('form_validation');
		$this->form_validation->set_message('required', '%s Harus Diisi.');
		$this->form_validation->set_message('matches', 'Password dan Konfirmasi Password harus sama.');
		$this->form_validation->set_message('is_unique', 'Username sudah ada.');

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username','Username', 'required|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password]');
		$this->form_validation->set_rules('tingkatan', 'Tingkatan', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->tambah();
		}
		else {
			$tgl = date("Y-m-d");
			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'tingkatan' => $this->input->post('tingkatan'),
				
				);
			
			$this->User_model->tambah($data);
			redirect('user');
		}
	
	}

	function edit($id) {

		if($query = $this->User_model->get_individu($id)) {

			$data['data_user'] = $query;
		}
		else
			$data['data_user'] = NULL;

		if($query = $this->User_model->get_tingkatan()) {

			$data['data_tingkatan'] = $query;
		}
		else
			$data['data_tingkatan'] = NULL;

		
		$this->load->view('user/user_edit',$data);
	}

	function edit_proses($id) {

		$this->load->library('form_validation');
		$this->form_validation->set_message('required', '%s Harus Diisi.');
		$this->form_validation->set_message('matches', 'Password dan Konfirmasi Password harus sama.');
		$this->form_validation->set_message('is_unique', 'Username sudah ada.');

		//$this->form_validation->set_rules('id_user','id_user', 'required');
		$this->form_validation->set_rules('nama','Nama', 'required');
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('tingkatan', 'Tingkatan', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->edit($id);
		}
		else {

			$pw = $this->input->post('password');
			$pw2 = $this->input->post('password2');

			$tgl = date("Y-m-d");
			if(empty($pw) && empty($pw2)) {
				$data = array(
					'nama' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'tingkatan' => $this->input->post('tingkatan'),
					
					);

			$this->User_model->update($id,$data);
			//echo $this->db->last_query();
			//exit;
			}
			elseif(!empty($pw) && !empty($pw2)) {
				
				if($pw == $pw2) {

					$data = array(
						'nama' => $this->input->post('nama'),
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'tingkatan' => $this->input->post('tingkatan'),
						
					);

					$this->User_model->update($id,$data);
					//echo $this->db->last_query();
					//exit;

				}
				else {
					$this->session->set_flashdata('pesan', 'Password Tidak sama. proses edit gagal');
					//$this->edit($id);
					redirect('user/edit/'.$id);
				}
			}
			elseif(!empty($pw) && empty($pw2)) {
				$this->session->set_flashdata('pesan', 'Password Tidak sama. proses edit gagal');
					//$this->edit($id);
					redirect('user/edit/'.$id);
			}
			elseif(empty($pw) && !empty($pw2)) {
				$this->session->set_flashdata('pesan', 'Password Tidak sama. proses edit gagal');
					//$this->edit($id);
					redirect('user/edit/'.$id);
			}

		} 

		redirect('user');
	}

	function hapus($id) {
		$this->User_model->hapus($id);
		redirect('user');
	}
}
