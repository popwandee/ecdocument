<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">รายชื่อชั้นยศ</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('rank/add'); ?>" class="btn btn-success btn-sm">เพิ่มชั้นยศ</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ลำดับที่ชั้นยศ</th>
						<th>ชั้นยศ</th>
						<th>การดำเนินการ</th>
                    </tr>
                    <?php $i=0;?>
                    <?php foreach($rank as $t){ ?>
                    <tr>
						<td><?php $i++;echo $i; ?></td>
						<td><?php echo $t['rank']; ?></td>
						<td>
                            <a href="<?php echo site_url('rank/edit/'.$t['rank_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> แก้ไข</a>
                            <a href="<?php echo site_url('rank/remove/'.$t['rank_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> ลบ</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
