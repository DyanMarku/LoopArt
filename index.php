<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<?php include 'includes/navbar.php'; ?>

		<div class="content-wrapper">
			<div class="container">

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-sm-12">
							<?php
							if (isset($_SESSION['error'])) {
								echo "
	        					<div class='alert alert-danger'>
	        						" . $_SESSION['error'] . "
	        					</div>
	        				";
								unset($_SESSION['error']);
							}
							?>
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="border-radius: 30px; border-color:antiquewhite; border-style: solid; border-width: thick; margin-top: 20px">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" class="one"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2" class="two"></li>
								</ol>
								<div class="carousel-inner" style="border-radius: 30px;">
									<div class="item active">
										<img src="images/carousel1.png" alt="First slide" style="width: 100%;">
									</div>
									<div class="item one">
										<img src="images/carousel1.png" alt="Second slide" style="width: 100%;">
									</div>
									<div class="item two">
										<img src="images/carousel1.png" alt="Third slide" style="width: 100%;">
									</div>
								</div>
								<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									<span class="fa fa-angle-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									<span class="fa fa-angle-right"></span>
								</a>
							</div>

						</div>

					</div>
				</section>

			</div>
		</div>


	</div>

	<?php include 'includes/scripts.php'; ?>
</body>

</html>