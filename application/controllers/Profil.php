<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->model('M_Profil');	
		if($this->session->userdata('status') == "login"){
     		redirect('user/Welcome','refresh');
    	}
	}

	public function index(){
		$data['title'] = 'Profil Saya';
		$this->load->view('widget/header' , $data);
		$this->load->view('V_Profil');
		$this->load->view('widget/footer');
	}

	public function update_profil(){
		$id_user = $this->session->userdata('id_user');
		$username = $this->input->post('username');
		$pass_lama = $this->input->post('pass_lama');
		$pass_baru = $this->input->post('pass_baru');
		// $cek_pass = $this->M_Profil->cek_pass_lama($id_user,$pass_lama)->num_rows();
		$cek_pass = $this->db->query("SELECT * FROM tb_user WHERE id_user='$id_user' AND password='$pass_lama'")->num_rows();
		if ($cek_pass<1) {
			echo "<script>
                alert('Mohon maaf password lama anda salah!');
                window.location.href = '".base_url('Profil')."';
            </script>";//Url tujuan
		}else{
			$update = $this->M_Profil->update_profil($id_user,$username,$pass_baru);
			echo "<script>
                alert('Update data berhasil, silahkan anda masuk ulang dengan akun baru anda!');
                window.location.href = '".base_url('Logout')."';
            </script>";//Url tujuan
		}
		
	}
}
