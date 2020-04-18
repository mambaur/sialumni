
   <!-- breadcrumb start-->
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner text-center" style="height: 60px;">
                  <!-- <?php foreach($data as $b){?>
                  <div class="breadcrumb_iner_item">
                     <h2><?php echo $b->judul_berita; ?></h2>
                  </div>
               <?php } ?> -->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb start-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area padding_top" style="padding-top: 5%;">
      <div class="container">
         
         <div class="row">
            <div class="col-lg-8 posts-list">
               <?php foreach($data as $a){?>
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php echo base_url('admin/images/' . $a->gambar_berita); ?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php echo $a->judul_berita; ?>
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                        
                     </ul>
                     <p class="excert">
                        <?php echo $a->isi_berita; ?>
                     </p>
                     </p>
                  </div>
               </div>
               <?php } ?>
              
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Kategori</h4>
                     <ul class="list cat-list">
                        <li>
                           <a href="#" class="d-flex">
                              <p><a href="<?php echo base_url('Berita'); ?>">Berita</a></p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p><a href="<?php echo base_url('Loker'); ?>">Lowongan Pekerjaan</a></p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p><a href="<?php echo base_url('Prestasi'); ?>">Prestasi Alumni</a></p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p><a href="<?php echo base_url('Reuni'); ?>">Reuni</a></p>
                           </a>
                        </li>
                     </ul>
                  </aside>
                 
               </div>
            </div>
         </div>
      </div>
   </section>