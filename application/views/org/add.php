<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">เพิ่มหน่วยงาน/ต้นสังกัด</h3>
            </div>
            <?php echo form_open('org/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="organizatoin" class="control-label">หน่วยงาน/ต้นสังกัด</label>
						<div class="form-group">
							<input type="text" name="organizatoin" value="<?php echo $this->input->post('organizatoin'); ?>" class="form-control" id="organizatoin" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> บันทึก
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
