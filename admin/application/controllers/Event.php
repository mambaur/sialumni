<?php
class Event extends CI_Controller{

	public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_Event');
		$this->model = $this->Model_Event;
		

		$this->load->database();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('upload');

	}

	public function index(){
		$this->load->view('widget/header');
		$this->read();
		$this->load->view('widget/footer');
	}


	public function read(){
		$rows=$this->model->read();
		$this->load->view('event_view', ['rows'=>$rows]);
	}

	public function loker(){
		$rows=$this->model->loker();
		$this->load->view('widget/header');
		$this->load->view('event_view', ['rows'=>$rows]);
		$this->load->view('widget/footer');
	}

	public function prestasi(){
		$rows=$this->model->prestasi();
		$this->load->view('widget/header');
		$this->load->view('event_view', ['rows'=>$rows]);
		$this->load->view('widget/footer');
	}

	public function info(){
		$rows=$this->model->info();
		$this->load->view('widget/header');
		$this->load->view('event_view', ['rows'=>$rows]);
		$this->load->view('widget/footer');
	}

	public function status(){
		$rows=$this->model->status();
		$this->load->view('widget/header');
		$this->load->view('event_status', ['rows'=>$rows]);
		$this->load->view('widget/footer');
	}

	public function detail($id){
		$rows=$this->model->detail($id);
		$this->load->view('widget/header');
		$this->load->view('event_detail', ['rows'=>$rows]);
		$this->load->view('widget/footer');
	}

	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->id_event 		= $_POST['id_event'];
			$this->model->judul_event 		= $_POST['judul_event'];
			$this->model->isi_event 		= $_POST['isi_event'];
			$this->model->kategori_event = $_POST['kategori_event'];
			$this->model->status_event = $_POST['status_event'];
			$this->model->user_id_user 			=$this->session->userdata('id_admin');

			$upload = $this->model->upload();    
	      	if($upload['result'] == "success"){ 
	        	$this->Model_Event->save($upload);
	        	redirect('Event'); 
	         }else{ // Jika proses upload gagal
	        	$this->load->view('widget/header');
	        	$this->load->view('event_create', ['model'=>$this->model]);
	        	$this->load->view('widget/footer');
	      	}
		
		}else{
			$this->model->id_event = $this->model->get_id();
			$this->load->view('widget/header');
         	$this->load->view('event_create', ['model'=>$this->model]);
     		$this->load->view('widget/footer');
			
		}
	}
	
public function update($id_event_up){
		if(isset($_POST['btnSubmit'])){
			$query=$this->db->query("SELECT * FROM tb_event WHERE id_event='$id_event_up'");
			$row=$query->row();
			$this->model->gambar_event=$row->gambar_event;
			$this->model->id_event = $_POST['id_event'];
			$this->model->judul_event = $_POST['judul_event'];
			$this->model->isi_event = $_POST['isi_event'];
			$this->model->kategori_event = $_POST['kategori_event'];
			
			if(!empty($_FILES['images']['tmp_name'])){
				$this->model->gambar_event = $_FILES['images']['name'];
				$upload = $this->model->upload();  
				if($upload['result'] == "success"){ 
					$this->model->update();
					redirect('Event');
				}else{ // Jika proses upload gagal
					echo "<script> alert('Gagal mengunggah gambar'); </script>";
				}
			}else{
				$this->model->update();
				redirect('Event');
			}
			
		}else{
			$query=$this->db->query("SELECT * FROM tb_event WHERE id_event='$id_event_up'");
			$row=$query->row();
			$this->model->id_event=$row->id_event;
			$this->model->judul_event=$row->judul_event;
			$this->model->isi_event=$row->isi_event;
			$this->model->kategori_event= $row->kategori_event;
			$this->model->gambar_event=$row->gambar_event;
			$this->load->view('widget/header');
			$this->load->view('event_up', ['model'=>$this->model]);
			$this->load->view('widget/footer');
		}

	}

	public function update_status($id_event_up_st){

			$this->model->id_event = $id_event_up_st;			
			$this->model->update_status();
			redirect('event');
		

	}

	public function delete ($id_event_del){
		$this->model->id_event=$id_event_del;
		$this->model->delete();
		redirect('event/status');
	}

	public function delete_fix ($id_event_del_fix){
		$this->model->id_event=$id_event_del_fix;
		$this->model->delete_fix();
		redirect('event');
	}
}



?>