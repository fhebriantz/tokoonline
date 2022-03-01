<?php
$ambil = $koneksi->query("SELECT * FROM master_kelas WHERE id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();


?>
<h2>Ubah kelas</h2>


<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama kelas</label>
        <input type="text" name="nama_kelas" class="form-control" value="<?php echo $pecah['nama_kelas'] ?>">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga'] ?>">
    </div>
    <button class=" btn btn-primary" name="ubah">Ubah</button>
</form>


<?php
if (isset($_POST['ubah'])) {
    $koneksi->query("UPDATE master_kelas set 
    nama_kelas = '$_POST[nama_kelas]', harga = '$_POST[harga]'
        WHERE id = $_GET[id]");


    echo "<script>alert('data kelas telah diubah');</script>";
    echo "<script>location='index.php?halaman=kelas';</script>";

    // echo "<pre>";
    // print_r($_FILES["foto"]);
    // echo "</pre>";
}
?>