<div class="main-left-sidebar no-margin">
	<div class="user-data full-width">
		<div class="user-profile">
			<div class="username-dt">
				<p style="color: blue;font-size: 20px;text-shadow: 2px 2px green;">
					Online Community Management System
				</p>
				<div class="usr-pic">
					<img src="<?php echo base_url('resources/shared/images/'.$_SESSION['propic'])?>" alt="">
				</div>
			</div><!--username-dt end-->
			
			<div class="user-specs">
				<br>
				<br>
				<br>
				<h3>Welcome<a href="<?php echo site_url("Profile/index/".$_SESSION['uid']); ?>"> <?php echo $_SESSION['uname'];?></a></h3>
				<span></span>
			</div>
		</div><!--user-profile end-->
		<ul class="user-fw-status">
			<li>
				<h4>
					<a href="">Home</a>
				</h4>
				<span></span>
			</li>
			<li>
				<h4>
					<a href="<?php echo site_url('Community/loadAddCommunity') ?>">Create Community</a>
				</h4>
				<span></span>
			</li>
			<li>
				<h4>
					<a href="<?php echo site_url('Community/loadAllCommunity') ?>">Explore Community</a>
				</h4>
				<span></span>
			</li>
			<!-- <li>
				<h4>
					<a href="<?php echo site_url('Messages/loadCommunityByUserId/'.$_SESSION['uid']) ?>">Messages of Community</a>
				</h4>
				<span></span>
			</li> -->
			<li>
				<h4>
					<a href="<?php echo site_url('Meetup/loadAllMeetUp') ?>">MeetUps</a>
				</h4>
				<span></span>
			</li>
			<li>
				<a href="<?php echo site_url('Profile/index/'.$_SESSION['uid']);?>" title="">View Profile</a>
			</li>
		</ul>
	</div><!--user-data end-->
	
	<div class="tags-sec full-width">
		<ul>
			
		</ul>
		<div class="cp-sec">
			<img src="<?php echo base_url()?>resources/user/images/resources/Community.jpg" alt="" height="150px" width="250px">
			<p><img src="<?php echo base_url('resources/user/')?>images/cp.png" alt="">Copyright 2020</p>
		</div>
	</div><!--tags-sec end-->
</div><!--main-left-sidebar end-->