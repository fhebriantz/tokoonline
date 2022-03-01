<h3>Data penumpang</h3>
<hr>

<?php
$semuadata = array();
$ambil = $koneksi->query("SELECT tabel_penumpang.*,master_kelas.nama_kelas, master_kelas.id as _id_kelas, master_kelas.harga, asal.id as _id_asal, asal.nama_kota as nama_kota_asal, tujuan.id as _id_tujuan, tujuan.nama_kota as nama_kota_tujuan FROM tabel_penumpang 
LEFT JOIN master_kelas ON tabel_penumpang.id_kelas=master_kelas.id
LEFT JOIN master_kota as asal ON tabel_penumpang.id_kota_asal=asal.id
LEFT JOIN master_kota as tujuan ON tabel_penumpang.id_kota_tujuan=tujuan.id");
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
            <th>Nama</th>
            <th>Kelas</th>
            <th>Kota Asal</th>
            <th>Kota Tujuan</th>
            <th>Tanggal Berangkat</th>
            <th>Kode Tiket</th>
            <th>Status</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($semuadata as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $value["nama"] ?></td>
                <td><?php echo $value["nama_kelas"] ?></td>
                <td><?php echo $value["nama_kota_asal"] ?></td>
                <td><?php echo $value["nama_kota_tujuan"] ?></td>
                <td><?php echo $value["tanggal_berangkat"] ?></td>
                <td><?php echo $value["kode_tiket"] ?></td>
                <td><?php echo $value["status"] ?></td>

                <td>
                    <a href="index.php?halaman=hapuspenumpang&id=<?php echo $value['id']; ?>" class=" btn-danger btn" onclick="return confirm('yakin hapus?')"><i class="glyphicon glyphicon-trash"></i> hapus</a>
                    <a href="index.php?halaman=ubahpenumpang&id=<?php echo $value['id']; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i>ubah</a>
                    <a href="index.php?halaman=detailpenumpang&id=<?php echo $pecah['id']; ?>" class="btn btn-info"><i class="glyphicon glyphicon-eye"></i> detail</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>

</table>

<a href="index.php?halaman=tambahpenumpang" class="btn btn-primary">tambah data</a>