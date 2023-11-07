<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MeetUp Info</title>
	<?php include_once('topscripts.php') ?>
</head>


<body>	

	<div class="wrapper">
		
		<header>
			<?php include_once('header.php') ?>
		</header><!--header end-->	


		<section class="cover-sec">
			<img src="<?= base_url() ?>resources/user/images/resources/cover-img.jpg" alt="">
		</section><!--cover-sec end-->


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-8">
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<h3 style="font-size: 2em"><?php echo $mInfo->Topic ?></h3>
										<span style="margin-left: 10px;font-size: 0.8em"><img src="<?= base_url() ?>resources/user/images/clock.png" alt=""><?= $mInfo->CreatedDt ?></span><!--star-descp end-->
										<div class="tab-feed" style="margin-top: 40px">
											<ul>
												<li data-tab="feed-dd" class="active">
													<a href="#" title="">
														<img src="<?= base_url() ?>resources/user/images/ic2.png" alt="">
														<span>Info</span>
													</a>
												</li>
												<li data-tab="info-dd">
													<a href="#" title="">
														<img src="<?= base_url() ?>resources/user/images/ic1.png" alt="">
														<span>User Info</span>
													</a>
												</li>
												<li data-tab="clg-dd">
													<a href="#" title="">
														<img src="<?= base_url() ?>resources/user/images/ic3.png" alt="">
														<span>Community Info</span>
													</a>
												</li>												
											</ul>
										</div><!-- tab-feed end-->
									</div><!--user-tab-sec end-->
									<div class="product-feed-tab current" id="feed-dd">
										<div class="posts-section">
											<div class="post-bar">
												<div class="epi-sec">
													<ul class="descp">
														<li><b style="font-weight: 600">MeetUp Date </b><p><code> <?= $mInfo->MeetUpDate ?></code></p></li>
														<li><b style="font-weight: 600">Created Date</b> <p><code><?= $mInfo->CreatedDt ?></code></p></li>
														<li><b style="font-weight: 600">Timing</b> <p>From <code><?= $mInfo->TimingsFrom ?></code> To <code><?= $mInfo->TimingsTo ?></code></p></li>
														<li><b style="font-weight: 600">City </b><p><code> <?= $mInfo->CityName ?></code></p></li>
														<li><b style="font-weight: 600">Total Seats </b><p><code> <?= $mInfo->TotalSeats ?></code></p></li>
													</ul>
												</div>
												<div class="job_descp">
													<p>Description : <?= $mInfo->Description ?></p>
													<p>Community Description : <?= $mInfo->des ?></p>
													<p>Address : <?= $mInfo->Address ?></p>
												</div>
											</div>
										</div>
									</div>
									<div class="product-feed-tab" id="info-dd">
										<!-- <img src="<?php echo base_url('resources/shared/images/'.$mInfo->ProfileImage) ?>" height="150px" weight="150px" style="border-radius: 50%;margin: 0% 40% 40px 40%"> -->
										<div class="user-profile-ov">
											<a href="<?php echo site_url('Profile/index/'.$mInfo->UserId); ?>"><h3>Username : <code><?= $mInfo->Username ?></code> </h3></a>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov st2">
											<h3>Email : <code><?= $mInfo->Email ?></code> </h3>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Contact no : <code><?= $mInfo->MobileNo ?></code> </h3>
										</div><!--user-profile-ov end-->
									</div>
									<div class="product-feed-tab" id="clg-dd">
										<div class="user-profile-ov">
											<h3>Title : <code><?= $mInfo->Title ?></code> </h3>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov st2">
											<h3>Description : <code><?= $mInfo->des ?></code> </h3>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Address : <code><?= $mInfo->add ?></code> </h3>
										</div><!--user-profile-ov end-->
									</div>
									<!--product-feed-tab end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user_pro_status" style="margin-top: 20px">
											<?php
												if (isset($Msg)) 
												{
											?>
													<ul class="flw-hr" style="margin-top: 20px">
														<li><a href="<?php echo site_url('Meetup/addMeetUpRequest/'.$mInfo->MeetUpId); ?>" title="" class="flww"><i class="la la-plus"></i>Request For Join</a></li>
													</ul>

											<?php
												}
											?>
											
											
											<ul class="flw-status">
												<li>
													<span>Memebers</span>
													<b><?= count($members) ?></b>
												</li>
											</ul>
										</div>
									</div><!--user_profile end-->
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>Members</h3>
										</div><!--sd-title end-->
										<div class="suggestions-list">
											<?php
												foreach ($members as $m) {
											?>
													<div class="row">
														<div class="col-md-5">
															<a href="<?=site_url('Profile/index/'.$m->uid)?>">
															<img src="<?php echo base_url('resources/shared/images/'.$m->ProfileImage) ?>" style="border-radius: 50%" height="50px" width="50px" ></a>
														</div>
														<div class="col-md-7">
															<h5 style="margin:15% 0 0 0;"><code><a href="<?=site_url('Profile/index/'.$m->uid)?>"><?= $m->Username ?></a></code></h5>
														</div>
													</div>
													<hr style="height: 1px">
											<?php
												}
											?>
											
										</div><!--suggestions-list end-->
									</div><!--suggestions end-->
								</div><!--main-left-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>


		<?php include_once("footer.php"); ?>

<?php include_once('bottomscripts.php') ?>
</body>

</html>