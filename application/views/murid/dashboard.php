<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>
      <h1 class="display-4 text-center text-capitalize">
        <i class="fa fa-user-circle-o"></i>
        <?php
        echo $murid['nama'];
        ?>
      </h1>
      <h6 class="text-muted text-center">Sistem Pendukung Keputusan Evaluasi Kinerja Pengajar</h6>
      <hr class="my-5">
      <p>Terimakasih <?php
        echo $murid['nama'];
        ?> Anda sudah melakukan penilaian kepada :</p>
      <table class="table table-hover table-striped table-bordered">
        <thead class="table-primary text-center">
          <tr>
            <th width="5%">No</th>
            <th width="15%">Tanggal</th>
            <th>Nama Pengajar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($status as $info):
          ?>
          <tr>
            <td class="text-center"><?php echo $no++ ?></td>
            <td class="text-center"><?php echo date('d-m-Y', strtotime($info['tgl'])) ?></td>
            <td class="text-capitalize"><?php echo $info['nama'] ?></td>
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
      
    </div>
  </div>
</div>