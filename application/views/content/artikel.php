<h2>Artikel 
<?php if($this->session->userdata('level')=="master"){?>
<button id="btn-kanan" class="btn btn-primary" onclick="document.location='<?php echo site_url('admin/page/f_artikel'); ?>'"><span class="glyphicon glyphicon-plus"></span> Tambah Data</button>
<?php }else{} ?>
</h2>
<div class="table-responsive">
	<table class="table table-bordered" id="table">
		<thead>
			<tr>
				<th style="width: 5%">No</th>
				<th>Foto Artikel</th>
				<th>Judul Artikel</th>
				<th>Tanggal Artikel</th>
				<th>Isi Artikel</th>
				<th style="width: 20%">Action</th>
			</tr>
		</thead>
		 <tbody>
		 <?php 
		$no = 0;
		foreach ($tmp_artikel as $data) {$no++;
		 ?>
		 	<tr>
		 		<td><?php echo $no; ?></td>
		 		<td><img src="<?php echo base_url() ?>artikel/<?php echo $data->foto_artikel ?>" width="100px"></td>
		 		<td><?php echo $data->judul_artikel; ?></td>
		 		<td><?php echo $data->tgl_artikel; ?></td>
		 		<td><?php echo substr($data->isi_artikel,0,200); ?></td>
		 		<td>
		 			<a href="<?php echo site_url('admin/page/f_artikel') ?>/<?php echo $data->id_artikel ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
		 			<a href="<?php echo site_url('admin/hapus_artikel') ?>/<?php echo $data->id_artikel; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
		 		</td>
		 	</tr>
		 <?php } ?>
		 </tbody>
	</table>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	})
</script>