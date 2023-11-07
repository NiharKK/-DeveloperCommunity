<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Community Profile</title>
	<?php include_once('topscripts.php') ?>
</head>


<body>	

	<div class="wrapper">
		
		<header>
			<?php include_once('header.php') ?>
		</header><!--header end-->
				

		<section class="cover-sec">
			<img src="<?php echo base_url('resources/user/images/resources/company-cover.jpg') ?>">
		</section><!--cover-sec end-->
		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user-pro-img">
											<img src="<?php echo base_url('resources/shared/images/'.$Community[0]->CoverImage) ?>">
										</div><!--user-pro-img end-->
										<?php
											if($Community[0]->UserId==$_SESSION['uid']){
										?>
												<a href="<?php echo site_url('UserDemo/loadEditCommunity/'.$Community[0]->CommunityId) ?>" class="btn col-md-8 flww" style="margin-bottom: 20px;color: white;font-weight: 600">Edit<i class="la la-pencil-square-o" style="float: right;font-size:  1.5em"></i></a>
										<?php
											}
											if($Community[0]->UserId!=$_SESSION['uid']){
												$status=$this->udm->checkAvailability($Community[0]->CommunityId);
												if($status==0){
										?>
													<div class="user_pro_status">
														<ul class="flw-hr">
															<li>
																<a href="<?= site_url('UserDemo/addCommunityRequest/'.$Community[0]->CommunityId) ?>" title="Join Community" class="flww"><i class="la la-plus"></i> Join Community</a>
															</li>
														</ul>
													</div>
										<?php
												}else{
													if($Community[0]->UserId!=$_SESSION['uid']){
														$member=$this->udm->checkAvailability($Community[0]->CommunityId);
														$request=$this->udm->checkCuratorRequest($Community[0]->CommunityId);
														$type=$this->udm->checkUserType($Community[0]->CommunityId);
														if($member==1){
															if($Request==0){
																if($Type==0){
										?>
																			<div class="user_pro_status">
																				<ul class="flw-hr">
																					<li>
																						<a  href="<?= site_url('UserDemo/addCrRequest/'.$Community[0]->CommunityId) ?>" title="Join Community" class="post-jb active flww"><i class="la la-plus"></i> Send Curator Request</a>
																					</li>

																				</ul>
																			</div>
										<?php
																}
															}
														}
													}
												}
											}
										?>
										
										
									</div>
									<div class="suggestions full-width">
										 <div class="sd-title">
											<h3>Members</h3>
										</div>
										 <div class="suggestions-list">
										 	<?php
										 		foreach ($Members as $m) {
										 	?>
												<div class="row">
													<div class="col-md-5">
														<a href="<?php echo site_url('Profile/index/'.$m->uid)?>">
															<img src="<?php echo base_url('resources/shared/images/'.$m->ProfileImage) ?>" style="border-radius: 50%" height="50px" width="50px" >
														</a>
													</div>
													<div class="col-md-7">
														<h5 style="margin:15% 0 0 0;"><code><a href="<?php echo site_url('Profile/index/'.$m->uid)?>"><?php echo $m->Username ?></a></code></h5>
													</div>
												</div>
												<hr style="height: 1px">
										 	<?php
										 		  }  
										 	?>
										</div> 
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<h3 style="font-size: 2em"><?php echo $Community[0]->Title ?></h3>
										<div class="star-descp">
											<span><p>Created Date :</p> <code> <?php echo $Community[0]->CreatedDt ?></code></span>
										</div><!--star-descp end-->
										<div class="tab-feed">
											<ul>
												<li data-tab="info-dd" class="active">
													<a href="#" title="">
														<img src="<?php echo base_url('resources/user/images/ic2.png') ?>" alt="">
														<span>UserInfo</span>
													</a>
												</li>
												<li data-tab="feed-dd" >
													<a href="#" title="">
														<img src="<?php echo base_url('resources/user/images/ic1.png') ?>" alt="">
														<span>MeetUps</span>
													</a>
												</li>
												<li data-tab="post-dd" >
													<a href="#" title="">
														<img src="<?php echo base_url('resources/user/images/ic1.png') ?>" alt="">
														<span>Forums</span>
													</a>
												</li>
												<?php
													$status=$this->udm->checkUserType($Community[0]->CommunityId);
													if($status==1 || $Community[0]->UserId==$_SESSION['uid']){
												?>
														<li data-tab="curt-dd">
															<a href="#" title="">
																<img src="<?php echo base_url('resources/user/images/ic5.png') ?>" alt="">
																<span>Curator Request</span>
															</a>
														</li>
														<li data-tab="addMeet-dd">
															<a href="#" title="">
																<img src="<?php echo base_url('resources/user/images/ic4.png') ?>" alt="">
																<span>Add MeetUp</span>
															</a>
														</li>
												<?php
													}
												?>
											</ul>
										</div><!-- tab-feed end-->
									</div><!--user-tab-sec end-->
									<div class="product-feed-tab" id="post-dd">
										<?php
											if( $Community[0]->UserId==$_SESSION['uid']){
										?>
												<div class="paddy col-md-12">
													
													<div class="filter-dd">
														<a href="<?php echo site_url('UserDemo/addForum/'.$Community[0]->CommunityId); ?>" class="post_project active col-md-12 btn btn-success " style="background-color: #e44d3a;border:1px solid white">Add Forum<i style="float: right;font-weight: 600;font-size: 1.2em" class="la la-plus"></i></a>
													</div>
													
												</div>
										<?php
											}
											foreach ($Forum as $f) {
										?>
												<div class="post-bar">
													<div class="post_topbar col-md-12">
														<img src="<?php echo base_url('resources/shared/images/'.$f->PostImage) ?>" alt="" height="250px" style="width: 70%;align-self: center;">
													</div>
													<div class="job_descp">
														<h3 style="margin-top: 30px;font-size: 2em;text-align: center;"><?= $f->Title ?></h3>
														<p style="margin-left: 50px"><?= $f->Description ?></p>
														
													</div>
													
												</div>
										<?php
											}
										?>
									</div>
									<div class="product-feed-tab" id="feed-dd">
										<div class="posts-section">
											<?php foreach ($MeetUp as $m) {
											?>
												<div class="post-bar">
													<div class="post_topbar">
														<div class="usy-dt">

															<div class="usy-name">
																<h3 style="font-size: 1.5em"><a href="<?= site_url('User/MeetUp/Index/'.$m->MeetUpId) ?>" style="color: black"><?= $m->Topic ?></a></h3>
																<span><img src="<?= base_url() ?>resources/user/images/clock.png" alt=""><?= $m->CreatedDt ?></span>
															</div>
														</div>
													</div>
													<br><br>
													<div class="job_descp" style="margin-top: 30px">
														<h3>Posted By :<code><a href="<?=site_url('User/Profile/index/'.$Community[0]->UserId)?>"><?= $m->Username ?></a></code></h3>
														<ul class="job-dt">
															<li>Timing : <p>From <time><code><?= $m->TimingsFrom ?></code></time> To <time><code><?= $m->TimingsTo ?></code></time></p></li>
															<li>MeetUpDate : <time><code><?= $m->MeetUpDate ?></code></time></li>
															<li>Total Seats : <code><?= $m->TotalSeats ?></code></li>
														</ul>
														<p>Description : <code><?= $m->Description ?><code></p>
														<p>Address : <code><?= $m->Address ?></code></p>
													</div>
													
												</div>
											<?php
											}
											?>
											
										</div>
									</div>
									<div class="product-feed-tab" id="addMeet-dd">
										<div class="user-profile-ov st2">
											<h3 style="text-align: center;"><code>Add MeetUp</code></h3>
											<form method="post" enctype="multipart/form-data"  action="<?= site_url('UserDemo/addMeetUp/'.$Community[0]->CommunityId) ?>">
												<div class="row col-md-12">
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">Topic</label>
														<input type="text" required="" name="txttopic" class="form-control col-md-9">
													</div>
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">Description</label>
														<textarea name="txtdesc" required="" class="form-control col-md-9"></textarea>
													</div>
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">MeetUpDate</label>
														<input type="text"  required="" name="txtmdate" class="form-control col-md-9">
													</div>
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">Total Seats</label>
														<input type="number" required="" name="txttseat" class="form-control col-md-9">
													</div>
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">Status</label>
														<input type="number" required="" name="txtStatus" class="form-control col-md-9">
													</div>
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">Address</label>
														<textarea name="txtaddr" required="" class="form-control col-md-9"></textarea>
													</div>
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">Timing</label>
														<label class="col-md-2" ><code>From</code></label>
														<input type="number" required="" name="txttfrom" class="form-control col-md-2">
														<label class="col-md-1" ><code>To</code></label>
														<input type="number" required="" name="txttto" class="form-control col-md-2">
													</div>
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">City</label>
														<select name="txtCity" class="form-control col-md-9">
															<option value="-1">Select City</option>
															<?php
																foreach ($cityData as $c) {
															?>
																<option value="<?= $c->CityId ?>"><?= $c->CityName ?></option>
															<?php
																 } 
															?>
														</select>
													</div>
													
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">Cover Image</label>
														<input type="file" name="fup" class="form-control col-md-9">
													</div>
													<div class="row form-group col-md-12">
														<input type="Submit" name="btnAddMeet" value="Add MeetUp" class="form-control btn btn-primary">
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="product-feed-tab current" id="info-dd">
											<img src="<?php echo base_url('resources/shared/images/'.$Community[0]->ProfileImage) ?>" height="150px" weight="150px" style="border-radius: 50%;margin: 0 40% 40px 40%">
										<div class="user-profile-ov st2">
											<h3>UserName : <a href="<?=site_url('Profile/index/'.$Community[0]->UserId)?>"><code><?= $Community[0]->Username ?></code></a></h3>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Email : <code><?= $Community[0]->Email ?></code></h3>
										</div>
									</div>
									<?php
										$status=$this->udm->checkUserType($Community[0]->CommunityId);
										if($status==1 || $Community[0]->UserId==$_SESSION['uid']){

											foreach ($Request as $r) {
											
									?>
												<div class="product-feed-tab" id="curt-dd">
													<div class="user-profile-ov st2">
														<div class="row" style="margin-bottom: 20px">
															<div class="col-md-3"></div>
															<div class="col-md-3">
																<img src="<?php echo base_url('resources/shared/images/'.$r->ProfileImage) ?>" style="border-radius: 50%" height="80px" width="80px" >
															</div>
															<div class="col-md-3">
																<h5 style="margin:20% 0 0 0;"><code><a href="<?=site_url('User/Profile/index/'.$r->UserId)?>"><?= $r->Username ?></a></code></h5>
															</div>
														</div>
														<h3>Created Date : <code><?= $r->CreatedDt ?></code></h3>
														<h3>Description : <code><?= $r->Description ?></code></h3>
														<h3>PDF : <code><a href="<?php echo base_url('resources/shared/pdf/'.$r->PdfUrl) ?>" target="_blank">Click Here</a></code></h3>
														<div class="row col-md-12">
															<a style="color: white" href="<?= site_url('UserDemo/addCommunityCurator/'.$r->UserId.'/'.$Community[0]->CommunityId) ?>" class="col-md-5 btn btn-success">Accept</a>
															<div class="col-md-2"></div>
															<a style="color: white" href="<?= site_url('UserDemo/romoveCommunityCurator/'.$r->UserId.'/'.$Community[0]->CommunityId) ?>" class="col-md-5 btn btn-danger">Reject</a>
														</div>
													</div>
													
												</div>
									<?php
											}
										}
									?>
									
								</div>
							</div>
							
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>

		<div class="post-popup pst-pj">
			<div class="post-project">
				<h3>Add Post</h3>
				<div class="post-project-fields">
					<form method="post" enctype="multipart/form-data" action="<?php echo site_url('UserDemo/addForum/'.$Community[0]->CommunityId)?>">
						<div class="row">
							<div class="col-lg-12">
								<input name="txtTitle" required="" class="form-control" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<textarea class="form-control" required="" name="txtDesc" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<input type="file" name="fup" placeholder="Upload Image">
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

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Send Curator Request</h3>
				<div class="post-project-fields">
					<form method="post" enctype="multipart/form-data" action="<?php echo site_url('User/Colleges/sendCuratorRequest/'.$clgData->CommunityId)?>">
						<div class="row">
							<div class="col-lg-12">
								<textarea class="form-control" name="txtDesc" placeholder="Description"></textarea>
							</div>
							<label style="color: red;margin-left: 15px;margin-bottom: 5px">**Select only pdf File**</label>
							<div class="col-lg-12">
								<input type="file" name="txtDoc" placeholder="Upload PDF">
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="Send">Send</button></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div>


		<?php include_once("footer.php"); ?>

		<div class="overview-box" id="overview-box">
			<div class="overview-edit">
				<h3>Overview</h3>
				<span>5000 character left</span>
				<form>
					<textarea></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->


		<div class="overview-box" id="experience-box">
			<div class="overview-edit">
				<h3>Experience</h3>
				<form>
					<input type="text" name="subject" placeholder="Subject">
					<textarea></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="education-box">
			<div class="overview-edit">
				<h3>Education</h3>
				<form>
					<input type="text" name="school" placeholder="School / University">
					<div class="datepicky">
						<div class="row">
							<div class="col-lg-6 no-left-pd">
								<div class="datefm">
									<input type="text" name="from" placeholder="From" class="datepicker">	
									<i class="fa fa-calendar"></i>
								</div>
							</div>
							<div class="col-lg-6 no-righ-pd">
								<div class="datefm">
									<input type="text" name="to" placeholder="To" class="datepicker">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
						</div>
					</div>
					<input type="text" name="degree" placeholder="Degree">
					<textarea placeholder="Description"></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="location-box">
			<div class="overview-edit">
				<h3>Location</h3>
				<form>
					<div class="datefm">
						<select>
							<option>Country</option>
							<option value="pakistan">Pakistan</option>
							<option value="england">England</option>
							<option value="india">India</option>
							<option value="usa">United Sates</option>
						</select>
						<i class="fa fa-globe"></i>
					</div>
					<div class="datefm">
						<select>
							<option>City</option>
							<option value="london">London</option>
							<option value="new-york">New York</option>
							<option value="sydney">Sydney</option>
							<option value="chicago">Chicago</option>
						</select>
						<i class="fa fa-map-marker"></i>
					</div>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="skills-box">
			<div class="overview-edit">
				<h3>Skills</h3>
				<ul>
					<li><a href="#" title="" class="skl-name">HTML</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
					<li><a href="#" title="" class="skl-name">php</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
					<li><a href="#" title="" class="skl-name">css</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
				</ul>
				<form>
					<input type="text" name="skills" placeholder="Skills">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="create-portfolio">
			<div class="overview-edit">
				<h3>Create Portfolio</h3>
				<form>
					<input type="text" name="pf-name" placeholder="Portfolio Name">
					<div class="file-submit nomg">
						<input type="file" name="file">
					</div>
					<div class="pf-img">
						<img src="images/resources/np.png" alt="">
					</div>
					<input type="text" name="website-url" placeholder="htp://www.example.com">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="establish-box">
			<div class="overview-edit">
				<h3>Establish Since</h3>
				<form>
					<div class="daty">
						<input type="text" name="establish" placeholder="Select Date" class="datepicker">
						<i class="fa fa-calendar"></i>
					</div>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->


		<div class="overview-box" id="total-employes">
			<div class="overview-edit">
				<h3>Total Employees</h3>
				<form>
					<input type="text" name="employes" placeholder="Type in numbers">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->



	</div><!--theme-layout end-->



<?php include_once('bottomscripts.php') ?>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/company-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Mar 2020 08:07:55 GMT -->
</html>