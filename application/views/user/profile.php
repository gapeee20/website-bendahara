<!-- Bootstrap Select Css -->
<link href="<?= base_url() ?>public/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<!-- JQuery DataTable Css -->
<link href="<?= base_url() ?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- Bootstrap Select Css -->
<link href="<?= base_url() ?>public/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<div class="container">
	<div class="row">
		<h1 class="navbar-brand" style="font-weight:normal;color:grey;font-size:30px;">Hello, <?php echo $this->session->userdata('name') ?></h1>
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
									<?php echo form_open(base_url('user/profile'), 'enctype="multipart/form-data"') ?>
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
											<label for="notes">Notes</label>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
											<div class="form-group">
												<div class="form-line">
													<input type="text" name="notes" class="form-control" placeholder="Optional">
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
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover dataTable js-exportable" id="transaction_body">
									<thead>
										<tr>
											<th>Transaction Date</th>
											<th>Image</th>
											<th>Month</th>
											<th>Notes</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Custom Js -->
<script src="<?= base_url() ?>public/js/pages/forms/advanced-form-elements.js"></script>
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
	$('#transaction_body').DataTable({
		data: <?= $this->session->userdata('transaction') ?>,
		columns: [{
				data: 'date',
				width: "20%",
			},
			{
				data: 'image_url',
				'render': function(data, type, row, meta) {
					return '<a href="<?= base_url() ?>' + data + '"><img height="120px" src="<?= base_url() ?>' + data + '  "/></a>'
				},
				width: '30%'
			},
			{
				data: 'month',
			},
			{
				data: 'notes'
			},
			{
				data: 'status'
			}
		],
	});
</script>
