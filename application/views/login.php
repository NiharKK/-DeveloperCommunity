<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/line-awesome-font-awesome.min.css">
	<link href="<?php echo base_url('resources/user/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/responsive.css">
</head>


<body class="sign-in" oncontextmenu="return false;">
	

	<div class="wrapper">		

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
									<p style="text-shadow: 2px 2px #aad548;color: red;font-size: 30px">
										Online Community Management System
									</p>
									<br><br><br><br><br>
									<p><img src="<?php echo base_url()?>resources/user/images/resources/Community.jpg" alt=""></p>
									<p>Hello, Login Here In this Web-Site</p>
									<p>If you are new User then Register First</p>
								</div><!--cm-logo end-->	
								<img src="images/cm-main-img.png" alt="">			
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control">
									<!-- <li data-tab="tab-1" class="current"><a href="#" title="">Login</a></li> -->
									<!-- <li data-tab="tab-2">
										<a href="<?php echo site_url('User/loadAddUser')?>" title="" class="btn btn-danger">Register
										</a>
									</li> -->				
								</ul>			
								<div class="sign_in_sec current" id="tab-1">
									
									<h3>Login</h3>
									<form method="post" action="<?php echo site_url('User/validateLogin')?>">
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="txtUname" placeholder="Enter Username">
													<i class="la la-user"></i>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="txtPwd" placeholder="Enter Password">
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<div class="fgt-sec">
														<!-- <input type="checkbox" name="cc" id="c1"> -->
														<label for="c1">
															<span></span>
														</label>
														<!-- <small>Remember me</small> -->
													</div><!--fgt-sec end-->
													<!-- <a href="#" title="">Forgot Password? --></a>
												</div>
												<?php
													if (isset($loginErr)) 
												{
												?>
													<p style="color: red"><?php echo $loginErr;?></p>
												<?php
												}
												?>
											</div>
											<div class="col-lg-6 no-pdd">
												<button type="submit" class="btn btn-danger">Login</button>
											</div>
											
										</div>
									</form>
									<form method="post" action="<?php echo site_url('User/loadAddUser') ?>">
										<div class="col-lg-6 no-pdd">
												<button type="submit" class="btn btn-danger">Register</button>
											</div>
									</form>

									<!-- <div align="center" class="">
										<a href="<?php echo site_url('User/loadForgetPassword'); ?>">
											<u>Forgot Password</u>
										</a>
									</div> -->
									
									<div class="login-resources">
										
									</div><!--login-resources end-->

								</div><!--sign_in_sec end-->
										
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
			<?php include_once("footer.php");?>
		</div><!--sign-in-page end-->


	</div><!--theme-layout end-->



<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/script.js"></script>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 04:03:24 GMT -->
</html>