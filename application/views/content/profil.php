<?php 
	if(empty($tmp_profil)){
		$out = site_url('admin/page/f_profil');
	}else{
		$out = site_url('admin/page/f_profil/'.$kode);
	}
 ?>
 <h2>Profil <button onclick="document.location='<?php echo $out; ?>'" class="btn btn-primary" id="btn-kanan"><span class="glyphicon glyphicon-edit"></span> Edit Data</button></h2>
 <div class="table-responsive">
 <div class="col-md-4">
 	<div class="form-group">
 		<label>Profil</label>
 		<?php echo $item['profil']; ?>
 	</div>
 </div>
 <div class="col-md-4">
 	<div class="form-group">
 		<label>Visi</label>
 		<?php echo $item['visi']; ?>
 	</div>
 </div>
 <div class="col-md-4">
 	<div class="form-group">
 		<label>Misi</label>
 		<?php echo $item['misi']; ?>
 	</div>
 </div>
</div>