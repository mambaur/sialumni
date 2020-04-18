<?php
class M_Upload_Reuni extends CI_Model{
	public $id_event;
	public $judul_event;
	public $isi_event;
	public $kategori_event;
	public $status_event;
	public $gambar_event;
  public $user_id_user;
	public $data=array('message'=>"");

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('upload');
	}

public function upload(){
    $config['upload_path'] 			= '../admin/images';
    $config['allowed_types']        = 'jpeg|jpg|png';
    $config['overwrite']			= TRUE;
  	$config['remove_space'] 		= TRUE;
	 $this->upload->initialize($config);
	$this->load->library('upload', $config);
	
    if($this->upload->do_upload('gambar_event')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      return $this->upload->data('file_name');
    }else{
      // Jika gagal :
      return $this->upload->display_errors();
    }
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
  $sql=sprintf("UPDATE tb_event SET  judul_event='%s', isi_event='%s', kategori_event='%s', status_event='%s', gambar_event='%s' WHERE id_event='%s'",
    $this->judul_event,
    $this->isi_event,
    $this->kategori_event,
    $this->status_event,
    $this->gambar_event,
    $this->id_event);
  
  $this->db->query($sql);
}
  
public function read(){
	$sql= "SELECT * FROM tb_event ORDER BY id_event";
	$query = $this->db->query($sql);
	return $query->result();
}

public function delete(){
	$sql=sprintf("DELETE FROM tb_event WHERE id_event='%s'", $this->id_event);
	$this->db->query($sql);
}

}


?>