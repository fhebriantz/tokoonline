<h3>Data Wisata</h3>
<hr>

<?php
$semuadata = array();
$ambil = $koneksi->query("SELECT * FROM master_wisata 
LEFT JOIN master_kota ON master_wisata.id_kota=master_kota.id");
while ($tiap = $ambil->fetch_assoc()) {
    $semuadata[] = $tiap;
}
// echo "<pre>";
// print_r($semuadata);
// echo "</pre>";
?>

<table class="table table-bordered table_wisata">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Wisata</th>
            <th>Kota</th>
            <th>Deskripsi</th>
            <th>Foto Wisata 1</th>
            <th>Foto Wisata 2</th>
            <th>Foto Wisata 3</th>
            <th>Video</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($semuadata as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $value["nama_wisata"] ?></td>
                <td><?php echo $value["nama_kota"] ?></td>
                <td><?php echo $value["deskripsi"] ?></td>
                <td>
                    <img src="./assets/img/<?php echo $value['foto_wisata_1']; ?>" width="100px">
                </td>
                <td>
                    <img src="./assets/img/<?php echo $value['foto_wisata_2']; ?>" width="100px">
                </td>
                <td>
                    <img src="./assets/img/<?php echo $value['foto_wisata_3']; ?>" width="100px">
                </td>
                <td><iframe src="<?php echo $value["video_url"] ?>" width="200" height="120"></iframe></td>
                <td>
                    <a href="index.php?halaman=hapuswisata&id=<?php echo $value['id']; ?>" class=" btn-danger btn" onclick="return confirm('yakin hapus?')"><i class="glyphicon glyphicon-trash"></i> hapus</a>
                    <a href="index.php?halaman=ubahwisata&id=<?php echo $value['id']; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i>ubah</a>
                    <a href="index.php?halaman=detailwisata&id=<?php echo $value['id']; ?>" class="btn btn-info"><i class="glyphicon glyphicon-eye"></i> detail</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>

</table>

<a href="index.php?halaman=tambahwisata" class="btn btn-primary">tambah data</a>