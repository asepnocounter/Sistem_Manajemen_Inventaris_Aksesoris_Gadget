-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2026 at 08:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gadget`
--

-- --------------------------------------------------------

--
-- Table structure for table `casing_handphone`
--

CREATE TABLE `casing_handphone` (
  `id` int(255) NOT NULL,
  `merek_ch` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `jenis_ch` varchar(100) NOT NULL,
  `hp_ch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tampered_glass`
--

CREATE TABLE `tampered_glass` (
  `id` int(255) NOT NULL,
  `nama_tg` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `jenis_tg` varchar(100) NOT NULL,
  `hp_tg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tampered_glass`
--

INSERT INTO `tampered_glass` (`id`, `nama_tg`, `jumlah`, `harga`, `jenis_tg`, `hp_tg`) VALUES
(1, 'Spigen', '100 Pcs', 'Rp. 200.000', 'Tempered Glass Anti Glare', 'Xiomi'),
(2, 'Nillkin', '100 Pcs', 'Rp. 500.000', 'Tempered Glass Anti Spy', 'Vivo'),
(3, 'Whitestone Dome', '1.000.000 Pcs', 'Rp. 100.000.000', 'Tempered Glass Anti Spy', 'Xiomi'),
(4, 'ZAGG Invicible Shield', '250 Pcs', 'Rp. 500.000', 'Tempered Glass Anti Spy', 'Samsung'),
(5, 'Ringke', '100 Pcs', 'Rp. 255.000', 'Tempered Glass Anti Glare', 'Google Pixel'),
(6, 'Rhinoshiel', '1.000.000 Pcs', 'Rp. 10.000.000', 'Tempered Glass Anti-Blue Light', 'Techno'),
(8, 'Uneed Hybrid Pro', '1.000.000 Pcs', 'Rp. 500.000.000', 'Tempered Glass Anti Spy', 'Iphone 20 XXR');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','pengguna') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(3, 'admin', '123', 'admin'),
(4, 'pengguna', '123', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casing_handphone`
--
ALTER TABLE `casing_handphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tampered_glass`
--
ALTER TABLE `tampered_glass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `casing_handphone`
--
ALTER TABLE `casing_handphone`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tampered_glass`
--
ALTER TABLE `tampered_glass`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
