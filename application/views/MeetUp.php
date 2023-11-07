<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MeetUp</title>
	<?php include_once('topscripts.php') ?>
</head>
<body>	
	<div class="wrapper">
		<header>
			<?php include_once('header.php') ?>
		</header><!--header end-->	


		<section class="companies-info">
			<div class="container">
				<div class="company-title">
					<h3>MeetUps</h3>
				</div><!--company-title end-->
				<div class="companies-list">
					<div class="row">
						<?php
							foreach ($meetups as $m) {
						?>
							<div class="post-bar col-md-5" style="margin: 0px 40px 40px 40px">
								<div class="post_topbar">
										<img src="<?php echo base_url("resources/shared/images/".$m->CoverImage); ?>" width="100%" height="180px"><br>
										<div class="usy-name" style="margin-top: 15px">
											<h3 style="font-size: 1.5em;"><a href="<?php echo site_url('Meetup/'.$m->MeetUpId) ?>" style="color: black;text-align: center;"><?php echo $m->Topic ?></a></h3>
										</div>
									</div>
									
								<div class="epi-sec">
									<ul class="descp">
										<li><b style="font-weight: 600">MeetUp Date </b><h4> <?php echo $m->MeetUpDate ?></h4></li>
										<li><b style="font-weight: 600">Created Date</b> <h4><?php echo $m->CreatedDt ?></h4></li>
									</ul>
								</div>
								<div class="job_descp">
									
									<ul class="job-dt">
										<li><p>Username : </p><code><a href="<?php echo site_url('Profile/index/'.$m->UserId)?>"><?php echo $m->Username ?></a></code></li>
										<li><p>Timing :</p>From <code><?php echo $m->TimingsFrom ?></code> To <code><?php echo $m->TimingsTo ?></code></li>
										<li><p>Total Seats :</p><code><?php echo $m->TotalSeats ?> </code></li>
									</ul>
									<p><i>Description</i> : <?php echo $m->Description ?></p>
									<a href="<?php echo site_url('Meetup/loadMeetUpById/'.$m->MeetUpId) ?>" style="float: right;" class="btn btn-success">View More</a>
								</div>
							</div>
							
						<?php
							}
						?>
						
					</div>
				</div><!--process-comm end-->
			</div>
		</section><!--companies-info end-->
		<?php include_once("footer.php"); ?>

	</div><!--theme-layout end-->



	<?php include_once('bottomscripts.php') ?>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/companies.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Mar 2020 08:07:38 GMT -->
</html>