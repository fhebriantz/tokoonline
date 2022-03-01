<?php
$ambil = $koneksi->query("SELECT * FROM master_kota WHERE id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();


?>
<h2>Ubah Kota</h2>


<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Kota</label>
        <input type="text" name="nama_kota" class="form-control" value="<?php echo $pecah['nama_kota'] ?>">
    </div>
    <button class=" btn btn-primary" name="ubah">Ubah</button>
</form>


<?php
if (isset($_POST['ubah'])) {
    $koneksi->query("UPDATE master_kota set 
    nama_kota = '$_POST[nama_kota]'
        WHERE id = $_GET[id]");


    echo "<script>alert('data wisata telah diubah');</script>";
    echo "<script>location='index.php?halaman=kota';</script>";

    // echo "<pre>";
    // print_r($_FILES["foto"]);
    // echo "</pre>";
}
?>