-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 07:00 AM
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
-- Table structure for table `tb_detailreturpembelian`
--

CREATE TABLE `tb_detailreturpembelian` (
  `id_detailreturbeli` int(11) NOT NULL,
  `id_retur` varchar(50) NOT NULL,
  `id_barang` varchar(50) NOT NULL,
  `qtt` int(11) NOT NULL,
  `satuanretur` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `statusdetail` enum('sudah','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detailreturpembelian`
--

INSERT INTO `tb_detailreturpembelian` (`id_detailreturbeli`, `id_retur`, `id_barang`, `qtt`, `satuanretur`, `harga`, `statusdetail`) VALUES
(1, 'RB-2020-07-25-1', '2020-07-16-a-1', 2, '', 1000, 'sudah'),
(2, 'RB-2020-07-25-1', '2020-07-16-a-1', 2, '', 1000, 'sudah'),
(3, 'RB-2020-07-25-1', '2020-07-15-a-1', 2, '', 1000, 'sudah'),
(4, 'RB-2020-07-25-1', '2020-07-15-a-1', 2, '', 1000, 'sudah'),
(5, 'RB-2020-07-25-1', '2020-07-15-a-1', 2, '', 1000, 'sudah'),
(6, 'RB-2020-07-25-2', '2020-07-15-a-1', 2, '', 1000, 'sudah'),
(7, 'RB-2020-07-25-3', '2020-07-15-a-1', 1, '', 1000, 'sudah'),
(8, 'RB-2020-07-25-3', '2020-07-16-a-1', 2, '', 1000, 'sudah'),
(9, 'RB-2020-07-25-3', '2020-07-15-a-1', 1, '', 1000, 'sudah'),
(10, 'RB-2020-07-25-3', '2020-07-16-a-1', 2, '', 1000, 'sudah'),
(11, 'RB-2020-07-25-4', '2020-07-15-a-1', 2, '', 1000, 'sudah'),
(12, 'RB-2020-07-25-4', '2020-07-16-a-1', 1, '', 1000, 'sudah'),
(13, 'RB-2020-07-25-5', '2020-07-15-a-1', 3, '', 1000, 'sudah'),
(14, 'RB-2020-07-25-5', '2020-07-16-a-1', 3, '', 1000, 'sudah'),
(15, 'RB-2020-07-25-5', '2020-07-15-a-1', 5, '', 1000, 'sudah'),
(16, 'RB-2020-07-25-5', '2020-07-16-a-1', 5, '', 1000, 'sudah'),
(17, 'RB-2020-07-25-6', '2020-07-15-a-1', 22, '', 1000, 'sudah'),
(18, 'RB-2020-07-25-6', '2020-07-15-a-1', 4, '', 1000, 'sudah'),
(19, 'RB-2020-07-25-7', '2020-07-15-a-1', 10, '', 1000, 'sudah'),
(20, 'RB-2020-07-25-7', '2020-07-15-a-1', 10, '', 1000, 'sudah'),
(21, 'RB-2020-07-25-8', '2020-07-15-a-1', 10, '', 1000, 'sudah'),
(22, 'RB-2020-07-25-8', '2020-07-15-a-1', 10, '', 1000, 'sudah'),
(23, 'RB-2020-07-25-9', '2020-07-15-a-1', 2, '', 1000, 'sudah'),
(24, 'RB-2020-07-25-10', '2020-07-15-a-1', 1, '', 1000, 'sudah'),
(25, 'RB-2020-07-25-10', '2020-07-15-a-1', 1, '', 1000, 'sudah'),
(26, 'RB-2020-07-26-1', '2020-07-15-a-1', 10, '', 1000, 'sudah'),
(27, 'RB-2020-07-26-1', '2020-07-15-a-1', 10, '', 1000, 'sudah'),
(28, 'RB-2020-07-26-2', '2020-07-15-a-1', 10, '', 1000, 'sudah'),
(29, 'RB-2020-07-26-3', '2020-07-15-a-1', 10, 'Bj', 1000, 'sudah'),
(30, 'RB-2020-07-26-5', '2020-07-15-a-1', 20, 'Bj', 1000, 'belum'),
(31, 'RB-2020-07-26-6', '2020-07-14-a-2', 20, 'Bj', 60000, 'belum'),
(32, 'RB-2020-07-26-7', '2020-07-14-a-2', 20, 'Bj', 60000, 'sudah'),
(33, 'RB-2020-07-26-8', '2020-07-14-a-2', 20, 'Bj', 60000, 'sudah'),
(34, 'RB-2020-07-26-9', '2020-07-15-a-1', 10, 'Bj', 1000, 'sudah'),
(35, 'RB-2020-07-26-10', '2020-07-15-a-1', 10, 'Bj', 1000, 'sudah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detailreturpembelian`
--
ALTER TABLE `tb_detailreturpembelian`
  ADD PRIMARY KEY (`id_detailreturbeli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detailreturpembelian`
--
ALTER TABLE `tb_detailreturpembelian`
  MODIFY `id_detailreturbeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
