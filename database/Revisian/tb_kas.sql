-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2020 pada 17.06
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.31

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
-- Struktur dari tabel `tb_kas`
--

CREATE TABLE `tb_kas` (
  `id_kas` int(11) NOT NULL,
  `tglkas` date NOT NULL,
  `ket` varchar(200) NOT NULL,
  `nominal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kas`
--

INSERT INTO `tb_kas` (`id_kas`, `tglkas`, `ket`, `nominal`, `id_user`) VALUES
(1, '1970-01-01', 'ghg', 20000, 8),
(2, '1970-01-01', 'asd', 20000, 8),
(3, '2020-07-28', 'aqwe', 10000000, 8),
(4, '2020-07-07', 'sad', 20000, 8);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kas`
--
ALTER TABLE `tb_kas`
  ADD PRIMARY KEY (`id_kas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kas`
--
ALTER TABLE `tb_kas`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
