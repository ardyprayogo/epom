<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin') ?>">Home</a></li>
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('admin/pengajar') ?>">Data Pengajar</a></li>
          <li class="breadcrumb-item active" aria-current="page">Update Pengajar</li>
        </ol>
      </nav>
      <h1 class="display-4">
        <i class="fa fa-pencil-square-o"></i>
        Update Pengajar
      </h1>
      <h6 class="text-muted">Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
      <hr>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">      
      <?php echo form_open('admin/update_pengajar/'.$result['id_pengajar']); ?>
        <div class="form-group">
          <small class="text-muted">Nama lengkap</small>
          <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $result['nama'] ?>">
          <small class="text-info"><?php echo form_error('nama') ?></small>     
        </div>
        <div class="form-group">
          <small class="text-muted">Tanggal lahir</small>
          <input type="date" class="form-control" name="tgllhr" value="<?php echo $result['tgllhr'] ?>">
          <small class="text-info"><?php echo form_error('tgllhr') ?></small>     
        </div>
        <div class="form-group">
          <small class="text-muted">Email</small>
          <input type="text" class="form-control" placeholder="example@mail.com" name="email" value="<?php echo $result['email'] ?>">
          <small class="text-info"><?php echo form_error('email') ?></small>     
        </div>
        <div class="form-group">
          <small class="text-muted">Jenis Kelamin</small>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="jk" value="l"
              <?php
              if($result['jk'] === 'l'){
                echo "checked";
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
              if($result['jk'] === 'p'){
                echo "checked";
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
            if($result['agama'] === 'islam'){
              echo "selected";
            }
            ?>
            >Islam</option>
          	<option value="katolik" 
            <?php
            if($result['agama'] === 'katolik'){
              echo "selected";
            }
            ?>
            >Katolik</option>
          	<option value="protestan" 
            <?php
            if($result['agama'] === 'protestan'){
              echo "selected";
            }
            ?>
            >Protestan</option>
          	<option value="hindu" 
            <?php
            if($result['agama'] === 'hindu'){
              echo "selected";
            }
            ?>
            >Hindu</option>
          	<option value="budha" 
            <?php
            if($result['agama'] === 'budha'){
              echo "selected";
            }
            ?>
            >Budha</option>
          	<option value="lain" 
            <?php
            if($result['agama'] === 'lain'){
              echo "selected";
            }
            ?>
            >Lain</option>
          </select>
          <small class="text-info"><?php echo form_error('agama') ?></small>
        </div>  
        <div class="form-group">
          <small class="text-muted">Alamat</small>
          <textarea name="almt" class="form-control" rows="5" placeholder="Alamat"><?php echo $result['almt'] ?></textarea>
          <small class="text-info"><?php echo form_error('almt') ?></small>
        </div>
        <div class="form-group">
          <small class="text-muted">Pendidikan</small>
          <input type="text" class="form-control" placeholder="S1/S2/S3" name="pend" value="<?php echo $result['pendidikan'] ?>">
          <small class="text-info"><?php echo form_error('pend') ?></small>
        </div>  
        <div class="form-group">
          <small class="text-muted">Nomor Telepon</small>
          <input type="text" class="form-control" placeholder="No. Telp" name="notelp" value="<?php echo $result['notelp'] ?>">
          <small class="text-info"><?php echo form_error('notelp') ?></small>
        </div>
        <div class="form-group">
          <a href="<?php echo site_url('admin/pengajar') ?>" class="btn btn-secondary">Back</a>
          <button type="submit" name="update" class="btn btn-info">Update</button>
        </div>     
      </div>  
    </form>
  </div>
</div>

