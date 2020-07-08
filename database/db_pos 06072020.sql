-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 04:22 PM
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
(85, 27, 8, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` varchar(20) NOT NULL,
  `barang` varchar(200) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_jenisbarang` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `nourut` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `barang`, `id_satuan`, `id_jenisbarang`, `merk`, `nourut`, `tgl`) VALUES
('2020-07-05-a-', 'barangaa', 2, 1, 'as', 4, '2020-07-05'),
('2020-07-05-a-5', 'brang', 2, 1, 'asd', 5, '2020-07-05'),
('tanggal-b-2', 'arang', 2, 1, 'as', 2, '2020-07-05'),
('tanggal-b-3', 'barang3', 2, 1, 'dasd add', 3, '2020-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `id_provinsi` char(2) NOT NULL,
  `id_kota` char(4) NOT NULL,
  `tlp` char(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_cust` char(1) NOT NULL,
  `limit` varchar(16) NOT NULL,
  `anrek` varchar(50) NOT NULL,
  `norek` varchar(50) NOT NULL,
  `bank` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detaildo`
--

CREATE TABLE `tb_detaildo` (
  `id_detaildo` int(11) NOT NULL,
  `id_do` varchar(15) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `qtt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailpo`
--

CREATE TABLE `tb_detailpo` (
  `id_detailpo` int(11) NOT NULL,
  `id_po` varchar(15) NOT NULL,
  `id_barang` varchar(15) NOT NULL,
  `barang` varchar(100) NOT NULL,
  `qtt` int(11) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailso`
--

CREATE TABLE `tb_detailso` (
  `id_detailso` int(11) NOT NULL,
  `id_so` varchar(15) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `harga` char(20) NOT NULL,
  `qtt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_do`
--

CREATE TABLE `tb_do` (
  `id_do` varchar(15) NOT NULL,
  `id_so` varchar(15) NOT NULL,
  `tgldo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gudang`
--

CREATE TABLE `tb_gudang` (
  `id_gudang` int(11) NOT NULL,
  `gudang` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga`
--

CREATE TABLE `tb_harga` (
  `id_harga` int(11) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `hargapembelian` int(11) NOT NULL,
  `hargapenjualan` int(11) NOT NULL,
  `id_jenispembayaran` int(11) NOT NULL,
  `id_jeniscust` int(11) NOT NULL,
  `tgl_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hutang`
--

CREATE TABLE `tb_hutang` (
  `id_hutang` int(11) NOT NULL,
  `id_pembayaran` varchar(15) NOT NULL,
  `totalpo` varchar(20) NOT NULL,
  `sisabayar` varchar(20) NOT NULL,
  `sudahbayar` varchar(20) NOT NULL,
  `tgljatuhtempo` date NOT NULL,
  `status` enum('lunas','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` varchar(15) NOT NULL,
  `id_do` varchar(15) NOT NULL,
  `tglinv` date NOT NULL,
  `total` varchar(20) NOT NULL,
  `id_jenispembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenisbarang`
--

CREATE TABLE `tb_jenisbarang` (
  `id_jenisbarang` int(11) NOT NULL,
  `jenisbarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenisbarang`
--

INSERT INTO `tb_jenisbarang` (`id_jenisbarang`, `jenisbarang`) VALUES
(1, 'paving');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jeniscust`
--

CREATE TABLE `tb_jeniscust` (
  `id_jeniscust` int(11) NOT NULL,
  `jeniscust` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, 'barang', 'tanggal-a-no');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kota`
--

CREATE TABLE `tb_kota` (
  `id_kota` char(4) NOT NULL,
  `id_provinsi` char(2) NOT NULL,
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
(4, 'Nota Pembayaran', 'fa fa-pie-chart'),
(5, 'Gudang', 'fa fa-edit'),
(6, 'Accounting', 'fa fa-laptop'),
(7, 'Setting', 'fa fa-table');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` varchar(15) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `jenis` enum('po','inv') NOT NULL,
  `totalbayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_piutang`
--

CREATE TABLE `tb_piutang` (
  `id_piutang` int(11) NOT NULL,
  `id_pembayaran` varchar(15) NOT NULL,
  `totalinvoice` varchar(20) NOT NULL,
  `sisabayar` varchar(20) NOT NULL,
  `sudahbayar` varchar(20) NOT NULL,
  `tgljatuhtempo` date NOT NULL,
  `status` enum('lunas','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_po`
--

CREATE TABLE `tb_po` (
  `id_po` varchar(15) NOT NULL,
  `id_suplier` int(11) NOT NULL,
  `tglpo` date NOT NULL,
  `total` varchar(20) NOT NULL,
  `id_jenispembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` char(2) NOT NULL,
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
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `id_satuan` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_satuan`
--

INSERT INTO `tb_satuan` (`id_satuan`, `satuan`) VALUES
(2, 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `tb_so`
--

CREATE TABLE `tb_so` (
  `id_so` varchar(15) NOT NULL,
  `id_cust` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tglso` date NOT NULL,
  `id_jenispembayaran` int(11) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_stok`
--

CREATE TABLE `tb_stok` (
  `id_stok` int(11) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `qtt` int(11) NOT NULL,
  `tgl_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_submenu`
--

CREATE TABLE `tb_submenu` (
  `id_submenu` int(11) NOT NULL,
  `id_menus` int(11) NOT NULL,
  `submenu` varchar(50) NOT NULL,
  `linksubmenu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_submenu`
--

INSERT INTO `tb_submenu` (`id_submenu`, `id_menus`, `submenu`, `linksubmenu`) VALUES
(1, 1, ' Data User', 'C_User'),
(2, 1, 'Data Jenis Customer', 'C_User'),
(3, 1, 'Data Jenis Pembayaran', ''),
(4, 1, 'Data Jenis Barang', 'C_jenisbarang'),
(5, 1, 'Data Satuan', 'C_satuan'),
(6, 1, 'Data Gudang', 'C_Gudang'),
(7, 1, 'Data Barang', 'C_barang'),
(8, 1, 'Data Customer', ''),
(9, 1, 'Data Suplier', 'C_suplier'),
(10, 2, 'Sales Order', ''),
(11, 2, 'Delivery Order', ''),
(12, 2, 'Invoice', ''),
(13, 2, 'Retur', ''),
(14, 3, 'Purchase Order', ''),
(15, 3, 'Penerimaan Barang', ''),
(16, 4, 'Pembayaran Purchase ', ''),
(17, 4, 'Pembayaran Sales Order', ''),
(18, 5, 'Stock', ''),
(19, 5, 'Mutasi Barang', ''),
(20, 6, 'Hutang', ''),
(21, 6, 'Piutang', ''),
(22, 6, 'Pendapatan', ''),
(23, 6, 'Pengeluaran', ''),
(24, 7, 'Hak Akses Login', 'C_Setting'),
(25, 7, 'Data Kode', 'C_Setting/vkode'),
(26, 3, 'Retur', ''),
(27, 5, 'Stock Opname', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suplier`
--

CREATE TABLE `tb_suplier` (
  `id_suplier` int(11) NOT NULL,
  `nama_suplier` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `id_kota` char(4) NOT NULL,
  `id_provinsi` char(2) NOT NULL,
  `tlp` char(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `norek` char(20) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `anrek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_suplier`
--

INSERT INTO `tb_suplier` (`id_suplier`, `nama_suplier`, `alamat`, `id_kota`, `id_provinsi`, `tlp`, `email`, `website`, `norek`, `bank`, `anrek`) VALUES
(1, 'suplier', 'asd', '1304', '13', '131', 'alievebrin@asd', 'asd', '12121111111111111111', '1sad', 'asd');

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
  `id_provinsi` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `password`, `username`, `nik`, `nama`, `alamat`, `id_kota`, `id_provinsi`) VALUES
(2, 'alief', 'alief', '1111111111111122', 'alief', 'addadjh', '3578', '35'),
(3, 'coba', 'cobatesuse', '1111111111111113', 'coba', 'asdkasdk asdnkandn asdkajdkjakd kaskdkajsdk asdknadnajsd asdkasmkdk', '3578', '35'),
(8, 'admin', 'admin', '1111111111111111', 'administrator', 'admin', '3578', '35'),
(32, 'ad', 'admin1', '1231231211111111', 'id tes', 'asd', '1404', '14'),
(33, 'cobaakse', 'cobaakses', '1232131111111111', 'coba akses', 'dcasdkask', '1403', '14');

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
  ADD UNIQUE KEY `nourut` (`nourut`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tb_detaildo`
--
ALTER TABLE `tb_detaildo`
  ADD PRIMARY KEY (`id_detaildo`);

--
-- Indexes for table `tb_detailpo`
--
ALTER TABLE `tb_detailpo`
  ADD PRIMARY KEY (`id_detailpo`);

--
-- Indexes for table `tb_detailso`
--
ALTER TABLE `tb_detailso`
  ADD PRIMARY KEY (`id_detailso`);

--
-- Indexes for table `tb_do`
--
ALTER TABLE `tb_do`
  ADD PRIMARY KEY (`id_do`);

--
-- Indexes for table `tb_gudang`
--
ALTER TABLE `tb_gudang`
  ADD PRIMARY KEY (`id_gudang`);

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
-- Indexes for table `tb_jeniscust`
--
ALTER TABLE `tb_jeniscust`
  ADD PRIMARY KEY (`id_jeniscust`);

--
-- Indexes for table `tb_jenispembayaran`
--
ALTER TABLE `tb_jenispembayaran`
  ADD PRIMARY KEY (`id_jenispembayaran`);

--
-- Indexes for table `tb_kode`
--
ALTER TABLE `tb_kode`
  ADD PRIMARY KEY (`id_kode`);

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
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_piutang`
--
ALTER TABLE `tb_piutang`
  ADD PRIMARY KEY (`id_piutang`);

--
-- Indexes for table `tb_po`
--
ALTER TABLE `tb_po`
  ADD PRIMARY KEY (`id_po`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tb_so`
--
ALTER TABLE `tb_so`
  ADD PRIMARY KEY (`id_so`);

--
-- Indexes for table `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD PRIMARY KEY (`id_stok`);

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
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `nourut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detaildo`
--
ALTER TABLE `tb_detaildo`
  MODIFY `id_detaildo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detailpo`
--
ALTER TABLE `tb_detailpo`
  MODIFY `id_detailpo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detailso`
--
ALTER TABLE `tb_detailso`
  MODIFY `id_detailso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_gudang`
--
ALTER TABLE `tb_gudang`
  MODIFY `id_gudang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_harga`
--
ALTER TABLE `tb_harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hutang`
--
ALTER TABLE `tb_hutang`
  MODIFY `id_hutang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jenisbarang`
--
ALTER TABLE `tb_jenisbarang`
  MODIFY `id_jenisbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jeniscust`
--
ALTER TABLE `tb_jeniscust`
  MODIFY `id_jeniscust` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jenispembayaran`
--
ALTER TABLE `tb_jenispembayaran`
  MODIFY `id_jenispembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kode`
--
ALTER TABLE `tb_kode`
  MODIFY `id_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `tb_stok`
--
ALTER TABLE `tb_stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_submenu`
--
ALTER TABLE `tb_submenu`
  MODIFY `id_submenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_suplier`
--
ALTER TABLE `tb_suplier`
  MODIFY `id_suplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
