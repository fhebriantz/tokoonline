<h2>Tambah Kelas</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama kelas</label>
        <input type="text" class="form-control" name="nama_kelas">
    </div>

    <div class="form-group">
        <label>Harga</label>
        <input type="number" class="form-control" name="harga">
    </div>

    <button class="btn btn-primary" name="save">simpan</button>
</form>
<?php
if (isset($_POST['save'])) {


    $koneksi->query("INSERT INTO master_kelas 
        (nama_kelas,harga)
        VALUES('$_POST[nama_kelas]','$_POST[harga]')");


    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1; url=index.php?halaman=kelas'>";

    // echo "<pre>";
    // print_r($_FILES["foto"]);
    // echo "</pre>";
}
?>