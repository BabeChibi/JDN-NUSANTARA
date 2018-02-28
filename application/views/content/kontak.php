<?php 
	if(empty($tmp_kontak)){
		$out = site_url('admin/page/f_kontak');
	}else{
		$out = site_url('admin/page/f_kontak/'.$kode);
	}
 ?>
 <h2>Kontak <button id="btn-kanan" class="btn btn-primary" onclick="document.location='<?php echo $out; ?>'"><span class="glyphicon glyphicon-edit"></span> Edit Data</button></h2>
<div class="table-responsive">
 <div class="col-md-6">
 	<div class="form-group">
 		<label>Email</label>
 		<input type="text" readonly class="form-control" name="" value="<?php echo $item['email']; ?>">
 	</div>
 </div>
 <div class="col-md-6">
 	<div class="form-group">
 		<label>Nomor Telepon</label>
 		<input type="text" value="<?php echo $item['no_tlp'] ?>" readonly class="form-control" name="">
 	</div>
 </div>
 <div class="col-md-6">
 	<div class="form-group">
 		<label>Alamat</label>
 		<input type="text" readonly value="<?php echo $item['alamat'] ?>" class="form-control" name="">
 	</div>
 </div>
 <div class="col-md-6">
 	<div class="form-group">
 		<label>Alamat</label>
 		<?php echo $item['map']; ?>
 	</div>
 </div>
</div>