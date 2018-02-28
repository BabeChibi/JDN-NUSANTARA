<div class="container skin-page-profil">
	<div class="judul-page">
		<h1>Profil</h1>
	</div>
	<div class="col-md-12">
		<img src="<?php echo base_url() ?>img/logo.png" class="item-page-profil-img">
	</div>
	<?php 
	foreach ($tmp_profil as $data) {
	 ?>	
	<div class="col-md-12">
		<?php echo $data->profil; ?>
	</div>
	<?php } ?>
</div>