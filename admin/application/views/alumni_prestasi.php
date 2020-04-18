<div class="container-fluid">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Prestasi</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
		<div class="modal-body">
		        <?php if($_SESSION['user'] == "1") { ?>
				<div class="form-group col-md-3">
					<a href="<?php echo base_url('Alumni/add_prestasi/'.$this->uri->segment(3)); ?>"><button type="button" class="btn btn-primary btn-block btn-user" name="tambah">Tambah</button></a>
				</div
				<?php } ?>
    	<table class="table table-bordered" id="dataTable"cellspacing="0">
		  	<thead>
				<tr>
				 <th>Prestasi</th>
				 <th>Tahun</th>
				 <th>Tingkat</th>
				 <th>Juara</th>
				 <?php if($_SESSION['user'] == "1") { ?>
				 <th>Edit</th>
				 <th>Hapus</th>
				 <?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php foreach($rows as $row){ ?>
				<tr>
					<td><?php echo $row->prestasi; ?></td>
					<td><?php echo $row->thn_prestasi; ?></td>
					<td><?php echo $row->tingkat_prestasi; ?></td>
					<td><?php echo $row->juara_prestasi; ?></td>
					<?php if($_SESSION['user'] == "1") { ?>
					<td align="center"><a href="<?php echo base_url()?>Alumni/edit_prestasi/<?php echo $row->nis; ?>"><i class="fas fa-pencil-alt"></i></a></td>
              		<td style="text-align: center; width: 50px"><a  style="color: #d63031" class="btn " data-toggle="modal" data-target="#modal_hapus"><span class="fa fa-trash fa-lg"></span></a></td>
					<input type="text" name="nis" value="<?php echo $row->nis; ?>" hidden/>
					<?php } ?>
				</tr>
				<div class="modal fade" id="modal_hapus">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <b class="modal-tittle" id="myModalLabel"> HAPUS DATA</b>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url();?>Alumni/hapus_prestasi/<?php echo $row->nis; ?>/<?php echo $row->id_prestasi;?>">
                  <div class="modal-body">
                    <p>Apakah Anda yakin menghapus Data?</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" area-hidden="true">Batal</button>
                    <button class="btn btn-primary"> Hapus</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
			<?php } ?>
			</tbody>
		</table>
        </div>
		  
</div>
</div>
</div>
</div>