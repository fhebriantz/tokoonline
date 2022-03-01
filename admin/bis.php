<h3>Data Bis</h3>
<hr>

<?php
$semuadata = array();
$ambil = $koneksi->query("SELECT *,master_bis.id AS id_bis FROM master_bis 
LEFT JOIN master_kelas ON master_bis.id_kelas=master_kelas.id");
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
            <th>Nama Bis</th>
            <th>Tipe Bis</th>
            <th>Harga</th>
            <th>kelas</th>
            <th>foto bis 1</th>
            <th>foto bis 2</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($semuadata as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $value["nama_bis"] ?></td>
                <td><?php echo $value["tipe_bis"] ?></td>
                <td><?php echo $value["harga"] ?></td>
                <td><?php echo $value["nama_kelas"] ?></td>
                <td>
                    <img src="./assets/img/<?php echo $value['foto_bis_1']; ?>" width="200px">
                </td>
                <td>
                    <img src="./assets/img/<?php echo $value['foto_bis_2']; ?>" width="200px">
                </td>
                <td>
                    <a href="index.php?halaman=ubahbis&id=<?php echo $value['id_bis']; ?>" class="btn btn-warning btn-sm">Ubah</a>
                    <a href="index.php?halaman=hapusbis&id=<?php echo $value['id_bis']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>

</table>

<a href="index.php?halaman=tambahbis" class="btn btn-default">Tambah Data</a>