<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset='utf-8'/>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/admin.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('DataTables/media/css/dataTables.bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/responsive-admin.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>DataTables/media/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>DataTables/media/js/dataTables.bootstrap.min.js"></script>
</head>
<body>
<div class="skin-status">
	<h3><?php echo $this->session->userdata('level'); ?></h3>
</div>
<div class="skin-header">
	<div class="header-left">
	<h2 onclick="menu_header()"><span class="glyphicon glyphicon-align-justify"></span> Dashboard JDN</h2>
	</div>
	<div class="header-right">
		<button class="btn btn-info" onclick="document.location='<?php echo site_url('master/logout') ?>'"><span class="glyphicon glyphicon-log-out"></span> Logout</button>
	</div>
</div>
<div class="menu-header">
	<section>
	<?php if($this->session->userdata('level')=="master"){ ?>
		<a href="<?php echo site_url('admin/page/beranda'); ?>"><img src="<?php echo base_url() ?>img/item_menu_(3).png" class="item-menu-img"> Beranda</a>
		<a href="<?php echo site_url('admin/page/slide'); ?>"><img src="<?php echo base_url() ?>img/item_menu_(2).png" class="item-menu-img"> Slide</a>
		<a href="<?php echo site_url('admin/page/riwayat'); ?>"><img src="<?php echo base_url() ?>img/item_menu_(6).png" class="item-menu-img"> Riwayat</a>
		<a href="<?php echo site_url('admin/page/kontak') ?>"><img src="<?php echo base_url() ?>img/item_menu_(4).png" class="item-menu-img"> Kontak</a>
		<a href="<?php echo site_url('admin/page/artikel') ?>"><img src="<?php echo base_url() ?>img/item_menu_(1).png" class="item-menu-img"> Artikel</a>
		<a href="<?php echo site_url('admin/page/profil') ?>"><img src="<?php echo base_url() ?>img/item_menu_(5).png" class="item-menu-img"> Profil</a>
		<?php }else{ ?>
		<a href="<?php echo site_url('admin/page/beranda'); ?>"><img src="<?php echo base_url() ?>img/item_menu_(3).png" class="item-menu-img"> Beranda</a>
		<a href="<?php echo site_url('admin/page/slide'); ?>"><img src="<?php echo base_url() ?>img/item_menu_(2).png" class="item-menu-img"> Slide</a>
		<a href="<?php echo site_url('admin/page/artikel') ?>"><img src="<?php echo base_url() ?>img/item_menu_(1).png" class="item-menu-img"> Artikel</a>
		<?php } ?>
	</section>
</div>
<div class="menu-left">
	<div class="profil">
		<img src="<?php echo base_url('img/user.png') ?>" class="img-profil">
		<h3><?php echo $this->session->userdata('level'); ?></h3>
	</div>
	<section>
	<?php if($this->session->userdata('level')=="master"){ ?>
		<a href="<?php echo site_url('admin/page/beranda'); ?>"><img src="<?php echo base_url() ?>img/item_menu_(3).png" class="item-menu-img"> Beranda</a>
		<a href="<?php echo site_url('admin/page/slide'); ?>"><img src="<?php echo base_url() ?>img/item_menu_(2).png" class="item-menu-img"> Slide</a>
		<a href="<?php echo site_url('admin/page/riwayat'); ?>"><img src="<?php echo base_url() ?>img/item_menu_(6).png" class="item-menu-img"> Riwayat</a>
		<a href="<?php echo site_url('admin/page/kontak') ?>"><img src="<?php echo base_url() ?>img/item_menu_(4).png" class="item-menu-img"> Kontak</a>
		<a href="<?php echo site_url('admin/page/artikel') ?>"><img src="<?php echo base_url() ?>img/item_menu_(1).png" class="item-menu-img">  Artikel</a>
		<a href="<?php echo site_url('admin/page/profil') ?>"><img src="<?php echo base_url() ?>img/item_menu_(5).png" class="item-menu-img"> Profil</a>
		<?php }else{ ?>
		<a href="<?php echo site_url('admin/page/beranda'); ?>"><img src="<?php echo base_url() ?>img/item_menu_(3).png" class="item-menu-img"> Beranda</a>
		<a href="<?php echo site_url('admin/page/slide'); ?>"><img src="<?php echo base_url() ?>img/item_menu_(2).png" class="item-menu-img"> Slide</a>
		<a href="<?php echo site_url('admin/page/artikel') ?>"><img src="<?php echo base_url() ?>img/item_menu_(1).png" class="item-menu-img"> Artikel</a>
		<?php } ?>
	</section>
</div>
<div class="content">
<?php 
	include "content/".$page.".php";
 ?>
</div>
</body>
</html>
<script type="text/javascript">
	function menu_header(){
		$(".menu-header").slideToggle(500);
	}
</script>