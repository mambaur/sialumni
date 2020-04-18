
   <!-- breadcrumb start-->
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner text-center" style="height: 60px;">
                  <!-- <?php foreach($data as $b){?>
                  <div class="breadcrumb_iner_item">
                     <h2><?php echo $b->judul_loker; ?></h2>
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
            <div class="col-lg-12 posts-list">
               <?php foreach($data as $a){?>
               <div class="single-post">
                  <div class="feature-img">
                      
                     <img class="img-fluid" src="<?php echo base_url('admin/images/'.$a->gambar_event);?>" alt="" width="500" height="250">
                     
                  </div>
                  <div class="blog_details">
                     <h2><?php echo $a->judul_event; ?>
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="far fa-user"></i><?php echo $a->kategori_event; ?></a></li>
                       
                     </ul>
                     <p class="excert">
                        <?php echo $a->isi_event; ?>
                     </p>
                     </p>
                  </div>
               </div>
               <?php } ?>
              
            </div>
            
         </div>
      </div>
   </section>