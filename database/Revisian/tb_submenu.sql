-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 03:15 PM
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
-- Table structure for table `tb_submenu`
--

CREATE TABLE `tb_submenu` (
  `id_submenu` int(11) NOT NULL,
  `id_menus` int(11) NOT NULL,
  `submenu` varchar(20) NOT NULL,
  `linksubmenu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_submenu`
--

INSERT INTO `tb_submenu` (`id_submenu`, `id_menus`, `submenu`, `linksubmenu`) VALUES
(1, 1, ' Data User', 'C_User'),
(2, 1, 'Data Jenis Customer', 'C_User'),
(3, 1, 'Data Jenis Pembayara', ''),
(4, 1, 'Data Jenis Barang', ''),
(5, 1, 'Data Satuan', ''),
(6, 1, 'Data Gudang', 'C_Gudang'),
(7, 1, 'Data Barang', ''),
(8, 1, 'Data Customer', ''),
(9, 1, 'Data Suplier', ''),
(10, 2, 'Sales Order', ''),
(11, 2, 'Delivery Order', ''),
(12, 2, 'Invoice', ''),
(13, 2, 'Retur', ''),
(14, 3, 'Purchase Order', ''),
(15, 3, 'Penerimaan Barang', ''),
(16, 4, 'Pembayaran Purchase ', ''),
(17, 4, 'Pembayaran Sales Ord', ''),
(18, 5, 'Stock', ''),
(19, 5, 'Transfer Barang', ''),
(20, 6, 'Hutang', ''),
(21, 6, 'Piutang', ''),
(22, 6, 'Pendapatan', ''),
(23, 6, 'Pengeluaran', ''),
(24, 7, 'Hak Akses Login', ''),
(25, 7, 'Data Kode', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_submenu`
--
ALTER TABLE `tb_submenu`
  ADD PRIMARY KEY (`id_submenu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_submenu`
--
ALTER TABLE `tb_submenu`
  MODIFY `id_submenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
