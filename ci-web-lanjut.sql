-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2020 pada 12.49
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-web-lanjut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_tabel`
--

CREATE TABLE `d_tabel` (
  `id_25` int(11) NOT NULL,
  `kolom_jurusan` varchar(50) NOT NULL,
  `kolom_kelas` varchar(10) NOT NULL,
  `kolom_isi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `d_tabel`
--

INSERT INTO `d_tabel` (`id_25`, `kolom_jurusan`, `kolom_kelas`, `kolom_isi`) VALUES
(1, 'TI', 'D3', 'sisisisisisisiisisisisisissisisis'),
(2, 'rpl', 'D3', 'halo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_mahasiswa`
--

CREATE TABLE `table_mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_mahasiswa`
--

INSERT INTO `table_mahasiswa` (`nim`, `nama`, `alamat`) VALUES
(1810330025, 'agus rinaldi', 'dompu'),
(21152426, 'afan', 'janapria');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `d_tabel`
--
ALTER TABLE `d_tabel`
  ADD PRIMARY KEY (`id_25`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `d_tabel`
--
ALTER TABLE `d_tabel`
  MODIFY `id_25` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
