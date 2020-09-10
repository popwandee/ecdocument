<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Categories Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('category/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Name</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($categories as $e){ ?>
                    <tr>
						<td><?php echo $e['id']; ?></td>
						<td><?php echo $e['name']; ?></td>
						<td><?php echo $e['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('category/edit/'.$e['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('category/remove/'.$e['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
