<h2>Ubah wisata</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM wisata WHERE id_wisata= '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<?php
$datakategori = array();

$ambil = $koneksi->query("SELECT * FROM kategori");
while ($tiap = $ambil->fetch_assoc()) {
    $datakategori[] = $tiap;
}

echo "<pre>";
print_r($datakategori);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>kategori</label>
        <select class="form-control" name="id_kategori">
            <option value="">Pilih Kategori</option>
            <?php foreach ($datakategori as $key => $value) : ?>
                <option value="<?php echo $value["id_kategori"] ?>" <?php if ($pecah["id_kategori"] == $value["id_kategori"]) {
                                                                        echo "selected";
                                                                    } ?>>
                    <?php echo $value["nama_kategori"] ?>

                </option>
            <?php endforeach ?>

        </select>
    </div>
    <div class="form-group">
        <label>Nama wisata</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_wisata'] ?>">
    </div>
    <div class="form-group">
        <label>Harga Rp</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_wisata'] ?>">
    </div>
    <div class="form-group">
        <label>Berat (Gr)</label>
        <input type="number" name="berat" class="form-control" value="<?php echo $pecah['berat_wisata'] ?>">
    </div>
    <div class="form-group">
        <img src="../foto_wisata/<?php echo $pecah['foto_wisata'] ?>" width="100">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="10">
            <?php echo $pecah['deskripsi_wisata']; ?>
        </textarea>
    </div>
    <div class="form-group">
        <label>Stok</label>
        <input type="number" class="form-control" name="stok" value="<?php echo $pecah['stok_wisata'] ?>">
    </div>
    <button class=" btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    // jk foto di rubah
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../foto_wisata/$namafoto");

        $koneksi->query("UPDATE wisata SET nama_wisata='$_POST[nama]',
            harga_wisata = '$_POST[harga]', berat_wisata='$_POST[berat]',
            foto_wisata='$namafoto',deskripsi_wisata='$_POST[deskripsi],stok_wisata='$_POST[stok]',id_kategori='$_POST[id_kategori]'
            WHERE id_wisata='$_GET[id]' ");
    } else {
        $koneksi->query("UPDATE wisata SET nama_wisata='$_POST[nama]',
            harga_wisata='$_POST[harga]', berat_wisata='$_POST[berat]',
            deskripsi_wisata='$_POST[deskripsi]',stok_wisata='$_POST[stok]',id_kategori='$_POST[id_kategori]'
            WHERE id_wisata='$_GET[id]'");
    }
    echo "<script>alert('data wisata telah diubah');</script>";
    echo "<script>location='index.php?halaman=wisata';</script>";
}


?>