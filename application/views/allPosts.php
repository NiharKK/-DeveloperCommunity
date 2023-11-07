<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Forum</title>
	<?php include_once('topscripts.php') ?>
</head>
<body>
	<div class="wrapper">	

		<?php include_once('header.php') ?>
				
		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-12">
								<div class="main-ws-sec">
									<div class="">
										<div class="row">
											
										
										<?php
											foreach ($Posts as $p) {
										?>
												<div class="post-bar col-lg-12" style="margin-right:10px">
													<div class="post_topbar col-md-12 row">
														<div class="col-md-6">
															<img src="<?php echo base_url('resources/shared/images/'.$p->PostImage) ?>" alt=""  style="height: 200px;width:100%;align-self: center;">
														</div>

														<div class="col-md-6">
															<div class="col-lg-12">
																	<div class="posts-section">
																		<div class="post-bar">
																			<h3 style="margin-bottom: 10px;font-weight: 600">Forum Creator</h3>
														<div class="row col-md-12">
															<a href="<?php echo site_url('Profile/index/'.$p->uid); ?>" style="color: #e83e8c">
																<img src="<?php echo base_url('resources/shared/images/'.$p->ProfileImage) ?>" style="height: 40px;width: 40px;border-radius: 100%">
															</a>
																 <a href="<?php echo site_url('Profile/index/'.$p->uid); ?>" style="color: #e83e8c"><code style="font-size: 1.5em"><?= $p->Username ?></code></a><br><br>
														</div>
																		</div><!--posts-section end-->
																	</div>
															</div>

															<div class="col-lg-12">
																<div class="posts-section">
																	<div class="post-bar">
																		<h3 style="margin-bottom: 10px;font-weight: 600">Community</h3>
																		<div class="row col-md-12">
																				<img src="<?php echo base_url('resources/shared/images/'.$p->CoverImage) ?>" style="height: 40px;width: 40px;border-radius: 100%">

																				<p style="color: #e83e8c"><code style="font-size: 1em"><?= $p->Title ?></code></p>
																				
																		</div>
																	</div><!--posts-section end-->
																	</div>
																</div>
															</div>
														</div>
													<div class="job_descp">
														<h3 style="margin-top: 30px;font-size: 2em;text-align: center;"><?= $p->Title ?></h3>
														<p style="margin-left: 50px"><?= $p->Description ?></p>
														<a href="<?= site_url('Post/loadPostInfo/'.$p->forumid) ?>" class="btn btn-info" style="float: right;margin-bottom: 5px">Go To Forum</a>
													</div>
												</div>
										<?php
											}
										?>
										</div>
									</div><!--posts-section end-->
								</div><!--main-ws-sec end-->
							</div>
							
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Add Post</h3>
				<div class="post-project-fields">
					<form method="post" enctype="multipart/form-data" action="<?php echo site_url('User/Post/addPost/'.$clgid)?>">
						<div class="row">
							<div class="col-lg-12">
								<input name="txtTitle" class="form-control" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<textarea class="form-control" name="txtDesc" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<input type="file" name="txtImage" placeholder="Upload Image">
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="Send">Post</button></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div>
		
		<?php include_once("footer.php"); ?>		

	</div><!--theme-layout end-->



<?php include_once('bottomscripts.php') ?>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Mar 2020 08:07:56 GMT -->
</html>