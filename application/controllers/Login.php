<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	
	   	}
	   	else {
	   		if($this->session->userdata('tingkatan') == 'pjk') {

	   			redirect('pjk/home');

	   		}
	   		elseif($this->session->userdata('tingkatan') == 'wd1') {

	   			redirect('wd1/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'wd2') {

	   			redirect('wd2/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'wd3') {

	   			redirect('wd3/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kabag_tu') {

	   			redirect('kabag_tu/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kabag_akun') {

	   			redirect('kabag_akun/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kabag_keu') {

	   			redirect('kabag_keu/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'bendahara') {

	   			redirect('bendahara/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'dekan') {

	   			redirect('dekan/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kajur_te') {

	   			redirect('kajur_te/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kajur_tjp') {

	   			redirect('kajur_tjp/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kajur_tk') {

	   			redirect('kajur_tk/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kajur_tm') {

	   			redirect('kajur_tm/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kajur_ts') {

	   			redirect('kajur_ts/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_boga') {

	   			redirect('kaprodi_boga/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_busana') {

	   			redirect('kaprodi_busana/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_kecantikan') {

	   			redirect('kaprodi_kecantikan/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_pkk') {

	   			redirect('kaprodi_pkk/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_ptb') {

	   			redirect('kaprodi_ptb/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_pte') {

	   			redirect('kaprodi_pte/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_ptik') {

	   			redirect('kaprodi_ptik/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_ptm') {

	   			redirect('kaprodi_ptm/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_pto') {

	   			redirect('kaprodi_pto/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_ta') {

	   			redirect('kaprodi_ta/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_te') {

	   			redirect('kaprodi_te/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_tm') {

	   			redirect('kaprodi_tm/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_ts') {

	   			redirect('kaprodi_ts/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'kaprodi_tk') {

	   			redirect('kaprodi_tk/home');
	   		}
	   		elseif($this->session->userdata('tingkatan') == 'admin') {

	   			redirect('admin/home');
	   		}
	   	}
		$this->load->model('Login_model');
	}

	public function index() {

		$this->load->view('login');

	}

	public function auth() {

		$this->load->library('form_validation');
		$this->form_validation->set_message('required', '%s Harus Diisi.');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		}
		else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$status = $this->Login_model->login($username,$password);
			$nama = $this->Login_model->nama($username,$password);		

			if($status > 0) {

	 	  		$tingkatan = $this->Login_model->tingkatan($username,$password);
	 	  		$keterangan_tingkatan = $this->Login_model->keterangan_tingkatan($username);
	 	  		$id_user = $this->Login_model->id($username,$password);	 	  		

				$sessiondata = array(
					'username' => $username,
					'password' => $password,
					'nama'	=> $nama,
					'tingkatan' => $tingkatan,
					'keterangan_tingkatan' => $keterangan_tingkatan,
					'id_user' => $id_user,
					'logged_in' => TRUE);
				
				$this->session->set_userdata($sessiondata);
	 	  		if($tingkatan == "pjk")
					redirect('pjk/home');
	 	  		if($tingkatan == "wd1")
					redirect('wd1/home');
				elseif($tingkatan == "wd2")
					redirect('wd2/home');
				elseif($tingkatan == "wd3")
					redirect('wd3/home');
				elseif($tingkatan == "kabag_tu")
					redirect('kabag_tu/home');
				elseif($tingkatan == "kabag_akun")
					redirect('kabag_akun/home');
				elseif($tingkatan == "kabag_keu")
					redirect('kabag_keu/home');
				elseif($tingkatan == "bendahara")
					redirect('bendahara/home');
				elseif($tingkatan == "dekan")
					redirect('dekan/home');
				elseif($tingkatan == "kajur_te")
					redirect('kajur_te/home');
				elseif($tingkatan == "kajur_tjp")
					redirect('kajur_tjp/home');
				elseif($tingkatan == "kajur_tk")
					redirect('kajur_tk/home');
				elseif($tingkatan == "kajur_tm")
					redirect('kajur_tm/home');
				elseif($tingkatan == "kajur_ts")
					redirect('kajur_ts/home');
				elseif($tingkatan == "kaprodi_boga")
					redirect('kaprodi_boga/home');
				elseif($tingkatan == "kaprodi_busana")
					redirect('kaprodi_busana/home');
				elseif($tingkatan == "kaprodi_kecantikan")
					redirect('kaprodi_kecantikan/home');
				elseif($tingkatan == "kaprodi_pkk")
					redirect('kaprodi_pkk/home');
				elseif($tingkatan == "kaprodi_ptb")
					redirect('kaprodi_ptb/home');
				elseif($tingkatan == "kaprodi_pte")
					redirect('kaprodi_pte/home');
				elseif($tingkatan == "kaprodi_ptik")
					redirect('kaprodi_ptik/home');
				elseif($tingkatan == "kaprodi_ptm")
					redirect('kaprodi_ptm/home');
				elseif($tingkatan == "kaprodi_pto")
					redirect('kaprodi_pto/home');
				elseif($tingkatan == "kaprodi_ta")
					redirect('kaprodi_ta/home');
				elseif($tingkatan == "kaprodi_te")
					redirect('kaprodi_te/home');
				elseif($tingkatan == "kaprodi_tm")
					redirect('kaprodi_tm/home');
				elseif($tingkatan == "kaprodi_ts")
					redirect('kaprodi_ts/home');
				elseif($tingkatan == "kaprodi_tk")
					redirect('kaprodi_tk/home');
				elseif($tingkatan == "admin")
					redirect('admin/home');
			}
			else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Username atau Password Anda Salah!</div>');
                redirect('login/index');
			}
		}
	}

	public function logout() {

	}
}
