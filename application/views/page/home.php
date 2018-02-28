<div class="container-fluid skin-slide">
		<div class="row item-slide">
			<ul class="rslides" id="slider">
			<?php 
			foreach ($tmp_slide as $slide) {
			 ?>
				<li>
					<img src="<?php echo base_url() ?>slide/<?php echo $slide->foto_slide; ?>" class="img-responsive">
				</li>
			<?php } ?>
			</ul>
		</div>
	</div>
	<div class="container-fluid skin-about" >
		<div class="row">
			<h1>ABOUT</h1>
			<div class="container item-about">
				<div class="col-sm-6 col-md-6" data-aos="fade-right" data-aos-duration="2000">
					<h3>Selamat Datang</h3>
					<?php foreach ($tmp_riwayat as $riwayat) {
					?>
					<?php echo substr($riwayat->riwayat,0,480); ?>
					<a href="<?php echo site_url('JDN/page/riwayat') ?>">Readmore <span class="glyphicon glyphicon-arrow-right"></span></a>
				</div>
				<div class="col-sm-6 col-md-6" data-aos="fade-left" data-aos-duration="2000">
					<div class="row">
						<img src="<?php echo base_url() ?>riwayat/<?php echo $riwayat->foto_riwayat; ?>">
							<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid skin-visi-misi">
	<div class="row">
		<div class="back-visi">
			<div class="col-sm-7 col-md-offset-3 item-visi">
			<div class="rslides" id="visi">
				<ul><h1>VISI</h1>
				<h3 data-aos="zoom-in" data-aos-duration="1000"><?php echo $item_profil['visi']; ?></h3></ul>
				<ul><h1>MISI</h1>
				<h3><?php echo $item_profil['misi']; ?></h3></ul>
			</div>
			</div>
		</div>
	</div>
	</div>
	<div class="container-fluid skin-profil ">
	<div class=" col-sm-9 col-md-7 col-sm-offset-3 col-md-offset-4 item-profil">
			<div class="col-sm-6 col-md-6 item-profil-judul">
				<h1>PROFIL</h1>
			</div>
			<div class="col-sm-6 col-md-6 item-profil-desk"  data-aos="flip-left" data-aos-duration="1000">
				<?php echo substr($item_profil['profil'],0,210);  ?>
				<a href="<?php echo site_url('JDN/page/profil') ?>">Readmore <span class="glyphicon glyphicon-arrow-right"></span></a>
			</div>
	</div>
	</div>
	<div class="container-fluid skin-artikel">
		<h1>ARTIKEL</h1>
		<?php 
		foreach ($tmp_artikel as $data) {
	 	?>
		<div class="col-sm-6 col-md-6 skin-item-artikel" data-aos="flip-left" data-aos-duration="1500">
		<div class="media">
			<div class="media-left">
				<img src="<?php echo base_url() ?>artikel/<?php echo $data->foto_artikel ?>" class="media-object item-artikel">
			</div>
			<div class="media-body">
				<h3 class="media-heading"><b><?php echo $data->judul_artikel ?></b></h3>
				<span><?php echo $data->tgl_artikel ?></span>
				<div class="item-artikel-isi">
				<p><?php echo substr($data->isi_artikel,0,150) ?></p><br>
				</div>
				<a href="<?php echo site_url('JDN/page/detail_artikel') ?>/<?php echo $data->id_artikel; ?>">View Detail <span class="glyphicon glyphicon-arrow-right"></span></a>
			</div>
		</div>
		</div>
		<?php } ?>
		<div class="col-sm-3 col-md-3 btn-info btn-lg item-artikel-more" onclick="document.location='<?php echo site_url('JDN/page/artikel'); ?>'">
			View More
		</div>	
	</div>
	<div class="container-fluid skin-map" data-aos="zoom-in" data-aos-duration="3000">
		<div class="row">
			<?php echo $item_kontak['map']; ?>
		</div>
	</div>