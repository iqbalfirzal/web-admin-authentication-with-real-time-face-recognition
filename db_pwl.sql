-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2019 pada 10.25
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
-- Database: `db_pwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `temankelas`
--

CREATE TABLE `temankelas` (
  `id_teman` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamatkost` text NOT NULL,
  `asal` text NOT NULL,
  `nomorhp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `temankelas`
--

INSERT INTO `temankelas` (`id_teman`, `nama`, `alamatkost`, `asal`, `nomorhp`) VALUES
(1, 'nawawi', 'caturtunggal', 'brebes', 2147483647),
(2, 'feri', 'ringroad', 'lampung', 87549876),
(3, 'alfin', 'caturtunggal', 'sidoarjo', 2147483647),
(4, 'faiz', 'caturtunggal', 'boyolali', 2147483647),
(7, 'helda', 'caturtunggal', 'kalimantan', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `fname`) VALUES
('admin', 'admin', 'Iqbal Firzal'),
('admin2', 'admin2', 'Captain America'),
('admin3', 'admin3', 'Captain Marvel'),
('admin4', 'admin4', 'Thor'),
('admin5', 'admin5', 'Tony Stark');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `temankelas`
--
ALTER TABLE `temankelas`
  ADD PRIMARY KEY (`id_teman`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `temankelas`
--
ALTER TABLE `temankelas`
  MODIFY `id_teman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
