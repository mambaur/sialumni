<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Acara</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
            <table  width="100%" align="center" cellspacing="2" cellpadding="10" >
            <?php echo form_open_multipart('Event/update/'.$model->id_event);?>
                <tr>
                    <td><b>ID Berita</b></td>
                    <td>:</td>
                    <td><b><input  readonly type="text" name="id_event" value="<?php echo $model->id_event; ?>" /></b></td>
                </tr>
                <tr>
                    <td>Judul Berita</td>
                    <td>:</td>
                    <td><input type="text" name="judul_event" value="<?php echo $model->judul_event; ?>" /></td>
                </tr>
                <tr>
        <td ><b>Isi Artikel</b></td>
         <td>:</td>
        <td><textarea class="ckeditor" name="isi_event" id="isi_event"><?php echo $model->isi_event; ?></textarea></td>
    </tr>
     <td>Kategori</td>
     <td>:</td>
                    <td><select name="kategori_event" >
                        <option value="loker">Lowongan Pekerjaan</option>
                        <option value="prestasi">Prestasi Alumni</option>
                        <option value="info">Info Perkuliahan</option>
                        </select>
                    </td>
            <tr>
                <td>Gambar Artikel</td>
                <td>:</td>
                <td ><?php echo '<img src="'.base_url("./images/".$model->gambar_event).'" width="150" height="70">'; ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td ><input type="file" id="images" name="images"/></td>
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
