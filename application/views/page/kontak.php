<div class="container skin-page-contact">
	<div class="judul-page">
		<h1>CONTACT</h1>
	</div>
	<?php 
		foreach ($tmp_kontak as $data) {
	 ?>
	<div class="col-sm-8 col-md-8">
		<?php echo $data->map; ?>
	</div>
	<div class="col-sm-4 col-md-4">
		<div class="media col-md-12">
		<div class="media-left">
			<img src="<?php echo base_url() ?>img/item_(1).png" class="media-object img-contact">
		</div>
		<div class="media-body ">
			<h4><?php echo $data->no_tlp ?></h4>
		</div>
		</div>
		<div class="media col-md-12">
		<div class="media-left">
			<img src="<?php echo base_url() ?>img/item_(2).png" class="media-object img-contact">
		</div>
		<div class="media-body ">
			<h4><?php echo $data->alamat ?></h4>
		</div>
		</div>
		<div class="media col-md-12">
		<div class="media-left">
			<img src="<?php echo base_url() ?>img/item_(3).png" class="media-object img-contact">
		</div>
		<div class="media-body">
			<h4><?php echo $data->email ?></h4>
		</div>
		</div>
	</div>
	<?php } ?>
</div>