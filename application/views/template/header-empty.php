<!doctype html>
<html>
	<head>
		<title> <?php echo (isset($ap_title)) ? $ap_title : 'Universite'; ?> </title>
		<?php $this->render_css(array('bootstrap.min.css','bootstrap-responsive.min.css'));?>
		<?php $this->render_less('style') ?>
		<?php $this->render_js('jquery.js') ?>
	</head>
	<body>
		<div class="container">
		
