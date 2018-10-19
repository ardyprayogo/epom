<div class="container">
  <div class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-dark" href="<?php echo site_url('murid') ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Penilaian</li>
        </ol>
      </nav>
      <h1 class="display-4 text-center">
        <i class="fa fa-bookmark"></i>
        Penilaian Pengajar
      </h1>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-4">
	    <div class="list-group" id="list-tab" role="tablist">
	      <a class="list-group-item list-group-item-action active" id="list-Pengajar-list" data-toggle="list" href="#list-Pengajar" role="tab" aria-controls="Pengajar"><i class="fa fa-user-circle"></i> Pilih Pengajar</a>
	      <a class="list-group-item list-group-item-action" id="list-Pedagogik-list" data-toggle="list" href="#list-Pedagogik" role="tab" aria-controls="Pedagogik"><i class="fa fa-puzzle-piece"></i> Pedagogik</a>
	      <a class="list-group-item list-group-item-action" id="list-Kepribadian-list" data-toggle="list" href="#list-Kepribadian" role="tab" aria-controls="Kepribadian"><i class="fa fa-heart"></i> Kepribadian</a>
	      <a class="list-group-item list-group-item-action" id="list-Sosial-list" data-toggle="list" href="#list-Sosial" role="tab" aria-controls="Sosial"><i class="fa fa-group"></i> Sosial</a>
	      <a class="list-group-item list-group-item-action" id="list-Profesional-list" data-toggle="list" href="#list-Profesional" role="tab" aria-controls="Profesional"><i class="fa fa-certificate"></i> Profesional</a>
	      <a class="list-group-item list-group-item-action" id="list-Profesional-list" data-toggle="list" href="#list-Finish" role="tab" aria-controls="Finish"><i class="fa fa-check-circle"></i> Finish</a>
	    </div>
	  </div>
	  <div class="col-8">
	  	<?php echo form_open('murid/penilaian') ?>
	    <div class="tab-content" id="nav-tabContent">
	      <div class="tab-pane fade show active" id="list-Pengajar" role="tabpanel" aria-labelledby="list-Pengajar-list">
	      	<div class="card">
					  <div class="card-body">
					  	<h6 class="text-muted text-left text-uppercase">Pilih Pengajar</h6>
					  	<div class="form-group">
					  		<select name="id_pengajar" class="custom-select form-control text-capitalize">
						  		<option value="" selected="" disabled="" hidden="">Pilih</option>
						  		<?php
						  		foreach ($pengajar as $option):
						  		?>
						  		<option value="<?php echo $option['id_pengajar'] ?>"><?php echo $option['nama'] ?></option>
						  		<?php
						  		endforeach;
						  		?>
						  	</select>
								<small class="text-primary"><p><?php echo form_error('id_pengajar') ?></p></small>
					  	</div>			  	
					  </div>
					</div>
	      </div>
	      <div class="tab-pane fade" id="list-Pedagogik" role="tabpanel" aria-labelledby="list-Kepribadian-list">
	      	<div class="card">
					  <div class="card-body text-center">
					  	<?php
					  	$no = 0;
					  	foreach ($result_c1 as $c1):
					  	?>
					  	<h6 class="text-muted text-left text-uppercase"><?php echo $c1['sub'] ?></h6>
					  	<p class="mt-3"><?php echo $c1['ket'] ?></p>
					    <div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c1s<?php echo $no?>" value="1">Kurang
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c1s<?php echo $no?>" value="2">Sedang
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c1s<?php echo $no?>" value="3">Cukup
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c1s<?php echo $no?>" value="4">Baik
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c1s<?php echo $no?>" value="5">Sangat Baik
							  </label>
							</div>
							<small class="text-primary"><p><?php echo form_error('c1s'.$no) ?></p></small>
							<hr>
							<?php
							$no++;
							endforeach;
							?>
					  </div>
					</div>
	      </div>
	      <div class="tab-pane fade" id="list-Kepribadian" role="tabpanel" aria-labelledby="list-Kepribadian-list">
	      	<div class="card">
					  <div class="card-body text-center">
							<?php
					  	$no = 0;
					  	foreach ($result_c2 as $c2):
					  	?>
					  	<h6 class="text-muted text-left text-uppercase"><?php echo $c2['sub'] ?></h6>
					  	<p class="mt-3"><?php echo $c2['ket'] ?></p>
					    <div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c2s<?php echo $no?>" value="1">Kurang
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c2s<?php echo $no?>" value="2">Sedang
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c2s<?php echo $no?>" value="3">Cukup
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c2s<?php echo $no?>" value="4">Baik
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c2s<?php echo $no?>" value="5">Sangat Baik
							  </label>
							</div>
							<small class="text-primary"><p><?php echo form_error('c2s'.$no) ?></p></small>
							<hr>
							<?php
							$no++;
							endforeach;
							?>
					  </div>
					</div>
	      </div>
	      <div class="tab-pane fade" id="list-Sosial" role="tabpanel" aria-labelledby="list-Sosial-list">
	      	<div class="card">
					  <div class="card-body text-center">
							<?php
					  	$no = 0;
					  	foreach ($result_c3 as $c3):
					  	?>
					  	<h6 class="text-muted text-left text-uppercase"><?php echo $c3['sub'] ?></h6>
					  	<p class="mt-3"><?php echo $c3['ket'] ?></p>
					    <div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c3s<?php echo $no?>" value="1">Kurang
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c3s<?php echo $no?>" value="2">Sedang
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c3s<?php echo $no?>" value="3">Cukup
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c3s<?php echo $no?>" value="4">Baik
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c3s<?php echo $no?>" value="5">Sangat Baik
							  </label>
							</div>
							<small class="text-primary"><p><?php echo form_error('c3s'.$no) ?></p></small>
							<hr>
							<?php
							$no++;
							endforeach;
							?>
					  </div>
					</div>
	      </div>
	      <div class="tab-pane fade" id="list-Profesional" role="tabpanel" aria-labelledby="list-Profesional-list">
	      	<div class="card">
					  <div class="card-body text-center">
							<?php
					  	$no = 0;
					  	foreach ($result_c4 as $c4):
					  	?>
					  	<h6 class="text-muted text-left text-uppercase"><?php echo $c4['sub'] ?></h6>
					  	<p class="mt-3"><?php echo $c4['ket'] ?></p>
					    <div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c4s<?php echo $no?>" value="1">Kurang
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c4s<?php echo $no?>" value="2">Sedang
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c4s<?php echo $no?>" value="3">Cukup
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c4s<?php echo $no?>" value="4">Baik
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="c4s<?php echo $no?>" value="5">Sangat Baik
							  </label>
							</div>
							<small class="text-primary"><p><?php echo form_error('c4s'.$no) ?></p></small>
							<hr>
							<?php
							$no++;
							endforeach;
							?>
					  </div>
					</div>
	      </div>
	      <div class="tab-pane fade" id="list-Finish" role="tabpanel" aria-labelledby="list-Finish-list">
	      	<div class="card">
					  <div class="card-body text-center">
							
							<button class="btn btn-primary" name="input" type="submit">
								<i class="fa fa-check-circle"></i>
								Finish
							</button>
					  </div>
					</div>
	      </div>
	    </div>
	    </form>
	  </div>
  </div>
</div>