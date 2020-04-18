<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
            <table width="70%" cellspacing="2" cellpadding="5">
            <form action="create" method="POST">
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" class="form-control form-control-user" name="username" value="<?php echo $model->username; ?>" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" class="form-control form-control-user" name="password" value="<?php echo $model->password; ?>" /></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>:</td>
                    <td> <select class="form-control form-control-user" name="level" maxlength="20" value="<?php echo $model->level; ?>"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></td>
                </tr>
                <tr>
                <td style="color:#ee5253"><b>Pastikan Data diatas benar.</b></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b><input type="button" class="btn btn-danger" name="Batal" value="BATAL" onclick="javascript:history.go(-1);"/> <input type="submit" class="btn btn-success" name="btnSubmit" value="SIMPAN"/>
                    </b></td>
                </tr>
            </form>
        </table>
         
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
