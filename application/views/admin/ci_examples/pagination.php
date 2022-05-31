<!-- Striped Rows -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2 style="display: inline-block;">
          PAGINATION EXAMPLE
        </h2>
        <div class="pull-right">
          <div class="btn-group margin-bottom-20"> 
            <a href="<?= base_url('admin/ci_examples/create_users_pdf') ?>" class="btn btn-success waves-effect"><i class="material-icons">save</i><span>Export as PDF</span></a>
            <a href="<?= base_url('admin/ci_examples/export_csv') ?>" class="btn btn-success waves-effect"><i class="material-icons">save</i><span>Export as CSV</span></a>
          </div>
        </div>
      </div>
      <div class="body table-responsive">
        <table class="table table-striped">
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
          <tbody>
            <?php $i=0; foreach($all_users as $row): ?>
              <tr>
                <td><?= ++$i; ?></td>
                <td><?= $row['username']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['mobile_no']; ?></td>
                <td><?= date('F j, Y',strtotime($row['created_at'])); ?></td>
                <td><span class="btn bg-teal  waves-effect"><?= getGroupyName($row['role']) ?><span></td>
                <td><span class="btn bg-blue waves-effect"><?= ($row['is_active'] == 0)?'inactive': 'active' ?><span></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="pull-right">
            <?php echo $this->pagination->create_links(); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- #END# Striped Rows -->