<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Profile Info</title>
	<?php include_once('topscripts.php') ?>
</head>
<body>
	
	<div class="wrapper">
		<header>
			<?php include_once('header.php') ?>
		</header><!--header end-->		

		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-2">
								<div class="main-left-sidebar">
									<!--suggestions end-->
								</div><!--main-left-sidebar end-->
							</div>
							<div class="col-lg-8">
								<div class="user_profile">
									<!--user-pro-img end-->
									<img src="<?= base_url('resources/shared/images/'.$User[0]->ProfileImage) ?>" height="150px" width="150px" alt="<?= $User[0]->Username ?>" style="margin: 50px 40% 0px 40%">
									<div class="user_pro_status" style="margin-top: 30px;">

										Hello,<h3 style="font-weight: 600;color: blue;font-size: 2em"><?= $User[0]->Username ?></h3>
									</div>
								</div>
								<div class="main-ws-sec">
									<div class="user-tab-sec rewivew">
										<div class="tab-feed st2 settingjb">
											<ul>
												<li data-tab="info-dd" class="active">
													<a href="#" title="">
														<img src="<?= base_url('resources/user/images/ic2.png') ?>" alt="">
														<span>Info</span>
													</a>
												</li>
												<li data-tab="feed-dd">
													<a href="#" title="">
														<img src="<?php echo base_url('resources/user/images/ic4.png') ?>" alt="">
														<span>Community</span>
													</a>
												</li>
												<?php
													if($User[0]->UserId==$_SESSION['uid']){
												?>
														<li data-tab="rewivewdata">
															<a href="#" title="">
																<img src="<?= base_url() ?>resources/user/images/ic3.png" alt="">
																<span>Edit Info</span>
															</a>
														</li>
												<?php
													}
												?>
												
												
											</ul>
										</div><!-- tab-feed end-->
									</div>
									<div class="product-feed-tab " id="feed-dd">
										<div class="posts-section">
											<div class="post-bar">
												<?php
													foreach ($Community as $c) {
												?>
                                                	<div class="posts-bar">
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="company_profile_info">
																<div class="company-up-info">
																	<img src="<?= base_url('resources/shared/images/'.$c->CoverImage) ?>" height="150px" width="150px" alt="">
																	<h3><?= $c->Title ?></h3>
																	<h4><?= $c->CreatedDt ?></h4>
																</div>
															</div><!--company_profile_info end-->
														</div>
                                                	</div>
												<?php
													}
												?>
												<?php
													foreach ($Members as $m) 
													{
												?>
														<div class="posts-bar">
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="company_profile_info">
																	<div class="company-up-info">
																		<img src="<?= base_url('resources/shared/images/'.$m->CoverImage) ?>" height="150px" width="150px" alt="">
																		<h3><?= $m->Title ?></h3>
																		<h4><?= $m->CreatedDt ?></h4>
																	</div>
																</div><!--company_profile_info end-->
															</div>
	                                                	</div>	
												<?php
													}
												?>
											</div><!--process-comm end-->
										</div><!--posts-section end-->
									</div>
									<div class="product-feed-tab current" id="info-dd">
										<div class="user-profile-ov">
												
											<h3><!-- <a href="" title="" class="overview-open">Overview</a> -->Overview <!-- <a href="#" title="" class="overview-open"> --><i class="fa fa-pencil"></i><!-- </a> --></h3>
											<p style="font-size: 1.2em">Email : </p><h4 style="font-size: 1.5em"> <?= $User[0]->Email ?></h4><br>
											<p style="font-size: 1.2em">Contact No : </p><h4 style="font-size: 1.5em"> <?= $User[0]->MobileNo ?></h4><br>
											<p style="font-size: 1.2em">City : </p><h4 style="font-size: 1.5em"> <?= $User[0]->CityName ?></h4><br>
											<p style="font-size: 1.2em">D-O-B : </p><h4 style="font-size: 1.5em"> <?= $User[0]->DOB ?></h4><br>
										</div><!--user-profile-ov end-->
										<!--user-profile-ov end-->
									</div>
									<div class="product-feed-tab" id="rewivewdata">
										<div class="posts-section">
											<div class="posts-bar">
												<form method="post" enctype="multipart/form-data" action="<?php echo site_url("Profile/editInfo/".$User[0]->UserId) ?>">
													<div class="row" class="form-group">
														<div class="col-lg-12" style="margin: 0px 5px 0px 5px">
																<input required="" type="text" value="<?= $User[0]->Email ?>"  class="form-control" name="txtemail" placeholder="Email Id">
														</div><br>
														<div class="col-lg-12" style="margin: 0px 5px 0px 5px">
																<input type="text" required="" value="<?= $User[0]->Gender ?>" class="form-control" name="txtgender" placeholder="Gender">
														</div><br>
														<div class="col-lg-12" style="margin: 0px 5px 0px 5px">
																<input type="text" required="" class="form-control"  value="<?= $User[0]->DOB ?>" name="txtdob" placeholder="Date Of Birth">
														</div><br>
														<div class="col-lg-12" style="margin: 0px 5px 0px 5px">
																<select name="txtcityid" class="form-control">
																	<option>Select City</option>
																	<?php
																		foreach ($City as $c) {
																	?>
																		<option value="<?= $c->CityId ?>" <?php if($c->CityId==$User[0]->CityId) { ?> selected <?php } ?> ><?= $c->CityName ?></option>
																	<?php
																		}
																	?>
																</select>
																<!-- <i class="la la-dropbox"></i>
																<span><i class="fa fa-ellipsis-h"></i></span> -->
														</div><br>
														<div class="col-lg-12" style="margin: 0px 5px 0px 5px">
																<input type="text" required="" value="<?= $User[0]->MobileNo ?>" class="form-control" name="txtmob" placeholder="Mobile No">
														</div><br>
														<div class="col-lg-12" style="margin: 0px 5px 0px 5px">
															<button type="submit" class="btn btn-info form-control" value="submit">Update</button>
														</div>
													</div>
												</form>

												<form method="post" enctype="multipart/form-data" action="<?php echo site_url("Profile/editPassword/".$User[0]->UserId) ?>">
													<div class="row" class="form-group" style="margin-top: 50px">
														
														<div class="col-lg-12" style="margin: 0px 5px 0px 5px">
																<input type="text" required="" class="form-control" name="txtoldpassword" placeholder="Old Password">
														</div><br>
														<div class="col-lg-12" style="margin: 0px 5px 0px 5px">
																<input type="text" required="" class="form-control" name="txtPwd" placeholder="New Password">
														</div><br>
														<?php
															if (isset($Msg)) 
															{
														?>
																<div class="col-lg-12" style="margin: 0px 5px 0px 5px">
																	<p style="color: red">
																		<?php
																			echo $Msg;
																		?>
																	</p>
																</div><br>
														<?php	
															}
														?>
														<?php
															if (isset($Err)) 
															{
														?>
																<div class="col-lg-12" style="margin: 0px 5px 0px 5px">
																	<p style="color: green">
																		<?php
																			echo $Err;
																		?>
																	</p>
																</div><br>
														<?php	
															}
														?>
														<div class="col-lg-12" style="margin: 0px 5px 0px 5px">
															<button type="submit" class="btn btn-info form-control" value="submit">change password</button>
														</div>
													</div>
												</form>

												<form method="post" enctype="multipart/form-data" action="<?php echo site_url("Profile/editImage/".$User[0]->UserId) ?>">
													<div class="row" class="form-group" style="margin-top: 50px">
														
														<div class="col-lg-12" style="margin: 0px 5px 0px 5px">
																<input type="file" required="" class="form-control" name="fup">
														</div><br>
														<div class="col-lg-12" style="margin: 0px 5px 0px 5px">
															<button type="submit" class="btn btn-info form-control" value="submit">change propfile</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div><!--product-feed-tab end-->
								</div><!--main-ws-sec end-->
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
					<div class="file-submit">
						<input type="file" id="file">
						<label for="file">Choose File</label>	
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

	</div><!--theme-layout end-->



	<?php include_once('bottomscripts.php') ?>
</body>
</html>