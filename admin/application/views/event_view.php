<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Acara</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
		  <table>
       	  <tr>
			  <td> <label>Kategori </label></td>
			<td> <select id="company" name="company" class="form-control form-control-user" 	onchange="this.options[this.selectedIndex].value.indexOf('')!=-1 && 
				 (window.location = this.options[this.selectedIndex].value);">
				 <option <?php if($this->uri->segment(3) == "Semua" ) {echo 'selected' ;} ?> value="<?php echo base_url()?>Event/read/Semua">Semua</option>
				 <option <?php if($this->uri->segment(3) == "loker" ) {echo 'selected' ;} ?> value="<?php echo base_url()?>Event/read/loker">Lowongan Pekerjaan</option>
				 <option <?php if($this->uri->segment(3) == "prestasi" ) {echo 'selected' ;} ?> value="<?php echo base_url()?>Event/read/prestasi">Prestasi Sekolah</option>
				 <option <?php if($this->uri->segment(3) == "info" ) {echo 'selected' ;} ?> value="<?php echo base_url()?>Event/read/info">Info Perkuliahan</option>
				</select></td>
		  </tr>
		  </table>
		  <br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

          <thead>
            <tr>
              <th>ID </th>
              <th>Judul </th>
              <th>Tanggal </th>
              <th >Deskripsi</th>
              <th>Kategori </th>
              <th>Gambar</th>
              <th>Penulis </th>
              <?php if($_SESSION['user'] == "1") { ?>
              <th>Edit</th>
              <th>Hapus</th>
              <?php } ?>
            </tr>
          </thead>               
          <?php foreach($rows as $row){?>
            <tr>
              <td><?php echo $row->id_event; ?></td>
              <td><?php echo $row->judul_event; ?></td>
              <td><?php echo $row->tanggal; ?></td>
              <td style="text-align: justify;"><?php echo $row->isi_event; ?></td>
              <td><?php echo $row->kategori_event; ?></td>
               <td ><?php echo '<img src="'.base_url("./images/".$row->gambar_event).'" width="150" height="70">'; ?></td>
              <td><?php echo $row->username; ?></td>
              <?php if($_SESSION['user'] == "1") { ?>
              <td align="center"><a href="<?php echo base_url()?>event/update/<?php echo $row->id_event; ?>"><i class="fas fa-pencil-alt"></i></a></td>
              <td style="text-align: center; width: 50px"><a  style="color: #d63031" class="btn " data-toggle="modal" data-target="#modal_hapus<?php echo $row->id_event;?>"><span class="fa fa-trash fa-lg"></span></a></td>
            <?php } ?>
            </tr>
          <div class="modal fade" id="modal_hapus<?php echo $row->id_event;?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <b class="modal-tittle" id="myModalLabel"> HAPUS DATA</b>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url();?>event/delete_fix/<?php echo $row->id_event;?>">
                  <div class="modal-body">
                    <p>Apakah Anda yakin menghapus Data?</p>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id_berita" value="<?php echo $row->id_event;?>">
                    <button class="btn btn-danger" data-dismiss="modal" area-hidden="true">Batal</button>
                    <button class="btn btn-primary"> Hapus</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <?php
}
?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
