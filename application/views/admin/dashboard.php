<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>
      <h1 class="display-4">
        <i class="fa fa-dashboard"></i>
        Dashboard
      </h1>
      <h6 class="text-muted">Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
      
    </div>
  </div>
  <div class="row mt-5">
    <div class="col">
      <div class="card-group text-center">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">
              <i class="fa fa-group fa-3x"></i><br>
              <?php echo $jmlp ?> Pengajar
            </h1>
            <p class="card-text">Jumlah pengajar pada sistem pendukung keputusan ini <?php echo $jmlp ?> data.</p>
            <p class="card-text"><small class="text-muted">Pengajar merupakan Alternatif pilihan dari Sistem</small></p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">
              <i class="fa fa-graduation-cap fa-3x"></i><br>
              <?php echo $jmlm ?> Murid
            </h1>
            <p class="card-text">Jumlah murid pada sistem pendukung keputusan ini <?php echo $jmlm ?> data.</p>
            <p class="card-text"><small class="text-muted">Murid merupakan Pengambil Keputusan dari Sistem</small></p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">
              <i class="fa fa-bookmark fa-3x"></i><br>
              <?php echo $jmln ?> Penilaian
            </h1>
            <p class="card-text">Jumlah penilaian yang masuk pada sistem pendukung keputusan ini <?php echo $jmln ?> data.</p>
            <p class="card-text"><small class="text-muted">1 Pengajar dapat dievaluasi oleh 30 Murid berbeda</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>