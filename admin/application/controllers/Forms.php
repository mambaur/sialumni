<?php 
class Forms extends CI_Controller 
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();
		/*load database libray manually*/
		$this->load->database();
		$this->load->library('session');
		/*load Model*/
		$this->load->helper('url');
		$this->load->model('Form_model');
	}       
	
	public function change_pass()
	{
		if($this->input->post('change_pass'))
		{
			$old_pass=$this->input->post('old_pass');
			$new_pass=$this->input->post('new_pass');
			$confirm_pass=$this->input->post('confirm_pass');
			$session_id=$this->session->userdata('id_admin');
			$que=$this->db->query("select * from tb_user where id_user='$session_id'");
			$row=$que->row();
			if((!strcmp($old_pass, $row->password))&& (!strcmp($new_pass, $confirm_pass))){
				$this->Form_model->change_pass($session_id,$new_pass);
				echo "<script>
				alert('Berhasil');
				</script>";
				}
			    else{
					echo "Invalid";
				}
		}
		$this->load->view('widget/header');
		$this->load->view('change_pass');
		$this->load->view('widget/footer');	
	}
}
?>