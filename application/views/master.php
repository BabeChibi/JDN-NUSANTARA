<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset='utf-8'/>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/login.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/responsive-login.css'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container-fluid skin-login">
	<div class="col-md-6 col-md-offset-3">
		<div class="col-md-5 skin-logo">
			<img src="<?php echo base_url() ?>img/logo.png">
		</div>
		<div class="col-md-10 col-md-offset-1 skin-deep-login">
		<?php echo form_open('master/aksi_login'); ?>
			<div class="form-group">
				<input type="text" placeholder="Username" class="form-control" name="username" id="input-plc">
				<input type="password" placeholder="Password" id="input-plc" class="form-control" name="password">
				<input type="submit" class="btn btn-primary" onclick="pesan()" value="Login" name="login">
			</div>
		<?php echo form_close(); ?>
		</div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">

</script>