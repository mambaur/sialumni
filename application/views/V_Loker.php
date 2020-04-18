
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

 <!-- use sasu part end-->
    <section class="popular_place padding_top" style="padding-top: 5%;">
        <div class="container">
            <h3>Lowongan Pekerjaan</h3>
            <p>Lowongan pekerjaan yang sangat berguna bagi anda.</p>
            <hr>
            <div class="row justify-content-center">
                <?php foreach($data as $a){
                //Limit text Strength
                    $string = $a->isi_event;
                    if (strlen($string) > 90) {
                       $stringCut = substr($string, 0, 40);
                       $endPoint = strrpos($stringCut, ' ');
                       $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                       $string .= '...';
                   }
                   ?>
                   <div class="col-sm-3 shadow-sm p-3 m-3 bg-white rounded">
                       <img src="<?php echo base_url('../admin/images/'.$a->gambar_event);?>" alt="">
                       <h4 class="mt-1"><?php echo $a->judul_event; ?></h4>
                        <p><?php echo $string; ?>..( <a href="<?php echo base_url('Loker/detail/'.$a->id_event); ?>" class="btn1"  style="color: red;">Kunjungi</a> )
                    </div></p>
                        
                    <?php } ?>
                </div>
                
            </div>
        </div>
    </section>
    <!-- use sasu part end-->

    <div class="row mt-5">
          <div class="col-lg text-center">
            <?= $this->pagination->create_links(); ?>
          </div>          
        </div>
                 