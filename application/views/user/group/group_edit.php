<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          ADD NEW GROUP
        </h2>
        
      </div>
      <div class="body">
        <div class="row clearfix">
          <div class="col-md-12">
            <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?>
          </div>

          <?php echo form_open(base_url('admin/group/edit/'.$group['id']), 'class="form-horizontal"' )?> 
          <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="group_name">Group Name</label>
            </div>
            <div class="col-lg-8 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="group_name" name="group_name" value="<?= $group['group_name']; ?>" class="form-control">
                    </div>
                </div>
            </div>
          </div>
          <div class="row clearfix">
                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                    <input type="submit" name="submit" value="UPDATE" class="btn btn-primary m-t-15 waves-effect">
                </div>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    $("#users").addClass('active');
    $("#user_group").addClass('active');
</script>
