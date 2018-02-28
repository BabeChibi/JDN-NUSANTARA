<?php 
	if($status == 'edit'){
		$val = $hsl->row_array();
	}else{
		$val['id_riwayat']="$kode";
		$val['riwayat']="";
	}
 ?>
<h2><?php echo $judul; ?></h2>
<?php echo form_open_multipart($open); ?>
<input type="text" hidden name="id_riwayat" value="<?php echo $val['id_riwayat']; ?>">
<div class="form-group">
	<label>Foto Profil <b><i>Max 1920x1080</i></b></label>
	<input type="file" name="foto_riwayat" class="form-control">
</div>
<div class="form-group">
	<label>Profil</label>
	<textarea id="editor" name="riwayat"><?php echo $val['riwayat']; ?></textarea>
</div>
<input type="submit" class="btn btn-info" name="<?php echo $value ?>" value="<?php echo $value ?>">
<?php echo form_close(); ?>
<script type="text/javascript">
	CKEDITOR.replace('editor');
</script>