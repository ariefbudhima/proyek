-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 05:42 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
-- Table structure for table `det_pemeriksaan`
--

CREATE TABLE `det_pemeriksaan` (
  `id_detpemeriksaan` int(10) NOT NULL,
  `nm_detpemeriksaan` varchar(100) NOT NULL,
  `idPemeriksaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `det_pemeriksaan`
--

INSERT INTO `det_pemeriksaan` (`id_detpemeriksaan`, `nm_detpemeriksaan`, `idPemeriksaan`) VALUES
(0, '', 0),
(1, 'Riwayat Penyakit Hepatitis A/B/C', 4),
(2, 'Riwayat Pengobatan TBC (Tahun)', 4),
(3, 'Hipertensi', 4),
(4, 'Diabetes Melitus', 4),
(5, 'Alergi', 4),
(6, 'Riwayat Rawat Operasi', 4),
(7, 'Riwayat Penyakit Jantung', 4),
(8, 'Pengobatan Rawat Inap', 4),
(9, 'Patah Tulang', 4),
(10, 'Obat yang Rutin Dikonsumsi', 4),
(11, 'Riwayat Penyakit Jantung', 5),
(12, 'Penyakit Darah Tinggi', 5),
(13, 'Penyakit Kencing Manis', 5),
(14, 'Penyakit Stroke', 5),
(15, 'Penyakit Paru/Asma/TBC', 5),
(16, 'Penyakit Kanker', 5),
(17, 'Penyakit Gangguan Jiwa', 5),
(18, 'Penyakit Ginjal', 5),
(19, 'Penyakit Saluran Cerna', 5),
(20, 'Penyakit Lainnya ', 5),
(21, 'Tinggi Badan ', 6),
(22, 'Berat Badan', 6),
(23, 'Nadi', 6),
(24, 'Pernapasan', 6),
(25, 'Tensi', 6),
(26, 'Mata', 6),
(27, 'Olahraga', 7),
(28, 'Merokok', 7),
(29, 'Minum Kopi', 7),
(30, 'Alkohol', 7),
(31, 'Flu Like Syndrome', 8),
(32, 'Keluhan Perut', 8),
(33, 'Sesak', 8),
(34, 'Haemoroid Grade I/II/III', 8),
(35, 'Keluhan Kulit', 8),
(36, 'Sedang Mengandung', 8),
(37, 'Nyeri Dada', 8),
(38, 'Keluhan Otot,Tulang Syaraf', 8),
(39, 'Hernia', 8),
(40, 'Lainnya', 8),
(41, 'Kesan Umum', 9),
(42, 'BMI (Badan Massa Index)', 9),
(43, 'Kulit', 9),
(44, 'Mata', 9),
(45, 'Hemoglobin', 1),
(46, 'Eritrosit', 1),
(47, 'Hematokrit', 1),
(48, 'Leukosit', 1),
(49, 'Laju Endap Darah', 1),
(50, 'Thrombosit', 1),
(51, 'MCV', 1),
(52, 'MCH', 1),
(53, 'MCHC', 1),
(54, 'Basofil', 1),
(55, 'Eosinofil', 1),
(56, 'Batang', 1),
(57, 'Segmen', 1),
(58, 'Limposit', 1),
(59, 'Monosit', 1),
(60, 'Syphilis', 3),
(61, 'HbsAg', 3),
(62, 'Widal', 3),
(63, 'Warna', 2),
(64, 'Kejernihan', 2),
(65, 'BJ', 2),
(66, 'PH', 2),
(67, 'Protein', 2),
(68, 'Glukosa', 2),
(69, 'Keton', 2),
(70, 'Bilirubin', 2),
(71, 'Urobilinogen', 2),
(72, 'Nitrit', 2),
(73, 'Darah', 2),
(74, 'Leukosit', 2),
(75, 'sEritrosit', 2),
(76, 'sLeukosit', 2),
(77, 'sEpitel', 2),
(78, 'Kristal', 2),
(79, 'Bentuk', 12),
(80, 'Palpasi/Perkusi', 12),
(81, 'Hati', 12),
(82, 'Limpa', 12),
(83, 'Ginjal', 12),
(84, 'Rectal', 12),
(85, 'Hernia', 12),
(86, 'Hernia', 12),
(87, 'Haemoroid', 12),
(88, 'Lainnya', 12),
(89, 'Leher', 11),
(90, 'Reflex Fisiologin', 14),
(91, 'Reflex Patologis', 14),
(92, 'Kekuatan Motorik', 14),
(93, 'Kelainan Syaraf Pusat', 14),
(94, 'Kelainan Syaraf Tepi', 14),
(95, 'Lidah', 14),
(96, 'Lainnya', 14),
(97, 'Bentuk', 10),
(98, 'Ekspansi', 10),
(99, 'Palpasi', 10),
(100, 'Perkusi', 10),
(101, 'Auskultasi', 10),
(102, 'Lain', 10),
(103, 'Daun Telinga', 15),
(104, 'Lubang Telinga', 15),
(105, 'Membran Tympani', 15),
(106, 'Hidung', 15),
(107, 'Sinus', 15),
(108, 'Faring', 15),
(109, 'Tensil', 15),
(110, 'Lidah', 15),
(111, 'Gusi', 15),
(112, 'Gigi', 15),
(113, 'Karang', 15),
(114, 'Lubang Gigi', 15),
(115, 'Tambal Gigi', 15),
(116, 'Gigi Tanggal', 15),
(117, 'Gigi Miring', 15),
(118, 'Radix', 15),
(119, 'Kelainan Tulang/Syaraf', 13),
(120, 'Kelainan Otot', 13),
(121, 'Kelainan Jari Tangan', 13),
(122, 'Kelainan Jari Kaki', 13),
(123, 'Lainnya', 13);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
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

-- --------------------------------------------------------

--
-- Table structure for table `medicalkeluarga`
--

CREATE TABLE `medicalkeluarga` (
  `idKeluarga` int(11) NOT NULL,
  `kdPasien` int(15) NOT NULL,
  `Jantung` varchar(20) DEFAULT NULL,
  `DTinggi` varchar(20) DEFAULT NULL,
  `Kmanis` varchar(20) DEFAULT NULL,
  `Stroke` varchar(20) DEFAULT NULL,
  `Paru` varchar(20) DEFAULT NULL,
  `Kanker` varchar(20) DEFAULT NULL,
  `GJiwa` varchar(20) DEFAULT NULL,
  `Ginjal` varchar(20) DEFAULT NULL,
  `SCerna` varchar(20) DEFAULT NULL,
  `Lainnya` varchar(20) DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicalpemeriksaan`
--

CREATE TABLE `medicalpemeriksaan` (
  `idPemeriksaan` int(11) NOT NULL,
  `kdPasien` int(15) NOT NULL,
  `Tinggi` varchar(20) DEFAULT NULL,
  `Berat` varchar(20) DEFAULT NULL,
  `Nadi` varchar(20) DEFAULT NULL,
  `Pernapasan` varchar(20) DEFAULT NULL,
  `Tensi` varchar(20) DEFAULT NULL,
  `Harihari` varchar(20) DEFAULT NULL,
  `Periksa` varchar(20) DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `idPemeriksaan` int(10) NOT NULL,
  `nmPemeriksaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`idPemeriksaan`, `nmPemeriksaan`) VALUES
(1, 'Hematologi'),
(2, 'Urinalis'),
(3, 'Serologi'),
(4, 'Anamse'),
(5, 'Riwayat Penyakit Keluarga'),
(6, 'Pemeriksaan'),
(7, 'Kebiasaan'),
(8, 'Keluhan Sekarang'),
(9, 'Keadaan Umum'),
(10, 'Thorax '),
(11, 'Leher'),
(12, 'Abdomen'),
(13, 'Extremitas'),
(14, 'Neurologis'),
(15, 'THT');

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
-- Indexes for table `medicalkeluarga`
--
ALTER TABLE `medicalkeluarga`
  ADD PRIMARY KEY (`idKeluarga`),
  ADD KEY `kdPasien` (`kdPasien`);

--
-- Indexes for table `medicalpemeriksaan`
--
ALTER TABLE `medicalpemeriksaan`
  ADD PRIMARY KEY (`idPemeriksaan`),
  ADD KEY `kdPasien` (`kdPasien`);

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
  MODIFY `idAnamnase` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicalkeluarga`
--
ALTER TABLE `medicalkeluarga`
  MODIFY `idKeluarga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicalpemeriksaan`
--
ALTER TABLE `medicalpemeriksaan`
  MODIFY `idPemeriksaan` int(11) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `medicalkeluarga`
--
ALTER TABLE `medicalkeluarga`
  ADD CONSTRAINT `medicalkeluarga_ibfk_1` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`);

--
-- Constraints for table `medicalpemeriksaan`
--
ALTER TABLE `medicalpemeriksaan`
  ADD CONSTRAINT `medicalpemeriksaan_ibfk_1` FOREIGN KEY (`kdPasien`) REFERENCES `pasien` (`kdPasien`);

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
