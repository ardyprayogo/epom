<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Murid</li>
        </ol>
      </nav>
      <h1 class="display-4">
        <i class="fa fa-graduation-cap"></i>
        Data Murid
      </h1>
      <h6 class="text-muted">Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
      <hr>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col text-right">
      <a href="<?php echo site_url('admin/input_murid') ?>" class="btn btn-sm btn-info">
        <i class="fa fa-plus"></i>
        Input Murid
      </a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <table class="table table-striped table-hover text-center text-capitalize table-bordered">
        <thead class="table-info">
          <tr>
            <th width="5%">No</th>
            <th width="35%">Nama</th>
            <th width="20%">Tanggal Lahir</th>
            <th width="10%">Tingkat</th>
            <th width="25%">No. Telp</th>
            <th colspan="2" width="5%">Action</th>
          </tr>     
        </thead>
        <tbody>
				<?php
				$no = 1;
				foreach ($result as $murid) :
				?> 
          <tr>
            <td><?php echo $no++ ?></td>
            <td>
              <a class="text-dark" href="<?php echo site_url('admin/detail_murid/') ?>">
                <?php echo $murid['nama'] ?>
              </a>
            </td>
            <td><?php echo date('d-m-Y', strtotime($murid['tgllhr'])) ?></td>
            <td class="text-uppercase"><?php echo $murid['tingkat'] ?></td>
            <td><?php echo $murid['notelp'] ?></td>
            <td>
              <a href="<?php echo site_url('admin/update_murid/'.$murid['id_murid']) ?>" class="btn btn-sm btn-warning"> 
                <i class="fa fa-pencil-square-o"></i>
              </a>
            </td>
            <td>
              <a href="<?php echo site_url('admin/delete_murid/'.$murid['id_murid']) ?>" class="btn btn-sm btn-danger"> 
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
