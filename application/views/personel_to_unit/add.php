<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">จัดกำลังพลบรรจุหน่วย</h3>
            </div>
            <?php echo form_open('personel_to_unit/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="unit_id" class="control-label">หน่วยรับบรรจุ</label>
						<div class="form-group">
							<select name="unit_id" class="form-control">
								<option value="">เลือกหน่วยรับบรรจุ</option>
								<?php
								foreach($all_units as $unit)
								{
									$selected = ($unit['unit_id'] == $this->input->post('unit_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$unit['unit_id'].'" '.$selected.'>'.$unit['unit_name'].'</option>';
								}
								?>
							</select>
						</div>
					</div>

                    <div class="col-md-6">
                        <label for="year" class="control-label">ปีงบประมาณที่บรรจ (เฉพาะตัวเลขเช่น 2564)ุ</label>
                        <div class="form-group">
                            <input type="text" name="year" value="<?php echo $this->input->post('year'); ?>" class="form-control" id="year" />
                            <span class="text-danger"><?php echo form_error('year');?></span>
                        </div>
                    </div>
					<div class="col-md-6">
						<label for="position_no" class="control-label">ลำดับที่ตำหน่งใน อฉก.</label>
						<div class="form-group">
							<input type="text" name="position_no" value="<?php echo $this->input->post('position_no'); ?>" class="form-control" id="position_no" />
							<span class="text-danger"><?php echo form_error('position_no');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="position" class="control-label">ชื่อตำแหน่ง</label>
						<div class="form-group">
							<input type="text" name="position" value="<?php echo $this->input->post('position'); ?>" class="form-control" id="position" />
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
									$selected = ($rank['rank_id'] == $this->input->post('rank_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$rank['rank_id'].'" '.$selected.'>'.$rank['rank'].'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="personel_id" class="control-label">เลือกกำลังพล
                        -เหลือกำลังพลยังไม่บรรจุจำนวน <?php echo(count($free_personels)); ?> นาย</label>
						<div class="form-group">
							<select name="personel_id" class="form-control">
								<option value="">เลือกกำลังพล</option>
								<?php
								foreach($free_personels as $personel)
								{
									$selected = ($personel['personel_id'] == $this->input->post('personel_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$personel['personel_id'].'" '.$selected.'>'.$personel['name'].'  '.$personel['lastname'].' ('.$personel['rank'].') </option>';
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
