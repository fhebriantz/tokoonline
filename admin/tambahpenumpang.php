<?php
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

// echo "<pre>";
// print_r($datakota);
// echo "</pre>";
?>

<h2>tambah penumpang</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>nama penumpang</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>no identitas</label>
        <input type="number" class="form-control" name="no_identitas">
    </div>
    <div class="form-group">
        <label>no hp</label>
        <input type="text" class="form-control" name="no_hp">
    </div>

    <div class="form-group">
        <label>kota asal</label>
        <select class="form-control" name="id_kota_asal">
            <option value="">Pilih kota</option>
            <?php foreach ($datakota as $key => $value) : ?>
                <option value="<?php echo $value["id"] ?>"><?php echo $value["nama_kota"] ?></option>
            <?php endforeach ?>

        </select>
    </div>
    <div class="form-group">
        <label>kota tujuan</label>
        <select class="form-control" name="id_kota_tujuan">
            <option value="">Pilih kota</option>
            <?php foreach ($datakota as $key => $value) : ?>
                <option value="<?php echo $value["id"] ?>"><?php echo $value["nama_kota"] ?></option>
            <?php endforeach ?>

        </select>
    </div>
    <div class="form-group">
        <label>kelas</label>
        <select class="form-control" name="id_kelas">
            <option value="">Pilih kelas</option>
            <?php foreach ($datakelas as $key => $value) : ?>
                <option value="<?php echo $value["id"] ?>"><?php echo $value["nama_kelas"] ?></option>
            <?php endforeach ?>

        </select>
    </div>

    <div class="form-group">
        <label>tanggal berangkat</label>
        <input type="date" class="form-control" name="tanggal_berangkat">
    </div>
    <div class="form-group">
        <label>jumlah penumpang</label>
        <input type="number" class="form-control" name="jumlah_penumpang">
    </div>
    <div class="form-group">
        <label>jumlah lansia</label>
        <input type="number" class="form-control" name="jumlah_lansia">
    </div>
    <div class="form-group">
        <label>total harga</label>
        <input type="number" class="form-control" name="total_harga">
    </div>
    <div class="form-group">
        <label>kode tiket</label>
        <input type="text" class="form-control" name="kode_tiket">
    </div>
    <div class="form-group">
        <label>kode unik bayar</label>
        <input type="text" class="form-control" name="kode_unik_bayar">
    </div>
    <div class="form-group">
        <label>status</label>
        <select name="status" class="form-control">
            <option value="lunas">lunas</option>
            <option value="pending">pending</option>
        </select>
    </div>
    <div class="form-group">
        <label>bukti bayar</label>
        <div style="margin-bottom: 10px;">
            <input type="file" class="form-control" name="bukti_bayar">
        </div>
    </div>



    <button class="btn btn-primary" name="save">simpan</button>
</form>
<?php
if (isset($_POST['save'])) {
    $namanamafoto1 = $_FILES['bukti_bayar']['name'];
    $lokasilokasifoto1 = $_FILES['bukti_bayar']['tmp_name'];
    move_uploaded_file($lokasilokasifoto1, "./assets/img/" . $namanamafoto1);


    $koneksi->query("INSERT INTO tabel_penumpang 
        (nama,no_identitas,no_hp,id_kelas,id_kota_asal, id_kota_tujuan,tanggal_berangkat,jumlah_penumpang,jumlah_lansia,total_harga,kode_tiket,kode_unik_bayar,bukti_bayar,status
        )
        VALUES('$_POST[nama]','$_POST[no_identitas]','$_POST[no_hp]','$_POST[id_kelas]','$_POST[id_kota_asal]','$_POST[id_kota_tujuan]','$_POST[tanggal_berangkat]','$_POST[jumlah_penumpang]','$_POST[jumlah_lansia]','$_POST[total_harga]','$_POST[kode_tiket]','$_POST[kode_unik_bayar]','$namanamafoto1','$_POST[status]')");


    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1; url=index.php?halaman=penumpang'>";

    // echo "<pre>";
    // print_r($_FILES["foto"]);
    // echo "</pre>";
}
?>