<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">เพิ่มชั้นยศ</h3>
            </div>
            <?php echo form_open('rank/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="rank" class="control-label">ชั้นยศ</label>
						<div class="form-group">
							<input type="text" name="rank" value="<?php echo $this->input->post('rank'); ?>" class="form-control" id="rank" />
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
