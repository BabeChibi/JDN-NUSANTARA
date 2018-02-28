<div class="container-fluid skin-page-artikel">
	<div class="judul-page">
		<h1>Artikel</h1>
	</div>
	<?php 
		foreach ($tmp_artikel as $data) {
	 	?>
		<div class="col-sm-6 col-md-6 skin-item-artikel">
		<div class="media">
			<div class="media-left">
				<img src="<?php echo base_url() ?>artikel/<?php echo $data->foto_artikel ?>" class="media-object item-page-artikel-img">
			</div>
			<div class="media-body">
				<h3 class="media-heading"><b><?php echo $data->judul_artikel ?></b></h3>
				<span><?php echo $data->tgl_artikel ?></span>
				<div class="item-page-artikel-isi">
				<p><?php echo substr($data->isi_artikel,0,100) ?></p>
				</div>
				<a href="<?php echo site_url('JDN/page/detail_artikel') ?>/<?php echo $data->id_artikel; ?>">View Detail <span class="glyphicon glyphicon-arrow-right"></span></a>
			</div>
		</div>
		</div>
		<?php } ?>
		<div class="item-page-artikel-paging">
		<?php echo $paging; ?>	
		</div>
		
</div>	