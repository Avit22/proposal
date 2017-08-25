<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_pdf extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->library('fpdf');
		$this->load->model('Pdf_model'); 
	}

	public function dl($id) {
		
		$this->Pdf_model->dibuka($id);		
		
		if($query = $this->Pdf_model->get_data($id)) {

			$data['get_data'] = $query;
		}
		else
			$data['get_data'] = NULL;

		if($query = $this->Pdf_model->get_dosen()) {

			$data['dosen'] = $query;
		}
		else
			$data['dosen'] = NULL;

		if($query = $this->Pdf_model->penguji($id)) {

			$data['penguji'] = $query;
			//echo $query;
		}
		else
			$data['penguji'] = NULL;

		if($query = $this->Pdf_model->pembimbing($id)) {

			$data['pembimbing'] = $query;
			//echo $query; exit;
		}
		else
			$data['pembimbing'] = NULL;
		/*
		foreach($dosen as $ds) {

			foreach($get_data as $get) {
				if($ds->id_dosen == $get->penguji) {
					$data['penguji'] = $ds->nama;
					$data['nip_penguji'] = $ds->nip;
					$data['pangkat_penguji'] = $ds->jabatan_golongan;
					$data['golru_penguji'] = $ds->gol_ruang;
				}
				if($ds->id_dosen == $get->pembimbing1) {
					$data['pembimbing1'] = $ds->nama;
					$data['nip_pembimbing1'] = $ds->nip;
					$data['pangkat_pembimbing1'] = $ds->jabatan_golongan;
					$data['golru_pembimbing1'] = $ds->gol_ruang;
				}
				if($ds->id_dosen == $get->pembimbing2) {
					$data['pembimbing2'] = $ds->nama;
					$data['nip_pembimbing2'] = $ds->nip;
					$data['pangkat_pembimbing2'] = $ds->jabatan_golongan;
					$data['golru_pembimbing2'] = $ds->gol_ruang;
				}
			}
		}

		foreach($get_data as $get) {
			$data['nama_mahasiswa'] = $get->nama_mahasiswa;
			$data['nim'] = $get->nim;
			$data['prodi'] = $get->jenjang." ".$get->nama_prodi;
			$data['topik'] = $get->topik;
			$data['waktu'] = $get->waktu;
			$data['jam'] = $get->jam;
			$data['tempat'] = $get->tempat;
			$data['pakaian'] = $get->pakaian;
		}		
		*/
		$this->load->view('pdf',$data);
	   	
	}

}
