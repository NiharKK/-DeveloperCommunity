<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="<?php echo site_url('UserDemo'); ?>" title=""><img src="<?php echo base_url('resources/user/images/resources/Community.jpg')?>" alt=""></a>
					</div><!--logo end-->
					<div class="search-bar">
						<!-- <form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form> -->
					</div><!--search-bar end-->
					<nav>
						<ul>
							<li>
								<a href="<?php echo site_url('UserDemo') ?>" title="">
									<span><img src="<?php echo base_url('resources/user/')?>images/icon1.png" alt=""></span>
									Home
								</a>
							</li>
							<li>
								<a href="<?php echo site_url("Profile/index/".$_SESSION['uid']); ?>" title="">
									<span><img src="<?php echo base_url('resources/user/')?>images/icon4.png" alt=""></span>
									Profiles
								</a>
								<ul>
									<li><a href="<?php echo site_url("Profile/index/".$_SESSION['uid']); ?>" title="">User Profile</a></li>
								</ul>
							</li>
							<li>
								<a href="<?php echo site_url('Community/loadAllCommunity') ?>" title="">
									<span><img src="<?php echo base_url('resources/user/')?>images/icon6.png" alt=""></span>
									Community
								</a>
							</li>
							<li>
								<a href="<?= site_url('Meetup/loadAllMeetUp') ?>" title="">
									<span><img src="<?= base_url() ?>resources/user/images/icon3.png" alt=""></span>
									MeetUps
								</a>
							</li>
							<li>
								<a href="<?= site_url('Post/loadAllPost') ?>" title="">
									<span><img src="<?= base_url() ?>resources/user/images/icon2.png" alt=""></span>
									Forums
								</a>
							</li>
							<li>
								<a href="" title="">
									<span><img src="<?= base_url() ?>resources/user/images/icon9.png" alt=""></span>
									Articles
								</a>
							</li>
						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
							<img src="<?php echo base_url('resources/shared/images/'.$_SESSION['propic'])?>" alt="" style="max-width: 30px" >
							<a href="<?php echo site_url('Profile/index/'.$_SESSION['uid']);?>" title=""><?php echo $_SESSION['uname'];?>
							</a>
							<center>
								<i class="la la-sort-down" style="color: white"></i>
							</center>
						</div>
						<div class="user-account-settingss" id="users">
							<h3>Setting</h3>
							<ul class="us-links">
								<li><a href="<?php echo site_url('Profile/index/'.$_SESSION['uid']);?>" title="">Account Setting</a></li>
								<li><a href="" title="">Privacy</a></li>
								<li><a href="" title="">Faqs</a></li>
								<li><a href="" title="">Terms & Conditions</a></li>
							</ul>
							<h3 class="tc"><a href="<?php echo site_url('User/logout')?>" title="">Logout</a></h3>
						</div><!--user-account-settingss end-->
					</div>
				</div><!--header-data end-->
			</div>
		</header><!--header end-->	