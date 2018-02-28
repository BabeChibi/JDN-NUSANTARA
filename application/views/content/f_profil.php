<?php 
	if($status == 'edit'){
		$val = $hsl->row_array();
	}else{
		$val['id_profil']="$kode";
		$val['profil']="";
		$val['visi']="";
		$val['misi']="";
	}
 ?>
 <h2><?php echo $judul; ?></h2>
 <?php echo form_open_multipart($open); ?>
 <input type="text" hidden name="id_profil" value="<?php echo $val['id_profil'] ?>">
 <div class="col-md-4">
 	<div class="form-group">
 		<label>Profil</label>
 		<textarea id="profil" name="profil"><?php echo $val['profil']; ?></textarea>
 	</div>
 </div>
 <div class="col-md-4">
 	<div class="form-group">
 		<label>Visi</label>
 		<textarea id="visi" name="visi"><?php echo $val['visi']; ?></textarea>
 	</div>
 </div>
 <div class="col-md-4">
 	<div class="form-group">
 		<label>Misi</label>
 		<textarea id="misi" name="misi"><?php echo $val['misi']; ?></textarea>
 	</div>
 </div>
 <div class="col-md-3">
 <input type="submit" class="btn btn-info" name="<?php echo $value ?>" value="<?php echo $value; ?>">	
 </div>
 
 <?php echo form_close(); ?>
 <script type="text/javascript">
 	CKEDITOR.replace('profil');
 	CKEDITOR.replace('visi');
 	CKEDITOR.replace('misi');
 </script>