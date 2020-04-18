<?php
class M_Upload_prestasi extends CI_Model{
	public $nis;
	public $prestasi;
	public $thn_prestasi;
	public $tingkat_prestasi;
	public $juara_prestasi;
	public $gambar_prestasi;
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
    $config['upload_path'] 			= '../admin/images/';
    $config['allowed_types']        = 'jpeg|jpg|png';
    $config['overwrite']			= TRUE;
  	$config['remove_space'] 		= TRUE;
	 $this->upload->initialize($config);
	$this->load->library('upload', $config);
	
    if($this->upload->do_upload('gambar_prestasi')){ // Lakukan upload dan Cek jika proses upload berhasil
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
    	'nis'=> $this->nis,
        'prestasi'=> $this->prestasi,
        'thn_prestasi' => $this->thn_prestasi,
        'tingkat_prestasi' => $this->tingkat_prestasi,
        'juara_prestasi' => $this->juara_prestasi,
        'gambar_prestasi' => $upload['file']['file_name']
        );
	 // var_dump($this->upload());
    $this->db->insert('tb_prestasi', $data);
  }
  

public function update(){
  $sql=sprintf("UPDATE tb_prestasi SET  prestasi='%s', thn_prestasi='%s', tingkat_prestasi='%s', juara_prestasi='%s', gambar_prestasi='%s' WHERE nis='%s'",
    $this->prestasi,
    $this->thn_prestasi,
    $this->tingkat_prestasi,
    $this->juara_prestasi,
    $this->gambar_prestasi);
  
  $this->db->query($sql);
}
  
public function read(){
	$sql= "SELECT * FROM tb_prestasi ORDER BY nis";
	$query = $this->db->query($sql);
	return $query->result();
}

public function delete(){
	$sql=sprintf("DELETE FROM tb_prestasi WHERE nis='%s'", $this->nis);
	$this->db->query($sql);
}

}


?>