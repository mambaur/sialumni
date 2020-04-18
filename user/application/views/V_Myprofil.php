  <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center" style="height: 60px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    
 <div class="container">
    <div class="mt-5 ml-1">
        <h2>Data lengkap alumni</h2>
        <p>Berikut ini beberapa data lengkap terkait alumni SMKN 1 Malang.</p>
   </div>
</div>

<div class="container mt-1"> 
    <div class="card shadow mb-4">
        <!--<div class="card-header py-3">-->
        <!--  <h6 class="m-0 font-weight-bold text-primary">Profile saya</h6>-->
        <!--</div>-->
        <div class="card-body">
          <div class="table-responsive">
                <?= $this->session->flashdata('message'); ?>
                <form action="<?php echo base_url('Profil/tambah_alumni') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="<?= base_url('../admin/images/') . $alumni['foto']; ?>" class="img-fluid mb-1">
                            <input type="file" name="gambar" id="gambar" class="form-control form-control-user">
                        </div>
                        <div class="col-sm-10 mt-1">
                            <h3>Hai, <?= $alumni['nama_alumni']; ?>!</h3>
                            <p ><?= $alumni['nis']; ?></p>
                            <p ><?= $alumni['jurusan']; ?></p>
                            <p >Tahun : <?= $alumni['tahun_masuk'] . '-' . $alumni['tahun_keluar']; ?></p>
                            <p ><?= $alumni['tempat_lahir'].', '.$alumni['tgl_lahir']; ?></p>
                            <br>
                            
                        </div>
                      </div>
                    
                    <hr><br>
                     <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">NIS</label>
                            <input type="text" class="form-control form-control-user" name="nis" placeholder="NIS" value="<?= $alumni['nis']; ?>" readonly>
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Nama</label>
                            <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama lengkap" value="<?= $alumni['nama_alumni']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Tempat lahir</label>
                            <input type="text" class="form-control form-control-user" name="tempat_lahir" placeholder="Tempat lahir" value="<?= $alumni['tempat_lahir']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Tanggal lahir</label>
                            <input type="date" class="form-control form-control-user" name="tgl_lahir" placeholder="Tanggal lahir" value="<?= $alumni['tgl_lahir']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Jenis kelamin</label>
                            <input type="text" class="form-control form-control-user" name="jk" placeholder="Jenis kelamin" value="<?= $alumni['jk']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Alamat awal</label>
                            <input type="text" class="form-control form-control-user" name="alamat_awal" placeholder="Alamat awal" value="<?= $alumni['alamat_awal']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Alamat sekarang</label>
                            <input type="text" class="form-control form-control-user" name="alamat_skr" placeholder="Alamat sekarang" value="<?= $alumni['alamat_skr']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Tahun masuk</label>
                            <input type="number" class="form-control form-control-user" name="tahun_masuk" placeholder="Tahun masuk" value="<?= $alumni['tahun_masuk']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Tahun keluar</label>
                            <input type="number" class="form-control form-control-user" name="tahun_keluar" placeholder="Tahun keluar" value="<?= $alumni['tahun_keluar']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Kuliah</label>
                            <input type="text" class="form-control form-control-user" name="kuliah" placeholder="Kuliah" value="<?= $alumni['kuliah']; ?>">
                          </div>
                        </div><hr class="mb-5">
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Nama ayah</label>
                            <input type="text" class="form-control form-control-user" name="nama_ayah" placeholder="Nama ayah" value="<?= $alumni['nama_ayah']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Nama ibu</label>
                            <input type="text" class="form-control form-control-user" name="nama_ibu" placeholder="Nama ibu" value="<?= $alumni['nama_ibu']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Pekerjaan Ayah</label>
                            <input type="text" class="form-control form-control-user" name="pekerjaan_ayah" placeholder="Pekerjaan ayah" value="<?= $alumni['pekerjaan_ayah']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Pekerjaan Ibu</label>
                            <input type="text" class="form-control form-control-user" name="pekerjaan_ibu" placeholder="Pekerjaan ibu" value="<?= $alumni['pekerjaan_ibu']; ?>">
                          </div>
                        </div>
                        <hr class="mb-5">
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">No Telp</label>
                            <input type="text" class="form-control form-control-user" name="no_telp" placeholder="Nomor Telpon" value="<?= $alumni['no_telp']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Agama</label>
                            <input type="text" class="form-control form-control-user" name="agama" placeholder="Agama" value="<?= $alumni['agama']; ?>">
                          </div>
                          
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Jurusan</label>
                            <input type="text" class="form-control form-control-user" name="jurusan" placeholder="Jurusan" value="<?= $alumni['jurusan']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Nama Wali</label>
                            <input type="text" class="form-control form-control-user" name="nama_wali" placeholder="Nama wali" value="<?= $alumni['nama_wali']; ?>">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nis">Pekerjaan wali</label>
                            <input type="text" class="form-control form-control-user" name="pekerjaan_wali" placeholder="Pekerjaan wali" value="<?= $alumni['pekerjaan_wali']; ?>">
                          </div>
                    </div><hr>
                    <input type="submit" class="btn btn-primary" name="btnSubmit" value="Perbarui data">
              </form>
              <br><br>
          </div>
        </div>
    </div>
</div>  

