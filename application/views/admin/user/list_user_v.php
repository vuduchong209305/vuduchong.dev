<div class="page-header">
	<div class="row">
		<div class="col-xs-6">
			<div>
				<h1>Danh Sách Người Dùng</h1>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="pull-right">
				<a href="/admin/user/add" class="add">
					<button class="btn btn-sm btn-success">
						<i class="fa fa-plus" aria-hidden="true"></i> Thêm Mới 
					</button>
				</a>
				<a href="javascript:void(0)">
					<button class="btn btn-sm btn-danger btn_del">
						<i class="fa fa-trash" aria-hidden="true"></i> Xóa 
					</button>
				</a>
				<input type="hidden" id="url_delete" value="user" />
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('admin/alert_v') ?>

<div class="row">
	<div class="col-xs-12">
		<table id="simple-table" class="table table-bordered table-hover text-center">
			<thead>
				<tr>
					<th class="center" width="3%">
						<label class="pos-rel">
							<input type="checkbox" class="ace" id="checkall">
							<span class="lbl"></span>
						</label>
					</th>
					<th width="3%" class="center">STT</th>
					<th width="5%" class="center">Avatar</th>
					<th class="center">Tài Khoản</th>
					<th class="center">Họ Tên</th>
					<th width="10%" class="center">
						<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
						Đ.N Gần Nhất
					</th>
					<th width="10%" class="center">Nhóm Quyền</th>
					<th width="10%" class="center">Trạng Thái</th>
					<th width="6%" class="center"></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach($list_user as $val) { ?>
				<tr>
					<td class="center">
						<label class="pos-rel">
							<input type="checkbox" class="ace check_cat" value="<?= $val['user_id'] ?>">
							<span class="lbl"></span>
						</label>
					</td>
					<td><?= $val['user_id'] ?></td>
					<td>
						<img src="<?= $val['avatar_path'] ? $val['avatar_path'] : '/assets/admin/images/no_image.png' ?>" 
						alt="<?= $val['user_name'] ?>" title="<?= $val['user_name'] ?>" width="100px">
					</td>
					<td <?= $val['invalid'] == 1 ? ' class="banned" ' : '' ; ?> ><?= $val['user_name'] ?></td>
					<td>
						<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#profile<?= $val['user_id'] ?>" title="<?= $val['user_name'] ?>">
							<?= $val['full_name'] ?>
						</button>
					</td>

					<div id="profile<?= $val['user_id'] ?>" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header text-center">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Tài khoản : 
										<strong>
											<?= $val['user_name'] ?>
											<img src="<?= $val['group'] == 1 ? 
											'/assets/admin/images/admin.png' : 
											'/assets/admin/images/mod.png' ?>" alt="" width="50px">
										</strong>
									</h4>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-sm-4">
											<img src="<?= $val['avatar_path'] ? $val['avatar_path'] : '/assets/admin/images/no_image.png' ?>" width="150px">
										</div>
										<div class="col-sm-8">
											<p><span class="badge">Họ tên</span> : <?= $val['full_name'] ?></p>
											<p><span class="badge">Số điện thoại</span> : <?= $val['phone_number'] ?></p>
											<p><span class="badge">Địa chỉ</span> : <?= $val['address'] ?></p>
											<p><span class="badge">Email</span> : <?= $val['email'] ?></p>
											<p><span class="badge">Ngày đăng ký</span> : 
												<?php if($val['created_at']) : ?>
													<script>document.write(moment("<?= $val['created_at'] ?>").fromNow());</script>
												<?php endif; ?>
											</p>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>
								</div>
							</div>

						</div>
					</div>
					<td>
						<?php if($val['last_visited']) : ?>
							<script>document.write(moment("<?= $val['last_visited'] ?>").fromNow());</script>
						<?php endif ?>
					</td>
					<td>
						<?= $val['group'] == 1 ? '<span class="admin">Admin</span>' : '<span class="mod">Mod</span>' ?>
					</td>
					<td>
						<?= $val['online'] == 1 ? 
						'<span class="label label-lg label-success">Online</span>' : 
						'<span class="label label-lg label-default">Offline</span>' ?>
					</td>

					<td>
						<div class="hidden-sm hidden-xs action-buttons text-center hidden">
							<a class="green" href="/admin/user/edit/<?= $val['user_id'];?>">
								<i class="ace-icon fa fa-pencil bigger-130"></i>
							</a>
							<a class="red delete_one" href="#">
								<i class="ace-icon fa fa-trash-o bigger-130"></i>
							</a>
						</div>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div><!-- /.span -->
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"></div>