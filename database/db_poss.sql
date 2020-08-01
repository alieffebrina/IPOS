-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 11:09 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_poss`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id_akses` int(11) NOT NULL,
  `id_submenu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `view` enum('1','0') NOT NULL DEFAULT '1',
  `add` enum('1','0') NOT NULL DEFAULT '0',
  `edit` enum('1','0') NOT NULL DEFAULT '0',
  `delete` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `id_submenu`, `id_user`, `view`, `add`, `edit`, `delete`) VALUES
(1, 1, 8, '1', '1', '1', '1'),
(2, 2, 8, '1', '1', '1', '1'),
(3, 3, 8, '1', '1', '1', '1'),
(4, 4, 8, '1', '1', '1', '1'),
(5, 5, 8, '1', '1', '1', '1'),
(6, 6, 8, '1', '1', '1', '1'),
(7, 7, 8, '1', '1', '1', '1'),
(8, 24, 8, '1', '1', '1', '1'),
(9, 1, 1, '1', '1', '1', '1'),
(10, 2, 1, '1', '1', '1', '1'),
(11, 3, 1, '1', '1', '1', '1'),
(12, 4, 1, '1', '1', '1', '1'),
(13, 5, 1, '1', '1', '1', '1'),
(14, 6, 1, '1', '1', '1', '1'),
(15, 7, 1, '1', '1', '1', '1'),
(16, 8, 1, '1', '1', '1', '1'),
(17, 9, 1, '1', '1', '1', '1'),
(18, 10, 1, '1', '1', '1', '1'),
(19, 11, 1, '1', '1', '1', '1'),
(20, 12, 1, '1', '1', '1', '1'),
(21, 13, 1, '1', '1', '1', '1'),
(22, 14, 1, '1', '1', '1', '1'),
(23, 15, 1, '1', '1', '1', '1'),
(24, 16, 1, '1', '1', '1', '1'),
(25, 17, 1, '1', '1', '1', '1'),
(26, 18, 1, '1', '1', '1', '1'),
(27, 19, 1, '1', '1', '1', '1'),
(28, 20, 1, '1', '1', '1', '1'),
(29, 21, 1, '1', '1', '1', '1'),
(30, 22, 1, '1', '1', '1', '1'),
(31, 23, 1, '1', '1', '1', '1'),
(32, 24, 1, '1', '1', '1', '1'),
(33, 25, 1, '1', '1', '1', '1'),
(34, 1, 32, '0', '0', '0', '0'),
(35, 2, 32, '0', '0', '0', '0'),
(36, 3, 32, '0', '0', '0', '0'),
(37, 4, 32, '0', '0', '0', '0'),
(38, 5, 32, '0', '0', '0', '0'),
(39, 6, 32, '0', '0', '0', '0'),
(40, 7, 32, '0', '0', '0', '0'),
(41, 8, 8, '1', '1', '1', '1'),
(42, 9, 8, '1', '1', '1', '1'),
(43, 10, 8, '1', '1', '1', '1'),
(44, 11, 8, '1', '1', '1', '1'),
(45, 12, 8, '1', '1', '1', '1'),
(46, 13, 8, '1', '1', '1', '1'),
(47, 14, 8, '1', '1', '1', '1'),
(48, 15, 8, '1', '1', '1', '1'),
(49, 16, 8, '1', '1', '1', '1'),
(50, 17, 8, '1', '1', '1', '1'),
(51, 18, 8, '1', '1', '1', '1'),
(52, 19, 8, '1', '1', '1', '1'),
(53, 20, 8, '1', '1', '1', '1'),
(54, 21, 8, '1', '1', '1', '1'),
(55, 22, 8, '1', '1', '1', '1'),
(56, 23, 8, '1', '1', '1', '1'),
(57, 24, 32, '0', '0', '0', '0'),
(58, 25, 8, '1', '1', '1', '1'),
(59, 1, 33, '1', '1', '1', '1'),
(60, 2, 33, '0', '1', '1', '1'),
(61, 3, 33, '1', '1', '0', '0'),
(62, 4, 33, '0', '0', '0', '0'),
(63, 5, 33, '1', '0', '1', '0'),
(64, 6, 33, '0', '1', '0', '0'),
(65, 7, 33, '0', '0', '0', '0'),
(66, 8, 33, '1', '1', '0', '1'),
(67, 9, 33, '0', '0', '0', '0'),
(68, 10, 33, '0', '0', '0', '0'),
(69, 11, 33, '0', '0', '0', '0'),
(70, 12, 33, '0', '0', '0', '0'),
(71, 13, 33, '0', '0', '0', '0'),
(72, 14, 33, '0', '0', '0', '0'),
(73, 15, 33, '0', '0', '0', '0'),
(74, 16, 33, '0', '0', '0', '0'),
(75, 17, 33, '0', '0', '0', '0'),
(76, 18, 33, '0', '0', '0', '0'),
(77, 19, 33, '0', '0', '0', '0'),
(78, 20, 33, '0', '0', '0', '0'),
(79, 21, 33, '0', '0', '0', '0'),
(80, 22, 33, '0', '0', '0', '0'),
(81, 23, 33, '0', '0', '0', '0'),
(82, 24, 33, '0', '0', '0', '0'),
(83, 25, 33, '1', '0', '0', '0'),
(84, 26, 8, '1', '1', '1', '1'),
(85, 27, 8, '1', '1', '1', '1'),
(86, 28, 8, '1', '0', '0', '0'),
(87, 28, 1, '1', '0', '0', '0'),
(88, 1, 9, '1', '0', '0', '0'),
(89, 2, 9, '1', '0', '0', '0'),
(90, 3, 9, '1', '0', '0', '0'),
(91, 4, 9, '1', '0', '0', '0'),
(92, 5, 9, '1', '0', '0', '0'),
(93, 6, 9, '1', '0', '0', '0'),
(94, 7, 9, '1', '0', '0', '0'),
(95, 8, 9, '1', '0', '0', '0'),
(96, 9, 9, '1', '0', '0', '0'),
(97, 10, 9, '1', '0', '0', '0'),
(98, 11, 9, '1', '0', '0', '0'),
(99, 12, 9, '1', '0', '0', '0'),
(100, 13, 9, '1', '0', '0', '0'),
(101, 14, 9, '1', '0', '0', '0'),
(102, 15, 9, '1', '0', '0', '0'),
(103, 16, 9, '1', '0', '0', '0'),
(104, 17, 9, '1', '0', '0', '0'),
(105, 18, 9, '1', '0', '0', '0'),
(106, 19, 9, '1', '0', '0', '0'),
(107, 20, 9, '1', '0', '0', '0'),
(108, 21, 9, '1', '0', '0', '0'),
(109, 22, 9, '1', '0', '0', '0'),
(110, 23, 9, '1', '0', '0', '0'),
(111, 24, 9, '1', '0', '0', '0'),
(112, 25, 9, '1', '0', '0', '0'),
(113, 26, 9, '1', '0', '0', '0'),
(114, 27, 9, '1', '0', '0', '0'),
(115, 28, 9, '1', '0', '0', '0'),
(116, 29, 9, '1', '0', '0', '0');

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
  `stok` double NOT NULL DEFAULT '0',
  `stokretur` double NOT NULL,
  `stokmin` double NOT NULL DEFAULT '0',
  `hargabeli` int(11) NOT NULL,
  `id_konversi` int(11) NOT NULL,
  `tgl_update` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `hasil_konversi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `no_urut`, `barang`, `id_satuan`, `id_jenisbarang`, `stok`, `stokretur`, `stokmin`, `hargabeli`, `id_konversi`, `tgl_update`, `id_user`, `hasil_konversi`) VALUES
