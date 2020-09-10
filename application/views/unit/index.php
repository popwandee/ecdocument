<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">รายชื่อหน่วยงานรับบรรจุ</h3>
                <?php if(isset($_SESSION['message'])){$message=$_SESSION['message'];$_SESSION['message']='';}else{$message='';}?>
                <h4><p style="color:red"><?php echo $message;?></p></h4>
            	<div class="box-tools">
                    <a href="<?php echo site_url('unit/add'); ?>" class="btn btn-success btn-sm">เพิ่ม</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ลำดับ</th>
						<th>ชื่อหน่วย</th>
						<th>จำนวนอัตรากำลังพล</th>
						<th>พิกัดที่ตั้ง</th>
						<th>ภารกิจ หน้าที่</th>
						<th>การดำเนินการ</th>
                    </tr>
                    <?php $i=0;?>
                    <?php foreach($units as $t){ ?>
                    <tr>
						<td><?php $i++; echo $i; ?></td>
						<td><a href="<?php echo site_url('personel_to_unit/get_personel_by_unit/'.$t['unit_id'].'/2564');?>"><?php echo $t['unit_name']; ?></a></td>
						<td><?php echo $t['num_personel']; ?></td>
						<td><?php echo $t['location']; ?></td>
						<td><?php echo $t['role']; ?></td>
						<td>
                            <a href="<?php echo site_url('unit/edit/'.$t['unit_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> แก้ไข</a>
                            <a href="<?php echo site_url('unit/remove/'.$t['unit_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> ลบ</a>
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
