<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin/pengajar') ?>">Data Pengajar</a></li>
          <li class="breadcrumb-item active" aria-current="page">Input Pengajar</li>
        </ol>
      </nav>
      <h1 class="display-4">
        <i class="fa fa-users"></i>
        Input Pengajar
      </h1>
      <h6 class="text-muted">Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
      <hr>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <?php echo form_open('admin/input_pengajar/'); ?>
        <div class="form-group">
          <small class="text-muted">Nama lengkap</small>
          <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $this->input->post('nama') ?>">
          <small class="text-info"><?php echo form_error('nama') ?></small>
        </div>
        <div class="form-group">
          <small class="text-muted">Tanggal lahir</small>
          <input type="date" class="form-control" name="tgllhr" value="<?php echo $this->input->post('tgllhr') ?>">
          <small class="text-info"><?php echo form_error('tgllhr') ?></small>
        </div>
        <div class="form-group">
          <small class="text-muted">Email</small>
          <input type="text" class="form-control" placeholder="example@mail.com" name="email" value="<?php echo $this->input->post('email') ?>">
          <small class="text-info"><?php echo form_error('email') ?></small>
        </div>
        <div class="form-group">
          <small class="text-muted">Jenis Kelamin</small>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="jk" value="l"
              <?php
              if($this->input->post('jk') === 'l')
              {
                echo 'checked';
              }
              ?>
              >
              Laki-laki
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="jk" value="p"
              <?php
              if($this->input->post('jk') === 'p')
              {
                echo 'checked';
              }
              ?>
              >
              Perempuan
            </label>
          </div>
          <small class="text-info"><?php echo form_error('jk') ?></small>
        </div>
        <div class="form-group">
        	<small class="text-muted">Agama</small>
          <select name="agama" class="custom-select">
          	<option value="" disabled="" selected="" hidden="">Pilih Agama</option>
          	<option value="islam"
          	<?php
          	if ($this->input->post('agama') === 'islam'){
          		echo "selected";
          	}
          	?>
          	>Islam</option>
          	<option value="katolik"
          	<?php
          	if ($this->input->post('agama') === 'katolik'){
          		echo "selected";
          	}
          	?>
          	>Katolik</option>
          	<option value="protestan"
          	<?php
          	if ($this->input->post('agama') === 'protestan'){
          		echo "selected";
          	}
          	?>
          	>Protestan</option>
          	<option value="hindu"
          	<?php
          	if ($this->input->post('agama') === 'hindu'){
          		echo "selected";
          	}
          	?>
          	>Hindu</option>
          	<option value="budha"
          	<?php
          	if ($this->input->post('agama') === 'budha'){
          		echo "selected";
          	}
          	?>
          	>Budha</option>
          	<option value="lain"
          	<?php
          	if ($this->input->post('agama') === 'lain'){
          		echo "selected";
          	}
          	?>
          	>Lain</option>
          </select>
          <small class="text-info"><?php echo form_error('agama') ?></small>
        </div>  
        <div class="form-group">
          <small class="text-muted">Alamat</small>
          <textarea name="almt" class="form-control" rows="5" placeholder="Alamat"><?php echo $this->input->post('almt') ?></textarea>
          <small class="text-info"><?php echo form_error('almt') ?></small>
        </div>
        <div class="form-group">
          <small class="text-muted">Pendidikan</small>
          <input type="text" class="form-control" placeholder="S1/S2/S3" name="pend" value="<?php echo $this->input->post('pend') ?>">
          <small class="text-info"><?php echo form_error('pend') ?></small>
        </div>  
        <div class="form-group">
          <small class="text-muted">Nomor Telepon</small>
          <input type="text" class="form-control" placeholder="No. Telp" name="notelp" value="<?php echo $this->input->post('notelp') ?>">
          <small class="text-info"><?php echo form_error('notelp') ?></small>
        </div>
        <div class="form-group">
        	<a href="<?php echo site_url('admin/pengajar') ?>" class="btn btn-secondary">Back</a>
        	<button type="submit" name="input" class="btn btn-info">Input</button>
        </div>     
      </form>
    </div> 
  </div>
</div>
