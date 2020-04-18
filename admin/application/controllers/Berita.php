<?php
class Berita extends CI_Controller{

	public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->model('Berita_model');
		$this->model = $this->Berita_model;
		$this->load->database();
 		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
	}
	
	public function index(){
		$this->load->view('widget/header');
		$this->read();
		$this->load->view('widget/footer');
	}

	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->id_berita 		= $_POST['id_berita'];
			$this->model->judul_berita 		= $_POST['judul_berita'];
			$this->model->isi_berita 		= $_POST['isi_berita'];
			$this->model->penulis 			= $_POST['user_id_user'];

			$upload = $this->model->upload();    
	      	if($upload['result'] == "success"){ 
	        	$this->Berita_model->save($upload);
	        	redirect('Berita'); 
	         }else{ 
	        	$this->load->view('widget/header');
	        	$this->load->view('Berita', ['model'=>$this->model]);
	        	$this->load->view('widget/footer');
	      	}
		
		}else{
			$this->model->id_berita = $this->model->get_id();
			$this->load->view('widget/header');
         	$this->load->view('Berita', ['model'=>$this->model]);
     		$this->load->view('widget/footer');
			
		}
	}
	
	public function read(){
		$rows=$this->model->read();
		$this->load->view('Berita_view', ['rows'=>$rows]);
	}
	
	public function update($id_berita_up){
		if(isset($_POST['btnSubmit'])){
			$query=$this->db->query("SELECT * FROM tb_berita WHERE id_berita='$id_berita_up'");
			$row=$query->row();
			$this->model->gambar_berita=$row->gambar_berita;
			$this->model->id_berita = $_POST['id_berita'];
			$this->model->judul_berita = $_POST['judul_berita'];
			$this->model->isi_berita = $_POST['isi_berita'];
			$this->model->penulis = $_POST['user_id_user'];
			
			if(!empty($_FILES['images']['tmp_name'])){
				$this->model->gambar_berita = $_FILES['images']['name'];
				$upload = $this->model->upload();  
				if($upload['result'] == "success"){ 
					$this->model->update();
					redirect('Berita');
				}else{ // Jika proses upload gagal
					echo "<script> alert('Gagal mengunggah gambar'); </script>";
				}
			}else{
				$this->model->update();
				redirect('Berita');
			}
			
		}else{
			$query=$this->db->query("SELECT * FROM tb_berita WHERE id_berita='$id_berita_up'");
			$row=$query->row();
			$this->model->id_berita=$row->id_berita;
			$this->model->judul_berita=$row->judul_berita;
			$this->model->isi_berita=$row->isi_berita;
			$this->model->gambar_berita=$row->gambar_berita;
			$this->model->penulis= $row->penulis;
			$this->load->view('widget/header');
			$this->load->view('Berita_up', ['model'=>$this->model]);
			$this->load->view('widget/footer');
		}

	}


	public function delete ($id_berita_del){
		$this->model->id_berita=$id_berita_del;
		$this->model->delete();
		redirect('berita');
	}
	
}



?>