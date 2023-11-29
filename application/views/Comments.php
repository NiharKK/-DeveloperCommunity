<!DOCTYPE html>
<html>
<head>
	<title>Forum Post</title>
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
															<?php echo $Post[0]->Title; ?>

														</p>
													</div>
													<div class="job_descp">
														<br>
														<br>
													</div>
													<div class="job_descp">
														<img src="<?php echo base_url('resources/shared/images/'.$Post[0]->PostImage)?>" alt="" height="470px" width="470px">
														Description:
															<p style="font-size: 20px;text-align: left;color: blue;">
																<?php echo $Post[0]->Description; ?>		
															</p>
														
														<!-- <p style="text-align: right;">
															<?php echo $Post[0]->CreatedDt;?>
														</p> -->
														<ul class="skill-tags">
															
														</ul>
													</div>
													<div class="job-status-bar">
														<ul class="like-com">
															<!-- <li>
																
																<a href="<?php echo site_url("Community/loadLikes/".$Messages[0]->forumpostid."/".$Messages[0]->forumid);?>">
																	<i class="fas fa-heart">
																	</i> Like
																</a>
																<img src="<?php echo base_url('resources/user/')?>images/liked-img.png" alt="">
																<span><?php echo $Likes;?></span>
															</li>  -->
															<li>
																<a href="" class="com"><i class="fas fa-comment-alt"></i>Messages<br>
																</a>
															</li>
														</ul>
													
													</div>
														<div class="like-com">
															<?php
																foreach ($Messages as $m) 
																{
															?>		
															<ul>
																<li>
																<a href="<?php echo site_url("Profile/index/".$m->uid); ?>">
																	<p style="color: blue">
																		<img src="<?php echo base_url('resources/shared/images/'.$m->ProfileImage)?>" alt="" height="40px" width="40px">
																		<?php
																			echo $m->Messages;
																		?>
																	</p>
																</a>
																</li>
																<li>
																	<p style="color: red">
																		<a href="<?php echo site_url("Community/loadLikes/".$m->forumpostid."/".$m->forumid."/".$m->UserId);?>">
																		<i class="fas fa-heart">
																		</i> Like
																		</a>
																	</p>
																</li>	
															</ul>
															<?php		
																}
															?>
															<br>
															<br>
															<div class="post-comment">
											                    <form method="post" action="<?php echo site_url("Community/addMessage/".$Post[0]->forumid."/".$CommunityId); ?>">
											                      <input type="text" class="form-control" placeholder="Post a Message" name="txtMsg">
											                      <input type="submit" required="" value="Add Message" name="btnAdd" class="btn btn-primary">
											                    </form>

											                  </div>
														</div>
														
													</div><!--post-bar end-->
												
											</div><!--posts-section end-->

								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3 pd-right-none no-pd">
								<div class="right-sidebar">
									<div class="widget widget-about">
										<img src="<?php echo base_url()?>resources/user/images/resources/Community.jpg" alt="" height="200px" width="220px">
										<h3>Community System</h3>
										<span>Only For Educational Purpose</span>	
									</div><!--widget-about end-->
									
									
								</div><!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>




		<div class="post-popup pst-pj">
			<div class="post-project">
				<h3>Post a project</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-12">
								<div class="price-sec">
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
									<span>To</span>
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Post a job</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-6">
								<div class="price-br">
									<input type="text" name="price1" placeholder="Price">
									<i class="la la-dollar"></i>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="inp-field">
									<select>
										<option>Full Time</option>
										<option>Half time</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->



		
		<?php include_once("footer.php"); ?>

	</div><!--theme-layout end-->


<?php include_once("bottomscripts.php");?>

</body>
</html>