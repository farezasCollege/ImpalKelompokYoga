-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 07:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_webpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_jasa`
--

CREATE TABLE `jenis_jasa` (
  `id_layanan` varchar(8) NOT NULL,
  `nama_jasa` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_jasa`
--

INSERT INTO `jenis_jasa` (`id_layanan`, `nama_jasa`, `harga`) VALUES
('LY01', 'Nail Art', 200000),
('LY02', 'Creambath', 100000),
('LY03', 'Smoothing', 200000),
('LY04', 'Spa', 300000),
('LY05', 'Hair Extenion', 700000),
('LY06', 'Hair Coloring', 800000),
('LY07', 'Hair Cut', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_booking` varchar(7) NOT NULL,
  `username` varchar(25) NOT NULL,
  `id_layanan` varchar(8) NOT NULL,
  `status_bayar` tinyint(1) NOT NULL,
  `jam_pelayanan` time NOT NULL,
  `tanggal_pelayanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`kode_booking`, `username`, `id_layanan`, `status_bayar`, `jam_pelayanan`, `tanggal_pelayanan`) VALUES
('psn-14', 'charmander', 'LY01', 0, '22:12:00', '2019-12-14'),
('psn-15', 'nisa', 'LY01', 1, '06:53:00', '2019-12-05'),
('psn-16', 'nisa', 'LY01', 1, '06:53:00', '2019-12-05'),
('psn-17', 'charmander', 'LY01', 0, '22:45:00', '1000-10-09'),
('psn-19', 'charmander', 'LY01', 0, '22:45:00', '1000-10-09'),
('psn-26', 'nisa', 'LY01', 0, '06:53:00', '2019-12-05'),
('psn-32', 'nisa', 'LY01', 0, '06:53:00', '2019-12-05'),
('psn-38', 'nisa', 'LY01', 0, '06:53:00', '2019-12-05'),
('psn-44', 'nisa', 'LY01', 0, '06:53:00', '2019-12-05'),
('psn-47', 'nisa', 'LY01', 0, '06:53:00', '2019-12-05'),
('psn-48', 'nisa', 'LY01', 0, '06:53:00', '2019-12-05'),
('psn-51', 'charmander', 'LY01', 0, '22:45:00', '1000-10-09'),
('psn-52', 'nisa', 'LY01', 1, '06:53:00', '2019-12-05'),
('psn-59', 'nisa', 'LY01', 0, '06:53:00', '2019-12-05'),
('psn-6', 'nisa', 'LY01', 0, '06:53:00', '2019-12-05'),
('psn-64', 'nisa', 'LY01', 0, '06:53:00', '2019-12-05'),
('psn-71', 'nisa', 'LY01', 0, '06:53:00', '2019-12-05'),
('psn-9', 'charmander', 'LY01', 1, '05:06:00', '2019-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Nama` varchar(20) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Nama`, `Date`, `Email`, `Username`, `Password`, `Role`) VALUES
('Akmal', '2019-12-04', 'akmal123@gmail.com', 'akmaaal', 'ec64c2b236', 'Pegawai'),
('Charmander', '2019-12-02', 'yogaunderscoreajitama@gmail.com', 'charmander', '0124ffa3e1', 'customer'),
('nis', '2018-08-24', 'nisarahma128@yahoo.com', 'nisa', '827ccb0eea', 'customer'),
('annisa', '2018-08-07', 'anisalsss@gmail.com', 'nisarhmaa', '827ccb0eea', 'customer'),
('test123', '2019-12-02', 'yogaunderscoreajitama@gmail.com', 'test123', 'cc03e747a6', 'customer'),
('test pegawai', '2019-12-05', 'fareza087@gmail.com', 'test456', 'e10adc3949', 'Pegawai'),
('yoga', '2019-12-04', 'yoga@gmail.com', 'yoga123', 'e10adc3949', 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_jasa`
--
ALTER TABLE `jenis_jasa`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_booking`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
