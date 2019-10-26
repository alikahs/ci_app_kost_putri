-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2019 pada 17.49
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_app_kost_putri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kost_putri`
--

CREATE TABLE `kost_putri` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kampus` varchar(100) NOT NULL,
  `no_kamar` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `keterangan_kost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kost_putri`
--

INSERT INTO `kost_putri` (`id`, `nama`, `kampus`, `no_kamar`, `alamat`, `no_hp`, `keterangan_kost`) VALUES
(7, 'Amel', 'Telkom', 3, 'Bandung', '083875219065', 'Per Tahun'),
(8, 'Evi', 'Unpas', 10, 'Majalengka', '089623561200', 'Per Tahun'),
(9, 'Amanda', 'Unpad', 6, 'Karawang', '081290786543', 'Per Bulan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kost_putri`
--
ALTER TABLE `kost_putri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kost_putri`
--
ALTER TABLE `kost_putri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
