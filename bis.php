<?php
$semuadata = array();
$ambil = $koneksi->query("SELECT *,master_bis.id AS id_bis FROM master_bis 
LEFT JOIN master_kelas ON master_bis.id_kelas=master_kelas.id");
while ($tiap = $ambil->fetch_assoc()) {
    $semuadata[] = $tiap;
}
// echo "<pre>";
// print_r($semuadata);
// echo "</pre>";
?>
<?php include 'formpemesanan.php';?>
<div id="fh5co-tours" class="fh5co-section-gray">
	<div class="container"><div class="row">
		<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
			<h3>Tipe Bis</h3>
			<p>Ada beberapa tipe bis yang kami miliki, anda bisa memi</p>
		</div>
	</div>
	<div class="row row-bottom-padded-md">
	<?php foreach ($semuadata as $key => $value) : ?>
		<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
            <div href="#"><img src="./admin/assets/img/<?php echo $value['foto_bis_1']; ?>" alt="" class="img-responsive">
                <div class="desc">
                    <span></span>
                    <h3><?php echo $value["nama_kelas"] ?></h3>
                    <span class="price">Rp <?php echo $value["harga"] ?>,-</span>
                    <a class="btn btn-primary btn-outline" href="#">Beli Tiket Sekarang <i class="icon-arrow-right22"></i></a>
                </div>
            </div>
        </div>

        <?php endforeach ?>
	</div>

</div>