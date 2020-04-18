<?php 
 
class M_Loker extends CI_Model{
	function tampil_loker(){
		$query = $this->db->query("SELECT * FROM tb_event WHERE status_event='diterima' AND kategori_event='loker'");
		return $query->result();
	}

	function detail_loker($id){
		$query = $this->db->query("SELECT * FROM tb_event WHERE id_event='$id'");
		return $query->result();
	}
}
?>