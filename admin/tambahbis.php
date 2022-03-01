<?php
$datakelas = array();

$ambil = $koneksi->query("SELECT * FROM master_kelas");
while ($tiap = $ambil->fetch_assoc()) {
    $datakelas[] = $tiap;
}

echo "<pre>";
print_r($datakelas);
echo "</pre>";
?>

<h2>tambah bis</h2>

<form method="post" enctype="multipart/form-data">
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
        <label>nama bis</label>
        <input type="text" class="form-control" name="nama_bis">
    </div>
    <div class="form-group">
        <label>tipe bis</label>
        <input type="text" name="tipe_bis" class="form-control">
    </div>
    <div class="form-group">
        <label>Foto bis 1</label>
        <div style="margin-bottom: 10px;">
            <input type="file" class="form-control" name="foto_bis_1">
        </div>
    </div>
    <div class="form-group">
        <label>Foto bis 2</label>
        <div style="margin-bottom: 10px;">
            <input type="file" class="form-control" name="foto_bis_2">
        </div>
    </div>

    <button class="btn btn-primary" name="save">simpan</button>
</form>
<?php
if (isset($_POST['save'])) {
    $namanamafoto1 = $_FILES['foto_bis_1']['name'];
    $lokasilokasifoto1 = $_FILES['foto_bis_1']['tmp_name'];
    move_uploaded_file($lokasilokasifoto1, "./assets/img/" . $namanamafoto1);

    $namanamafoto2 = $_FILES['foto_bis_2']['name'];
    $lokasilokasifoto2 = $_FILES['foto_bis_2']['tmp_name'];
    move_uploaded_file($lokasilokasifoto2, "./assets/img/" . $namanamafoto2);

    $koneksi->query("INSERT INTO master_bis 
        (nama_bis,tipe_bis,harga,id_kelas,foto_bis_1,foto_bis_2)
        VALUES('$_POST[nama_bis]','$_POST[tipe_bis]','$_POST[id_kelas]','$namanamafoto1','$namanamafoto2')");


    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1; url=index.php?halaman=bis'>";

    // echo "<pre>";
    // print_r($_FILES["foto"]);
    // echo "</pre>";
}
?>