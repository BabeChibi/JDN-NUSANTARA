<div class="container skin-page-visi-misi">
	<div class="judul-page">
		<h1>Visi Misi</h1>
	</div>
	<div class="col-md-12">
		<img src="<?php echo base_url() ?>img/logo.png" class="item-page-visimisi-img">
	</div>
	<?php foreach ($tmp_profil as $data) {
	?>
	<div class="col-sm-6 col-md-6">
		<h3 class="item-page-visimisi">Visi</h3>
		<?php echo $data->visi; ?>
	</div>
	<div class="col-sm-6 col-md-6">
		<h3 class="item-page-visimisi">Misi</h3>
		<?php echo $data->misi; ?>
	</div>
	<?php } ?>
</div>