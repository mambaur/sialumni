<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Alumni_Model');
		$this->model = $this->Alumni_Model;
		$this->load->database();
 		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
		
	}

	public function index(){
		$rows=$this->model->read();
		$this->load->view('widget/header');
		$this->load->view('alumni_read', ['rows'=>$rows]);
		$this->load->view('widget/footer');
	}
	
	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->nis = $_POST['nis'];
			$this->model->nama_alumni = $_POST['nama_alumni'];
			$this->model->tempat_lahir = $_POST['tempat_lahir'];
			$this->model->tgl_lahir = $_POST['tgl_lahir'];
			$this->model->jk = $_POST['jk'];
			$this->model->alamat_awal = $_POST['alamat_awal'];
			$this->model->alamat_skr = $_POST['alamat_skr'];
			$this->model->tahun_masuk = $_POST['tahun_masuk'];
			$this->model->tahun_keluar = $_POST['tahun_keluar'];
			$this->model->kuliah = $_POST['kuliah'];
			$this->model->nama_ayah = $_POST['nama_ayah'];
			$this->model->nama_ibu = $_POST['nama_ibu'];
			$this->model->no_telp = $_POST['no_telp'];
			$this->model->agama = $_POST['agama'];
			$this->model->pekerjaan_ayah = $_POST['pekerjaan_ayah'];
			$this->model->pekerjaan_ibu = $_POST['pekerjaan_ibu'];
			$this->model->jurusan = $_POST['jurusan'];
			$this->model->nama_wali = $_POST['nama_wali'];
			$this->model->pekerjaan_wali = $_POST['pekerjaan_wali'];
			$upload = $this->model->upload();
			
			if($upload['result'] == "success"){ 
	        	$this->model->insert($upload);
				redirect('Alumni');
	         }else{ // Jika proses upload gagal
	         	var_dump($upload);
				$this->load->view('widget/header');
				$this->load->view('alumni_create', ['model'=>$this->model] );
				$this->load->view('widget/footer');
			}
			
		}else{
			$this->load->view('widget/header');
			$this->load->view('alumni_create', ['model'=>$this->model] );
			$this->load->view('widget/footer');
		}
	}
	
	public function update($nis){
		if(isset($_POST['btnSubmit'])){
			$this->model->nis = $_POST['nis'];
			$this->model->nama_alumni = $_POST['nama_alumni'];
			$this->model->tempat_lahir = $_POST['tempat_lahir'];
			$this->model->tgl_lahir = $_POST['tgl_lahir'];
			$this->model->jk = $_POST['jk'];
			$this->model->alamat_awal = $_POST['alamat_awal'];
			$this->model->alamat_skr = $_POST['alamat_skr'];
			$this->model->tahun_masuk = $_POST['tahun_masuk'];
			$this->model->tahun_keluar = $_POST['tahun_keluar'];
			$this->model->kuliah = $_POST['kuliah'];
			$this->model->nama_ayah = $_POST['nama_ayah'];
			$this->model->nama_ibu = $_POST['nama_ibu'];
			$this->model->no_telp = $_POST['no_telp'];
			$this->model->agama = $_POST['agama'];
			$this->model->pekerjaan_ayah = $_POST['pekerjaan_ayah'];
			$this->model->pekerjaan_ibu = $_POST['pekerjaan_ibu'];
			$this->model->jurusan = $_POST['jurusan'];
			$this->model->nama_wali = $_POST['nama_wali'];
			$this->model->pekerjaan_wali = $_POST['pekerjaan_wali'];
			$query=$this->db->query("SELECT * FROM tb_alumni WHERE nis='$nis'");
			$row=$query->row();
			$this->model->foto = $row->foto;
			
			if(!empty($_FILES['images']['tmp_name'])){
				$this->model->foto = $_FILES['images']['name'];
				$upload = $this->model->upload();  
				if($upload['result'] == "success"){ 
					$this->model->update();
					redirect('Alumni');
				}else{ // Jika proses upload gagal
					echo "<script> alert('Gagal mengunggah gambar'); </script>";
				}
			}else{
				$this->model->update();
				redirect('Alumni');
			}
			
		}else{
			$query=$this->db->query("SELECT * FROM tb_alumni WHERE nis='$nis'");
			$row=$query->row();
			$this->model->nis = $row->nis;
			$this->model->nama_alumni = $row->nama_alumni;
			$this->model->tempat_lahir = $row->tempat_lahir;
			$this->model->tgl_lahir = $row->tgl_lahir;
			$this->model->jk = $row->jk;
			$this->model->alamat_awal = $row->alamat_awal;
			$this->model->alamat_skr = $row->alamat_skr;
			$this->model->tahun_masuk = $row->tahun_masuk;
			$this->model->tahun_keluar = $row->tahun_keluar;
			$this->model->kuliah = $row->kuliah;
			$this->model->nama_ayah = $row->nama_ayah;
			$this->model->nama_ibu = $row->nama_ibu;
			$this->model->no_telp = $row->no_telp;
			$this->model->agama = $row->agama;
			$this->model->pekerjaan_ayah = $row->pekerjaan_ayah;
			$this->model->pekerjaan_ibu = $row->pekerjaan_ibu;
			$this->model->jurusan = $row->jurusan;
			$this->model->nama_wali = $row->nama_wali;
			$this->model->pekerjaan_wali = $row->pekerjaan_wali;
			$this->model->foto = $row->foto;

			$this->load->view('widget/header');
			$this->load->view('alumni_update', ['model'=>$this->model]);
			$this->load->view('widget/footer');
		}

	}
	
	public function detail($nis){
		$query=$this->db->query("SELECT * FROM tb_alumni WHERE nis='$nis'");
			$row=$query->row();
			$this->model->nis = $row->nis;
			$this->model->nama_alumni = $row->nama_alumni;
			$this->model->tempat_lahir = $row->tempat_lahir;
			$this->model->tgl_lahir = $row->tgl_lahir;
			$this->model->jk = $row->jk;
			$this->model->alamat_awal = $row->alamat_awal;
			$this->model->alamat_skr = $row->alamat_skr;
			$this->model->tahun_masuk = $row->tahun_masuk;
			$this->model->tahun_keluar = $row->tahun_keluar;
			$this->model->kuliah = $row->kuliah;
			$this->model->nama_ayah = $row->nama_ayah;
			$this->model->nama_ibu = $row->nama_ibu;
			$this->model->no_telp = $row->no_telp;
			$this->model->agama = $row->agama;
			$this->model->pekerjaan_ayah = $row->pekerjaan_ayah;
			$this->model->pekerjaan_ibu = $row->pekerjaan_ibu;
			$this->model->jurusan = $row->jurusan;
			$this->model->nama_wali = $row->nama_wali;
			$this->model->pekerjaan_wali = $row->pekerjaan_wali;
			$this->model->foto = $row->foto;
			$this->load->view('widget/header');
			$this->load->view('alumni_detail', ['model'=>$this->model]);
			$this->load->view('widget/footer');
	}
	
	public function pekerjaan($nis){
			$query=$this->db->query("SELECT * FROM tb_pekerjaan WHERE nis='$nis'");
			$row=$query->result();
		
			$this->load->view('widget/header');
			$this->load->view('alumni_pekerjaan', ['rows'=>$row]);
			$this->load->view('widget/footer');
	}
	
	public function prestasi($nis){
			$query=$this->db->query("SELECT * FROM tb_prestasi WHERE nis='$nis'");
			$row=$query->result();
			
			$this->load->view('widget/header');
			$this->load->view('alumni_prestasi', ['rows'=>$row]);
			$this->load->view('widget/footer');
	}
	
	public function organisasi($nis){
			$query=$this->db->query("SELECT * FROM tb_organisasi WHERE nis='$nis'");
			$row=$query->result();
			
			$this->load->view('widget/header');
			$this->load->view('alumni_organisasi', ['rows'=>$row]);
			$this->load->view('widget/footer');
	}
	
	public function add_pekerjaan($nis){
		if(isset($_POST['btnSubmit'])){
			$this->model->add_pekerjaan();
			redirect('Alumni/pekerjaan/'.$nis);
		}else {
			$this->load->view('widget/header');
			$this->load->view('alumni_pekerjaan_add');
			$this->load->view('widget/footer');
		}
	}
	
	public function add_prestasi($nis){
		if(isset($_POST['btnSubmit'])){
			$this->model->add_prestasi();
			redirect('Alumni/prestasi/'.$nis);
		}else {
			$this->load->view('widget/header');
			$this->load->view('alumni_prestasi_add');
			$this->load->view('widget/footer');
		}
	}
	
	public function add_organisasi($nis){
		if(isset($_POST['btnSubmit'])){
			$this->model->add_organisasi();
			redirect('Alumni/organisasi/'.$nis);
		}else {
			$this->load->view('widget/header');
			$this->load->view('alumni_organisasi_add');
			$this->load->view('widget/footer');
		}
	}
	
	public function edit_pekerjaan($nis){
		if(isset($_POST['btnSubmit'])){
			$this->model->edit_pekerjaan();
			redirect('Alumni/pekerjaan/'.$nis);
		}else {
			$query=$this->db->query("SELECT * FROM tb_pekerjaan WHERE nis='$nis'");
			$row=$query->result();
			$this->load->view('widget/header');
			$this->load->view('alumni_pekerjaan_edit', ['rows'=>$row]);
			$this->load->view('widget/footer');
		}
	}
	
	public function edit_prestasi($nis){
		if(isset($_POST['btnSubmit'])){
			$this->model->edit_prestasi();
			redirect('Alumni/prestasi/'.$nis);
		}else {
			$query=$this->db->query("SELECT * FROM tb_prestasi WHERE nis='$nis'");
			$row=$query->result();
			$this->load->view('widget/header');
			$this->load->view('alumni_prestasi_edit', ['rows'=>$row]);
			$this->load->view('widget/footer');
		}
	}
	
	public function edit_organisasi($nis){
		if(isset($_POST['btnSubmit'])){
			$this->model->edit_organisasi();
			redirect('Alumni/organisasi/'.$nis);
		}else {
			$query=$this->db->query("SELECT * FROM tb_organisasi WHERE nis='$nis'");
			$row=$query->result();
			$this->load->view('widget/header');
			$this->load->view('alumni_organisasi_edit', ['rows'=>$row]);
			$this->load->view('widget/footer');
		}
	}
	
	public function hapus_pekerjaan($nis, $id){
		$this->model->hapus_pekerjaan($id);
		redirect('Alumni/pekerjaan/'.$nis);
	}
	
	public function hapus_prestasi($nis, $id){
		$this->model->hapus_prestasi($id);
		redirect('Alumni/prestasi/'.$nis);
	}
	
	public function hapus_organisasi($nis, $id){
		$this->model->hapus_organisasi($id);
		redirect('Alumni/organisasi/'.$nis);
	}
	
}
