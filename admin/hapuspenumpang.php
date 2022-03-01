<?php
$ambil = $koneksi->query("SELECT * FROM tabel_penumpang WHERE id= '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$penumpang = $pecah['bukti_bayar'];
if (file_exists("./assets/img/$penumpang")); {
    unlink("./assets/img/$penumpang");
}



$koneksi->query("DELETE FROM tabel_penumpang WHERE id='$_GET[id]'");

echo "<script>alert('tiket terhapus');</script>";
echo "<script>location='index.php?halaman=penumpang';</script>";
