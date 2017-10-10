<script src="/assets/admin/js/ckfinder/ckfinder.js"></script>

<div class="page-header">
	<div class="row">
		<div class="col-xs-6">
			<div>
				<h1>Sửa Tài Khoản</h1>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="pull-right">
				<a href="/admin/user">
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
		<form class="form-horizontal" role="form" action="/admin/user/edit/<?= $record_detail['user_id']?>" method="post">

			<?php if($this->session->flashdata()) : ?>
			<div class="alert alert-info">
				<button class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
				<h4 class="text-alert"><i class="ace-icon fa fa-hand-o-right"></i>
					<?php echo $this->session->flashdata('message') ?>
				</h4>
			</div>
			<?php endif; ?>
			
			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tài khoản : <span style="color:red">(*)</span></label>
				<div class="col-sm-9">
					<input type="text" name="username" value="<?= $record_detail['user_name'] ?>" id="form-field-1" placeholder="tài khoản" class="col-xs-10 col-sm-5" required autocomplete="off" disabled="disabled">
					<?php echo form_error('username','<h5 class="text-danger";>','</h5>');?>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Mật khẩu : <span style="color:red">(*)</span></label>
				<div class="col-sm-9">
					<input type="password" name="password" value="<?php echo set_value('password')?>" id="form-field-2" placeholder="mật khẩu" class="col-xs-10 col-sm-5" autocomplete="off">
					<?php echo form_error('password','<h5 class="text-danger";>','</h5>');?>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-3"> Họ tên : </label>
				<div class="col-sm-9">
					<input type="text" name="fullname" value="<?= $record_detail['full_name'] ?>" id="form-field-3" placeholder="họ tên" class="col-xs-10 col-sm-5" autocomplete="off">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-4"> Email : </label>
				<div class="col-sm-9">
					<input type="text" name="email" value="<?= $record_detail['email'] ?>" id="form-field-4" placeholder="email" class="col-xs-10 col-sm-5" autocomplete="off">
					<?php echo form_error('email','<h5 class="text-danger";>','</h5>');?>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-5"> Số điện thoại : </label>
				<div class="col-sm-9">
					<input type="text" name="phone" value="<?= $record_detail['phone_number'] ?>" id="form-field-5" placeholder="số điện thoại" class="col-xs-10 col-sm-5" autocomplete="off" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-6"> Địa chỉ : </label>
				<div class="col-sm-9">
					<input type="text" name="address" value="<?= $record_detail['address'] ?>" id="form-field-6" placeholder="địa chỉ" class="col-xs-10 col-sm-5" autocomplete="off">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-7"> Ảnh đại diện : </label>
				<div class="col-sm-9 item">
					<img src="<?= $record_detail['avatar_path'] ? $record_detail['avatar_path'] : '/assets/admin/images/no_image.png'; ?>" alt="" class="image_view"/>
					<input type="hidden" class="image_input" value="<?= $record_detail['avatar_path'] ?>" name="avatar_path">
					<span class="icon-remove"><i class="fa fa-times" aria-hidden="true"></i></span>
					<button type="button" class="btn btn-md btn-success btn_upload_image">
						<i class="fa fa-cloud-upload"></i> Chọn ảnh để tải
					</button>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-8"> Nhóm quyền : </label>
				<div class="control-group col-sm-4">
					<select class="chosen-select col-xs-10 col-sm-5" value="" name="group" id="form-field-8" data-placeholder="nhóm quyền">
						<option value=""></option>
						<?php foreach($list_group as $val): ?>
						<option <?php echo $val['id'] == $record_detail['group'] ? 'selected="selected"':'';?> value="<?= $val['id'];?>"><?php echo $val['group_name'] ?></option>
						<?php endforeach; ?>
					</select>
					<?php echo form_error('group','<h5 class="text-danger";>','</h5>');?>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-9"> Trạng thái : </label>
				<div class="control-group col-sm-9">
					<div class="radio">
						<label>
							<input value="0" <?= $record_detail['invalid'] == 0 ? 'checked' : '' ?> name="invalid" type="radio" class="ace">
							<span class="lbl"> Đang mở </span>
						</label>
						<label>
							<input value="1" <?= $record_detail['invalid'] == 1 ? 'checked' : '' ?> name="invalid" type="radio" class="ace">
							<span class="lbl"> Tạm khóa </span>
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-10"> Sau khi lưu dữ liệu : </label>
				<div class="control-group col-sm-9">
					<div class="radio">
						<label>
							<input value="admin/user/" name="redirect" type="radio" class="ace" checked>
							<span class="lbl"> Quay về danh sách </span>
						</label>

						<label>
							<input value="admin/user/add" name="redirect" type="radio" class="ace" />
							<span class="lbl"> Tiếp tục thêm mới </span>
						</label>
					</div>
				</div>
			</div>


			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit">
						<i class="ace-icon fa fa-check bigger-110"></i>
						Cập nhật
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