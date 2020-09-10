<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Documents Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('document/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Categorie Id</th>
						<th>Document Code</th>
						<th>Register Date</th>
						<th>Reference</th>
						<th>Topic</th>
						<th>Store</th>
						<th>Filename</th>
						<th>Created Date</th>
						<th>Modified Date</th>
						<th>Created By</th>
						<th>Modified By</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($documents as $e){ ?>
                    <tr>
						<td><?php echo $e['id']; ?></td>
						<td><?php echo $e['categorie_id']; ?></td>
						<td><?php echo $e['document_code']; ?></td>
						<td><?php echo $e['register_date']; ?></td>
						<td><?php echo $e['reference']; ?></td>
						<td><?php echo $e['topic']; ?></td>
						<td><?php echo $e['store']; ?></td>
						<td><?php echo $e['filename']; ?></td>
						<td><?php echo $e['created_date']; ?></td>
						<td><?php echo $e['modified_date']; ?></td>
						<td><?php echo $e['created_by']; ?></td>
						<td><?php echo $e['modified_by']; ?></td>
						<td><?php echo $e['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('document/edit/'.$e['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('document/remove/'.$e['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
