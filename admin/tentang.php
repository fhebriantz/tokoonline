<h3>Data Tentang</h3>
<hr>

<?php
$semuadata = array();
$ambil = $koneksi->query("SELECT * FROM master_tentang");
while ($tiap = $ambil->fetch_assoc()) {
    $semuadata[] = $tiap;
}
// echo "<pre>";
// print_r($semuadata);
// echo "</pre>";
?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($semuadata as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $value["judul"] ?></td>
                <td><textarea name="" id="" cols="80" rows="20"><?php echo $value["deskripsi"] ?></textarea></td>
                <td>
                    <img src="./assets/img/<?php echo $value['foto_tentang']; ?>" width="200px">
                </td>
                <td>
                    <a href="index.php?halaman=ubahtentang&id=<?php echo $value['id']; ?>" class="btn btn-warning btn-sm">Ubah</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>

</table>