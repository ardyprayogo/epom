<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin/kriteria') ?>">Data Kriteria</a></li>
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin/subkriteria') ?>">Data Sub Kriteria</a></li>
          <li class="breadcrumb-item active" aria-current="page">Input Sub Kriteria</li>
        </ol>
      </nav>
      <h1 class="display-4">
        <i class="fa fa-check"></i>
        Input Sub Kriteria
      </h1>
      <h6 class="text-muted">Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
      <hr>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <?php echo form_open('admin/input_subkriteria/'); ?>
				<div class="form-group">
					<small class="text-muted">Kriteria</small>
					<select name="kriteria" class="custom-select form-control">
            <option value="" selected="" disabled="" hidden="">Pilih Kriteria</option>
            <option value="c1"
            <?php
            if($this->input->post('kriteria') === 'c1')
            {
              echo 'selected';
            }
            ?>
            >C1 - Pedagogik</option>
            <option value="c2"
            <?php
            if($this->input->post('kriteria') === 'c2')
            {
              echo 'selected';
            }
            ?>
            >C2 - Kepribadian</option>
            <option value="c3"
            <?php
            if($this->input->post('kriteria') === 'c3')
            {
              echo 'selected';
            }
            ?>
            >C3 - Sosial</option>
            <option value="c4"
            <?php
            if($this->input->post('kriteria') === 'c4')
            {
              echo 'selected';
            }
            ?>
            >C4 - Profesional</option>
          </select>
					<small class="text-info"><?php echo form_error('kriteria') ?></small>
				</div>
        <div class="form-group">
          <small class="text-muted">Sub Kriteria</small>
          <input type="text" class="form-control" name="subkriteria" placeholder="Sub Kriteria" value="<?php echo $this->input->post('subkriteria') ?>">
          <small class="text-info"><?php echo form_error('subkriteria') ?></small>
        </div>
        <div class="form-group">
          <small class="text-muted">Kuesioner</small>
          <textarea name="ket" class="form-control" rows="5" placeholder="Keterangan / Kuesioner"><?php echo $this->input->post('ket') ?></textarea>
          <small class="text-info"><?php echo form_error('ket') ?></small>
        </div>
        <div class="form-group">
        	<a href="<?php echo site_url('admin/subkriteria') ?>" class="btn btn-secondary">Back</a>
        	<button type="submit" name="input" class="btn btn-info">Input</button>
        </div>     
      </form>
    </div> 
  </div>
</div>
