<?php 
 
class M_Berita extends CI_Model{
	function tampil_berita(){
		$query = $this->db->query("SELECT * FROM tb_berita");
		return $query->result();
	}

	function detail_berita($id){
		$query = $this->db->query("SELECT * FROM tb_berita WHERE id_berita='$id'");
		return $query->result();
	}
}
?>