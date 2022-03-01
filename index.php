<?php
include 'koneksi.php';
?>

<html class="no-js">
<!--<![endif]-->

<head>
<?php include 'index_head.php'; ?>
</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<?php include 'navbar.php'; ?>

			<!-- konten -->
			<?php
			if (isset($_GET["halaman"])) {
				if ($_GET["halaman"] == "car") {
					include 'car.php';
				}  elseif ($_GET["halaman"] == "contact") {
					include 'contact.php';
				} elseif ($_GET["halaman"] == "flight") {
					include 'flight.php';
				}  elseif ($_GET["halaman"] == "vacation") {
					include 'vacation.php';
				}	elseif ($_GET["halaman"] == "checkout") {
					include 'checkout.php';
				}
			} else {
				include 'home.php';
			}
			?>
			<!-- akhir konten -->
		</div>
	</div>
	<footer>
		<?php include 'footer.php'; ?>
	</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->
	
	<?php include 'index_js.php'; ?>

</body>

</html>