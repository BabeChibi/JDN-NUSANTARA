<div class="container skin-page-about">
	<div class="judul-page">
	<h1>About</h1>	
	</div>
	<?php foreach ($tmp_riwayat as $data) {?>
	<div class="col-md-12">
		<img src="<?php echo base_url() ?>riwayat/<?php echo $data->foto_riwayat; ?>" class="item-page-about-img">
	</div>
	<div class="col-md-12">
		<?php echo $data->riwayat; ?>
	</div>
	<?php } ?>
</div>