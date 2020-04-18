        <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Alumni</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Tahun Lulus</th>
                      <th>Detail</th>
                      <?php if($_SESSION['user'] == "1") { ?>
                      <th>Edit</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  
                  <tbody>
				<?php foreach($rows as $row){?>
            		<tr>
						<td><?php echo $row->nis; ?></td>
              			<td><?php echo $row->nama_alumni; ?></td>
              			<td><?php echo $row->jk; ?></td>
              			<td><?php echo $row->tahun_keluar; ?></td>
              			<td align="center"><a href="<?php echo base_url()?>Alumni/detail/<?php echo $row->nis; ?>"><i style="color:Green" class="fas fa-search"></i></a></td>
              			<?php if($_SESSION['user'] == "1") { ?>
						<td align="center"><a href="<?php echo base_url()?>Alumni/update/<?php echo $row->nis; ?>"><i class="fas fa-pencil-alt"></i></a></td>  
						<?php } ?>
            		</tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
</body>

</html>
