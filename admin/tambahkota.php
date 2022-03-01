<h2>Tambah Kota</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Kota</label>
        <input type="text" class="form-control" name="nama_kota">
    </div>

    <button class="btn btn-primary" name="save">simpan</button>
</form>
<?php
if (isset($_POST['save'])) {


    $koneksi->query("INSERT INTO master_kota 
        (nama_kota)
        VALUES('$_POST[nama_kota]')");


    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1; url=index.php?halaman=kota'>";

    // echo "<pre>";
    // print_r($_FILES["foto"]);
    // echo "</pre>";
}
?>