<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">แก้ไขรายชื่อบรรจุหน่วยรายบุคคล</h3>
            </div>
			<?php echo form_open('personel_to_unit/edit/'.$personel_to_unit['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="unit_id" class="control-label">หน่วยรับบรรจุ</label>
						<div class="form-group">
							<select name="unit_id" class="form-control">
								<option value="">เลือกหน่วย</option>
								<?php
								foreach($all_units as $unit)
								{
									$selected = ($unit['unit_id'] == $personel_to_unit['unit_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$unit['unit_id'].'" '.$selected.'>'.$unit['unit_name'].'</option>';
								}
								?>
							</select>
						</div>
					</div>
                    <div class="col-md-6">
						<label for="year" class="control-label">ปีงบประมาณ (เฉพาะตัวเลขเช่น 2564)</label>
						<div class="form-group">
							<input type="text" name="year" value="<?php echo ($this->input->post('year') ? $this->input->post('year') : $personel_to_unit['year']); ?>" class="form-control" id="year" />
							<span class="text-danger"><?php echo form_error('year');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="position_no" class="control-label">ลำดับที่ตำแหน่งใน อฉก.</label>
						<div class="form-group">
							<input type="text" name="position_no" value="<?php echo ($this->input->post('position_no') ? $this->input->post('position_no') : $personel_to_unit['position_no']); ?>" class="form-control" id="position_no" />
							<span class="text-danger"><?php echo form_error('position_no');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="position" class="control-label">ชื่อตำแหน่ง</label>
						<div class="form-group">
							<input type="text" name="position" value="<?php echo ($this->input->post('position') ? $this->input->post('position') : $personel_to_unit['position']); ?>" class="form-control" id="position" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="rank_id" class="control-label">อัตราชั้นยศ</label>
						<div class="form-group">
							<select name="rank_id" class="form-control">
								<option value="">เลือกอัตราชั้นยศ</option>
								<?php
								foreach($all_rank as $rank)
								{
									$selected = ($rank['rank_id'] == $personel_to_unit['rank_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$rank['rank_id'].'" '.$selected.'>'.$rank['rank'].'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="personel_id" class="control-label">บุคคลที่บรรจุ</label>
						<div class="form-group">
							<select name="personel_id" class="form-control">
								<option value="">เลือกบุคคลบรรจุตำแหน่งนี้</option>
								<?php
								foreach($all_personels as $personel)
								{
									$selected = ($personel['personel_id'] == $personel_to_unit['personel_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$personel['personel_id'].'" '.$selected.'>'.$personel['name'].'  '.$personel['lastname'].' ('.$personel['rank'].')</option>';
								}
								?>
							</select>
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
