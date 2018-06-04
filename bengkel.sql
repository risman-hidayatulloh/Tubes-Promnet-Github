-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 06:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `detail_penjualan_parts`
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
-- Dumping data for table `detail_penjualan_parts`
--

INSERT INTO `detail_penjualan_parts` (`id_detail_penjualan_part`, `id_penjualan_part`, `id_href_part`, `id_part`, `kode_detail_penjualan_part`, `jumlah`, `harga_ref_part`) VALUES
(1, 1, 6, 6, 'KDP001', 1, 12000),
(2, 2, 2, 2, 'KDP002', 1, 83000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_perbaikans`
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
-- Dumping data for table `detail_perbaikans`
--

INSERT INTO `detail_perbaikans` (`id_detail_perbaikan`, `id_perbaikan`, `id_href_jasa`, `id_jasa`, `kode_detail_perbaikan`, `harga_ref_jasa`) VALUES
(1, 1, 1, 1, 'KDP001', 75000),
(2, 2, 2, 2, 'KDP002', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `href_jasas`
--

CREATE TABLE `href_jasas` (
  `id_href_jasa` int(11) NOT NULL,
  `id_jasa` int(11) NOT NULL,
  `harga_ref_jasa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `href_jasas`
--

INSERT INTO `href_jasas` (`id_href_jasa`, `id_jasa`, `harga_ref_jasa`) VALUES
(1, 1, 50000),
(2, 2, 75000),
(3, 3, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `href_parts`
--

CREATE TABLE `href_parts` (
  `id_href_part` int(11) NOT NULL,
  `id_part` int(11) NOT NULL,
  `harga_ref_part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `href_parts`
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
-- Table structure for table `jasas`
--

CREATE TABLE `jasas` (
  `id_jasa` int(11) NOT NULL,
  `kode_jasa` varchar(20) NOT NULL,
  `nama_jasa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasas`
--

INSERT INTO `jasas` (`id_jasa`, `kode_jasa`, `nama_jasa`) VALUES
(1, 'KJ001', 'Andy'),
(2, 'KJ002', 'Mamat'),
(3, 'KJ003', 'Reno');

-- --------------------------------------------------------

--
-- Table structure for table `mekaniks`
--

CREATE TABLE `mekaniks` (
  `id_mekanik` int(11) NOT NULL,
  `kode_mekanik` varchar(20) NOT NULL,
  `nama_mekanik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mekaniks`
--

INSERT INTO `mekaniks` (`id_mekanik`, `kode_mekanik`, `nama_mekanik`) VALUES
(1, 'KM001', 'Reno'),
(2, 'KM002', 'Farno');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id_part` int(11) NOT NULL,
  `kode_part` varchar(20) NOT NULL,
  `nama_part` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
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
-- Table structure for table `pelanggans`
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
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id_pelanggan`, `kode_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `plat_nomor`, `no_stnk`) VALUES
(1, 'KP001', 'Asep', 'Bandung', 'B2619UX', 'A083619329'),
(2, 'KP002', 'Anis', 'Garut', 'Z8327BI', 'A034984328');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_parts`
--

CREATE TABLE `penjualan_parts` (
  `id_penjualan_part` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `kode_penjualan` varchar(20) NOT NULL,
  `total_harga_ref` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan_parts`
--

INSERT INTO `penjualan_parts` (`id_penjualan_part`, `id_transaksi`, `kode_penjualan`, `total_harga_ref`) VALUES
(1, 3, 'KP001', 12000),
(2, 4, 'KP002', 83000);

-- --------------------------------------------------------

--
-- Table structure for table `perbaikans`
--

CREATE TABLE `perbaikans` (
  `id_perbaikan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `kode_perbaikan` varchar(20) NOT NULL,
  `id_mekanik` int(11) NOT NULL,
  `total_harga_ref` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbaikans`
--

INSERT INTO `perbaikans` (`id_perbaikan`, `id_transaksi`, `kode_perbaikan`, `id_mekanik`, `total_harga_ref`) VALUES
(1, 1, 'KP001', 1, 75000),
(2, 2, 'KP002', 2, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `stok_parts`
--

CREATE TABLE `stok_parts` (
  `id_stok` int(11) NOT NULL,
  `id_part` int(11) NOT NULL,
  `kode_seri` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pelanggan`
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
-- Table structure for table `tmp_pembelian`
--

CREATE TABLE `tmp_pembelian` (
  `id_tmp` int(11) NOT NULL,
  `id_part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kode_transaksi` varchar(20) NOT NULL,
  `waktu` date NOT NULL,
  `bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id_transaksi`, `id_pelanggan`, `kode_transaksi`, `waktu`, `bayar`) VALUES
(1, 1, 'KT001', '2018-05-11', 100000),
(2, 2, 'KT002', '2018-05-11', 75000),
(3, 4, 'KT003', '2018-05-12', 12000),
(4, 4, 'KT003', '2018-05-12', 83000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `jenis_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
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
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_penjualan_parts`
--
ALTER TABLE `detail_penjualan_parts`
  ADD CONSTRAINT `detail_penjualan_parts_ibfk_1` FOREIGN KEY (`id_penjualan_part`) REFERENCES `penjualan_parts` (`id_penjualan_part`),
  ADD CONSTRAINT `detail_penjualan_parts_ibfk_2` FOREIGN KEY (`id_part`) REFERENCES `parts` (`id_part`),
  ADD CONSTRAINT `detail_penjualan_parts_ibfk_3` FOREIGN KEY (`id_href_part`) REFERENCES `href_parts` (`id_href_part`);

--
-- Constraints for table `detail_perbaikans`
--
ALTER TABLE `detail_perbaikans`
  ADD CONSTRAINT `detail_perbaikans_ibfk_1` FOREIGN KEY (`id_perbaikan`) REFERENCES `perbaikans` (`id_perbaikan`),
  ADD CONSTRAINT `detail_perbaikans_ibfk_2` FOREIGN KEY (`id_jasa`) REFERENCES `jasas` (`id_jasa`),
  ADD CONSTRAINT `detail_perbaikans_ibfk_3` FOREIGN KEY (`id_href_jasa`) REFERENCES `href_jasas` (`id_href_jasa`);

--
-- Constraints for table `href_jasas`
--
ALTER TABLE `href_jasas`
  ADD CONSTRAINT `href_jasas_ibfk_1` FOREIGN KEY (`id_jasa`) REFERENCES `jasas` (`id_jasa`);

--
-- Constraints for table `href_parts`
--
ALTER TABLE `href_parts`
  ADD CONSTRAINT `href_parts_ibfk_1` FOREIGN KEY (`id_part`) REFERENCES `parts` (`id_part`);

--
-- Constraints for table `penjualan_parts`
--
ALTER TABLE `penjualan_parts`
  ADD CONSTRAINT `penjualan_parts_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksis` (`id_transaksi`);

--
-- Constraints for table `perbaikans`
--
ALTER TABLE `perbaikans`
  ADD CONSTRAINT `perbaikans_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksis` (`id_transaksi`),
  ADD CONSTRAINT `perbaikans_ibfk_2` FOREIGN KEY (`id_mekanik`) REFERENCES `mekaniks` (`id_mekanik`);

--
-- Constraints for table `stok_parts`
--
ALTER TABLE `stok_parts`
  ADD CONSTRAINT `stok_parts_ibfk_1` FOREIGN KEY (`id_part`) REFERENCES `parts` (`id_part`);

--
-- Constraints for table `tmp_pembelian`
--
ALTER TABLE `tmp_pembelian`
  ADD CONSTRAINT `tmp_pembelian_ibfk_1` FOREIGN KEY (`id_part`) REFERENCES `parts` (`id_part`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
