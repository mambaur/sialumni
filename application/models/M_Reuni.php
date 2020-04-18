<?php 
 
class M_Reuni extends CI_Model{
	function tampil_reuni(){
		$query = $this->db->query("SELECT * FROM tb_event JOIN tb_user ON tb_event.user_id_user=tb_user.id_user WHERE kategori_event='reuni' AND status_event='diterima'");
		return $query->result();
	}

	function detail_reuni($id){
		$query = $this->db->query("SELECT * FROM tb_event WHERE id_event='$id'");
		return $query->result();
	}
}
?>