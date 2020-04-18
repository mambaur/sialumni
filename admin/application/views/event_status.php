<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Konfirmasi Acara</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
       
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

          <thead>
            <tr>
              <th>ID </th>
              <th>Judul </th>
              <th>Tanggal </th>
              <th>Deskripsi</th>
              <th>Kategori </th>
              <th>Gambar</th>
              <th>Penulis </th>
              <th>Detail</th>
              <th>Tolak</th>
            </tr>
          </thead>               
          <?php foreach($rows as $row){?>
            <tr>
              <td><?php echo $row->id_event; ?></td>
              <td><?php echo $row->judul_event; ?></td>
              <td><?php echo $row->tanggal; ?></td>
              <td style="text-align: justify;"><?php $art2 = substr($row->isi_event,0,80);  ?> <?php echo $art2 ; ?> 
                        ... </td>
              <td><?php echo $row->kategori_event; ?></td>
               <td ><?php echo '<img src="'.base_url("./images/".$row->gambar_event).'" width="150" height="70">'; ?></td>
              <td><?php echo $row->username; ?></td>
              <td align="center"><a href="<?php echo base_url()?>event/detail/<?php echo $row->id_event; ?>"><i class="fas fa-search"></i></a></td>
              <td style="text-align: center; width: 50px"><a  style="color: #d63031" class="btn " data-toggle="modal" data-target="#modal_tolak<?php echo $row->id_event;?>"><span class="fa fa-window-close fa-lg"></span></a></td>
            </tr>
          <div class="modal fade" id="modal_tolak<?php echo $row->id_event;?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <b class="modal-tittle" id="myModalLabel"> TOLAK BERITA</b>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url();?>event/delete/<?php echo $row->id_event;?>">
                  <div class="modal-body">
                    <p>Apakah Anda yakin menolak berita ini?</p>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id_berita" value="<?php echo $row->id_event;?>">
                    <button class="btn btn-danger" data-dismiss="modal" area-hidden="true">Batal</button>
                    <button class="btn btn-primary"> Tolak</button>
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
