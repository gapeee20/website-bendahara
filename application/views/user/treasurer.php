<!-- Bootstrap Select Css -->
<link href="<?= base_url() ?>public/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<!-- JQuery DataTable Css -->
<link href="<?= base_url() ?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- Bootstrap Select Css -->
<link href="<?= base_url() ?>public/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<div class="container">
	<div class="row">
		<h1 class="navbar-brand" style="font-weight:normal;color:grey;font-size:30px;">Hello, Nata de Coco</h1>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="info-box-2 bg-blue">
				<div class="icon">
					<i class="material-icons">battery_charging_full</i>
				</div>
				<div class="content">
					<div class="text">Current Money</div>
					<div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">Rp <?= number_format($income - $spend, 0, ',', '.') ?></div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="info-box-2 bg-green">
				<div class="icon">
					<i class="material-icons">equalizer</i>
				</div>
				<div class="content">
					<div class="text">Income</div>
					<div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">Rp <?= number_format($income, 0, ',', '.')  ?></div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="info-box-2 bg-red">
				<div class="icon">
					<i class="material-icons">equalizer</i>
				</div>
				<div class="content">
					<div class="text">Spend</div>
					<div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">Rp <?= number_format($spend, 0, ',', '.')  ?></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								Submit Payment
							</h2>
						</div>
						<div class="body">
							<div class="row clearfix">
								<div class="col-md-12">
									<?php echo form_open_multipart(base_url('user/treasurer')) ?>
									<div class="row clearfix">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
											<label for="userfile">File</label>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
											<div class="form-group">
												<input name="userfile" type="file" multiple />
											</div>
											<h5 style="color:red;"><?php echo $this->session->flashdata('error'); ?></h5>
										</div>
									</div>
									<div class="row clearfix">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
											<label for="month">Month</label>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
											<select name=month value=''>Select Month</option>
												<option value='January'>January</option>
												<option value='February'>February</option>
												<option value='March'>March</option>
												<option value='April'>April</option>
												<option value='May'>May</option>
												<option value='June'>June</option>
												<option value='July'>July</option>
												<option value='August'>August</option>
												<option value='September'>September</option>
												<option value='October'>October</option>
												<option value='November'>November</option>
												<option value='December'>December</option>
											</select>
										</div>
									</div>
									<div class="row clearfix">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
											<label for="transaction_type">Type</label>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
											<select name=transaction_type value=''>Choose Transaction Type</option>
												<option value='income'>Income</option>
												<option value='spend'>Spend</option>
											</select>
										</div>
									</div>
									<div class="row clearfix">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
											<label for="value">Value</label>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
											<div class="form-group">
												<div class="form-line">
													<input type="number" name="value" class="form-control" placeholder="Required">
												</div>
											</div>
										</div>
									</div>
									<div class="row clearfix">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
											<label for="notes">Notes</label>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="notes" class="form-control" placeholder="Required">
												</div>
											</div>
										</div>
									</div>
									<div class="row clearfix">
										<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
											<input type="submit" name="submit" value="Submit" class="btn btn-primary m-t-15 waves-effect">
										</div>
									</div>
									<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								Change Password
							</h2>
						</div>
						<div class="body">
							<?php if (validation_errors() !== '') : ?>
								<div class="alert alert-warning alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<h4><i class="icon fa fa-warning"></i> Alert!</h4>
									<?= validation_errors(); ?>
								</div>
							<?php endif; ?>
							<?php echo form_open(base_url('user/profile/change_pwd'), 'class="form-horizontal"');  ?>
							<div class="row clearfix">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
									<label for="new_pwd">New password</label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
									<div class="form-group">
										<input type="text" name="new_pwd" class="form-control" placeholder="Enter your new password">
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
									<label for="confirm_pwd">Confirm password</label>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
									<div class="form-group">
										<input type="text" name="confirm_pwd" class="form-control" placeholder="Enter your new password again">
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
									<input type="submit" name="submit" value="CHANGE PASSWORD" class="btn btn-primary m-t-15 waves-effect">
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								Transaction List
							</h2>
						</div>
						<div class="body">
							<?php echo $output; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	/* Chrome, Safari, Edge, Opera */
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}

	/* Firefox */
	input[type=number] {
		-moz-appearance: textfield;
	}
	.grocerycrud-container {
   overflow: auto;
}
</style>
<!-- Jquery DataTable Plugin Js -->
<script src="<?= base_url() ?>public/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>public/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?= base_url() ?>public/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>public/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?= base_url() ?>public/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?= base_url() ?>public/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?= base_url() ?>public/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?= base_url() ?>public/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>public/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<script>
	$("#users").addClass('active');
</script>
