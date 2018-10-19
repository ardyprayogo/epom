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
    <div class="col">
    	<div class="card">
			  <div class="card-body">
			    <form action="<?php echo site_url('murid/insert_nilai') ?>" class="mx-3 my-3" method="POST">
			    	<div class="form-group">
			    		<small class="text-muted">ID Murid</small>
			    		<input type="text" class="form-control" name="id_murid" placeholder="ID Murid">
			    	</div>
			    	<div class="form-group">
			    		<small class="text-muted">ID Pengajar</small>
			    		<input type="text" class="form-control" name="id_pengajar" placeholder="ID Pengajar">
			    	</div>
			    	<div class="form-group">
			    		<small class="text-muted">Pedagogik</small>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="pedagogik" value="1">
		              1
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="pedagogik" value="2">
		              2
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="pedagogik" value="3">
		              3
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="pedagogik" value="4">
		              4
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="pedagogik" value="5">
		              5
		            </label>
		          </div>
			    	</div>
			    	<div class="form-group">
			    		<small class="text-muted">Kepribadian</small>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="kepribadian" value="1">
		              1
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="kepribadian" value="2">
		              2
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="kepribadian" value="3">
		              3
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="kepribadian" value="4">
		              4
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="kepribadian" value="5">
		              5
		            </label>
		          </div>
			    	</div>
			    	<div class="form-group">
			    		<small class="text-muted">Sosial</small>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="sosial" value="1">
		              1
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="sosial" value="2">
		              2
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="sosial" value="3">
		              3
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="sosial" value="4">
		              4
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="sosial" value="5">
		              5
		            </label>
		          </div>
			    	</div>
			    	<div class="form-group">
			    		<small class="text-muted">Profesional</small>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="profesional" value="1">
		              1
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="profesional" value="2">
		              2
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="profesional" value="3">
		              3
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="profesional" value="4">
		              4
		            </label>
		          </div>
		          <div class="form-check">
		            <label class="form-check-label">
		              <input class="form-check-input" type="radio" name="profesional" value="5">
		              5
		            </label>
		          </div>
			    	</div>
			    	<button class="btn btn-info" type="submit" name="nilai">Ok</button>	
			    </form>
			  </div>
			</div>
    </div>
  </div>
</div>