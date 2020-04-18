<div class="container-fluid"> 
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Acara</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
		  <artikel>
			  <?php echo form_open_multipart('Event/create');?>
				  <table width="100%" align="center" cellspacing="2" cellpadding="10">
					<tr>
						<td ><b >ID</b></td>
						<td><input style="color: grey" type="text" id="id_event" name="id_event" value="<?php echo $model->id_event ?>" readonly required></td>
					</tr>
					<tr>
						<td ><b >Judul Acara</b></td>
						<td><input type="text" id="judul_event" name="judul_event" required></td>
					</tr>
					<tr>
						<td ><b>Isi Acara</b></td>
						<td><textarea style="width:700px; height:600px" class="ckeditor" name="isi_event" id="isi_event"></textarea></td>
					</tr>	
					<tr>
						<td><b>Kategori</b></td>
						<td><select name="kategori_event" >
							<option value="loker">Lowongan Pekerjaan</option>
							<option value="prestasi">Prestasi Alumni</option>
							<option value="info">Info Perkuliahan</option>
							</select>
						</td>
                </tr>
                <tr>
					<td><b>Status</b></td>
                    <td><input type="text" name="status_event" value="diterima" class="form-control form-control-user"  readonly>
					</td>
                </tr>
					<tr>
						<td ><b>Gambar Acara</b></td>
						<td><input type="file" name="images"/></td>
					</tr>
					<!-- <tr>
						<td ><b>Penulis Artikel</b></td>
						<td><input type="text" id="user_id_user" name="user_id_user" ></td>
					</tr> -->

				</table>
				<center>
			 		<input type="button" class="btn btn-danger" name="Batal" value="BATAL" onclick="javascript:history.go(-1);"/>

					<input type="submit" class="btn btn-success" name="btnSubmit" value="KIRIM">
				</center>
			  <?php echo form_close(); ?>
		</artikel><br><br>
	</div>
	</div>
</div>
</div>  