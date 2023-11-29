<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ask Questions</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/jquery.range.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/line-awesome-font-awesome.min.css">
	<link href="<?php echo base_url('resources/user/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/responsive.css">
</head>


<body oncontextmenu="return false;">
	
	<div class="wrapper">	

		<?php include_once("header.php"); ?>

		<!-- <div class="search-sec">
			<div class="container">
				<div class="search-box">
					<form>
						<input type="text" name="search" placeholder="Search keywords">
						<button type="submit">Search</button>
					</form>
				</div>>
			</div>
		</div> -->


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							
							<div class="col-lg-8">
								<div class="main-ws-sec">
									<div class="posts-section">
										<form method="post" action="<?php echo site_url('Community/addCommunityQuestion/'.$CommunityId); ?>">
												<div class="post-bar">
													<div class="post_topbar">
														<div class="usy-dt">
															<div class="usy-name">
																<h3>You can Ask Your Question Here</h3>
																<span></span>
															</div>
														</div>
														<div class="ed-opts">
															<a href="" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
															<ul class="ed-options">
																<li><a href="" title="">Edit Post</a></li>
															</ul>
														</div>
													</div>
													<div class="epi-sec">
														<ul class="descp">
															<input type="text" name="txtCID" hidden="" value="<?php echo $CommunityId ?>">
														</ul>
														<ul class="descp">
															<input type="text" name="txtUserid" hidden="" value="<?php echo $_SESSION['uid'] ?>">
														</ul>
														<ul class="descp">
															Title:
															<input type="text" name="txtTitle" placeholder="Enter Title" required="">
														</ul>
														
													</div>
													<div class="job_descp">
														<ul class="descp">
															Question:
															<input type="text" name="txtQuestion" placeholder="Enter Your Question" required="">
														</ul>
														<h3></h3>
														<ul class="job-dt">
															<li><span></span></li>
														</ul>
														<p style="color: orange;font-size: 20px;margin-left: 50px">
															
														</p>
														
													</div>
													<div class="job-status-bar">
														<ul class="like-com">
															<input type="submit" name="AddQuestion" class="btn btn-danger" value="Ask Question">
														</ul>
													</div>

												</div><!--post-bar end-->
										</form>
									</div><!--posts-section end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-4">
								<div class="right-sidebar">
									<div class="widget widget-about">
										<img src="<?php echo base_url()?>resources/user/images/resources/Community.jpg" alt="" height="200px" width="220px">
										<h3>Online Community Management System</h3>
										<span>Only for Educational Purpose</span>
										
									</div><!--widget-about end-->
									
								</div><!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>
		
		<?php include_once("footer.php"); ?>		

	</div><!--theme-layout end-->



<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/jquery.range-min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/script.js"></script>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 04:02:48 GMT -->
</html>