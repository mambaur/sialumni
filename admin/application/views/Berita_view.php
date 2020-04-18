<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID Berita</th>
              <th>Judul Berita</th>
              <th>Isi Berita</th>
              <th>Tgl Publish</th>
              <th>Gambar</th>
              <th>Penulis Berita</th>
              <?php if($_SESSION['user'] == "1") { ?>
              <th>Edit</th>
              <th>Hapus</th>
              <?php } ?>
            </tr>
          </thead>               
          <?php foreach($rows as $row){?>
            <tr>
              <td><?php echo $row->id_berita; ?></td>
              <td><?php echo $row->judul_berita; ?></td>
              <td><?php echo $row->isi_berita; ?></td>
              <td><?php echo $row->tgl_berita; ?></td>
               <td ><?php echo '<img src="'.base_url("images/".$row->gambar_berita).'" width="150" height="70">'; ?></td>
              <td><?php echo $row->penulis; ?></td>
              <?php if($_SESSION['user'] == "1") { ?>
              <td align="center"><a href="<?php echo base_url()?>berita/update/<?php echo $row->id_berita; ?>"><i class="fas fa-pencil-alt"></i></a></td>
              <td style="text-align: center; width: 50px"><a  style="color: #d63031" class="btn " data-toggle="modal" data-target="#modal_hapus<?php echo $row->id_berita;?>"><span class="fa fa-trash fa-lg"></span></a></td>
              <?php } ?>
            </tr>
          <div class="modal fade" id="modal_hapus<?php echo $row->id_berita;?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <b class="modal-tittle" id="myModalLabel"> HAPUS DATA</b>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url();?>berita/delete/<?php echo $row->id_berita;?>">
                  <div class="modal-body">
                    <p>Apakah Anda yakin menghapus Data?</p>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id_berita" value="<?php echo $row->id_berita;?>">
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
