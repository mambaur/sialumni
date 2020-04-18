<?php
class Report_model extends CI_Model{
	public $kerja;
	public $tkerja;
	public $notif = "";
	public $id_admin;
	public $level;

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function pekerjaan(){
		$sql = sprintf("SELECT COUNT(DISTINCT tb_pekerjaan.nis) AS kerja, COUNT(DISTINCT tb_alumni.nis) AS nis FROM tb_alumni LEFT JOIN tb_pekerjaan ON tb_pekerjaan.nis=tb_alumni.nis");
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function read(){
	$sql= "SELECT tb_alumni.nis,tb_alumni.nama_alumni,GROUP_CONCAT(tb_pekerjaan.deskripsi) AS deskripsi FROM tb_alumni JOIN tb_pekerjaan WHERE tb_alumni.nis=tb_pekerjaan.nis GROUP BY tb_alumni.nis";
	$query = $this->db->query($sql);
	return $query->result();
}


}
?>