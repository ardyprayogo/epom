<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Pengajar</li>
        </ol>
      </nav>
      <h1 class="display-4">
        <i class="fa fa-group"></i>
        Data Pengajar
      </h1>
      <h6 class="text-muted">Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
      <hr>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col text-right">
      <a href="<?php echo site_url('admin/input_pengajar') ?>" class="btn btn-sm btn-info">
        <i class="fa fa-plus"></i>
        Input Pengajar
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
            <th width="10%">Pendidikan</th>
            <th width="25%">No. Telp</th>
            <th colspan="2" width="5%">Action</th>
          </tr>     
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($result as $pengajar):
        ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td>
              <a class="text-dark" href="<?php echo site_url('admin/detail_pengajar/'.$pengajar['id_pengajar']) ?>">
                <?php echo $pengajar['nama']; ?>
              </a>
            </td>
            <td><?php echo date('d-m-Y', strtotime($pengajar['tgllhr'])) ?></td>
            <td><?php echo $pengajar['pendidikan']; ?></td>
            <td><?php echo $pengajar['notelp']; ?></td>
            <td>
              <a href="<?php echo site_url('admin/update_pengajar/'.$pengajar['id_pengajar']) ?>" class="btn btn-sm btn-warning"> 
                <i class="fa fa-pencil-square-o"></i>
              </a>
            </td>
            <td>
              <a href="<?php echo site_url('admin/delete_pengajar/'.$pengajar['id_pengajar']) ?>" class="btn btn-sm btn-danger"> 
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
