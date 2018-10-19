    <!-- Content -->
    <style>
      .centered
      {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
    </style>
    <div class="centered">
    <div class="container">
      <div class="row align-items-center">
        <div class="col text-center">
          <h1 class="display-4">
            <i class="fa fa-info-circle fa-2x"></i>
          </h1>
          <h1 class="display-4">
            EPOM?
          </h1>
          <p class="text-muted">
            Evaluasi Pengajar Oleh Murid, instrumen untuk evaluasi kinerja pengajar dalam proses pembelajaran setiap akhir semester.
          </p>
          <a href="<?php echo site_url('about') ?>" class="btn btn-info">
            <i class="fa fa-angle-double-right"></i>
            Selengkapnya
          </a>
        </div>
        <div class="col border-left d-flex justify-content-center">
          <?php echo form_open() ?>
            <h1 class="display-4 text-center">Form Login</h1>
            <div class="form-group">
              <small class="text-muted">ID : </small>
              <input type="text" class="form-control" placeholder="ID" name="id">
              <small class="text-info"><?php echo form_error('id') ?></small>
              <small class="text-muted">Password : </small>
              <input type="password" class="form-control" placeholder="••••••••" name="pass">
              <small class="text-info"><?php echo form_error('pass') ?></small>
            </div>
            <div class="form-group">
              <small class="text-muted">Login Sebagai :</small>
              <select name="status" class="custom-select">
                <option value="" selected="" disabled="" hidden="">Pilih</option>
                <option value="murid">Murid</option>
                <option value="admin">Admin</option>
              </select>
              <small class="text-info"><?php echo form_error('status') ?></small>
            </div>
            <div class="form-group">
              <button class="btn btn-primary form-control" type="submit" name="login">
                Masuk
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>