('B.2020-07-31.1', 15, 'Paving  6 Cm', 1, 4, 6, 0.023255813953488, 9, 48000, 3, '2020-07-31', 8, 344),
('B.2020-07-31.10', 24, 'Topy Uskup 6 Cm', 2, 6, 10, 0, 9, 2435, 3, '2020-07-31', 8, 10),
('B.2020-07-31.11', 25, 'Topy Uskup 6 Cm', 2, 8, 10, 0, 9, 2870, 3, '2020-07-31', 8, 10),
('B.2020-07-31.12', 26, 'Topy Uskup 6 Cm', 2, 9, 10, 0, 9, 3087, 3, '2020-07-31', 8, 10),
('B.2020-07-31.13', 27, 'Topy Uskup 8 Cm', 2, 5, 10, 0, 9, 2565, 3, '2020-07-31', 8, 10),
('B.2020-07-31.14', 28, 'Topy Uskup 8 Cm', 2, 6, 10, 0, 9, 2783, 3, '2020-07-31', 8, 10),
('B.2020-07-31.15', 29, 'Topy Uskup 8 Cm', 2, 7, 10, 0, 9, 3087, 3, '2020-07-31', 8, 10),
('B.2020-07-31.16', 30, 'Kasntin', 2, 10, 10, 0, 9, 9500, 3, '2020-07-31', 8, 10),
('B.2020-07-31.17', 31, 'Kasntin', 2, 11, 0, 0, 9, 16000, 3, '2020-07-31', 8, 10),
('B.2020-07-31.18', 32, 'Kasntin', 2, 12, 10, 0, 9, 21000, 3, '2020-07-31', 8, 10),
('B.2020-07-31.2', 16, 'Paving  6 Cm', 1, 5, 10, 0, 9, 50000, 3, '2020-07-31', 8, 430),
('B.2020-07-31.3', 17, 'Paving  6 Cm', 1, 6, -95, 0, 9, 55000, 3, '2020-07-31', 8, 430),
('B.2020-07-31.4', 18, 'Paving  6 Cm', 1, 8, -5, 0, 9, 65000, 3, '2020-07-31', 8, 430),
('B.2020-07-31.5', 19, 'Paving  6 Cm', 1, 9, -20, 0, 9, 70000, 3, '2020-07-31', 8, 430),
('B.2020-07-31.6', 20, 'Paving  8 Cm', 1, 5, 10, 0, 9, 58000, 3, '2020-07-31', 8, 430),
('B.2020-07-31.7', 21, 'Paving 8 Cm', 1, 6, 0, 0, 9, 63000, 3, '2020-07-31', 8, 430),
('B.2020-07-31.8', 22, 'Paving 8 Cm', 1, 7, 10, 0, 9, 70000, 3, '2020-07-31', 8, 430),
('B.2020-07-31.9', 23, 'Topy Uskup 6 Cm', 2, 5, 10, 0, 9, 2217, 3, '2020-07-31', 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailpembelian`
--

CREATE TABLE `tb_detailpembelian` (
  `id_detailpembelian` int(11) NOT NULL,
  `id_pembelian` varchar(20) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `diskon` double DEFAULT NULL,
  `qtt` int(11) NOT NULL DEFAULT '0',
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detailpembelian`
--

INSERT INTO `tb_detailpembelian` (`id_detailpembelian`, `id_pembelian`, `id_barang`, `diskon`, `qtt`, `harga`) VALUES
(1, 'PBL.2020-07-18.1', '2020-07-24-a-1', 2, 1, 1000),
(2, 'PBL.2020-07-18.1', '2020-07-14-a-2', 0, 2, 1000),
(3, 'PBL.2020-07-18.2', '2020-07-24-a-1', 2, 2, 1000),
(4, 'PBL.2020-07-18.2', '2020-07-14-a-2', 111, 1, 1000),
(5, 'PBL.2020-07-19.1', '2020-07-24-a-1', 0, 1, 1000),
(6, 'PBL.2020-07-19.1', '2020-07-24-a-1', 0, 2, 1000),
(7, 'PBL.2020-07-23.1', '2020-07-14-a-2', 0, 1, 60000),
(8, 'PBL.2020-07-28.1', '2020-07-14-a-2', 0, 1, 60000),
(9, 'PBL.2020-07-28.2', '2020-07-14-a-2', 0, 1, 60000),
(10, 'PBL.2020-07-28.3', '2020-07-14-a-2', 0, 1, 60000),
(11, 'PBL.2020-07-28.4', '2020-07-14-a-2', 0, 1, 60000),
(12, 'PBL.2020-07-31.2', '2020-07-14-a-2', 0, 1, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailpenjualan`
--

CREATE TABLE `tb_detailpenjualan` (
  `id_detailpenjualan` int(11) NOT NULL,
  `id_penjualan` varchar(20) NOT NULL,
  `order_no` int(11) NOT NULL,
  `id_barang` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga` double(10,2) NOT NULL DEFAULT '0.00',
  `qtt` int(11) NOT NULL,
  `diskon` double(10,2) NOT NULL DEFAULT '0.00',
  `subtotal` double(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detailpenjualan`
--

INSERT INTO `tb_detailpenjualan` (`id_detailpenjualan`, `id_penjualan`, `order_no`, `id_barang`, `satuan`, `harga`, `qtt`, `diskon`, `subtotal`) VALUES
(1, 'INV.2020-08-01.1', 1, 'B.2020-07-31.1', 'M2', 48000.00, 2, 0.00, 96000.00),
(2, 'INV.2020-08-01.2', 1, 'B.2020-07-31.3', 'M2', 55000.00, 10, 0.00, 550000.00),
(3, 'INV.2020-08-01.3', 1, 'B.2020-07-31.4', 'M2', 65000.00, 10, 0.00, 650000.00),
(4, 'INV.2020-08-01.4', 1, 'B.2020-07-31.17', 'Bj', 16000.00, 10, 0.00, 160000.00),
(5, 'INV.2020-08-01.4', 2, 'B.2020-07-31.4', 'M2', 65000.00, 5, 0.00, 325000.00),
(6, 'INV.2020-08-01.5', 1, 'B.2020-07-31.3', 'M2', 55000.00, 10, 0.00, 550000.00),
(7, 'INV.2020-08-01.6', 1, 'B.2020-07-31.5', 'M2', 70000.00, 30, 0.00, 2100000.00),
(8, 'INV.2020-08-01.6', 2, 'B.2020-07-31.3', 'M2', 55000.00, 5, 0.00, 275000.00),
(9, 'INV.2020-08-01.7', 1, 'B.2020-07-31.3', 'M2', 55000.00, 80, 0.00, 4400000.00),
(10, 'INV.2020-08-01.8', 1, 'B.2020-07-31.7', 'M2', 63000.00, 10, 0.00, 630000.00);

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
  `statusdetail` enum('sudah','belum') NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailreturpenjualan`
--

CREATE TABLE `tb_detailreturpenjualan` (
  `id_detailreturpenjualan` int(11) NOT NULL,
  `id_retur` varchar(50) NOT NULL,
  `id_detailpenjualan` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jumlahretur` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detailreturpenjualan`
--

INSERT INTO `tb_detailreturpenjualan` (`id_detailreturpenjualan`, `id_retur`, `id_detailpenjualan`, `id_barang`, `satuan`, `jumlahretur`, `harga`, `status`) VALUES
(2, 'RPJ.2020-07-23.1', 2, '2020-07-14-a-2', 'M2', 2, 60000, 1),
(3, 'RPJ.2020-07-24.1', 3, '2020-07-14-a-2', 'M2', 1, 60000, 1),
(4, 'RPJ.2020-07-24.2', 2, '2020-07-14-a-2', 'M2', 1, 60000, 1),
(6, 'RPJ.2020-07-24.3', 4, '2020-07-14-a-2', 'M2', 4, 60000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga`
--

CREATE TABLE `tb_harga` (
  `id_harga` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `minqtt` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) DEFAULT NULL,
  `tgl_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_harga`
--

INSERT INTO `tb_harga` (`id_harga`, `id_barang`, `harga`, `minqtt`, `id_user`, `tgl_update`) VALUES
(1, 'K00011', 60000, 20, 8, '2020-07-13'),
(5, 'B.2020-07-31.1', 55000, 1, 8, '2020-07-31'),
(6, 'B.2020-07-31.2', 57000, 1, 8, '2020-07-31'),
(7, 'B.2020-07-31.3', 62000, 1, 8, '2020-07-31'),
(8, 'B.2020-07-31.4', 72000, 1, 8, '2020-07-31'),
(9, 'B.2020-07-31.5', 77000, 1, 8, '2020-07-31'),
(10, 'B.2020-07-31.1', 2000000, 2, 8, '2020-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hutang`
--

CREATE TABLE `tb_hutang` (
  `id_hutang` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `totalpo` int(11) NOT NULL,
  `sisabayar` int(11) NOT NULL,
  `sudahbayar` int(11) NOT NULL,
  `tgljatuhtempo` date NOT NULL,
  `status` enum('lunas','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` varchar(20) NOT NULL,
  `id_do` varchar(20) NOT NULL,
  `tglinv` date NOT NULL,
  `total` int(11) NOT NULL,
  `id_jenispembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenisbarang`
--

CREATE TABLE `tb_jenisbarang` (
  `id_jenisbarang` int(11) NOT NULL,
  `jenisbarang` varchar(50) NOT NULL,
  `tgl_update` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenisbarang`
--

INSERT INTO `tb_jenisbarang` (`id_jenisbarang`, `jenisbarang`, `tgl_update`, `id_user`) VALUES
(4, 'Natural K-250', '2020-07-31', 8),
(5, 'Natural K-300', '2020-07-14', 8),
(6, 'Natural K-350', '2020-07-14', 8),
(7, 'Natural K-400', '2020-07-14', 8),
(8, 'Merah K-300', '2020-07-14', 8),
(9, 'Merah K-350', '2020-07-14', 8),
(10, '10 X 20 X 40', '2020-07-14', 8),
(11, '15 X 25 X 40', '2020-07-14', 8),
(13, '15 X 30 X 50', '2020-08-01', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenispembayaran`
--

CREATE TABLE `tb_jenispembayaran` (
  `id_jenispembayaran` int(11) NOT NULL,
  `jenispembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kas`
--

CREATE TABLE `tb_kas` (
  `id_kas` int(11) NOT NULL,
  `tglkas` date NOT NULL,
  `ket` varchar(200) NOT NULL,
  `nominal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kas`
--

INSERT INTO `tb_kas` (`id_kas`, `tglkas`, `ket`, `nominal`, `id_user`) VALUES
(1, '1970-01-01', 'ghg', 20000, 8),
(2, '1970-01-01', 'asd', 20000, 8),
(3, '2020-07-28', 'aqwe', 10000000, 8),
(4, '2020-07-07', 'sad', 20000, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjangbelanja`
--

CREATE TABLE `tb_keranjangbelanja` (
  `id_keranjangbelanja` int(11) NOT NULL,
  `id_pembelian` varchar(20) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `diskon` double NOT NULL,
  `qtt` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kode`
--

CREATE TABLE `tb_kode` (
  `id_kode` int(11) NOT NULL,
  `modultransaksi` varchar(50) NOT NULL,
  `kodefinal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kode`
--

INSERT INTO `tb_kode` (`id_kode`, `modultransaksi`, `kodefinal`) VALUES
(5, 'pembelian', 'PBL.tanggal.no'),
(6, 'penjualan', 'INV.tanggal.no'),
(7, 'returpenjualan', 'RPJ.tanggal.no'),
(8, 'suratjalan', 'SJ.tanggal.no'),
(9, 'barang', 'B.tanggal.no');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konversi`
--

CREATE TABLE `tb_konversi` (
  `id_konversi` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `qttawal` int(11) NOT NULL,
  `satuan` int(11) NOT NULL,
  `qttkonversi` int(11) NOT NULL,
  `tgl_update` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konversi`
--

INSERT INTO `tb_konversi` (`id_konversi`, `id_satuan`, `qttawal`, `satuan`, `qttkonversi`, `tgl_update`, `id_user`) VALUES
(1, 3, 1, 2, 43, '2020-07-13', 8),
(2, 4, 1, 5, 43, '2020-07-14', 8),
(3, 1, 1, 2, 43, '2020-07-14', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kota`
--

CREATE TABLE `tb_kota` (
  `id_kota` char(4) NOT NULL,
  `id_provinsi` char(4) NOT NULL,
  `name_kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kota`
--

INSERT INTO `tb_kota` (`id_kota`, `id_provinsi`, `name_kota`) VALUES
('1101', '11', 'KABUPATEN SIMEULUE'),
('1102', '11', 'KABUPATEN ACEH SINGKIL'),
('1103', '11', 'KABUPATEN ACEH SELATAN'),
('1104', '11', 'KABUPATEN ACEH TENGGARA'),
('1105', '11', 'KABUPATEN ACEH TIMUR'),
('1106', '11', 'KABUPATEN ACEH TENGAH'),
('1107', '11', 'KABUPATEN ACEH BARAT'),
('1108', '11', 'KABUPATEN ACEH BESAR'),
('1109', '11', 'KABUPATEN PIDIE'),
('1110', '11', 'KABUPATEN BIREUEN'),
('1111', '11', 'KABUPATEN ACEH UTARA'),
('1112', '11', 'KABUPATEN ACEH BARAT DAYA'),
('1113', '11', 'KABUPATEN GAYO LUES'),
('1114', '11', 'KABUPATEN ACEH TAMIANG'),
('1115', '11', 'KABUPATEN NAGAN RAYA'),
('1116', '11', 'KABUPATEN ACEH JAYA'),
('1117', '11', 'KABUPATEN BENER MERIAH'),
('1118', '11', 'KABUPATEN PIDIE JAYA'),
('1171', '11', 'KOTA BANDA ACEH'),
('1172', '11', 'KOTA SABANG'),
('1173', '11', 'KOTA LANGSA'),
('1174', '11', 'KOTA LHOKSEUMAWE'),
('1175', '11', 'KOTA SUBULUSSALAM'),
('1201', '12', 'KABUPATEN NIAS'),
('1202', '12', 'KABUPATEN MANDAILING NATAL'),
('1203', '12', 'KABUPATEN TAPANULI SELATAN'),
('1204', '12', 'KABUPATEN TAPANULI TENGAH'),
('1205', '12', 'KABUPATEN TAPANULI UTARA'),
('1206', '12', 'KABUPATEN TOBA SAMOSIR'),
('1207', '12', 'KABUPATEN LABUHAN BATU'),
('1208', '12', 'KABUPATEN ASAHAN'),
('1209', '12', 'KABUPATEN SIMALUNGUN'),
('1210', '12', 'KABUPATEN DAIRI'),
('1211', '12', 'KABUPATEN KARO'),
('1212', '12', 'KABUPATEN DELI SERDANG'),
('1213', '12', 'KABUPATEN LANGKAT'),
('1214', '12', 'KABUPATEN NIAS SELATAN'),
('1215', '12', 'KABUPATEN HUMBANG HASUNDUTAN'),
('1216', '12', 'KABUPATEN PAKPAK BHARAT'),
('1217', '12', 'KABUPATEN SAMOSIR'),
('1218', '12', 'KABUPATEN SERDANG BEDAGAI'),
('1219', '12', 'KABUPATEN BATU BARA'),
('1220', '12', 'KABUPATEN PADANG LAWAS UTARA'),
('1221', '12', 'KABUPATEN PADANG LAWAS'),
('1222', '12', 'KABUPATEN LABUHAN BATU SELATAN'),
('1223', '12', 'KABUPATEN LABUHAN BATU UTARA'),
('1224', '12', 'KABUPATEN NIAS UTARA'),
('1225', '12', 'KABUPATEN NIAS BARAT'),
('1271', '12', 'KOTA SIBOLGA'),
('1272', '12', 'KOTA TANJUNG BALAI'),
('1273', '12', 'KOTA PEMATANG SIANTAR'),
('1274', '12', 'KOTA TEBING TINGGI'),
('1275', '12', 'KOTA MEDAN'),
('1276', '12', 'KOTA BINJAI'),
('1277', '12', 'KOTA PADANGSIDIMPUAN'),
('1278', '12', 'KOTA GUNUNGSITOLI'),
('1301', '13', 'KABUPATEN KEPULAUAN MENTAWAI'),
('1302', '13', 'KABUPATEN PESISIR SELATAN'),
('1303', '13', 'KABUPATEN SOLOK'),
('1304', '13', 'KABUPATEN SIJUNJUNG'),
('1305', '13', 'KABUPATEN TANAH DATAR'),
('1306', '13', 'KABUPATEN PADANG PARIAMAN'),
('1307', '13', 'KABUPATEN AGAM'),
('1308', '13', 'KABUPATEN LIMA PULUH KOTA'),
('1309', '13', 'KABUPATEN PASAMAN'),
('1310', '13', 'KABUPATEN SOLOK SELATAN'),
('1311', '13', 'KABUPATEN DHARMASRAYA'),
('1312', '13', 'KABUPATEN PASAMAN BARAT'),
('1371', '13', 'KOTA PADANG'),
('1372', '13', 'KOTA SOLOK'),
('1373', '13', 'KOTA SAWAH LUNTO'),
('1374', '13', 'KOTA PADANG PANJANG'),
('1375', '13', 'KOTA BUKITTINGGI'),
('1376', '13', 'KOTA PAYAKUMBUH'),
('1377', '13', 'KOTA PARIAMAN'),
('1401', '14', 'KABUPATEN KUANTAN SINGINGI'),
('1402', '14', 'KABUPATEN INDRAGIRI HULU'),
('1403', '14', 'KABUPATEN INDRAGIRI HILIR'),
('1404', '14', 'KABUPATEN PELALAWAN'),
('1405', '14', 'KABUPATEN S I A K'),
('1406', '14', 'KABUPATEN KAMPAR'),
('1407', '14', 'KABUPATEN ROKAN HULU'),
('1408', '14', 'KABUPATEN BENGKALIS'),
('1409', '14', 'KABUPATEN ROKAN HILIR'),
('1410', '14', 'KABUPATEN KEPULAUAN MERANTI'),
('1471', '14', 'KOTA PEKANBARU'),
('1473', '14', 'KOTA D U M A I'),
('1501', '15', 'KABUPATEN KERINCI'),
('1502', '15', 'KABUPATEN MERANGIN'),
('1503', '15', 'KABUPATEN SAROLANGUN'),
('1504', '15', 'KABUPATEN BATANG HARI'),
('1505', '15', 'KABUPATEN MUARO JAMBI'),
('1506', '15', 'KABUPATEN TANJUNG JABUNG TIMUR'),
('1507', '15', 'KABUPATEN TANJUNG JABUNG BARAT'),
('1508', '15', 'KABUPATEN TEBO'),
('1509', '15', 'KABUPATEN BUNGO'),
('1571', '15', 'KOTA JAMBI'),
('1572', '15', 'KOTA SUNGAI PENUH'),
('1601', '16', 'KABUPATEN OGAN KOMERING ULU'),
('1602', '16', 'KABUPATEN OGAN KOMERING ILIR'),
('1603', '16', 'KABUPATEN MUARA ENIM'),
('1604', '16', 'KABUPATEN LAHAT'),
('1605', '16', 'KABUPATEN MUSI RAWAS'),
('1606', '16', 'KABUPATEN MUSI BANYUASIN'),
('1607', '16', 'KABUPATEN BANYU ASIN'),
('1608', '16', 'KABUPATEN OGAN KOMERING ULU SELATAN'),
('1609', '16', 'KABUPATEN OGAN KOMERING ULU TIMUR'),
('1610', '16', 'KABUPATEN OGAN ILIR'),
('1611', '16', 'KABUPATEN EMPAT LAWANG'),
('1612', '16', 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
('1613', '16', 'KABUPATEN MUSI RAWAS UTARA'),
('1671', '16', 'KOTA PALEMBANG'),
('1672', '16', 'KOTA PRABUMULIH'),
('1673', '16', 'KOTA PAGAR ALAM'),
('1674', '16', 'KOTA LUBUKLINGGAU'),
('1701', '17', 'KABUPATEN BENGKULU SELATAN'),
('1702', '17', 'KABUPATEN REJANG LEBONG'),
('1703', '17', 'KABUPATEN BENGKULU UTARA'),
('1704', '17', 'KABUPATEN KAUR'),
('1705', '17', 'KABUPATEN SELUMA'),
('1706', '17', 'KABUPATEN MUKOMUKO'),
('1707', '17', 'KABUPATEN LEBONG'),
('1708', '17', 'KABUPATEN KEPAHIANG'),
('1709', '17', 'KABUPATEN BENGKULU TENGAH'),
('1771', '17', 'KOTA BENGKULU'),
('1801', '18', 'KABUPATEN LAMPUNG BARAT'),
('1802', '18', 'KABUPATEN TANGGAMUS'),
('1803', '18', 'KABUPATEN LAMPUNG SELATAN'),
('1804', '18', 'KABUPATEN LAMPUNG TIMUR'),
('1805', '18', 'KABUPATEN LAMPUNG TENGAH'),
('1806', '18', 'KABUPATEN LAMPUNG UTARA'),
('1807', '18', 'KABUPATEN WAY KANAN'),
('1808', '18', 'KABUPATEN TULANGBAWANG'),
('1809', '18', 'KABUPATEN PESAWARAN'),
('1810', '18', 'KABUPATEN PRINGSEWU'),
('1811', '18', 'KABUPATEN MESUJI'),
('1812', '18', 'KABUPATEN TULANG BAWANG BARAT'),
('1813', '18', 'KABUPATEN PESISIR BARAT'),
('1871', '18', 'KOTA BANDAR LAMPUNG'),
('1872', '18', 'KOTA METRO'),
('1901', '19', 'KABUPATEN BANGKA'),
('1902', '19', 'KABUPATEN BELITUNG'),
('1903', '19', 'KABUPATEN BANGKA BARAT'),
('1904', '19', 'KABUPATEN BANGKA TENGAH'),
('1905', '19', 'KABUPATEN BANGKA SELATAN'),
('1906', '19', 'KABUPATEN BELITUNG TIMUR'),
('1971', '19', 'KOTA PANGKAL PINANG'),
('2101', '21', 'KABUPATEN KARIMUN'),
('2102', '21', 'KABUPATEN BINTAN'),
('2103', '21', 'KABUPATEN NATUNA'),
('2104', '21', 'KABUPATEN LINGGA'),
('2105', '21', 'KABUPATEN KEPULAUAN ANAMBAS'),
('2171', '21', 'KOTA B A T A M'),
('2172', '21', 'KOTA TANJUNG PINANG'),
('3101', '31', 'KABUPATEN KEPULAUAN SERIBU'),
('3171', '31', 'KOTA JAKARTA SELATAN'),
('3172', '31', 'KOTA JAKARTA TIMUR'),
('3173', '31', 'KOTA JAKARTA PUSAT'),
('3174', '31', 'KOTA JAKARTA BARAT'),
('3175', '31', 'KOTA JAKARTA UTARA'),
('3201', '32', 'KABUPATEN BOGOR'),
('3202', '32', 'KABUPATEN SUKABUMI'),
('3203', '32', 'KABUPATEN CIANJUR'),
('3204', '32', 'KABUPATEN BANDUNG'),
('3205', '32', 'KABUPATEN GARUT'),
('3206', '32', 'KABUPATEN TASIKMALAYA'),
('3207', '32', 'KABUPATEN CIAMIS'),
('3208', '32', 'KABUPATEN KUNINGAN'),
('3209', '32', 'KABUPATEN CIREBON'),
('3210', '32', 'KABUPATEN MAJALENGKA'),
('3211', '32', 'KABUPATEN SUMEDANG'),
('3212', '32', 'KABUPATEN INDRAMAYU'),
('3213', '32', 'KABUPATEN SUBANG'),
('3214', '32', 'KABUPATEN PURWAKARTA'),
('3215', '32', 'KABUPATEN KARAWANG'),
('3216', '32', 'KABUPATEN BEKASI'),
('3217', '32', 'KABUPATEN BANDUNG BARAT'),
('3218', '32', 'KABUPATEN PANGANDARAN'),
('3271', '32', 'KOTA BOGOR'),
('3272', '32', 'KOTA SUKABUMI'),
('3273', '32', 'KOTA BANDUNG'),
('3274', '32', 'KOTA CIREBON'),
('3275', '32', 'KOTA BEKASI'),
('3276', '32', 'KOTA DEPOK'),
('3277', '32', 'KOTA CIMAHI'),
('3278', '32', 'KOTA TASIKMALAYA'),
('3279', '32', 'KOTA BANJAR'),
('3301', '33', 'KABUPATEN CILACAP'),
('3302', '33', 'KABUPATEN BANYUMAS'),
('3303', '33', 'KABUPATEN PURBALINGGA'),
('3304', '33', 'KABUPATEN BANJARNEGARA'),
('3305', '33', 'KABUPATEN KEBUMEN'),
('3306', '33', 'KABUPATEN PURWOREJO'),
('3307', '33', 'KABUPATEN WONOSOBO'),
('3308', '33', 'KABUPATEN MAGELANG'),
('3309', '33', 'KABUPATEN BOYOLALI'),
('3310', '33', 'KABUPATEN KLATEN'),
('3311', '33', 'KABUPATEN SUKOHARJO'),
('3312', '33', 'KABUPATEN WONOGIRI'),
('3313', '33', 'KABUPATEN KARANGANYAR'),
('3314', '33', 'KABUPATEN SRAGEN'),
('3315', '33', 'KABUPATEN GROBOGAN'),
('3316', '33', 'KABUPATEN BLORA'),
('3317', '33', 'KABUPATEN REMBANG'),
('3318', '33', 'KABUPATEN PATI'),
('3319', '33', 'KABUPATEN KUDUS'),
('3320', '33', 'KABUPATEN JEPARA'),
('3321', '33', 'KABUPATEN DEMAK'),
('3322', '33', 'KABUPATEN SEMARANG'),
('3323', '33', 'KABUPATEN TEMANGGUNG'),
('3324', '33', 'KABUPATEN KENDAL'),
('3325', '33', 'KABUPATEN BATANG'),
('3326', '33', 'KABUPATEN PEKALONGAN'),
('3327', '33', 'KABUPATEN PEMALANG'),
('3328', '33', 'KABUPATEN TEGAL'),
('3329', '33', 'KABUPATEN BREBES'),
('3371', '33', 'KOTA MAGELANG'),
('3372', '33', 'KOTA SURAKARTA'),
('3373', '33', 'KOTA SALATIGA'),
('3374', '33', 'KOTA SEMARANG'),
('3375', '33', 'KOTA PEKALONGAN'),
('3376', '33', 'KOTA TEGAL'),
('3401', '34', 'KABUPATEN KULON PROGO'),
('3402', '34', 'KABUPATEN BANTUL'),
('3403', '34', 'KABUPATEN GUNUNG KIDUL'),
('3404', '34', 'KABUPATEN SLEMAN'),
('3471', '34', 'KOTA YOGYAKARTA'),
('3501', '35', 'KABUPATEN PACITAN'),
('3502', '35', 'KABUPATEN PONOROGO'),
('3503', '35', 'KABUPATEN TRENGGALEK'),
('3504', '35', 'KABUPATEN TULUNGAGUNG'),
('3505', '35', 'KABUPATEN BLITAR'),
('3506', '35', 'KABUPATEN KEDIRI'),
('3507', '35', 'KABUPATEN MALANG'),
('3508', '35', 'KABUPATEN LUMAJANG'),
('3509', '35', 'KABUPATEN JEMBER'),
('3510', '35', 'KABUPATEN BANYUWANGI'),
('3511', '35', 'KABUPATEN BONDOWOSO'),
('3512', '35', 'KABUPATEN SITUBONDO'),
('3513', '35', 'KABUPATEN PROBOLINGGO'),
('3514', '35', 'KABUPATEN PASURUAN'),
('3515', '35', 'KABUPATEN SIDOARJO'),
('3516', '35', 'KABUPATEN MOJOKERTO'),
('3517', '35', 'KABUPATEN JOMBANG'),
('3518', '35', 'KABUPATEN NGANJUK'),
('3519', '35', 'KABUPATEN MADIUN'),
('3520', '35', 'KABUPATEN MAGETAN'),
('3521', '35', 'KABUPATEN NGAWI'),
('3522', '35', 'KABUPATEN BOJONEGORO'),
('3523', '35', 'KABUPATEN TUBAN'),
('3524', '35', 'KABUPATEN LAMONGAN'),
('3525', '35', 'KABUPATEN GRESIK'),
('3526', '35', 'KABUPATEN BANGKALAN'),
('3527', '35', 'KABUPATEN SAMPANG'),
('3528', '35', 'KABUPATEN PAMEKASAN'),
('3529', '35', 'KABUPATEN SUMENEP'),
('3571', '35', 'KOTA KEDIRI'),
('3572', '35', 'KOTA BLITAR'),
('3573', '35', 'KOTA MALANG'),
('3574', '35', 'KOTA PROBOLINGGO'),
('3575', '35', 'KOTA PASURUAN'),
('3576', '35', 'KOTA MOJOKERTO'),
('3577', '35', 'KOTA MADIUN'),
('3578', '35', 'KOTA SURABAYA'),
('3579', '35', 'KOTA BATU'),
('3601', '36', 'KABUPATEN PANDEGLANG'),
('3602', '36', 'KABUPATEN LEBAK'),
('3603', '36', 'KABUPATEN TANGERANG'),
('3604', '36', 'KABUPATEN SERANG'),
('3671', '36', 'KOTA TANGERANG'),
('3672', '36', 'KOTA CILEGON'),
('3673', '36', 'KOTA SERANG'),
('3674', '36', 'KOTA TANGERANG SELATAN'),
('5101', '51', 'KABUPATEN JEMBRANA'),
('5102', '51', 'KABUPATEN TABANAN'),
('5103', '51', 'KABUPATEN BADUNG'),
('5104', '51', 'KABUPATEN GIANYAR'),
('5105', '51', 'KABUPATEN KLUNGKUNG'),
('5106', '51', 'KABUPATEN BANGLI'),
('5107', '51', 'KABUPATEN KARANG ASEM'),
('5108', '51', 'KABUPATEN BULELENG'),
('5171', '51', 'KOTA DENPASAR'),
('5201', '52', 'KABUPATEN LOMBOK BARAT'),
('5202', '52', 'KABUPATEN LOMBOK TENGAH'),
('5203', '52', 'KABUPATEN LOMBOK TIMUR'),
('5204', '52', 'KABUPATEN SUMBAWA'),
('5205', '52', 'KABUPATEN DOMPU'),
('5206', '52', 'KABUPATEN BIMA'),
('5207', '52', 'KABUPATEN SUMBAWA BARAT'),
('5208', '52', 'KABUPATEN LOMBOK UTARA'),
('5271', '52', 'KOTA MATARAM'),
('5272', '52', 'KOTA BIMA'),
('5301', '53', 'KABUPATEN SUMBA BARAT'),
('5302', '53', 'KABUPATEN SUMBA TIMUR'),
('5303', '53', 'KABUPATEN KUPANG'),
('5304', '53', 'KABUPATEN TIMOR TENGAH SELATAN'),
('5305', '53', 'KABUPATEN TIMOR TENGAH UTARA'),
('5306', '53', 'KABUPATEN BELU'),
('5307', '53', 'KABUPATEN ALOR'),
('5308', '53', 'KABUPATEN LEMBATA'),
('5309', '53', 'KABUPATEN FLORES TIMUR'),
('5310', '53', 'KABUPATEN SIKKA'),
('5311', '53', 'KABUPATEN ENDE'),
('5312', '53', 'KABUPATEN NGADA'),
('5313', '53', 'KABUPATEN MANGGARAI'),
('5314', '53', 'KABUPATEN ROTE NDAO'),
('5315', '53', 'KABUPATEN MANGGARAI BARAT'),
('5316', '53', 'KABUPATEN SUMBA TENGAH'),
('5317', '53', 'KABUPATEN SUMBA BARAT DAYA'),
('5318', '53', 'KABUPATEN NAGEKEO'),
('5319', '53', 'KABUPATEN MANGGARAI TIMUR'),
('5320', '53', 'KABUPATEN SABU RAIJUA'),
('5321', '53', 'KABUPATEN MALAKA'),
('5371', '53', 'KOTA KUPANG'),
('6101', '61', 'KABUPATEN SAMBAS'),
('6102', '61', 'KABUPATEN BENGKAYANG'),
('6103', '61', 'KABUPATEN LANDAK'),
('6104', '61', 'KABUPATEN MEMPAWAH'),
('6105', '61', 'KABUPATEN SANGGAU'),
('6106', '61', 'KABUPATEN KETAPANG'),
('6107', '61', 'KABUPATEN SINTANG'),
('6108', '61', 'KABUPATEN KAPUAS HULU'),
('6109', '61', 'KABUPATEN SEKADAU'),
('6110', '61', 'KABUPATEN MELAWI'),
('6111', '61', 'KABUPATEN KAYONG UTARA'),
('6112', '61', 'KABUPATEN KUBU RAYA'),
('6171', '61', 'KOTA PONTIANAK'),
('6172', '61', 'KOTA SINGKAWANG'),
('6201', '62', 'KABUPATEN KOTAWARINGIN BARAT'),
('6202', '62', 'KABUPATEN KOTAWARINGIN TIMUR'),
('6203', '62', 'KABUPATEN KAPUAS'),
('6204', '62', 'KABUPATEN BARITO SELATAN'),
('6205', '62', 'KABUPATEN BARITO UTARA'),
('6206', '62', 'KABUPATEN SUKAMARA'),
('6207', '62', 'KABUPATEN LAMANDAU'),
('6208', '62', 'KABUPATEN SERUYAN'),
('6209', '62', 'KABUPATEN KATINGAN'),
('6210', '62', 'KABUPATEN PULANG PISAU'),
('6211', '62', 'KABUPATEN GUNUNG MAS'),
('6212', '62', 'KABUPATEN BARITO TIMUR'),
('6213', '62', 'KABUPATEN MURUNG RAYA'),
('6271', '62', 'KOTA PALANGKA RAYA'),
('6301', '63', 'KABUPATEN TANAH LAUT'),
('6302', '63', 'KABUPATEN KOTA BARU'),
('6303', '63', 'KABUPATEN BANJAR'),
('6304', '63', 'KABUPATEN BARITO KUALA'),
('6305', '63', 'KABUPATEN TAPIN'),
('6306', '63', 'KABUPATEN HULU SUNGAI SELATAN'),
('6307', '63', 'KABUPATEN HULU SUNGAI TENGAH'),
('6308', '63', 'KABUPATEN HULU SUNGAI UTARA'),
('6309', '63', 'KABUPATEN TABALONG'),
('6310', '63', 'KABUPATEN TANAH BUMBU'),
('6311', '63', 'KABUPATEN BALANGAN'),
('6371', '63', 'KOTA BANJARMASIN'),
('6372', '63', 'KOTA BANJAR BARU'),
('6401', '64', 'KABUPATEN PASER'),
('6402', '64', 'KABUPATEN KUTAI BARAT'),
('6403', '64', 'KABUPATEN KUTAI KARTANEGARA'),
('6404', '64', 'KABUPATEN KUTAI TIMUR'),
('6405', '64', 'KABUPATEN BERAU'),
('6409', '64', 'KABUPATEN PENAJAM PASER UTARA'),
('6411', '64', 'KABUPATEN MAHAKAM HULU'),
('6471', '64', 'KOTA BALIKPAPAN'),
('6472', '64', 'KOTA SAMARINDA'),
('6474', '64', 'KOTA BONTANG'),
('6501', '65', 'KABUPATEN MALINAU'),
('6502', '65', 'KABUPATEN BULUNGAN'),
('6503', '65', 'KABUPATEN TANA TIDUNG'),
('6504', '65', 'KABUPATEN NUNUKAN'),
('6571', '65', 'KOTA TARAKAN'),
('7101', '71', 'KABUPATEN BOLAANG MONGONDOW'),
('7102', '71', 'KABUPATEN MINAHASA'),
('7103', '71', 'KABUPATEN KEPULAUAN SANGIHE'),
('7104', '71', 'KABUPATEN KEPULAUAN TALAUD'),
('7105', '71', 'KABUPATEN MINAHASA SELATAN'),
('7106', '71', 'KABUPATEN MINAHASA UTARA'),
('7107', '71', 'KABUPATEN BOLAANG MONGONDOW UTARA'),
('7108', '71', 'KABUPATEN SIAU TAGULANDANG BIARO'),
('7109', '71', 'KABUPATEN MINAHASA TENGGARA'),
('7110', '71', 'KABUPATEN BOLAANG MONGONDOW SELATAN'),
('7111', '71', 'KABUPATEN BOLAANG MONGONDOW TIMUR'),
('7171', '71', 'KOTA MANADO'),
('7172', '71', 'KOTA BITUNG'),
('7173', '71', 'KOTA TOMOHON'),
('7174', '71', 'KOTA KOTAMOBAGU'),
('7201', '72', 'KABUPATEN BANGGAI KEPULAUAN'),
('7202', '72', 'KABUPATEN BANGGAI'),
('7203', '72', 'KABUPATEN MOROWALI'),
('7204', '72', 'KABUPATEN POSO'),
('7205', '72', 'KABUPATEN DONGGALA'),
('7206', '72', 'KABUPATEN TOLI-TOLI'),
('7207', '72', 'KABUPATEN BUOL'),
('7208', '72', 'KABUPATEN PARIGI MOUTONG'),
('7209', '72', 'KABUPATEN TOJO UNA-UNA'),
('7210', '72', 'KABUPATEN SIGI'),
('7211', '72', 'KABUPATEN BANGGAI LAUT'),
('7212', '72', 'KABUPATEN MOROWALI UTARA'),
('7271', '72', 'KOTA PALU'),
('7301', '73', 'KABUPATEN KEPULAUAN SELAYAR'),
('7302', '73', 'KABUPATEN BULUKUMBA'),
('7303', '73', 'KABUPATEN BANTAENG'),
('7304', '73', 'KABUPATEN JENEPONTO'),
('7305', '73', 'KABUPATEN TAKALAR'),
('7306', '73', 'KABUPATEN GOWA'),
('7307', '73', 'KABUPATEN SINJAI'),
('7308', '73', 'KABUPATEN MAROS'),
('7309', '73', 'KABUPATEN PANGKAJENE DAN KEPULAUAN'),
('7310', '73', 'KABUPATEN BARRU'),
('7311', '73', 'KABUPATEN BONE'),
('7312', '73', 'KABUPATEN SOPPENG'),
('7313', '73', 'KABUPATEN WAJO'),
('7314', '73', 'KABUPATEN SIDENRENG RAPPANG'),
('7315', '73', 'KABUPATEN PINRANG'),
('7316', '73', 'KABUPATEN ENREKANG'),
('7317', '73', 'KABUPATEN LUWU'),
('7318', '73', 'KABUPATEN TANA TORAJA'),
('7322', '73', 'KABUPATEN LUWU UTARA'),
('7325', '73', 'KABUPATEN LUWU TIMUR'),
('7326', '73', 'KABUPATEN TORAJA UTARA'),
('7371', '73', 'KOTA MAKASSAR'),
('7372', '73', 'KOTA PAREPARE'),
('7373', '73', 'KOTA PALOPO'),
('7401', '74', 'KABUPATEN BUTON'),
('7402', '74', 'KABUPATEN MUNA'),
('7403', '74', 'KABUPATEN KONAWE'),
('7404', '74', 'KABUPATEN KOLAKA'),
('7405', '74', 'KABUPATEN KONAWE SELATAN'),
('7406', '74', 'KABUPATEN BOMBANA'),
('7407', '74', 'KABUPATEN WAKATOBI'),
('7408', '74', 'KABUPATEN KOLAKA UTARA'),
('7409', '74', 'KABUPATEN BUTON UTARA'),
('7410', '74', 'KABUPATEN KONAWE UTARA'),
('7411', '74', 'KABUPATEN KOLAKA TIMUR'),
('7412', '74', 'KABUPATEN KONAWE KEPULAUAN'),
('7413', '74', 'KABUPATEN MUNA BARAT'),
('7414', '74', 'KABUPATEN BUTON TENGAH'),
('7415', '74', 'KABUPATEN BUTON SELATAN'),
('7471', '74', 'KOTA KENDARI'),
('7472', '74', 'KOTA BAUBAU'),
('7501', '75', 'KABUPATEN BOALEMO'),
('7502', '75', 'KABUPATEN GORONTALO'),
('7503', '75', 'KABUPATEN POHUWATO'),
('7504', '75', 'KABUPATEN BONE BOLANGO'),
('7505', '75', 'KABUPATEN GORONTALO UTARA'),
('7571', '75', 'KOTA GORONTALO'),
('7601', '76', 'KABUPATEN MAJENE'),
('7602', '76', 'KABUPATEN POLEWALI MANDAR'),
('7603', '76', 'KABUPATEN MAMASA'),
('7604', '76', 'KABUPATEN MAMUJU'),
('7605', '76', 'KABUPATEN MAMUJU UTARA'),
('7606', '76', 'KABUPATEN MAMUJU TENGAH'),
('8101', '81', 'KABUPATEN MALUKU TENGGARA BARAT'),
('8102', '81', 'KABUPATEN MALUKU TENGGARA'),
('8103', '81', 'KABUPATEN MALUKU TENGAH'),
('8104', '81', 'KABUPATEN BURU'),
('8105', '81', 'KABUPATEN KEPULAUAN ARU'),
('8106', '81', 'KABUPATEN SERAM BAGIAN BARAT'),
('8107', '81', 'KABUPATEN SERAM BAGIAN TIMUR'),
('8108', '81', 'KABUPATEN MALUKU BARAT DAYA'),
('8109', '81', 'KABUPATEN BURU SELATAN'),
('8171', '81', 'KOTA AMBON'),
('8172', '81', 'KOTA TUAL'),
('8201', '82', 'KABUPATEN HALMAHERA BARAT'),
('8202', '82', 'KABUPATEN HALMAHERA TENGAH'),
('8203', '82', 'KABUPATEN KEPULAUAN SULA'),
('8204', '82', 'KABUPATEN HALMAHERA SELATAN'),
('8205', '82', 'KABUPATEN HALMAHERA UTARA'),
('8206', '82', 'KABUPATEN HALMAHERA TIMUR'),
('8207', '82', 'KABUPATEN PULAU MOROTAI'),
('8208', '82', 'KABUPATEN PULAU TALIABU'),
('8271', '82', 'KOTA TERNATE'),
('8272', '82', 'KOTA TIDORE KEPULAUAN'),
('9101', '91', 'KABUPATEN FAKFAK'),
('9102', '91', 'KABUPATEN KAIMANA'),
('9103', '91', 'KABUPATEN TELUK WONDAMA'),
('9104', '91', 'KABUPATEN TELUK BINTUNI'),
('9105', '91', 'KABUPATEN MANOKWARI'),
('9106', '91', 'KABUPATEN SORONG SELATAN'),
('9107', '91', 'KABUPATEN SORONG'),
('9108', '91', 'KABUPATEN RAJA AMPAT'),
('9109', '91', 'KABUPATEN TAMBRAUW'),
('9110', '91', 'KABUPATEN MAYBRAT'),
('9111', '91', 'KABUPATEN MANOKWARI SELATAN'),
('9112', '91', 'KABUPATEN PEGUNUNGAN ARFAK'),
('9171', '91', 'KOTA SORONG'),
('9401', '94', 'KABUPATEN MERAUKE'),
('9402', '94', 'KABUPATEN JAYAWIJAYA'),
('9403', '94', 'KABUPATEN JAYAPURA'),
('9404', '94', 'KABUPATEN NABIRE'),
('9408', '94', 'KABUPATEN KEPULAUAN YAPEN'),
('9409', '94', 'KABUPATEN BIAK NUMFOR'),
('9410', '94', 'KABUPATEN PANIAI'),
('9411', '94', 'KABUPATEN PUNCAK JAYA'),
('9412', '94', 'KABUPATEN MIMIKA'),
('9413', '94', 'KABUPATEN BOVEN DIGOEL'),
('9414', '94', 'KABUPATEN MAPPI'),
('9415', '94', 'KABUPATEN ASMAT'),
('9416', '94', 'KABUPATEN YAHUKIMO'),
('9417', '94', 'KABUPATEN PEGUNUNGAN BINTANG'),
('9418', '94', 'KABUPATEN TOLIKARA'),
('9419', '94', 'KABUPATEN SARMI'),
('9420', '94', 'KABUPATEN KEEROM'),
('9426', '94', 'KABUPATEN WAROPEN'),
('9427', '94', 'KABUPATEN SUPIORI'),
('9428', '94', 'KABUPATEN MAMBERAMO RAYA'),
('9429', '94', 'KABUPATEN NDUGA'),
('9430', '94', 'KABUPATEN LANNY JAYA'),
('9431', '94', 'KABUPATEN MAMBERAMO TENGAH'),
('9432', '94', 'KABUPATEN YALIMO'),
('9433', '94', 'KABUPATEN PUNCAK'),
('9434', '94', 'KABUPATEN DOGIYAI'),
('9435', '94', 'KABUPATEN INTAN JAYA'),
('9436', '94', 'KABUPATEN DEIYAI'),
('9471', '94', 'KOTA JAYAPURA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(20) NOT NULL,
  `icon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `menu`, `icon`) VALUES
(1, 'Data Master', 'fa fa-dashboard'),
(2, 'Penjualan', 'fa fa-files-o'),
(3, 'Pembelian', 'fa fa-th'),
(4, 'Stok', 'fa fa-edit'),
(5, 'Laporan', 'fa fa-pie-chart'),
(6, 'Accounting', 'fa fa-laptop'),
(7, 'Setting', 'fa fa-table');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mutasibarang`
--

CREATE TABLE `tb_mutasibarang` (
  `id_mutasibarang` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `id_konversi` int(11) NOT NULL,
  `tglmutasi` date NOT NULL,
  `jumlahmutasi` int(11) NOT NULL,
  `stokmutasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `id_provinsi` char(4) NOT NULL,
  `id_kota` char(4) NOT NULL,
  `tlp` char(12) NOT NULL,
  `limit` int(11) NOT NULL,
  `tgl_update` date DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama`, `alamat`, `id_provinsi`, `id_kota`, `tlp`, `limit`, `tgl_update`, `id_user`) VALUES
(4, 'RIZKY FEBRIANTO', 'WRINGIN KURUNGJAYA RT 05 RW 04', '35', '3525', '081216590250', 4290000, '2020-07-31', 8),
(5, 'Miftakhul', 'Sumput', '35', '3525', '081330181664', 1154998, '2020-08-01', 8),
(6, 'Alief Febrina', 'Demak', '35', '3578', '081330181661', 14360005, '2020-08-01', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_kode` int(11) NOT NULL,
  `jenis` enum('po','inv') NOT NULL,
  `totalbayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('PBL.2020-07-18.1', 1, '2020-07-18', 3009, 'kredit', '2020-07-18', '2020-07-18', 8, 11, 0, 'lunas'),
('PBL.2020-07-18.2', 1, '2020-07-18', 2887, 'cash', '2020-07-18', '2020-07-18', 8, 0, 0, 'lunas'),
('PBL.2020-07-19.1', 1, '2020-07-19', 1000, 'cash', '2020-07-19', '2020-07-19', 8, 0, 0, 'lunas'),
('PBL.2020-07-19.2', 1, '2020-07-19', 2000, 'cash', '2020-07-19', '2020-07-19', 8, 0, 0, 'lunas'),
('PBL.2020-07-23.1', 1, '2020-07-23', 60001, 'kredit', '2020-07-23', '2020-07-23', 8, 2, 1, 'lunas'),
('PBL.2020-07-28.1', 1, '2020-07-28', 60001, 'kredit', '2020-07-23', '2020-07-28', 8, 3, 2, 'belum'),
('PBL.2020-07-28.2', 1, '2020-07-28', 59999, 'kredit', '2020-07-29', '2020-07-28', 8, 1, 2, 'belum'),
('PBL.2020-07-28.3', 1, '2020-07-28', 60000, 'cash', '2020-07-28', '2020-07-28', 8, 0, 0, 'lunas'),
('PBL.2020-07-28.4', 1, '2020-07-28', 60000, 'cash', '2020-07-28', '2020-07-28', 8, 0, 0, 'lunas'),
('PBL.2020-07-31.1', 1, '2020-07-31', 0, 'kredit', '2020-07-31', '2020-07-31', 8, 0, 0, 'belum'),
('PBL.2020-07-31.2', 1, '2020-07-31', 60000, 'kredit', '2020-07-31', '2020-07-31', 8, 0, 0, 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` varchar(20) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tglnota` date NOT NULL,
  `tgl_update` date DEFAULT NULL,
  `subtotal` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL,
  `pembayaran` enum('cash','kredit') NOT NULL,
  `tgljatuhtempo` date DEFAULT NULL,
  `ongkir` double(10,2) DEFAULT NULL,
  `diskon` double NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `id_pelanggan`, `id_user`, `tglnota`, `tgl_update`, `subtotal`, `total`, `pembayaran`, `tgljatuhtempo`, `ongkir`, `diskon`, `status`) VALUES
('INV.2020-08-01.1', 4, 8, '2020-08-01', '2020-08-01', 96000.00, 106000.00, 'cash', '2020-08-01', 10000.00, 0, 1),
('INV.2020-08-01.2', 4, 8, '2020-08-01', '2020-08-01', 550000.00, 550000.00, 'kredit', '2020-08-01', 0.00, 0, 1),
('INV.2020-08-01.3', 4, 8, '2020-08-01', '2020-08-01', 650000.00, 660000.00, 'kredit', '2020-08-01', 10000.00, 0, 1),
('INV.2020-08-01.4', 5, 8, '2020-08-01', '2020-08-01', 325160.00, 325160.00, 'cash', '2020-08-01', 0.00, 0, 1),
('INV.2020-08-01.5', 5, 8, '2020-08-01', '2020-08-01', 550000.00, 560000.00, 'kredit', '2020-08-01', 10000.00, 0, 0),
('INV.2020-08-01.6', 5, 8, '2020-08-01', '2020-08-01', 275002.10, 285002.00, 'kredit', '2020-08-01', 10000.00, 0, 1),
('INV.2020-08-01.7', 6, 8, '2020-08-01', '2020-08-01', 4400000.00, 5000000.00, 'kredit', '2020-08-01', 600000.00, 0, 0),
('INV.2020-08-01.8', 6, 8, '2020-08-01', '2020-08-01', 630000.00, 639995.00, 'kredit', '2020-08-01', 10000.00, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_piutang`
--

CREATE TABLE `tb_piutang` (
  `id_piutang` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `totalinvoice` int(11) NOT NULL,
  `sisabayar` int(11) NOT NULL,
  `sudahbayar` int(11) NOT NULL,
  `tgljatuhtempo` date NOT NULL,
  `status` enum('lunas','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` char(4) NOT NULL,
  `name_prov` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_provinsi`, `name_prov`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_returpembelian`
--

CREATE TABLE `tb_returpembelian` (
  `id_returpembelian` varchar(50) NOT NULL,
  `notapembelian` varchar(50) NOT NULL,
  `tglretur` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenispengembalian` enum('uang','barang') NOT NULL,
  `ket` varchar(200) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_returpenjualan`
--

CREATE TABLE `tb_returpenjualan` (
  `id_returpenjualan` varchar(50) NOT NULL,
  `id_penjualan` varchar(20) NOT NULL,
  `tanggalretur` date NOT NULL,
  `tgl_update` date NOT NULL,
  `ketretur` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_returpenjualan`
--

INSERT INTO `tb_returpenjualan` (`id_returpenjualan`, `id_penjualan`, `tanggalretur`, `tgl_update`, `ketretur`, `status`, `id_user`) VALUES
('RPJ.2020-07-23.1', 'INV.2020-07-23.1', '2020-07-23', '2020-07-23', 'jelek', 1, 8),
('RPJ.2020-07-24.1', 'INV.2020-07-23.2', '2020-07-24', '2020-07-24', 'rusak', 1, 8),
('RPJ.2020-07-24.2', 'INV.2020-07-23.1', '2020-07-24', '2020-07-24', 'pecah', 1, 8),
('RPJ.2020-07-24.3', 'INV.2020-07-24.1', '2020-07-24', '2020-07-24', 'remuk', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `id_satuan` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `tgl_update` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_satuan`
--

INSERT INTO `tb_satuan` (`id_satuan`, `satuan`, `tgl_update`, `id_user`) VALUES
(1, 'M2', '2020-08-01', 8),
(2, 'Bj', '2020-07-14', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_stokopname`
--

CREATE TABLE `tb_stokopname` (
  `id_stokopname` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `stokawal` double NOT NULL,
  `stokskrg` double NOT NULL,
  `stokreturopname` double NOT NULL,
  `satuanreturopname` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `tgl_stokopname` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `ket` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_stokopname`
--

INSERT INTO `tb_stokopname` (`id_stokopname`, `id_barang`, `stokawal`, `stokskrg`, `stokreturopname`, `satuanreturopname`, `status`, `tgl_stokopname`, `id_user`, `ket`) VALUES
(1, '2020-07-15-a-1', 1000.18, 2000, 1, 'Bj', 1, '2020-07-19', 8, NULL),
(2, '2020-07-16-a-1', 430, 1000, 1, 'Bj', 1, '2020-07-19', 8, NULL),
(3, '2020-07-14-a-2', 1075, 1290, 1, 'Bj', 1, '2020-07-19', 8, NULL),
(4, '2020-07-14-a-2', 1290, 1000, 2, 'bj', 1, '2020-07-19', 8, NULL),
(5, '2020-07-14-a-2', 999.99999999998, 1000, 2, 'Bj', 1, '2020-07-19', 8, NULL),
(6, '2020-07-14-a-2', 999.99999999998, 1000, 1, 'Bj', 1, '2020-07-19', 8, NULL),
(7, '2020-07-14-a-2', 1000, 43000, 2, 'Bj', 1, '2020-07-19', 8, NULL),
(8, '2020-07-15-a-1', 2000, 85984.52, 2, 'Bj', 1, '2020-07-19', 8, NULL),
(9, '2020-07-16-a-1', 1000, 1000, 2, 'Bj', 1, '2020-07-19', 8, NULL),
(15, '2020-07-15-a-1', 1000.18, 2000, 0, 'NULL', 1, '2020-07-19', 8, NULL),
(16, '2020-07-16-a-1', 430, 1000, 0, 'NULL', 1, '2020-07-19', 8, NULL),
(19, '2020-07-14-a-2', 1075, 1290, 0, 'NULL', 1, '2020-07-19', 8, NULL),
(20, '2020-07-14-a-2', 1290, 1000, 2, 'bj', 1, '2020-07-19', 8, NULL),
(22, '2020-07-14-a-2', 999.99999999998, 1000, 2, 'Bj', 1, '2020-07-19', 8, NULL),
(23, '2020-07-14-a-2', 999.99999999998, 1000, 1, 'Bj', 1, '2020-07-19', 8, NULL),
(24, '2020-07-14-a-2', 1000, 43000, 2, 'Bj', 1, '2020-07-19', 8, NULL),
(25, '2020-07-15-a-1', 2000, 85984.52, 2, 'Bj', 1, '2020-07-19', 8, NULL),
(26, '2020-07-16-a-1', 1000, 1000, 2, 'Bj', 1, '2020-07-19', 8, NULL),
(27, 'B.2020-07-31.1', 430, 344, 1, 'M2', 1, '2020-07-31', 8, 'barang hilang\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_submenu`
--

CREATE TABLE `tb_submenu` (
  `id_submenu` int(11) NOT NULL,
  `id_menus` int(11) NOT NULL,
  `submenu` varchar(50) NOT NULL,
  `linksubmenu` varchar(20) NOT NULL,
  `statusmenu` enum('aktif','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_submenu`
--

INSERT INTO `tb_submenu` (`id_submenu`, `id_menus`, `submenu`, `linksubmenu`, `statusmenu`) VALUES
(1, 1, ' Data User', 'C_User', 'aktif'),
(2, 1, 'Data Jenis Customer', 'C_User', 'tidak'),
(3, 1, 'Data Konversi', 'C_konversi', 'tidak'),
(4, 1, 'Data Jenis Barang', 'C_jenisbarang', 'tidak'),
(5, 1, 'Data Satuan', 'C_satuan', 'tidak'),
(6, 5, 'Laporan Kas', 'C_Kas/laporan', 'aktif'),
(7, 1, 'Data Barang', 'C_barang', 'aktif'),
(8, 1, 'Data Pelanggan', 'C_Pelanggan', 'aktif'),
(9, 1, 'Data Suplier', 'C_suplier', 'aktif'),
(10, 2, 'Transaksi Penjualan', 'C_penjualan', 'aktif'),
(11, 2, 'Surat Jalan', 'C_suratjalan', 'aktif'),
(12, 5, 'Laporan Piutang', 'C_penjualan/lpiutang', 'aktif'),
(13, 2, 'Retur', 'C_returpenjualan', 'aktif'),
(14, 3, 'Transaksi Pembelian', 'C_Pembelian', 'aktif'),
(15, 5, 'Laporan Hutang', 'C_Pembelian/lhutang', 'aktif'),
(16, 5, 'Laporan Pembelian', 'C_Pembelian/laporan', 'aktif'),
(17, 5, 'Laporan Penjualan', 'C_penjualan/laporan', 'aktif'),
(18, 4, 'Stock ', 'C_Stok', 'aktif'),
(19, 4, 'Mutasi Barang', 'C_mutasibarang', 'tidak'),
(20, 6, 'Hutang', 'C_Pembelian/hutang', 'aktif'),
(21, 6, 'Piutang', 'C_penjualan/piutang', 'aktif'),
(22, 6, 'Arus Kas', 'C_Kas', 'aktif'),
(23, 6, 'Laba Rugi', '', 'aktif'),
(24, 7, 'Hak Akses Login', 'C_Setting', 'aktif'),
(25, 7, 'Data Kode', 'C_Setting/vkode', 'aktif'),
(26, 3, 'Retur', 'C_Pembelian/mretur', 'aktif'),
(27, 4, 'Stock Opname', 'C_Stok/so', 'aktif'),
(28, 1, 'Data Harga', 'C_harga', 'aktif'),
(29, 4, 'Stok Retur', 'C_Stok/retur', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suplier`
--

CREATE TABLE `tb_suplier` (
  `id_suplier` int(11) NOT NULL,
  `nama_suplier` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `id_kota` char(4) NOT NULL,
  `id_provinsi` char(4) NOT NULL,
  `tlp` char(12) NOT NULL,
  `tgl_update` date DEFAULT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `limit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_suplier`
--

INSERT INTO `tb_suplier` (`id_suplier`, `nama_suplier`, `alamat`, `id_kota`, `id_provinsi`, `tlp`, `tgl_update`, `nama_toko`, `id_user`, `limit`) VALUES
(2, 'RIZKY FEBRIANTO', 'WRINGIN KURUNG JAYA RT 05 RW 04', '3525', '35', '081216590250', '2020-07-31', 'CV. RIZKY JAYA INDOSOFT', 8, 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratjalan`
--

CREATE TABLE `tb_suratjalan` (
  `id_suratjalan` varchar(20) NOT NULL,
  `id_penjualan` varchar(20) NOT NULL,
  `tglkirim` date NOT NULL,
  `namapengirim` varchar(100) NOT NULL,
  `tgl_update` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_suratjalan`
--

INSERT INTO `tb_suratjalan` (`id_suratjalan`, `id_penjualan`, `tglkirim`, `namapengirim`, `tgl_update`, `id_user`, `status`) VALUES
('SJ.2020-07-20.1', 'INV.2020-07-19.1', '0000-00-00', 'Mifta', '2020-07-20', 8, 0),
('SJ.2020-07-22.1', 'INV.2020-07-19.1', '0000-00-00', 'mita', '2020-07-22', 8, 0),
('SJ.2020-07-24.1', 'INV.2020-07-23.1', '0000-00-00', 'ngt', '2020-07-24', 8, 1),
('SJ.2020-07-27.1', 'INV.2020-07-23.2', '2020-07-31', 'sdsf', '2020-07-27', 8, 1),
('SJ.2020-07-27.2', 'INV.2020-07-24.1', '2020-07-27', 'mita', '2020-07-27', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `password` char(8) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `id_kota` char(4) NOT NULL,
  `id_provinsi` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `password`, `username`, `nik`, `nama`, `alamat`, `id_kota`, `id_provinsi`) VALUES
(2, 'alief', 'alief', '1111111111111122', 'alief', 'addadjh', '3578', '35'),
(8, 'admin', 'admin', '1111111111111111', 'admin', 'aaa', '3578', '35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `tb_barang` (`no_urut`);

--
-- Indexes for table `tb_detailpembelian`
--
ALTER TABLE `tb_detailpembelian`
  ADD PRIMARY KEY (`id_detailpembelian`);

--
-- Indexes for table `tb_detailpenjualan`
--
ALTER TABLE `tb_detailpenjualan`
  ADD PRIMARY KEY (`id_detailpenjualan`);

--
-- Indexes for table `tb_detailreturpembelian`
--
ALTER TABLE `tb_detailreturpembelian`
  ADD PRIMARY KEY (`id_detailreturbeli`);

--
-- Indexes for table `tb_detailreturpenjualan`
--
ALTER TABLE `tb_detailreturpenjualan`
  ADD PRIMARY KEY (`id_detailreturpenjualan`);

--
-- Indexes for table `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `tb_hutang`
--
ALTER TABLE `tb_hutang`
  ADD PRIMARY KEY (`id_hutang`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `tb_jenisbarang`
--
ALTER TABLE `tb_jenisbarang`
  ADD PRIMARY KEY (`id_jenisbarang`);

--
-- Indexes for table `tb_jenispembayaran`
--
ALTER TABLE `tb_jenispembayaran`
  ADD PRIMARY KEY (`id_jenispembayaran`);

--
-- Indexes for table `tb_kas`
--
ALTER TABLE `tb_kas`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indexes for table `tb_keranjangbelanja`
--
ALTER TABLE `tb_keranjangbelanja`
  ADD PRIMARY KEY (`id_keranjangbelanja`);

--
-- Indexes for table `tb_kode`
--
ALTER TABLE `tb_kode`
  ADD PRIMARY KEY (`id_kode`);

--
-- Indexes for table `tb_konversi`
--
ALTER TABLE `tb_konversi`
  ADD PRIMARY KEY (`id_konversi`);

--
-- Indexes for table `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `indonesia_cities_province_id_foreign` (`id_provinsi`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_mutasibarang`
--
ALTER TABLE `tb_mutasibarang`
  ADD PRIMARY KEY (`id_mutasibarang`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `tb_piutang`
--
ALTER TABLE `tb_piutang`
  ADD PRIMARY KEY (`id_piutang`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tb_returpenjualan`
--
ALTER TABLE `tb_returpenjualan`
  ADD PRIMARY KEY (`id_returpenjualan`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tb_stokopname`
--
ALTER TABLE `tb_stokopname`
  ADD PRIMARY KEY (`id_stokopname`);

--
-- Indexes for table `tb_submenu`
--
ALTER TABLE `tb_submenu`
  ADD PRIMARY KEY (`id_submenu`);

--
-- Indexes for table `tb_suplier`
--
ALTER TABLE `tb_suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indexes for table `tb_suratjalan`
--
ALTER TABLE `tb_suratjalan`
  ADD PRIMARY KEY (`id_suratjalan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akses`
--
ALTER TABLE `tb_akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_detailpembelian`
--
ALTER TABLE `tb_detailpembelian`
  MODIFY `id_detailpembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_detailpenjualan`
--
ALTER TABLE `tb_detailpenjualan`
  MODIFY `id_detailpenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_detailreturpembelian`
--
ALTER TABLE `tb_detailreturpembelian`
  MODIFY `id_detailreturbeli` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_detailreturpenjualan`
--
ALTER TABLE `tb_detailreturpenjualan`
  MODIFY `id_detailreturpenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_harga`
--
ALTER TABLE `tb_harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_hutang`
--
ALTER TABLE `tb_hutang`
  MODIFY `id_hutang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_jenisbarang`
--
ALTER TABLE `tb_jenisbarang`
  MODIFY `id_jenisbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_jenispembayaran`
--
ALTER TABLE `tb_jenispembayaran`
  MODIFY `id_jenispembayaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kas`
--
ALTER TABLE `tb_kas`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_keranjangbelanja`
--
ALTER TABLE `tb_keranjangbelanja`
  MODIFY `id_keranjangbelanja` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kode`
--
ALTER TABLE `tb_kode`
  MODIFY `id_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_konversi`
--
ALTER TABLE `tb_konversi`
  MODIFY `id_konversi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_mutasibarang`
--
ALTER TABLE `tb_mutasibarang`
  MODIFY `id_mutasibarang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_piutang`
--
ALTER TABLE `tb_piutang`
  MODIFY `id_piutang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_stokopname`
--
ALTER TABLE `tb_stokopname`
  MODIFY `id_stokopname` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tb_submenu`
--
ALTER TABLE `tb_submenu`
  MODIFY `id_submenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tb_suplier`
--
ALTER TABLE `tb_suplier`
  MODIFY `id_suplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
