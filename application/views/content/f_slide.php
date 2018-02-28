<?php 
	if($status =='edit'){
		$val=$hsl->row_array();
	}else{
		$val['id_slide']="$kode";
		$val['durasi']="";
	}
 ?>
 <h2><?php echo $judul; ?></h2>
 <?php echo form_open_multipart($open); ?>
 <input type="text" hidden value="<?php echo $val['id_slide'] ?>" name="id_slide">
 <div class="form-group">
 	<label>Foto Slide <i><b>Ukuran max 1366x500</b></i></label>
 	<input type="file" name="foto_slide" class="form-control">
 </div>
 <div class="form-group">
 	<label>Durasi Slide <i><b>Durasi max 1000</b></i></label>
 	<input type="text" class="form-control" name="durasi" value="<?php echo $val['durasi'] ?>">
 </div>
 <input type="submit" class="btn btn-info" name="<?php echo $value; ?>" value="<?php echo $value; ?>">
 <?php echo form_close(); ?>