-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 06:41 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kemiskinan`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE `aset` (
  `IdAset` int(10) UNSIGNED NOT NULL,
  `IdTernak` int(10) UNSIGNED NOT NULL,
  `IdAsetTidakBergerak` int(10) UNSIGNED NOT NULL,
  `IdProgram` int(10) UNSIGNED NOT NULL,
  `IdAsetBergerak` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asetbergerak`
--

CREATE TABLE `asetbergerak` (
  `IdAsetBergerak` int(10) UNSIGNED NOT NULL,
  `AdaTabungGas` int(10) UNSIGNED DEFAULT NULL,
  `AdaLemariEs` int(10) UNSIGNED DEFAULT NULL,
  `AdaAC` int(10) UNSIGNED DEFAULT NULL,
  `AdaPemanas` int(10) UNSIGNED DEFAULT NULL,
  `AdaTelepon` int(10) UNSIGNED DEFAULT NULL,
  `AdaTv` int(10) UNSIGNED DEFAULT NULL,
  `AdaEmas` int(10) UNSIGNED DEFAULT NULL,
  `AdaLaptop` int(10) UNSIGNED DEFAULT NULL,
  `AdaSepeda` int(10) UNSIGNED DEFAULT NULL,
  `AdaMotor` int(10) UNSIGNED DEFAULT NULL,
  `AdaMobil` int(10) UNSIGNED DEFAULT NULL,
  `AdaPerahu` int(10) UNSIGNED DEFAULT NULL,
  `AdaMotorTempel` int(10) UNSIGNED DEFAULT NULL,
  `AdaPerahuMotor` int(10) UNSIGNED DEFAULT NULL,
  `AdaKapal` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asetbergerak`
--

INSERT INTO `asetbergerak` (`IdAsetBergerak`, `AdaTabungGas`, `AdaLemariEs`, `AdaAC`, `AdaPemanas`, `AdaTelepon`, `AdaTv`, `AdaEmas`, `AdaLaptop`, `AdaSepeda`, `AdaMotor`, `AdaMobil`, `AdaPerahu`, `AdaMotorTempel`, `AdaPerahuMotor`, `AdaKapal`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `asettidakbergerak`
--

CREATE TABLE `asettidakbergerak` (
  `IdAsetTidakBergerak` int(10) UNSIGNED NOT NULL,
  `AsetTakBergerak` int(10) UNSIGNED DEFAULT NULL,
  `LuasAtb` varchar(255) DEFAULT NULL,
  `RumahLain` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asettidakbergerak`
--

INSERT INTO `asettidakbergerak` (`IdAsetTidakBergerak`, `AsetTakBergerak`, `LuasAtb`, `RumahLain`) VALUES
(1, NULL, '2222', 2222),
(2, NULL, '2222', 2222),
(3, NULL, '2222', 2222),
(4, NULL, '2222', 2222),
(5, NULL, '2222', 2222);

-- --------------------------------------------------------

--
-- Table structure for table `ekonomi`
--

CREATE TABLE `ekonomi` (
  `IdEkonomi` int(10) UNSIGNED NOT NULL,
  `IdKeluarga` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenisusaha`
--

CREATE TABLE `jenisusaha` (
  `IdJenisUsaha` int(10) UNSIGNED NOT NULL,
  `IdUsaha` int(10) UNSIGNED NOT NULL,
  `IdEkonomi` int(10) UNSIGNED DEFAULT NULL,
  `JumlahPekerja` int(10) UNSIGNED DEFAULT NULL,
  `TempatUsaha` int(10) UNSIGNED DEFAULT NULL,
  `OmsetUsaha` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `IdKecamatan` int(10) UNSIGNED NOT NULL,
  `NamaKecamatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`IdKecamatan`, `NamaKecamatan`) VALUES
(1, 'Kedungkandang'),
(2, 'Klojen'),
(3, 'Lowokwaru'),
(4, 'Sukun');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `IdEkonomi` int(10) UNSIGNED NOT NULL,
  `NIK` int(10) UNSIGNED ZEROFILL NOT NULL,
  `IdTanggunganPendidikan` int(10) UNSIGNED NOT NULL,
  `IdPengenalanTempat` int(10) UNSIGNED NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `HubKRT` int(10) UNSIGNED DEFAULT NULL,
  `NoKK` int(10) UNSIGNED DEFAULT NULL,
  `JnsKel` int(10) UNSIGNED DEFAULT NULL,
  `Umur` int(10) UNSIGNED DEFAULT NULL,
  `StaKawin` int(10) UNSIGNED DEFAULT NULL,
  `AktaNikah` int(10) UNSIGNED DEFAULT NULL,
  `AdaDiKK` int(10) UNSIGNED DEFAULT NULL,
  `AdaKartuIdentitas` int(10) UNSIGNED DEFAULT NULL,
  `StaHamil` int(10) UNSIGNED DEFAULT NULL,
  `JenisCacat` int(10) UNSIGNED DEFAULT NULL,
  `PenyakitKronis` int(10) UNSIGNED DEFAULT NULL,
  `PartisipasiSekolah` int(10) UNSIGNED DEFAULT NULL,
  `PendidikanTertinggi` int(10) UNSIGNED DEFAULT NULL,
  `KelasTertinggi` int(10) UNSIGNED DEFAULT NULL,
  `IjazahTertinggi` int(10) UNSIGNED DEFAULT NULL,
  `StaBekerja` int(10) UNSIGNED DEFAULT NULL,
  `JumlahJamkerja` int(10) UNSIGNED DEFAULT NULL,
  `LapanganUsaha` int(10) UNSIGNED DEFAULT NULL,
  `StatusPekerjaan` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`IdEkonomi`, `NIK`, `IdTanggunganPendidikan`, `IdPengenalanTempat`, `Nama`, `HubKRT`, `NoKK`, `JnsKel`, `Umur`, `StaKawin`, `AktaNikah`, `AdaDiKK`, `AdaKartuIdentitas`, `StaHamil`, `JenisCacat`, `PenyakitKronis`, `PartisipasiSekolah`, `PendidikanTertinggi`, `KelasTertinggi`, `IjazahTertinggi`, `StaBekerja`, `JumlahJamkerja`, `LapanganUsaha`, `StatusPekerjaan`) VALUES
