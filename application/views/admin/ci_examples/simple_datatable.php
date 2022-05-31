<!-- JQuery DataTable Css -->
<link href="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">  
<!-- Exportable Table -->
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="card">
    <div class="header">
      <h2>
        SIMPLE EXPORTABLE TABLE
      </h2>
    </div>
    <div class="body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
          <thead>
            <tr>
              <th>#ID</th>
              <th>User Name</th>
              <th>Email</th>
              <th>Mobile No.</th>
              <th>Created Date</th>
              <th>Role/Group</th>
              <th>Status</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#ID</th>
              <th>User Name</th>
              <th>Email</th>
              <th>Mobile No.</th>
              <th>Created Date</th>
              <th>Role/Group</th>
              <th>Status</th>
            </tr>
          </tfoot>
          <tbody>
            <?php $i=0; foreach($all_users as $row): ?>
              <tr>
                <td><?= ++$i; ?></td>
                <td><?= $row['username']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['mobile_no']; ?></td>
                <td><?= date('F j, Y',strtotime($row['created_at'])); ?></td>
                <td><button type="button" class="btn bg-teal btn-sm waves-effect"><?= getGroupyName($row['role']) ?></button></td>
                  <td><button type="button" class="btn bg-light-blue  btn-sm waves-effect"><?= ($row['is_active'] == 0)?'inactive': 'active' ?></button></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- #END# Exportable Table -->


 <!-- Jquery DataTable Plugin Js -->
  <script src="<?= base_url()?>public/plugins/jquery-datatable/jquery.dataTables.js"></script>
  <script src="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
  <script src="<?= base_url()?>public/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
  <script src="<?= base_url()?>public/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
  <script src="<?= base_url()?>public/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
  <script src="<?= base_url()?>public/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
  <script src="<?= base_url()?>public/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
  <script src="<?= base_url()?>public/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
  <script src="<?= base_url()?>public/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
  <!-- Custom Js -->
  <script src="<?= base_url()?>public/js/pages/tables/jquery-datatable.js"></script>