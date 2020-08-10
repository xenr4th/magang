-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2019 pada 10.33
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnilai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cetak_nilai`
--

CREATE TABLE `cetak_nilai` (
  `NO` int(10) NOT NULL,
  `NIM` int(8) NOT NULL,
  `Nama_Mahasiswa_KP` varchar(50) NOT NULL,
  `Nama_Perusahaan` varchar(20) NOT NULL,
  `Lama_Magang` varchar(20) NOT NULL,
  `Disiplin_dan_Tanggungjawab` int(12) NOT NULL,
  `Penguasaan_Project` int(12) NOT NULL,
  `Kreativitas` int(12) NOT NULL,
  `Keahlian_dan_Keterampilan` int(12) NOT NULL,
  `Menghargai_dan_Menghormati` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cetak_nilai`
--

INSERT INTO `cetak_nilai` (`NO`, `NIM`, `Nama_Mahasiswa_KP`, `Nama_Perusahaan`, `Lama_Magang`, `Disiplin_dan_Tanggungjawab`, `Penguasaan_Project`, `Kreativitas`, `Keahlian_dan_Keterampilan`, `Menghargai_dan_Menghormati`) VALUES
(4, 17090017, 'Fitria Nurizqi Handayani', 'daniel.co', '1 Bulan', 7, 6, 7, 6, 7),
(3, 17090090, 'Tri Puji Astuti', 'daniel.co', '1 Bulan', 5, 5, 5, 5, 5),
(2, 17090103, 'Siti Magfuroh', 'daniel.co', '1 Bulan', 7, 7, 7, 7, 7),
(1, 17090143, 'Tasya Maharani Setyo Putri', 'daniel.co', '1 Bulan', 6, 6, 6, 6, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_siswa_kp`
--

CREATE TABLE `penilaian_siswa_kp` (
  `NIM` int(8) NOT NULL,
  `Nama_Mahasiswa_KP` varchar(50) NOT NULL,
  `Nama_Perusahaan` varchar(30) NOT NULL,
  `Lama_Magang` varchar(30) NOT NULL,
  `Disiplin_dan_Tanggungjawab` int(10) NOT NULL,
  `Penguasaan_Project` int(10) NOT NULL,
  `Kreativitas` int(10) NOT NULL,
  `Keahlian_dan_Keterampilan` int(10) NOT NULL,
  `Menghargai_dan_Menghormati` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cetak_nilai`
--
ALTER TABLE `cetak_nilai`
  ADD PRIMARY KEY (`NIM`);

--
-- Indeks untuk tabel `penilaian_siswa_kp`
--
ALTER TABLE `penilaian_siswa_kp`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
