<?php 
	if($status == 'edit'){
		$val = $hsl->row_array();
	}else{
		$val['id_kontak'] = "$kode";
		$val['email'] = "";
		$val['no_tlp'] = "";
		$val['alamat'] = "";
		$val['map'] = "";
	}
 ?>
 <h2><?php echo $judul; ?></h2>
 <?php echo form_open_multipart($open); ?>
 <input type="text" hidden name="id_kontak" value="<?php echo $val['id_kontak'] ;?>">
 <div class="form-group">
 	<label>Alamat Email</label>
 	<input type="text" class="form-control" name="email" value="<?php echo $val['email']; ?>">
 </div>
 <div class="form-group">
 	<label>Nomor Telepon</label>
 	<input type="text" class="form-control" name="no_tlp" value="<?php echo $val['no_tlp']; ?>">
 </div>
 <div class="form-group">
 	<label>Alamat</label>
 	<input type="text" class="form-control" name="alamat" value="<?php echo $val['alamat']; ?>">
 </div>
 <div class="form-group">
 	<label>Map Lokasi</label>
 	<textarea name="map" class="form-control"><?php echo $val['map']; ?></textarea>
 </div>
 <input type="submit" class="btn btn-info" name="<?php echo $value ?>" value="<?php echo $value ?>">
 <?php echo form_close(); ?>