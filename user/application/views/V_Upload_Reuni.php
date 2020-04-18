
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
        <h2>Buat cara reuni sekarang juga!</h2>
        <p>Tambahkan acara reuni yang ingin anda gelar.</p>
   </div>
</div> 

<div class="container mt-1"> 
<div class="card shadow mb-4">
    <div class="card-body">
        <p>*Isikan info dibawah ini dengan benar.</p>
      <div class="table-responsive">
          <artikel>
              <?php echo form_open_multipart('Upload_Reuni/create');?>
                  <table width="100%" align="center" cellspacing="2" cellpadding="10">
                    <tr>
                        <td >Judul Reuni</td>
                        <td><input type="tetx" class="form-control" id="judul_event" name="judul_event" required></td>
                    </tr>
                    <tr>
                        <td >Isi Reuni</td>
                        <td><textarea style="width:700px; height:600px" class="ckeditor"  name="isi_event"></textarea></td>
                    </tr>   
            
                                         <tr>
                        <td >Gambar Reuni</td>
                        <td><input type="file" name="gambar_event" ></td>
                    </tr>

                </table>
                <br>
                <div class="float-right">
                    <input type="submit" class="btn btn-primary" name="btnSubmit" value="Kirim">
                    <input type="button" class="btn btn-danger" name="Batal" value="Batal" onclick="javascript:history.go(-1);"/>
                </div>
              <?php echo form_close(); ?>
        </artikel><br><br>
    </div>
    </div>
</div>
</div>  