<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">แก้ไขหน่วยสนาม/ปกติ</h3>
            </div>
			<?php echo form_open('unit/edit/'.$unit['unit_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="unit_name" class="control-label">ชื่อหน่วยงาน</label>
						<div class="form-group">
							<input type="text" name="unit_name" value="<?php echo ($this->input->post('unit_name') ? $this->input->post('unit_name') : $unit['unit_name']); ?>" class="form-control" id="unit_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="num_personel" class="control-label">อัตรากำลังพลของหน่วย (นาย)</label>
						<div class="form-group">
							<input type="text" name="num_personel" value="<?php echo ($this->input->post('num_personel') ? $this->input->post('num_personel') : $unit['num_personel']); ?>" class="form-control" id="num_personel" />
							<span class="text-danger"><?php echo form_error('num_personel');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="location" class="control-label">พิกัดที่ตั้ง บก.หน่วย (พื้นที่รับผิดชอบ)</label>
						<div class="form-group">
							<input type="text" name="location" value="<?php echo ($this->input->post('location') ? $this->input->post('location') : $unit['location']); ?>" class="form-control" id="location" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="role" class="control-label">ภารกิจ บทบาทหน้าที่ของหน่วย</label>
						<div class="form-group">
							<input type="text" name="role" value="<?php echo ($this->input->post('role') ? $this->input->post('role') : $unit['role']); ?>" class="form-control" id="role" />
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
