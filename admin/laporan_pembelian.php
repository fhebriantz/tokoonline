<?php
$semuadata = array();
$tgl_mulai = "-";
$tgl_selesai = "-";
$status = "";
if (isset($_POST["kirim"])) {
    $tgl_mulai = $_POST["tglm"];
    $tgl_selesai = $_POST["tgls"];
    $status = $_POST["status"];
    $ambil = $koneksi->query("SELECT * FROM pembelian pm LEFT JOIN pelanggan pl ON
    pm.id_pelanggan=pl.id_pelanggan WHERE status_pembelian='$status' AND tanggal_pembelian BETWEEN '$tgl_mulai' AND '$tgl_selesai'");
    while ($pecah = $ambil->fetch_assoc()) {
        $semuadata[] = $pecah;
    }
}


// echo "<pre>";
// print_r($semuadata);
// echo "</pre>";

?>





<h2>Laporan pembelian <?php echo $tgl_mulai ?> hingga <?php echo $tgl_selesai ?></h2>
<br>

<form method="POST">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label>Tanggal Mulai</label>
                <input type="date" name="tglm" class="form-control" value="<?php echo $tgl_mulai ?>">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Tanggal Selesai</label>
                <input type="date" name="tgls" class="form-control" value="<?php echo $tgl_selesai ?>">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="">Pilih Status</option>
                    <option value="pending" <?php echo $status == "pending" ? "selected" : ""; ?>>pending</option>
                    <option value="Lunas - Barang Dikirim" <?php echo $status == "Lunas - Barang Dikirim" ? "selected" : ""; ?>>Lunas - Barang Dikirim</option>
                    <option value="batal" <?php echo $status == "batal" ? "selected" : ""; ?>>batal</option>
                </select>

            </div>
        </div>
        <div class="col-md-2">
            <label>&nbsp;</label><br>
            <button class="btn btn-primary" name="kirim">Lihat</button>
        </div>
    </div>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $total = 0; ?>
        <?php foreach ($semuadata as $key => $value) : ?>
            <?php $total += $value['total_pembelian'] ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value["nama_pelanggan"] ?></td>
                <td><?php echo date("d F Y", strtotime($value["tanggal_pembelian"])) ?></td>
                <td>Rp. <?php echo number_format($value["total_pembelian"]) ?></td>
                <td><?php echo $value["status_pembelian"] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="3">Total</th>
            <th>Rp. <?php echo number_format($total) ?></th>
        </tr>
    </tfoot>
</table>

<a href="download_laporan.php?tglm=<?php echo $tgl_mulai ?>&tgls=<?php echo $tgl_selesai ?>&status=<?php echo $status ?>">Download PDF</a>