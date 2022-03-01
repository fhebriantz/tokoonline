<?php
$ambil = $koneksi->query("SELECT * FROM master_kelas WHERE id= '$_GET[id]'");
$ambil->fetch_assoc();


$koneksi->query("DELETE FROM master_kelas WHERE id='$_GET[id]'");

echo "<script>alert('kelas terhapus');</script>";
echo "<script>location='index.php?halaman=kelas';</script>";
