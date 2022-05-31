<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title><?= isset($title) ? $title . ' - Materlite Admin Panel' : 'Materlite Admin Panel' ?></title>
	<!-- Favicon-->
	<link rel="icon" href="<?= base_url() ?>/public/images/favicon.ico" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<!-- Bootstrap Core Css -->
	<link href="<?= base_url() ?>public/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<!-- Waves Effect Css -->
	<link href="<?= base_url() ?>public/plugins/node-waves/waves.css" rel="stylesheet" />
	<!-- Animation Css -->
	<link href="<?= base_url() ?>public/plugins/animate-css/animate.css" rel="stylesheet" />
	<!-- Morris Chart Css-->
	<link href="<?= base_url() ?>public/plugins/morrisjs/morris.css" rel="stylesheet" />
	<!-- Custom Css -->
	<link href="<?= base_url() ?>public/css/style.css" rel="stylesheet">
	<!-- Materialize Css -->
	<link href="<?= base_url() ?>public/css/materialize.css" rel="stylesheet">
	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?= base_url() ?>public/css/themes/all-themes.css" rel="stylesheet" />
	<!-- Jquery Core Js -->
	<script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>
	<?php
	if (isset($output->js_files)) {
		foreach ($output->css_files as $file) : ?>
			<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
		<?php foreach ($output->js_files as $file) : ?>
			<script src="<?php echo $file; ?>"></script>
	<?php endforeach;
	} ?>
</head>

<body class="theme-blue">

	<!-- #END# Page Loader -->

	<!-- top navbar -->
	<?php include('include/navbar.php'); ?>
	<!-- end top navbar -->

	<section>
		<!--left sidebar start-->
		<?php if ($this->session->userdata('is_admin_login')) : ?>
			<?php include('include/sidebar.php'); ?>
		<?php endif; ?>
		<!--left sidebar end-->

		<!--right sidebar start-->
		<?php include('include/right_sidebar.php'); ?>
		<!--right sidebar end-->
	</section>

	<!--main content-->
	<section class="
	<?php if (!$this->session->userdata('is_admin_login')) : ?>
			<?php echo "content-no-sidebar"; ?>
		<?php endif; ?>
		 content ">
		<?php if ($this->session->flashdata('msg') != '') : ?>
			<div class="alert alert-success flash-msg alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4> Success!</h4>
				<?= $this->session->flashdata('msg'); ?>
			</div>
		<?php endif;
		?>
		<!-- main content start-->
		<?php
		if (!isset($output)) {
			$output = "";
		}
		$this->load->view($view, $output);
		?>
		<!-- end-->
	</section>
	<!--end main content-->

	<!-- Bootstrap Core Js -->
	<script src="<?= base_url() ?>public/plugins/bootstrap/js/bootstrap.js"></script>
	<!-- Select Plugin Js -->
	<script src="<?= base_url() ?>public/plugins/bootstrap-select/js/bootstrap-select.js"></script>
	<!-- Slimscroll Plugin Js -->
	<script src="<?= base_url() ?>public/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- Waves Effect Plugin Js -->
	<script src="<?= base_url() ?>public/plugins/node-waves/waves.js"></script>
	<!-- Custom Js -->
	<script src="<?= base_url() ?>public/js/admin.js"></script>
	<!-- Demo Js -->
	<script src="<?= base_url() ?>public/js/demo.js"></script>
	<!-- page script -->
	<script type="text/javascript">
		$(".flash-msg").fadeTo(2000, 500).slideUp(500, function() {
			$(".flash-msg").slideUp(500);
		});
	</script>
	<style>
		.content-no-sidebar {
			margin: 100px 15px 0 15px !important;
		}
	</style>
</body>

</html>
