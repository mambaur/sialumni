<?php 
 
class M_Profil extends CI_Model{
	function update_profil($id_user,$username,$pass_lama){
        $query = $this->db->query("UPDATE `tb_user` SET `username`='$username',`password`='$pass_lama',`level`='admin' WHERE `id_user`='$id_user'");
    }

    function cek_pass_lama($id_user,$pass_baru){
		$query = $this->db->query("SELECT * FROM tb_user WHERE id_user='$id_user' AND password='$pass_baru'");
		// return $query->result();
	}
}
?>