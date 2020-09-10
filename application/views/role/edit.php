<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">แก้ไขตำแหน่งหน้าที่</h3>
            </div>
			<?php echo form_open('role/edit/'.$role['roleId']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="role" class="control-label">ตำแหน่งหน้าที่</label>
						<div class="form-group">
							<input type="text" name="role" value="<?php echo ($this->input->post('role') ? $this->input->post('role') : $role['role']); ?>" class="form-control" id="role" />
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
