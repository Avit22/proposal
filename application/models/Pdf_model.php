<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf_model extends CI_Model {

	function __construct() {

		parent::__construct();
	}

	function get_data($id) {
		$this->db->select('*');
		$this->db->from('prodi');
		$this->db->join('data_surat','data_surat.id_prodi = prodi.id_prodi');
		$this->db->join('jurusan','jurusan.id_jurusan = prodi.id_jurusan');
		$this->db->where('id_data',$id);
		$query = $this->db->get();
		return $query->result();
	}

	function get_dosen() {
		$this->db->select('*');
		$query = $this->db->get('dosen');
		return $query->result();
	}

	function penguji($id) {

		$this->db->select('penguji1, penguji2');
		$query = $this->db->get('data_surat');

		//$penguji1 = '';
		//$penguji2 = '';
		$a = 'kosong';
		foreach($query->result() as $dt) {
			$penguji1 = $dt->penguji1;
			$penguji2 = $dt->penguji2;
		}
		if($penguji1 == 0) {
			$a = 'kosong';
		}
		elseif($penguji2 == 0) {
			$a = 'kosong';
		}
		else {
			$a = 'isi';
		}

		return $a;

	}

	function pembimbing($id) {

		$this->db->select('pembimbing1, pembimbing2');
		$query = $this->db->get('data_surat');

		//$pembimbing1 = '';
		//$pembimbing2 = '';
		$a = 'kosong';
		foreach($query->result() as $dt) {
			$pembimbing1 = $dt->pembimbing1;
			$pembimbing2 = $dt->pembimbing2;
		}
		if($pembimbing1 == 0) {
			$a = 'kosong';
		}
		elseif($pembimbing2 == 0) {
			$a = 'kosong';
		}
		else {
			$a = 'isi';
		}
		
		return $a;
	}

	function dibuka($id) {
		$this->db->where('id_data',$id);
		$this->db->set('dibuka','Y');
		$this->db->update('data_surat');
	}

}