
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
<hr>
<div class="container mt-5">
  <div class="row mb-5">
    <div class="col-sm-2">
      <img class="img-fluid" style="width: 300px;" src="<?= base_url('admin/images/' . $alumni['foto']); ?>">
    </div>
    <div class="col-sm-10">
      <h1><?= $alumni['nama_alumni']; ?></h1>
      <h3><?= $alumni['nis']; ?></h3>
      <h3><?= $alumni['jurusan']; ?></h3>
    </div>
  </div>
  <div class="row">
    <table class="table">
      <tbody>
        <tr>
          <td style="width: 200px;"><strong>Nama</strong></td>
          <td><?= $alumni['nama_alumni']; ?></td>
        </tr>
        <tr>
          <td><strong>Tempat Lahir</strong></td>
          <td><?= $alumni['tempat_lahir']; ?></td>
        </tr>
        <tr>
          <td><strong>Tanggal Lahir</strong></td>
          <td><?= $alumni['tgl_lahir']; ?></td>
        </tr>
        <tr>
          <td><strong>Jenis Kelamin</strong></td>
          <td><?= $alumni['jk']; ?></td>
        </tr>
        <tr>
          <td><strong>Tahun Masuk</strong></td>
          <td><?= $alumni['tahun_masuk']; ?></td>
        </tr>
        <tr>
          <td><strong>Tahun Keluar</strong></td>
          <td><?= $alumni['tahun_keluar']; ?></td>
        </tr>
        <tr>
          <td><strong>Kuliah</strong></td>
          <td><?= $alumni['kuliah']; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<hr>

