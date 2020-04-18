<?php
class User_model extends CI_Model{
	public $id_user;
	public $username;
	public $password;
	public $level;
	public $nis;

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

public function insert (){
	$sql = sprintf("INSERT INTO tb_user VALUES ('%s','%s','%s','%s', '%s')",
			$this->id_user,
			$this->username,
			$this->password,
			$this->level,
			$this->nis);
	$this->db->query($sql);
}
public function update(){
	$sql=sprintf("UPDATE tb_user SET  username='%s', password='%s', level='%s' WHERE id_user='%s'",
		$this->username,
		$this->password,
		$this->level,
		$this->id_user);
	
	$this->db->query($sql);
}

function get_id(){
    $this->db->select('RIGHT(tb_user.id_user, 4) as kode', FALSE);
    $this->db->order_by('id_user','DESC');    
    $this->db->limit(1);    
    $query = $this->db->get('tb_user');     
    if($query->num_rows() <> 0){      
  
     $data = $query->row();      
     $kode = intval($data->kode) + 1;    
    }
    else {      
     //jika kode belum ada      
     $kode = 1;    
    }
    $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); 
    $kodejadi = "US".$kodemax;  
    return $kodejadi;
  }

public function read(){
	$sql= "SELECT * FROM tb_user ORDER BY id_user";
	$query = $this->db->query($sql);
	return $query->result();
}
	
public function read1(){
	$sql= "SELECT *, IF(LENGTH(SUBSTR(nama_alumni,1, INSTR(nama_alumni, ' ')-1))>0, SUBSTR(nama_alumni,1, INSTR(nama_alumni, ' ')-1), nama_alumni) as username FROM tb_alumni WHERE nis NOT IN(SELECT nis FROM tb_user) ORDER BY nis";
	$query = $this->db->query($sql);
	return $query->result();
}


public function delete(){
	$sql=sprintf("DELETE FROM tb_user WHERE id_user='%s'", $this->id_user);
	$this->db->query($sql);
}

public function cek(){
	$sql= sprintf("SELECT COUNT(*) as nis FROM tb_user WHERE nis = '%s'",
	      $this->nis);
	$query = $this->db->query($sql);
	$row = $query->row_array();
	return $row['nis'] == 0;
}

}


?>