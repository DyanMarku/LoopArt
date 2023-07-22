<style>
	#carousel-example-generic {
		border-radius: 20px;
		box-shadow: -11px -5px 50px -18px rgba(0, 0, 0, 0.42);
		-webkit-box-shadow: -11px -5px 50px -18px rgba(0, 0, 0, 0.42);
		-moz-box-shadow: -11px -5px 50px -18px rgba(0, 0, 0, 0.42);
	}

	.carousel-inner {
		border-radius: 20px;
		box-shadow: -11px -5px 50px -18px rgba(0, 0, 0, 0.42);
		-webkit-box-shadow: -11px -5px 50px -18px rgba(0, 0, 0, 0.42);
		-moz-box-shadow: -11px -5px 50px -18px rgba(0, 0, 0, 0.42);
	}

	.pic-container {
		padding: 20px;
	}

	.pic-container img {
		box-shadow: -9px 8px 16px 3px rgba(0, 0, 0, 0.43);
		-webkit-box-shadow: -9px 8px 16px 3px rgba(0, 0, 0, 0.43);
		-moz-box-shadow: -9px 8px 16px 3px rgba(0, 0, 0, 0.43);
	}
</style>

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
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="border-radius: 15px; border-color:antiquewhite; border-style: solid; border-width: thick; margin-top: 40px">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" class="one"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2" class="two"></li>
									<li data-target="#carousel-example-generic" data-slide-to="3" class="three"></li>

								</ol>
								<div class="carousel-inner" style="border-radius: 12px; height: auto;">
									<div class="item active">
										<img src="images/carousel1.jpg" alt="First slide" style="width: 100%;">
									</div>
									<div class="item one">
										<img src="images/carousel2.jpg" alt="Second slide" style="width: 100%;">
									</div>
									<div class="item two">
										<img src="images/carousel3.jpg" alt="Third slide" style="width: 100%;">
									</div>
									<div class="item three">
										<img src="images/carousel4.jpg" alt="Third slide" style="width: 100%;">
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


	<div class="content-wrapper" align="center">
		<div class="pic-container">
			<img src="images/carousel2.jpg" style="align-items: center;">
		</div>
		<div class="pic-container">
			<img src="images/carousel3.jpg" style="align-items: center;">
		</div>
		<div class="pic-container">
			<img src="images/carousel4.jpg" style="align-items: center;">
		</div>
	</div>

	<?php include 'includes/scripts.php'; ?>
</body>

</html>