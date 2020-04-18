<div class="container-fluid"> 
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Artikel</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
		  <artikel>
			  <?php echo form_open_multipart('Berita/create');?>
				  <table width="100%" align="center" cellspacing="2" cellpadding="10">
					<tr>
						<td ><b >ID</b></td>
						<td><input type="text" id="id_berita" name="id_berita" value="<?php echo $model->id_berita ?>" readonly required></td>
					</tr>
					<tr>
						<td ><b >Judul Artikel</b></td>
						<td><input type="text" id="judul_berita" name="judul_berita" required></td>
					</tr>
					<tr>
						<td ><b>Isi Artikel</b></td>
						<td><textarea style="width:700px; height:600px" class="ckeditor" name="isi_berita" id="isi_berita"></textarea></td>
					</tr>	
					<tr>
						<td ><b>Gambar Artikel</b></td>
						<td><input type="file" name="images"/></td>
					</tr>
					<tr>
						<td ><b>Penulis Artikel</b></td>
						<td><input type="text" id="user_id_user" name="user_id_user" ></td>
					</tr>

				</table>
				<center>
			 		<input type="button" class="btn btn-danger" name="Batal" value="BATAL" onclick="javascript:history.go(-1);"/>

					<input type="submit" class="btn btn-success" name="btnSubmit" value="Kirim">
				</center>
			  <?php echo form_close(); ?>
		</artikel><br><br>
	</div>
	</div>
</div>
</div>  