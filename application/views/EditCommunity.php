<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Community</title>
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
					<h3>Edit Community</h3>
				</div><!--company-title end-->
				<div class="companies-list col-md-8" >
					<form enctype="multipart/form-data" method="post" class="form-group" action="<?php echo site_url('UserDemo/editCommunity/'.$Community[0]->CommunityId)?>">
						
							<!-- College id 	:	<input name="txtcolid"> -->
							<br>
						Title		:	<input value="<?= $Community[0]->Title ?>" required="" class="form-control" name="txttitle"><br>

						CoverImage	:	<input type="file" class="form-control" name="fup"><br>

						Description	:	<textarea name="txtdesc" required="" class="form-control" ><?= $Community[0]->Description ?></textarea><br>

						Category :	<select name="txtcatid" class="form-control">
										<option value="-1">Select Category</option>
										<?php
											foreach ($catData as $c) 
											{
										?>
											<option value="<?= $c->CategoryId ?>" ><?= $c->CategoryName ?></option>
										<?php
											}  
										?>
										
									</select><br>

						Address 	:	<input class="form-control" required="" value="<?= $Community[0]->Address ?>" name="txtadd"><br>

						<!-- Status 	:	<input class="form-control" required="" value="<?= $Community[0]->Status ?>" name="txtStatus"><br> -->

						City 	:	<select name="txtcityid" class="form-control">
										<option value="-1">Select City</option>
										<?php
											foreach ($City as $c) 
											{
										?>
											<option value="<?= $c->CityId ?>" ><?= $c->CityName ?></option>
										<?php
											}  
										?>
										
									</select><br>

						<input type="submit" class="btn btn-sucess" style="background-color: #e44d3a;margin-top:20px;color: white " name="submit" value="Update">
						
					</form>
				</div>
			</div>
		</section><!--companies-info end-->
		<?php include_once('footer.php') ?>

	</div><!--theme-layout end-->



	<?php include_once('bottomscripts.php') ?>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/companies.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Mar 2020 08:07:38 GMT -->
</html>