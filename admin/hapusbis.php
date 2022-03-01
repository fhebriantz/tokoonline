<?php
$ambil = $koneksi->query("SELECT * FROM master_bis WHERE id= '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotobis1 = $pecah['foto_bis_1'];
$fotobis2 = $pecah['foto_bis_2'];
if (file_exists("./assets/img/$fotobis1")); {
    unlink("./assets/img/$fotobis1");
}
if (file_exists("./assets/img/$fotobis2")); {
    unlink("./assets/img/$fotobis2");
}



$koneksi->query("DELETE FROM master_bis WHERE id='$_GET[id]'");

echo "<script>alert('bis terhapus');</script>";
echo "<script>location='index.php?halaman=bis';</script>";
