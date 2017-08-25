<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	function __construct() {

		parent::__construct();
	}

	function login($user, $pw) {
		$this->db->select('*');
		$this->db->where('username',$user);
		$this->db->where('password',md5($pw));
		$this->db->limit(1);
		$query = $this->db->get('user');
		return $query->num_rows();
	}

	function tingkatan($user, $pw) {
		$this->db->select('tingkatan');
		$this->db->where('username',$user);
		$this->db->where('password',md5($pw));
		$this->db->limit(1);
		$query = $this->db->get('user');

		foreach($query->result() as $data) {
			$tingkat = $data->tingkatan;
		}
		return $tingkat;
	}

	function id($user, $pw) {
		$this->db->select('id_user');
		$this->db->where('username',$user);
		$this->db->where('password',md5($pw));
		$this->db->limit(1);
		$query = $this->db->get('user');

		foreach($query->result() as $data) {
			$dt = $data->id_user;
		}
		return $dt;
	}

	function nama($user, $pw) {
		$this->db->select('*');
		$this->db->where('username',$user);
		$this->db->where('password',md5($pw));
		$this->db->limit(1);
		$query = $this->db->get('user');
		foreach($query->result() as $data) {
			$dt = $data->nama;
		}
		return $dt;
	}
}