<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loker extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->model('M_Loker');	
		if($this->session->userdata('status') == "login"){
     		redirect('user/Welcome','refresh');
    	}
	}

	public function index(){
	    $this->read();
	}

	public function read(){
		$data['title'] = 'Lowongan Pekerjaan';
		
		
		//pagination
		$jumlah_data =  $this->db->get_where('tb_event', ['kategori_event' => 'loker', 'status_event' => 'diterima'])->num_rows();
		$config['base_url'] = base_url().'Loker/read/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 6;

		// Membuat Style pagination untuk BootStrap v4
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

		$from = $this->uri->segment(3);

		$this->pagination->initialize($config);
        
        $this->db->where('status_event', 'diterima');
        $this->db->where('kategori_event', 'loker');
		$this->db->order_by('id_event', 'desc');
		$data['data'] = $this->db->get('tb_event',$config['per_page'],$from)->result();
		
		
		$this->load->view('widget/header', $data);
		$this->load->view('V_Loker',$data);
		$this->load->view('widget/footer');
		$this->load->view('widget/footer');
	}

	public function detail($id){
		$data['title'] = 'Detail Lowongan Pekerjaan';
		$data['data'] = $this->M_Loker->detail_loker($id);
		$this->load->view('widget/header', $data);
		$this->load->view('V_LokerDetail',$data);
		$this->load->view('widget/footer');
	}
}
