<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Kriteria</li>
        </ol>
      </nav>
      <h1 class="display-4">
        <i class="fa fa-puzzle-piece"></i>
        Data Kriteria
      </h1>
      <h6 class="text-muted">Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
      <hr>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col">
      <table class="table table-hover text-center text-capitalize table-striped table-bordered">
        <thead class="table-info">
          <tr>
            <th width="5%">No</th>
            <th width="30%">ID Kriteria</th>
            <th width="30%">Kriteria</th>
            <th width="20%">Bobot</th>
            <th width="15%">Action</th>
          </tr>     
        </thead>
        <tbody>
				<?php
				$no = 1;
				foreach ($result as $kriteria) :
        $bobot = $kriteria['bobot']*100;
				?>  
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $kriteria['id_kriteria'] ?></td>
            <td><?php echo $kriteria['kriteria'] ?></td>
            <td><?php echo $bobot.'%' ?></td>
            <td>
              <a href="<?php echo site_url('admin/update_kriteria/'.$kriteria['id_kriteria']) ?>" class="btn btn-sm btn-warning">
                <i class="fa fa-pencil-square-o"></i>
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
