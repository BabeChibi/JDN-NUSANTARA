<h2>Slide 
<?php if($this->session->userdata('level')=="master"){ ?>
<button class="btn btn-primary" id="btn-kanan" onclick="document.location='<?php echo site_url('admin/page/f_slide'); ?>'"><span class="glyphicon glyphicon-plus"></span> Tambah</button>
<?php }else{} ?></h2>
<div class="table-responsive">
	<table class="table table-bordered" id="table">
		<thead>
			<tr>
				<th style="width: 5%;">No</th>
				<th>Foto Slide</th>
				<th>Durasi Slide</th>
				<th style="width: 20%">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no = 0;
		foreach ($tmp_slide as $data) {$no++;
		?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><img src="<?php echo base_url(); ?>slide/<?php echo $data->foto_slide ?>" width="270px"></td>
				<td><?php echo $data->durasi; ?></td>
				<td>
					<a href="<?php echo site_url('admin/page/f_slide') ?>/<?php echo $data->id_slide ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
					<a href="<?php echo site_url('admin/hapus_slide') ?>/<?php echo $data->id_slide ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
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