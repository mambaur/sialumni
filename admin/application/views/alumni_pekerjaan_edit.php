
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Pekerjaan</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table  width="70%" cellspacing="2" cellpadding="5">
             <form action="" method="post">
					<input type="text" name="nis" value="<?php echo $this->uri->segment(3); ?>" hidden/>
				 <?php foreach($rows as $row) { ?>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><input type="text" name="deskripsi" class="form-control form-control-user" value="<?php echo $row->deskripsi ?>" /></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><input type="text" name="jabatan" class="form-control form-control-user" value="<?php echo $row->jabatan_pekerjaan ?>"/></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td><input type="text" name="tahun" class="form-control form-control-user" value="<?php echo $row->tahun_pekerjaan ?>"/></td>
                </tr>
				 <?php 
						$con = "0";
						if($row->bidang == "PNS"){
							$con = "1";
						} elseif($row->bidang == "Wirausaha/Swasta"){
							$con = "2";
						} elseif($row->bidang == "Lain-Lain"){
							$con = "3";
						}
				?>
				 <tr>
                    <td>Bidang</td>
                    <td>:</td>
                    <td><select name="bidang" maxlength="20" class="form-control form-control-user" >
						<option <?php if($con == "1") {echo "selected";} ?> value="PNS">PNS</option>
						<option <?php if($con == "2") {echo "selected";} ?> value="Wirausaha/Swasta">Wirausaha/Swasta</option>
						<option <?php if($con == "3") {echo "selected";} ?> value="Lain-Lain">Lain-Lain</option>
						</select>
					 </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" class="form-control form-control-user" value="<?php echo $row->alamat ?>"/></td>
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