(1, 0000022222, 1, 4, 'Jarwo', 0, 2222, 0, 22, 1, 1, 0, NULL, 0, 0, 0, 2, 9, 7, 5, 0, NULL, 14, 2),
(2, 0000022222, 1, 5, 'Jarwo', 0, 2222, 0, 22, 1, 1, 0, 1, 0, 0, 0, 2, 9, 7, 5, 0, NULL, 14, 2),
(3, 0000022222, 1, 6, 'Jarwo', 0, 2222, 0, 22, 1, 1, 0, 1, 0, 0, 0, 2, 9, 7, 5, 0, NULL, 14, 2),
(4, 0000022222, 1, 7, 'Jarwo', 0, 2222, 0, 22, 1, 1, 0, 1, 0, 0, 0, 2, 9, 7, 5, 0, NULL, 14, 2),
(5, 0000022222, 1, 8, 'Jarwo', 0, 2222, 0, 22, 1, 1, 0, 1, 0, 0, 0, 2, 9, 7, 5, 0, NULL, 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `IdKelurahan` int(10) UNSIGNED NOT NULL,
  `NamaKelurahan` varchar(50) DEFAULT NULL,
  `IdKecamatan` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`IdKelurahan`, `NamaKelurahan`, `IdKecamatan`) VALUES
