<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->model('M_Prestasi');		
		$this->load->helper(array('url'));
		if($this->session->userdata('status') != "login"){
			echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '".base_url('Login')."';
            </script>";//Url tujuan
		}
	}

	public function index(){
		$data['title'] = 'Prestasi Alumni';
		$data['data'] = $this->M_Prestasi->tampil_prestasi();
		$this->load->view('widget/header', $data);
		$this->load->view('V_Prestasi',$data);
		$this->load->view('widget/footer');
	}

	public function search(){
		$keyword = $_GET["keyword"];
		if(empty($this->M_Prestasi->search($keyword))){
			echo "
					<div class='container alert alert-warning' style='margin-top:10%;'>
					  <strong>Mohon maaf,</strong> data yang anda cari tidak ditemukan!.
					</div>
			";
		}else {
	    	foreach($this->M_Prestasi->search($keyword) as $a){
	    		echo "
	    		<section class='tour_package padding_top single_pack' style='padding-top: 5%;'>
			        <div class='container-fluid'>
			            <div class='row align-items-center'>
	    				<div class='col-lg-5 col-xl-3 offset-lg-1 col-sm-6'>
	                        <div class='tour_pack_content'>
	                            <img src='".base_url('assets/img/'.$a->gambar_prestasi)."' alt='Gambar Prestasi'>
	                            <h2>".$a->prestasi."</h2>
	                            <p>".$a->nis."</p>
	                            <p>".$a->nama_alumni."</p>
	                        </div>
	                    </div>
	                    </div>
			        </div>
			    </section>
	    		";
			}
		}
	}
}
