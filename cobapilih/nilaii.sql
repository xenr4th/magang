-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 10:03 AM
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
(1, 17090103, 'daniel co', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilaii`
--
ALTER TABLE `nilaii`
 ADD PRIMARY KEY (`id_nilai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
