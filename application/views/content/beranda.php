<h2>Home</h2>
<div class="container-fluid">
	<div class="col-md-4">
		<div class="panel panel-default">
		<div class="panel-heading">
			<label>Kontak</label>
		</div>
		<div class="panel-body">
		<?php 
		foreach ($tmp_kontak as $item_kontak) {
		 ?>
		 <h4>Email</h4>
		 <b><?php echo $item_kontak->email; ?></b>
		 <h4>Nomor Telepon</h4>
		 <b><?php echo $item_kontak->no_tlp; ?></b>
		 <h4>Alamat</h4>
		 <b><?php echo $item_kontak->alamat; ?></b>
		 <h4>Map</h4>
		 <?php echo $item_kontak->map; ?>
		 <?php } ?>
		</div>
	</div>	
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<label>Riwayat</label>
			</div>
			<div class="panel-body">
			<?php 
			foreach ($tmp_riwayat as $item_riwayat) {
			 ?>	
			 <b><?php echo substr($item_riwayat->riwayat,0,220); ?></b>
			 <img src="<?php echo base_url() ?>riwayat/<?php echo $item_riwayat->foto_riwayat; ?>" class="item-page-beranda-img">
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<label>Profil Dan Visi Misi</label>
			</div>
			<div class="panel-body">
			<?php 
			foreach ($tmp_profil as $item_profil) {
			 ?>
			 <h3>Profil</h3>
			 <b><?php echo substr($item_profil->profil, 0,220) ; ?></b>
			 <h3>Visi</h3>
			 <b><?php echo $item_profil->visi; ?></b>
			 <h3>Misi</h3>
			 <b><?php echo $item_profil->misi; ?></b>
			</div>
			<?php } ?>
		</div>
	</div>
</div>