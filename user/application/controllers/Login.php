<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->model('M_login');
		$this->load->helper(array('url'));
    if($this->session->userdata('status') == "login"){
      redirect('Welcome','refresh');
    }
	}

	public function index(){
		$this->load->view('V_Login');
	}


function aksi_login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    foreach($this->M_login->iduser($username) as $row){
      $iduser=$row->id_user;
      $namauser = $row->username;
      $level=$row->level;
      $nis = $row->nis;
    }
    $where = array(
      'username' => $username,
      'password' => $password
      );
    $cek = $this->M_login->cek_login("tb_user",$where)->num_rows();
    if($cek > 0){
      $data_session = array(
        'nama_user' => $namauser,
        'id_user' => $iduser,
        'level' =>$level,
        'nis' => $nis,
        'status' => "login"
        );
 
      $this->session->set_userdata($data_session);
 
      redirect('Welcome');
 
    }else{
      echo "<script>
                alert('Username dan password salah');
                window.location.href = '".base_url('Login')."';
            </script>";//Url tujuan
    }
  }
	
}
