
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
        <div class="container-fluid">
            <div class="row justify-content-center">
            <?php foreach($data as $a){ ?>
                <div class="col-lg-9" style="margin-bottom: 20px;font-style: justify;">
                    <img class="img-fluid" style="width: 1050px;" src="<?php echo base_url('admin/images/' . $a->gambar_event);?>" alt=""><hr>
                    <div class="single_popular_place">
                        
                        <h4><?php echo $a->judul_event; ?></h4>
                        <p><?php echo $a->isi_event; ?></p>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    <!-- use sasu part end-->



