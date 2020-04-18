<?php
class Form_model extends CI_Model 
{
	function fetch_pass($session_id)
	{
	$fetch_pass=$this->db->query("select * from tb_user where id_user='$session_id'");
	$res=$fetch_pass->result();
	}
	function change_pass($session_id,$new_pass)
	{
	$update_pass=$this->db->query("UPDATE tb_user set password='$new_pass'  where id_user='$session_id'");
	
	}
}