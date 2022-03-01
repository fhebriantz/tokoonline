<?php
session_start();
//koneksi ke database
include '../koneksi.php';

if (!isset($_SESSION['admin'])) {
	echo "<script>alert('Anda harus login');</script>";
	echo "<script>location='login.php';</script>";
	header('location:login.php');
	exit();
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLES-->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- MORRIS CHART STYLES-->
	<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
	<!-- CUSTOM STYLES-->
	<link href="assets/css/custom.css" rel="stylesheet" />
	<!-- GOOGLE FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

	<!-- JQUERY SCRIPTS -->
	<script src="assets/js/jquery-1.10.2.js"></script>
</head>

<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">Administrator</a>
			</div>
			<div style="color: red;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Muhammad Rizki &nbsp; <a href="index.php?halaman=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
		</nav>
		<!-- /. NAV TOP  -->
		<nav class="navbar-default navbar-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="main-menu">
					<li class="text-center">
						<img src="assets/img/find_user.png" class="user-image img-responsive" />
					</li>
					<li>
						<a href="../index.html"><i class="fa fa-dashboard"></i>Website</a>
					</li>
					<li>
						<a href="index.php?halaman=bis"><i class="fa fa-bus"></i>Master Bis</a>
					</li>
					<li>
						<a href="index.php?halaman=kelas"><i class="fa fa-briefcase"></i>Master Kelas</a>
					</li>
					<li>
						<a href="index.php?halaman=kota"><i class="fa fa-briefcase"></i>Master Kota</a>
					</li>
					<li>
						<a href="index.php?halaman=wisata"><i class="fa fa-briefcase"></i>Master Wisata</a>
					</li>
					<li>
						<a href="index.php?halaman=tentang"><i class="fa fa-briefcase"></i>Master Tentang</a>
					</li>
					<li>
						<a href="index.php?halaman=penumpang"><i class="fa fa-briefcase"></i>Tiket Penumpang</a>
					</li>
				</ul>

			</div>

		</nav>
		<!-- konten -->
		<div id="page-wrapper">
			<div id="page-inner">
				<?php
				if (isset($_GET["halaman"])) {
					if ($_GET["halaman"] == "bis") {
						include 'bis.php';
					} elseif ($_GET["halaman"] == "logout") {
						include 'logout.php';
					} elseif ($_GET["halaman"] == "kelas") {
						include 'kelas.php';
					} elseif ($_GET["halaman"] == "kota") {
						include 'kota.php';
					} elseif ($_GET["halaman"] == "wisata") {
						include 'wisata.php';
					} elseif ($_GET["halaman"] == "tambahwisata") {
						include 'tambahwisata.php';
					} elseif ($_GET["halaman"] == "ubahwisata") {
						include 'ubahwisata.php';
					} elseif ($_GET["halaman"] == "hapuswisata") {
						include 'hapuswisata.php';
					} elseif ($_GET["halaman"] == "tambahkota") {
						include 'tambahkota.php';
					} elseif ($_GET["halaman"] == "ubahkota") {
						include 'ubahkota.php';
					} elseif ($_GET["halaman"] == "hapuskota") {
						include 'hapuskota.php';
					} elseif ($_GET["halaman"] == "tambahkelas") {
						include 'tambahkelas.php';
					} elseif ($_GET["halaman"] == "ubahkelas") {
						include 'ubahkelas.php';
					} elseif ($_GET["halaman"] == "hapuskelas") {
						include 'hapuskelas.php';
					} elseif ($_GET["halaman"] == "tambahbis") {
						include 'tambahbis.php';
					} elseif ($_GET["halaman"] == "ubahbis") {
						include 'ubahbis.php';
					} elseif ($_GET["halaman"] == "hapusbis") {
						include 'hapusbis.php';
					} elseif ($_GET["halaman"] == "tentang") {
						include 'tentang.php';
					} elseif ($_GET["halaman"] == "ubahtentang") {
						include 'ubahtentang.php';
					} elseif ($_GET["halaman"] == "hapuspenumpang") {
						include 'hapuspenumpang.php';
					} elseif ($_GET["halaman"] == "detailpenumpang") {
						include 'detailpenumpang.php';
					} elseif ($_GET["halaman"] == "tambahpenumpang") {
						include 'tambahpenumpang.php';
					} elseif ($_GET["halaman"] == "ubahpenumpang") {
						include 'ubahpenumpang.php';
					} elseif ($_GET["halaman"] == "penumpang") {
						include 'penumpang.php';
					}
				} else {
					include 'penumpang.php';
				}
				?>
			</div>
		</div>
		<!-- akhir konten -->
		<!-- /. PAGE WRAPPER  -->
	</div>
	<!-- /. WRAPPER  -->
	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->

	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- METISMENU SCRIPTS -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- MORRIS CHART SCRIPTS -->
	<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
	<script src="assets/js/morris/morris.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>


</body>

</html>