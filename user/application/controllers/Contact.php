<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper(array('url'));
		if($this->session->userdata('status') != "login"){
			echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '".base_url('Login')."';
            </script>";//Url tujuan
		}
	}

	public function index(){
		$data['title'] = 'Tentang SMKN 1 Malang';
		$this->load->view('widget/header', $data);
		$this->load->view('V_Contact');
		$this->load->view('widget/footer');
	}
}
