-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2019 pada 17.21
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saloncitra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_jasa`
--

CREATE TABLE `jenis_jasa` (
  `idx_layanan` int(11) NOT NULL,
  `id_layanan` varchar(8) NOT NULL,
  `nama_jasa` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_jasa`
--

INSERT INTO `jenis_jasa` (`idx_layanan`, `id_layanan`, `nama_jasa`, `harga`) VALUES
(1, 'LY01', 'Nail Art', 200000),
(2, 'LY02', 'Creambath', 100000),
(3, 'LY03', 'Smoothing', 200000),
(4, 'LY04', 'Spa', 300000),
(5, 'LY05', 'Hair Extenion', 700000),
(6, 'LY06', 'Hair Coloring', 800000),
(7, 'LY07', 'Hair Cut', 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idx_pemesanan` int(11) NOT NULL,
  `kode_booking` varchar(10) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `id_layanan` varchar(8) NOT NULL,
  `status_bayar` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `jam_pelayanan` time NOT NULL,
  `tanggal_pelayanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`idx_pemesanan`, `kode_booking`, `Username`, `id_layanan`, `status_bayar`, `expired`, `jam_pelayanan`, `tanggal_pelayanan`) VALUES
(2, 'psn-2', 'masterCust', 'LY01', 1, 0, '01:00:00', '2019-12-08'),
(5, 'psn-33', 'nunu123', 'LY01', 0, 1, '15:07:00', '2019-12-10'),
(6, 'psn-34', 'bulbasaur', 'LY02', 0, 0, '20:02:00', '2019-05-08'),
(7, 'psn-4', 'bulbasaur', 'LY04', 0, 1, '06:11:00', '2019-05-24'),
(8, 'psn-40', 'nunu123', 'LY01', 0, 1, '15:07:00', '2019-12-10'),
(9, 'psn-45', 'bulbasaur', 'LY02', 0, 1, '09:05:00', '2019-05-14'),
(10, 'psn-60', 'bulbasaur', 'LY03', 0, 0, '21:02:00', '2019-05-08'),
(11, 'psn-7', 'masterCust', 'LY01', 0, 1, '01:01:00', '2019-05-01'),
(12, 'psn-8', 'ajitamayog', 'LY01', 0, 1, '08:02:00', '2019-06-29'),
(13, 'psn-88', 'bulbasaur', 'LY01', 0, 1, '01:00:00', '2019-12-10'),
(14, 'psn-9', 'bulbasaur', 'LY02', 0, 1, '06:11:00', '2019-05-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idx_user` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idx_user`, `Nama`, `Date`, `Email`, `Username`, `Password`, `Role`) VALUES
(1, 'anggrek', '2019-05-09', 'anggrek@gmail.com', 'anggrekcantik', '1a1d4b9036', 'Pegawai'),
(2, 'Bulbasaur', '2019-01-09', 'bulbasaur@gmail.com', 'bulbasaur', '164e304dae', 'customer'),
(3, 'fareza', '2019-08-01', 'fareza087@gmail.com', 'haha', '202cb962ac', 'customer'),
(4, 'kamboja', '2019-03-05', 'kamboja@gmail.com', 'kambojaimut', 'fcc484ad74', 'Pegawai'),
(5, 'masterCust', '2019-05-01', 'loig.fried@gmail.com', 'masterCust', '6797f82f50', 'customer'),
(6, 'masterPeg', '01-01-0001', 'loig.fried@gmail.com', 'masterPeg', '0795151def', 'Pegawai'),
(7, 'mawar', '2019-04-24', 'mawar@harum.com', 'mawar', 'e93943ef53', 'customer'),
(8, 'annisa', '2019-05-08', 'nisarahma12@yahoo.co', 'nisacans', '7723166f24', 'customer'),
(9, 'Nurul', '2019-12-01', 'nurulzakiyyah759@yahoo.com', 'nunu123', 'e10adc3949', 'customer'),
(10, 'Nurul', '2019-01-08', 'nurul@gmail.com', 'nunuzakiyy', '8d3813054d', 'customer'),
(11, 'Pikachu', '2019-02-06', 'pikachu@gmail.com', 'pikachu', 'edb6eb67ad', 'customer'),
(12, 'Melati', '2019-02-13', 'melatikuh@gmail.com', 'putihmelat', 'b88533bd29', 'Pegawai'),
(13, 'set', '1990-02-01', 'set@gmail.com', 'set', '202cb962ac', 'customer'),
(14, 'tes_increment', '1212-12-12', 'awdasd@wadaw', 'test_8Des', 'e10adc3949', 'customer'),
(15, 'tesPegawai', '2019-12-02', 'tes@gmail', 'tes', 'e10adc3949', 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_jasa`
--
ALTER TABLE `jenis_jasa`
  ADD PRIMARY KEY (`idx_layanan`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idx_pemesanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idx_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_jasa`
--
ALTER TABLE `jenis_jasa`
  MODIFY `idx_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idx_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `idx_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

DELIMITER $$
--
-- Event
--
CREATE DEFINER=`root`@`localhost` EVENT `book_expiration` ON SCHEDULE EVERY 5 SECOND STARTS '2019-12-08 16:03:27' ON COMPLETION NOT PRESERVE ENABLE DO update pemesanan set expired=1 
where status_bayar=0 and time_to_sec(timediff(curtime(),jam_pelayanan)/60)>=30$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
