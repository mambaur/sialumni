<?php
class User extends CI_Controller{

	public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->model = $this->user_model;

		$this->load->database();
		$this->load->library('session');
		$this->load->helper('url');

	}
	public function index(){
		$this->load->view('widget/header');
		$this->read();
		$this->load->view('widget/footer');
	}

	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->id_user = $this->model->get_id();
			$this->model->username = $_POST['username'];
			$this->model->password = $_POST['password'];
			$this->model->level = $_POST['level'];
			$this->model->nis = $_POST['nis'];
			
			if($this->model->cek()==TRUE){
			    $this->model->insert();
			    redirect('user');
			} else {
			    echo "<script>
                        alert('User Dengan NIS Tersebut Telah Ada');
                        window.location.href = '".base_url('User/create')."';
                     </script>";//Url tujuan
			}
		}else{
			$this->load->view('widget/header');
			$this->load->view('crud_create_view');
			$this->load->view('widget/footer');
		}
	}
	
	public function pilih(){
		$rows=$this->model->read1();
		$this->load->view('widget/header');
		$this->load->view('pilih_nis', ['rows'=>$rows]);
		$this->load->view('widget/footer');
	}
	
	public function read(){
		$rows=$this->model->read();
		$this->load->view('crud_read_view', ['rows'=>$rows]);
	}
	public function update($id_user_up){
		if(isset($_POST['btnSubmit'])){
			$this->model->id_user = $_POST['id_user'];
			$this->model->username = $_POST['username'];
			$this->model->password = $_POST['password'];
			$this->model->level = $_POST['level'];
			$this->model->update();
			redirect('user');
		}else{
			$query=$this->db->query("SELECT * FROM tb_user WHERE id_user='$id_user_up'");
			$row=$query->row();
			$this->model->id_user=$row->id_user;
			$this->model->username=$row->username;
			$this->model->password=$row->password;
			$this->model->level = $row->level;
			$this->load->view('widget/header');
			$this->load->view('crud_update_view', ['model'=>$this->model]);
			$this->load->view('widget/footer');
		}

	}

	public function delete ($id_user_del){
		$this->model->id_user=$id_user_del;
		$this->model->delete();
		redirect('user');
	}
	
}



?>