<?php
$ambil = $koneksi->query("SELECT * FROM wisata WHERE id_wisata= '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotowisata = $pecah['foto_wisata'];
if (file_exists("../foto_wisata/$fotowisata")); {
    unlink("../foto_wisata/$fotowisata");
}

$koneksi->query("DELETE FROM wisata WHERE id_wisata='$_GET[id]'");

echo "<script>alert('wisata terhapus');</script>";
echo "<script>location='index.php?halaman=wisata';</script>";
