<div class="page-header">
	<div class="row">
		<div class="col-xs-6">
			<div>
				<h1>Danh Sách Quyền</h1>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="pull-right">
				<a href="/admin/user/addPermission" class="add">
					<button class="btn btn-sm btn-success">
						<i class="fa fa-plus" aria-hidden="true"></i> Thêm Mới 
					</button>
				</a>
				<a href="javascript:void(0)">
					<button class="btn btn-sm btn-danger btn_del">
						<i class="fa fa-trash" aria-hidden="true"></i> Xóa 
					</button>
				</a>
				<input type="hidden" id="url_delete" value="user/deletePermission" />
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('admin/alert_v') ?>

<div class="row">
	<div class="col-xs-12">
		<table id="simple-table" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="center" width="5%">
						<label class="pos-rel">
							<input type="checkbox" class="ace" id="checkall">
							<span class="lbl"></span>
						</label>
					</th>
					<th width="5%" class="center">STT</th>
					<th width="10%" class="center">Nhóm Quyền</th>
					<th width="45%" class="center">Quyền</th>
					<th width="15%" class="center">
						<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
						Thời Gian Tạo
					</th>
					<th width="7%"></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach($list_permission as $val) : ?>
				<tr>
					<td class="center">
						<label class="pos-rel">
							<input type="checkbox" class="ace">
							<span class="lbl"></span>
						</label>
					</td>
					<td class="text-center"><?php echo $val['id'] ?></td>
					<td class="text-center">
						<?php echo $val['group_name'] ?>
					</td>
					<td><p class="view_per"><?php echo '<pre>'; print_r(json_decode($val['list_permission'])); echo '</pre>'; ?></p></td>
					<td class="text-center">
						<?php if($val['created_at']) : ?>
						<script>
							document.write(moment("<?php echo $val['created_at'] ?>").fromNow());
						</script>
						<?php endif; ?>
					</td>

					<td>
						<div class="hidden-sm hidden-xs action-buttons text-center hidden">
							<a class="green" href="#">
								<i class="ace-icon fa fa-pencil bigger-130"></i>
							</a>
							<a class="red " href="#">
								<i class="ace-icon fa fa-trash-o bigger-130"></i>
							</a>
						</div>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div><!-- /.span -->
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"></div>