<h2>Data Pembayaran</h2>

<?php
// Mendapatkan id_pembelian dari url
$id_pembelian = $_GET['id'];

// Mengambil data pembayaran berdasarkan id_pembelian
$ambil = $koneksi->query("SELECT * FROM pembayaran WHERE id_pembelian='$id_pembelian'");
$detail = $ambil->fetch_assoc();

$resipeng = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$id_pembelian'");
$detailresi = $resipeng->fetch_assoc();
?>


<div class="row">
    <div class="col-md-6">
        <table class="table">
            <tr>
                <th>Nama</th>
                <td><?= $detail['nama']; ?></td>
            </tr>
            <tr>
                <th>Bank</th>
                <td><?= $detail['bank']; ?></td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td>Rp. <?= number_format($detail['jumlah']); ?>,-</td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td><?= $detail['tanggal']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-md-6">
        <img src="../bukti_pembayaran/<?= $detail['bukti']; ?>" alt="" class="img-responsive">
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Status</label>
                <select name="status" id="" class="form-control">
                    <option value="">Pilih Status</option>
                    <option <?php
                            if ($detailresi['status_pembelian'] == "Lunas - Perlu Dikirim") {
                                echo 'selected';
                            } ?> value="Lunas - Perlu Dikirim">Lunas - Perlu Dikirim</option>
                    <option <?php
                            if ($detailresi['status_pembelian'] == "Lunas - Barang Dikirim") {
                                echo 'selected';
                            } ?> value="Lunas - Barang Dikirim">Lunas - Barang Dikirim</option>
                    <option <?php
                            if ($detailresi['status_pembelian'] == "batal") {
                                echo 'selected';
                            } ?> value="batal">Batal</option>
                </select>
            </div>
            <div class="form-group">
                <Label>No Resi Pengiriman</Label>
                <?php
                if (empty($detailresi['resi_pengiriman']) or !isset($detailresi['resi_pengiriman'])) {
                    echo '<input type="text" class="form-control" name="resi"  value="' . $detailresi['resi_pengiriman'] . '">';
                } else {
                    echo '<input type="text" class="form-control" name="resi"  value="' . $detailresi['resi_pengiriman'] . '" disabled>';
                } ?>
            </div>
            <button class="btn btn-success" name="proses">Proses</button>
        </form>
    </div>
</div>

<?php
if (isset($_POST['proses'])) {
    $resi = $_POST['resi'];
    $status = $_POST['status'];
    $koneksi->query("UPDATE pembelian SET resi_pengiriman='$resi', status_pembelian='$status' WHERE id_pembelian='$id_pembelian'");

    echo "<script>alert('Data pembelian terupdate');</script>";
    echo "<script>location='index.php?halaman=pembelian';</script>";
}

?>