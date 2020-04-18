<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper(array('url'));
		if($this->session->userdata('status') == "login"){
     		redirect('user/Welcome','refresh');
    	}
	}

	public function index(){
		$data['title'] = 'Tentang SMKN 1 Malang';
		$this->load->view('widget/header', $data);
		$this->load->view('V_About');
		$this->load->view('widget/footer');
	}
}
