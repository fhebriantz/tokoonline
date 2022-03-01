<?php
$ambil = $koneksi->query("SELECT * FROM master_kota WHERE id= '$_GET[id]'");
$ambil->fetch_assoc();


$koneksi->query("DELETE FROM master_kota WHERE id='$_GET[id]'");

echo "<script>alert('kota terhapus');</script>";
echo "<script>location='index.php?halaman=kota';</script>";
