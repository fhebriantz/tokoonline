<h2>Ubah Tentang</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM master_tentang WHERE id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "</pre>";
?>


<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" value="<?php echo $pecah['judul'] ?>">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="10">
            <?php echo $pecah['deskripsi']; ?>
        </textarea>
    </div>
    <div class="form-group">
        <label>Foto tentang</label>
        <div><img src="./assets/img/<?php echo $pecah['foto_tentang'] ?>" style="height: 120px; width:auto"></div>
        <input type="file" name="foto_tentang" class="form-control">
    </div>
    <button class=" btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    $namanamafoto1 = $_FILES['foto_tentang']['name'];
    if (($_FILES['foto_tentang']['name']) == null || ($_FILES['foto_tentang']['name']) == '') {
        $namanamafoto1 = $pecah['foto_tentang'];
    }
    $lokasilokasifoto1 = $_FILES['foto_tentang']['tmp_name'];
    move_uploaded_file($lokasilokasifoto1, "./assets/img/" . $namanamafoto1);


    $koneksi->query("UPDATE master_tentang set 
    judul = '$_POST[judul]', deskripsi = '$_POST[deskripsi]',foto_tentang = '$namanamafoto1'
        WHERE id = $_GET[id]");


    echo "<script>alert('data tentang telah diubah');</script>";
    echo "<script>location='index.php?halaman=tentang';</script>";

    // echo "<pre>";
    // print_r($_FILES["foto"]);
    // echo "</pre>";
}
?>