<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  	<div class="card-header">
			    	Form Ubah Data Kost Putri
			  	</div>
			  	<div class="card-body">
			    	<form action="" method="post">
			    		<input type="hidden" name="id" value="<?= $KostPutri['id'];?>">
						<div class="form-group">
				    		<label for="nama">Nama</label>
				    		<input type="text" name= "nama"class="form-control" id="nama" value="<?= $KostPutri['nama']; ?>">
				    		<small class="form-text text-danger"><?= form_error('nama'); ?></small>
  						</div>
  						<div class="form-group">
				    		<label for="kampus">Kampus</label>
				    		<input type="text" name="kampus"class="form-control" id="kampus" value="<?= $KostPutri['kampus']; ?>">
				    		<small class="form-text text-danger"><?= form_error('kampus'); ?></small>
  						</div>
  						<div class="form-group">
				    		<label for="nokamar">No Kamar</label>
				    		<input type="number" name="nokamar"class="form-control" id="nokamar" value="<?= $KostPutri['no_kamar']; ?>">
				    		<small class="form-text text-danger"><?= form_error('nokamar'); ?></small>
  						</div>
  						<div class="form-group">
				    		<label for="alamat">Alamat</label>
				    		<input type="text" name="alamat"class="form-control" id="alamat" value="<?= $KostPutri['alamat']; ?>">
				    		<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
  						</div>
  						<div class="form-group">
				    		<label for="nohp">No Handphone</label>
				    		<input type="text" name="nohp"class="form-control" id="nohp" value="<?= $KostPutri['no_hp']; ?>">
				    		<small class="form-text text-danger"><?= form_error('nohp'); ?></small>
  						</div>
  						<div class="form-group">
						    <label for="keterangankost">Keterangan Kost</label>
						    <select class="form-control" id="keterangankost" name="keterangan">
						    	<?php foreach( $keterangankost as $k) : ?>
						    		<?php if( $k == $KostPutri['keterangankost'] ) : ?>
						      			<option value="<?= $k; ?>" selected><?= $k; ?></option>
						      		<?php else : ?>
						      			<option value="<?= $k; ?>"><?= $k; ?></option>
						      		<?php endif; ?>
						      	<?php endforeach; ?>
						    </select>
  						</div>
  						<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
					</form>
			  	</div>
			</div>
		</div>
	</div>
</div>