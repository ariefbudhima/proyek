-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 06:06 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brim`
--

-- --------------------------------------------------------

--
-- Table structure for table `labhema`
--

CREATE TABLE `labhema` (
  `idHema` int(11) NOT NULL,
  `Tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kdPasien` int(25) NOT NULL,
  `hemoglobin` int(11) NOT NULL,
  `eritrosit` int(11) NOT NULL,
  `hematokrit` int(11) NOT NULL,
  `leukosit` int(11) NOT NULL,
  `laju` int(11) NOT NULL,
  `trombosit` int(11) NOT NULL,
  `mcv` int(11) NOT NULL,
  `mch` int(11) NOT NULL,
  `mchc` int(11) NOT NULL,
  `basofil` int(11) NOT NULL,
  `eosinofil` int(11) NOT NULL,
  `batang` int(11) NOT NULL,
  `segmen` int(11) NOT NULL,
  `limposit` int(11) NOT NULL,
  `monosit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labhema`
--

INSERT INTO `labhema` (`idHema`, `Tgl`, `kdPasien`, `hemoglobin`, `eritrosit`, `hematokrit`, `leukosit`, `laju`, `trombosit`, `mcv`, `mch`, `mchc`, `basofil`, `eosinofil`, `batang`, `segmen`, `limposit`, `monosit`) VALUES
(1, '2018-07-24 04:17:31', 3, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, '2018-07-24 04:17:31', 3, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(3, '2018-07-24 04:17:31', 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(4, '2018-07-24 04:17:31', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(5, '2018-07-24 04:19:21', 4, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `labsero`
--

CREATE TABLE `labsero` (
  `idSero` int(11) NOT NULL,
  `Tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kdPasien` int(25) NOT NULL,
  `vdrl` varchar(80) NOT NULL,
  `hbasg` varchar(80) NOT NULL,
  `widal` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labsero`
--

