<!DOCTYPE html>
<html>
<head>
	<title>Article More Information</title>
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
									
											<div class="posts-section">
												<div class="post-bar">
													<div class="post_topbar">
														<p style="font-size: 40px;text-align: center;color: blue;">

														</p>
													</div>
													<div class="job_descp">
														<br>
														<br>
													</div>
													<div class="job_descp">
														<img src="<?php echo base_url('resources/shared/images/'.$Article[0]->FeatureImage)?>" alt="" height="470px" width="470px">
														<p style="font-size: 20px;text-align: left;color: red;">
															Title:
														</p>
														<p style="font-size: 20px;text-align: left;color: blue;">
															<?php echo $Article[0]->Title; ?>		
														</p>
														
														<p style="text-align: right;">
															
														</p>
														<ul class="skill-tags">
															<p style="color: purple;font-size: 20px">
																Description:
															</p>
															<p style="color: blue;font-size: 20px">
																<?php
																	echo $Article[0]->Description;
																?>
															</p>
														</ul>
													</div>
													<div class="job-status-bar">
														<ul class="like-com">
															<?php
																foreach ($ArticleImages as $AI) 
																{
															?>
																	<li>
																		<img src="<?php echo base_url('resources/shared/images/'.$AI->ImageURL)?>" >
																	</li>
																	<?php
																		if ($Article[0]->UserId==$_SESSION['uid']) 
																		{
																	?>
																		<li>
																			<a href="<?php echo site_url('Article/loadEditImage/'.$AI->ArticleId."/".$AI->ImageURL); ?>" class="btn btn-danger">
																				Update
																			</a>
																		</li>
																	<?php
																		}
																	?>	
															<?php
																}
															?>
															
														</ul>
													</div>
													<div class="job-status-bar">
														<ul class="like-com">
															<li>	
																<a href="">
																	<i class="fas fa-heart">
																	</i> Like
																</a>
																<img src="<?php echo base_url('resources/user/')?>images/liked-img.png" alt="">
																<span><?php echo count($Likes);?></span>
															</li> 
															<br>
															<br>
															<br>
															<br>
															<?php
																if ($likeStatus=="No")
																{
															?>
																<a href="<?php echo site_url('Article/Like/'.$Article[0]->ArticleId); ?>">
																	<i class="fas fa-heart">
																	</i> Like
																</a>

															<?php
																}
																else
																{
															?>
																<a href="<?php echo site_url('Article/Unlike/'.$Article[0]->ArticleId); ?>">
																	<i class="fas fa-heart" style="color: red">
																	</i> Like
																</a>
															<?php		
																}
															?>
														</ul>
														
													</div>
														<div class="like-com">

														</div>
														
													</div><!--post-bar end-->
												
											</div><!--posts-section end-->

								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3 pd-right-none no-pd">
								<div class="right-sidebar">
									<div class="widget widget-about">
										<img src="<?php echo base_url()?>resources/user/images/resources/Community.jpg" alt="" height="200px" width="220px">										<h3>Community System</h3>
										<span>Only For Educational Purpose</span>	
									</div><!--widget-about end-->
									<div class="widget suggestions full-width">
										<div class="sd-title">
											<h3>People Who Like this Post</h3>
											<i class="la la-ellipsis-v"></i>
										</div><!--sd-title end-->
										<div class="suggestions-list">
											<div class="suggestion-usd">
												<?php
													foreach ($Likes as $l) 
													{
												?>		
														<a href="<?php echo site_url('Profile/index/'.$l->UserId); ?>">
															<img src="<?php echo base_url('resources/shared/images/'.$l->ProfileImage)?>" alt="">
														</a>
														<div class="sgt-text">
															<a href="<?php echo site_url('Profile/index/'.$l->UserId); ?>">
																<h4><?php echo $l->Username;?></h4>
															</a>
														</div>
												<?php
													}
												?>
											</div>
											
										</div><!--suggestions-list end-->
									</div>
									
									<?php
										if ($Article[0]->UserId==$_SESSION['uid']) 
										{
									?>


											<div class="widget suggestions full-width">
												<div class="sd-title">
													<h3>Add Another Images</h3>
													<i class="la la-ellipsis-v"></i>
												</div><!--sd-title end-->
												<div class="suggestions-list">
													<div class="suggestion-usd">
														<a href="<?php echo site_url('Article/loadAddImage/'.$Article[0]->ArticleId); ?>" class="btn btn-danger">
															Add Image
														</a>
													</div>
													
												</div><!--suggestions-list end-->
											</div>
									<?php
										}
									?>
								</div><!--right-sidebar end-->
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