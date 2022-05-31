<!-- JQuery DataTable Css -->
<link href="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">  
<!-- Bootstrap Select Css -->
<link href="<?= base_url() ?>public/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2 style="display: inline-block;">
          USER GROUPS
        </h2>
        <a href="<?= base_url('admin/group/add'); ?>" class="btn bg-deep-orange waves-effect pull-right"><i class="material-icons">add</i> Add New Group</a>
      </div>
      <div class="body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
            <thead>
              <tr>
                <th>No</th>
                <th>Group Name</th>
                <th style="width: 150px;" class="text-right">Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Group Name</th>
                <th style="width: 150px;" class="text-right">Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $count=0; foreach($all_groups as $row):?>
                  <tr>
                    <td><?= ++$count; ?></td>
                    <td><?= $row['group_name']; ?></td>
                    <td><a title="Delete" class="delete btn btn-sm btn-danger pull-right '.$disabled.'" data-href="<?= base_url('admin/group/del/'.$row['id']); ?>" data-toggle="modal" data-target="#confirm-delete"><i class="material-icons">delete</i></a>
                    <a title="Edit" class="update btn btn-sm btn-primary pull-right" href="<?= base_url('admin/group/edit/'.$row['id'])?>"><i class="material-icons">edit</i></a>
                    </td>
                  </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div id="confirm-delete" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">
        <p>As you sure you want to delete.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a class="btn btn-danger btn-ok">Delete</a>
      </div>
    </div>
  </div>
</div>

 <!-- Jquery DataTable Plugin Js -->
  <script src="<?= base_url()?>public/plugins/jquery-datatable/jquery.dataTables.js"></script>
  <script src="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
   <!-- Custom Js -->
  <script src="<?= base_url()?>public/js/pages/tables/jquery-datatable.js"></script>

 <script>
    //Delete Dialogue
    $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
     $("#users").addClass('active');
 </script>
