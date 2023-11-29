<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Forum More Information</title>
	<?php include_once('topscripts.php') ?>
</head>


<body>
	
	<div class="wrapper">	

		<header>
			<?php include_once('header.php') ?>
		</header><!--header end-->		

		<main>
			<div class="main-section">
				<div class="row">
					<div class="">
						<div class="row">
							<div class="col-lg-3">
								<div class="posts-section">
										<div class="post-bar">
											<h3 style="margin-bottom: 10px;font-weight: 600">Forum Creater</h3>
											<div class="row col-md-12">
												<div class="col-md-12">
													<a href="<?php echo site_url('Profile/index/'.$pInfo[0]->uid); ?>">
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
												<h3 style="margin-top: 30px;font-size: 2em;text-align: center;"><?= $pInfo[0]->Title ?></h3>
											</div>
											
										</div>
									</div>
									
									<div class="posts-section">
										<div class="post-bar">
											<h3 style="margin-bottom: 10px;color: purple;font-weight: 600px">Message</h3>
											<span style="color: blue;">
												<?php echo $Msg[0]->Messages; ?>		
											</span>
											<form method="post" action="">
												<div class="row col-md-12">
													<!-- <textarea name="txtComment" class="form-control col-md-8"></textarea>
													<div class="col-md-1"></div>
													<input value="Post" type="submit" class="col-md-3 form-control btn btn-info"> -->
												</div>
											</form>
										</div><!--posts-section end-->
									</div>
									
									
									<div class="filter-secs">
										<div class="row" style="padding: 20px">
											<!-- <div style="margin: 0px 10px 0px 20px; padding: 0px 10px 0px 5px" class="col-md-3">
												<h3 style="font-weight: 600">Likes <label style="color: red;font-weight: 600"><?= count($likeCount) ?></label></h3>
												<hr style="height: 1px;background-color: black">
												<?php
													foreach ($plInfo as $key) {
												?>
													<div class="row">
														<div class="col-md-5">
															<img src="<?= base_url() ?>resources/user/images/user/<?= $key->ProfileImage ?>" style="border-radius: 50%" height="50px" width="50px" >
														</div>
														<div class="col-md-7">
															<h5 style="margin:20% 0 0 0;"><code><a href="<?=site_url('User/Profile/index/'.$key->UserId)?>"><?= $key->Username ?></a></code></h5>
														</div>
													</div>
													<hr style="height: 1px">
												<?php
													 } 
												?>
											</div> -->
											<div style="margin: 0px 20px 0px 10px; padding: 0px 5px 0px 10px" class="col-md-12">
												<h3 style="font-weight: 600;color: green;"><i class="fa fa-thumbs-up fa-3x" style="color: red"></i> <label style="color: red;font-weight: 600"></label></h3>
												<hr style="height: 1px;background-color:  black">
												<style type="text/css">
													.views-main{
														margin: 10px;
														margin-top: 5px;
														margin-top: 5px;
														border-bottom: 0.2em;
														border-bottom-style:solid;
														border-bottom-color:#e5e5e5; 
													}

													.view-header{
													}

													.view-body{
														padding: 0.8em;
													}
													.view-image-div{

													}
													.view-username-div{
														padding: 10px;
														margin-left: 30px;
													}
													.view-comment{
														padding-left: 1.2em;
														margin-left: 35px;
													}
													.view-image{
														height: 40px;
														width: 40px;
														border-radius: 100%;
													}
													.view-username{
														font-size: 1.2em;
														margin-left: 10px;
														font-weight: 5000;
													}
												</style>
												
												<div>
													<?php
														foreach ($Likes as $l) 
														{
													?>
														<div class="post-bar">
															<a href="<?php echo site_url('Profile/index/'.$l->uid); ?>">
																<img src="<?php echo base_url('resources/shared/images/'.$l->ProfileImage);?>" height="100px" width="100px">
															</a>
															<a href="<?php echo site_url('Profile/index/'.$l->uid); ?>">
																<code>
																	<?php
																		echo $l->Username;
																	?>
																</code>
															</a>
														</div>	
													<?php		
														}
													?>
												</div>

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
													<h4>Community : </h4><a href="" style="color: #e83e8c"><code style="font-size: 1em"><?= $pInfo[0]->Title ?></code></a><br><br>
													
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