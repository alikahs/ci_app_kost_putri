<div class="container">

	<?php if( $this->session->flashdata('flash') ): ?>
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Kost Putri
				  	<strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
				  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    	<span aria-hidden="true">&times;</span>
				 	</button>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>KostPutri/tambah" class="btn btn-primary">Tambah Data Kost Putri</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Data Penghuni Kost Putri" name="keyword">
					<div class="input-group-append">
						<button class="btn btn-info" type="submit" id="button-addon2">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>


	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar Kost Putri</h3>
			<?php if( empty($kost_putri) ) : ?>
				<div class="alert alert-dark" role="alert">
  					Data Penghuni Kost Putri Tidak Ditemukan!
				</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach( $kost_putri as $kp ): ?>
			  		<li class="list-group-item"><?= $kp['nama']; ?>
			  			<a href="<?= base_url(); ?>KostPutri/hapus/<?= $kp['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin ?');">hapus</a>
			  			<a href="<?= base_url(); ?>KostPutri/ubah/<?= $kp['id']; ?>" class="badge badge-warning float-right">ubah</a>
			  			<a href="<?= base_url(); ?>KostPutri/detail/<?= $kp['id']; ?>" class="badge badge-success float-right">detail</a>
			  		</li>
			  	<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>