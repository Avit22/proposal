<?php
defined('BASEPATH') or exit ('No Direct script allowed');
class Test extends CI_Controller{

	function __Consctruct(){
		parent::__Consctruct();
	}

	function index(){
		$this->load->view('pjk/test');
	}
}
?>