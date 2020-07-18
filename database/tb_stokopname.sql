-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 07:03 PM
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
-- Table structure for table `tb_stokopname`
--

CREATE TABLE `tb_stokopname` (
  `id_stokopname` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `stokawal` double DEFAULT NULL,
  `stokskrg` double DEFAULT NULL,
  `status` int(11) NOT NULL,
  `tgl_stokopname` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `ket` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_stokopname`
--

INSERT INTO `tb_stokopname` (`id_stokopname`, `id_barang`, `stokawal`, `stokskrg`, `status`, `tgl_stokopname`, `id_user`, `ket`) VALUES
(1, '2020-07-15-a-1', 10, 13, 1, '2020-07-16', 8, 'aa'),
(2, '2020-07-14-a-2', 10, 13, 1, '2020-07-16', 8, ''),
(3, '2020-07-14-a-2', 13, 20, 1, '2020-07-16', 8, ''),
(4, '2020-07-14-a-2', 13, 25, 1, '2020-07-16', 8, ''),
(5, '2020-07-14-a-2', 25, 23.255813953488, 0, '2020-07-18', 8, ''),
(6, '2020-07-15-a-1', 13, 23.26, 1, '2020-07-18', 8, ''),
(7, '2020-07-15-a-1', 23, 23.26, 1, '2020-07-18', 8, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_stokopname`
--
ALTER TABLE `tb_stokopname`
  ADD PRIMARY KEY (`id_stokopname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_stokopname`
--
ALTER TABLE `tb_stokopname`
  MODIFY `id_stokopname` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
