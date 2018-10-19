<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin/kriteria') ?>">Data Kriteria</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Sub Kriteria</li>
        </ol>
      </nav>
      <h1 class="display-4">
        <i class="fa fa-check"></i>
        Data Sub Kriteria
      </h1>
      <h6 class="text-muted">Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
      <hr>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col text-right">
      <a href="<?php echo site_url('admin/input_subkriteria') ?>" class="btn btn-sm btn-info">
        <i class="fa fa-plus"></i>
        Input Sub Kriteria
      </a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <table class="table table-striped table-hover table-bordered text-center">
        <thead class="table-info">
          <tr>
            <th width="5%">No</th>
            <th width="20%">ID Kriteria</th>
            <th width="20%">Sub Kriteria</th>
            <th width="50%">Keterangan / Pertanyaan Kuesioner</th>
            <th colspan="2" width="5%">Action</th>
          </tr>     
        </thead>
        <tbody>
				<?php
				$no = 1;
				foreach ($result as $subkriteria) :
				?>
          <tr>
            <td class="text-center"><?php echo $no++ ?></td>
            <td class="text-capitalize"><?php echo $subkriteria['kriteria'] ?></td>
            <td class="text-capitalize"><?php echo $subkriteria['sub'] ?></td>
            <td class="text-left"><?php echo $subkriteria['ket'] ?></td>
            <td>
              <a href="<?php echo site_url('admin/update_subkriteria/'.$subkriteria['id_sub']) ?>" class="btn btn-sm btn-warning"> 
                <i class="fa fa-pencil-square-o"></i>
              </a>
            </td>
            <td>
              <a href="<?php echo site_url('admin/delete_subkriteria/'.$subkriteria['id_sub']) ?>" class="btn btn-sm btn-danger"> 
                <i class="fa fa-trash-o"></i>
              </a>
            </td>
          </tr>
				<?php
				endforeach;
				?>
        </tbody>
      </table>
    </div>
  </div>
</div>
