

    <!-- cta part start-->
    <section class="cta_part section_padding">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-xl-7">
                    <div class="cta_text text-center">
                        <h5>Prestasi Alumni</h5>
                        <h2>Cari Prestasi Alumni
                                Di bawah ini</h2>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari nama, nis, prestasi alumni" id="input-text">
                                <div class="input-group-append">
                                    <button onclick="scrollWin()" class="subs_btn" id="btn-cari"><i class="fas fa-search"></i> Cari</button>
                                    <!-- <a href="" class="subs_btn" id="btn-cari"><i class="fas fa-search"></i> Cari</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta part end-->

<div id="hasil">
    <!-- pricing part start-->
    <section class="tour_package padding_top single_pack" style="padding-top: 5%;">
        <div class="container">
            <div class="row align-items-center">
                <?php foreach($data as $a){?>   
                    <div class="col-lg-4">
                        <div class="tour_pack_content">
                            <img src="<?php echo base_url('admin/images/'.$a->gambar_prestasi);?>" alt="">
                            <h2><?php echo $a->prestasi; ?></h2>
                            <p><?php echo $a->nis; ?></p>
                            <p><?php echo $a->nama_alumni; ?></p>
                            <!-- <a href="#" class="btn_1">join now</a> -->
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>
    <!-- pricing part end-->


<script type="text/javascript">
  var keyword = document.getElementById('input-text');
  var hasil = document.getElementById('hasil');
  var btnCari = document.getElementById('btn-cari');

  btnCari.addEventListener('click', function(){
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
      if (ajax.readyState == 4 && ajax.status == 200) {
        window.scrollTo(0, 650);
        hasil.innerHTML = ajax.responseText;
      }
    }

    ajax.open('GET', '<?php echo base_url("Prestasi/search?keyword=");?>' + keyword.value,true);
    ajax.send();
  });
</script>

    
