<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Document Add</h3>
            </div>
            <?php echo form_open('document/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="categorie_id" class="control-label">Category</label>
						<div class="form-group">
							<select name="categorie_id" class="form-control">
								<option value="">select category</option>
								<?php 
								foreach($all_categories as $category)
								{
									$selected = ($category['id'] == $this->input->post('categorie_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$category['id'].'" '.$selected.'>'.$category['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="document_code" class="control-label">Document Code</label>
						<div class="form-group">
							<input type="text" name="document_code" value="<?php echo $this->input->post('document_code'); ?>" class="form-control" id="document_code" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="register_date" class="control-label">Register Date</label>
						<div class="form-group">
							<input type="text" name="register_date" value="<?php echo $this->input->post('register_date'); ?>" class="has-datetimepicker form-control" id="register_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="reference" class="control-label">Reference</label>
						<div class="form-group">
							<input type="text" name="reference" value="<?php echo $this->input->post('reference'); ?>" class="form-control" id="reference" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="topic" class="control-label">Topic</label>
						<div class="form-group">
							<input type="text" name="topic" value="<?php echo $this->input->post('topic'); ?>" class="form-control" id="topic" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="store" class="control-label">Store</label>
						<div class="form-group">
							<input type="text" name="store" value="<?php echo $this->input->post('store'); ?>" class="form-control" id="store" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="filename" class="control-label">Filename</label>
						<div class="form-group">
							<input type="text" name="filename" value="<?php echo $this->input->post('filename'); ?>" class="form-control" id="filename" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_date" class="control-label">Created Date</label>
						<div class="form-group">
							<input type="text" name="created_date" value="<?php echo $this->input->post('created_date'); ?>" class="has-datetimepicker form-control" id="created_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modified_date" class="control-label">Modified Date</label>
						<div class="form-group">
							<input type="text" name="modified_date" value="<?php echo $this->input->post('modified_date'); ?>" class="has-datetimepicker form-control" id="modified_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_by" class="control-label">Created By</label>
						<div class="form-group">
							<input type="text" name="created_by" value="<?php echo $this->input->post('created_by'); ?>" class="form-control" id="created_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modified_by" class="control-label">Modified By</label>
						<div class="form-group">
							<input type="text" name="modified_by" value="<?php echo $this->input->post('modified_by'); ?>" class="form-control" id="modified_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo $this->input->post('description'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>