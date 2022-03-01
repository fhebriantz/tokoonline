<h2>Ubah wisata</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM master_bis WHERE id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "</pre>";
?>

<?php
$datakelas = array();

$ambil = $koneksi->query("SELECT * FROM master_kelas");
while ($tiap = $ambil->fetch_assoc()) {
    $datakelas[] = $tiap;
}

// echo "<pre>";
// print_r($datakota);
// echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Kelas</label>
        <select class="form-control" name="id_kelas">
            <option value="">Pilih Kelas</option>
            <?php foreach ($datakelas as $key => $value) : ?>
                <option value="<?php echo $value["id"] ?>" <?php if ($pecah["id_kelas"] == $value["id"]) {
                                                                echo "selected";
                                                            } ?>>
                    <?php echo $value["nama_kelas"] ?>

                </option>
            <?php endforeach ?>

        </select>
    </div>
    <div class="form-group">
        <label>Nama Bis</label>
        <input type="text" name="nama_bis" class="form-control" value="<?php echo $pecah['nama_bis'] ?>">
    </div>
    <div class="form-group">
        <label>Tipe Bis</label>
        <input type="text" name="tipe_bis" class="form-control" value="<?php echo $pecah['tipe_bis'] ?>">
    </div>
    <div class="form-group">
        <label>Foto Wisata 1</label>
        <div><img src="./assets/img/<?php echo $pecah['foto_bis_1'] ?>" style="height: 120px; width:auto"></div>
        <input type="file" name="foto_bis_1" class="form-control">
    </div>
    <div class="form-group">
        <label>Foto Wisata 2</label>
        <div><img src="./assets/img/<?php echo $pecah['foto_bis_2'] ?>" style="height: 120px; width:auto"></div>
        <input type="file" name="foto_bis_2" class="form-control">
    </div>
    <button class=" btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    $namanamafoto1 = $_FILES['foto_bis_1']['name'];
    if (($_FILES['foto_bis_1']['name']) == null || ($_FILES['foto_bis_1']['name']) == '') {
        $namanamafoto1 = $pecah['foto_bis_1'];
    }
    $lokasilokasifoto1 = $_FILES['foto_bis_1']['tmp_name'];
    move_uploaded_file($lokasilokasifoto1, "./assets/img/" . $namanamafoto1);

    $namanamafoto2 = $_FILES['foto_bis_2']['name'];
    if (($_FILES['foto_bis_2']['name']) == null || ($_FILES['foto_bis_2']['name']) == '') {
        $namanamafoto2 = $pecah['foto_bis_2'];
    }
    $lokasilokasifoto2 = $_FILES['foto_bis_2']['tmp_name'];
    move_uploaded_file($lokasilokasifoto2, "./assets/img/" . $namanamafoto2);


    $koneksi->query("UPDATE master_bis set 
    nama_bis = '$_POST[nama_bis]', tipe_bis = '$_POST[tipe_bis]',foto_bis_1 = '$namanamafoto1',foto_bis_2 = '$namanamafoto2',id_kelas = '$_POST[id_kelas]'
        WHERE id = $_GET[id]");


    echo "<script>alert('data bis telah diubah');</script>";
    echo "<script>location='index.php?halaman=bis';</script>";

    // echo "<pre>";
    // print_r($_FILES["foto"]);
    // echo "</pre>";
}
?>