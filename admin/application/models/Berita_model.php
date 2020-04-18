<?php
class Berita_model extends CI_Model{
	public $id_berita;
	public $judul_berita;
	public $isi_berita;
	public $tgl_berita;
	public $gambar_berita;
	public $penulis;
	public $data=array('message'=>"");

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('upload');
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
    	'id_berita'=> $this->id_berita,
        'judul_berita'=> $this->judul_berita,
        'isi_berita' => $this->isi_berita,
        'gambar_berita' => $upload['file']['file_name'],
        'penulis' => $this->penulis
      
    );
    $this->db->insert('tb_berita', $data);
  }

 function get_id(){
    $this->db->select('RIGHT(tb_berita.id_berita, 4) as kode', FALSE);
    $this->db->order_by('id_berita','DESC');    
    $this->db->limit(1);    
    $query = $this->db->get('tb_berita');     
    if($query->num_rows() <> 0){      
  
     $data = $query->row();      
     $kode = intval($data->kode) + 1;    
    }
    else {      
     //jika kode belum ada      
     $kode = 1;    
    }
    $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); 
    $kodejadi = "BR".$kodemax;  
    return $kodejadi;
  }
	
public function update(){
	$sql=sprintf("UPDATE tb_berita SET  judul_berita='%s', isi_berita='%s', penulis='%s', gambar_berita='%s' WHERE id_berita='%s'",
		$this->judul_berita,
		$this->isi_berita,
    	$this->penulis,
		$this->gambar_berita,
		$this->id_berita);
	
	$this->db->query($sql);
}
	
public function read(){
	$sql= "SELECT * FROM tb_berita ORDER BY id_berita";
	$query = $this->db->query($sql);
	return $query->result();
}

public function delete(){
	$sql=sprintf("DELETE FROM tb_berita WHERE id_berita='%s'", $this->id_berita);
	$this->db->query($sql);
}

}


?>