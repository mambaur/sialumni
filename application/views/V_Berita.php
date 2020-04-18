
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


    <!-- blog part start-->
    <section class="blog_part padding_top" style="padding-top: 1%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="section_tittle">
                        <img src="img/section_tittle_img.png" alt="">
                        <h2>Berita Seputar SMK Negeri 1 Malang</h2>
                        <p>Menyediakan berita terkini dan terbaru seputas sekolah dan alumni</p>
                    </div>
                </div>
            </div>
            <div class="row">
                 <?php foreach($data as $a){
                    //Limit text Strength
                    $string = $a->isi_berita;
                    if (strlen($string) > 90) {
                       $stringCut = substr($string, 0, 90);
                       $endPoint = strrpos($stringCut, ' ');
                       $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                       $string .= '...';
                    }
                ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="<?php echo base_url('admin/images/' . $a->gambar_berita);?>" alt="">
                        <div class="blog_text">
                            <h2><a href="<?php echo base_url('Berita/detail/'.$a->id_berita); ?>"><?php echo $a->judul_berita; ?></a></h2>
                            <p><?php echo $string; ?></p>
                            <ul>
                                <li>
                                    <i class="ti-calendar"></i>
                                    <p><?php echo date('Y:m:d', strtotime($a->tgl_berita)); ?></p>
                                </li>
                                <li>
                                    <i class="fas fa-user"></i>
                                    <p><?php echo $a->penulis; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <img src="img/overlay_1.png" alt="#" class="blog_img">
    </section>
    <!-- blog part end-->
