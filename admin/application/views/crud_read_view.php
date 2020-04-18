<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-sm compact" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID User</th>
              <th>Username</th>
              <th>Password</th>
              <th>Level</th>
              <th>Edit</th>
              <th>Hapus</th>
            </tr>
          </thead>               
          <?php foreach($rows as $row){?>
            <tr>
              <td><?php echo $row->id_user; ?></td>
              <td><?php echo $row->username; ?></td>
              <td><?php echo $row->password; ?></td>
              <td><?php echo $row->level; ?></td>
              <td align="center"><a href="<?php echo base_url()?>user/update/<?php echo $row->id_user; ?>"><i class="fas fa-pencil-alt"></i></a></td>
              <td style="text-align: center; width: 50px"><a  style="color: #d63031" class="btn " data-toggle="modal" data-target="#modal_hapus<?php echo $row->id_user;?>"><span class="fa fa-trash fa-lg"></span></a></td>
            </tr>
          <div class="modal fade" id="modal_hapus<?php echo $row->id_user;?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <b class="modal-tittle" id="myModalLabel"> HAPUS DATA</b>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url();?>user/delete/<?php echo $row->id_user;?>">
                  <div class="modal-body">
                    <p>Apakah Anda yakin menghapus Data?</p>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id_user" value="<?php echo $row->id_user;?>">
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
