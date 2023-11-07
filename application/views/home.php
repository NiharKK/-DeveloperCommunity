<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<?php include_once("topscripts.php"); ?>
</head>

<body oncontextmenu="return false;">	

	<div class="wrapper">	
		<?php include_once("header.php");?>	

		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3 col-md-4 pd-left-none no-pd">
								<?php include_once("left-bar.php"); ?>
							</div>
							<div class="col-lg-6 col-md-8 no-pd">
								<div class="main-ws-sec">
									<p style="color: red;font-size: 20px;font-family: cursive;text-shadow: 2px 2px green;text-align: center;">
										Categories
									</p>
									<!-- <div class="post-topbar">
										<div class="user-picy">
											<img src="<?php echo base_url('resources/user/')?>images/resources/user-pic.png" alt="">
										</div>
										<div class="post-st">
											<ul>
												<li><a class="post_project" href="#" title="">Post a Project</a></li>
												<li><a class="post-jb active" href="#" title="">Post a Job</a></li>
											</ul>
										</div>
									</div> -->
									<?php
												foreach ($Cats as $c) 
												{
											?>
												<div class="posts-section">
													<div class="post-bar">

													<div class="epi-sec">
														<ul class="descp">
															<li>
																<p style="color: red;font-size: 20px;font-family: cursive;">
																	<?php
																		echo $c->CategoryName;
																	?>
																</p>
															</li>
															
														</ul>
														
													</div>
													<div class="job_descp">
														
													</div>
													<div class="job-status-bar">
														<ul class="like-com">
															<a href="<?php echo site_url('UserDemo/loadCommunityByCategoryId/'.$c->CategoryId); ?>" style="color: blue">
																<i class="fas fa-eye">
																	View More
																</i>
															</a>
														</ul>
													</div>
													</div><!--post-bar end-->
										
												</div><!--posts-section end-->
											<?php
												}
												?>
											
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3 pd-right-none no-pd">
								<?php include_once("right-bar.php") ?>
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>


		<?php include_once("footer.php"); ?>

	</div><!--theme-layout end-->


<?php include_once("bottomscripts.php");?>

</body>

</html>