
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
    </section> <br>
    <!-- breadcrumb start-->
  <div class="container">
    <div class="mt-5 ml-1">
        <h2>Tambah prestasi yang pernah anda raih</h2>
        <p>Upload prestasi yang pernah anda raih disini untuk menunjukkan bahwa anda berprestasi.</p>
   </div>
</div>  

<div class="container mt-1"> 
<div class="card shadow mb-4">
    <div class="card-body">
        <p>*Isikan info dibawah ini dengan benar.</p>
      <div class="table-responsive">
          <artikel>
              <?php echo form_open_multipart('Upload_prestasi/create');?>
                  <table width="100%" align="center" cellspacing="2" cellpadding="10">
                    <tr>
                        <td >Tahun Prestasi</td>
                        <td><input type="number" style="width: 20%;" class="form-control" id="thn_prestasi" name="thn_prestasi" required></td>
                    </tr>
                    <tr>
                        <td >Prestasi</td>
                        <td><input type="text" style="width: 50%;" class="form-control" id="prestasi" name="prestasi" id="prestasi"></textarea></td>
                    </tr>   
                   <tr>
                        <td >Tingkat Prestasi</td>
                        <td>
                            <select class="form-control" name="tingkat_prestasi">
                                <option value="Desa">Desa</option>
                                <option value="Kecamatan">Kecamatan</option>
                                <option value="Kabupaten">Kabupaten</option>
                                <option value="Provinsi">Provinsi</option>
                                <option value="Nasional">Nasional</option>
                                <option value="Internasional">Internasional</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td >Juara Prestasi</td>
                        <td><input type="text" style="width: 50%;" class="form-control" name="juara_prestasi"/></td>
                    </tr>
                                         <tr>
                        <td >Gambar Prestasi</td>
                        <td><input type="file" name="gambar_prestasi" ></td>
                    </tr>

                </table>
                <br>
                <div class="text-right">
                    <input type="submit" class="btn btn-primary" name="btnSubmit" value="Kirim">
                    <input type="button" class="btn btn-danger" name="Batal" value="Batal" onclick="javascript:history.go(-1);"/>
                </div>
              <?php echo form_close(); ?>
        </artikel><br><br>
    </div>
    </div>
</div>
</div>  