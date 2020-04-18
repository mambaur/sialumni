<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Beranda_model');
		$this->model = $this->Beranda_model;
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$rows=$this->model->tahun();
		$this->load->view('widget/header');
		$this->load->view('beranda', ['rows'=>$rows]);
		$this->load->view('widget/footer');
	}

}
