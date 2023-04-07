-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 05:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE DATABASE violecar;
USE violecar;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `violecar`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `namaPelanggan` varchar(50) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `poskod` varchar(5) NOT NULL,
  `negeri` varchar(20) NOT NULL,
  `noRumah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`namaPelanggan`, `alamat`, `poskod`, `negeri`, `noRumah`) VALUES
('vivi', 'Bermula condominium', '19870', 'pulau pinang', '45a-39-2');

-- --------------------------------------------------------

--
-- Table structure for table `jualan`
--

CREATE TABLE `jualan` (
  `idjualan` int(11) NOT NULL,
  `tarikhJualan` date NOT NULL,
  `idPekerja` varchar(50) NOT NULL,
  `noPlat` varchar(20) NOT NULL,
  `icPelanggan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jualan`
--

INSERT INTO `jualan` (`idjualan`, `tarikhJualan`, `idPekerja`, `noPlat`, `icPelanggan`) VALUES
(1, '2020-01-01', 'jane123', 'VIP1', '000228072868');

-- --------------------------------------------------------

--
-- Table structure for table `kereta`
--

CREATE TABLE `kereta` (
  `noPlat` varchar(20) NOT NULL,
  `modelKereta` varchar(100) NOT NULL,
  `tahunDibuat` varchar(4) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kereta`
--

INSERT INTO `kereta` (`noPlat`, `modelKereta`, `tahunDibuat`, `harga`) VALUES
('QWE1762', 'mercedes benz e350 amg', '2018', 450000),
('VIP1', 'tesla roadster', '2020', 14000000);

-- --------------------------------------------------------

--
-- Table structure for table `pekerja`
--

CREATE TABLE `pekerja` (
  `idPekerja` varchar(50) NOT NULL,
  `kataLaluan` varchar(50) NOT NULL,
  `namaPekerja` varchar(50) NOT NULL,
  `noTelefonPekerja` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pekerja`
--

INSERT INTO `pekerja` (`idPekerja`, `kataLaluan`, `namaPekerja`, `noTelefonPekerja`) VALUES
('jane123', 'test123', 'Jane', '0111111111');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `icPelanggan` varchar(12) NOT NULL,
  `noTelefonPelanggan` varchar(11) NOT NULL,
  `namaPelanggan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`icPelanggan`, `noTelefonPelanggan`, `namaPelanggan`) VALUES
('000228072868', '0164538579', 'vivi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`namaPelanggan`),
  ADD KEY `namaPelanggan` (`namaPelanggan`);

--
-- Indexes for table `jualan`
--
ALTER TABLE `jualan`
  ADD PRIMARY KEY (`idjualan`),
  ADD KEY `idJualan` (`idjualan`),
  ADD KEY `idPekerja` (`idPekerja`),
  ADD KEY `noPlat` (`noPlat`),
  ADD KEY `icPelanggan` (`icPelanggan`);

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`noPlat`),
  ADD KEY `noPlat` (`noPlat`);

--
-- Indexes for table `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`idPekerja`),
  ADD KEY `idPekerja` (`idPekerja`),
  ADD KEY `idPekerja_2` (`idPekerja`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`icPelanggan`),
  ADD KEY `icPelanggan` (`icPelanggan`),
  ADD KEY `namaPelanggan` (`namaPelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jualan`
--
ALTER TABLE `jualan`
  MODIFY `idjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jualan`
--
ALTER TABLE `jualan`
  ADD CONSTRAINT `jualan_ibfk_1` FOREIGN KEY (`idPekerja`) REFERENCES `pekerja` (`idPekerja`),
  ADD CONSTRAINT `jualan_ibfk_2` FOREIGN KEY (`noPlat`) REFERENCES `kereta` (`noPlat`),
  ADD CONSTRAINT `jualan_ibfk_3` FOREIGN KEY (`icPelanggan`) REFERENCES `pelanggan` (`icPelanggan`);

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`namaPelanggan`) REFERENCES `alamat` (`namaPelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
