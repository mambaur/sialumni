<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->model('M_Berita');		
		$this->load->helper(array('url'));
		if($this->session->userdata('status') != "login"){
			echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '".base_url('Login')."';
            </script>";//Url tujuan
		}
	}

	public function index(){
		$data['title'] = 'Berita Seputar SMKN 1 Malang';
		$data['data'] = $this->M_Berita->tampil_berita();
		$this->load->view('widget/header',$data);
		$this->load->view('V_Berita',$data);
		$this->load->view('widget/footer');
	}
	
	public function detail($id){
		$data['title'] = 'Detail Berita Seputar SMKN 1 Malang';
		$data['data'] = $this->M_Berita->detail_berita($id);
		$this->load->view('widget/header', $data);
		$this->load->view('V_BeritaDetail',$data);
		$this->load->view('widget/footer');
	}
}
