<?php
include 'koneksi.php';

// random character 5 digit
$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randomString = '';
for ($i = 0; $i < 8; $i++) { //generate kode toket 8 digit
    $index = rand(0, strlen($characters) - 1);
    $randomString .= $characters[$index];
}

$nama = $_GET['nama']; 
$no_hp = $_GET['no_hp'];
$no_identitas = $_GET['no_identitas'];
$tanggal_berangkat = $_GET['tanggal_berangkat'];
$id_kota_asal = $_GET['id_kota_asal'];
$id_kota_tujuan = $_GET['id_kota_tujuan'];
$id_kelas = $_GET['id_kelas'];
$jumlah_penumpang = $_GET['jumlah_penumpang'];
$jumlah_lansia = $_GET['jumlah_lansia'];

$kode_tiket = $randomString;
$kode_unik_bayar = random_int(11, 99);

// ambil nama kota asal
$ambilasal = $koneksi->query("SELECT nama_kota FROM master_kota WHERE id = '$id_kota_asal'");
$pecahasal = $ambilasal->fetch_assoc();
$asal = $pecahasal['nama_kota'];

// ambil nama kota tujuan
$ambiltujuan = $koneksi->query("SELECT nama_kota FROM master_kota WHERE id = '$id_kota_tujuan'");
$pecahtujuan = $ambiltujuan->fetch_assoc();
$tujuan = $pecahtujuan['nama_kota'];

// ambil harga dari kelas
$ambil = $koneksi->query("SELECT nama_kelas,harga FROM master_kelas WHERE id = '$id_kelas'");
$pecah = $ambil->fetch_assoc();
$harga = $pecah['harga'];
$kelas = $pecah['nama_kelas'];
$total_harga = $jumlah_penumpang*$harga - ($jumlah_lansia*$harga*10/100);
$total_transfer = $total_harga + $kode_unik_bayar;

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
                            <h3>Total Pembayaran : Rp. <?php echo substr((string)$total_transfer, 0, (strlen((string)$total_transfer))-2)?><span style="color:red;"><?php echo $kode_unik_bayar?></span></h3>
                            <p>Harap Perhatikan <span style="color:red">2 Digit Kode Unik</span> Pembayaran Pada Total Pembayaran Anda!</p>
                            <p>Catat Kode Tiket Anda Untuk Mencetak Tiket (<span style="color:red;">Diperuntukan tiket yang sudah lunas</span>)</p>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>Nama</div>
                                        <div>No Handphone</div>
                                        <div>No Identitas</div>
                                        <div>Tanggal Berangkat</div>
                                        <div>Asal</div>
                                        <div>Tujuan</div>
                                        <div>Kelas</div>
                                        <div>Harga</div>
                                        <div>Jumlah Penumpang</div>
                                        <div>Jumlah Lansia</div>
                                        <div>Total Harga</div>
                                        <div>Kode Tiket</div>
                                        <div>Kode Unik Bayar</div>
                                        <div>Total Yang di Transfer</div>
                                    <div class="col-sm-6"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>: <?php echo $nama?></div>
                                        <div>: <?php echo $no_hp?></div>
                                        <div>: <?php echo $no_identitas?></div>
                                        <div>: <?php echo $tanggal_berangkat?></div>
                                        <div>: <?php echo $asal?></div>
                                        <div>: <?php echo $tujuan?></div>
                                        <div>: <?php echo $kelas?></div>
                                        <div>: <?php echo $harga?></div>
                                        <div>: <?php echo $jumlah_penumpang?></div>
                                        <div>: <?php echo $jumlah_lansia?></div>
                                        <div>: Rp. <?php echo $total_harga?></div>
                                        <div>: <strong><?php echo $kode_tiket?></strong></div>
                                        <div>: <?php echo $kode_unik_bayar?></div>
                                        <div>: <strong>Rp. <?php echo $total_transfer?></strong></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="row">
                                    <div class="col-sm-7 text-center">
                                        <label>Silahkan Upload Bukti Transfer</label>
                                        <form method="post" enctype="multipart/form-data">
                                            <div style="margin-bottom: 10px;">
                                                <input type="file" class="form-control" name="bukti_bayar" required>
                                            </div>
                                            <button type="submit" name="save" class="btn btn-primary">Upload Bukti Pembayaran</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>

<?php
if (isset($_POST['save'])) {
    $namanamafoto1 = $_FILES['bukti_bayar']['name'];
    $lokasilokasifoto1 = $_FILES['bukti_bayar']['tmp_name'];
    move_uploaded_file($lokasilokasifoto1, "./admin/assets/img/" . $namanamafoto1);

    $koneksi->query("INSERT INTO tabel_penumpang 
        (nama,no_identitas,no_hp,id_kelas,id_kota_asal, id_kota_tujuan,tanggal_berangkat,jumlah_penumpang,jumlah_lansia,total_harga,kode_tiket,kode_unik_bayar,bukti_bayar,status
        )
        VALUES('$nama','$no_identitas','$no_hp','$id_kelas','$id_kota_asal','$id_kota_tujuan','$tanggal_berangkat','$jumlah_penumpang','$jumlah_lansia','$total_harga','$kode_tiket','$kode_unik_bayar','$namanamafoto1','pending')");


    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1; url=index.php?halaman=terimakasih'>";

    // echo "<pre>";
    // print_r($_FILES["foto"]);
    // echo "</pre>";
}
?>



    </div>
    <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->

    <?php include 'index_js.php'; ?>

</body>

</html>