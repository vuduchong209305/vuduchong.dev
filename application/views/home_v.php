<!DOCTYPE html>
<html>
<head>
	<title>Vũ Đức Hồng</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="vuduchong" />

	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>

	<link rel="shortcut icon" type="image/png" href="/assets/index/img/favicon.png"/>

	<link href="/assets/index/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="/assets/index/css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="/assets/index/css/swipebox.css" rel="stylesheet">
	<link href="/assets/index/css/font-awesome.min.css" rel="stylesheet">
	<link href="/assets/index/css/animate.css" rel="stylesheet">
	<link href="/assets/index/css/custom.css" rel="stylesheet">

	<script type="text/javascript" src="/assets/index/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="/assets/index/js/easing.js"></script>
	<script type="text/javascript" src="/assets/index/js/wow.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
			new WOW().init();
		});
	</script>
	<!--//end-smooth-scrolling-->

</head>
<body>
	<!--banner-->
	<section class="section1">
		<div id="home" class="banner" style="background: url('<?= $list_info->background ?>') no-repeat 0px">
			<div class="banner-info">
				<div class="container">
					<div class="col-md-4 header-left">
						<img src="<?php echo $list_info->avatar ?>" alt=""/>
					</div>
					<div class="col-md-8 header-right">
						<h2>Hello</h2>
						<h1>I'm <?php echo $list_info->fullname ?></h1>
						<h6><?php echo $list_info->job ?></h6>
						<ul class="address">
							<li>
								<ul class="address-text">
									<li><b>D.O.B</b></li>
									<li><?php echo $list_info->birthday ?></li>
								</ul>
							</li>
							<li>
								<ul class="address-text">
									<li><b>PHONE </b></li>
									<li><?php echo $list_info->phone ?></li>
								</ul>
							</li>
							<li>
								<ul class="address-text">
									<li><b>ADDRESS </b></li>
									<li><?php echo $list_info->address ?></li>
								</ul>
							</li>
							<li>
								<ul class="address-text">
									<li><b>E-MAIL </b></li>
									<li><a href="mailto:<?php echo $list_info->email ?>"> <?php echo $list_info->email ?></a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>

		<!--//banner-->
		<!--top-nav-->

		<div class="top-nav wow">
			<div class="container">
				<div class="navbar-header logo">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						Menu
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="menu">
						<ul class="nav navbar">
							<li><a href="#about" class="scroll">Giới Thiệu</a></li>
							<li><a href="#work" class="scroll">Kinh Nghiệm</a></li>
							<li><a href="#education" class="scroll">Học Vấn</a></li>
							<li><a href="#skills" class="scroll">Kỹ Năng</a></li>
							<li><a href="#projects" class="scroll">Dự Án</a></li>
							<li><a href="#contact" class="scroll">Liên Hệ</a></li>
						</ul>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//top-nav-->
	<!--about-->
	<section class="section2">
		<div id="about" class="about">
			<div class="container">
				<h3 class="title"> Giới Thiệu </h3>
				<div class="col-md-8 about-left wow bounceInLeft" data-wow-duration="2s">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet sem sit amet dolor luctus pellentesque. Pellentesque eleifend tellus at interdum elementum. Nam egestas molestie elit. Vivamus sed accumsan quam, a mollis magna. Nam aliquet eros eget sapien consequat tincidunt at vel nibh. Duis ut turpis mi. Duis nec scelerisque urna, sit amet varius arcu. Aliquam aliquet sapien quis mauris semper suscipit. Maecenas pharetra dapibus posuere. Praesent odio sem, varius quis dolor vel, maximus dapibus mi. Pellentesque mattis mauris neque. Nam aliquam turpis ante, at cursus massa ullamcorper ut. Proin id diam id nisi sagittis pellentesque sed sit amet eros.  
					In porttitor tempus nulla, a porta purus commodo sed. Praesent hendrerit nisi nunc, ut porttitor justo pellentesque et ac gravida sem mattis. Donec ornare justo nec</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet sem sit amet dolor luctus pellentesque Nam egestas molestie elit. Vivamus sed accumsan quam, a mollis magna. Nam aliquet eros eget sapien consequat</p>
				</div>
				<div class="col-md-4 about-right wow bounceInRight" data-wow-duration="2s">
					<ul>
						<h5>Awards</h5>
						<li><span class="glyphicon glyphicon-menu-right"></span> Lorem ipsum dolor sit amet cingelit</li>
						<li><span class="glyphicon glyphicon-menu-right"></span> Curabitur id metus rutrum convallis</li>
						<li><span class="glyphicon glyphicon-menu-right"></span> Morbi dictum velit vitae porttitor</li>
						<li><span class="glyphicon glyphicon-menu-right"></span> Fusce at metus id justo ullamcorper</li>
						<li><span class="glyphicon glyphicon-menu-right"></span> Aliquam ac nisl id justo malesuada </li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</section>
	
	<!--//about-->
	<!--work-experience-->
	<section class="section3">
		<div id="work" class="work">
			<div class="container">
				<h3 class="title wow fadeInDownBig">Kinh Nghiệm</h3>
				<div class="work-info"> 
					<div class="col-md-6 work-left"> 
						<h4 class="wow fadeInLeft">2014 - 2016 </h4>
					</div>
					<div class="col-md-6 work-right"> 
						<h5 class="wow fadeInRight"><span class="glyphicon glyphicon-briefcase"> </span> Company Name</h5>
						<p class="wow fadeInRight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="work-info"> 
					<div class="col-md-6 work-right work-right2"> 
						<h4 class="wow fadeInRight">2013 - 2014 </h4>
					</div>
					<div class="col-md-6 work-left work-left2"> 
						<h5 class="wow fadeInLeft"> Company Name <span class="glyphicon glyphicon-briefcase"> </span></h5>
						<p class="wow fadeInLeft">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="work-info"> 
					<div class="col-md-6 work-left"> 
						<h4 class="wow fadeInLeft">2012 - 2013 </h4>
					</div>
					<div class="col-md-6 work-right"> 
						<h5 class="wow fadeInRight"><span class="glyphicon glyphicon-briefcase"> </span> Company Name</h5>
						<p class="wow fadeInRight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="work-info"> 
					<div class="col-md-6 work-right work-right2"> 
						<h4 class="wow fadeInRight">2010 - 2012 </h4>
					</div>
					<div class="col-md-6 work-left work-left2"> 
						<h5 class="wow fadeInLeft"> Company Name <span class="glyphicon glyphicon-briefcase"></span> </h5>
						<p class="wow fadeInLeft">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</section>
	
	<!--//work-experience-->
	<!--education-->
	<section class="section4">
		<div id="education" class="education">
			<div class="container">
				<h3 class="title wow fadeInDownBig">Học Vấn</h3>
				<div class="work-info"> 
					<div class="col-md-6 work-left"> 
						<h4 class="wow rotateInUpLeft" data-wow-duration="2s">Master Degree - 2010</h4>
					</div>
					<div class="col-md-6 work-right"> 
						<h5 class="wow rotateInUpRight" data-wow-duration="2s"><span class="glyphicon glyphicon-education"> </span> University Name</h5>
						<p class="wow rotateInUpRight" data-wow-duration="2s">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="work-info"> 
					<div class="col-md-6 work-right work-right2"> 
						<h4 class="wow rotateInUpRight" data-wow-duration="2s">Diploma in Design - 2010</h4>
					</div>
					<div class="col-md-6 work-left work-left2"> 
						<h5 class="wow rotateInUpLeft" data-wow-duration="2s"> University Name <span class="glyphicon glyphicon-education"></span></h5>
						<p class="wow rotateInUpLeft" data-wow-duration="2s">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="work-info"> 
					<div class="col-md-6 work-left"> 
						<h4 class="wow rotateInUpLeft" data-wow-duration="2s">Web Design - 2008</h4>
					</div>
					<div class="col-md-6 work-right"> 
						<h5 class="wow rotateInUpRight" data-wow-duration="2s"><span class="glyphicon glyphicon-education"> </span> University Name</h5>
						<p class="wow rotateInUpRight" data-wow-duration="2s">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</section>
	
	<!--//education-->
	<!--skills-->
	<section class="section5">
		<div id="skills" class="skills">
			<div class="container">
				<h3 class="title wow fadeInDownBig">Kỹ Năng</h3>
				<div class="skills-info">
					<div class="col-md-6 bar-grids wow jackInTheBox" data-wow-duration="1s" data-wow-delay=".5s">
						<h6>WEB DESIGN  <span> 80% </span></h6>
						<div class="progress">
							<div class="progress-bar progress-bar-striped active" style="width: 80%"></div>
						</div>
						<h6>UI DESIGN & DEVELOPER <span> 100% </span></h6>
						<div class="progress">
							<div class="progress-bar progress-bar-striped active" style="width: 100%"></div>
						</div>
						<h6>HTML/CSS<span> 100% </span></h6>
						<div class="progress">
							<div class="progress-bar progress-bar-striped active" style="width: 100%"></div>
						</div>
						<h6>PHOTOSHOP <span> 90% </span></h6>
						<div class="progress">
							<div class="progress-bar progress-bar-striped active" style="width: 90%"></div>
						</div>
					</div>
					<div class="col-md-6 bar-grids wow jackInTheBox" data-wow-duration="1s" data-wow-delay=".5s">
						<h6>PROJECT MANAGEMENT <span> 100% </span></h6>
						<div class="progress">
							<div class="progress-bar progress-bar-striped active" style="width: 100%"></div>
						</div>
						<h6>SOCIAL MEDIA MARKETING<span> 100% </span></h6>
						<div class="progress">
							<div class="progress-bar progress-bar-striped active" style="width: 100%"></div>
						</div>
						<h6>UX DEVELOPER<span> 80% </span></h6>
						<div class="progress">
							<div class="progress-bar progress-bar-striped active" style="width: 80%"></div>
						</div>
						<h6>PHP DESIGN<span> 90% </span></h6>
						<div class="progress">
							<div class="progress-bar progress-bar-striped active" style="width: 90%"></div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</section>
	
	<!--//education-->
	<!--portfolio-->
	<section class="section6">
		<div id="projects" class="portfolio">
			<div class="container">
				<h3 class="title wow fadeInDownBig">Dự Án</h3>
				<div class="sap_tabs">			
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<ul class="resp-tabs-list wow bounceIn">
							<li class="resp-tab-item"><span>All</span></li>
							<li class="resp-tab-item"><span>Html</span></li>
							<li class="resp-tab-item"><span>Photoshop</span></li>
							<li class="resp-tab-item"><span>Wordpress</span></li>					
						</ul>	
						<div class="clearfix"> </div>	
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content">
								<div class="tab_img">
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g1.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid effect-sarah">
											<a href="/assets/index/img/g2.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g2.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g3.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g4.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g4.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g5.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g6.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g6.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g7.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g7.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g8.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g8.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g9.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g9.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="tab-1 resp-tab-content">
								<div class="tab_img">
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g5.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g6.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g6.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g7.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g7.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="tab-1 resp-tab-content">
								<div class="tab_img">
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g3.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g1.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g9.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g9.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="tab-1 resp-tab-content">
								<div class="tab_img">
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g2.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g2.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g4.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g4.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="col-md-4 portfolio-grids wow flipInY" data-wow-duration="1s" data-wow-delay=".5s">
										<div class="grid">
											<a href="/assets/index/img/g8.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
												<img src="/assets/index/img/g8.jpg" alt="" class="img-responsive" />
												<div class="figcaption">
													<h3>My<span> Project</span></h3>
													<p>Sarah likes to watch clouds. She's quite depressed.</p>
												</div>
											</a>	
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--ResponsiveTabs-->
				<script src="/assets/index/js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
					});		
				</script>
				<!--//ResponsiveTabs-->
				<!-- swipe box js -->
				<script src="/assets/index/js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
				<!-- //swipe box js -->
			</div>
		</div>
	</section>
	
	<!--//portfolio-->
	<!--contact -->
	<section class="section7">
		<div class="welcome contact" id="contact">
			<div class="container">
				<h3 class="title wow rubberBand">Liên Hệ</h3>
				<div class="contact-row">
					<div class="col-md-6 contact-left wow bounceInUp" data-wow-duration="1s" data-wow-delay=".5s">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.444926360581!2d105.77085131430857!3d21.05488469226326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454d0b3f67e7b%3A0xd894b40b112ea40e!2zUGhhbiBCw6EgVsOgbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1507304140696" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-6 contact-right wow bounceInDown" data-wow-duration="1s" data-wow-delay=".5s">
						<div class="contact-form">
							<form action="#" method="post">
								<input type="text" name="name" placeholder="Name" required="">
								<input class="email" name="email" type="email" placeholder="Email" required="">
								<input class="phone" name="phone" type="text" placeholder="Phone" required="">
								<textarea name="Message" placeholder="Message" required=""></textarea>
								<input type="submit" value="GỬI" >
							</form>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>
	
	<!--//contact -->

	<ul class="list-group navbar-fixed-top">
		<?php foreach($list_social as $key => $val) : ?>
			<li>
				<a href="<?= $val['link'] ?>" target="_blank">
					<img src="<?= $val['image'] ?>" alt="<?= $val['name'] ?>" title="<?= $val['name'] ?>" class="icon">
				</a>
			</li>
		<?php endforeach; ?>
	</ul>

	<!--footer-->
	<div class="footer">
		<div class="container">
			<p>© 2017 Vu Duc Hong | All rights reserved</p>
		</div>
	</div>
	<!--//footer-->


	<style>

	.scroll-btn {
		position: fixed;
		line-height: 50px;
		width: 50px;
		height: 50px;
		right: 1%;
		z-index: 1000;
		display: inline;
		cursor: pointer;
	}

	.scrollToTop {
		bottom: 60px;
		display: none;
	}

	.scrollToBottom {
		bottom: 20px;
		
	}
