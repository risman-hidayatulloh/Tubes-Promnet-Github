-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jun 2018 pada 04.25
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan_parts`
--

CREATE TABLE `detail_penjualan_parts` (
  `id_detail_penjualan_part` int(11) NOT NULL,
  `id_penjualan_part` int(11) NOT NULL,
  `id_href_part` int(11) NOT NULL,
  `id_part` int(11) NOT NULL,
  `kode_detail_penjualan_part` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_ref_part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_penjualan_parts`
--

INSERT INTO `detail_penjualan_parts` (`id_detail_penjualan_part`, `id_penjualan_part`, `id_href_part`, `id_part`, `kode_detail_penjualan_part`, `jumlah`, `harga_ref_part`) VALUES
(1, 1, 6, 6, 'KDP001', 1, 12000),
(2, 2, 2, 2, 'KDP002', 1, 83000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_perbaikans`
--

CREATE TABLE `detail_perbaikans` (
  `id_detail_perbaikan` int(11) NOT NULL,
  `id_perbaikan` int(11) NOT NULL,
  `id_href_jasa` int(11) NOT NULL,
  `id_jasa` int(11) NOT NULL,
  `kode_detail_perbaikan` varchar(20) NOT NULL,
  `harga_ref_jasa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_perbaikans`
--

INSERT INTO `detail_perbaikans` (`id_detail_perbaikan`, `id_perbaikan`, `id_href_jasa`, `id_jasa`, `kode_detail_perbaikan`, `harga_ref_jasa`) VALUES
(1, 1, 1, 1, 'KDP001', 75000),
(2, 2, 2, 2, 'KDP002', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_part`) VALUES
(1, 4, 1),
(2, 4, 2),
(3, 4, 3),
(4, 4, 4),
(5, 4, 5),
(6, 8, 1),
(7, 8, 2),
(8, 8, 3),
(9, 8, 4),
(10, 8, 5),
(11, 8, 13),
(12, 9, 13),
(13, 10, 2),
(14, 10, 2),
(15, 10, 2),
(16, 10, 2),
(17, 11, 1),
(18, 11, 2),
(19, 12, 4),
(20, 12, 13),
(21, 14, 5),
(22, 14, 13),
(23, 15, 7),
(24, 15, 8),
(25, 16, 7),
(26, 17, 7),
(27, 17, 7),
(28, 17, 8),
(29, 17, 8),
(30, 17, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `href_jasas`
--

CREATE TABLE `href_jasas` (
  `id_href_jasa` int(11) NOT NULL,
  `id_jasa` int(11) NOT NULL,
  `harga_ref_jasa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `href_jasas`
--

INSERT INTO `href_jasas` (`id_href_jasa`, `id_jasa`, `harga_ref_jasa`) VALUES
(1, 1, 50000),
(2, 2, 75000),
(3, 3, 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `href_parts`
--

CREATE TABLE `href_parts` (
  `id_href_part` int(11) NOT NULL,
  `id_part` int(11) NOT NULL,
  `harga_ref_part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `href_parts`
--

INSERT INTO `href_parts` (`id_href_part`, `id_part`, `harga_ref_part`) VALUES
(1, 1, 1200000),
(2, 2, 83000),
(3, 3, 1126000),
(4, 4, 4000),
(5, 5, 6000),
(6, 6, 12000),
(7, 7, 45000),
(8, 8, 100000),
(9, 9, 1500),
(10, 10, 853500),
(11, 11, 100000),
(12, 12, 200000),
(13, 13, 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasas`
--

CREATE TABLE `jasas` (
  `id_jasa` int(11) NOT NULL,
  `kode_jasa` varchar(20) NOT NULL,
  `nama_jasa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jasas`
--

INSERT INTO `jasas` (`id_jasa`, `kode_jasa`, `nama_jasa`) VALUES
(1, 'KJ001', 'Andy'),
(2, 'KJ002', 'Mamat'),
(3, 'KJ003', 'Reno');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mekaniks`
--

CREATE TABLE `mekaniks` (
  `id_mekanik` int(11) NOT NULL,
  `kode_mekanik` varchar(20) NOT NULL,
  `nama_mekanik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mekaniks`
--

INSERT INTO `mekaniks` (`id_mekanik`, `kode_mekanik`, `nama_mekanik`) VALUES
(1, 'KM001', 'Reno'),
(2, 'KM002', 'Farno');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `parts`
--

CREATE TABLE `parts` (
  `id_part` int(11) NOT NULL,
  `kode_part` varchar(20) NOT NULL,
  `nama_part` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `parts`
--

INSERT INTO `parts` (`id_part`, `kode_part`, `nama_part`) VALUES
(1, '073080MB2020', 'BATTERY CHARGER MF'),
(2, '16165KEV900', 'HOLDER,NEEDLE JET'),
(3, '50410440920', 'PIPE,RR'),
(4, '90113KYJ710', 'SCREW PAN 6X12'),
(5, '19115KGH901', 'STAY RADIATOR LOWER'),
(6, '90003KEV650', 'BOLT ADAPTOR'),
(7, '88120KTMN00FMB', '88120KTM000FMB'),
(8, '871X0KZT900ZCL', 'STRIPE RED L'),
(9, '24436K15900', 'SPG,DRUM STOPPER'),
(10, '45510KW6841', 'CYLDR.SB.AS.FR.BK.MT'),
(11, 'SR001', 'Service Paket 1'),
(12, 'SR002', 'Service Paket 2'),
(13, 'SR003', 'Service Paket 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id_pelanggan` int(11) NOT NULL,
  `kode_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat_pelanggan` varchar(100) NOT NULL,
  `plat_nomor` varchar(10) NOT NULL,
  `no_stnk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggans`
--

INSERT INTO `pelanggans` (`id_pelanggan`, `kode_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `plat_nomor`, `no_stnk`) VALUES
(1, 'KP001', 'Asep', 'Bandung', 'B2619UX', 'A083619329'),
(2, 'KP002', 'Anis', 'Garut', 'Z8327BI', 'A034984328');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_parts`
--

CREATE TABLE `penjualan_parts` (
  `id_penjualan_part` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `kode_penjualan` varchar(20) NOT NULL,
  `total_harga_ref` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan_parts`
--

INSERT INTO `penjualan_parts` (`id_penjualan_part`, `id_transaksi`, `kode_penjualan`, `total_harga_ref`) VALUES
(1, 3, 'KP001', 12000),
(2, 4, 'KP002', 83000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbaikans`
--

CREATE TABLE `perbaikans` (
  `id_perbaikan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `kode_perbaikan` varchar(20) NOT NULL,
  `id_mekanik` int(11) NOT NULL,
  `total_harga_ref` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perbaikans`
--

INSERT INTO `perbaikans` (`id_perbaikan`, `id_transaksi`, `kode_perbaikan`, `id_mekanik`, `total_harga_ref`) VALUES
(1, 1, 'KP001', 1, 75000),
(2, 2, 'KP002', 2, 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_parts`
--

CREATE TABLE `stok_parts` (
  `id_stok` int(11) NOT NULL,
  `id_part` int(11) NOT NULL,
  `kode_seri` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok_parts`
--

INSERT INTO `stok_parts` (`id_stok`, `id_part`, `kode_seri`, `status`) VALUES
(1, 1, 'xxxxxxx1', 0),
(2, 1, 'xxxxxxx2', 0),
(3, 1, 'xxxxxxx3', 0),
(4, 1, 'xxxxxxx4', 0),
(5, 1, 'xxxxxxx5', 0),
(6, 1, 'xxxxxxx6', 0),
(7, 1, 'xxxxxxx7', 0),
(8, 1, 'xxxxxxx8', 0),
(9, 1, 'xxxxxxx9', 0),
(10, 1, 'xxxxxx10', 0),
(11, 2, 'xxxxxxx1', 0),
(12, 2, 'xxxxxxx2', 0),
(13, 2, 'xxxxxxx3', 0),
(14, 2, 'xxxxxxx4', 0),
(15, 2, 'xxxxxxx5', 0),
(16, 2, 'xxxxxxx6', 0),
(17, 2, 'xxxxxxx7', 0),
(18, 2, 'xxxxxxx8', 0),
(19, 2, 'xxxxxxx9', 0),
(20, 2, 'xxxxxx10', 0),
(21, 3, 'xxxxxxx1', 0),
(22, 3, 'xxxxxxx2', 0),
(23, 3, 'xxxxxxx3', 0),
(24, 3, 'xxxxxxx4', 0),
(25, 3, 'xxxxxxx5', 0),
(26, 3, 'xxxxxxx6', 0),
(27, 4, 'xxxxxxx1', 0),
(28, 4, 'xxxxxxx2', 0),
(29, 4, 'xxxxxxx3', 0),
(30, 4, 'xxxxxxx4', 0),
(31, 4, 'xxxxxxx5', 0),
(32, 4, 'xxxxxxx6', 0),
(33, 4, 'xxxxxxx7', 0),
(34, 4, 'xxxxxxx8', 0),
(35, 4, 'xxxxxxx9', 0),
(36, 4, 'xxxxxx11', 0),
(37, 4, 'xxxxxx12', 0),
(38, 4, 'xxxxxx13', 0),
(39, 4, 'xxxxxx14', 0),
(40, 4, 'xxxxxx15', 0),
(41, 5, 'xxxxxxx1', 0),
(42, 5, 'xxxxxxx2', 0),
(43, 5, 'xxxxxxx3', 0),
(44, 5, 'xxxxxxx4', 0),
(45, 5, 'xxxxxxx5', 0),
(46, 5, 'xxxxxxx6', 0),
(47, 5, 'xxxxxxx7', 0),
(48, 5, 'xxxxxxx8', 0),
(49, 5, 'xxxxxxx9', 0),
(50, 5, 'xxxxxx11', 0),
(51, 5, 'xxxxxx12', 0),
(52, 5, 'xxxxxx13', 0),
(53, 5, 'xxxxxx15', 0),
(54, 5, 'xxxxxx17', 0),
(55, 5, 'xxxxxx18', 0),
(56, 6, 'xxxxxxx1', 1),
(57, 6, 'xxxxxxx2', 1),
(58, 6, 'xxxxxxx3', 1),
(59, 6, 'xxxxxxx4', 1),
(60, 6, 'xxxxxxx5', 1),
(61, 6, 'xxxxxxx6', 1),
(62, 6, 'xxxxxxx7', 1),
(63, 6, 'xxxxxxx8', 1),
(64, 6, 'xxxxxxx9', 1),
(65, 6, 'xxxxxx11', 1),
(66, 6, 'xxxxxx12', 1),
(67, 7, 'xxxxxxx1', 0),
(68, 7, 'xxxxxxx2', 0),
(69, 7, 'xxxxxxx3', 0),
(70, 7, 'xxxxxxx4', 0),
(71, 7, 'xxxxxxx5', 0),
(72, 7, 'xxxxxxx6', 0),
(73, 7, 'xxxxxxx7', 0),
(74, 7, 'xxxxxxx8', 0),
(75, 7, 'xxxxxxx9', 1),
(76, 7, 'xxxxxx11', 1),
(77, 7, 'xxxxxx12', 1),
(78, 7, 'xxxxxx14', 1),
(79, 8, 'xxxxxxx1', 0),
(80, 8, 'xxxxxxx2', 0),
(81, 8, 'xxxxxxx3', 0),
(82, 8, 'xxxxxxx4', 0),
(83, 8, 'xxxxxxx5', 0),
(84, 8, 'xxxxxxx6', 0),
(85, 8, 'xxxxxxx7', 0),
(86, 8, 'xxxxxxx8', 0),
(87, 8, 'xxxxxxx9', 0),
(88, 8, 'xxxxxx11', 0),
(89, 8, 'xxxxxx12', 1),
(90, 8, 'xxxxxx14', 1),
(91, 8, 'xxxxxx15', 1),
(92, 8, 'xxxxxx16', 1),
(93, 8, 'xxxxxx17', 1),
(94, 9, 'xxxxxxx1', 1),
(95, 9, 'xxxxxxx2', 1),
(96, 9, 'xxxxxxx3', 1),
(97, 9, 'xxxxxxx4', 1),
(98, 9, 'xxxxxxx5', 1),
(99, 9, 'xxxxxxx6', 1),
(100, 9, 'xxxxxxx7', 1),
(101, 9, 'xxxxxxx8', 1),
(102, 9, 'xxxxxxx9', 1),
(103, 9, 'xxxxxx11', 1),
(104, 9, 'xxxxxx12', 1),
(105, 9, 'xxxxxx14', 1),
(106, 9, 'xxxxxx15', 1),
(107, 9, 'xxxxxx16', 1),
(108, 9, 'xxxxxx17', 1),
(109, 9, 'xxxxxx18', 1),
(110, 9, 'xxxxxx19', 1),
(111, 9, 'xxxxxx20', 1),
(112, 10, 'xxxxxxx1', 1),
(113, 10, 'xxxxxxx2', 1),
(114, 10, 'xxxxxxx3', 1),
(115, 10, 'xxxxxxx4', 1),
(116, 10, 'xxxxxxx5', 1),
(117, 10, 'xxxxxxx6', 1),
(118, 10, 'xxxxxxx7', 1),
(119, 10, 'xxxxxxx8', 1),
(120, 10, 'xxxxxxx9', 1),
(121, 10, 'xxxxxx11', 1),
(122, 10, 'xxxxxx12', 1),
(123, 10, 'xxxxxx14', 1),
(124, 10, 'xxxxxx15', 1),
(125, 10, 'xxxxxx16', 1),
(126, 10, 'xxxxxx17', 1),
(127, 10, 'xxxxxx18', 1),
(128, 10, 'xxxxxx19', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_pelanggan`
--

CREATE TABLE `tmp_pelanggan` (
  `id_tmp` int(11) NOT NULL,
  `kode_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat_pelanggan` varchar(50) NOT NULL,
  `plat_nomor` varchar(10) NOT NULL,
  `no_stnk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_pembelian`
--

CREATE TABLE `tmp_pembelian` (
  `id_tmp` int(11) NOT NULL,
  `id_part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kode_transaksi` varchar(20) NOT NULL,
  `waktu` date NOT NULL,
  `bayar` int(11) NOT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id_transaksi`, `id_pelanggan`, `kode_transaksi`, `waktu`, `bayar`, `status`) VALUES
(1, 1, 'KT001', '2018-05-11', 100000, 1),
(2, 2, 'KT002', '2018-05-11', 75000, 1),
(3, 4, 'KT003', '2018-05-12', 12000, 1),
(4, 4, 'KT003', '2018-05-12', 83000, 1),
(8, 1, '53b328725dfad34aea5c', '2018-06-05', 2719000, 1),
(9, 1, 'ec869c75ae6435069af7', '2018-06-22', 300000, 1),
(10, 1, '43de45d30e0289cf6f01', '2018-06-25', 332000, 1),
(11, 1, '90218a368f297211f52a', '2018-06-25', 1283000, 1),
(12, 1, '3c216e7765f2261aecf6', '2018-06-25', 304000, 1),
(13, 1, '9a6ba9682b3670287876', '2018-06-25', 0, 1),
(14, 1, 'fd4a11b820e0178c737d', '2018-06-25', 306000, 1),
(15, 1, '965c72d4fa5fa5278c28', '2018-06-25', 145000, 1),
(16, 1, 'c1f641dcd2d9a208a118', '2018-06-25', 45000, 1),
(17, 1, '5672f09d5d56ce50482e', '2018-06-25', 445000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `jenis_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `jenis_user`) VALUES
(1, 'risman', 'risman', 1),
(2, 'faris', 'faris', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penjualan_parts`
--
ALTER TABLE `detail_penjualan_parts`
  ADD PRIMARY KEY (`id_detail_penjualan_part`),
  ADD KEY `id_penjualan_part` (`id_penjualan_part`),
  ADD KEY `id_part` (`id_part`),
  ADD KEY `id_href_part` (`id_href_part`);

--
-- Indexes for table `detail_perbaikans`
--
ALTER TABLE `detail_perbaikans`
  ADD PRIMARY KEY (`id_detail_perbaikan`),
  ADD KEY `id_perbaikan` (`id_perbaikan`),
  ADD KEY `id_jasa` (`id_jasa`),
  ADD KEY `id_href_jasa` (`id_href_jasa`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_part` (`id_part`);

--
-- Indexes for table `href_jasas`
--
ALTER TABLE `href_jasas`
  ADD PRIMARY KEY (`id_href_jasa`),
  ADD KEY `id_jasa` (`id_jasa`);

--
-- Indexes for table `href_parts`
--
ALTER TABLE `href_parts`
  ADD PRIMARY KEY (`id_href_part`),
  ADD KEY `id_part` (`id_part`);

--
-- Indexes for table `jasas`
--
ALTER TABLE `jasas`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indexes for table `mekaniks`
--
ALTER TABLE `mekaniks`
  ADD PRIMARY KEY (`id_mekanik`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id_part`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penjualan_parts`
--
ALTER TABLE `penjualan_parts`
  ADD PRIMARY KEY (`id_penjualan_part`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `perbaikans`
--
ALTER TABLE `perbaikans`
  ADD PRIMARY KEY (`id_perbaikan`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_mekanik` (`id_mekanik`);

--
-- Indexes for table `stok_parts`
--
ALTER TABLE `stok_parts`
  ADD PRIMARY KEY (`id_stok`),
  ADD KEY `id_part` (`id_part`);

--
-- Indexes for table `tmp_pelanggan`
--
ALTER TABLE `tmp_pelanggan`
  ADD PRIMARY KEY (`id_tmp`);

--
-- Indexes for table `tmp_pembelian`
--
ALTER TABLE `tmp_pembelian`
  ADD PRIMARY KEY (`id_tmp`),
  ADD KEY `id_part` (`id_part`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_penjualan_parts`
--
ALTER TABLE `detail_penjualan_parts`
  MODIFY `id_detail_penjualan_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `detail_perbaikans`
--
ALTER TABLE `detail_perbaikans`
  MODIFY `id_detail_perbaikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `href_jasas`
--
ALTER TABLE `href_jasas`
  MODIFY `id_href_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `href_parts`
--
ALTER TABLE `href_parts`
  MODIFY `id_href_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `jasas`
--
ALTER TABLE `jasas`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mekaniks`
--
ALTER TABLE `mekaniks`
  MODIFY `id_mekanik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penjualan_parts`
--
ALTER TABLE `penjualan_parts`
  MODIFY `id_penjualan_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perbaikans`
--
ALTER TABLE `perbaikans`
  MODIFY `id_perbaikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stok_parts`
--
ALTER TABLE `stok_parts`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `tmp_pelanggan`
--
ALTER TABLE `tmp_pelanggan`
  MODIFY `id_tmp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tmp_pembelian`
--
ALTER TABLE `tmp_pembelian`
  MODIFY `id_tmp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_penjualan_parts`
--
ALTER TABLE `detail_penjualan_parts`
  ADD CONSTRAINT `detail_penjualan_parts_ibfk_1` FOREIGN KEY (`id_penjualan_part`) REFERENCES `penjualan_parts` (`id_penjualan_part`),
  ADD CONSTRAINT `detail_penjualan_parts_ibfk_2` FOREIGN KEY (`id_part`) REFERENCES `parts` (`id_part`),
  ADD CONSTRAINT `detail_penjualan_parts_ibfk_3` FOREIGN KEY (`id_href_part`) REFERENCES `href_parts` (`id_href_part`);

--
-- Ketidakleluasaan untuk tabel `detail_perbaikans`
--
ALTER TABLE `detail_perbaikans`
  ADD CONSTRAINT `detail_perbaikans_ibfk_1` FOREIGN KEY (`id_perbaikan`) REFERENCES `perbaikans` (`id_perbaikan`),
  ADD CONSTRAINT `detail_perbaikans_ibfk_2` FOREIGN KEY (`id_jasa`) REFERENCES `jasas` (`id_jasa`),
  ADD CONSTRAINT `detail_perbaikans_ibfk_3` FOREIGN KEY (`id_href_jasa`) REFERENCES `href_jasas` (`id_href_jasa`);

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksis` (`id_transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_part`) REFERENCES `parts` (`id_part`);

--
-- Ketidakleluasaan untuk tabel `href_jasas`
--
ALTER TABLE `href_jasas`
  ADD CONSTRAINT `href_jasas_ibfk_1` FOREIGN KEY (`id_jasa`) REFERENCES `jasas` (`id_jasa`);

--
-- Ketidakleluasaan untuk tabel `href_parts`
--
ALTER TABLE `href_parts`
  ADD CONSTRAINT `href_parts_ibfk_1` FOREIGN KEY (`id_part`) REFERENCES `parts` (`id_part`);

--
-- Ketidakleluasaan untuk tabel `penjualan_parts`
--
ALTER TABLE `penjualan_parts`
  ADD CONSTRAINT `penjualan_parts_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksis` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `perbaikans`
--
ALTER TABLE `perbaikans`
  ADD CONSTRAINT `perbaikans_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksis` (`id_transaksi`),
  ADD CONSTRAINT `perbaikans_ibfk_2` FOREIGN KEY (`id_mekanik`) REFERENCES `mekaniks` (`id_mekanik`);

--
-- Ketidakleluasaan untuk tabel `stok_parts`
--
ALTER TABLE `stok_parts`
  ADD CONSTRAINT `stok_parts_ibfk_1` FOREIGN KEY (`id_part`) REFERENCES `parts` (`id_part`);

--
-- Ketidakleluasaan untuk tabel `tmp_pembelian`
--
ALTER TABLE `tmp_pembelian`
  ADD CONSTRAINT `tmp_pembelian_ibfk_1` FOREIGN KEY (`id_part`) REFERENCES `parts` (`id_part`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
