<div class="container">
	<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Alumni</h6>
                </div>
                <div class="card-body">
				<?php echo form_open_multipart('Alumni/create');?>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>NIS</label>
						  <input name="nis" type="text" class="form-control form-control-user"  placeholder="Masukan NIS..." required>
						</div> 
						<div class="form-group col-md-6">
						  <label>Jurusan SMA</label>
						  <input name="jurusan" type="text" class="form-control form-control-user"  placeholder="Masukan Jurusan SMA..." required>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Nama</label>
						  <input name="nama_alumni" type="text" class="form-control form-control-user"  placeholder="Masukan Nama..." required>
						</div>
						<div class="form-group col-md-6">
						  <label>Nama Ayah</label>
						  <input name="nama_ayah" type="text" class="form-control form-control-user"  placeholder="Masukan Nama Ayah..." required>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Tempat Lahir</label>
						  <input name="tempat_lahir" type="text" class="form-control form-control-user"  placeholder="Masukan Tempat Lahir..." required>
						</div>
						<div class="form-group col-md-6">
						  <label>Nama Ibu</label>
						  <input name="nama_ibu" type="text" class="form-control form-control-user"  placeholder="Masukan Nama Ibu..." required>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Tanggal Lahir</label>
						  <input name="tgl_lahir" type="date" class="form-control form-control-user"  placeholder="Masukan Tanggal Lahir..." required>
						</div>
						<div class="form-group col-md-6">
						  <label>Pekerjaan Ayah</label>
						  <input name="pekerjaan_ayah" type="text" class="form-control form-control-user"  placeholder="Masukan Pekerjaan Ayah..." required>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Jenis Kelamin</label>
						  <select name="jk" class="form-control" required>
							  <option selected>Jenis Kelamin...</option>
							  <option>Laki-laki</option>
							  <option>Perempuan</option>
      					</select>
						</div>
						<div class="form-group col-md-6">
						  <label>Pekerjaan Ibu</label>
						  <input name="pekerjaan_ibu" type="text" class="form-control form-control-user"  placeholder="Masukan Pekerjaan Ibu..." required>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Agama</label>
						  <input name="agama" type="text" class="form-control form-control-user"  placeholder="Masukan Agama..." required>
						</div>
						<div class="form-group col-md-6">
						  <label>Kuliah</label>
						  <input name="kuliah" type="text" class="form-control form-control-user"  placeholder="Masukan Kuliah...">
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Alamat Awal</label>
						  <input name="alamat_awal" type="text" class="form-control form-control-user"  placeholder="Masukan Alamat Awal...">
						</div>
						<div class="form-group col-md-6">
						  <label>Nama Wali</label>
						  <input name="nama_wali" type="text" class="form-control form-control-user"  placeholder="Masukan Nama Wali...">
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Alamat Sekarang</label>
						  <input name="alamat_skr" type="text" class="form-control form-control-user"  placeholder="Masukan Alamat Sekarang..." required>
						</div>
						<div class="form-group col-md-6">
						  <label>Pekerjaan Wali</label>
						  <input name="pekerjaan_wali" type="text" class="form-control form-control-user"  placeholder="Masukan Pekerjaan Wali...">
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Tahun Masuk</label>
						  <input name="tahun_masuk" type="text" class="form-control form-control-user"  placeholder="Masukan Tahun Masuk..." required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Tahun Keluar</label>
						  <input name="tahun_keluar" type="text" class="form-control form-control-user"  placeholder="Masukan Tahun Keluar..." required>
						</div>
						<div class="form-group col-md-6">
						  <label>Foto</label> <br>
						  <input type="file" id="foto" name="foto" required>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>No. Telpon</label>
						  <input name="no_telp" type="text" class="form-control form-control-user"  placeholder="Masukan No. Telpon...">
						</div>
					 </div>

						
					<div class="col-12" >
						<br>
						<br>
						<input type="submit" style="float:right" class="btn btn-success " name="btnSubmit" value="SIMPAN"/>
						&nbsp;&nbsp;&nbsp;
						<input type="button" style="float:right" class="btn btn-danger " name="Batal" value="BATAL" onclick="javascript:history.go(-1);"/>
					</div>
					<?php echo form_close(); ?>
				</div>
     </div>
</div>

</div>