<div class="page-header">
	<div class="row">
		<div class="col-xs-6">
			<div>
				<h1>Thêm Mới Nhóm Quyền</h1>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="pull-right">
				<a href="/admin/user/listPermission">
					<button class="btn btn-sm btn-primary">
						<i class="fa fa-list" aria-hidden="true"></i> Danh Sách
					</button>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<form class="form-horizontal" role="form" method="post" action="/admin/user/addPermission">
			
			<?php $this->load->view('admin/alert_v') ?>
			
			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tên Nhóm : <span style="color:red">(*)</span></label>
				<div class="col-sm-9">
					<input type="text" name="group_name" id="form-field-1" placeholder="tên nhóm" class="col-xs-10 col-sm-5" required="">
					<?php echo form_error('group_name','<h5 class="text-danger";>','</h5>');?>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 
					Quyền : <span style="color:red">(*)</span>
				</label>
				<label class="pos-rel">
					<input type="checkbox" class="ace check_cat" value="Select All" id="checkall">
					<span class="lbl">Chọn tất cả</span>
				</label>
				<div class="col-sm-7" id="checkBoxes">
					
					<?php foreach($module_permissions as $controllers => $actions ) : ?>
						
						<div class="control-group">
							<label class="control-label module_name badge"><?php echo $controllers ?></label>

							<?php foreach ($actions as $action): ?>
								<label>
									<input value="<?= $action ?>" name="list_permission[<?= $controllers ?>][]" class="ace ace-checkbox-2 checkBoxClass" type="checkbox">
									<div class="lbl action-item"> <?php echo $action ?> </div>
								</label>
							<?php endforeach; ?>
							
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Sau khi lưu dữ liệu : </label>
				<div class="control-group col-sm-9">
					<div class="radio">
						<label>
							<input value="admin/user/listPermission" name="redirect" type="radio" class="ace" checked>
							<span class="lbl"> Quay về danh sách </span>
						</label>

						<label>
							<input value="admin/user/addPermission" name="redirect" type="radio" class="ace" />
							<span class="lbl"> Tiếp tục thêm mới </span>
						</label>
					</div>
				</div>
			</div>

			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit">
						<i class="ace-icon fa fa-check bigger-110"></i>
						Thêm mới
					</button>
					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>
						Khôi phục
					</button>
				</div>
			</div>

		</form>
	</div><!-- /.span -->
</div>

<script>
	$(document).ready(function () {
	    $("#checkall").click(function () {
	        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
	    });
	    
	    $(".checkBoxClass").change(function(){
	        if (!$(this).prop("checked")){
	            $("#checkAll").prop("checked",false);
	        }
	    });
	});
</script>