<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Forum More Information</title>
	<?php include_once('topscripts.php') ?>
</head>
<body>
	
	<div class="wrapper">	

		<?php include_once('header.php') ?>	

		<main>
			<div class="main-section">
				<div class="row">
					<div class="">
						<div class="row">
							<div class="col-lg-3">
								<div class="posts-section">
										<div class="post-bar">
											<h3 style="margin-bottom: 10px;font-weight: 600">Forum Creator</h3>
											<div class="row col-md-12">
												<div class="col-md-12">
													<a href="<?php echo site_url('Profile/index/'.$pInfo[0]->uid); ?>" style="color: #e83e8c">
														<img src="<?php echo base_url('resources/shared/images/'.$pInfo[0]->ProfileImage) ?>" style="height: 100px;width: 100px;border-radius: 0%">
													</a>
												</div>
												<div class="col-md-12">
													<h4>Username : </h4><a href="<?php echo site_url('Profile/index/'.$pInfo[0]->uid); ?>" style="color: #e83e8c"><code style="font-size: 1.5em"><?= $pInfo[0]->Username ?></code></a><br><br>
													<h4>Email : </h4><code style="font-size: 1em"><?= $pInfo[0]->Email ?></code><br>
												</div>
											</div>
										</div><!--posts-section end-->
									</div>
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="posts-section">
										<div class="post-bar">
											<div class="post_topbar col-md-12">
												<img src="<?= base_url('resources/shared/images/'.$pInfo[0]->PostImage) ?>" alt="" height="300px" style="width: 100%;align-self: center;">
											</div>
											<div class="job_descp">
												<h3 style="margin-top: 30px;font-size: 2em;text-align: center;color: orange"><?= $pInfo[0]->tlt ?></h3>
											</div>
											<div class="job_descp">
												Description:--
												<h3 style="margin-top: 30px;font-size: 25px;text-align: center;color: red"><?= $pInfo[0]->desc ?></h3>
											</div>
										</div>
									</div>
									
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="posts-section">
										<div class="post-bar">
											<h3 style="margin-bottom: 10px;font-weight: 600">Community Info</h3>
											<div class="row col-md-12">
												<div class="col-md-12">
													<img src="<?php echo base_url('resources/shared/images/'.$pInfo[0]->CoverImage) ?>">
												</div>
												<div class="col-md-12">
													<h4>Community : </h4><p style="color: #e83e8c"><code style="font-size: 1em"><?= $pInfo[0]->Title ?></code></p><br><br>
													
												</div>
												<div class="col-md-12">
													<h4>Description : </h4><code style="font-size: 1em"><?= $pInfo[0]->Description ?></code><br><br>
												</div>
											</div>
										</div><!--posts-section end-->
									</div>
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>

		<?php include_once('footer.php') ?>
				

	</div><!--theme-layout end-->



<?php include_once('bottomscripts.php') ?>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Mar 2020 08:07:56 GMT -->
</html>