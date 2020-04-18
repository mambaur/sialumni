<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataAlumni extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Alumni');		
		$this->load->helper(array('url'));
    if($this->session->userdata('status') == "login"){
        redirect('user/Welcome','refresh');
      }
	}

	public function index(){
    $data['title'] = 'Data Alumni SMKN 1 Malang';
		$data['data'] = $this->M_Alumni->tampil_alumni();
		$this->load->view('widget/header', $data);
		$this->load->view('V_Alumni', $data);
		$this->load->view('widget/footer');
	}

  public function search(){
    $keyword = $_GET["keyword"];
    $no=1;
    if(empty($this->M_Alumni->search($keyword))){
      echo "
          <div class='container alert alert-warning'>
            <strong>Mohon maaf,</strong> data yang anda cari tidak ditemukan!.
          </div>
      ";
    }else {
      foreach($this->M_Alumni->search($keyword) as $a){
        echo "
              <div class='table-row'>
                <div class='serial'>".$no++."</div>
                <div class='country'><img style='width: 60px;' class='img-fluid rounded-circle' src='". base_url('admin/images' . $a->foto). "'></div>
                <div class='country'>".$a->nama_alumni."</div>
                <div class='country'>". $a->jurusan ."</div>
                <div class='visit'>".$a->tahun_masuk."</div>
                <div class='visit'>". $a->no_telp ."</div>
                <div class='visit'>".$a->alamat_skr."</div>
                <div class='visit'>". $a->kuliah ."</div>
                <div class='percentage justify-content-center'><a href='".base_url('DataAlumni/detail_alumni?id'. $a->nis)."''>Detail &nbsp<i class='fas fa-external-link-alt'></i></a></div>
              </div>
        ";
      }
    }
  }

  public function detail_alumni(){
    $data['title'] = 'Detail Data Alumni';
    $data['alumni'] = $this->db->get_where('tb_alumni', ['nis' => $this->input->get('id')])->row_array();
    $this->load->view('widget/header' , $data);
    $this->load->view('V_detail_alumni', $data);
    $this->load->view('widget/footer');
  }
}

