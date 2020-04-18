<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper(array('url'));

	}
 
	public function index(){
		// $this->session->sess_destroy();
		$this->session->unset_userdata('status');
		$this->session->unset_userdata('nama_user');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('nis');
		redirect('../');
	}
	
}
?>