<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">รายชื่อกำลังพลบรรจุหน่วย <p style="color:blue"><?php echo $personel_to_unit[0]['unit_name'];?></p>
                    ประจำปีงบประมาณ <?php echo $personel_to_unit[0]['year'];?>
                </h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('personel_to_unit/add/2564'); ?>" class="btn btn-success btn-sm">เพิ่ม</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ลำดับ</th>
						<th>ตำแหน่ง</th>
						<th>ยศ ชื่อ สกุล</th>
						<th>การดำเนินการ</th>
                    </tr>
                    <?php $i=0;?>
                    <?php foreach($personel_to_unit as $t){ ?>
                    <tr>
						<td><?php $i++;echo $i; ?></td>
						<td><?php echo $t['position']; ?></td>
						<?php //echo $t['unit_name'].' ปี '.$t['year']; ?>
						<td><?php echo $t['rank'].' '.$t['name'].' '.$t['lastname']; ?></td>
						<td>
                            <a href="<?php echo site_url('personel_to_unit/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> แก้ไข</a>
                            <a href="<?php echo site_url('personel_to_unit/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> ลบ</a>
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
