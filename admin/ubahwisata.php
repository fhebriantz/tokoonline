<h2>Ubah wisata</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM master_wisata WHERE id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "</pre>";
?>

<?php
$datakota = array();

$ambil = $koneksi->query("SELECT * FROM master_kota");
while ($tiap = $ambil->fetch_assoc()) {
    $datakota[] = $tiap;
}

// echo "<pre>";
// print_r($datakota);
// echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Kota</label>
        <select class="form-control" name="id_kota">
            <option value="">Pilih Kota</option>
            <?php foreach ($datakota as $key => $value) : ?>
                <option value="<?php echo $value["id"] ?>" <?php if ($pecah["id_kota"] == $value["id"]) {
                                                                echo "selected";
                                                            } ?>>
                    <?php echo $value["nama_kota"] ?>

                </option>
            <?php endforeach ?>

        </select>
    </div>
    <div class="form-group">
        <label>Nama wisata</label>
        <input type="text" name="nama_wisata" class="form-control" value="<?php echo $pecah['nama_wisata'] ?>">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="10">
            <?php echo $pecah['deskripsi']; ?>
        </textarea>
    </div>
    <div class="form-group">
        <label>Foto Wisata 1</label>
        <div><img src="./assets/img/<?php echo $pecah['foto_wisata_1'] ?>" style="height: 120px; width:auto"></div>
        <input type="file" name="foto_wisata_1" class="form-control">
    </div>
    <div class="form-group">
        <label>Foto Wisata 2</label>
        <div><img src="./assets/img/<?php echo $pecah['foto_wisata_2'] ?>" style="height: 120px; width:auto"></div>
        <input type="file" name="foto_wisata_2" class="form-control">
    </div>
    <div class="form-group">
        <label>Foto Wisata 3</label>
        <div><img src="./assets/img/<?php echo $pecah['foto_wisata_3'] ?>" style="height: 120px; width:auto"></div>
        <input type="file" name="foto_wisata_3" class="form-control">
    </div>
    <div class="form-group">
        <label>Video Url</label>
        <input type="text" name="video_url" class="form-control" value="<?php echo $pecah['video_url'] ?>">
    </div>
    <button class=" btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    $namanamafoto1 = $_FILES['foto_wisata_1']['name'];
    if (($_FILES['foto_wisata_1']['name']) == null || ($_FILES['foto_wisata_1']['name']) == '') {
        $namanamafoto1 = $pecah['foto_wisata_1'];
    }
    $lokasilokasifoto1 = $_FILES['foto_wisata_1']['tmp_name'];
    move_uploaded_file($lokasilokasifoto1, "./assets/img/" . $namanamafoto1);

    $namanamafoto2 = $_FILES['foto_wisata_2']['name'];
    if (($_FILES['foto_wisata_2']['name']) == null || ($_FILES['foto_wisata_2']['name']) == '') {
        $namanamafoto2 = $pecah['foto_wisata_2'];
    }
    $lokasilokasifoto2 = $_FILES['foto_wisata_2']['tmp_name'];
    move_uploaded_file($lokasilokasifoto2, "./assets/img/" . $namanamafoto2);

    $namanamafoto3 = $_FILES['foto_wisata_3']['name'];
    if (($_FILES['foto_wisata_3']['name']) == null || ($_FILES['foto_wisata_3']['name']) == '') {
        $namanamafoto3 = $pecah['foto_wisata_3'];
    }
    $lokasilokasifoto3 = $_FILES['foto_wisata_3']['tmp_name'];
    move_uploaded_file($lokasilokasifoto3, "./assets/img/" . $namanamafoto3);


    $koneksi->query("UPDATE master_wisata set 
    nama_wisata = '$_POST[nama_wisata]', id_kota = '$_POST[id_kota]',deskripsi = '$_POST[deskripsi]',foto_wisata_1 = '$namanamafoto1',foto_wisata_2 = '$namanamafoto2',foto_wisata_3 = '$namanamafoto3',video_url = '$_POST[video_url]'
        WHERE id = $_GET[id]");


    echo "<script>alert('data wisata telah diubah');</script>";
    echo "<script>location='index.php?halaman=wisata';</script>";

    // echo "<pre>";
    // print_r($_FILES["foto"]);
    // echo "</pre>";
}
?>