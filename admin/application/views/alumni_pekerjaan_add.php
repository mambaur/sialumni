
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Pekerjaan</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table  width="70%" cellspacing="2" cellpadding="5">
             <form action="" method="post">
					<input type="text" name="nis" value="<?php echo $this->uri->segment(3); ?>" hidden/>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><input type="text" name="deskripsi" class="form-control form-control-user" placeholder="Masukkan Deskripsi" /></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><input type="text" name="jabatan" class="form-control form-control-user" placeholder="Masukkan Jabatan"/></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td><input type="text" name="tahun" class="form-control form-control-user" placeholder="Masukkan Tahun"/></td>
                </tr>
				 <tr>
                    <td>Bidang</td>
                    <td>:</td>
                    <td><select name="bidang" maxlength="20" class="form-control form-control-user"  >
						<option value="PNS">PNS</option>
						<option value="Wirausaha">Wirausaha/Swasta</option>
						<option value="Lain-Lain">Lain-Lain</option>
						</select>
					 </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" class="form-control form-control-user" placeholder="Masukkan Alamat"/></td>
                </tr>
				 				 
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
