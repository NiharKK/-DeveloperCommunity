<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Community By Category</title>
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
					<h3>Communities 
						<a href="<?= site_url('Community/loadAddCommunity') ?>" style="float: right;margin-top: -9px;background-color: #e44d3a" class="btn btn-success">
						Add Community
						</a>
					</h3>
				</div><!--company-title end-->
				<div class="companies-list">
					<div class="row">
						<?php
						//die(print_r($colleges));
							foreach ($Community as $c) 
							{
						?>
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="company_profile_info">
											<div class="row col-md-12" style="margin: 10px 0px 10px 0px">
												<div class="col-md-3">
													<img src="<?php echo base_url('resources/shared/images/'.$c->CoverImage) ?>" height="200px" width="200px" alt="" style="border-radius: 50%;margin-bottom: 15px">
													<h3 style="font-size: 2em;margin-left: -40px;font-weight: 600"><a style="color: black;" href=""><?php echo $c->Title ?></a></h3><br/>
												</div>
												<div class="col-md-4" style="margin-top: 20px">
													
													<code style="font-weight: 600">Created Date  </code><h4 style="font-size: 1.1em;"><?php echo $c->CreatedDt ?></h4><br>
													<code style="font-weight: 600">Created By </code><h4 style="font-size: 1.1em;"><a style="color: black" href=""><br><img src="<?php echo base_url('resources/shared/images/'.$c->ProfileImage) ?>" height="60px" width="60px" style="margin:0 42% 0 42%"> <?php echo $c->Username ?></a></h4>
												</div>
												<div class="col-md-4" style="margin-top: 20px">
														<?php
															$meetUp=$this->udm->selectMeetupsByCommunityId($c->CommunityId); 
															$member=$this->udm->selectCommunityMemberByCommunityId($c->CommunityId);
															$post=$this->udm->selectForumByCommunityId($c->CommunityId);
														?>
														<code style="font-weight: 600">MeetUps </code><h3 style="font-size: 1.3em"><?php echo count($meetUp) ?></h3> <br/>
														<code style="font-weight: 600">Forums  </code><h3 style="font-size: 1.3em"><?php echo count($post) ?></h3><br/>
														<code style="font-weight: 600">Memeber </code ><h3 style="font-size: 1.3em"><?php echo count($member) ?></h3><br/>
													</div>
											</div>
											<div class="row col-md-12" style="margin: -50px 0px 20px 0px">
												<div class="col-md-6"></div>
												<div class="col-md-2">
													<a href="<?php echo site_url('UserDemo/loadProfile/'.$c->CommunityId);?>" class="btn btn-info" style="background-color: #e44d3a;color: white;font-weight: 600;border:1px solid white">View More</a>
												</div>
											</div>
										</div>
								</div>
						<?php
							}
						?>
						
					</div>
				</div><!--process-comm end-->
			</div>
		</section><!--companies-info end-->
		

	</div><!--theme-layout end-->
	<?php include_once('footer.php') ?>


	<?php include_once('bottomscripts.php') ?>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/companies.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Mar 2020 08:07:38 GMT -->
</html>