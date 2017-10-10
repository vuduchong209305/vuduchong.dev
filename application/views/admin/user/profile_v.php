<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="hr dotted"></div>

		<div class="">
			<div id="user-profile-1" class="user-profile row">
				<div class="col-xs-12 col-sm-3 center">
					<div>
						<span class="profile-picture">
							<img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="<?php echo $this->avatar_path ?>">
						</span>

						<div class="space-4"></div>

						<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
							<div class="inline position-relative">
								<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
									<i class="ace-icon fa fa-circle light-green"></i>
									&nbsp;
									<span class="white"><?php echo $this->full_name ?></span>
								</a>

								<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
									<li class="dropdown-header"> Change Status </li>

									<li>
										<a href="#">
											<i class="ace-icon fa fa-circle green"></i>
											&nbsp;
											<span class="green">Available</span>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="ace-icon fa fa-circle red"></i>
											&nbsp;
											<span class="red">Busy</span>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="ace-icon fa fa-circle grey"></i>
											&nbsp;
											<span class="grey">Invisible</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="space-6"></div>

					<div class="profile-contact-info">
						<div class="profile-contact-links align-left">
							<a href="#" class="btn btn-link">
								<i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
								Add as a friend
							</a>

							<a href="#" class="btn btn-link">
								<i class="ace-icon fa fa-envelope bigger-120 pink"></i>
								Send a message
							</a>

							<a href="#" class="btn btn-link">
								<i class="ace-icon fa fa-globe bigger-125 blue"></i>
								www.alexdoe.com
							</a>
						</div>

						<div class="space-6"></div>
					</div>

					<div class="hr hr16 dotted"></div>
				</div>

				<div class="col-xs-12 col-sm-9">
					<div class="center">
						<span class="btn btn-app btn-sm btn-light no-hover">
							<span class="line-height-1 bigger-170 blue"> 1,411 </span>

							<br>
							<span class="line-height-1 smaller-90"> Views </span>
						</span>

						<span class="btn btn-app btn-sm btn-yellow no-hover">
							<span class="line-height-1 bigger-170"> 32 </span>

							<br>
							<span class="line-height-1 smaller-90"> Followers </span>
						</span>

						<span class="btn btn-app btn-sm btn-pink no-hover">
							<span class="line-height-1 bigger-170"> 4 </span>

							<br>
							<span class="line-height-1 smaller-90"> Projects </span>
						</span>

						<span class="btn btn-app btn-sm btn-grey no-hover">
							<span class="line-height-1 bigger-170"> 23 </span>

							<br>
							<span class="line-height-1 smaller-90"> Reviews </span>
						</span>

						<span class="btn btn-app btn-sm btn-success no-hover">
							<span class="line-height-1 bigger-170"> 7 </span>

							<br>
							<span class="line-height-1 smaller-90"> Albums </span>
						</span>

						<span class="btn btn-app btn-sm btn-primary no-hover">
							<span class="line-height-1 bigger-170"> 55 </span>

							<br>
							<span class="line-height-1 smaller-90"> Contacts </span>
						</span>
					</div>

					<div class="space-12"></div>

					<div class="profile-user-info profile-user-info-striped">
						<div class="profile-info-row">
							<p class="profile-info-name"> Tài khoản </p>

							<p class="profile-info-value">
								<span class="editable editable-click" id="username"><?php echo $this->user_name ?></span>
							</p>
						</div>

						<div class="profile-info-row">
							<p class="profile-info-name"> Địa chỉ </p>

							<p class="profile-info-value">
								<i class="fa fa-map-marker light-orange bigger-110"></i>
								<span class="editable editable-click" id="country"><?php echo $this->address ?></span>
							</p>
						</div>

						<div class="profile-info-row">
							<p class="profile-info-name"> Ngày tham gia </p>

							<p class="profile-info-value">
								<span class="editable editable-click" id="signup">
									<script>document.write(moment("<?= $this->created_at ?>").fromNow());</script>
								</span>
							</p>
						</div>

						<div class="profile-info-row">
							<p class="profile-info-name"> Đăng nhập cách đây </p>

							<p class="profile-info-value">
								<span class="editable editable-click" id="login">
									<script>document.write(moment("<?= $this->last_visited ?>").fromNow());</script>
								</span>
							</p>
						</div>

					</div>

					<div class="space-20"></div>

					<div class="hr hr2 hr-double"></div>

					<div class="space-6"></div>

				</div>
			</div>
		</div>

		<div class="hide">
			<div id="user-profile-2" class="user-profile">
				<div class="tabbable">
					<ul class="nav nav-tabs padding-18">
						<li class="active">
							<a data-toggle="tab" href="#home">
								<i class="green ace-icon fa fa-user bigger-120"></i>
								Profile
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#feed">
								<i class="orange ace-icon fa fa-rss bigger-120"></i>
								Activity Feed
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#friends">
								<i class="blue ace-icon fa fa-users bigger-120"></i>
								Friends
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#pictures">
								<i class="pink ace-icon fa fa-picture-o bigger-120"></i>
								Pictures
							</a>
						</li>
					</ul>

					<div class="hide">
						<div id="user-profile-3" class="user-profile row">
							<div class="col-sm-offset-1 col-sm-10">
								<div class="well well-sm">
												<!-- -
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		&nbsp; -->
		<div class="inline middle blue bigger-110"> Your profile is 70% complete </div>

		&nbsp; &nbsp; &nbsp;
		<div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active pos-rel">
			<div class="progress-bar progress-bar-success" style="width:70%"></div>
		</div>
	</div><!-- /.well -->

	<div class="space"></div>

	<form class="form-horizontal">
		<div class="tabbable">
			<ul class="nav nav-tabs padding-16">
				<li class="active">
					<a data-toggle="tab" href="#edit-basic" aria-expanded="true">
						<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
						Basic Info
					</a>
				</li>

				<li class="">
					<a data-toggle="tab" href="#edit-settings" aria-expanded="false">
						<i class="purple ace-icon fa fa-cog bigger-125"></i>
						Settings
					</a>
				</li>

				<li class="">
					<a data-toggle="tab" href="#edit-password" aria-expanded="false">
						<i class="blue ace-icon fa fa-key bigger-125"></i>
						Password
					</a>
				</li>
			</ul>

		</div>

	</form>
</div><!-- /.span -->
</div><!-- /.user-profile -->
</div>

<!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div>