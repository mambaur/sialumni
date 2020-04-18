<?php
class Beranda_model extends CI_Model{
	public $kerja;
	public $tkerja;
	public $notif = "";
	public $id_admin;
	public $level;

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}	
	
	public function tahun(){
		$sql = sprintf("SELECT COUNT(tahun_keluar) AS keluar, tahun_keluar FROM tb_alumni GROUP BY tahun_keluar");
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	
}
?>