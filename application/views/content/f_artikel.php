<?php 
	if($status == 'edit'){
		$val = $hsl->row_array();
	}else{
		$val['id_artikel']="$kode";
		$val['judul_artikel'] = "";
		$val['tgl_artikel'] = "";
		$val['isi_artikel']="";
	}
 ?>
 <h2><?php echo $judul; ?></h2>
 <?php echo form_open_multipart($open); ?>
 <input type="text" hidden name="id_artikel" value="<?php echo $val['id_artikel']; ?>">
 <div class="form-group">
 	<label>Foto Artikel <b><i>Max 1920x1080</i></b></label>
 	<input type="file" class="form-control" name="foto_artikel">
 </div>
 <div class="form-group">
 	<label>Judul Artikel</label>
 	<input type="text" name="judul_artikel" class="form-control" value="<?php echo $val['judul_artikel']; ?>">
 </div>
 <div class="form-group">
 	<label>Tanggal Artikel</label>
 	<input type="date" name="tgl_artikel" class="form-control" value="<?php echo $val['tgl_artikel']; ?>">
 </div>
 <div class="form-group">
 	<label>Isi Artikel</label>
 	<textarea id="editor" name="isi_artikel"><?php echo $val['isi_artikel']; ?></textarea>
 </div>
 <input type="submit" class="btn btn-info" name="<?php echo $value ?>" value="<?php echo $value; ?>">
 <?php echo form_close(); ?>
 <script type="text/javascript">
 	CKEDITOR.replace('editor');
 </script>