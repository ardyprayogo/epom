<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin/murid') ?>">Data Murid</a></li>
          <li class="breadcrumb-item active" aria-current="page">Input Murid</li>
        </ol>
      </nav>
      <h1 class="display-4">
        <i class="fa fa-graduation-cap"></i>
        Input Murid
      </h1>
      <h6 class="text-muted">Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
      <hr>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <?php echo form_open('admin/input_murid/'); ?>
				<div class="form-group">
					<small class="text-muted">Nama lengkap</small>
					<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $this->input->post('nama') ?>">
					<small class="text-info"><?php echo form_error('nama') ?></small>
				</div>
				<div class="form-group">
					<small class="text-muted">Tanggal lahir</small>
					<input type="date" class="form-control" name="tgllhr" value="<?php echo $this->input->post('tgllhr') ?>">
					<small class="text-info"><?php echo form_error('tgllhr') ?></small>
				</div>
				<div class="form-group">
					<small class="text-muted">Email</small>
					<input type="text" class="form-control" name="email" placeholder="example@mail.com" value="<?php echo $this->input->post('email') ?>">
					<small class="text-info"><?php echo form_error('email') ?></small>
				</div>
				<div class="form-group">
					<small class="text-muted">Password</small>
					<input type="password" class="form-control" name="pass" placeholder="*******" value="<?php echo $this->input->post('pass') ?>">
					<small class="text-info"><?php echo form_error('pass') ?></small>
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
          <small class="text-muted">Tingkat</small>
          <select name="tingkat" class="custom-select">
          	<option value="" selected="" disabled="" hidden="">Pilih Tingkat</option>
          	<option value="" disabled="">SD</option>
          	<option value="sd-6"
          	<?php
          	if ($this->input->post('tingkat') === 'sd-6'){
          		echo "selected";
          	}
          	?>
          	>SD Kelas 6</option>
          	<option value="" disabled="">SMP</option>
          	<option value="smp-7"
          	<?php
          	if ($this->input->post('tingkat') === 'smp-7'){
          		echo "selected";
          	}
          	?>
          	>SMP Kelas 7</option>
          	<option value="smp-8"
          	<?php
          	if ($this->input->post('tingkat') === 'smp-8'){
          		echo "selected";
          	}
          	?>
          	>SMP Kelas 8</option>
          	<option value="smp-9"
          	<?php
          	if ($this->input->post('tingkat') === 'smp-9'){
          		echo "selected";
          	}
          	?>
          	>SMP Kelas 9</option>
          	<option value="" disabled="">SMA</option>
          	<option value="sma-10"
          	<?php
          	if ($this->input->post('tingkat') === 'sma-10'){
          		echo "selected";
          	}
          	?>
          	>SMA Kelas 10</option>
          	<option value="sma-11"
          	<?php
          	if ($this->input->post('tingkat') === 'sma-11'){
          		echo "selected";
          	}
          	?>
          	>SMA Kelas 11</option>
          	<option value="sma-12"
          	<?php
          	if ($this->input->post('tingkat') === 'sma-12'){
          		echo "selected";
          	}
          	?>
          	>SMA Kelas 12</option>
          </select>
          <small class="text-info"><?php echo form_error('tingkat') ?></small>
        </div>  
        <div class="form-group">
          <small class="text-muted">Nomor Telepon</small>
          <input type="text" class="form-control" placeholder="No. Telp" name="notelp" value="<?php echo $this->input->post('notelp') ?>">
          <small class="text-info"><?php echo form_error('notelp') ?></small>
        </div>
        <div class="form-group">
        	<a href="<?php echo site_url('admin/murid') ?>" class="btn btn-secondary">Back</a>
        	<button type="submit" name="input" class="btn btn-info">Input</button>
        </div>     
      </form>
    </div> 
  </div>
</div>
