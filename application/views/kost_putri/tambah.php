<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  	<div class="card-header">
			    	Form Tambah Data Kost Putri
			  	</div>
			  	<div class="card-body">
			  		<?php if( validation_errors() ): ?>
			  			<div class="alert alert-danger" role="alert">
  							<?= validation_errors(); ?>
						</div>
					<?php endif; ?>
			    	<form action="" method="post">
						<div class="form-group">
				    		<label for="nama">Nama</label>
				    		<input type="text" name= "nama"class="form-control" id="nama">
  						</div>
  						<div class="form-group">
				    		<label for="kampus">Kampus</label>
				    		<input type="text" name="kampus"class="form-control" id="kampus">
  						</div>
  						<div class="form-group">
				    		<label for="nokamar">No Kamar</label>
				    		<input type="number" name="nokamar"class="form-control" id="nokamar">
  						</div>
  						<div class="form-group">
				    		<label for="alamat">Alamat</label>
				    		<input type="text" name="alamat"class="form-control" id="alamat">
  						</div>
  						<div class="form-group">
				    		<label for="nohp">No Handphone</label>
				    		<input type="text" name="nohp"class="form-control" id="nohp">
  						</div>
  						<div class="form-group">
						    <label for="keterangankost">Keterangan Kost</label>
						    <select class="form-control" id="keterangankost" name="keterangan">
						      	<option value="Per Bulan">Per Bulan</option>
						      	<option value="Per Tahun">Per Tahun</option>
						    </select>
  						</div>
  						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
			  	</div>
			</div>
		</div>
	</div>
</div>