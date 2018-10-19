<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Penilaian</li>
        </ol>
      </nav>
      <h1 class="display-4">
        <i class="fa fa-bookmark"></i>
        Penilaian
      </h1>
      <h6 class="text-muted">Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
      <hr>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col">
      <table class="table table-hover text-center table-striped text-capitalize table-bordered">
        <thead class="table-info">
          <tr>
            <th>No</th>
            <th>Pengajar</th>
            <th>Pedagogik</th>
            <th>Kepribadian</th>
            <th>Sosial</th>
            <th>Profesional</th>
            <th>Dievaluasi oleh</th>
          </tr>     
        </thead>
        <tbody>
        <?php
        $no =1;
        foreach ($result as $row) :
        ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo number_format($row['c1'],3,',','.') ?></td>
            <td><?php echo number_format($row['c2'],3,',','.') ?></td>
            <td><?php echo number_format($row['c3'],3,',','.') ?></td>
            <td><?php echo number_format($row['c4'],3,',','.') ?></td>
            <td><?php echo $row['penilai'].' Murid' ?></td>
          </tr>
        <?php
      	endforeach;
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>