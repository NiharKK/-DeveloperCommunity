<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Explore Community</title>
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
								<?php
									foreach ($communities as $c) 
									{
								?>
									<div class="usr-question">
										<div class="usr_img">
											<img src="<?php echo base_url('resources/shared/images/'.$c->CoverImage)?>" alt="">
										</div>
										<div class="usr_quest">
											<h3><?php echo $c->Title?></h3>
											<ul class="react-links">
												<li><a href="<?php echo site_url("Profile/index/".$c->UserId); ?>" title=""><i class="fas fa-heart"></i>Curator : <?php echo $c->Username ?></a></li>
												
											</ul>
											<ul class="quest-tags">
												<li><a href="<?php echo site_url('Community/loadAllCommunityMembersByCommunityId/'.$c->CommunityId) ?>" title="">More Information</a></li>
											<!-- </ul> -->
											<!-- <ul class="quest-tags"> -->
												<li><a href="<?php echo site_url('Community/loadForumByCommunityId/'.$c->CommunityId) ?>" title="">View Posts</a></li>
											</ul>
										</div><!--usr_quest end-->
										<span class="quest-posted-time"><i class="fa fa-clock-o"></i><?php echo $c->CreatedDt?></span>
									</div><!--usr-question end-->
								<?php		
									}
								?>
							</div><!--forum-questions end-->
							<nav aria-label="Page navigation example" class="full-pagi">
							</nav>
						</div>
						<div class="col-lg-4">
							<div class="widget widget-user">
								<h3 class="title-wd">Top User of the Week</h3>
								<ul>
									<li>
										<div class="usr-msg-details">
											<div class="usr-ms-img">
												<img src="<?php echo base_url('resources/shared/images/gran-turismo-8k.jpg')?>" alt="">
											</div>
											<div class="usr-mg-info">
												<h3>Nihar</h3>
												<p>All Language Developer </p>
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
		<?php include_once("footer.php"); ?>

	</div><!--theme-layout end-->



<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/script.js"></script>

</body>
</html>