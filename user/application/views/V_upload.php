   
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
        <h2>Tambah info lowongan pekerjaan</h2>
        <p>Info lowongan pekerjaan sangat bermanfaat untuk alumni lain yang ingin mendapatkan kerja.</p>
   </div>
</div>   
 <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

<div class="container mt-1"> 
<div class="card shadow mb-4">
    <div class="card-body">
        <p>*Isikan info dibawah ini dengan benar.</p>
      <div class="table-responsive">
          <artikel>
              <?php echo form_open_multipart('Upload/create');?>
                  <table width="100%" align="center" cellspacing="2" cellpadding="10">
                
                    <td >Judul Loker</td>
                        <td><input type="text" class="form-control" id="judul_event" name="judul_event" required></td>
                    </tr>
                    <tr>
                        <td >Isi Loker</td>
                        <td><textarea style="width:700px; height:600px" class="ckeditor form-control"  name="isi_event"></textarea></td>
                    </tr>   
                                         <tr>
                        <td >Gambar Loker</td>
                        <td><input type="file" name="gambar_event" ></td>
                    </tr>

                </table>
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