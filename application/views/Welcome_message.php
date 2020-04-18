
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>Selamat Datang</h5>
                        <h1>Alumni SMKN 1 Malang</h1>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->
<style type="text/css">
@media (max-width: 998px) {
    .menux {
    display: none;
  }
} 
</style>
<!-- banner part start-->
<section class="search_your_country">
    <div class="container-fluid">
        <div class="row align-items-center  menux">
            <div class="col-lg-12">
                <div class="search_form" style="border-radius: 20px;">
                    <div class="form-row">
                        <div class="col-lg-2">
                            <img class="img-fluid" src="<?= base_url('user/assets/img/logomalang.png') ?>">
                        </div>
                        <div class="col-lg-10">
                         <h1 style="color: white;">Sistem Informasi Manajemen Alumni SMKN 1 Malang</h1>
                         <h3 style="color: white;">Sistem yang digunakan untuk pendataan Alumni</h3>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="row">
        <div class="col-lg-4 col-sm-6">
            <div class="single_donation_item">
                <img src="<?= base_url('admin/images/data.png'); ?>" alt="#">
                <h4>Data Alumni</h4>
                <p>Menyediakan informasi dan pendataan alumni secara lengkap dan terkini </p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="single_donation_item">
                <img src="<?= base_url('admin/images/event.png'); ?>" alt="#">
                <h4>Acara Alumni</h4>
                <p>Menyediakan informasi mengenai acara-acara yang diadakan oleh alumni </p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="single_donation_item">
                <img src="<?= base_url('admin/images/info.png'); ?>" alt="#">
                <h4>Info Sekolah</h4>
                <p>Menyediakan informasi tentang sekolah secara akurat  </p>
            </div>
        </div>
    </div>
</div>
</section>  

    <!-- use sasu part end-->
    <section class="popular_place padding_top mt-0 pt-5">
        <div class="container">
            <div class="row justify-content-center text-justify">
                <?php foreach ($loker as $l) { 
                
                $string = $l->isi_event;
                    if (strlen($string) > 90) {
                       $stringCut = substr($string, 0, 90);
                       $endPoint = strrpos($stringCut, ' ');
                       $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                       $string .= '...';
                    }
                
                
                ?>
                <div class="col-lg-4 col-sm-6 pb-5">
                    <img class="pb-3 img-fluid" style="height:200px;" src="<?php echo base_url('../admin/images/' . $l->gambar_event);?>" alt="">
                    <h4><?= $l->judul_event; ?></h4>
                        <?= $string; ?>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    <!-- use sasu part end-->



<!-- feature part start-->
<section class="feature_part padding_top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
                <div class="col-lg">
                   <div class="feature_part_text text-center">
                    <img src="<?php echo base_url('user/assets/img/gdg.jpg');?>" alt="#">
                    <h2>Tentang Sekolah</h2>

                    <span>SMK Negeri 1 Malang merupakan SMK dengan akreditasi terbaik dan sudah  berdiri sejak tahun 1953. Gedung tua ini menjadi saksi sejarah berdrinya sebuah lembaga pendidikan SMK Negeri pertama di Kabupaten Malang, yang didirikan dengan semangat gotong royong oleh masyarakat Malang</span>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="feature_part_text_iner">
                                <img src="<?php echo base_url('admin/images/student2.png');?>" alt="">
                                <h4>Murid</h4>
                                <p>1000 murid</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="feature_part_text_iner">
                                <img src="<?php echo base_url('admin/images/room.png');?>" alt="">
                                <h4>Ruang</h4>
                                <p>75 ruang</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="feature_part_text_iner">
                                <img src="<?php echo base_url('admin/images/guru.png');?>" alt="">
                                <h4>Guru</h4>
                                <p>85 guru</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->



    <!-- about_us part start-->
    <section class="place_details section_padding">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="place_detauls_text">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <div class="place_details_content">
                                    <img src="<?php echo base_url('user/assets/img/section_tittle_img.png');?>" alt="#">
                                    <h2>Reuni Akbar</h2>
                                    <p>Kegiatan rutin yang selalu menjadi agenda tahunan untuk silaurahmi dan mlepas kerinduan selama masa-masa sekolah antara alumni.</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo base_url('user/assets/img/plase_details_1.png');?>" alt="#">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="place_details_img">
                        <img src="<?php echo base_url('user/assets/img/plase_details_2.png');?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <div class="view_all_btn">
            <a href="<?= base_url('Reuni'); ?>" class="view_btn">Lihat acara</a>
        </div>
    </section>
    <!-- about_us part end-->

   <!-- pricing part start-->
    <section class="tour_package section_padding">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="tour_package_cotent owl-carousel">
                        <?php foreach ($prestasi as $p) { ?>
                        <div class="single_tour_package" >
                            <img src="<?php echo base_url('admin/images/' . $p->gambar_prestasi);?>" alt="">
                            <div class="tour_pack_content">
                                <h4><?= $p->prestasi ; ?></h4>
                                <p> <?= $p->tingkat_prestasi ; ?> | <?= $p->thn_prestasi ; ?></p>
                                
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-3 offset-lg-1 col-sm-6">
                    <div class="tour_pack_content">
                        <img src="<?php echo base_url('user/assets/img/section_tittle_img.png'); ?>" alt="">
                        <h2>Prestasi Alumni</h2>
                        <p>Memberikan informasi mengenai prestasi Alumni yang terbaru dan terkini</p>
                        <a href="<?= base_url('Prestasi');?>" class="btn_1">Lihat selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing part end-->

 
    <!-- blog part start-->
    <section class="blog_part padding_top pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                        <h2>Berita </h2>
                        <p>Berita seputar SMKN 1 Malang</p>
                </div>
            </div>
            <div class="row">
                <?php foreach ($berita as $b) { 
                
                    $string = $b->isi_berita;
                    if (strlen($string) > 90) {
                       $stringCut = substr($string, 0, 90);
                       $endPoint = strrpos($stringCut, ' ');
                       $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                       $string .= '...';
                    }
                
                
                ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img class="img-fluid" style="height:200px;" src="<?php echo base_url('admin/images/'. $b->gambar_berita);?>" alt="">
                        <div class="blog_text">
                            <h2><?= $b->judul_berita; ?></h2>
                            <?= $string; ?>
                            <ul>
                                <li>
                                    <i class="ti-calendar"></i>
                                    <p><?= date('d/m/Y', strtotime($b->tgl_berita)); ?></p>
                                </li>
                                <li>
                                    <i class="ti-user"></i>
                                    <p><?= $b->penulis; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <img src="<?php echo base_url('user/assets/img/overlay_1.png');?>" alt="#" class="blog_img">
    </section>
    <!-- blog part end-->