<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title><?= isset($title) ? $title : 'Registration - CI Material Admin' ?></title>
	<!-- Favicon-->
	<link rel="icon" href="<?= base_url() ?>public/favicon.ico" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<!-- Bootstrap Core Css -->
	<link href="<?= base_url() ?>public/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<!-- Waves Effect Css -->
	<link href="<?= base_url() ?>public/plugins/node-waves/waves.css" rel="stylesheet" />
	<!-- Animation Css -->
	<link href="<?= base_url() ?>public/plugins/animate-css/animate.css" rel="stylesheet" />
	<!-- Materialize Css -->
	<link href="<?= base_url() ?>public/css/materialize.css" rel="stylesheet">
	<!-- Custom Css -->
	<link href="<?= base_url() ?>public/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
	<div class="login-box">
		<div class="logo">
			<a href="javascript:void(0);">Register user</a>
		</div>
		<?php if (isset($msg) || validation_errors() !== '') : ?>
			<div class="alert alert-warning alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa-warning"></i> Alert!</h4>
				<?= validation_errors(); ?>
				<?= isset($msg) ? $msg : ''; ?>
			</div>
		<?php endif; ?>
		<div class="card">
			<div class="body">
				<?php echo form_open(base_url('auth/register'), 'class="login-form" '); ?>
				<div class="msg">Create a Account</div>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">person</i>
					</span>
					<div class="form-line">
						<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
					</div>
				</div>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">person</i>
					</span>
					<div class="form-line">
						<input type="text" class="form-control" name="firstname" placeholder="First Name" required autofocus>
					</div>
				</div>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">person</i>
					</span>
					<div class="form-line">
						<input type="text" class="form-control" name="lastname" placeholder="Last Name" required autofocus>
					</div>
				</div>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">email</i>
					</span>
					<div class="form-line">
						<input type="text" class="form-control" name="email" placeholder="email" required autofocus>
					</div>
				</div>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">lock</i>
					</span>
					<div class="form-line">
						<input type="password" class="form-control" name="password" placeholder="Password" required>
					</div>
				</div>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">lock</i>
					</span>
					<div class="form-line">
						<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
					</div>
				</div>
				<div class="form-group">
					<input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
					<label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<input type="submit" name="submit" id="submit" class="btn btn-block btn-success waves-effect" value="Register">
					</div>
				</div>
				<div class="m-t-25 align-center">
					<a href="<?= base_url('auth/login'); ?>">You already have a account?</a>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>

	<!-- Jquery Core Js -->
	<script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap Core Js -->
	<script src="<?= base_url() ?>public/plugins/bootstrap/js/bootstrap.js"></script>
	<!-- Waves Effect Plugin Js -->
	<script src="<?= base_url() ?>public/plugins/node-waves/waves.js"></script>
	<!-- Validation Plugin Js -->
	<script src="<?= base_url() ?>public/plugins/jquery-validation/jquery.validate.js"></script>
	<!-- Custom Js -->
	<script src="<?= base_url() ?>public/js/admin.js"></script>
	<script src="<?= base_url() ?>public/js/pages/examples/sign-in.js"></script>
</body>

</html>
