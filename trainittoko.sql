-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2022 pada 14.05
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'rizki@gmail.com', 'rizki', 'Rizki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kategori A'),
(2, 'Kategori B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_bis`
--

CREATE TABLE `master_bis` (
  `id` int(11) NOT NULL,
  `nama_bis` varchar(255) NOT NULL,
  `tipe_bis` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `foto_bis_1` varchar(255) NOT NULL,
  `foto_bis_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_bis`
--

INSERT INTO `master_bis` (`id`, `nama_bis`, `tipe_bis`, `id_kelas`, `foto_bis_1`, `foto_bis_2`) VALUES
(4, 'Damri-Reguler', 'Merchedes-Benz', 1, '2021-10-31 (1).png', '2021-10-28 (3).png'),
(5, 'Damri-Bisnis', 'Merchedes-Benz', 2, '2021-10-28 (2).png', '2021-10-29.png'),
(6, 'Damri-Eksekutif', 'Merchedes-Benz', 3, '2021-10-25.png', '2021-10-27 (1).png'),
(8, 'gxgx', 'gaxgx', 2, '2021-11-14.png', '2021-12-10.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kelas`
--

CREATE TABLE `master_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_kelas`
--

INSERT INTO `master_kelas` (`id`, `nama_kelas`, `harga`) VALUES
(1, 'Reguler', 40000),
(2, 'Bisnis', 50000),
(3, 'Eksekutif', 60000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kota`
--

CREATE TABLE `master_kota` (
  `id` int(11) NOT NULL,
  `nama_kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_kota`
--

INSERT INTO `master_kota` (`id`, `nama_kota`) VALUES
(3, 'Bogor'),
(4, 'Bandung'),
(10, 'tangerang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tentang`
--

CREATE TABLE `master_tentang` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_tentang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_tentang`
--

INSERT INTO `master_tentang` (`id`, `judul`, `deskripsi`, `foto_tentang`) VALUES
(1, 'Tentang Kami', '  Selamat datang di jadwalbis.com, terima kasih atas kebaikan hati Anda mengunjungi website kami.\r\n\r\nJabis atau jadwalbis.com adalah sebuah website yang menyediakan informasi mengenai jadwal dan tarif bis umum di Indonesia. Informasi dalam situs ini terdiri dari jadwal, tarif, nama P.O Bis, no telp PO bis, serta kota yang dilewati pada rute yang bersangkutan.\r\n\r\nMisi kami adalah untuk membantu para traveller mendapatkan perkiraan informasi mengenai jadwal dan tarif bis umum Indonesia secara cuma-cuma.\r\n\r\nSaat ini kami sedang terus mengembangkan situs ini. Kami terus melengkapi informasi dalam situs ini dari waktu ke waktu sehingga informasi jadwal bis di Indonesia dapat di cakup oleh situs ini. Anda dapat pula berkontribusi memberikan informasi mengenai jadwal dan tarif bis yang anda ketahui melalui menu Kontribusi.\r\n\r\nSemua Informasi dalam situs ini dapat anda peroleh tanpa dipungut biaya terkecuali biaya koneksi internet untuk mengakses Jabis, namun Anda perlu membaca halaman Kebijakan Privasi, Ketentuan Layanan, serta Sangkalan untuk memahami ketentuan mengenai bagaimana menggunakan informasi dalam situs ini.\r\n\r\nMudah-mudahan website kami bisa memberi banyak manfaat untuk Anda.\r\n\r\nSalam.                ', 'tentang.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_wisata`
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

--
-- Dumping data untuk tabel `master_wisata`
--

INSERT INTO `master_wisata` (`id`, `nama_wisata`, `id_kota`, `deskripsi`, `foto_wisata_1`, `foto_wisata_2`, `foto_wisata_3`, `video_url`) VALUES
(1, 'Kawah Putih', 4, 'Kawah Putih adalah sebuah tempat wisata di Jawa Barat yang terletak di Desa Alam Endah, Kecamatan Rancabali, Kabupaten Bandung Jawa Barat yang terletak di kaki Gunung Patuha. Kawah putih merupakan sebuah danau yang terbentuk dari letusan Gunung Patuha.', 'kawah1.jpg', 'kawah2.jpg', 'kawah3.jpg', 'https://www.youtube.com/embed/OoSinKtNLVc'),
(2, 'Tangkuban Perahu', 4, 'Gunung Tangkuban Parahu adalah salah satu gunung yang terletak di Provinsi Jawa Barat, Indonesia. Sekitar 20 km ke arah utara Kota Bandung, dengan rimbun pohon pinus dan hamparan kebun teh di sekitarnya, Gunung Tangkuban Parahu mempunyai ketinggian setinggi 2.084 meter.', 'tangkubanperahu1.jpg', 'tangkubanperahu2.jpg', 'tangkubanperahu3.jpg', 'https://www.youtube.com/embed/V0XrD6iVZvQ'),
(5, 'puncakd', 3, 'q', 'WhatsApp Image 2021-08-13 at 20.40.56.jpeg', 'Review-Wisata-di-Puncak-Bogor.jpg', 'WhatsApp Image 2021-08-13 at 20.40.56.jpeg', 'https://www.youtube.com/embed/cBr3DNRcZFU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Demak', 20000),
(2, 'Cirebon', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
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
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'lutfi@a.a', '1234', 'Rizki', '08888123123', ''),
(2, 'erik@gmail.com', 'erik', 'Erik Candra', '0888111111', ''),
(3, 'yudi@contoh.com', '1234', 'Yudi Saputra', '0746356643', 'Jogja'),
(4, 'doni@contoh.com', '1234', 'Doni', '0761888888', 'Semarang'),
(5, 'erwin@contoh.com', '1234', 'Erwin', '088867553', 'Demak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
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
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(1, 2, 'aa', 'w', 11111, '2022-02-19', '202202191509372022021914090320200915045855database.png'),
(2, 3, '2', '2', 222, '2022-02-19', '2022021915105720200808173932punya-putri.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
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
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `tanggal_pembelian`, `total_pembelian`, `alamat_pengiriman`, `status_pembelian`, `totalberat`, `provinsi`, `distrik`, `tipe`, `kodepos`, `ekspedisi`, `paket`, `ongkir`, `estimasi`, `resi_pengiriman`) VALUES
(1, 1, '2022-02-19', 1540000, 'wwdwdw', 'pending', 1000, 'Jawa Barat', 'Bogor', 'Kota', '16119', 'jne', 'YES', 40000, '1-1', ''),
(2, 1, '2022-02-19', 1513000, 'dddd', 'Lunas - Barang Dikirim', 1000, 'Jawa Timur', 'Kediri', 'Kota', '64125', 'jne', 'OKE', 13000, '5-6', '222333'),
(3, 1, '2022-02-19', 133000, 'kkk', 'batal', 600, 'Kalimantan Utara', 'Malinau', 'Kabupaten', '77511', 'jne', 'OKE', 73000, '7-8', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_produk`
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
-- Dumping data untuk tabel `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES
(1, 1, 1, 1, 'Laptop Asus xix', 1500000, 1000, 1000, 1500000),
(2, 2, 1, 1, 'Laptop Asus xix', 1500000, 1000, 1000, 1500000),
(3, 3, 6, 1, 'Buku Koding', 60000, 600, 600, 60000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
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
-- Dumping data untuk tabel `produk`
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
-- Struktur dari tabel `produk_foto`
--

CREATE TABLE `produk_foto` (
  `id_produk_foto` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk_foto`
--

INSERT INTO `produk_foto` (`id_produk_foto`, `id_produk`, `nama_produk_foto`) VALUES
(2, 8, 'vinicius-amnx-amano-fdiXdOdYtLE-unsplash.jpg'),
(3, 8, 'sincerely-media-CXYPfveiuis-unsplash.jpg'),
(5, 8, '20200905085618sincerely-media-CXYPfveiuis-unsplash.jpg'),
(6, 6, 'sincerely-media-CXYPfveiuis-unsplash.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_penumpang`
--

CREATE TABLE `tabel_penumpang` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_identitas` bigint(20) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_kota_asal` int(11) NOT NULL,
  `id_kota_tujuan` int(11) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jumlah_penumpang` int(11) NOT NULL,
  `jumlah_lansia` int(11) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `kode_tiket` varchar(255) NOT NULL,
  `kode_unik_bayar` int(11) NOT NULL,
  `bukti_bayar` varchar(250) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_penumpang`
--

INSERT INTO `tabel_penumpang` (`id`, `nama`, `no_identitas`, `no_hp`, `id_kelas`, `id_kota_asal`, `id_kota_tujuan`, `tanggal_berangkat`, `jumlah_penumpang`, `jumlah_lansia`, `total_harga`, `kode_tiket`, `kode_unik_bayar`, `bukti_bayar`, `status`) VALUES
(1, 'Rizki', 3271011111110001, '085718888888', 2, 3, 4, '2022-03-17', 4, 1, 190000, 'RTX3Z', 95, 'bukti.jpg', 'lunas'),
(2, 'rizki', 21313, '21321312', 1, 3, 10, '2022-03-15', 2, 3, 2121, '1232144', 1234124, '2021-10-27 (1).png', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `master_bis`
--
ALTER TABLE `master_bis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_kelas`
--
ALTER TABLE `master_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_kota`
--
ALTER TABLE `master_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_tentang`
--
ALTER TABLE `master_tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_wisata`
--
ALTER TABLE `master_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `produk_foto`
--
ALTER TABLE `produk_foto`
  ADD PRIMARY KEY (`id_produk_foto`);

--
-- Indeks untuk tabel `tabel_penumpang`
--
ALTER TABLE `tabel_penumpang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_bis`
--
ALTER TABLE `master_bis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `master_kelas`
--
ALTER TABLE `master_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `master_kota`
--
ALTER TABLE `master_kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `master_tentang`
--
ALTER TABLE `master_tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `master_wisata`
--
ALTER TABLE `master_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produk_foto`
--
ALTER TABLE `produk_foto`
  MODIFY `id_produk_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tabel_penumpang`
--
ALTER TABLE `tabel_penumpang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
