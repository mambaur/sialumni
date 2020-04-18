<?php
class Model_Event extends CI_Model{
	public $id_event;
  public $id_admin;
	public $judul_event;
  public $tanggal;
	public $isi_event;
  public $kategori_event;
  public $status_event;
	public $gambar_event;
	public $user_id_user;
	public $data=array('message'=>"");

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

public function upload(){
    $config['upload_path'] = './images';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
  $config['overwrite'] = TRUE;
    $config['remove_space'] = TRUE;
    $this->upload->initialize($config);
    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('images')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

 public function save($upload){
    $data = array(
      'id_event'=> $this->id_event,
        'judul_event'=> $this->judul_event,
        'isi_event' => $this->isi_event,
        'kategori_event' => $this->kategori_event,
        'status_event' => $this->status_event,
        'gambar_event' => $upload['file']['file_name'],
        'user_id_user' => $this->user_id_user
      
    );
    $this->db->insert('tb_event', $data);
  }

 function get_id(){
    $this->db->select('RIGHT(tb_event.id_event, 4) as kode', FALSE);
    $this->db->order_by('id_event','DESC');    
    $this->db->limit(1);    
    $query = $this->db->get('tb_event');     
    if($query->num_rows() <> 0){      
  
     $data = $query->row();      
     $kode = intval($data->kode) + 1;    
    }
    else {      
     //jika kode belum ada      
     $kode = 1;    
    }
    $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); 
    $kodejadi = "EV".$kodemax;  
    return $kodejadi;
  }

public function update(){
  $sql=sprintf("UPDATE tb_event SET  judul_event='%s', isi_event='%s', kategori_event='%s', gambar_event='%s' WHERE id_event='%s'",
    $this->judul_event,
    $this->isi_event,
      $this->kategori_event,
    $this->gambar_event,
    $this->id_event);
  
  $this->db->query($sql);
}

public function update_status(){
  $sql=sprintf("UPDATE tb_event SET  status_event='diterima' WHERE id_event='%s'",
    $this->id_event);
  
  $this->db->query($sql);
}

public function read(){
	$sql= "SELECT * FROM tb_event JOIN tb_user WHERE tb_event.user_id_user=tb_user.id_user AND tb_event.status_event='diterima' ORDER BY id_event";
	$query = $this->db->query($sql);
	return $query->result();
}

public function loker(){
  $sql= "SELECT * FROM tb_event JOIN tb_user WHERE tb_event.user_id_user=tb_user.id_user AND tb_event.status_event='diterima' AND tb_event.kategori_event='loker' ORDER BY id_event";
  $query = $this->db->query($sql);
  return $query->result();
}

public function prestasi(){
  $sql= "SELECT * FROM tb_event JOIN tb_user WHERE tb_event.user_id_user=tb_user.id_user AND tb_event.status_event='diterima' AND tb_event.kategori_event='prestasi' ORDER BY id_event";
  $query = $this->db->query($sql);
  return $query->result();
}

public function info(){
  $sql= "SELECT * FROM tb_event JOIN tb_user WHERE tb_event.user_id_user=tb_user.id_user AND tb_event.status_event='diterima' AND tb_event.kategori_event='info' ORDER BY id_event";
  $query = $this->db->query($sql);
  return $query->result();
}

public function status(){
  $sql= "SELECT * FROM tb_event JOIN tb_user WHERE tb_event.user_id_user=tb_user.id_user AND tb_event.status_event='diperiksa' ORDER BY id_event";
  $query = $this->db->query($sql);
  return $query->result();
}

public function detail($id){
  $sql= "SELECT * FROM tb_event JOIN tb_user WHERE tb_event.user_id_user=tb_user.id_user AND tb_event.status_event='diperiksa' AND id_event='$id'";
  $query = $this->db->query($sql);
  return $query->result();
}

public function delete(){
	$sql=sprintf("DELETE FROM tb_event WHERE id_event='%s'", $this->id_event);
	$this->db->query($sql);
}

public function delete_fix(){
  $sql=sprintf("DELETE FROM tb_event WHERE id_event='%s'", $this->id_event);
  $this->db->query($sql);
}



}


?>