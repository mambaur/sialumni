<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      
       <?php foreach($rows as $row){ ?>
        <h6 class="m-0 font-weight-bold text-primary"><?php echo $row->username; ?></h6>
        <h6 class="m-0 font-weight-bold text-primary"><?php echo $row->tanggal; ?></h6>
      <?php } ?>
    </div>
    <div class="card-body">
  
    <br>
 
        
          <?php foreach($rows as $row){ ?>
                <center>
                <img src="<?php echo base_url('./images/'.$row->gambar_event) ; ?>"  style="width: 500px" alt="" title="" media-simple="true"></center>
                   <br>
                    <div class="card-box">
                       <center><h4 class="card-title mbr-fonts-style display-5"style="font-family: Times New Rowman; font-size: 24px"><b><?php echo $row->judul_event ; ?></b></h4></center><hr>
                        <p class="mbr-text mbr-fonts-style display-7" style="font-family: Times New Rowman; font-size: 20px; text-align: justify">
                          <i>
                            <?php echo $row->isi_event ; ?></i>
                        </p>
                    </div>
                    
                
            <?php } ?>
            <br><br>
      <div style="float: right">
      <a style="color: white" class="btn btn-danger btn-lg " data-toggle="modal" data-target="#modal_tolak<?php echo $row->id_event;?>">TOLAK</a>
      <a href="<?php echo base_url()?>event/update_status/<?php echo $row->id_event; ?>" class="btn btn-primary btn-lg ">TERIMA</a>
      <div class="modal fade" id="modal_tolak<?php echo $row->id_event;?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <b class="modal-tittle" id="myModalLabel"> TOLAK BERITA</b>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url();?>event/delete/<?php echo $row->id_event;?>">
                  <div class="modal-body">
                    <p>Apakah Anda yakin menolak berita ini?</p>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id_berita" value="<?php echo $row->id_event;?>">
                    <button class="btn btn-danger" data-dismiss="modal" area-hidden="true">Batal</button>
                    <button class="btn btn-primary"> Tolak</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
     </div>

        </div>

      </div>
      
    </div>

        <!-- /.container-fluid -->
