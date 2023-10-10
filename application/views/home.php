<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<?php include_once("topscripts.php"); ?>
</head>

<body oncontextmenu="return false;">	

	<div class="wrapper">	
		<?php include_once("header.php");?>	

		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3 col-md-4 pd-left-none no-pd">
								<?php include_once("left-bar.php"); ?>
							</div>
							<div class="col-lg-6 col-md-8 no-pd">
								<div class="main-ws-sec">
									<p style="color: red;font-size: 20px;font-family: cursive;text-shadow: 2px 2px green;text-align: center;">
										Categories
									</p>
									<div class="post-topbar">
										
									</div>
											
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3 pd-right-none no-pd">
								<?php include_once("right-bar.php") ?>
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>


		<?php include_once("footer.php"); ?>

	</div><!--theme-layout end-->


<?php include_once("bottomscripts.php");?>

</body>

</html>