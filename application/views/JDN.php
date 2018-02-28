<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset='utf-8'/>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/JDN.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/responsive-JDN.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('ResponsiveSlides.js-master/responsiveslides.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('aos-master/dist/aos.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato|Marvel|Roboto" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>ResponsiveSlides.js-master/responsiveslides.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>aos-master/dist/aos.js"></script>
	
</head>
<body>
		<nav class="navbar navbar-edit">
		<div class="container skin-menu">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" id="nav-icon" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
					<span class="icon-bar" id="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#myPage" class="navbar-brand"><img src="<?php echo base_url() ?>img/logo.png" class="logo"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right" id="nav-menu">
					<li><a href="<?php echo site_url('JDN/page/home') ?>"><b> HOME</b></a></li>
					<li><a href="<?php echo site_url('JDN/page/riwayat'); ?>"><b> ABOUT</b></a></li>
					<li><a href="<?php echo site_url('JDN/page/profil') ?>"><b> PROFIL</b></a></li>
					<li><a href="<?php echo site_url('JDN/page/visimisi') ?>"><b> VISI MISI</b></a></li>
					<li><a href="<?php echo site_url('JDN/page/artikel') ?>"><b> ARTIKEL</b></a></li>
					<li><a href="<?php echo site_url('JDN/page/kontak') ?>"><b> CONTACT</b></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="content">
		<?php 
			include "page/".$page.".php";
		 ?>
	</div>
	<div class="container-fluid skin-contact">
		<div class="box-contact">
			<div class="col-sm-4 col-md-4">
		<div class="media col-md-offset-5">
		<div class="media-left">
			<img src="<?php echo base_url() ?>img/item_(1).png" class="media-object img-contact">
		</div>
		<div class="media-body  contact-desk">
			<h4><?php echo $item_kontak['no_tlp'] ?></h4>
		</div>
	</div>
		</div>
		<div class="col-sm-4 col-md-4">
			<div class="media col-md-offset-2">
		<div class="media-left">
			<img src="<?php echo base_url() ?>img/item_(2).png" class="media-object img-contact">
		</div>
		<div class="media-body  contact-desk">
			<h4><?php echo $item_kontak['alamat']; ?></h4>
		</div>
	</div>
		</div>
		<div class="col-sm-4 col-md-4">
			<div class="media col-md-offset-2">
		<div class="media-left">
			<img src="<?php echo base_url() ?>img/item_(3).png" class="media-object img-contact">
		</div>
		<div class="media-body contact-desk">
			<h4><?php echo $item_kontak['email']; ?></h4>
		</div>
	</div>
		</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	$("#slider").responsiveSlides({
			speed:<?php echo $item_slide['durasi']; ?>
		});
	$("#visi").responsiveSlides({
			speed:200
		});
	$('[data-toggle="tooltip"]').tooltip();
});
AOS.init({
        easing: 'ease-in-out-sine'
      });
</script>
