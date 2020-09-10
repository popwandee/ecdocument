<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">รายชื่อกำลังพล ทั้งสิ้น <?php echo $total_rows;?> นาย</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('personel/add'); ?>" class="btn btn-success btn-sm">เพิ่ม</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ลำดับ</th>
						<th>เครื่องหมาย</th>
						<th>ยศ</th>
						<th>ชื่อ</th>
						<th>สกุล</th>
						<th>สังกัด</th>
						<th>บรรจุ</th>
						<th>การดำเนินการ</th>
                    </tr>
                    <?php $i=0;?>
                    <?php foreach($personels as $t){ ?>
                    <tr>
						<td><?php $i++;echo $i; ?></td>
						<td><?php echo $t['nation_id']; ?></td>
						<td><?php echo $t['rank']; ?></td>
						<td><?php echo $t['name']; ?></td>
						<td><?php echo $t['lastname']; ?></td>
						<td><?php echo $t['organizatoin'];?></td>
						<td><?php echo $t['unit_name'];  ?></td>
						<td>
                            <a href="<?php echo site_url('personel/edit/'.$t['personel_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> แก้ไข</a>
                            <a href="<?php echo site_url('personel/remove/'.$t['personel_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> ลบ</a>
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
