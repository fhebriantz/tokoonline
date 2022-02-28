<?php
include '../koneksi.php';
// Require composer autoload
require_once '../vendor/autoload.php';
// Create an instance of the class:
// $mpdf = new \Mpdf\Mpdf();

// // Write some HTML code:
// $mpdf->WriteHTML('Hello World');

// // Output a PDF file directly to the browser
// $mpdf->Output("laporan.pdf", "I");


echo "<pre>";
print_r($_GET);
echo "</pre>";

$tgl_mulai = $_GET["tglm"];
$tgl_selesai = $_GET["tgls"];
$status = $_GET["status"];

$semuadata = array("status");

$ambil = $koneksi->query("SELECT * FROM pembelian pm LEFT JOIN pelanggan pl ON
    pm.id_pelanggan=pl.id_pelanggan WHERE status_pembelian='$status' AND tanggal_pembelian BETWEEN '$tgl_mulai' AND '$tgl_selesai'");
while ($pecah = $ambil->fetch_assoc()) {
    $semuadata[] = $pecah;
}

echo "<table class='table table-bordered'>";
echo "<thead>";
echo "<tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Status</th>
        </tr>";
echo "</thead>";
echo "<tbody>";
$total = 0;
foreach ($semuadata as $key => $value) :
    $total += $value['total_pembelian'];
    $nomor = $key + 1;
    echo "<tr>";
    echo "<td>" . $nomor . "</td>";
    echo "<td>" . $value["nama_pelanggan"] . "</td>";
    echo "<td>" . date("d F Y", strtotime($value["tanggal_pembelian"])) . "</td>";
    echo "<td>Rp." . number_format($value["total_pembelian"]) . ",00</td>";
    echo "<td>" . $value["status_pembelian"] . "</td>";
    echo "</tr>";
endforeach;
echo "</tbody>";
echo "<tfoot>";
echo "<tr>";
echo "<th colspan='3'>Total</th>";
echo "<th>Rp." . number_format($total) . "</th>";
echo "</tr>";
echo "</tfoot>";
echo "</table>";
