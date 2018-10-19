<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Laporan</li>
        </ol>
      </nav>
      <h1 class="display-4">
        <i class="fa fa-file-o"></i>
        Laporan
      </h1>
      <h6 class="text-muted">Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
      <hr>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col text-right">
      <a href="<?php echo site_url('admin/cetak_laporan') ?>" target="_blank" class="btn btn-sm btn-info">
        <i class="fa fa-print"></i>
        Print
      </a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <table class="table table-striped table-hover table-bordered text-center">
        <thead class="table-info">
          <tr>
            <th width="5%">No</th>
            <th width="">ID Pengajar</th>
            <th width="">Nama Pengajar</th>
            <th width="">Nilai</th>
          </tr>     
        </thead>
        <tbody>
				<?php
				$no = 1;
				foreach ($result as $nilai) :
				?>
          <tr>
            <td class=""><?php echo $no++ ?></td>
            <td class=""><?php echo $nilai['id_pengajar'] ?></td>
            <td class="text-capitalize"><?php echo $nilai['nama'] ?></td>
            <td class=""><?php echo number_format($nilai['total'],3,',','.') ?></td>
          </tr>
				<?php
				endforeach;
				?>
        </tbody>
      </table>
    </div>
  </div>
</div>
