
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Prestasi</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table  width="70%" cellspacing="2" cellpadding="5">
             <form action="" method="post">
					<input type="text" name="nis" value="<?php echo $this->uri->segment(3); ?>" hidden/>
				 <?php foreach($rows as $row) { ?>
                <tr>
                    <td>Prestasi</td>
                    <td>:</td>
                    <td><input type="text" name="prestasi" class="form-control form-control-user" value="<?php echo $row->prestasi ?>" /></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td><input type="text" name="tahun" class="form-control form-control-user" value="<?php echo $row->thn_prestasi ?>"/></td>
                </tr>
                <tr>
                    <td>Tingkat</td>
                    <td>:</td>
                    <td><input type="text" name="tingkat" class="form-control form-control-user" value="<?php echo $row->tingkat_prestasi ?>"/></td>
                </tr>
				 <tr>
                    <td>Juara</td>
                    <td>:</td>
                    <td><input type="text" name="juara" class="form-control form-control-user" value="<?php echo $row->juara_prestasi ?>"/></td>
                </tr>
				<?php } ?>  				 
                <tr>
                <td style="color:#ee5253"><b>Pastikan Data diatas benar.</b></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td>
                    <b><input  type="button" class="btn btn-danger" name="Batal" value="BATAL" onclick="javascript:history.go(-1);"/></b>
                    <b><input type="submit" class="btn btn-success" name="btnSubmit" value="SIMPAN"/></b>
                </td>
            </tr>
</form>
</table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
