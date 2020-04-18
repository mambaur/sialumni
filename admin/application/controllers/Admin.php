<?php

class Admin extends CI_Controller{
    
    public $model = NULL;

    public function __construct(){
        parent::__construct();
        $this->load->model('ModelAdmin');
        $this->model = $this->ModelAdmin;

        $this->load->library('session');
        $this->load->helper('url');
    
    }


    public function index(){
        if(isset($_POST['login'])){
            $this->model->username = $_POST['username'];
            $this->model->password = ($_POST['password']);
            if ($this->model->cek_log()==TRUE) {
                $this->session->set_userdata('user', $this->model->level);
                $this->session->set_userdata('id_admin', $this->model->id_admin);
				$this->session->set_userdata('username', $this->model->username);
                redirect('Beranda');
            }
            else{
                $this->model->notif = "Username dan Password Salah !!!";
                $this->load->view('admin', ['model'=>$this->model]);
                
            }
        }else{
            $this->load->view('admin', ['model'=>$this->model]);
        }
    }


    public function logout(){
            // $this->session->sess_destroy();
            $this->session->unset_userdata('user');
            $this->session->unset_userdata('id_admin');
            $this->session->unset_userdata('username');
            redirect('Admin');
    }

   
}
?>
