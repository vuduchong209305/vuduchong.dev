$(document).ready(function(){

	// Chosen select option
	$('.chosen-select').chosen({
		width: '50%',
		allow_single_deselect: true
	});

	// Ẩn/hiện icon sửa,xóa
	$('tr').hover(function(){
		$(this).find('.action-buttons').removeClass('hidden');
	}, function(){
		$(this).find('.action-buttons').addClass('hidden');
	});

	// Check all checkbox
	$('#checkall').click(function(e){
		var table= $(e.target).closest('table');
		$('td input:checkbox',table).prop('checked',this.checked);
	});


	// Modal xác nhận trước khi xóa 1 bản ghi
	$('table a.delete_one').click(function(){
		$('.check_cat').removeClass('active_delete');
		$(this).parents('tr').find('.check_cat').addClass('active_delete');

		modal = '\
		<div class="modal-dialog modal-sm">\
			<div class="modal-content">\
				<div class="modal-header">\
					<button type="button" class="close" data-dismiss="modal">&times;</button>\
					<h4 class="modal-title">Thông Báo</h4>\
				</div>\
				<div class="modal-body">\
					<h4 class="text-danger text-center">Bạn chắc chắn muốn xóa</h4>\
				</div>\
				<div class="modal-footer">\
					<button type="button" class="btn btn-success btn-xs btn_delete_item" data-dismiss="modal">Xóa</button>\
					<button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Đóng</button>\
				</div>\
			</div>\
		</div>\
		';

		$('#myModal').html(modal).modal('show');
	});

	// Thực hiện xóa dữ liệu 1 bản ghi
	$('#myModal').on('click', '.btn_delete_item', function(){

		$('.check_cat').each(function() {
			if($(this).hasClass('active_delete'))
			{
				var itemID = $(this).val();
				var that = this;
				var url_delete = $('#url_delete').val();
				$.ajax({
                    url : '/admin/'+ url_delete +'/delete',
                    type : 'post',
                    dataType: 'json',
                    data : { IDstring: itemID },
                    success : function (data){
                        if(data.status == 'OK')
                        {
                        	$(that).parents('tr').fadeOut(function(){
                        		$(that).parents('tr').remove();
                        	});
                        }
                    }
                });
                return true;
			}
		});
	});

	// Modal xác nhận trước khi xóa nhiều bản ghi
	$('.btn_del').click(function(){

		var IDstring = '';
		$('.check_cat').filter(':checked').each(function() {
			itemID = $(this).val();
			if(IDstring) {
				IDstring = IDstring + ',' + itemID;
			} else {
				IDstring =  itemID;
			}
		});

		if (IDstring == '') {
			modal = '\
			<div class="modal-dialog modal-sm">\
				<div class="modal-content">\
					<div class="modal-header">\
						<button type="button" class="close" data-dismiss="modal">&times;</button>\
						<h4 class="modal-title">Thông Báo</h4>\
					</div>\
					<div class="modal-body">\
						<h4 class="text-danger text-center">Bạn chưa chọn bản ghi nào</h4>\
					</div>\
					<div class="modal-footer">\
						<button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Đóng</button>\
					</div>\
				</div>\
			</div>\
			';
			
			$('#myModal').html(modal).modal('show');

			return false;
		}

		modal = '\
		<div class="modal-dialog modal-sm">\
			<div class="modal-content">\
				<div class="modal-header">\
					<button type="button" class="close" data-dismiss="modal">&times;</button>\
					<h4 class="modal-title">Thông Báo</h4>\
				</div>\
				<div class="modal-body">\
					<h4 class="text-danger text-center">Bạn chắc chắn muốn xóa</h4>\
				</div>\
				<div class="modal-footer">\
					<button type="button" class="btn btn-success btn-xs btn_delete" data-dismiss="modal">Xóa</button>\
					<button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Đóng</button>\
				</div>\
			</div>\
		</div>\
		';

		$('#myModal').html(modal).modal('show');
	});

	// Thực hiện xóa dữ liệu nhiều bản ghi
	$('#myModal').on('click', '.btn_delete', function(){

		var IDstring = '';
		$('.check_cat').filter(':checked').each(function() {
			itemID = $(this).val();
			if(IDstring){
				IDstring = IDstring + ',' + itemID;
			} else {
				IDstring =  itemID;
			}
		});

		if(IDstring != '') {
			var url_delete = $('#url_delete').val();
			$.ajax({
                url : '/admin/'+ url_delete +'/delete',
                type : 'post',
                dataType: 'json',
                data : { IDstring: itemID },
                success : function (data){
                    if(data.status == 'OK')
                    {
                    	var checkbox = $('.table').find('tbody input[type=checkbox]');
                    	checkbox.each(function(){
							if($(this).is(':checked')) {									
								$(this).parents('tr').fadeOut(function(){
									$(this).remove();
								});
							}
						});
                    }
                }
            });
            return true;
		}


		$('.check_cat').each(function() {
			if($(this).hasClass('active_delete'))
			{
				var itemID = $(this).val();
				var that = this;
				var url_delete = $('#url_delete').val();
				$.ajax({
                    url : '/admin/'+ url_delete +'/delete',
                    type : 'post',
                    dataType: 'json',
                    data : { IDstring: itemID },
                    success : function (data){
                        if(data.status == 'OK')
                        {
                        	$(that).parents('tr').fadeOut(function(){
                        		$(that).parents('tr').remove();
                        	});
                        }
                    }
                });
                return true;
			}
		});
	});

	// Upload ảnh = ckfinder
	$('body').on('click', '.btn_upload_image', function() {
		var that = this;
		var finder = new CKFinder();
		finder.basePath = '../../';
		finder.selectActionFunction = function(fileUrl) {
			$(that).parents('.item').find('.image_input').val(fileUrl);
			$(that).parents('.item').find('.image_view').attr("src", fileUrl);
		};
		finder.popup();
	});

	// Xóa ảnh preview
	$('.icon-remove').click(function(){
		if(confirm('Bạn chắc chắn muốn xóa'))
		{
			$(this).parents('.item').find('.image_input').val('');
			$(this).parents('.item').find('.image_view').attr('src', '/assets/admin/images/no_image.png');
		}
		return false;
	});
});