INSERT INTO `labsero` (`idSero`, `Tgl`, `kdPasien`, `vdrl`, `hbasg`, `widal`) VALUES
(1, '2018-07-24 07:55:51', 1, 'normal', 'normal', 'normal'),
(2, '2018-07-24 08:12:35', 2, 'normal', 'tidak normal', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `laburin`
--

CREATE TABLE `laburin` (
  `idUrin` int(11) NOT NULL,
  `Tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `KdPasien` int(25) NOT NULL,
  `warna` varchar(120) NOT NULL,
  `jernih` varchar(80) NOT NULL,
  `bj` int(11) NOT NULL,
  `ph` int(11) NOT NULL,
  `protein` varchar(80) NOT NULL,
  `glukosa` varchar(80) NOT NULL,
  `keton` varchar(80) NOT NULL,
  `bilirubin` varchar(80) NOT NULL,
  `urobilinogen` varchar(80) NOT NULL,
  `nitrit` varchar(80) NOT NULL,
  `darah` varchar(80) NOT NULL,
  `leukosit` varchar(80) NOT NULL,
  `sEritrosit` varchar(255) NOT NULL,
  `sLeukosit` varchar(255) NOT NULL,
  `sEpitel` varchar(255) NOT NULL,
  `kristal` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laburin`
--

INSERT INTO `laburin` (`idUrin`, `Tgl`, `KdPasien`, `warna`, `jernih`, `bj`, `ph`, `protein`, `glukosa`, `keton`, `bilirubin`, `urobilinogen`, `nitrit`, `darah`, `leukosit`, `sEritrosit`, `sLeukosit`, `sEpitel`, `kristal`) VALUES
(1, '2018-07-24 07:21:08', 1, 'putih', 'keruh', 1, 1, 'positif', 'positif', '', 'negatif', 'meningkat', 'negatif', 'negatif', 'negatif', '0-2', '0-2', '2', 'positif'),
(2, '2018-07-24 07:22:42', 3, 'bening', 'keruh', 1, 1, 'positif', 'positif', '', 'negatif', 'meningkat', 'positif', 'negatif', 'negatif', '0-2', '0-2', '1', 'positif');

-- --------------------------------------------------------

--
-- Table structure for table `medicalanamnase`
--

CREATE TABLE `medicalanamnase` (
  `idAnamnase` int(11) NOT NULL,
  `kdPasien` int(15) NOT NULL,
  `Hepatitis` varchar(20) DEFAULT NULL,
  `TBC` varchar(20) DEFAULT NULL,
  `tbcTahun` int(11) DEFAULT NULL,
  `Hipertensi` varchar(20) DEFAULT NULL,
  `Diabetes` varchar(20) DEFAULT NULL,
  `Alergi` varchar(20) DEFAULT NULL,
  `Operasi` varchar(20) DEFAULT NULL,
  `Jantung` varchar(20) DEFAULT NULL,
  `Inap` varchar(20) DEFAULT NULL,
  `PTulang` varchar(20) DEFAULT NULL,
  `ObatRutin` varchar(20) DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalanamnase`
--

INSERT INTO `medicalanamnase` (`idAnamnase`, `kdPasien`, `Hepatitis`, `TBC`, `tbcTahun`, `Hipertensi`, `Diabetes`, `Alergi`, `Operasi`, `Jantung`, `Inap`, `PTulang`, `ObatRutin`, `tgl`) VALUES
(1, 3, 'A', 'Ya', 2010, 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', '2018-07-26 07:10:20'),
(2, 1, 'B', 'Tidak', 0, 'ya', 'tidak', 'ya', 'ya', 'ya', 'tidak', 'ya', 'ya', '2018-07-26 07:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `medicalkebiasaan`
--

CREATE TABLE `medicalkebiasaan` (
  `idKebiasaan` int(11) NOT NULL,
  `kdPasien` int(25) NOT NULL,
  `olahraga` varchar(255) NOT NULL,
  `rokok` varchar(255) NOT NULL,
  `kopi` varchar(255) NOT NULL,
  `alkohol` varchar(255) NOT NULL,
  `Tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalkebiasaan`
--

INSERT INTO `medicalkebiasaan` (`idKebiasaan`, `kdPasien`, `olahraga`, `rokok`, `kopi`, `alkohol`, `Tgl`) VALUES
(1, 1, 'Tidak', '12', '12', '12', '2018-07-26 10:08:54'),
(2, 2, 'Tidak', 'Tidak', '2', 'Tidak', '2018-07-26 10:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `medicalkeluarga`
--

CREATE TABLE `medicalkeluarga` (
  `idKeluarga` int(11) NOT NULL,
  `kdPasien` int(15) NOT NULL,
  `jantung` varchar(20) DEFAULT NULL,
  `dTinggi` varchar(20) DEFAULT NULL,
  `kmanis` varchar(20) DEFAULT NULL,
  `stroke` varchar(20) DEFAULT NULL,
  `paru` varchar(20) DEFAULT NULL,
  `kanker` varchar(20) DEFAULT NULL,
  `gjiwa` varchar(20) DEFAULT NULL,
  `ginjal` varchar(20) DEFAULT NULL,
  `scerna` varchar(20) DEFAULT NULL,
  `lainnya` varchar(20) DEFAULT NULL,
  `detLainnya` varchar(120) DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalkeluarga`
--

INSERT INTO `medicalkeluarga` (`idKeluarga`, `kdPasien`, `jantung`, `dTinggi`, `kmanis`, `stroke`, `paru`, `kanker`, `gjiwa`, `ginjal`, `scerna`, `lainnya`, `detLainnya`, `tgl`) VALUES
(1, 2, 'tidak', 'tidak', 'tidak', NULL, 'tidak', 'ya', 'tidak', 'tidak', 'ya', 'Ya', 'ASD', '2018-07-26 08:18:16'),
(2, 3, 'tidak', 'tidak', 'tidak', NULL, 'ya', 'ya', 'tidak', 'tidak', 'tidak', 'Tidak', '', '2018-07-26 08:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `medicalkeluhan`
--

CREATE TABLE `medicalkeluhan` (
  `idKeluhan` int(11) NOT NULL,
  `kdPasien` int(25) NOT NULL,
  `flu` varchar(255) DEFAULT NULL,
  `perut` varchar(255) DEFAULT NULL,
  `sesak` varchar(255) DEFAULT NULL,
  `haemoroid` varchar(255) DEFAULT NULL,
  `kulit` varchar(255) DEFAULT NULL,
  `mengandung` varchar(255) DEFAULT NULL,
  `nyeridada` varchar(255) DEFAULT NULL,
  `otot` varchar(255) DEFAULT NULL,
  `hernia` varchar(255) DEFAULT NULL,
  `lainnya` varchar(255) DEFAULT NULL,
  `Tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalkeluhan`
--

INSERT INTO `medicalkeluhan` (`idKeluhan`, `kdPasien`, `flu`, `perut`, `sesak`, `haemoroid`, `kulit`, `mengandung`, `nyeridada`, `otot`, `hernia`, `lainnya`, `Tgl`) VALUES
(1, 1, 'ya', 'ya', 'tidak', 'ya', 'ya', 'ya', 'ya', 'tidak', 'ya', 'tidak', '2018-07-28 16:00:00'),
(2, 1, 'ya', 'ya', 'tidak', 'ya', 'ya', 'ya', 'ya', 'tidak', 'ya', 'tidak', '2018-07-28 16:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `medicalpemeriksaan`
--

CREATE TABLE `medicalpemeriksaan` (
  `idPemeriksaan` int(11) NOT NULL,
  `kdPasien` int(15) NOT NULL,
  `tinggi` varchar(20) DEFAULT NULL,
  `berat` varchar(20) DEFAULT NULL,
  `nadi` varchar(20) DEFAULT NULL,
  `napas` varchar(20) DEFAULT NULL,
  `tensi` varchar(20) DEFAULT NULL,
  `hariankiri` varchar(120) DEFAULT NULL,
  `hariankanan` varchar(120) NOT NULL,
  `periksakiri` varchar(120) DEFAULT NULL,
  `periksakanan` varchar(120) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalpemeriksaan`
--

INSERT INTO `medicalpemeriksaan` (`idPemeriksaan`, `kdPasien`, `tinggi`, `berat`, `nadi`, `napas`, `tensi`, `hariankiri`, `hariankanan`, `periksakiri`, `periksakanan`, `tgl`) VALUES
(1, 1, '170', '80', 'dummy', 'dummy', 'dummy', 'kacamata', 'kacamata', 'softlens', 'softlens', '2018-07-26 09:04:25'),
(2, 2, '180', '90', 'dummy', 'dummy', 'dummy', 'Tidak Menggunakan Keduanya', 'Tidak Menggunakan Keduanya', 'Tidak Menggunakan Keduanya', 'Tidak Menggunakan Keduanya', '2018-07-26 09:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `medicalumum`
--

CREATE TABLE `medicalumum` (
  `idUmum` int(11) NOT NULL,
  `kdPasien` int(25) NOT NULL,
  `kesan` varchar(255) NOT NULL,
  `bmi` varchar(255) NOT NULL,
  `kulit` varchar(255) NOT NULL,
  `mata` varchar(255) NOT NULL,
  `Tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalumum`
--

INSERT INTO `medicalumum` (`idUmum`, `kdPasien`, `kesan`, `bmi`, `kulit`, `mata`, `Tgl`) VALUES
(1, 1, 'Tidak Cukup', 'Over Weight', 'Tidak Normal', 'Normal', '2018-07-26 10:41:47'),
(2, 3, 'Cukup', 'Under Weight', 'Normal', 'Normal', '2018-07-26 10:50:22'),
(3, 2, 'Cukup', 'Under Weight', 'Normal', 'Tidak Normal', '2018-07-26 10:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `observasi`
--

CREATE TABLE `observasi` (
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

CREATE TABLE `paket` (
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

CREATE TABLE `pasien` (
  `kdPasien` int(25) NOT NULL,
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
(1, 'Munaroh', 21, 'Perempuan', 'Bandung', '', '2147483647'),
(2, 'as', 31, 'Laki-laki', 'das', '', '56452'),
(3, 'nanda', 12, 'Laki-laki', 'Rembang', '', '0982987271'),
(4, 'Aufa', 24, 'Perempuan', 'Jatinegara', '', '089278734912');

-- --------------------------------------------------------

--
-- Table structure for table `perawat`
--

CREATE TABLE `perawat` (
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

-- --------------------------------------------------------

--
-- Table structure for table `radioabdomen`
--

CREATE TABLE `radioabdomen` (
  `No` int(11) NOT NULL,
  `kdPasien` int(15) NOT NULL,
  `Bentuk` varchar(20) DEFAULT NULL,
  `Palpasi` varchar(20) DEFAULT NULL,
  `Hati` varchar(20) DEFAULT NULL,
  `Limpa` varchar(20) DEFAULT NULL,
  `Ginjal` varchar(20) DEFAULT NULL,
  `Rectal` varchar(20) DEFAULT NULL,
  `Hernia` varchar(20) DEFAULT NULL,
  `Haemoroid` varchar(20) DEFAULT NULL,
  `Lainnya` varchar(20) DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radioabdomen`
--

INSERT INTO `radioabdomen` (`No`, `kdPasien`, `Bentuk`, `Palpasi`, `Hati`, `Limpa`, `Ginjal`, `Rectal`, `Hernia`, `Haemoroid`, `Lainnya`, `tgl`) VALUES
(1, 1, 'Normal', 'Normal', 'Normal', 'Normal', 'tidak', 'Normal', 'Normal', 'Normal', 'Normal', '2018-07-26 03:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `radioextrim`
--

CREATE TABLE `radioextrim` (
  `idExtrim` int(11) NOT NULL,
  `kdPasien` int(15) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Tulang` varchar(20) NOT NULL,
  `Otot` varchar(20) NOT NULL,
  `jTangan` varchar(20) NOT NULL,
  `jKaki` varchar(20) NOT NULL,
  `Lainnya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radioextrim`
--

INSERT INTO `radioextrim` (`idExtrim`, `kdPasien`, `tgl`, `Tulang`, `Otot`, `jTangan`, `jKaki`, `Lainnya`) VALUES
(0, 1, '2018-07-26 03:41:57', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `radioleher`
--

CREATE TABLE `radioleher` (
  `idLeher` int(11) NOT NULL,
  `kdPasien` int(15) NOT NULL,
  `leher` varchar(20) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `radioneuro`
--

CREATE TABLE `radioneuro` (
  `idNeuro` int(11) NOT NULL,
  `kdPasien` int(15) NOT NULL,
  `Fisiologi` varchar(20) DEFAULT NULL,
  `Patologis` varchar(20) DEFAULT NULL,
  `Motor` varchar(20) DEFAULT NULL,
  `Pusat` varchar(20) DEFAULT NULL,
  `Tepi` varchar(20) DEFAULT NULL,
  `Lidah` varchar(20) DEFAULT NULL,
  `Lainnya` varchar(20) DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radioneuro`
--

INSERT INTO `radioneuro` (`idNeuro`, `kdPasien`, `Fisiologi`, `Patologis`, `Motor`, `Pusat`, `Tepi`, `Lidah`, `Lainnya`, `tgl`) VALUES
(1, 1, 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', '2018-07-26 03:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `radiothorax`
--

CREATE TABLE `radiothorax` (
  `idThorax` int(11) NOT NULL,
  `kdPasien` int(15) NOT NULL,
  `Bentuk` varchar(20) DEFAULT '-',
  `Ekspansi` varchar(20) DEFAULT '-',
  `Palpasi` varchar(20) DEFAULT '-',
  `Perkusi` varchar(20) DEFAULT '-',
  `Auskultasi` varchar(20) DEFAULT '-',
  `Lain` varchar(20) DEFAULT '-',
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radiothorax`
--

INSERT INTO `radiothorax` (`idThorax`, `kdPasien`, `Bentuk`, `Ekspansi`, `Palpasi`, `Perkusi`, `Auskultasi`, `Lain`, `tgl`) VALUES
(1, 1, 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', '', '2018-07-26 03:33:12'),
(2, 1, 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', '', '2018-07-26 03:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `radiotht`
--

CREATE TABLE `radiotht` (
  `idTht` int(11) NOT NULL,
  `kdPasien` int(15) NOT NULL,
  `dtelinga` varchar(20) DEFAULT '-',
  `ltelinga` varchar(20) DEFAULT '-',
  `tympani` varchar(20) DEFAULT '-',
  `hidung` varchar(20) DEFAULT '-',
  `sinus` varchar(20) DEFAULT '-',
  `faring` varchar(20) DEFAULT '-',
  `tensil` varchar(20) DEFAULT '-',
  `lidah` varchar(20) DEFAULT '-',
  `gusi` varchar(20) DEFAULT '-',
  `gigi` varchar(20) DEFAULT '-',
  `karang` varchar(20) DEFAULT '-',
  `lubanggigi` varchar(20) DEFAULT '-',
  `tambalgigi` varchar(20) DEFAULT '-',
  `gigitanggal` varchar(20) DEFAULT '-',
  `gigimiring` varchar(20) DEFAULT '-',
  `radix` varchar(20) DEFAULT '-',
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `labhema`
--
ALTER TABLE `labhema`
  ADD PRIMARY KEY (`idHema`),
  ADD KEY `FK_hema` (`kdPasien`);

--
-- Indexes for table `labsero`
--
ALTER TABLE `labsero`
  ADD PRIMARY KEY (`idSero`),
  ADD KEY `FK_sero` (`kdPasien`);

--
-- Indexes for table `laburin`
--
ALTER TABLE `laburin`
  ADD PRIMARY KEY (`idUrin`),
  ADD KEY `FK_urin` (`KdPasien`);

--
-- Indexes for table `medicalanamnase`
--
ALTER TABLE `medicalanamnase`
  ADD PRIMARY KEY (`idAnamnase`),
  ADD KEY `kdPasien` (`kdPasien`);

--
-- Indexes for table `medicalkebiasaan`
--
ALTER TABLE `medicalkebiasaan`
  ADD PRIMARY KEY (`idKebiasaan`),
  ADD KEY `FK_biasa` (`kdPasien`);

--
-- Indexes for table `medicalkeluarga`
--
ALTER TABLE `medicalkeluarga`
  ADD PRIMARY KEY (`idKeluarga`),
  ADD KEY `kdPasien` (`kdPasien`);

--
-- Indexes for table `medicalkeluhan`
--
ALTER TABLE `medicalkeluhan`
  ADD PRIMARY KEY (`idKeluhan`),
  ADD KEY `FK_keluhan` (`kdPasien`);

--
-- Indexes for table `medicalpemeriksaan`
--
ALTER TABLE `medicalpemeriksaan`
  ADD PRIMARY KEY (`idPemeriksaan`),
  ADD KEY `kdPasien` (`kdPasien`);

--
-- Indexes for table `medicalumum`
--
ALTER TABLE `medicalumum`
  ADD PRIMARY KEY (`idUmum`),
  ADD KEY `FK_umum` (`kdPasien`);

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
-- Indexes for table `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`id_perawat`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `radioabdomen`
--
ALTER TABLE `radioabdomen`
  ADD PRIMARY KEY (`No`),
  ADD KEY `kdPasien` (`kdPasien`);

--
-- Indexes for table `radioextrim`
--
ALTER TABLE `radioextrim`
  ADD PRIMARY KEY (`idExtrim`),
  ADD KEY `kdPasien` (`kdPasien`);

--
-- Indexes for table `radioleher`
--
ALTER TABLE `radioleher`
  ADD PRIMARY KEY (`idLeher`),
  ADD KEY `kdPasien` (`kdPasien`);

--
-- Indexes for table `radioneuro`
--
ALTER TABLE `radioneuro`
  ADD PRIMARY KEY (`idNeuro`),
  ADD KEY `kdPasien` (`kdPasien`);

--
-- Indexes for table `radiothorax`
--
ALTER TABLE `radiothorax`
  ADD PRIMARY KEY (`idThorax`),
  ADD KEY `kdPasien` (`kdPasien`);

--
-- Indexes for table `radiotht`
--
ALTER TABLE `radiotht`
  ADD PRIMARY KEY (`idTht`),
  ADD KEY `kdPasien` (`kdPasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicalanamnase`
--
ALTER TABLE `medicalanamnase`
  MODIFY `idAnamnase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicalkeluarga`
--
ALTER TABLE `medicalkeluarga`
  MODIFY `idKeluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicalpemeriksaan`
--
ALTER TABLE `medicalpemeriksaan`
  MODIFY `idPemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `radioabdomen`
--
ALTER TABLE `radioabdomen`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `radioleher`
--
ALTER TABLE `radioleher`
  MODIFY `idLeher` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `radioneuro`
--
ALTER TABLE `radioneuro`
  MODIFY `idNeuro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `radiothorax`
--
ALTER TABLE `radiothorax`
  MODIFY `idThorax` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `radiotht`
--
ALTER TABLE `radiotht`
  MODIFY `idTht` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `labhema`
--
ALTER TABLE `labhema`
  ADD CONSTRAINT `FK_hema` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `labsero`
--
ALTER TABLE `labsero`
  ADD CONSTRAINT `FK_sero` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laburin`
--
ALTER TABLE `laburin`
  ADD CONSTRAINT `FK_urin` FOREIGN KEY (`KdPasien`) REFERENCES `pasien` (`kdPasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicalanamnase`
--
ALTER TABLE `medicalanamnase`
  ADD CONSTRAINT `medicalanamnase_ibfk_1` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`);

--
-- Constraints for table `medicalkebiasaan`
--
ALTER TABLE `medicalkebiasaan`
  ADD CONSTRAINT `FK_biasa` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicalkeluarga`
--
ALTER TABLE `medicalkeluarga`
  ADD CONSTRAINT `medicalkeluarga_ibfk_1` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`);

--
-- Constraints for table `medicalkeluhan`
--
ALTER TABLE `medicalkeluhan`
  ADD CONSTRAINT `FK_keluhan` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicalpemeriksaan`
--
ALTER TABLE `medicalpemeriksaan`
  ADD CONSTRAINT `medicalpemeriksaan_ibfk_1` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`);

--
-- Constraints for table `medicalumum`
--
ALTER TABLE `medicalumum`
  ADD CONSTRAINT `FK_umum` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `radioabdomen`
--
ALTER TABLE `radioabdomen`
  ADD CONSTRAINT `radioabdomen_ibfk_1` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`);

--
-- Constraints for table `radioextrim`
--
ALTER TABLE `radioextrim`
  ADD CONSTRAINT `radioextrim_ibfk_1` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`);

--
-- Constraints for table `radioleher`
--
ALTER TABLE `radioleher`
  ADD CONSTRAINT `radioleher_ibfk_1` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`);

--
-- Constraints for table `radioneuro`
--
ALTER TABLE `radioneuro`
  ADD CONSTRAINT `radioneuro_ibfk_1` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`);

--
-- Constraints for table `radiothorax`
--
ALTER TABLE `radiothorax`
  ADD CONSTRAINT `radiothorax_ibfk_1` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`);

--
-- Constraints for table `radiotht`
--
ALTER TABLE `radiotht`
  ADD CONSTRAINT `radiotht_ibfk_1` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
