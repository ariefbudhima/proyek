-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 01:27 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brimedikabandung`
--

-- --------------------------------------------------------

--
-- Table structure for table `det_pemeriksaan`
--

CREATE TABLE IF NOT EXISTS `det_pemeriksaan` (
  `id_detpemeriksaan` int(10) NOT NULL,
  `nm_detpemeriksaan` int(100) NOT NULL,
  `idPemeriksaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `idDokter` varchar(25) NOT NULL,
  `nmDokter` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `Alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`idDokter`, `nmDokter`, `gender`, `Alamat`) VALUES
('ADM', 'namanya admin', 'Laki-Laki', 'Bandung'),
('SMG', 'Sumanang', 'Laki-Laki', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `observasi`
--

CREATE TABLE IF NOT EXISTS `observasi` (
  `idObservasi` int(10) NOT NULL,
  `tglObservasi` date NOT NULL,
  `idPaket` int(10) NOT NULL,
  `id_detpemeriksaan` int(10) NOT NULL,
  `idPemeriksaan` int(10) NOT NULL,
  `idPerawat` int(10) NOT NULL,
  `idDokter` int(10) NOT NULL,
  `idPasien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `idPaket` int(10) NOT NULL,
  `nmPaket` varchar(100) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `idPemeriksaan` int(10) NOT NULL,
  `id_detpemeriksaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `kdPasien` varchar(25) NOT NULL,
  `nmPasien` varchar(100) NOT NULL,
  `umur` int(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `noTelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kdPasien`, `nmPasien`, `umur`, `gender`, `Alamat`, `pekerjaan`, `noTelp`) VALUES
('PAS1', 'Munaroh', 21, 'Perempuan', 'Bandung', '', '2147483647'),
('PAS2', 'as', 31, 'Laki-laki', 'das', '', '56452'),
('PAS3', 'nanda', 12, 'Laki-laki', 'Rembang', '', '0982987271'),
('PAS4', 'Aufa', 24, 'Perempuan', 'Jatinegara', '', '089278734912');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE IF NOT EXISTS `pemeriksaan` (
  `idPemeriksaan` int(10) NOT NULL,
  `nmPemeriksaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perawat`
--

CREATE TABLE IF NOT EXISTS `perawat` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `id_perawat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perawat`
--

INSERT INTO `perawat` (`username`, `password`, `nama`, `jabatan`, `id_perawat`) VALUES
('admin', 'admin', 'Ulfah Okta A', 'Laboratorium', 'LAB1'),
('medical', 'medical', 'Intan Pramitha P', 'Medical', 'MED1'),
('radio', 'radio', 'Isur', 'Radiologi', 'RAD1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `det_pemeriksaan`
--
ALTER TABLE `det_pemeriksaan`
  ADD PRIMARY KEY (`id_detpemeriksaan`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`idDokter`);

--
-- Indexes for table `observasi`
--
ALTER TABLE `observasi`
  ADD PRIMARY KEY (`idObservasi`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`idPaket`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kdPasien`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`idPemeriksaan`);

--
-- Indexes for table `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`id_perawat`), ADD UNIQUE KEY `username` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
