<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">รายชื่อหน่วยงาน ต้นสังกัด</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('org/add'); ?>" class="btn btn-success btn-sm">เพิ่ม</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ลำดับ</th>
						<th>หน่วยงาน/ต้นสังกัด</th>
						<th>ดำเนินการ</th>
                    </tr>
                    <?php $i=0;?>
                    <?php foreach($orgs as $t){ ?>
                    <tr>
						<td><?php $i++;echo $i; ?></td>
						<td><a href="<?php echo site_url('personel/get_personel_by_org/'.$t['org_id']);?>"><?php echo $t['organizatoin']; ?></a></td>
						<td>
                            <a href="<?php echo site_url('org/edit/'.$t['org_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> แก้ไข</a>
                            <a href="<?php echo site_url('org/remove/'.$t['org_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> ลบ</a>
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
