-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Mar 2018 pada 06.31
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nisn` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `lahir` date DEFAULT NULL,
  `asal` varchar(50) DEFAULT NULL,
  `skhun` varchar(50) DEFAULT NULL,
  `ijazah` varchar(50) DEFAULT NULL,
  `indonesia` int(11) DEFAULT NULL,
  `inggris` int(11) DEFAULT NULL,
  `matematika` int(11) DEFAULT NULL,
  `fisika` int(11) DEFAULT NULL,
  `kimia` int(11) DEFAULT NULL,
  `biologi` int(11) DEFAULT NULL,
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `nisn`, `email`, `password`, `status`, `nama`, `lahir`, `asal`, `skhun`, `ijazah`, `indonesia`, `inggris`, `matematika`, `fisika`, `kimia`, `biologi`, `foto`) VALUES
(2, '1606923', 'mfarismuzakki@student.upi.edu', 'muzakki', 1, 'Muhammad Faris Muzakki', '1998-07-14', 'Bandung', '9080707089', 'A98708892', 99, 89, 79, 100, 79, 90, 0x666f746f2f696b6c616e312e706e67),
(3, '18023', 'mfarismuzakki@gmail.com', '67850e1842', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(4, '1aaa', 'mfarismuzakki@gmail.com', '0688968045', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(5, 'afscz', 'mfarismuzakki@student.upi.edu', '065090a485', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(6, '1saf', 'mfarismuzakki@gmail.com', 'mantap', 1, 'Yahya', '3221-05-14', 'Garut', '123', '235twe', 99, 89, 77, 99, 100, 98, 0x666f746f2f696b6c616e312e706e67),
(7, '124', 'mfarismuzakki@gmail.com', 'c8ffe9a587', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
