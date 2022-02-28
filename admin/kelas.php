<h3>Data Kelas</h3>
<hr>

<?php
$semuadata = array();
$ambil = $koneksi->query("SELECT * FROM master_kelas");
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
            <th>Nama Kelas</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($semuadata as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $value["nama_kelas"] ?></td>
                <td>
                    <a href="" class="btn btn-warning btn-sm">Ubah</a>
                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>

</table>

<a href="" class="btn btn-default">Tambah Data</a>