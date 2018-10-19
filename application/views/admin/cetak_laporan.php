<script>
  window.print();
</script>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $title ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.min.css') ?>">

  </head>
  <body>

    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <p>EPOM | Nurul Fikri</p>
        </div>
        <div class="col text-right">
          <p><?php echo 'Jakarta, '.date('d F Y') ?></p>
        </div>
      </div>
      <div class="row mt-5 text-center">
        <div class="col">
          <h1 class="display-4">
            <i class="fa fa-print"></i>
            Laporan
          </h1>
          <h6>Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
          <hr>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col">
          <p class="text-justify">
            Berdasarkan aplikasi Evaluasi Pengajar Oleh Murid pada tanggal <strong><?php echo date('d F Y') ?></strong>, 
            pada Sistem Pendukung Keputusan Untuk Evaluasi Kinerja pengajar, 
            diperoleh hasil sebagai berikut :
          </p>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <table class="table table-sm table-bordered text-center">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th width="15%">ID Pengajar</th>
                <th width="">Nama Pengajar</th>
                <th width="">Nilai</th>
                <th width="">Keterangan</th>
              </tr>     
            </thead>
            <tbody>
    				<?php
    				$no = 1;
    				foreach ($result as $nilai) :
    				?>
              <tr>
                <td class=""><?php echo $no++ ?></td>
                <td class=""><?php echo $nilai['id_pengajar'] ?></td>
                <td class="text-capitalize"><?php echo $nilai['nama'] ?></td>
                <td class=""><?php echo number_format($nilai['total'],3,',','.') ?></td>
                <td class="">
                  <?php
                  switch ($nilai['total']) {
                    case ($nilai['total']>=0.95):
                      echo 'Sangat Baik';
                      break;
                    case ($nilai['total']>= 0.85 && $nilai['total']<= 0.95):
                      echo 'Baik';
                      break;
                    default:
                      echo 'Cukup';
                      break;
                  }
                  
                  ?> 
                </td>
              </tr>
    				<?php
    				endforeach;
    				?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col">
          <p class="text-justify">
            Demikian informasi tersebut disampaikan, semoga dapat dipergunakan sebagaimana mestinya.
          </p>
        </div>
      </div>
      <div class="row my-5">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col">
          <p class="text-center">
            Hormat Kami,
            <br>
            Admin
          </p>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('asset/js/jquery-3.2.1.slim.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
  </body>
</html>
<script>
  window.close();
</script>