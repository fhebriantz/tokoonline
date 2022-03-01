<?php
include 'koneksi.php';

$nama = $_GET['nama'];
$no_hp = $_GET['no_hp'];
$no_identitas = $_GET['no_identitas'];
$tanggal_berangkat = $_GET['tanggal_berangkat'];
$id_kota_asal = $_GET['id_kota_asal'];
$id_kota_tujuan = $_GET['id_kota_tujuan'];
$id_kelas = $_GET['id_kelas'];


?>

<html class="no-js">


<head>
    <?php include 'index_head.php'; ?>
</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<?php include 'navbar.php'; ?>
                <div id="fh5co-tours" class="fh5co-section-gray">
                    <div class="container"><div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <h3>Lengkapi Data Pembelian</h3>
                            <p>Harap Perhatikan <span style="color:red">3 Digit Kode Unik</span> Pembayaran Pada Total Pembayaran Anda!</p>
                        </div>
                    </div>
                    <div class="row">
                        <form>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
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