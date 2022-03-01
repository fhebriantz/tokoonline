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
				if ($_GET["halaman"] == "bis") {
					include 'bis.php';
				}  elseif ($_GET["halaman"] == "tentang") {
					include 'tentang.php';
				}  elseif ($_GET["halaman"] == "wisata") {
					include 'wisata.php';
				}	elseif ($_GET["halaman"] == "checkout") {
					include 'checkout.php';
				}	elseif ($_GET["halaman"] == "uploadbukti") {
					include 'uploadbukti.php';
				}	elseif ($_GET["halaman"] == "terimakasih") {
					include 'terimakasih.php';
				}	elseif ($_GET["halaman"] == "wisata") {
					include 'wisata.php';
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