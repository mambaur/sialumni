
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


<!-- Tabel Data Alumni-->
  <div class="container section-top-border">
    <h3 class="mb-30">Data Alumni</h3>
      <hr>
          <input type="text" class="form-control" id="cari-data" placeholder="Cari Data Alumni..">
          <!-- <button type="button" id="btn-cari">Search</button> -->
          <!-- <a href="<?php echo base_url('DataAlumni'); ?>">Reset</a> -->
        <br>
        <div class="progress-table-wrap">
          <div class="progress-table">
            <div class="table-head">
              <div class="serial">#</div>
              <div class="country">Foto</div>
              <div class="country">Nama Alumni</div>
              <div class="country">Jurusan</div>
              <div class="visit">Tahun</div>
              <div class="visit">No Telp</div>
              <div class="visit">Alamat</div>
              <div class="visit">kuliah</div>
              <div class="percentage"></div>
            </div>
            <div id="hasil">
            <?php 
                  $no=1;
                  foreach($data as $a){
                  ?>
            <div class="table-row">
              <div class="serial"><?php echo $no++; ?></div>
              <div class="country"><img style="width: 60px;" class="img-fluid rounded-circle" src="<?= base_url('admin/images/' . $a->foto); ?>"></div>
              <div class="country"><?php echo $a->nama_alumni; ?></div>
              <div class="country"><?php echo $a->jurusan; ?></div>
              <div class="visit"><?php echo $a->tahun_masuk; ?></div>
              <div class="visit"><?php echo $a->no_telp; ?></div>
              <div class="visit"><?php echo $a->alamat_skr; ?></div>
              <div class="visit"><?php echo $a->kuliah; ?></div>
              <div class="percentage justify-content-center"><a href="<?= base_url('DataAlumni/detail_alumni?id=' . $a->nis) ?>">Detail &nbsp<i class="fas fa-external-link-alt"></i></a></div>
            </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>

<script type="text/javascript">
  var keyword = document.getElementById('cari-data');
  var hasil = document.getElementById('hasil');
  var btnCari = document.getElementById('btn-cari');

  keyword.addEventListener('keyup', function(){
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
      if (ajax.readyState == 4 && ajax.status == 200) {
        hasil.innerHTML = ajax.responseText;
      }
    }

    ajax.open('GET', '<?php echo base_url("DataAlumni/search?keyword=");?>' + keyword.value,true);
    ajax.send();
  });
</script>

