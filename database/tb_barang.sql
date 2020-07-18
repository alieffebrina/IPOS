-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 07:02 PM
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
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` varchar(20) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `barang` varchar(200) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_jenisbarang` int(11) NOT NULL,
  `stok` double NOT NULL DEFAULT 0,
  `stokmin` double NOT NULL DEFAULT 0,
  `hargabeli` int(11) NOT NULL,
  `id_konversi` int(11) NOT NULL,
  `tgl_update` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `hasil_konversi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `no_urut`, `barang`, `id_satuan`, `id_jenisbarang`, `stok`, `stokmin`, `hargabeli`, `id_konversi`, `tgl_update`, `id_user`, `hasil_konversi`) VALUES
('2020-07-14-a-2', 2, 'Paving 1', 1, 4, 25, 20, 60000, 3, '2020-07-16', 8, 430),
('2020-07-15-a-1', 7, 'paving 21', 1, 6, 23.26, 1, 1000, 3, '2020-07-18', 8, 430),
('2020-07-16-a-1', 11, 'paving 16', 1, 4, 10, 1, 1000, 3, '2020-07-16', 8, 430);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `tb_barang` (`no_urut`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
