<?php

$id_foto = $_GET["idfoto"];
$id_wisata = $_GET["idwisata"];

//ambil dulu datanya
$ambilfoto = $koneksi->query("SELECT * FROM wisata_foto WHERE id_wisata_foto='$id_foto'");
$detailfoto = $ambilfoto->fetch_assoc();

$namafilefoto = $detailfoto["nama_wisata_foto"];
//hapus file foto dari folder
unlink("../foto_wisata/" . $namafilefoto);


// menghapus data di mysql
$koneksi->query("DELETE FROM wisata_foto WHERE id_wisata_foto='$id_foto'");

echo "<script>alert('foto wisata berhasil terhapus');</script>";
echo "<script>location='index.php?halaman=detailwisata&id=$id_wisata';</script>";
