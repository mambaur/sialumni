<?php
class Alumni_Model extends CI_Model{
	public $nis;
	public $nama_alumni;
	public $tempat_lahir;
	public $tgl_lahir;
	public $jk;
	public $alamat_awal;
	public $alamat_skr;
	public $tahun_masuk;
	public $tahun_keluar;
	public $kuliah = NULL;
	public $nama_ayah;
	public $nama_ibu;
	public $no_telp;
	public $agama;
	public $pekerjaan_ayah;
	public $pekerjaan_ibu;
	public $jurusan;
	public $nama_wali;
	public $pekerjaan_wali;
	public $foto;
	public $user_id_user;
	
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
    if($this->upload->do_upload('foto')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }
	
	public function insert ($upload){
		$sql = sprintf("INSERT INTO tb_alumni VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
		$this->nis,
		$this->nama_alumni,
		$this->tempat_lahir,
		$this->tgl_lahir,
		$this->jk,
		$this->alamat_awal,
		$this->alamat_skr,
		$this->tahun_masuk,
		$this->tahun_keluar,
		$this->kuliah,
		$this->nama_ayah,
		$this->nama_ibu,
		$this->no_telp,
		$this->agama,
		$this->pekerjaan_ayah,
		$this->pekerjaan_ibu,
		$this->jurusan,
		$this->nama_wali,
		$this->pekerjaan_wali,
		$upload['file']['file_name']);
		$this->db->query($sql);
	}
	
	public function update(){
		$sql=sprintf("UPDATE tb_alumni SET nama_alumni='%s', tempat_lahir='%s', tgl_lahir='%s', jk='%s', alamat_awal='%s', alamat_skr='%s', tahun_masuk='%s', tahun_keluar='%s', kuliah='%s', nama_ayah='%s', nama_ibu='%s', no_telp='%s', agama='%s', pekerjaan_ayah='%s', pekerjaan_ibu='%s', jurusan='%s', nama_wali='%s', pekerjaan_wali='%s', foto='%s' WHERE nis='%s'",
		$this->nama_alumni,
		$this->tempat_lahir,
		$this->tgl_lahir,
		$this->jk,
		$this->alamat_awal,
		$this->alamat_skr,
		$this->tahun_masuk,
		$this->tahun_keluar,
		$this->kuliah,
		$this->nama_ayah,
		$this->nama_ibu,
		$this->no_telp,
		$this->agama,
		$this->pekerjaan_ayah,
		$this->pekerjaan_ibu,
		$this->jurusan,
		$this->nama_wali,
		$this->pekerjaan_wali,
		$this->foto,
		$this->nis);
		$this->db->query($sql);
	}

	public function read(){
		$sql= "SELECT * FROM tb_alumni ORDER BY nis";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function add_pekerjaan(){
		$sql = sprintf("INSERT INTO tb_pekerjaan VALUES ('','%s','%s','%s','%s','%s','%s')",
		$_POST['nis'],
		$_POST['deskripsi'],
		$_POST['jabatan'],
		$_POST['tahun'],
		$_POST['bidang'],
		$_POST['alamat']);
		$this->db->query($sql);
	}
	
	public function add_prestasi(){
		$sql = sprintf("INSERT INTO tb_prestasi VALUES ('','%s','%s','%s','%s','%s')",
		$_POST['nis'],
		$_POST['prestasi'],
		$_POST['tahun'],
		$_POST['tingkat'],
		$_POST['juara']);
		$this->db->query($sql);
	}
	
	public function add_organisasi(){
		$sql = sprintf("INSERT INTO tb_organisasi VALUES ('','%s','%s','%s','%s')",
		$_POST['nis'],
		$_POST['nama'],
		$_POST['tahun'],
		$_POST['jabatan']);
		$this->db->query($sql);
	}
	
	public function edit_pekerjaan(){
		$sql = sprintf("UPDATE tb_pekerjaan SET deskripsi='%s', jabatan_pekerjaan='%s', tahun_pekerjaan='%s', bidang='%s', alamat='%s' WHERE nis='%s'",
		$_POST['deskripsi'],
		$_POST['jabatan'],
		$_POST['tahun'],
		$_POST['bidang'],
		$_POST['alamat'],
		$_POST['nis']);
		$this->db->query($sql);
	}
	
	public function edit_prestasi(){
		$sql = sprintf("UPDATE tb_prestasi SET prestasi='%s', thn_prestasi='%s', tingkat_prestasi='%s', juara_prestasi='%s' WHERE nis='%s'",
		$_POST['prestasi'],
		$_POST['tahun'],
		$_POST['tingkat'],
		$_POST['juara'],
		$_POST['nis']);
		$this->db->query($sql);
	}
	
	public function edit_organisasi(){
		$sql = sprintf("UPDATE tb_organisasi SET nama_org='%s', tahun='%s', jabatan='%s' WHERE nis='%s'",
		$_POST['nama'],
		$_POST['tahun'],
		$_POST['jabatan'],
		$_POST['nis']);
		$this->db->query($sql);
	}	
	
	public function hapus_pekerjaan($nis){
		$sql=sprintf("DELETE FROM tb_pekerjaan WHERE id_pekerjaan='%s'", $nis);
		$this->db->query($sql);
	}
	
	public function hapus_prestasi($nis){
		$sql=sprintf("DELETE FROM tb_prestasi WHERE id_prestasi='%s'", $nis);
		$this->db->query($sql);
	}
	
	public function hapus_organisasi($nis){
		$sql=sprintf("DELETE FROM tb_organisasi WHERE id_organisasi='%s'", $nis);
		$this->db->query($sql);
	}

}
?>