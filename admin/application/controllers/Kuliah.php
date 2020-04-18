<?php 
class Kuliah extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Kuliah_model');
		$this->model = $this->Kuliah_model;
		$this->load->database();
 		$this->load->helper(array('form', 'url'));
	}       
	
  public function kuliah()
  {
		$rows=$this->model->kuliah();
	  	$rows2=$this->model->kuliah2();
	  	$row=$this->model->read();
		$this->load->view('widget/header');
		$this->load->view('report_kuliah', ['rows'=>$rows, 'rows2'=>$rows2, 'row'=>$row]);
		$this->load->view('widget/footer');
  }

	
}
?>