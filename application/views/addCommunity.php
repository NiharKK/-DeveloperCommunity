<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Create Community</title>
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
	<?php include_once("header.php");?>

	<div class="wrapper">		

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
									<!-- <img src="images/cm-logo.png" alt=""> -->
									<p style="text-shadow: 2px 2px #aad548;color: red;font-size: 30px">
										Online Community Management System
									</p>
									<br><br><br><br><br>
									<p><img src="<?php echo base_url()?>resources/user/images/resources/Community.jpg" alt=""></p>
									<p style="color: blue">You can create your Community here</p>
									<p style="color: blue">When you create Community you will become Curator of that Community</p>
										
									<h1>
										<a href="<?php echo site_url('UserDemo')?>" style="margin: 150px" class="btn btn-danger">Back</a>
									</h1>
								</div><!--cm-logo end-->	
								<img src="images/cm-main-img.png" alt="">			
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control">
									<!-- <li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>	 -->			
									<!-- <li data-tab="tab-2"><a href="#" title="">Sign up</a></li> -->				
								</ul>			
								<div class="sign_in_sec current" id="tab-1">
									
									<div class="signup-tab">
										<!-- <i class="fa fa-long-arrow-left"></i> -->
										<!-- <h2>johndoe@example.com</h2> -->
										<ul>
											<!-- <li data-tab="tab-3" class="current"><a href="#" title="">User</a></li>
											<li data-tab="tab-4"><a href="#" title="">Company</a></li> -->
											<p style="color: red">Community Create Form</p>
										</ul>
									</div><!--signup-tab end-->	
									<div class="dff-tab current" id="tab-3">
										<form method="post" enctype="multipart/form-data" action="<?php echo site_url('Community/addCommunity')?>" >
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="txtTitle" placeholder="Ente Name of Community" required="">
														<i class="la la-group"></i>
													</div>
												</div>
												<!-- <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="txtStatus" placeholder="Enetr Status">
														<i class="la la-lock"></i>
													</div>
												</div> -->

												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="txtUsername" value="<?php echo $_SESSION['uname']?>" disabled>
														<i class="la la-user"></i>
													</div>
												</div>
	
												<!-- <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="date" name="Dateofcreate" >
														<i class="la la-timer"></i>
													</div>
												</div> -->

												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<select class="form-control" name="txtCity">
																<option value="-1">
																	Select City
																</option>
								                            <?php
								                              foreach ($cities as $c) 
								                              {
								                            ?>
								                                <option value="<?php echo $c->CityId; ?>"><?php echo $c->CityName; ?></option>
								                            <?php  
								                              }
								                            ?>
								                        </select>
														<i class="la la-home"></i>
														
													</div>
												</div>

												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="txtDesc" placeholder="Enter Description" required="">
														<i class="la la-table"></i>
													</div>
												</div>
												
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="txtAddress" placeholder="Enter Address" required="">
														<i class="la la-home"></i>
													</div>
												</div>

												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<select class="form-control" name="txtCategory">
																<option value="-1">
																	Select Category
																</option>
								                            <?php
								                              foreach ($cats as $ct) 
								                              {
								                            ?>
								                                <option value="<?php echo $ct->CategoryId; ?>"><?php echo $ct->CategoryName; ?></option>
								                            <?php  
								                              }
								                            ?>
								                        </select>
														<i class="la la-dropbox"></i>
														
													</div>
												</div>

												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="file" name="fup" title="Select Image">
														<i class="la la-image"></i>
													</div>
												</div>

												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="txtUsrid" value="<?php echo $_SESSION['uid']?>" hidden>
													</div>
												</div>

												<div class="col-lg-12 no-pdd">
													<button type="submit">Create</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
								
								</div><!--sign_in_sec end-->
								<div class="sign_in_sec" id="tab-2">
									
								</div>		
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
			
		</div><!--sign-in-page end-->

	</div><!--theme-layout end-->
		<?php include_once("footer.php");?>


<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/script.js"></script>
</body>
</html>