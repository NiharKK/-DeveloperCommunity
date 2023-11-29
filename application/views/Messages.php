<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Messages of Community</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/line-awesome-font-awesome.min.css">
	<link href="<?php echo base_url('resources/user/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/responsive.css">
</head>


<body oncontextmenu="return false;">	

	<div class="wrapper">		

		<?php include_once("header.php"); ?>

		<section class="messages-page">
			<div class="container">
				<div class="messages-sec">
					<div class="row">
						<div class="col-lg-4 col-md-12 no-pdd">
							<div class="msgs-list">
								<div class="msg-title">
									<h3>Messages</h3>
									<ul>
										<li><a href="" title=""><i class="fa fa-cog"></i></a></li>
										<li><a href="" title=""><i class="fa fa-ellipsis-v"></i></a></li>
									</ul>
								</div><!--msg-title end-->
								<div class="messages-list">
									<ul>
										<?php
											foreach ($Cominfo as $c) 
											{
										?>
												<li class="active">
													<div class="usr-msg-details">
														<div class="usr-ms-img">
															<img src="<?php echo base_url('resources/shared/images/'.$c->CoverImage)?>" alt="">
															<span class="msg-status"></span>
														</div>
														<div class="usr-mg-info">
															<h3><?php echo $c->Title?></h3>
															<p><?php echo $c->CategoryName ?></p>
														</div><!--usr-mg-info end-->
														<span class="posted_time">1:55 PM</span>
														<span class="msg-notifc">1</span>
													</div><!--usr-msg-details end-->
												</li>
										<?php		
											}
										?>
										<?php
											foreach ($Com as $c) 
											{
										?>
												<li class="active">
													<div class="usr-msg-details">
														<div class="usr-ms-img">
															<img src="<?php echo base_url('resources/shared/images/'.$c->CoverImage)?>" alt="">
															<span class="msg-status"></span>
														</div>
														<div class="usr-mg-info">
															<h3><?php echo $c->Title?></h3>
															<p><?php echo $c->CategoryName ?></p>
														</div><!--usr-mg-info end-->
														<span class="posted_time">1:55 PM</span>
														<span class="msg-notifc">1</span>
													</div><!--usr-msg-details end-->
												</li>
										<?php		
											}
										?>
									</ul>
								</div><!--messages-list end-->
							</div><!--msgs-list end-->
						</div>
						<div class="col-lg-8 col-md-12 pd-right-none pd-left-none">
							<div class="main-conversation-box">
								<div class="message-bar-head">
									<div class="usr-msg-details">
										<div class="usr-ms-img">
											<img src="images/resources/m-img1.png" alt="">
										</div>
										<div class="usr-mg-info">
											<h3><?php echo $Com[0]->Username; ?></h3>
											<p>Online</p>
										</div><!--usr-mg-info end-->
									</div>
									<a href="" title=""><i class="fa fa-ellipsis-v"></i></a>
								</div><!--message-bar-head end-->
								<div class="messages-line">
									<div class="main-message-box">
										<div class="messg-usr-img">
											<img src="images/resources/m-img1.png" alt="">
										</div><!--messg-usr-img end-->
										<div class="message-dt">
											<div class="message-inner-dt img-bx">
												<img src="images/resources/mt-img1.png" alt="">
												<img src="images/resources/mt-img2.png" alt="">
												<img src="images/resources/mt-img3.png" alt="">
											</div><!--message-inner-dt end-->
											<span>Sat, Aug 23, 1:08 PM</span>
										</div><!--message-dt end-->
									</div><!--main-message-box end-->
									<div class="main-message-box ta-right">
										<div class="message-dt">
											<div class="message-inner-dt">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
											</div><!--message-inner-dt end-->
											<span>Sat, Aug 23, 1:08 PM</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="images/resources/m-img2.png" alt="">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box st3">
										<div class="message-dt st3">
											<div class="message-inner-dt">
												<p>Cras ultricies ligula.<img src="images/smley.png" alt=""></p>
											</div><!--message-inner-dt end-->
											<span>5 minutes ago</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="images/resources/m-img1.png" alt="">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box ta-right">
										<div class="message-dt">
											<div class="message-inner-dt">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
											</div><!--message-inner-dt end-->
											<span>Sat, Aug 23, 1:08 PM</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="images/resources/m-img2.png" alt="">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box st3">
										<div class="message-dt st3">
											<div class="message-inner-dt">
												<p>Lorem ipsum dolor sit amet</p>
											</div><!--message-inner-dt end-->
											<span>2 minutes ago</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="images/resources/m-img1.png" alt="">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box ta-right">
										<div class="message-dt">
											<div class="message-inner-dt">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
											</div><!--message-inner-dt end-->
											<span>Sat, Aug 23, 1:08 PM</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="images/resources/m-img2.png" alt="">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
									<div class="main-message-box st3">
										<div class="message-dt st3">
											<div class="message-inner-dt">
												<p>....</p>
											</div><!--message-inner-dt end-->
											<span>Typing...</span>
										</div><!--message-dt end-->
										<div class="messg-usr-img">
											<img src="images/resources/m-img1.png" alt="">
										</div><!--messg-usr-img end-->
									</div><!--main-message-box end-->
								</div><!--messages-line end-->
								<div class="message-send-area">
									<form>
										<div class="mf-field">
											<input type="text" name="message" placeholder="Type a message here">
											<button type="submit">Send</button>
										</div>
										<ul>
											<li><a href="" title=""><i class="fa fa-smile-o"></i></a></li>
											<li><a href="" title=""><i class="fa fa-camera"></i></a></li>
											<li><a href="" title=""><i class="fa fa-paperclip"></i></a></li>
										</ul>
									</form>
								</div><!--message-send-area end-->
							</div><!--main-conversation-box end-->
						</div>
					</div>
				</div><!--messages-sec end-->
			</div>
		</section><!--messages-page end-->
		<?php include_once("footer.php"); ?>
	</div><!--theme-layout end-->



<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/scrollbar.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/script.js"></script>

</body>
</html>