<?php
$ambil = $koneksi->query("SELECT * FROM master_wisata WHERE id= '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotowisata1 = $pecah['foto_wisata_1'];
$fotowisata2 = $pecah['foto_wisata_2'];
$fotowisata3 = $pecah['foto_wisata_3'];
if (file_exists("./assets/img/$fotowisata1")); {
    unlink("./assets/img/$fotowisata1");
}
if (file_exists("./assets/img/$fotowisata2")); {
    unlink("./assets/img/$fotowisata2");
}

if (file_exists("./assets/img/$fotowisata3")); {
    unlink("./assets/img/$fotowisata3");
}


$koneksi->query("DELETE FROM master_wisata WHERE id='$_GET[id]'");

echo "<script>alert('wisata terhapus');</script>";
echo "<script>location='index.php?halaman=wisata';</script>";
