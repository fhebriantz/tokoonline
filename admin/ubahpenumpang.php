<?php
$koneksi->query("UPDATE tabel_penumpang set status = 'lunas' WHERE id = $_GET[id]");

    echo "<script>alert('status tiket telah diubah');</script>";
    echo "<script>location='index.php?halaman=penumpang';</script>";

    // echo "<pre>";
    // print_r($_FILES["foto"]);
    // echo "</pre>";
?>