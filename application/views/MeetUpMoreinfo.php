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

												<li data-tab="req-dd">
													<a href="#" title="">
														<img src="<?= base_url() ?>resources/user/images/ic5.png" alt="">
														<span>Joining Request</span>
													</a>
												</li>

												<li data-tab="addMeet-dd">
													<a href="#" title="">
														<img src="<?= base_url() ?>resources/user/images/ic4.png" alt="">
														<span>Edit MeetUp</span>
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
														<li><b style="font-weight: 600">MeetUp Date </b>
															<p><code> <?= $mInfo->MeetUpDate ?></code></p>
														</li>
														<li><b style="font-weight: 600">Created Date</b>
															<p><code><?= $mInfo->CreatedDt ?></code></p>
														</li>
														<li><b style="font-weight: 600">Timing</b>
															<p>From <code><?= $mInfo->TimingsFrom ?></code> To <code><?= $mInfo->TimingsTo ?></code></p>
														</li>
														<li><b style="font-weight: 600">City </b>
															<p><code> <?= $mInfo->CityName ?></code></p>
														</li>
														<li><b style="font-weight: 600">Total Seats </b>
															<p><code> <?= $mInfo->TotalSeats ?></code></p>
														</li>
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
									<div class="product-feed-tab" id="addMeet-dd">
										<div class="user-profile-ov st2">
											<h3 style="text-align: center;"><code>Edit MeetUp</code></h3>
											<form method="post" action="<?= site_url('Meetup/editMeetUp/' . $mInfo->CommunityId . '/' . $mInfo->MeetUpId) ?>">
												<div class="row col-md-10">
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">Topic</label>
														<input type="text" required="" value="<?= $mInfo->Topic ?>" name="txttopic" class="form-control col-md-9">
													</div>
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">Description</label>
														<textarea name="txtdesc" required="" class="form-control col-md-9"> <?= $mInfo->Description ?></textarea>
													</div>
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">MeetUpDate</label>
														<input type="text" required="" value="<?= $mInfo->MeetUpDate ?>" name="txtmdate" class="form-control col-md-9">
													</div>
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">Total Seats</label>
														<input type="number" required="" value="<?= $mInfo->TotalSeats ?>" name="txttseat" class="form-control col-md-9">
													</div>
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">Address</label>
														<textarea name="txtaddr" required="" class="form-control col-md-9"> <?= $mInfo->Address ?></textarea>
													</div>
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">Timing</label>
														<label class="col-md-2"><code>From</code></label>
														<input type="number" required="" value="<?= $mInfo->TimingsFrom ?>" name="txttfrom" class="form-control col-md-2">
														<label class="col-md-1"><code>To</code></label>
														<input type="number" required="" value="<?= $mInfo->TimingsTo ?>" name="txttto" class="form-control col-md-2">
													</div>
													<div class="row form-group col-md-12">
														<label class="col-md-3" style="color: black">City</label>
														<select name="txtcity" class="form-control col-md-9">
															<option value="-1">Select City</option>
															<?php
															foreach ($cityData as $key) {
															?>
																<option value="<?= $key->CityId ?>"><?= $key->CityName ?></option>
															<?php
															}
															?>
														</select>
													</div>
													<div class="row form-group col-md-12">
														<input type="Submit" name="btnAddMeet" value="Update MeetUp" class="form-control btn btn-primary">
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="product-feed-tab" id="info-dd">
										<!-- <img src="<?php echo base_url('resources/shared/images/' . $mInfo->ProfileImage) ?>" height="150px" weight="150px" style="border-radius: 50%;margin: 0% 40% 40px 40%"> -->
										<div class="user-profile-ov">
											<a href="<?php echo site_url('Profile/index/' . $mInfo->UserId); ?>">
												<h3>Username : <code><?= $mInfo->Username ?></code> </h3>
											</a>
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
									<div class="product-feed-tab" id="req-dd">
										<?php
										foreach ($requests as $r) {
										?>
											<div class="user-profile-ov">
												<a href="<?php echo site_url('Profile/index/' . $r->uid); ?>">
													<h3>Username :
														<code>
															<?php echo $r->Username ?>
														</code>
													</h3>
												</a>
												<h3>Email : <code><?php echo $r->Email ?></code></h3>
												<h3>Contact No : <code><?php echo $r->MobileNo ?></code></h3>
												<?php
												if (isset($Err)) {
												?>
													<div class="row col-md-12">
														<a style="color: white" href="<?php echo site_url('Meetup/addMeetUpMember/' . $r->MeetUpId . "/" . $r->uid); ?>" class="col-md-5 btn btn-success">Accept</a>
														<div class="col-md-2"></div>
														<a style="color: white" href="<?php echo site_url('Meetup/removeMeetUpRequest/' . $r->MeetUpId . "/" . $r->uid); ?>" class="col-md-5 btn btn-danger">Reject</a>
													</div>
												<?php
												}
												?>
											</div>
										<?php
										}
										?>
									</div>
									<!--product-feed-tab end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user_pro_status" style="margin-top: 20px">
											<?php
											if (isset($Msg)) {
											?>
												<ul class="flw-hr" style="margin-top: 20px">
													<li><a href="<?php echo site_url('Meetup/addMeetUpRequest/' . $mInfo->MeetUpId); ?>" title="" class="flww"><i class="la la-plus"></i>Request For Join</a></li>
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
														<a href="<?= site_url('Profile/index/' . $m->uid) ?>">
															<img src="<?php echo base_url('resources/shared/images/' . $m->ProfileImage) ?>" style="border-radius: 50%" height="50px" width="50px"></a>
													</div>
													<div class="col-md-7">
														<h5 style="margin:15% 0 0 0;"><code><a href="<?= site_url('Profile/index/' . $m->uid) ?>"><?= $m->Username ?></a></code></h5>
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

</html>