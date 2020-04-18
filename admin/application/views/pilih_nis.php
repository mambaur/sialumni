<div class="container-fluid">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pilih User</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
		<div class="modal-body">
    	<table class="table table-bordered" id="dataTable"cellspacing="0">
		  	<thead>
				<tr>
				 <th>Pilih</th>
				 <th>NIS</th>
				 <th>Nama</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($rows as $row){?>
				<tr><td>
				    <form method="post" action="create">
				    <table><tr>
					<input type="submit" class="btn btn-success" name="pilih" value="Pilih"/>
					<input type="text" name="nis" value="<?php echo $row->nis; ?>" hidden/>
					<input type="text" name="username" value="<?php echo $row->username; ?>" hidden/>
					</tr></table></form>
					<td><?php echo $row->nis; ?></td>
					<td><?php echo $row->nama_alumni; ?></td>
					
				</td></tr>
			<?php } ?>
			</tbody>
		</table>
        </div>
</div>
</div>
</div>
</div>