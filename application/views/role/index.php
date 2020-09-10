<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">รายชื่อบทบาทหน้าที่</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('role/add'); ?>" class="btn btn-success btn-sm">เพิ่ม</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ลำดับ</th>
						<th>บทบาทหน้าที่</th>
						<th>การดำเนินการ</th>
                    </tr>
                    <?php $i=0;?>
                    <?php foreach($roles as $t){ ?>
                    <tr>
						<td><?php $i++;echo $i; ?></td>
						<td><?php echo $t['role']; ?></td>
						<td>
                            <a href="<?php echo site_url('role/edit/'.$t['roleId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> แก้ไข</a>
                            <a href="<?php echo site_url('role/remove/'.$t['roleId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> ลบ</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
