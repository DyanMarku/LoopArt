<style>
	* {
		font-family: Poppins, sans-serif;
		font-weight: 200;
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
		       									<img src='" . $image . "' width='100%' height='auto' class='thumbnail' style='border-radius: 10px;' >
		       									<h5 ><a style='color: black; text-decoration: underline; padding-bottom: 30px' href='product.php?product=" . $row['slug'] . "'>" . $row['name'] . "</a></h5>
		       								</div>
		       								<div class='box-footer' style='background-color: #D9D9D9; margin-top: 90px'>
		       									<b>&#36; " . number_format($row['price'], 2) . "</b>
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