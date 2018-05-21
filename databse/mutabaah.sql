-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Mei 2018 pada 08.56
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mutabaah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `role`) VALUES
(4, 'kelvin', '$2y$10$5KF6xuzp7gGpnd6SfORumea3qmasrRyfYaN9qrkbQA7eKvjB/v2tK', 1),
(5, 'a', '$2y$10$PuslO/IM6Di6T9INUAsi6u4wUCIs8Iu3M4vdE2lEtsBJm333r/8x.', 0),
(6, 'kelin', '$2y$10$bR2T2y2JpXcvy2IuOp2vu.1jhdBc1MmEIa4KNMpbcTvb8AUbjgMoq', 0),
(7, 'iyaa', '$2y$10$fmbcioP/vrocTIlqxBQF8uCXvvXywP8UjrQr1MdkJKqQq7Z.m4EeC', 0),
(8, 'vintra', '$2y$10$DUUWO4c8MsenFcECxsQqde0Z2GYWuTxDb/FqHFWwt874yBkilW9Ta', 0),
(9, 'sa', '$2y$10$aude.fHFj3D0K5xZgye1XuZNaB2gtH3GNnKb3yONpZpZpBO1hMi2W', 0),
(10, 'kelvin3', '$2y$10$zNWq9P2DZaP8s13PnSjPieOoV5hwuC5za0EWC9m94xsiVCKmPRnOm', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_login`
--

CREATE TABLE `db_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_login`
--
ALTER TABLE `db_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `db_login`
--
ALTER TABLE `db_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
