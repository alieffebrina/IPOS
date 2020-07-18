-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 04:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_pembelian` varchar(20) NOT NULL,
  `id_suplier` int(11) NOT NULL,
  `tglnotapembelian` date NOT NULL,
  `total` int(11) NOT NULL,
  `jenispembayaran` enum('cash','kredit') NOT NULL,
  `tgljatuhtempo` date DEFAULT NULL,
  `tgl_update` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `biayalain` int(11) DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `status` enum('lunas','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`id_pembelian`, `id_suplier`, `tglnotapembelian`, `total`, `jenispembayaran`, `tgljatuhtempo`, `tgl_update`, `id_user`, `biayalain`, `diskon`, `status`) VALUES
('PBL.2020-07-18.1', 1, '2020-07-18', 3009, 'cash', '2020-07-18', '2020-07-18', 8, 11, 0, 'lunas'),
('PBL.2020-07-18.2', 1, '2020-07-18', 2887, 'cash', '2020-07-18', '2020-07-18', 8, 0, 0, 'lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
