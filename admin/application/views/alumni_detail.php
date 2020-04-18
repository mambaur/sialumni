<div class="container">
	<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Detail Alumni</h6>
                </div>
                <div class="card-body">
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>NIS</label>
						  <input name="nis" type="text" class="form-control form-control-user" value="<?php echo $model->nis ?>" readonly>
						</div>
						<div class="form-group col-md-6">
						  <label>Jurusan SMA</label>
						  <input name="jurusan" type="text" class="form-control form-control-user"  value="<?php echo $model->jurusan ?>" readonly>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Nama</label>
						  <input name="nama_alumni" type="text" class="form-control form-control-user"  value="<?php echo $model->nama_alumni ?>" readonly>
						</div>
						<div class="form-group col-md-6">
						  <label>Nama Ayah</label>
						  <input name="nama_ayah" type="text" class="form-control form-control-user"  value="<?php echo $model->nama_ayah ?>" readonly>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Tempat Lahir</label>
						  <input name="tempat_lahir" type="text" class="form-control form-control-user"  value="<?php echo $model->tempat_lahir ?>" readonly>
						</div>
						<div class="form-group col-md-6">
						  <label>Nama Ibu</label>
						  <input name="nama_ibu" type="text" class="form-control form-control-user"  value="<?php echo $model->nama_ibu ?>" readonly>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Tanggal Lahir</label>
						  <input name="tgl_lahir" type="date" class="form-control form-control-user" value="<?php echo $model->tgl_lahir ?>" readonly>
						</div>
						<div class="form-group col-md-6">
						  <label>Pekerjaan Ayah</label>
						  <input name="pekerjaan_ayah" type="text" class="form-control form-control-user" value="<?php echo $model->pekerjaan_ayah ?>" readonly>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Jenis Kelamin</label>
						  <input name="jk" class="form-control" value="<?php echo $model->jk ?>" readonly>
						</div>
						<div class="form-group col-md-6">
						  <label>Pekerjaan Ibu</label>
						  <input name="pekerjaan_ibu" type="text" class="form-control form-control-user" value="<?php echo $model->pekerjaan_ibu ?>" readonly>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Agama</label>
						  <input name="agama" type="text" class="form-control form-control-user" value="<?php echo $model->agama ?>" readonly>
						</div>
						<div class="form-group col-md-6">
						  <label>Kuliah</label>
						  <input name="kuliah" type="text" class="form-control form-control-user" value="<?php echo $model->kuliah ?>" readonly>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Alamat Awal</label>
						  <input name="alamat_awal" type="text" class="form-control form-control-user" value="<?php echo $model->alamat_awal ?>" readonly>
						</div>
						<div class="form-group col-md-6">
						  <label>Nama Wali</label>
						  <input name="nama_wali" type="text" class="form-control form-control-user" value="<?php echo $model->nama_wali ?>" readonly>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Alamat Sekarang</label>
						  <input name="alamat_skr" type="text" class="form-control form-control-user" value="<?php echo $model->alamat_awal ?>" readonly>
						</div>
						<div class="form-group col-md-6">
						  <label>Pekerjaan Wali</label>
						  <input name="pekerjaan_wali" type="text" class="form-control form-control-user" value="<?php echo $model->pekerjaan_wali ?>" readonly>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Tahun Masuk</label>
						  <input name="tahun_masuk" type="text" class="form-control form-control-user" value="<?php echo $model->tahun_masuk ?>" readonly>
						</div>
						<div class="form-group col-md-6">
						  <label>User Id</label>
						  <input name="user_id_user" type="text" class="form-control form-control-user" value="<?php echo $model->user_id_user ?>" readonly>
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>Tahun Keluar</label>
						  <input name="tahun_keluar" type="text" class="form-control form-control-user" value="<?php echo $model->tahun_keluar ?>" readonly>
						</div>
						<div class="form-group col-md-6">
						  <label>Foto</label> <br>
						  <img src="<?php echo base_url('images/'.$model->foto)?>" width="150" height="70">
						</div>
					 </div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label>No. Telpon</label>
						  <input name="no_telp" type="text" class="form-control form-control-user" value="<?php echo $model->no_telp ?>" readonly>
						</div>
					 </div>

						<br>
						<br>
					<div class="form-row">
					    <?php if($_SESSION['user'] == "1") { ?>
						<div class="form-group col-md-3">
							<a href="<?php echo base_url('Alumni/update/'.$model->nis)?>"><input type="button" class="btn btn-success btn-block btn-user " name="edit" value="EDIT"/></a>
						</div>
						<?php } ?>
						<div class="form-group col-md-3">
							<a href="<?php echo base_url('Alumni/pekerjaan/'.$model->nis); ?>"><button type="button" class="btn btn-primary btn-block btn-user" name="pekerjaan">PEKERJAAN</button></a>
						</div>
						<div class="form-group col-md-3">
							<a href="<?php echo base_url('Alumni/prestasi/'.$model->nis)?>"><button type="button" class="btn btn-primary btn-block btn-user" name="pekerjaan">PRESTASI</button></a>
						</div>
						<div class="form-group col-md-3">
							<a href="<?php echo base_url('Alumni/organisasi/'.$model->nis)?>"><button type="button" class="btn btn-primary btn-block btn-user" name="pekerjaan">ORGANISASI</button></a>
						</div>
					</div>
				</div>
     </div>
</div>