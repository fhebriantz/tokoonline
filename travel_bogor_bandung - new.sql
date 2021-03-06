-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2022 pada 23.54
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_bogor_bandung`
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
(4, 'Damri-Reguler', 'Merchedes-Benz', 1, 'febe-vanermen-xnuGgz0ctks-unsplash.jpg', '2021-10-28 (3).png'),
(5, 'Damri-Bisnis', 'Merchedes-Benz', 2, 'olivier-miche-OZACaaUskhg-unsplash.jpg', '2021-10-29.png'),
(8, 'Damri-Eksekutif', 'Toyota', 3, 'febe-vanermen-xnuGgz0ctks-unsplash.jpg', '2021-12-10.png');

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
(2, 'Bisnis', 45000),
(3, 'Eksekutif', 50000);

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
(5, 'ssss', 123, '123', 1, 3, 3, '2022-03-28', 2, 1, 76000, 'SVL8K1LP', 66, 'olivier-miche-OZACaaUskhg-unsplash.jpg', 'pending'),
(6, 'Muhammad Rizki', 3232323232222222, '8978446499', 1, 3, 4, '2022-03-22', 4, 2, 152000, '2TTPFQO1', 29, 'olivier-miche-OZACaaUskhg-unsplash.jpg', 'pending'),
(7, 'Muhammad Rizki', 123123123123123, '123123', 1, 3, 4, '2022-03-30', 3, 1, 116000, '804BLLOR', 44, 'olivier-miche-OZACaaUskhg-unsplash.jpg', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
-- AUTO_INCREMENT untuk tabel `tabel_penumpang`
--
ALTER TABLE `tabel_penumpang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
