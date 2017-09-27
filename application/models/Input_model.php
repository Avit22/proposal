<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Input_model extends CI_Model {

	function __construct() {

		parent::__construct();
		
	}

	function get_wd() {
		$this->db->select('*');
		$query = $this->db->get('wd');
		return $query->result();
	}
	function get_jurusan() {
		$this->db->select('*');
		$query = $this->db->get('jurusan');
		return $query->result();
	}
	function get_prodi() {
		$this->db->select('*');
		$query = $this->db->get('prodi');
		return $query->result();
	}

	function get_revisi() {
		$this->db->select('*');
		$query = $this->db->get('revisi');
		return $query->result();
	}

	function update($id,$data) {
		$this->db->where('id_proposal',$id);
		$this->db->update('proposal',$data);
	}

	function tambah($data) {
		$this->db->insert('proposal',$data);
		return;
	}

function tambah_revisi($data) {
		$this->db->insert('revisi',$data);
		return;
	}

	function tambah_laporan($data) {
		$this->db->insert('laporan',$data);
		return;
	}

	function tambah_rab($data) {
		$this->db->insert('rab',$data);
		return;
	}

	function get_data() {
		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_proposal_disetujui() {
		$this->db->where('status_review','DISETUJUI');
		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_input_laporan($id_proposal){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->where('proposal.id_proposal = "'.$id_proposal.'"');
		$query = $this->db->get();
		return $query->result();

	}

	function get_revisi_by_iduser($id_user) {

		$this->db->select('*');
		$this->db->from('revisi');
		$this->db->join('user','revisi.id_user = user.id_user');
		$this->db->where('revisi.id_pjk = "'.$id_user.'"');
		$query = $this->db->get();
		return $query->result();
	}

	function get_proposal_by_idproposal($id_proposal) {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->where('id_proposal = "'.$id_proposal.'"');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_by_idproposal($id_proposal) {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('jurusan','proposal.jurusan = jurusan.id_jurusan');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('proposal.id_proposal = "'.$id_proposal.'"');
		$query = $this->db->get();
		return $query->result();
	}


	function get_data_laporan($id_laporan){

		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->where('laporan.id_laporan = "'.$id_laporan.'"');
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_data_pjk($id_user) {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->where('proposal.id_user = "'.$id_user.'"');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_kajur($id_user) {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->where('proposal.id_user = "'.$id_user.'"');
		$query = $this->db->get();
		return $query->result();
	}


	function get_data_kaprodi($id_user) {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->where('proposal.id_user = "'.$id_user.'"');
		$query = $this->db->get();
		return $query->result();
	}


	function get_data_wd1() {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->where('wd.id_wd=1');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_wd2() {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->where('wd.id_wd=2');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_wd3() {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->where('wd.id_wd=3');
		$query = $this->db->get();
		return $query->result();
	}

	function get_proposal_jurusan_elektro(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('jurusan','proposal.jurusan = jurusan.id_jurusan');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('jurusan = 3');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_jurusan_tjp(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('jurusan','proposal.jurusan = jurusan.id_jurusan');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('jurusan = 4');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_jurusan_kimia(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('jurusan','proposal.jurusan = jurusan.id_jurusan');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('jurusan = 5');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_jurusan_mesin(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('jurusan','proposal.jurusan = jurusan.id_jurusan');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('jurusan = 2');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_jurusan_sipil(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('jurusan','proposal.jurusan = jurusan.id_jurusan');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('jurusan = 1');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_prodi_boga(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 12');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_prodi_busana(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 11');
		$query = $this->db->get();
		return $query->result();

	}


	function get_proposal_prodi_kecantikan(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 13');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_prodi_pkk(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 10');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_prodi_ptb(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 1');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_prodi_pte(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 7');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_prodi_ptik(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 8');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_prodi_ptm(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 4');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_prodi_pto(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 5');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_prodi_ta(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 3');
		$query = $this->db->get();
		return $query->result();

	}
	
	function get_proposal_prodi_te(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 9');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_prodi_tm(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 6');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_prodi_ts(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 2');
		$query = $this->db->get();
		return $query->result();

	}

	function get_proposal_prodi_tk(){

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->join('prodi','proposal.prodi = prodi.id_prodi');
		$this->db->where('prodi = 14');
		$query = $this->db->get();
		return $query->result();

	}


function get_laporan() {

		$this->db->select('*');
		$this->db->from('laporan');
		$query = $this->db->get();
		return $query->result();
	}

function get_laporan_by_idproposal($id_user){
	
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->where('laporan.id_user = "'.$id_user.'"');
		$query = $this->db->get();
		return $query->result();

}

function get_data_by_idlaporan($id_laporan) {

		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->where('laporan.id_laporan = "'.$id_laporan.'"');
		$query = $this->db->get();
		return $query->result();
	}

	function hapus($id) {		
		$this->db->where('id_proposal',$id);	
		$this->db->delete('proposal');	
		return;
	}	

public function get_all_rab_id_proposal($id_prop){
	$this->db->where('id_proposal',$id_prop);
	$this->db->from('rab');
	$query = $this->db->get();
	return $query->result();
}
}