<h1>Detail Penumpang</h1>
<?php
$ambil = $koneksi->query("SELECT tabel_penumpang.*,master_kelas.nama_kelas, master_kelas.id as _id_kelas, master_kelas.harga, asal.id as _id_asal, asal.nama_kota as nama_kota_asal, tujuan.id as _id_tujuan, tujuan.nama_kota as nama_kota_tujuan FROM tabel_penumpang 
LEFT JOIN master_kelas ON tabel_penumpang.id_kelas=master_kelas.id
LEFT JOIN master_kota as asal ON tabel_penumpang.id_kota_asal=asal.id
LEFT JOIN master_kota as tujuan ON tabel_penumpang.id_kota_tujuan=tujuan.id WHERE tabel_penumpang.id = '$_GET[id]'");
$detail = $ambil->fetch_assoc();
// echo "<pre>";
// print_r($semuadata);
// echo "</pre>";
?>

<div class="row">
    <div class="col-sm-6">
        <div>Nama</div>
        <div>No Handphone</div>
        <div>No Identitas</div>
        <div>Tanggal Berangkat</div>
        <div>Asal</div>
        <div>Tujuan</div>
        <div>Kelas</div>
        <div>Harga</div>
        <div>Jumlah Penumpang</div>
        <div>Jumlah Lansia</div>
        <div>Total Harga</div>
        <div>Kode Tiket</div>
        <div>Kode Unik Bayar</div>
        <div>Total Yang di Transfer</div>
        <div>Status</div>
    </div>
    <div class="col-sm-6">
        <div>: <?php echo $detail['nama']?></div>
        <div>: <?php echo $detail['no_hp']?></div>
        <div>: <?php echo $detail['no_identitas']?></div>
        <div>: <?php echo $detail['tanggal_berangkat']?></div>
        <div>: <?php echo $detail['nama_kota_asal']?></div>
        <div>: <?php echo $detail['nama_kota_tujuan']?></div>
        <div>: <?php echo $detail['nama_kelas']?></div>
        <div>: <?php echo $detail['harga']?></div>
        <div>: <?php echo $detail['jumlah_penumpang']?></div>
        <div>: <?php echo $detail['jumlah_lansia']?></div>
        <div>: Rp. <?php echo $detail['total_harga']?></div>
        <div>: <strong><?php echo $detail['kode_tiket']?></strong></div>
        <div>: <?php echo $detail['kode_unik_bayar']?></div>
        <div>: <strong>Rp. <?php echo substr((string)$detail['total_harga'], 0, (strlen((string)$detail['total_harga']))-2)?><span style="color:red;"><?php echo $detail['kode_unik_bayar']?></span></strong></div>
        <div>: <?php echo $detail['status']?></div>
    </div>
    <div class="col-sm-6">
        <h2>Bukti Pembayaran</h2>
        <div class="form-group">
        <div><img src="./assets/img/<?php echo $detail['bukti_bayar'] ?>" style="height: auto; width:300px; margin-bottom:20px;"></div>
        <div><a href="index.php?halaman=ubahpenumpang&id=<?php echo $_GET['id']; ?>" class="btn btn-success" onclick="clicked(event)" ><i class="glyphicon glyphicon-edit"></i>Ubah Ke Lunas</a></div>
    </div>
    </div>
</div>
<div class="row">
    
</div>

<script>
function clicked(e)
{
    if(!confirm('Tiket ubah ke lunas?')) {
        e.preventDefault();
    }
}
</script>