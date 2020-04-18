<?php 
 
class M_Alumni extends CI_Model{
	function tampil_alumni(){
		return $this->db->get('tb_alumni')->result();
	}

	function search($keyword){
		$query = $this->db->query("SELECT * FROM tb_alumni WHERE nis LIKE '%$keyword%' OR nama_alumni LIKE '%$keyword%'");
		return $query->result();
	}
}
?>