<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">เพิ่มรายชื่อกำลังพล</h3>
            </div>
            <?php echo form_open('personel/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="rank_id" class="control-label">ชั้นยศ</label>
						<div class="form-group">
							<select name="rank_id" class="form-control">
								<option value="">เลือกชั้นยศ</option>
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
						<label for="org_id" class="control-label">หน่วยงาน/ต้นสังกัด</label>
						<div class="form-group">
							<select name="org_id" class="form-control">
								<option value="">เลือกต้นสังกัด</option>
								<?php
								foreach($all_orgs as $org)
								{
									$selected = ($org['org_id'] == $this->input->post('org_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$org['org_id'].'" '.$selected.'>'.$org['organizatoin'].'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="gov_id" class="control-label">หมายเลข ปชช.</label>
						<div class="form-group">
							<input type="text" name="gov_id" value="<?php echo $this->input->post('gov_id'); ?>" class="form-control" id="gov_id" />
							<span class="text-danger"><?php echo form_error('gov_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nation_id" class="control-label">หมายเลขข้าราชการทหาร</label>
						<div class="form-group">
							<input type="text" name="nation_id" value="<?php echo $this->input->post('nation_id'); ?>" class="form-control" id="nation_id" />
							<span class="text-danger"><?php echo form_error('nation_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">ชื่อ</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lastname" class="control-label">นามสกุล</label>
						<div class="form-group">
							<input type="text" name="lastname" value="<?php echo $this->input->post('lastname'); ?>" class="form-control" id="lastname" />
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
