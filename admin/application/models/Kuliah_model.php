<?php
class Kuliah_model extends CI_Model{
	public $kuliah;
	public $tkuliah;
	public $notif = "";
	public $id_admin;
	public $level;

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function kuliah(){
		$sql = sprintf("SELECT COUNT(tb_alumni.kuliah) AS kuliah FROM tb_alumni WHERE kuliah != NULL or kuliah != ''");
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function kuliah2(){
		$sql = sprintf("SELECT COUNT(tb_alumni.nis) AS nis FROM tb_alumni");
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function read(){
	$sql= "SELECT nis,nama_alumni,kuliah FROM tb_alumni WHERE kuliah != NULL or kuliah != ''";
	$query = $this->db->query($sql);
	return $query->result();
}


}
?>