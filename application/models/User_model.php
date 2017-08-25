<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	function __construct() {

		parent::__construct();
	}
 
	function get_user() {
		$this->db->select('*');
		$query = $this->db->get('user');
		return $query->result();
	}

	function tambah($data) {
		$this->db->insert('user',$data);
		return;
	}

	function update($id,$data) {
		$this->db->where('id_user',$id);
		$this->db->update('user',$data);
	}

	function hapus($id) {
		$this->db->where('id_user',$id);
		$this->db->delete('user');
		return;
	}	

	function get_individu($id) {
		$this->db->where('id_user',$id);
		$query = $this->db->get('user');
		return $query->result();
	}

	function get_tingkatan() {
		$this->db->select('*');
		$query = $this->db->get('tingkatan');
		return $query->result();	
	}

	
}