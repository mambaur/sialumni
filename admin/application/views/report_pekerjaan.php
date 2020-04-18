<div class="container-fluid">
  <!-- Page Heading -->



		  	<div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-12">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Pekerjaan Alumni</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4">
                    <canvas id="myPieChart"></canvas>
                  </div>
					<div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Kerja
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Tidak Kerja/Kuliah
                    </span>
                  </div>
              </div>
            </div>				

</div>
<br><br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pekerjaan</h6>
    </div>
    <div class="card-body">
	<div class="table-responsive">	
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

          <thead>
            <tr>
              <th>NIS </th>
              <th>Nama Alumni </th>
              <th>Pekerjaan </th>
				<th >Detail</th>
              
            </tr>
          </thead>               
          <?php foreach($row as $rows){?>
            <tr>
              <td><?php echo $rows->nis; ?></td>
              <td><?php echo $rows->nama_alumni; ?></td>
              <td><?php echo $rows->deskripsi; ?></td>
              
              <td align="center"><a href="<?php echo base_url('Alumni/pekerjaan/'.$rows->nis); ?>"><i class="fas fa-pencil-alt"></i></a></td>
          
          <?php
}
?>
                </table>
		</div>
	</div>
</div>
	


            