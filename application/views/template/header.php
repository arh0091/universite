<!doctype html>
<html>
	<head>
		<title> <?php echo (isset($ap_title)) ? $ap_title : 'Universite'; ?> </title>
		<?php $this->render_css(array('bootstrap.min.css','bootstrap-responsive.min.css'));?>
		<?php $this->render_less('style') ?>
		<?php $this->render_js('jquery.js') ?>
	</head>
	<body>
		<div class="container main">
			<header class="row-fluid header">
				<!-- Header Logo -->
				<div class="span12">
					<div class="page-header">
					  	<h1>Universitas Muhammadiyah Malang</h1>
					</div>
					<p class="pull-right"><small><i>Your Bright Future</i></small></p>
				</div>
			</header>
			<nav class="row">
				<!-- Navigation -->
				<div class="span12">
					<ul class="nav nav-pills">
						
						<?php if(!isset($login)) : ?>
						<li><a href="#"><i class="icon-home icon-white"></i> Beranda</a></li>
						<li><a href="#"><i class="icon-book icon-white"></i> Ketentuan Penggunaan</a></li>
						<?php endif; ?>

						<?php if(isset($login)) : ?>
						<li><a href="#"><i class="icon-home icon-white"></i> Beranda</a></li>
						<li><a href="#"><i class="icon-book icon-white"></i> Pengumuman</a></li>
						<li><a href="#"><i class="icon-book icon-white"></i> Akademik</a></li>
						<?php endif; ?>

					</ul>
				</div>
			</nav>
		