<div class="container mt-5"> 
    <div class="card shadow mb-4">
        <div class="mt-3 ml-3">
            <h2>Data Pekerjaan</h2>
            <p>Pekerjaan yang pernah atau saat ini.</p>
        </div>
        <hr>
        <div class="card-body">
          <div class="table-responsive">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="pekerjaan">Nama pekerjaan</label>
                            <input type="text" class="form-control form-control-user" id="pekerjaan" name="pekerjaan" placeholder="Nama pekerjaan" required>
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="jabatan">Jabatan pekerjaan</label>
                            <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan" placeholder="Jabatan pekerjaan" required>
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="thn">Tahun pekerjaan</label>
                            <input type="number" class="form-control form-control-user" id="thn" name="thn" placeholder="Tahun pekerjaan" required>
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="bidang">Bidang</label>
                            <input type="text" class="form-control form-control-user" id="bidang" name="bidang" placeholder="Bidang pekerjaan" required>
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="alamat_kerja" required>Alamat tempat kerja</label>
                            <input type="text" class="form-control form-control-user" id="alamat_kerja" name="alamat_kerja" placeholder="Alamat pekerjaan" required>
                      </div>

                    </div>
                    <button id="tambah" class="btn btn-primary">+ Tambah Pekerjaan</button><hr class="mb-5">
                    <div class="form-group row">
                      <div class="col-sm mb-3 mb-sm-0">
                        <div id="hasil">
                          <div class="progress-table-wrap">
                            <div class="progress-table">
                              <div class="table-head">
                                <div class="serial">#</div>
                                <div class="visit">Deskripsi</div>
                                <div class="visit">Jabatan</div>
                                <div class="visit">Tahun pekerjaan</div>
                                <div class="visit">Bidang</div>
                                <div class="visit">Alamat</div>
                                <div class="visit"></div>
                              </div>
                              <?php $no=1;
                               foreach ($pekerjaan as $a) { ?>
                              <div class="table-row">
                                <div class="serial"><?= $no++; ?></div>
                                <div class="visit"><?= $a->deskripsi; ?></div>
                                <div class="visit"><?= $a->jabatan_pekerjaan; ?></div>
                                <div class="visit"><?= $a->tahun_pekerjaan; ?></div>
                                <div class="visit"><?= $a->bidang; ?></div>
                                <div class="visit"><?= $a->alamat; ?></div>
                                <div class="visit"><a href="<?= base_url('Profil/hapusPekerjaan?id=' . $a->id_pekerjaan); ?>" class="badge badge-danger text-right tombol-hapus">Hapus</a></div>
                              </div>
                            <?php } ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><hr>
                    </div>
              <br><br>
          </div>
        </div>
    </div>
</div>  

<div class="container mt-5"> 
    <div class="card shadow mb-4">
        <div class="mt-3 ml-3">
            <h2>Data Organisasi</h2>
            <p>Organisasi yang pernah atau sedang anda ikuti.</p>
        </div>
        <hr>
        <!--<div class="card-header py-3">-->
        <!--  <h6 class="m-0 font-weight-bold text-primary">Data pekerjaan</h6>-->
        <!--</div>-->
        <div class="card-body">
          <div class="table-responsive">
                    <form action="<?= base_url('Profil/tambah_org'); ?>" method="post">
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="pekerjaan">Nama organisasi</label>
                                <input type="text" class="form-control form-control-user" name="nama_org" placeholder="Nama organisasi.." required>
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="jabatan">Jabatan organisasi</label>
                                <input type="text" class="form-control form-control-user" name="jabatan_org" placeholder="Jabatan organisasi.." required>
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="thn">Tahun organisasi</label>
                                <input type="number" class="form-control form-control-user" name="tahun_org" placeholder="Tahun organisasi.." required>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">+ Tambah Organisasi</button><hr class="mb-5">
                    </form>
                    <div class="form-group row">
                      <div class="col-sm mb-3 mb-sm-0">
                        <div id="hasil">
                          <div class="progress-table-wrap">
                            <div class="progress-table">
                              <div class="table-head">
                                <div class="serial">#</div>
                                <div class="visit">Nama Organisasi</div>
                                <div class="visit">Jabatan</div>
                                <div class="visit">Tahun Organisasi</div>
                                <div class="visit"></div>
                              </div>
                              <?php $no = 1; foreach($org as $o){ ?>
                              <div class="table-row">
                                <div class="serial"><?= $no++; ?></div>
                                <div class="visit"><?= $o->nama_org; ?></div>
                                <div class="visit"><?= $o->jabatan; ?></div>
                                <div class="visit"><?= $o->tahun; ?></div>
                                <div class="visit"><a href="<?= base_url('Profil/hapusOrg?id=' . $o->id_organisasi); ?>" class="badge badge-danger tombol-hapus">Hapus</a></div>
                              </div>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><hr>
                    </div>
              <br><br>
          </div>
        </div>
    </div>
</div>  

<script type="text/javascript">
  var pekerjaan = document.getElementById('pekerjaan');
  var jabatan = document.getElementById('jabatan');
  var thn = document.getElementById('thn');
  var bidang = document.getElementById('bidang');
  var alamat_kerja = document.getElementById('alamat_kerja');
  var hasil = document.getElementById('hasil');
  var btnTambah = document.getElementById('tambah');

  btnTambah.addEventListener('click', function(){
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
      if (ajax.readyState == 4 && ajax.status == 200) {
        hasil.innerHTML = ajax.responseText;
      }
    }

    ajax.open('GET', '<?php echo base_url("Profil/tambah_pekerjaan?pekerjaan=");?>' + pekerjaan.value + '&jabatan=' + jabatan.value + '&thn='+ thn.value + '&bidang=' + bidang.value+ '&alamat_kerja=' + alamat_kerja.value, true);

    // ajax.open('GET', '<?php echo base_url("Profil/tambah_pekerjaan?pekerjaan=");?>' + pekerjaan.value + '&jabatan=' + jabatan.value + '&thn='+ thn.value + '&bidang=' + bidang.value+ '&alamat_kerja=' + alamat_kerja.value, true);
    ajax.send();
  });
</script>
