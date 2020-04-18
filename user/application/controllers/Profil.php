<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->model('M_Profil');	
		$this->load->helper(array('url'));
		if($this->session->userdata('status') != "login"){
			echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '".base_url('Login')."';
            </script>";//Url tujuan
		}
	}

	public function index(){
		$data['title'] = 'Profil Saya';
		$data['user'] = $this->db->get_where('tb_user', ['id_user' => $this->session->userdata('id_user')])->row_array();
		$this->load->view('widget/header', $data);
		$this->load->view('V_Profil', $data);
		$this->load->view('widget/footer');
	}

	public function update_profil(){
		$id_user = $this->session->userdata('id_user');
		$username = $this->input->post('username');
		$pass_lama = $this->input->post('pass_lama');
		$pass_baru = $this->input->post('pass_baru');
		// $cek_pass = $this->M_Profil->cek_pass_lama($id_user,$pass_lama)->num_rows();
		$cek_pass = $this->db->query("SELECT * FROM tb_user WHERE id_user='$id_user' AND password='$pass_lama'")->num_rows();
		if ($cek_pass<1) {
			echo "<script>
                alert('Mohon maaf password lama anda salah!');
                window.location.href = '".base_url('Profil')."';
            </script>";//Url tujuan
		}else{
			$update = $this->M_Profil->update_profil($id_user,$pass_baru);
			echo "<script>
                alert('Update data berhasil, silahkan anda masuk ulang dengan akun baru anda!');
                window.location.href = '".base_url('Logout')."';
            </script>";//Url tujuan
		}
	}

	public function my_profil(){
		$data['title'] = 'Data Akun Saya';
		$data['alumni'] = $this->db->get_where('tb_alumni', ['nis' => $this->session->userdata('nis')])->row_Array();
		$data['pekerjaan'] = $this->db->get_where('tb_pekerjaan', ['nis' => $this->session->userdata('nis')])->result();
		$data['org'] = $this->db->get_where('tb_organisasi', ['nis' => $this->session->userdata('nis')])->result();

		$this->load->view('widget/header', $data);
		$this->load->view('V_Myprofil',$data);
		$this->load->view('widget/footer');
	}

	public function tambah_alumni(){

		$data['a'] = $this->db->get_where('tb_alumni', ['nis' => $this->session->userdata('nis')])->row_array();
		//Upload gambar
			$upload_image = $_FILES['gambar']['name'];
			//cek jika ada gambar yang akan diupload
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '2048'; // max ukuran 2MB
				$config['upload_path'] = '../admin/images/';

				$this->load->library('upload', $config);

				// $this->upload->do_upload('gambar');
				if ($this->upload->do_upload('gambar')) {
				    // Menghapus gambar lama agar tidak memenuhi memori
					$old_image = $data['a']['foto'];
					if ($old_image != 'user.png') {
						unlink('../admin/images/' . $old_image);
					}

                    $new_image = $this->upload->data('file_name');
                    $this->db->where('nis', $this->session->userdata('nis'));
					$this->db->update('tb_alumni',['foto' => $new_image]);
				}else{
					echo $this->upload->display_errors();
				}
			}else{
			    'Upload gagal';
			}

		$data = [
			'nama_alumni' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jk' => $this->input->post('jk'),
			'alamat_awal' => $this->input->post('alamat_awal'),
			'alamat_skr' => $this->input->post('alamat_skr'),
			'tahun_masuk' => $this->input->post('tahun_masuk'),
			'tahun_keluar' => $this->input->post('tahun_keluar'),
			'kuliah' => $this->input->post('kuliah'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'no_telp' => $this->input->post('no_telp'),
			'agama' => $this->input->post('agama'),
			'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
			'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
			'jurusan' => $this->input->post('jurusan'),
			'nama_wali' => $this->input->post('nama_wali'),
			'pekerjaan_wali' => $this->input->post('pekerjaan_wali')
		];

		
		$this->db->where('nis', $this->session->userdata('nis'));
		$this->db->update('tb_alumni', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diperbarui!</div>');
		redirect('Profil/my_profil');
	}

	public function tambah_pekerjaan(){
	    $no=1;

	    $data = [
	    	'id_pekerjaan' => '',
	    	'nis' => $this->session->userdata('nis'),
	    	'deskripsi' => $this->input->get('pekerjaan'),
	    	'jabatan_pekerjaan' => $this->input->get('jabatan'),
	    	'tahun_pekerjaan' => $this->input->get('thn'),
	    	'bidang'=> $this->input->get('bidang'),
	    	'alamat' => $this->input->get('alamat_kerja')
	    ];

	    if ($this->db->insert('tb_pekerjaan', $data)) {
	    	echo '<div class="alert alert-success" role="alert">Data pekerjaan berhasil ditambahkan!</div>';
	    }else{
	    	echo "gagal";
	    }
	    

	    $data['alumni'] = $this->db->get_where('tb_pekerjaan', ['nis' => $this->session->userdata('nis')])->result();

	    echo 			'<div class="progress-table-wrap">
	    					<div class="progress-table">
                              <div class="table-head">
                                <div class="serial">#</div>
                                <div class="visit">Deskripsi</div>
                                <div class="visit">Jabatan</div>
                                <div class="visit">Tahun pekerjaan</div>
                                <div class="visit">Bidang</div>
                                <div class="visit">Alamat</div>
                                <div class="visit"></div>
                              </div>';
                            foreach ($data['alumni'] as $a) {
        echo 				   '<div class="table-row">
                            <div class="serial">'.$no++.'</div>
                                <div class="visit">'.$a->deskripsi.'</div>
                                <div class="visit">'.$a->jabatan_pekerjaan.'</div>
                                <div class="visit">'.$a->tahun_pekerjaan.'</div>
                                <div class="visit">'.$a->bidang.'</div>
                                <div class="visit">'.$a->alamat.'</div>
                                <div class="visit"><a href="'. base_url('Profil/hapusPekerjaan?id=' . $a->id_pekerjaan) .'" class="badge badge-danger tombol-hapus">Hapus</a></div>
                              </div>';
                              }
        echo 				'</div>
        				</div>';
	}
	
	public function hapusPekerjaan(){
	    $id = $this->input->get('id');
	    $this->db->delete('tb_pekerjaan', ['id_pekerjaan' => $id]);
	    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pekerjaan berhasil dihapus!</div>');
		redirect('Profil/my_profil');
	}
	
	public function tambah_org(){
	    $data = [
	            'id_organisasi' => '',
	            'nis' => $this->session->userdata('nis'),
	            'nama_org' => $this->input->post('nama_org'),
	            'tahun' => $this->input->post('tahun_org'),
	            'jabatan' => $this->input->post('jabatan_org')
	        ];
	   if($this->db->insert('tb_organisasi', $data)){
	       $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Organisasi berhasil ditambahkan.</div>');
			redirect('Profil/my_profil');
	   }
	}
	
	public function hapusOrg(){
	    $this->db->delete('tb_organisasi', ['id_organisasi' => $this->input->get('id')]);
	    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Organisasi berhasil dihapus.</div>');
		redirect('Profil/my_profil');
	}
}
