<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper(array('url'));
		if($this->session->userdata('status') != "login"){
			echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '".base_url('Login')."';
            </script>";//Url tujuan
		}
	}

	public function index(){
		$data['title'] = 'Selamat Datang di Web Alumni SMKN 1 Malang';
		$this->db->order_by("id_berita", "desc");
        $this->db->limit(3);
		$berita = $this->db->get('tb_berita');
		$data['berita'] = $berita->result();
		
		$this->db->order_by("id_prestasi", "desc");
        $this->db->limit(3);
        $prestasi = $this->db->get('tb_prestasi');
		$data['prestasi'] = $prestasi->result();
		
		$this->db->order_by("id_event", "desc");
        $this->db->limit(3);
        $loker = $this->db->get_where('tb_event', ['kategori_event' => 'loker', 'status_event' => 'diterima']);
		$data['loker'] = $loker->result();

		$this->load->view('widget/header', $data);
		$this->load->view('Welcome_message', $data);
		$this->load->view('widget/footer');
	}
}
