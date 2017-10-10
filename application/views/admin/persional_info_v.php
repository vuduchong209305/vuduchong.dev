<link rel="stylesheet" href="/assets/admin/css/daterangepicker.css">
<link rel="stylesheet" href="/assets/admin/css/jquery-ui.min.css">

<script src="/assets/admin/js/daterangepicker.js"></script>
<script src="/assets/admin/js/ckfinder/ckfinder.js"></script>
<script src="/assets/admin/js/ckeditor/ckeditor.js"></script>
<script src="/assets/admin/js/jquery-ui.min.js"></script>

<?php $this->load->view('admin/alert_v') ?>

<div class="tabbable">
	<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
		<li class="active">
			<a data-toggle="tab" href="#tab1" aria-expanded="true">Thông tin cơ bản</a>
		</li>

		<li class="">
			<a data-toggle="tab" href="#tab2" aria-expanded="false">Học vấn</a>
		</li>

		<li class="">
			<a data-toggle="tab" href="#tab3" aria-expanded="false">Kinh nghiệm</a>
		</li>

		<li class="">
			<a data-toggle="tab" href="#tab4" aria-expanded="false">Mạng xã hội</a>
		</li>
	</ul>

	<div class="tab-content">
		<div id="tab1" class="tab-pane active">
			<form class="form-horizontal" role="form" action="/admin/persional/edit_info" method="post">

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Họ tên : </label>
					<div class="col-sm-9">
						<input type="text" name="fullname" value="<?php echo $list_info['fullname'] ?>" id="form-field-1" placeholder="họ tên" class="col-xs-10 col-sm-5" required="" autocomplete="off">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Năm sinh : </label>
					<div class="col-sm-9">
						<input type="text" name="birthday" value="<?php echo $list_info['birthday'] ?>" placeholder="năm sinh" class="col-xs-10 col-sm-5 daterangpicker" required="" autocomplete="off">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-4"> Email : </label>
					<div class="col-sm-9">
						<input type="email" name="email" value="<?php echo $list_info['email'] ?>" id="form-field-4" placeholder="email" class="col-xs-10 col-sm-5" autocomplete="off">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-5"> Số điện thoại : </label>
					<div class="col-sm-9">
						<input type="text" name="phone" value="<?php echo $list_info['phone'] ?>" id="form-field-5" placeholder="số điện thoại" class="col-xs-10 col-sm-5" autocomplete="off" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-6"> Địa chỉ : </label>
					<div class="col-sm-9">
						<input type="text" name="address" value="<?php echo $list_info['address'] ?>" id="form-field-6" placeholder="địa chỉ" class="col-xs-10 col-sm-5" autocomplete="off">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-6"> Công việc : </label>
					<div class="col-sm-9">
						<input type="text" name="job" value="<?php echo $list_info['job'] ?>" id="form-field-6" placeholder="công việc" class="col-xs-10 col-sm-5" autocomplete="off">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-7"> Ảnh đại diện : </label>
					<div class="col-sm-9 item">
						<img src="<?= $list_info['avatar'] ? $list_info['avatar'] : '/assets/admin/images/no_image.png'; ?>" alt="" class="image_view">
						<input type="hidden" class="image_input" value="<?php echo $list_info['avatar'] ?>" name="avatar_path">
						<span class="icon-remove"><i class="fa fa-times" aria-hidden="true"></i></span>
						<button type="button" class="btn btn-md btn-success btn_upload_image">
							<i class="fa fa-cloud-upload"></i> Chọn ảnh để tải
						</button>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-6"> Mô tả : </label>
					<div class="col-sm-9">
						<textarea name="description" value="<?php echo $list_info['description'] ?>" id="editor" class="col-xs-10 col-sm-5" autocomplete="off"><?php echo $list_info['description'] ?></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-7"> Hình nền : </label>
					<div class="col-sm-9 item">
						<img src="<?= $list_info['background'] ? $list_info['background'] : '/assets/admin/images/no_image.png'; ?>" alt="" class="image_view">
						<input type="hidden" class="image_input" value="<?php echo $list_info['background'] ?>" name="background">
						<span class="icon-remove"><i class="fa fa-times" aria-hidden="true"></i></span>
						<button type="button" class="btn btn-md btn-success btn_upload_image">
							<i class="fa fa-cloud-upload"></i> Chọn ảnh để tải
						</button>
					</div>
				</div>

				<script>CKEDITOR.replace('editor');</script>  

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
		</div>

		<div id="tab2" class="tab-pane">
			<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
		</div>

		<div id="tab3" class="tab-pane">
			<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
		</div>
		

		<div id="tab4" class="tab-pane">
			<form class="form-horizontal" role="form" action="/admin/persional/edit_social" method="post">
				<ul id="sortable">

					<?php foreach($list_social as $key=>$val) : ?>

						<li class="ui-state-default" data-id="<?= $val['id'] ?>">
							<div class="form-group social-group">
								<label class="col-sm-2 control-label no-padding-right"> <?= $val['name'] ?> : </label>
								<div class="col-sm-9 item">
									<input type="hidden" value="<?= $val['id'] ?>" name="data[<?= $key?>][id]">
									<input type="hidden" value="<?= $val['name'] ?>" name="data[<?= $key?>][name]">
									<input type="hidden" value="<?= $val['image'] ?>" name="data[<?= $key?>][image]" class="image_input">

									<img src="<?= $val['image'] ?>" alt="" class="img_social image_view">
									<span class="icon-remove"><i class="fa fa-times" aria-hidden="true"></i></span>
									<button type="button" class="btn btn-md btn-success btn_upload_image">
										<i class="fa fa-cloud-upload"></i> Chọn ảnh để tải
									</button>
									<input type="text" value="<?= $val['link'] ?>" name="data[<?= $key?>][link]" placeholder="nhập link" class="link-input" required="" autocomplete="off">
								</div>
							</div>
						</li>

					<?php endforeach; ?>
					
				</ul>

				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn btn-info" type="submit" onclick="get()">
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
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){

		// Daterangpicker jQuery UI
		$('input[name="birthday"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
		}, 
		function(start, end, label) {
			var years = moment().diff(start, 'years');
			alert("Bạn đang " + years + " tuổi.");
		});

		// Sortable jQuery UI
		$( "#sortable" ).sortable().disableSelection();

		function get()
        {
            //tạo biến data
            var data = [];
            //lặp các thẻ li và lấy ra data-id
            $('li').each(function(){
                data.push($(this).attr('data-id'));
            });
            //gửi ajax
            $.ajax({
                url: '/update_order', 
                dataType: 'text',
                cache: false,
                data: {data: data.join('-')}, //data có dạng: a-b-c-d                       
                method: 'post',
                success: function(res){ //nếu thành công thì reload lại trang
                    location.reload();
                }
            });
        }
	});
</script>