</style>

<div id="arrow">
	<span class="scrollToTop scroll-btn">
		<img src="/assets/index/img/move-up.png" alt="">
	</span>
	<span class="scrollToBottom scroll-btn">
		<img src="/assets/index/img/move-down.png" alt="">
	</span>
</div>
<!--smooth-scrolling-of-move-up-->
<script type="text/javascript">
	$(document).ready(function() {

		// Ẩn/Hiện mũi tên lên/xuống
		$(window).scroll(function() {
			if ($(this).scrollTop()) { 
				$('.scrollToTop').fadeIn();
			} else {
				$('.scrollToTop').fadeOut();
			}

			var height = $(document).height();
			var scrollBottom = $(window).scrollTop() + $(window).height();

			if(height - scrollBottom < 20){
				$('.scrollToBottom').fadeOut();
			} else {
				$('.scrollToBottom').fadeIn();
			}
		});

		// Back to top
		$('.scrollToTop').click(function() {
			$("html, body").animate({scrollTop: 0}, 1000);
		});

		// $('.scrollToBottom').click(function () {
		// 	$('html, body').animate({scrollTop:$(document).height()}, 1000);
		// });


		// Next section
		$('.scrollToBottom').click(function() {
		    var target;
		       $("section").each(function(i, element) {
		         target = $(element).offset().top;
		         if (target - 10 > $(document).scrollTop()) {
		           return false; // break
		         }
		       });
		       $("html, body").animate({
		         scrollTop: target
		    }, 700);
		});


	});
</script>
<script src="/assets/index/js/bootstrap.js"></script>
</body>
</html>