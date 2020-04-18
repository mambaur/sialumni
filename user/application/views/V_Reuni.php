
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

    <!-- feature_part start-->
    <section class="feature_part padding_top" style="padding-top: 5%;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="feature_img">
                        <img src="<?php echo base_url('assets/img/about_img.png'); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_text">
                        <img src="<?php echo base_url('assets/img/section_tittle_img.png'); ?>" alt="#">
                        <h2>Reuni Alumni SMK Negeri 1 Malang</h2>
                       <p>Sebagai wadah apresiasi dan rencana agenda yang diadakan oleh alumni untuk silaturahmi dan temu kangen antar alumni.</p>
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <a href="<?php echo base_url('Upload_Reuni'); ?>">
                                    <div class="feature_part_text_iner">
                                        <img src="<?php echo base_url('assets/img/icon/tour_icon_1.png');?>" alt="">
                                        <h4>Tambah</h4>
                                        <p>Acara Reuni</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a href="#" data-toggle="modal" data-target="#myModal">
                                    <div class="feature_part_text_iner">
                                        <img src="<?php echo base_url('assets/img/icon/tour_icon_2.png');?>" alt="">
                                        <h4>Cari</h4>
                                        <p>Acara Reuni</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a href="<?php echo base_url('Contact'); ?>">
                                    <div class="feature_part_text_iner">
                                        <img src="<?php echo base_url('assets/img/icon/tour_icon_3.png');?>" alt="">
                                        <h4>Kontak</h4>
                                        <p>Admin</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img src="img/animate_icon/Shape-1.png" alt="" class="feature_icon_1">
        <img src="img/animate_icon/Shape-2.png" alt="" class="feature_icon_2">
        <img src="img/animate_icon/Shape-3.png" alt="" class="feature_icon_3">
    </section>

    <!-- Card view-->
    <section>
    <div class="container" style="padding-top: 5%;">
        <div class="row align-items-center">
            <?php foreach($data as $a){?>
            <div class="col-lg-5 col-xl-3 offset-lg-1 col-sm-6" style="margin-bottom: 2%;">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo base_url('../admin/images/' . $a->gambar_event) ?>" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $a->judul_event; ?></h5>
                    <p class="card-text"><?php echo $a->isi_event; ?></p>
                    <a href="<?php echo base_url('Reuni/detail/'.$a->id_event); ?>" class="btn btn-primary">Selengkapnya</a>
                  </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>

    </section>


 <!-- Modal popup search -->
  <div class="modal fade container" id="myModal" role="dialog"
  style="margin: 10%;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- <h4 class="modal-title"></h4> -->
        </div>
        <div class="modal-body">
          <!-- <p>Cari disini</p> -->
          <input type="text" class="form-control" name="" placeholder="Cari acara alumni disini.."> 
        </div>
        <div class="modal-footer">
          <button type="button" class="genric-btn primary" data-dismiss="modal">Cari</button>
        </div>
      </div>
  </div>
</div>