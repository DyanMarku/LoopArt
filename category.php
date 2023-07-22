<style>
	* {
		font-family: Poppins, sans-serif;
		font-weight: 200;
	}

	body {
		margin: 0;
		padding: 0;
		background-color: #383838;
	}

	.content-wrapper {
		padding-top: 20px;
	}

	.page-header {
		color: white;
		margin-top: 0;
	}

	.row {
		margin-left: -15px;
		margin-right: -15px;
	}

	.col-sm-4 {
		padding-left: 15px;
		padding-right: 15px;
	}

	.box {
		border-radius: 10px;
		background-color: #D9D9D9;
		height: 100%;
	}

	.prod-body {
		padding: 15px;
	}

	.thumbnail {
		border-radius: 10px;
		width: 100%;
		height: auto;
	}

	.box-footer {
		background-color: #D9D9D9;
		margin-top: 15px;
	}

	/* Media queries for responsiveness */
	@media (max-width: 768px) {
		.page-header {
			text-align: center;
		}

		.col-sm-4 {
			width: 50%;
		}
	}

	@media (max-width: 480px) {
		.col-sm-4 {
			width: 100%;
		}
	}
</style>

<?php include 'includes/session.php'; ?>
<?php
$slug = $_GET['category'];

$conn = $pdo->open();

try {
	$stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :slug");
	$stmt->execute(['slug' => $slug]);
	$cat = $stmt->fetch();
	$catid = $cat['id'];
} catch (PDOException $e) {
	echo "There is some problem in connection: " . $e->getMessage();
}

$pdo->close();

?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<?php include 'includes/navbar.php'; ?>

		<div class="content-wrapper">
			<div class="container">

				<!-- Main content -->
				<section class="content">
					<div class="row" style="margin-top: 20px;">
						<div class="col-sm-12">
							<h1 class="page-header" style="color: white;"><?php echo $cat['name']; ?></h1>
							<?php

							$conn = $pdo->open();

							try {
								$inc = 3;
								$stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid");
								$stmt->execute(['catid' => $catid]);
								foreach ($stmt as $row) {
									$image = (!empty($row['photo'])) ? 'images/' . $row['photo'] : 'images/noimage.jpg';
									$inc = ($inc == 3) ? 1 : $inc + 1;
									if ($inc == 1) echo "<div class='row'>";
									echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid' style='border-radius: 10px; height: 450; background-color: #D9D9D9'>
		       								<div class='box-body prod-body' style='padding: 15px;'>
		       									<a href='product.php?product=" . $row['slug'] . "'> <img src='" . $image . "'  width='100%' height='auto' class='thumbnail' style='border-radius: 10px;' > </a>
		       									<h5 ><a style='color: black; text-decoration: underline; padding-bottom: 30px' href='product.php?product=" . $row['slug'] . "'>" . $row['name'] . "</a></h5>
		       								</div>
		       								<div class='box-footer' style='background-color: #D9D9D9; margin-top: 90px'>
		       									<b>&#8369; " . number_format($row['price'], 2) . "</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
									if ($inc == 3) echo "</div>";
								}
								if ($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>";
								if ($inc == 2) echo "<div class='col-sm-4'></div></div>";
							} catch (PDOException $e) {
								echo "There is some problem in connection: " . $e->getMessage();
							}

							$pdo->close();

							?>
						</div>

					</div>
				</section>

			</div>
		</div>

	</div>

	<?php include 'includes/scripts.php'; ?>
</body>

</html>