<?php
class ModelAdmin extends CI_Model{
	public $username;
	public $password;
	public $notif = "";
	public $id_admin;
	public $level;

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function cek_log(){
		$sql = sprintf("SELECT COUNT(*) AS user, id_user, username, level FROM tb_user WHERE username = '%s' AND password='%s'",
			$this->username,
			$this->password);
			$query = $this->db->query($sql);
			$row = $query->row_array();
			$this->id_admin = $row['id_user'];
			$this->username = $row['username'];
			$this->level 	= $row['level'];
			return $row['user'] == 1;
	}

}
?>