-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 01:43 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kp_poltek`
--

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE IF NOT EXISTS `judul` (
  `id_judul` int(9) NOT NULL,
  `nama_vendor` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul`
--

INSERT INTO `judul` (`id_judul`, `nama_vendor`, `judul`) VALUES
(1, 'Labib CO', 'Membuat Aplikasi CRUD sederhana dengan PHP'),
(2, 'Daniel CO', 'CSS'),
(3, 'Daniel CO', 'Membuat Aplikasi CRUD sederhana dengan PHP'),
(4, 'Asal', 'JS'),
(5, 'Asal', 'CSS Layouting');

-- --------------------------------------------------------

--
-- Table structure for table `nilaii`
--

CREATE TABLE IF NOT EXISTS `nilaii` (
  `id_nilai` int(5) NOT NULL,
  `nim` int(8) NOT NULL,
  `nama_vendor` varchar(30) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilaii`
--

INSERT INTO `nilaii` (`id_nilai`, `nim`, `nama_vendor`, `nilai`) VALUES
(1, 17090100, 'Asal', 91),
(5, 17090000, 'Asal', 97);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `nim` int(9) NOT NULL,
  `id_judul` int(7) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nim`, `id_judul`, `tanggal_mulai`, `tanggal_akhir`) VALUES
(0, 17090001, 1, '2020-08-06', '2020-08-31'),
(4, 17090100, 4, '2019-07-01', '2019-07-02'),
(5, 17090000, 5, '2019-07-01', '2019-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nama_lengkap` varchar(50) NOT NULL,
  `nim` char(9) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `asal_kampus` varchar(50) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama_lengkap`, `nim`, `jenis_kelamin`, `alamat`, `asal_kampus`, `prodi`, `email`, `no_hp`, `password`) VALUES
('Ilham', '17090001', 'Perempuan', 'Banjar', 'Poltek', 'Informatika', 'ogame6782@gmail.com', 821010101, '1'),
('Labib Marzuqi', '17090100', 'Laki-laki', 'Desa Pagongan', 'PHB Tegal', 'Informatika', 'xenrath89@gmail.com', 2147483647, '23456'),
('Ilham', '17090103', 'Laki-laki', 'Banjaran', 'PHB Tegal', 'Informatika', 'ogame6782@gmail.com', 2147483647, '20000'),
('Marzuqi Hidayat', '17090104', 'Laki-laki', 'Desa Kalimati', 'PHB Tegal', 'Informatika', 'labiibly13@gmail.com', 2147483647, '34567'),
('Saiful Labib', '17090144', 'Laki-laki', 'Desa Pepedan', 'PHB Tegal', 'Informatika', 'slabib@gmail.com', 2147483647, '12345'),
('Xenrath', '17090155', 'Laki-laki', 'SS', 'PHB Tegal', 'Informatika', 'xenrath@gmail.com', 853284888, '1');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
`id_vendor` int(3) NOT NULL,
  `nama_vendor` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1000 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `nama_vendor`, `kategori`, `alamat`, `email`, `no_hp`, `password`) VALUES
(1, 'Asal', 'Software House', 'Tegal', 'xenrath89@gmail.com', '085328481969', '1'),
(2, 'GG CO', '', 'Slawi', 'gg@gmail.com', '080000001121', '1121'),
(3, 'Labib CO', 'Database Management', 'Tegal', 'labib@gmail.com', '08000000001', '1'),
(999, 'labib', 'Software House', 'qqqq', 'tuminah123@gmail.com', '1223334', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `judul`
--
ALTER TABLE `judul`
 ADD PRIMARY KEY (`id_judul`);

--
-- Indexes for table `nilaii`
--
ALTER TABLE `nilaii`
 ADD PRIMARY KEY (`id_nilai`), ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`), ADD UNIQUE KEY `id_judul` (`id_judul`), ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
 ADD PRIMARY KEY (`id_vendor`), ADD UNIQUE KEY `nama_vendor` (`nama_vendor`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
MODIFY `id_vendor` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1000;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
