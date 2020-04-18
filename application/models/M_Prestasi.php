<?php 
 
class M_Prestasi extends CI_Model{
	function tampil_prestasi(){
		$query = $this->db->query("SELECT * FROM tb_prestasi JOIN tb_alumni ON tb_alumni.nis=tb_prestasi.nis JOIN tb_user ON tb_alumni.nis=tb_user.nis");
		return $query->result();
	}

	function detail_prestasi($id){
		$query = $this->db->query("SELECT * FROM tb_prestasi WHERE id_prestasi='$id'");
		return $query->result();
	}

	function search($keyword){
		$query = $this->db->query("SELECT * FROM tb_prestasi JOIN tb_alumni ON tb_alumni.nis=tb_prestasi.nis WHERE tb_prestasi.nis LIKE '%$keyword%' OR nama_alumni LIKE '%$keyword%' OR prestasi LIKE '%$keyword%'");
		return $query->result();
	}
}
?>