
<div class="container-fluid">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
<?php echo @$error; ?>
<h2>Change Password</h2>
<br>
 <table  width="70%" cellspacing="2" cellpadding="5">
<form method="post" action='change_pass'>
                <tr>
                    <td>Old Password</td>
                    <td>:</td>
                    <td><input type="text" name="old_pass" id="name" placeholder="Old Pass"/></td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td>:</td>
                    <td><input type="password" name="new_pass" id="password" placeholder="New Pass"/></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>:</td>
                    <td><input type="password" name="confirm_pass" id="password" placeholder="Confirm Pass"/></td>
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
                    <b><input type="submit" class="btn btn-success" name="change_pass" value="SIMPAN"/></b>
                </td>
            </tr>
		<!-- <input type="submit" value="login" name="change_pass"/><br /> -->
</form>
</table>
</div>
</div>
</div>
</div>
