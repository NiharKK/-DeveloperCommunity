
<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/workwise-new/companies.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 04:02:21 GMT -->
<head>
	<meta charset="UTF-8">
	<title>Request Of Member</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/line-awesome-font-awesome.min.css">
	<link href="<?php echo base_url('resources/user/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/user/')?>css/responsive.css">
</head>


<body oncontextmenu="return false;">	
	<div class="wrapper">
		
	<?php include_once("header.php");?>

		<section class="companies-info">
			<div class="container">
				<div class="company-title">
					<h3>All Community Member's Request</h3>
				</div><!--company-title end-->
				<div class="companies-list">
					<div class="row">
						<?php
							foreach ($curatorrequest as $cr) 
							{
						?>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="company_profile_info">
									<div class="company-up-info">
										<img src="<?php echo base_url('resources/shared/images/'.$cr->CoverImage)?>" alt="">
										<h3><?php echo $cr->Title; ?></h3>
										<h4><?php echo $cr->Username; ?></h4>
										<ul>
											<li><a href="<?php echo site_url('Community/addCommunityMember/'.$cr->UserId.'/'.$cr->CommunityId) ?>" title="" class="follow">Accept</a></li>
											<li><a href="<?php echo site_url('Community/removeCommunityRequest/'.$cr->UserId.'/'.$cr->CommunityId) ?>" title="" class="message-us">Decline</a></li>
										</ul>
									</div>
									<a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
								</div><!--company_profile_info end-->
							</div>
							<?php
								}
							?>

					</div>
				</div><!--companies-list end-->
				
			</div>
		</section><!--companies-info end-->
		<?php include_once("footer.php"); ?>

	</div><!--theme-layout end-->



<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/flatpickr.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/script.js"></script>
</body>
</html>