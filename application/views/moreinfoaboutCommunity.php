<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>More Information about Community</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="<?php echo base_url('resources/user/')?>text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/responsive.css">
</head>


<body oncontextmenu="return false;">
	

	<div class="wrapper">
		<?php include_once("header.php"); ?>

		<section class="forum-page">
			<div class="container">
				<div class="forum-questions-sec">
					<div class="row">
						<div class="col-lg-8">
							<div class="forum-questions">
									<div class="usr-question">
										<div class="usr_img">
											<img src="<?php echo base_url('resources/shared/images/'.$comminfo[0]->CoverImage)?>" alt="">
										</div>
										<div class="usr_quest">
											<h3><?php echo $comminfo[0]->Title ?></h3>
											<a href="<?php echo site_url("Profile/index/".$comminfo[0]->UserId); ?>" title="">
												<i class="fas fa-heart"></i> Curator : 
												<?php echo $comminfo[0]->Username ?>
											</a>
											<?php
												foreach ($communities as $c) 
												{
											?>
												<ul class="react-links">
													<li>
														
														<i class="fas fa-heart"></i> Member : 
														<a href="<?php echo site_url("Profile/index/".$c->uid); ?>">
															<?php echo $c->Username ?>
														</a>
														
														<br>
													</li>
													
												</ul>
											<?php		
												}
											?>
											
											<?php
												if (isset($userErr)) 
												{
											?>
													<p style="color: red">
														<?php
															echo $userErr;
														?>
													</p>
													
											<?php
												}
												else
												{
											?>		
													<ul class="quest-tags">
														<li><a href="<?php echo site_url('Community/addCommunityRequest/'.$comminfo[0]->CommunityId) ?>" title="">Join</a></li>
													</ul>
													
											<?php
												}
											?>
											
											<?php
												if (isset($Msg)) 
												{
											?>
													<ul class="quest-tags">
														<li><a href="<?php echo site_url('Community/loadAllRequest/'.$comminfo[0]->CommunityId) ?>" title="">MoreInfo</a></li>
													</ul>
													<ul class="quest-tags">
														<li><a href="<?php ?>" title="">Queries</a></li>
													</ul>
											<?php
												}
											?>

											<?php
												if (isset($Queries)) 
												{
											?>
													<ul class="quest-tags">
														<li><a href="<?php ?>" title="">Queries</a></li>
													</ul>
											<?php
												}
											?>
										</div><!--usr_quest end-->
										<span class="quest-posted-time"><i class="fa fa-clock-o"></i><?php echo $comminfo[0]->CreatedDt ?></span>
									</div><!--usr-question end-->
							</div><!--forum-questions end-->
							<nav aria-label="Page navigation example" class="full-pagi">
							</nav>
						</div>
						<div class="col-lg-4">
							<div class="widget widget-user">
								<h3 class="title-wd">Curator of This Community</h3>
								<ul>
									<li>
										<div class="usr-msg-details">
											<div class="usr-ms-img">
												<img src="<?php echo base_url('resources/shared/images/'.$comminfo[0]->ProfileImage)?>" alt="">
											</div>
											<div class="usr-mg-info">
												<a href="<?php echo site_url("Profile/index/".$comminfo[0]->UserId); ?>">
												<h3><?php echo $comminfo[0]->Username?></h3></a>
												<p><?php echo $comminfo[0]->CityName?> </p>
											</div><!--usr-mg-info end-->
										</div>
										<span><img src="<?php echo base_url('resources/user/')?>images/price1.png" alt=""></span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div><!--forum-questions-sec end-->
			</div>
		</section>
		

		

	</div><!--theme-layout end-->
	<?php include_once("footer.php"); ?>


<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/script.js"></script>

</body>
</html>