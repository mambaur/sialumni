<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Berita</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
            <table  width="100%" align="center" cellspacing="2" cellpadding="10" >
            <?php echo form_open_multipart('Berita/update/'.$model->id_berita);?>
                <tr>
                    <td><b>ID Berita</b></td>
                    <td>:</td>
                    <td><b><input  readonly type="text" name="id_berita" value="<?php echo $model->id_berita; ?>" /></b></td>
                </tr>
                <tr>
                    <td>Judul Berita</td>
                    <td>:</td>
                    <td><input type="text" name="judul_berita" value="<?php echo $model->judul_berita; ?>" /></td>
                </tr>
                <tr>
        <td ><b>Isi Artikel</b></td>
         <td>:</td>
        <td><textarea class="ckeditor" name="isi_berita" id="isi_berita"><?php echo $model->isi_berita; ?></textarea></td>
    </tr>
            <tr>
                <td>Gambar Artikel</td>
                <td>:</td>
                <td ><?php echo '<img src="'.base_url("./images/".$model->gambar_berita).'" width="150" height="70">'; ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td ><input type="file" id="images" name="images"/></td>
            </tr>

               <tr>
                    <td>Penulis</td>
                    <td>:</td>
                    <td><input type="text" name="user_id_user" value="<?php echo $model->penulis; ?>" /></td>
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
<?php echo form_close(); ?>
        </table>
         
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
