
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table  width="70%" cellspacing="2" cellpadding="5">
             <form action="create" method="post">
				<tr>
					<td>NIS</td>
					<td>:</td>
					<td><input name="nis" type="text" class="form-control form-control-user" value="<?php if(!empty($_POST['nis'])){ echo $_POST['nis']; } ?>" required></td>
					<td><a href="pilih"><button type="button" class="btn btn-primary">Cari</button></a></td>
				</tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" class="form-control form-control-user" value="<?php if(!empty($_POST['nis'])){ echo $_POST['username']; } ?>" placeholder="Masukkan Username" required/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" class="form-control form-control-user" value="<?php if(!empty($_POST['nis'])){ echo $_POST['nis']; } ?>" placeholder="Masukkan Password"  required/></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>:</td>
                    <td><select name="level" maxlength="20" class="form-control form-control-user"  >
						<option value="1">1</option>
						<option value="2">2</option>
						
						</select>
					</td>
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
