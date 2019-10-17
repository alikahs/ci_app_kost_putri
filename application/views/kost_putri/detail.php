<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
				    Detail Kost Putri
				</div>
				<div class="card-body">
				    <h5 class="card-title"><?= $KostPutri['nama']; ?></h5>
				    <h6 class="card-subtitle mb-2 text-muted"><?= $KostPutri['no_kamar']; ?></h6>
				    <p class="card-text"><?= $KostPutri['kampus']; ?></p>
				    <p class="card-text"><?= $KostPutri['no_hp']; ?></p>
				    <p class="card-text"><?= $KostPutri['alamat']; ?></p>
				    <p class="card-text"><?= $KostPutri['keterangan_kost']; ?></p>
				    <a href="<?= base_url(); ?>KostPutri" class="btn btn-primary">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>