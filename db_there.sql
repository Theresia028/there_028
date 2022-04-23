-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2022 pada 08.45
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_there`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_028`
--

CREATE TABLE `tbl_028` (
  `id_028` int(15) NOT NULL,
  `nama_028` varchar(30) NOT NULL,
  `email_028` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_028`
--

INSERT INTO `tbl_028` (`id_028`, `nama_028`, `email_028`) VALUES
(1, 'Theresia', 'there@gmail.com'),
(2, 'Nazela', 'nazela123@gmail.com'),
(3, 'Bunga Okatav', 'bunga567@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_028`
--
ALTER TABLE `tbl_028`
  ADD PRIMARY KEY (`id_028`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_028`
--
ALTER TABLE `tbl_028`
  MODIFY `id_028` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
