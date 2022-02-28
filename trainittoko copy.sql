-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 10:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainittoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'lutfi', '1234', 'Rizki');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kategori A'),
(2, 'Kategori B');

-- --------------------------------------------------------

--
-- Table structure for table `master_bis`
--

CREATE TABLE `master_bis` (
  `id` int(11) NOT NULL,
  `nama_bis` varchar(255) NOT NULL,
  `tipe_bis` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master_kelas`
--

CREATE TABLE `master_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master_kota`
--

CREATE TABLE `master_kota` (
  `id` int(11) NOT NULL,
  `nama_kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master_wisata`
--

CREATE TABLE `master_wisata` (
  `id` int(11) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_wisata_1` varchar(255) NOT NULL,
  `foto_wisata_2` varchar(255) NOT NULL,
  `foto_wisata_3` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Demak', 20000),
(2, 'Cirebon', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(100) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'lutfi', '1234', 'Rizki', '08888123123', ''),
(2, 'erik@gmail.com', 'erik', 'Erik Candra', '0888111111', ''),
(3, 'yudi@contoh.com', '1234', 'Yudi Saputra', '0746356643', 'Jogja'),
(4, 'doni@contoh.com', '1234', 'Doni', '0761888888', 'Semarang'),
(5, 'erwin@contoh.com', '1234', 'Erwin', '088867553', 'Demak');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(1, 2, 'aa', 'w', 11111, '2022-02-19', '202202191509372022021914090320200915045855database.png'),
(2, 3, '2', '2', 222, '2022-02-19', '2022021915105720200808173932punya-putri.png');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'pending',
  `totalberat` int(11) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `distrik` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `kodepos` varchar(255) NOT NULL,
  `ekspedisi` varchar(255) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `estimasi` varchar(255) NOT NULL,
  `resi_pengiriman` varchar(234) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `tanggal_pembelian`, `total_pembelian`, `alamat_pengiriman`, `status_pembelian`, `totalberat`, `provinsi`, `distrik`, `tipe`, `kodepos`, `ekspedisi`, `paket`, `ongkir`, `estimasi`, `resi_pengiriman`) VALUES
(1, 1, '2022-02-19', 1540000, 'wwdwdw', 'pending', 1000, 'Jawa Barat', 'Bogor', 'Kota', '16119', 'jne', 'YES', 40000, '1-1', ''),
(2, 1, '2022-02-19', 1513000, 'dddd', 'Lunas - Barang Dikirim', 1000, 'Jawa Timur', 'Kediri', 'Kota', '64125', 'jne', 'OKE', 13000, '5-6', '222333'),
(3, 1, '2022-02-19', 133000, 'kkk', 'batal', 600, 'Kalimantan Utara', 'Malinau', 'Kabupaten', '77511', 'jne', 'OKE', 73000, '7-8', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subberat` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES
(1, 1, 1, 1, 'Laptop Asus xix', 1500000, 1000, 1000, 1500000),
(2, 2, 1, 1, 'Laptop Asus xix', 1500000, 1000, 1000, 1500000),
(3, 3, 6, 1, 'Buku Koding', 60000, 600, 600, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok_produk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`, `stok_produk`) VALUES
(1, 1, 'Laptop Asus xix', 1500000, 1000, 'kari-shea-1SAnrIxw5OY-unsplash.jpg', 'Ini asus bagus', -1),
(2, 1, 'Laptop Acer 212', 500000, 1000, 'sora-sagano-WFSap6CIXuw-unsplash (1).jpg', 'Ini Acer bagus', -3),
(3, 2, 'Laptop macbook 212', 2500000, 1200, 'ben-kolde-t9DooibgMEk-unsplash.jpg', 'Ini macbook bagus bergaransi', 3),
(4, 2, 'Laptop Pro', 3000000, 2000, 'kitai-jogia-zhvaeh-R9rA-unsplash.jpg', 'Laptop pro', 3),
(5, 1, 'ASD edited', 500000, 50, 'p5290175.jpg', '                    asdasd    asd            ', 10),
(6, 2, 'Buku Koding', 60000, 600, 'sincerely-media-CXYPfveiuis-unsplash.jpg', 'Buku koding terbaru', 5);

-- --------------------------------------------------------

--
-- Table structure for table `produk_foto`
--

CREATE TABLE `produk_foto` (
  `id_produk_foto` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_foto`
--

INSERT INTO `produk_foto` (`id_produk_foto`, `id_produk`, `nama_produk_foto`) VALUES
(2, 8, 'vinicius-amnx-amano-fdiXdOdYtLE-unsplash.jpg'),
(3, 8, 'sincerely-media-CXYPfveiuis-unsplash.jpg'),
(5, 8, '20200905085618sincerely-media-CXYPfveiuis-unsplash.jpg'),
(6, 6, 'sincerely-media-CXYPfveiuis-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penumpang`
--

CREATE TABLE `tabel_penumpang` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_identitas` int(11) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_bis` int(11) NOT NULL,
  `id_kota_asal` int(11) NOT NULL,
  `id_kota_tujuan` int(11) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jumlah_penumpang` int(11) NOT NULL,
  `jumlah_lansia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `master_bis`
--
ALTER TABLE `master_bis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kelas`
--
ALTER TABLE `master_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_wisata`
--
ALTER TABLE `master_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `produk_foto`
--
ALTER TABLE `produk_foto`
  ADD PRIMARY KEY (`id_produk_foto`);

--
-- Indexes for table `tabel_penumpang`
--
ALTER TABLE `tabel_penumpang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_bis`
--
ALTER TABLE `master_bis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_kelas`
--
ALTER TABLE `master_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_wisata`
--
ALTER TABLE `master_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk_foto`
--
ALTER TABLE `produk_foto`
  MODIFY `id_produk_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabel_penumpang`
--
ALTER TABLE `tabel_penumpang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
