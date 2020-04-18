<?php
class Upload_Reuni extends CI_Controller{

	public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Upload_Reuni');
		$this->model = $this->M_Upload_Reuni;
		$this->load->database();
 		$this->load->helper(array('form', 'url'));
		$this->load->library('M_Upload_Reuni');
		if($this->session->userdata('status') != "login"){
			echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '".base_url('Login')."';
            </script>";//Url tujuan
		}
	}
	
	public function index(){
	    $data['title'] = 'Tambahkan acara reuni';
		$this->load->view('widget/header', $data);
		$this->read();
		$this->load->view('widget/footer');
	}

	public function create(){
	    $data['title'] = 'Tambahkan acara reuni';
		if(isset($_POST['btnSubmit'])){
		    $data = [
		        'id_event' => $this->M_Upload_Reuni->get_id(),
		        'judul_event' => $_POST['judul_event'],
		        'tanggal' => date('Y/m/d h:i:s a', time()),
		        'isi_event' => $_POST['isi_event'],
		        'kategori_event' => 'reuni',
		        'status_event' => 'diperiksa',
		        'gambar_event' => $this->M_Upload_Reuni->upload(),
		        'user_id_user' => $this->session->userdata('id_user')
		    ];
		    if($this->db->insert('tb_event', $data)){
		        echo "<script>
                    alert('Reuni berhasil di upload.');
                    window.location.href = '".base_url('Reuni')."';
                </script>"; 
		    }
		}else{
			$this->load->view('widget/header', $data);
         	$this->load->view('V_Upload_Reuni', ['model'=>$this->model]);
     		$this->load->view('widget/footer');
			
		}
	}
	
	public function read(){
		$rows=$this->model->read();
		$this->load->view('V_Upload_Reuni', ['rows'=>$rows]);
	}
public function update($id_reuni_up){
		if(isset($_POST['btnSubmit'])){
			$query=$this->db->query("SELECT * FROM tb_event WHERE id_event='$id_reuni_up'");
			$row=$query->row();
			$this->model->gambar_event=$row->gambar_event;
			$this->model->id_event = $_POST['id_event'];

			$this->model->judul_event = $_POST['judul_event'];
			$this->model->isi_event = $_POST['isi_event'];
			$this->model->kategori_event = $_POST['kategori_event'];
			$this->model->status_event = $_POST['status_event'];
		
	
			
			if(!empty($_FILES['gambar_event']['tmp_name'])){
				$this->model->gambar_event = $_FILES['gambar_event']['name'];
				$upload = $this->model->upload();  
				if($upload['result'] == "success"){ 
					$this->model->update();
					redirect('Reuni');
				}else{ // Jika proses upload gagal
					echo "<script> alert('Gagal mengunggah gambar'); </script>";
				}
			}else{
				$this->model->update();
				redirect('Reuni');
			}
			
		}else{
			$query=$this->db->query("SELECT * FROM tb_event WHERE nis='$id_reuni_up'");
			$row=$query->row();
			$this->model->id_event=$row->id_event;
			$this->model->judul_event=$row->judul_event;
			$this->model->isi_event=$row->isi_event;
			$this->model->kategori_event=$row->kategori_event;
			$this->model->status_event=$row->status_event;
			$this->model->gambar_event=$row->gambar_event;
			$this->model->user_id_user=$row->user_id_user;
			
			$this->load->view('widget/header');
			$this->load->view('reuni_up', ['model'=>$this->model]);
			$this->load->view('widget/footer');
		}

	}
	
}



?>