(1, 'Arjosari', NULL),
(2, 'Arjowinangun', NULL),
(3, 'Bakalankrajan', NULL),
(4, 'Balearjosari', NULL),
(5, 'Bandulan', NULL),
(6, 'Bandungrejosari', NULL),
(7, 'Bareng', NULL),
(8, 'Blimbing', NULL),
(9, 'Bumiayu', NULL),
(10, 'Bunulrejo', NULL),
(11, 'Buring', NULL),
(12, 'Cemorokandang', NULL),
(13, 'Ciptomulyo', NULL),
(14, 'Dinoyo', NULL),
(15, 'Gadang', NULL),
(16, 'Gadingasri', NULL),
(17, 'Jatimulyo', NULL),
(18, 'Jodipan', NULL),
(19, 'Karangbesuki', NULL),
(20, 'Kasin', NULL),
(21, 'Kauman', NULL),
(22, 'Kebonsari', NULL),
(23, 'Kedungkandang', NULL),
(24, 'Kesatrian', NULL),
(25, 'Ketawanggede', NULL),
(26, 'Kiduldalem', NULL),
(27, 'Klojen', NULL),
(28, 'Kotalama', NULL),
(29, 'Lesanpuro', NULL),
(30, 'Lowokwaru', NULL),
(31, 'Madyopuro', NULL),
(32, 'Mergosono', NULL),
(33, 'Merjosari', NULL),
(34, 'Mojolangu', NULL),
(35, 'Mulyorejo', NULL),
(36, 'Oro-Oro Dowo', NULL),
(37, 'Pandanwangi', NULL),
(38, 'Penanggungan', NULL),
(39, 'Pisangcandi', NULL),
(40, 'Polehan', NULL),
(41, 'Polowijen', NULL),
(42, 'Purwantoro', NULL),
(43, 'Purwodadi', NULL),
(44, 'Rampal Celaket', NULL),
(45, 'Samaan', NULL),
(46, 'Sawojajar', NULL),
(47, 'Sukoharjo', NULL),
(48, 'Sukun', NULL),
(49, 'Sumbersari', NULL),
(50, 'Tanjungrejo', NULL),
(51, 'Tasikmadu', NULL),
(52, 'Tlogomas', NULL),
(53, 'Tlogowaru', NULL),
(54, 'Tulusrejo', NULL),
(55, 'Tunggulwulung', NULL),
(56, 'Tunjungsekar', NULL),
(57, 'Wonokoyo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `optionaset`
--

CREATE TABLE `optionaset` (
  `IdOptionAset` int(10) UNSIGNED NOT NULL,
  `IdAset` int(10) UNSIGNED DEFAULT NULL,
  `Label` varchar(100) DEFAULT NULL,
  `IdKolom` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `optionekonomi`
--

CREATE TABLE `optionekonomi` (
  `IdOptionEkonomi` int(10) UNSIGNED NOT NULL,
  `Label` varchar(100) DEFAULT NULL,
  `IdKolom` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `optionperumahan`
--

CREATE TABLE `optionperumahan` (
  `IdOptionPerumahan` int(10) UNSIGNED NOT NULL,
  `Label` varchar(100) DEFAULT NULL,
  `IdKolom` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengenalantempat`
--

CREATE TABLE `pengenalantempat` (
  `IdPengenalanTempat` int(10) UNSIGNED NOT NULL,
  `IdKecamatan` int(10) UNSIGNED NOT NULL,
  `NamaSLS` varchar(200) DEFAULT NULL,
  `Alamat` varchar(200) DEFAULT NULL,
  `NamaKRT` varchar(200) DEFAULT NULL,
  `JumlahART` int(10) UNSIGNED DEFAULT NULL,
  `JumlahKeluarga` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengenalantempat`
--

INSERT INTO `pengenalantempat` (`IdPengenalanTempat`, `IdKecamatan`, `NamaSLS`, `Alamat`, `NamaKRT`, `JumlahART`, `JumlahKeluarga`) VALUES
(1, 2, '1/1', 'Jln. papa biru 12 tulusrejo Malang, -', 'Jarwo', 2, 2),
(2, 2, '1/1', 'Jln. papa biru 12 tulusrejo Malang, -', 'Jarwo', 2, 2),
(3, 2, '1/1', 'Jln. papa biru 12 tulusrejo Malang, -', 'Jarwo', 2, 2),
(4, 2, '1/1', 'Jln. papa biru 12 tulusrejo Malang, -', 'Jarwo', 2, 2),
(5, 2, '1/1', 'Jln. papa biru 12 tulusrejo Malang, -', 'Jarwo', 2, 2),
(6, 2, '1/1', 'Jln. papa biru 12 tulusrejo Malang, -', 'Jarwo', 2, 2),
(7, 2, '1/1', 'Jln. papa biru 12 tulusrejo Malang, -', 'Jarwo', 2, 2),
(8, 2, '1/1', 'Jln. papa biru 12 tulusrejo Malang, -', 'Jarwo', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `IdPengguna` int(10) UNSIGNED NOT NULL,
  `KataSandi` varchar(100) NOT NULL,
  `NamaPengguna` varchar(30) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perumahan`
--

CREATE TABLE `perumahan` (
  `IdPerumahan` int(10) UNSIGNED NOT NULL,
  `StaBangunan` int(10) UNSIGNED DEFAULT NULL,
  `StaLahan` int(10) UNSIGNED DEFAULT NULL,
  `LuasLantai` int(10) UNSIGNED DEFAULT NULL,
  `Lantai` int(10) UNSIGNED DEFAULT NULL,
  `Dinding` int(10) UNSIGNED DEFAULT NULL,
  `KondisiDinding` int(10) UNSIGNED DEFAULT NULL,
  `Atap` int(10) UNSIGNED DEFAULT NULL,
  `KondisiAtap` int(10) UNSIGNED DEFAULT NULL,
  `JumlahKamar` int(10) UNSIGNED DEFAULT NULL,
  `SumberAirminum` int(10) UNSIGNED DEFAULT NULL,
  `MemperolehAirminum` int(10) UNSIGNED DEFAULT NULL,
  `SumberPenerangan` int(10) UNSIGNED DEFAULT NULL,
  `Daya` int(10) UNSIGNED DEFAULT NULL,
  `BahanMasak` int(10) UNSIGNED DEFAULT NULL,
  `FasilitasBAB` int(10) UNSIGNED DEFAULT NULL,
  `Kloset` int(10) UNSIGNED DEFAULT NULL,
  `BuangTinja` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perumahan`
--

INSERT INTO `perumahan` (`IdPerumahan`, `StaBangunan`, `StaLahan`, `LuasLantai`, `Lantai`, `Dinding`, `KondisiDinding`, `Atap`, `KondisiAtap`, `JumlahKamar`, `SumberAirminum`, `MemperolehAirminum`, `SumberPenerangan`, `Daya`, `BahanMasak`, `FasilitasBAB`, `Kloset`, `BuangTinja`) VALUES
(1, 0, 2222, 2222222, 0, 0, 0, 0, 0, 222, 7, 0, 1, 2, 0, 0, 0, 0),
(2, 0, 2222, 2222222, 0, 0, 0, 0, 0, 222, 7, 0, 1, 2, 0, 0, 0, 0),
(3, 0, 2222, 2222222, 0, 0, 0, 0, 0, 222, 7, 0, 1, 2, 0, 0, 0, 0),
(4, 0, 2222, 2222222, 0, 0, 0, 0, 0, 222, 7, 0, 1, 2, 0, 0, 0, 0),
(5, 0, 2222, 2222222, 0, 0, 0, 0, 0, 222, 7, 0, 1, 2, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `IdPetugas` int(10) UNSIGNED NOT NULL,
  `TglPencacahan` date DEFAULT NULL,
  `NamaPencacahan` varchar(200) DEFAULT NULL,
  `TglPemeriksa` date DEFAULT NULL,
  `NamaPemeriksa` varchar(200) DEFAULT NULL,
  `HasilPencacahan` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `IdProgram` int(10) UNSIGNED NOT NULL,
  `StaKKS` int(10) UNSIGNED DEFAULT NULL,
  `StaKIP` int(10) UNSIGNED DEFAULT NULL,
  `StaKIS` int(10) UNSIGNED DEFAULT NULL,
  `StaBPJSMandiri` int(10) UNSIGNED DEFAULT NULL,
  `StaJamsostek` int(10) UNSIGNED DEFAULT NULL,
  `StaAsuransi` int(10) UNSIGNED DEFAULT NULL,
  `StaPkh` int(10) UNSIGNED DEFAULT NULL,
  `Raskin` int(10) UNSIGNED DEFAULT NULL,
  `StaKur` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`IdProgram`, `StaKKS`, `StaKIP`, `StaKIS`, `StaBPJSMandiri`, `StaJamsostek`, `StaAsuransi`, `StaPkh`, `Raskin`, `StaKur`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id_Survey` int(10) UNSIGNED NOT NULL,
  `IdAset` int(10) UNSIGNED NOT NULL,
  `IdPengenalanTempat` int(10) UNSIGNED NOT NULL,
  `IdPerumahan` int(10) UNSIGNED NOT NULL,
  `IdPetugas` int(10) UNSIGNED NOT NULL,
  `IdPengguna` int(10) UNSIGNED NOT NULL,
  `IdEkonomi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id_Survey`, `IdAset`, `IdPengenalanTempat`, `IdPerumahan`, `IdPetugas`, `IdPengguna`, `IdEkonomi`) VALUES
(1, 1, 8, 5, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tanggunganpendidikan`
--

CREATE TABLE `tanggunganpendidikan` (
  `IdTanggunganPendidikan` int(10) UNSIGNED NOT NULL,
  `IdEkonomi` int(10) UNSIGNED NOT NULL,
  `IdPengenalanTempat` int(10) UNSIGNED DEFAULT NULL,
  `NamaSekolah` varchar(200) DEFAULT NULL,
  `NISNNoKTM` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ternak`
--

CREATE TABLE `ternak` (
  `IdTernak` int(10) UNSIGNED NOT NULL,
  `JumlahSapi` int(10) UNSIGNED DEFAULT NULL,
  `JumlahKerbau` int(10) UNSIGNED DEFAULT NULL,
  `JumlahKuda` int(10) UNSIGNED DEFAULT NULL,
  `JumlahBabi` int(10) UNSIGNED DEFAULT NULL,
  `JumlahKambing` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ternak`
--

INSERT INTO `ternak` (`IdTernak`, `JumlahSapi`, `JumlahKerbau`, `JumlahKuda`, `JumlahBabi`, `JumlahKambing`) VALUES
(1, 22, 22, 22, 22, 22),
(2, 22, 22, 22, 22, 22),
(3, 22, 22, 22, 22, 22),
(4, 22, 22, 22, 22, 22),
(5, 22, 22, 22, 22, 22);

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `IdUsaha` int(10) UNSIGNED NOT NULL,
  `IdAset` int(10) UNSIGNED NOT NULL,
  `IdJenisUsaha` int(10) UNSIGNED DEFAULT NULL,
  `StaAtUsaha` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aset`
--
ALTER TABLE `aset`
  ADD PRIMARY KEY (`IdAset`);

--
-- Indexes for table `asetbergerak`
--
ALTER TABLE `asetbergerak`
  ADD PRIMARY KEY (`IdAsetBergerak`);

--
-- Indexes for table `asettidakbergerak`
--
ALTER TABLE `asettidakbergerak`
  ADD PRIMARY KEY (`IdAsetTidakBergerak`);

--
-- Indexes for table `ekonomi`
--
ALTER TABLE `ekonomi`
  ADD PRIMARY KEY (`IdEkonomi`);

--
-- Indexes for table `jenisusaha`
--
ALTER TABLE `jenisusaha`
  ADD PRIMARY KEY (`IdJenisUsaha`,`IdUsaha`),
  ADD KEY `JenisUsaha_FKIndex1` (`IdUsaha`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`IdKecamatan`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`IdEkonomi`,`NIK`),
  ADD KEY `Ekonomi_FKIndex2` (`IdTanggunganPendidikan`),
  ADD KEY `Keluarga_FKIndex2` (`IdEkonomi`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`IdKelurahan`),
  ADD KEY `Kelurahan_FKIndex1` (`IdKecamatan`);

--
-- Indexes for table `optionaset`
--
ALTER TABLE `optionaset`
  ADD PRIMARY KEY (`IdOptionAset`);

--
-- Indexes for table `optionekonomi`
--
ALTER TABLE `optionekonomi`
  ADD PRIMARY KEY (`IdOptionEkonomi`);

--
-- Indexes for table `optionperumahan`
--
ALTER TABLE `optionperumahan`
  ADD PRIMARY KEY (`IdOptionPerumahan`);

--
-- Indexes for table `pengenalantempat`
--
ALTER TABLE `pengenalantempat`
  ADD PRIMARY KEY (`IdPengenalanTempat`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`IdPengguna`);

--
-- Indexes for table `perumahan`
--
ALTER TABLE `perumahan`
  ADD PRIMARY KEY (`IdPerumahan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`IdPetugas`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`IdProgram`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id_Survey`),
  ADD KEY `Survey_FKIndex5` (`IdEkonomi`),
  ADD KEY `Survey_FKIndex2` (`IdAset`);

--
-- Indexes for table `tanggunganpendidikan`
--
ALTER TABLE `tanggunganpendidikan`
  ADD PRIMARY KEY (`IdTanggunganPendidikan`);

--
-- Indexes for table `ternak`
--
ALTER TABLE `ternak`
  ADD PRIMARY KEY (`IdTernak`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`IdUsaha`),
  ADD KEY `Usaha_FKIndex1` (`IdAset`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aset`
--
ALTER TABLE `aset`
  MODIFY `IdAset` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asetbergerak`
--
ALTER TABLE `asetbergerak`
  MODIFY `IdAsetBergerak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `asettidakbergerak`
--
ALTER TABLE `asettidakbergerak`
  MODIFY `IdAsetTidakBergerak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ekonomi`
--
ALTER TABLE `ekonomi`
  MODIFY `IdEkonomi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenisusaha`
--
ALTER TABLE `jenisusaha`
  MODIFY `IdJenisUsaha` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `IdKecamatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `IdEkonomi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `IdKelurahan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `optionaset`
--
ALTER TABLE `optionaset`
  MODIFY `IdOptionAset` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `optionekonomi`
--
ALTER TABLE `optionekonomi`
  MODIFY `IdOptionEkonomi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `optionperumahan`
--
ALTER TABLE `optionperumahan`
  MODIFY `IdOptionPerumahan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengenalantempat`
--
ALTER TABLE `pengenalantempat`
  MODIFY `IdPengenalanTempat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `IdPengguna` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perumahan`
--
ALTER TABLE `perumahan`
  MODIFY `IdPerumahan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `IdPetugas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `IdProgram` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id_Survey` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tanggunganpendidikan`
--
ALTER TABLE `tanggunganpendidikan`
  MODIFY `IdTanggunganPendidikan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ternak`
--
ALTER TABLE `ternak`
  MODIFY `IdTernak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `IdUsaha` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
