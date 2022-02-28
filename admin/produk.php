<h2>data produk</h2>

<table class="table table-bordered ">
    <thead>
        <tr>
            <th>no</th>
            <th>kategori</th>
            <th>nama</th>
            <th>harga</th>
            <th>berat</th>
            <th>foto</th>
            <th>stok</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM produk LEFT JOIN kategori ON produk.id_kategori=kategori.id_kategori"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_kategori']; ?></td>
                <td><?php echo $pecah['nama_produk']; ?></td>
                <td><?php echo $pecah['harga_produk']; ?></td>
                <td><?php echo $pecah['berat_produk']; ?></td>
                <td><?php echo $pecah['foto_produk']; ?></td>
                <td><?php echo $pecah['stok_produk']; ?></td>
                <td>
                    <img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100px">
                </td>
                <td>
                    <a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk']; ?>" class=" btn-danger btn" onclick="return confirm('yakin hapus?')"><i class="glyphicon glyphicon-trash"></i> hapus</a>
                    <a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i>ubah</a>
                    <a href="index.php?halaman=detailproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-info"><i class="glyphicon glyphicon-eye"></i> detail</a>
                </td>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">tambah data</a>