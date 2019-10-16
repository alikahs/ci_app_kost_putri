<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar Kost Putri</h3>
			<ul class="list-group">
				<?php foreach( $kost_putri as $kp ): ?>
			  		<li class="list-group-item"><?= $kp['nama']; ?></li>
			  	<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>