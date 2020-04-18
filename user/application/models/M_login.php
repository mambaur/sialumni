<?php 
 
class M_login extends CI_Model{	

function cek_login($table,$where){    
    return $this->db->get_where($table,$where);
  }
function iduser($username){
    $query = $this->db->query("SELECT * FROM tb_user JOIN tb_alumni ON tb_user.nis=tb_alumni.nis WHERE username='$username'");
    return $query->result();
  }
}
