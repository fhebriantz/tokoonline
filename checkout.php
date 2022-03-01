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
                <div class="container">
                    <div class="row">
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
                                        <label>Nama Penumpang</label>
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>No Identitas</label>
                                        <input type="number" class="form-control" name="no_identitas">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>No Handphone</label>
                                        <input type="text" class="form-control" name="no_hp">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Kota Asal</label>
                                        <select class="form-control" name="id_kota_asal">
                                            <option value="">Pilih Kota</option>
                                            <?php foreach ($datakota as $key => $value) : ?>
                                                <option value="<?php echo $value["id"] ?>"><?php echo $value["nama_kota"] ?></option>
                                            <?php endforeach ?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Kota Tujuan</label>
                                        <select class="form-control" name="id_kota_tujuan">
                                            <option value="">Pilih Kota</option>
                                            <?php foreach ($datakota as $key => $value) : ?>
                                                <option value="<?php echo $value["id"] ?>"><?php echo $value["nama_kota"] ?></option>
                                            <?php endforeach ?>

                                        </select>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Kelas</label>
                                        <select class="form-control" name="id_kelas">
                                            <option value="">Pilih Kelas</option>
                                            <?php foreach ($datakelas as $key => $value) : ?>
                                                <option value="<?php echo $value["id"] ?>"><?php echo $value["nama_kelas"] ?></option>
                                            <?php endforeach ?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Tanggal Berangkat</label>
                                        <input type="date" class="form-control" name="tanggal_berangkat">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Jumlah Penumpang</label>
                                        <input type="number" class="form-control" name="jumlah_penumpang">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Jumlah Lansia</label>
                                        <input type="number" class="form-control" name="jumlah_lansia">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Total Harga</label>
                                        <input type="number" class="form-control" name="total_harga">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Kode Tiket</label>
                                        <input type="text" class="form-control" name="kode_tiket">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Kode Unik Bayar</label>
                                        <input type="text" class="form-control" name="kode_unik_bayar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="lunas">Lunas</option>
                                            <option value="pending">Pending</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Bukti Bayar</label>
                                        <div style="margin-bottom: 10px;">
                                            <input type="file" class="form-control" name="bukti_bayar">
                                        </div>
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