<!-- JQuery DataTable Css -->
<link href="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">  
<!-- Bootstrap Select Css -->
<link href="<?= base_url() ?>public/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
   <!-- Exportable Table -->
   <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header">
          <h2>
            Server-side Processing Example (Ajax base pagination & search)
          </h2>
        </div>
        <div class="body">
          <div class="table-responsive">
            <table id="na_datatable" class="table table-bordered table-striped table-hover dataTable">
              <thead>
                <tr>
                  <th>#ID</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Mobile No.</th>
                  <th>Role/Group</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#ID</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Created At</th>
                  <th>Role/Group</th>
                  <th>Status</th>
                </tr>
              </tfoot>
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
  <script type="text/javascript">
    //---------------------------------------------------
    var table = $('#na_datatable').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "<?=base_url('admin/ci_examples/datatable_json')?>",
        "order": [[4,'desc']],
        "columnDefs": [
        { "targets": 0, "name": "id", 'searchable':true, 'orderable':true},
        { "targets": 1, "name": "username", 'searchable':true, 'orderable':true},
        { "targets": 2, "name": "email", 'searchable':true, 'orderable':true},
        { "targets": 3, "name": "created_at", 'searchable':false, 'orderable':false},
        { "targets": 4, "name": "role", 'searchable':true, 'orderable':true},
        { "targets": 5, "name": "is_admin", 'searchable':true, 'orderable':true},
        ]
      });
    </script>
  
<!-- Autosize Plugin Js -->
<script src="<?= base_url() ?>public/plugins/autosize/autosize.js"></script>  
<!-- Custom Js -->
<script src="<?= base_url()?>public/js/pages/tables/jquery-datatable.js"></script>
 <script>
    //Textare auto growth
    autosize($('textarea.auto-growth'));

    //Delete Dialogue
    $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
 </script>