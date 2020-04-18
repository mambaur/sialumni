<?php 
class Report extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Report_model');
		$this->model = $this->Report_model;
		$this->load->database();
 		$this->load->helper(array('form', 'url'));
	}       
	
  public function pekerjaan()
  {
		$rows=$this->model->pekerjaan();
	  	$row=$this->model->read();
		$this->load->view('widget/header');
		$this->load->view('report_pekerjaan', ['rows'=>$rows, 'row'=>$row]);
		$this->load->view('widget/footer');
  }
	
	public function read()
  {

		$this->load->view('widget/header');
		$this->load->view('report_pekerjaan', ['rows'=>$rows]);
		$this->load->view('widget/footer');
  }
	
}
?>