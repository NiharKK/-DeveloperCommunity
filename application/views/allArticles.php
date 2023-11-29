<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>All Articles</title>
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

		<?php include_once("header.php"); ?>
		<section class="banner">
			<div class="bannerimage">
				<img src="<?php echo base_url('resources/user/'); ?>images/about.png" alt="image">
			</div>
			<div class="bennertext">
				<div class="innertitle">
					<h2>All Articles Appear Here</h2>                
	                <p>If You want to know more about that Article<br> Click on View More</p>
	            </div>
            </div>
            <span class="banner-title">Articles</span>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<a href="<?php echo site_url('Article/loadAddArticle'); ?>" class="btn btn-primary" style="margin-left: 500px">
						Add Article
					</a>
				</div>
			</div>
		</section>
		<?php
			foreach ($Articles as $a) 
			{
		?>
			<div class="post-bar col-lg-12" style="margin:40px; padding:5px;">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="row" style="margin-top:90px;">
								<div class="col-md-12 col-sm-12">
									<a href="<?php echo site_url('Profile/index/'.$a->UserId); ?>">
										<img src="<?php echo base_url('resources/shared/images/'.$a->ProfileImage); ?>">
									</a>
									<br>
									<a href="<?php echo site_url('Profile/index/'.$a->UserId); ?>">
										<p style="color: purple;font-size: 18px;font-family: cursive;margin-top: 80px;">
											<?php echo $a->Username; ?>
										</p>
									</a>
									<a href="<?php echo site_url('Article/loadEditArticle/'.$a->ArticleId); ?>" class="btn btn-dark">
										<p style="color: white;">
											Edit Article
										</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-8 col-sm-12">
						<h2 style="font-size: 50px;font-family: cursive;">
								<?php echo $a->Title; ?>
							</h2>
							<p style="color: blue;font-family: monospace;font-size: 38px;">
								<?php echo $a->Description; ?>
							</p>
							<br>
							<img src="<?php echo base_url('resources/shared/images/'.$a->FeatureImage); ?>" alt="image">
						</div>
					</div>
				</div>
				<div class="container" align="center">
					<a href="<?php echo site_url('Article/loadArticleById/'.$a->ArticleId); ?>" class="btn btn-info">
						<i class="fas fa-eye"></i>
						View More
					</a>
				</div>
			</div>
		<?php
			}
		?>
		<!-- <section>
			<div class="mapouter"><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe><a href="https://www.pureblack.de/"></a></div></div>
		</section> -->
		<section class="services">
			<div class="container">
				<div class="video">
					<!-- <iframe class="video-iframe"  src="https://www.youtube.com/embed/jzCwiu22C_c"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="blog">
							<img src="<?php echo base_url('resources/user/'); ?>images/blog.png" alt="image">
							<h2>Communities</h2>
							<a href="<?php echo site_url('Community/loadAllCommunity') ?>">Go to Communities</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="blog">
							<img src="<?php echo base_url('resources/user/'); ?>images/career.png" alt="image">
							<h2>Meet Up</h2>
							<a href="<?= site_url('Meetup/loadAllMeetUp') ?>">Go to Meet Up</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="blog">
							<img src="<?php echo base_url('resources/user/'); ?>images/forum.png" alt="image">
							<h2>Forum</h2>
							<a href="<?= site_url('Post/loadAllPost') ?>">Visit Forum</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include_once("footer.php"); ?>



<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/flatpickr.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/user/')?>js/script.js"></script>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 04:03:40 GMT -->
</html>