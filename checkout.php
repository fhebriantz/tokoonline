<?php
include 'koneksi.php';

$datakota = array();
$kota = $koneksi->query("SELECT * FROM master_kota");
while ($tiap = $kota->fetch_assoc()) {
    $datakota[] = $tiap;
}
$datakelas = array();
$kelas = $koneksi->query("SELECT * FROM master_kelas");
while ($tiap = $kelas->fetch_assoc()) {
    $datakelas[] = $tiap;
}


$nama = $_GET['nama'];
$no_hp = $_GET['no_hp'];
$no_identitas = $_GET['no_identitas'];
$tanggal_berangkat = date("Y-m-d", strtotime($_GET['tanggal_berangkat']));
$id_kota_asal = $_GET['id_kota_asal'];
$id_kota_tujuan = $_GET['id_kota_tujuan'];
$id_kelas = $_GET['id_kelas'];
$jumlah_penumpang = $_GET['jumlah_penumpang'];


// echo "<pre>";
// print_r(date("Y-m-d", strtotime($tanggal_berangkat)));
// echo "</pre>";
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <h3>Pastikan Data Sudah Benar</h3>
                            <p>Spesial Bulan Maret Usia > 60 Tahun Discount 10%</p>
                        </div>
                    </div>
                    <div class="row">
                        <form action="uploadbukti.php">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Nama Penumpang</label>
                                        <input type="text" class="form-control" value="<?php echo $nama; ?>" name="nama">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>No Handphone</label>
                                        <input type="text" class="form-control" value="<?php echo $no_hp; ?>" name="no_hp">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>No Identitas</label>
                                        <input type="number" class="form-control" value="<?php echo $no_identitas; ?>" name="no_identitas">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Tanggal Berangkat</label>
                                        <input type="text" class="form-control" value="<?php echo $tanggal_berangkat; ?>" disabled>
                                        <input type="text" value="<?php echo $tanggal_berangkat?>" name="tanggal_berangkat" hidden>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Kota Asal</label>
                                        <select class="form-control" name="id_kota_asal">
                                            <option value="">Pilih Kota</option>
                                            <?php foreach ($datakota as $key => $value) : ?>
                                                <option value="<?php echo $value["id"] ?>" <?php if ($id_kota_asal == $value["id"]) {
                                                                echo "selected";
                                                            } ?>><?php echo $value["nama_kota"] ?></option>
                                            <?php endforeach ?>

                                        </select>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Kota Tujuan</label>
                                        <select class="form-control" name="id_kota_tujuan">
                                            <option value="">Pilih Kota</option>
                                            <?php foreach ($datakota as $key => $value) : ?>
                                                <option value="<?php echo $value["id"] ?>" <?php if ($id_kota_tujuan == $value["id"]) {
                                                                echo "selected";
                                                            } ?>><?php echo $value["nama_kota"] ?></option>
                                            <?php endforeach ?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Kelas</label>
                                        <select class="form-control" name="id_kelas">
                                            <option value="">Pilih Kelas</option>
                                            <?php foreach ($datakelas as $key => $value) : ?>
                                                <option value="<?php echo $value["id"] ?>" <?php if ($id_kelas == $value["id"]) {
                                                                echo "selected";
                                                            } ?>><?php echo $value["nama_kelas"] ?></option>
                                            <?php endforeach ?>

                                        </select>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Jumlah Penumpang</label>
                                        <input type="number" class="form-control" value="<?php echo $jumlah_penumpang?>" disabled>
                                        <input type="number" value="<?php echo $jumlah_penumpang?>" name="jumlah_penumpang" hidden>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Jumlah Lansia (Usia > 60 Tahun)</label>
                                        
                                        <select class="form-control" name="jumlah_lansia" required>
                                            <option value="">Pilih Jumlah Lansia</option>
                                            <?php for ($x = 0; $x <= $jumlah_penumpang; $x++) {
                                                echo "<option value='$x'>$x</option>";
                                            }?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <br>
                                        <button type="submit" style="width=100%" class="btn btn-primary">Cek Total Harga</button>
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