<?php 
	$val = $hsl->row_array();
 ?>
<div class="container skin-page-detail-artikel">
	<h1><?php echo $val['judul_artikel']; ?></h1>
	<h4><?php echo $val['tgl_artikel']; ?></h4>
	<img src="<?php echo base_url() ?>artikel/<?php echo $val['foto_artikel'] ?>" class="item-page-detail-artikel-img">
	<?php echo $val['isi_artikel']; ?>
</div>