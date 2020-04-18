<?php
class Upload_prestasi extends CI_Controller{

	public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Upload_prestasi');
		$this->model = $this->M_Upload_prestasi;
		$this->load->database();
 		$this->load->helper(array('form', 'url'));
		$this->load->library('M_Upload_prestasi');
	}
	
	public function index(){
		$data['title'] = 'Upload Prestasi';
		$this->load->view('widget/header', $data);
		$this->read();
		$this->load->view('widget/footer');
	}

	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->nis		= $this->session->userdata('nis');
			$this->model->prestasi		= $_POST['prestasi'];
			$this->model->thn_prestasi 		= $_POST['thn_prestasi'];
			$this->model->tingkat_prestasi	= $_POST['tingkat_prestasi'];
			$this->model->juara_prestasi 		= $_POST['juara_prestasi'];
			

			$upload =  $this->model->upload();
			if($upload['result'] == "success"){ 
	        	$this->M_Upload_prestasi->save($upload);
	        	echo "<script>
                    alert('Prestasi berhasil di upload.');
                    window.location.href = '".base_url('Prestasi')."';
                </script>";
        //         $this->session->set_flashdata('message', 'Prestasi berhasil diupload!');
		      //  redirect('Prestasi');
	         }else{ // Jika proses upload gagal
    	         echo "<script>
                        alert('Prestasi gagal di upload.');
                        window.location.href = '".base_url('Prestasi')."';
                    </script>";
	        	$this->load->view('widget/header');
	        	$this->load->view('V_Upload_prestasi', ['model'=>$this->model]);
	        	$this->load->view('widget/footer');
	      	}	
		}else{
			$this->model->nis = $this->model->get_id();
			$this->load->view('widget/header');
         	$this->load->view('V_Upload_prestasi', ['model'=>$this->model]);
     		$this->load->view('widget/footer');
			
		}
	}
	
	public function read(){
		$rows=$this->model->read();
		$this->load->view('V_Upload_prestasi', ['rows'=>$rows]);
	}
public function update($id_prestasi_up){
		if(isset($_POST['btnSubmit'])){
			$query=$this->db->query("SELECT * FROM tb_prestasi WHERE nis='$id_prestasi_up'");
			$row=$query->row();
			$this->model->gambar_prestasi=$row->gambar_prestasi;
			$this->model->nis = $_POST['nis'];

			$this->model->prestasi = $_POST['prestasi'];
			$this->model->thn_prestasi = $_POST['thn_prestasi'];
			$this->model->tingkat_prestasi = $_POST['tingkat_prestasi'];
			$this->model->juara_prestasi = $_POST['juara_prestasi'];
			$this->model->gambar_prestasi = $_POST['gambar_prestasi'];
	
			
			if(!empty($_FILES['gambar_prestasi']['tmp_name'])){
				$this->model->gambar_prestasi = $_FILES['gambar_prestasi']['name'];
				$upload = $this->model->upload();  
				if($upload['result'] == "success"){ 
					$this->model->update();
					redirect('Prestasi');
				}else{ // Jika proses upload gagal
					echo "<script> alert('Gagal mengunggah gambar'); </script>";
				}
			}else{
				$this->model->update();
				redirect('Prestasi');
			}
			
		}else{
			$query=$this->db->query("SELECT * FROM tb_prestasi WHERE nis='$id_prestasi_up'");
			$row=$query->row();
			$this->model->nis=$row->nis;
			$this->model->prestasi=$row->prestasi;
			$this->model->thn_prestasi=$row->thn_prestasi;
			$this->model->tingkat_prestasi=$row->tingkat_prestasi;
			$this->model->juara_prestasi=$row->juara_prestasi;
			$this->model->gambar_prestasi=$row->gambar_prestasi;
			
			$this->load->view('widget/header');
			$this->load->view('prestasi_up', ['model'=>$this->model]);
			$this->load->view('widget/footer');
		}

	}
	
}



?>