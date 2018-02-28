<?php 
	if(empty($tmp_riwayat)){
		$out = site_url('admin/page/f_riwayat');
	}else{
		$out = site_url('admin/page/f_riwayat/'.$kode);
	}
 ?>
<h2>Riwayat <button onclick="document.location='<?php echo  $out; ?>'" class="btn btn-primary" id="btn-kanan"><span class="glyphicon glyphicon-edit"></span> Edit Data</button></h2> 
<div class="table-responsive">
<div class="col-md-6">
	<label>Riwayat</label>
	<?php echo $item['riwayat']; ?>
</div>
<div class="col-md-6">
	<label>Foto</label>
	<img src="../../riwayat/<?php echo $item['foto_riwayat']; ?>" class="item-page-riwayat-img">
</div>
</div>