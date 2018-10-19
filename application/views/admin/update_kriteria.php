<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin/kriteria') ?>">Data Kriteria</a></li>
          <li class="breadcrumb-item active" aria-current="page">Update Kriteria</li>
        </ol>
      </nav>
      <h1 class="display-4">
        <i class="fa fa-pencil-square-o"></i>
        Update Kriteria
      </h1>
      <h6 class="text-muted">Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
      <hr>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <?php echo form_open('admin/update_kriteria/'.$result['id_kriteria']); ?>
        <div class="form-group">
          <small class="text-muted">ID Kriteria</small>
          <input type="text" class="form-control text-capitalize" name="kriteria" disabled="" value="<?php echo $result['id_kriteria'] ?>">
        </div>
        <div class="form-group">
          <small class="text-muted">Kriteria</small>
          <input type="text" class="form-control text-capitalize" disabled="" value="<?php echo $result['kriteria'] ?>">
        </div>
        <div class="form-group">
          <small class="text-muted">Bobot</small>
          <input type="text" class="form-control" name="bobot" placeholder="Kriteria" value="<?php echo $result['bobot'] ?>">
          <small class="text-info"><?php echo form_error('bobot') ?></small>
        </div>
        <div class="form-group">
          <a href="<?php echo site_url('admin/kriteria') ?>" class="btn btn-secondary">Back</a>
          <button type="submit" name="input" class="btn btn-info">Update</button>
        </div>     
      </form>
    </div> 
  </div>
</div>
