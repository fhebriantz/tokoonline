<?php
$datakota = array();

$ambil = $koneksi->query("SELECT * FROM master_kota");
while ($tiap = $ambil->fetch_assoc()) {
    $datakota[] = $tiap;
}

echo "<pre>";
print_r($datakota);
echo "</pre>";
?>

<h2>tambah wisata</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>kota</label>
        <select class="form-control" name="id_kota">
            <option value="">Pilih kota</option>
            <?php foreach ($datakota as $key => $value) : ?>
                <option value="<?php echo $value["id"] ?>"><?php echo $value["nama_kota"] ?></option>
            <?php endforeach ?>

        </select>
    </div>
    <div class="form-group">
        <label>nama wisata</label>
        <input type="text" class="form-control" name="nama_wisata">
    </div>
    <div class="form-group">
        <label>deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>video url</label>
        <input type="text" class="form-control" name="video_url">
    </div>
    <div class="form-group">
        <label>Foto Wisata 1</label>
        <div style="margin-bottom: 10px;">
            <input type="file" class="form-control" name="foto_wisata_1">
        </div>
    </div>
    <div class="form-group">
        <label>Foto Wisata 2</label>
        <div style="margin-bottom: 10px;">
            <input type="file" class="form-control" name="foto_wisata_2">
        </div>
    </div>
    <div class="form-group">
        <label>Foto Wisata 3</label>
        <div style="margin-bottom: 10px;">
            <input type="file" class="form-control" name="foto_wisata_3">
        </div>
    </div>

    <button class="btn btn-primary" name="save">simpan</button>
</form>
<?php
if (isset($_POST['save'])) {
    $namanamafoto1 = $_FILES['foto_wisata_1']['name'];
    $lokasilokasifoto1 = $_FILES['foto_wisata_1']['tmp_name'];
    move_uploaded_file($lokasilokasifoto1, "./assets/img/" . $namanamafoto1);

    $namanamafoto2 = $_FILES['foto_wisata_2']['name'];
    $lokasilokasifoto2 = $_FILES['foto_wisata_2']['tmp_name'];
    move_uploaded_file($lokasilokasifoto2, "./assets/img/" . $namanamafoto2);

    $namanamafoto3 = $_FILES['foto_wisata_3']['name'];
    $lokasilokasifoto3 = $_FILES['foto_wisata_3']['tmp_name'];
    move_uploaded_file($lokasilokasifoto3, "./assets/img/" . $namanamafoto3);


    $koneksi->query("INSERT INTO master_wisata 
        (nama_wisata,id_kota,deskripsi,foto_wisata_1,foto_wisata_2,foto_wisata_3, video_url)
        VALUES('$_POST[nama_wisata]','$_POST[id_kota]','$_POST[deskripsi]','$namanamafoto1','$namanamafoto2','$namanamafoto3','$_POST[video_url]')");


    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1; url=index.php?halaman=wisata'>";

    // echo "<pre>";
    // print_r($_FILES["foto"]);
    // echo "</pre>";
}
?>