-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2020 at 09:06 AM
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

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`IdAset`, `IdTernak`, `IdAsetTidakBergerak`, `IdProgram`, `IdAsetBergerak`) VALUES
(28, 37, 37, 24, 37),
(32, 41, 41, 28, 41),
(33, 42, 42, 29, 42),
(34, 43, 43, 30, 43),
(35, 44, 44, 31, 44),
(36, 45, 45, 32, 45),
(37, 46, 46, 33, 46),
(38, 47, 47, 34, 47),
(39, 48, 48, 35, 48),
(40, 49, 49, 36, 49),
(41, 50, 50, 37, 50),
(42, 51, 51, 38, 51),
(43, 52, 52, 39, 52),
(44, 53, 53, 40, 53),
(45, 54, 54, 41, 54),
(46, 55, 55, 42, 55),
(47, 56, 56, 43, 56),
(48, 57, 57, 44, 57),
(49, 58, 58, 45, 58),
(50, 59, 59, 46, 59),
(51, 60, 60, 47, 60),
(52, 61, 61, 48, 61),
(53, 62, 62, 49, 62),
(54, 63, 63, 50, 63),
(55, 64, 64, 51, 64),
(56, 65, 65, 52, 65),
(57, 66, 66, 53, 66),
(58, 67, 67, 54, 67),
(59, 68, 68, 55, 68),
(60, 69, 69, 56, 69);

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
(37, 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0),
(41, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(42, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(43, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(44, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 1, 1, 1, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0),
(47, 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0),
(48, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0),
(49, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(50, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(51, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(52, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(53, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(54, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0),
(55, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(57, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(58, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(59, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(60, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(61, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(62, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0),
(63, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(64, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(65, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(66, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0),
(67, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(68, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(69, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `asettidakbergerak`
--

CREATE TABLE `asettidakbergerak` (
  `IdAsetTidakBergerak` int(10) UNSIGNED NOT NULL,
  `LuasAtb` varchar(255) DEFAULT NULL,
  `RumahLain` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asettidakbergerak`
--

INSERT INTO `asettidakbergerak` (`IdAsetTidakBergerak`, `LuasAtb`, `RumahLain`) VALUES
(37, '88', NULL),
(41, '1', NULL),
(42, '24', NULL),
(43, '1', NULL),
(44, '30', NULL),
(45, '1', NULL),
(46, '98', NULL),
(47, '88', NULL),
(48, '24', NULL),
(49, '30', NULL),
(50, '1', NULL),
(51, '87', NULL),
(52, '3', NULL),
(53, '72', NULL),
(54, '4', NULL),
(55, '3', NULL),
(56, '2', NULL),
(57, '1', NULL),
(58, '4', NULL),
(59, '1', NULL),
(60, '115', NULL),
(61, '40', NULL),
(62, '68', NULL),
(63, '1', NULL),
(64, '115', NULL),
(65, '40', NULL),
(66, '68', NULL),
(67, '1', NULL),
(68, '4', NULL),
(69, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id` int(11) NOT NULL,
  `id_subkriteria` int(11) NOT NULL,
  `bobot` double(10,9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id`, `id_subkriteria`, `bobot`) VALUES
(1, 1, 0.045040340),
(2, 2, 0.038748627),
(3, 3, 0.038748627),
(4, 4, 0.026836224),
(5, 5, 0.130257860),
(6, 6, 0.026836224),
(7, 7, 0.045040340),
(8, 8, 0.077497254),
(9, 9, 0.130257860),
(10, 10, 0.154873848),
(11, 11, 0.092142600),
(12, 12, 0.053552014),
(13, 13, 0.031907704),
(14, 14, 0.005317951),
(15, 15, 0.005317951),
(16, 16, 0.005317951),
(17, 17, 0.005317951),
(18, 18, 0.005317951),
(19, 19, 0.005317951),
(20, 20, 0.026776007),
(21, 21, 0.092142600),
(22, 22, 0.154873848),
(23, 23, 0.026776007),
(24, 24, 0.007976926),
(25, 25, 0.007976926),
(26, 26, 0.013388003),
(27, 27, 0.013388003),
(28, 28, 0.046071300),
(29, 29, 0.038718462),
(30, 30, 0.038718462),
(31, 31, 0.015953852),
(32, 32, 0.150284231),
(33, 33, 0.003190770),
(34, 34, 0.003190770),
(35, 35, 0.003190770),
(36, 36, 0.003190770),
(37, 37, 0.003190770),
(38, 38, 0.026776007),
(39, 39, 0.023035650),
(40, 40, 0.023035650),
(41, 41, 0.038718462),
(42, 42, 0.038718462),
(43, 43, 0.015953852),
(44, 44, 0.150284231),
(45, 45, 0.154873848),
(46, 46, 0.092142600),
(47, 47, 0.053552014),
(48, 48, 0.031907704),
(49, 49, 0.023385475),
(50, 50, 0.023385475),
(51, 51, 0.023385475),
(52, 52, 0.023385475),
(53, 53, 0.023385475),
(54, 54, 0.023385475),
(55, 55, 0.117746414),
(56, 56, 0.117746414),
(57, 57, 0.202596691),
(58, 58, 0.202596691),
(59, 59, 0.340525760),
(60, 60, 0.340525760),
(61, 61, 0.070156424),
(62, 62, 0.070156424),
(63, 63, 1.321737731),
(64, 64, 0.217260270),
(65, 65, 0.021442444),
(66, 66, 0.208154984),
(67, 67, 0.123842351),
(68, 68, 0.071975474),
(69, 69, 0.014294963),
(70, 70, 0.014294963),
(71, 71, 0.014294963),
(72, 72, 0.208154984),
(73, 73, 0.042884888),
(74, 74, 0.042884888),
(75, 75, 0.071975474),
(76, 76, 0.071975474),
(77, 77, 0.061921176),
(78, 78, 0.061921176),
(79, 79, 0.061921176),
(80, 80, 0.061921176),
(81, 81, 0.416309967),
(82, 82, 0.070156424),
(83, 83, 0.117746414),
(84, 84, 0.202596691),
(85, 85, 0.340525760),
(86, 86, 0.070156424),
(87, 87, 0.117746414),
(88, 88, 0.202596691),
(89, 89, 0.340525760),
(90, 90, 0.070156424),
(91, 91, 0.070156424),
(92, 92, 0.640686211),
(93, 93, 0.227017173),
(94, 94, 0.227017173),
(95, 95, 0.227017173),
(96, 96, 3.430064837),
(97, 97, 0.857516209),
(98, 98, 1.540731540),
(99, 99, 0.545193455),
(100, 100, 0.454519345),
(101, 101, 0.454519345),
(102, 102, 0.454519345),
(103, 103, 0.977568147),
(104, 104, 0.454519345),
(105, 105, 2.190803379),
(106, 106, 2.190803379),
(107, 107, 2.190803379),
(108, 108, 0.977568147),
(109, 109, 0.977568147),
(110, 110, 0.977568147),
(111, 111, 0.746824819),
(112, 112, 2.156669754),
(113, 113, 1.253426843),
(114, 114, 0.517849106),
(115, 115, 0.517849106),
(116, 116, 0.517849106),
(117, 117, 0.517849106),
(118, 118, 0.517849106),
(119, 119, 0.517849106),
(120, 120, 0.517849106),
(121, 121, 0.919148794),
(122, 122, 0.546849977),
(123, 123, 0.189366561),
(124, 124, 0.317821697),
(125, 125, 0.568110861),
(126, 126, 0.568110861),
(127, 127, 0.568110861),
(128, 128, 0.337999041),
(129, 129, 0.337999041),
(130, 130, 0.337999041),
(131, 131, 0.196440401),
(132, 132, 0.196440401),
(133, 133, 0.196440401),
(134, 134, 0.351133138),
(135, 135, 1.704332582),
(136, 136, 1.013997124),
(137, 137, 0.589321203),
(138, 138, 0.351133138),
(139, 139, 3.174226404),
(140, 140, 0.944257147),
(141, 141, 0.944257147),
(142, 142, 1.097578573),
(143, 143, 0.217988768),
(144, 144, 0.217988768),
(145, 145, 0.217988768),
(146, 146, 4.486445841),
(147, 147, 9.999999999),
(148, 148, 0.498200715),
(149, 149, 0.091335737),
(150, 150, 0.498200715),
(151, 151, 0.498200715),
(152, 152, 0.498200715),
(153, 153, 0.091335737),
(154, 154, 0.091335737),
(155, 155, 0.091335737),
(156, 156, 0.091335737),
(157, 157, 0.091335737),
(158, 158, 1.714427004),
(159, 159, 1.714427004),
(160, 160, 0.091335737),
(161, 161, 0.091335737),
(162, 162, 0.091335737),
(163, 163, 0.091335737),
(164, 164, 0.091335737),
(165, 165, 0.091335737),
(166, 166, 0.091335737),
(167, 167, 2.881619419),
(168, 168, 2.881619419),
(169, 169, 1.587688369),
(170, 170, 1.889198689),
(171, 171, 0.218067766),
(172, 172, 0.218067766),
(173, 173, 0.218067766),
(174, 174, 0.548988167),
(175, 175, 0.548988167),
(176, 176, 1.587688369),
(177, 177, 0.011838553),
(178, 178, 0.011838553),
(179, 179, 0.011838553),
(180, 180, 0.011838553),
(181, 181, 0.011838553),
(182, 182, 0.724869502),
(183, 183, 0.011838553),
(184, 184, 0.011838553),
(185, 185, 0.724869502),
(186, 186, 0.011838553),
(187, 187, 0.011838553),
(188, 188, 0.011838553),
(189, 189, 0.011838553),
(190, 190, 0.011838553),
(191, 191, 0.011838553),
(192, 192, 0.479893135),
(193, 193, 0.479893135),
(194, 194, 0.088491705),
(195, 195, 0.026362848),
(196, 196, 0.026362848),
(197, 197, 0.255920363),
(198, 198, 0.152260489),
(199, 199, 0.137349563),
(200, 200, 0.412048689),
(201, 201, 0.399892862),
(202, 202, 0.207411404),
(203, 203, 0.207411404),
(204, 204, 0.082387462),
(205, 205, 0.082387462),
(206, 206, 0.082387462),
(207, 207, 0.399892862),
(208, 208, 0.713751910),
(209, 209, 0.399892862),
(210, 210, 0.000000000);

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
-- Table structure for table `indikator`
--

CREATE TABLE `indikator` (
  `id` int(11) NOT NULL,
  `label` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`id`, `label`) VALUES
(1, 'Perumahan'),
(2, 'Kesehatan'),
(3, 'Pendidikan'),
(4, 'Ekonomi'),
(5, 'Asset');

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
-- Table structure for table `kartuidentitas`
--

CREATE TABLE `kartuidentitas` (
  `idKartuIdentitas` int(11) NOT NULL,
  `adaAktaKelahiran` int(11) NOT NULL,
  `adaKartuPelajar` int(11) NOT NULL,
  `adaKTP` int(11) NOT NULL,
  `adaSIM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kartuidentitas`
--

INSERT INTO `kartuidentitas` (`idKartuIdentitas`, `adaAktaKelahiran`, `adaKartuPelajar`, `adaKTP`, `adaSIM`) VALUES
(27, 0, 0, 1, 0),
(28, 0, 0, 1, 0),
(29, 1, 0, 0, 0),
(30, 1, 0, 0, 0),
(31, 0, 0, 1, 0),
(32, 0, 0, 1, 0),
(33, 0, 0, 1, 0),
(34, 1, 0, 0, 0),
(35, 0, 0, 1, 0),
(36, 0, 0, 1, 0),
(37, 1, 0, 0, 0),
(38, 0, 0, 1, 0),
(39, 1, 0, 0, 0),
(40, 0, 0, 1, 0),
(41, 0, 0, 1, 0),
(42, 0, 0, 1, 0),
(43, 0, 0, 1, 0),
(44, 0, 0, 1, 0),
(45, 0, 0, 1, 0),
(46, 0, 0, 1, 0),
(47, 1, 0, 0, 0),
(48, 0, 0, 1, 0),
(49, 1, 0, 0, 0),
(50, 1, 0, 0, 0),
(51, 1, 0, 0, 0),
(52, 1, 0, 0, 0),
(53, 1, 0, 0, 0),
(54, 1, 0, 0, 0),
(55, 0, 0, 1, 0),
(56, 0, 0, 1, 0),
(57, 0, 0, 1, 0),
(58, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `IdKecamatan` int(10) UNSIGNED NOT NULL,
  `NamaKecamatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `IdKelurahan` int(10) UNSIGNED NOT NULL,
  `NamaKelurahan` varchar(50) DEFAULT NULL,
  `IdKecamatan` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `label` varchar(600) NOT NULL,
  `id_indikator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `label`, `id_indikator`) VALUES
(1, 'Status penguasaan bangunan tempat tinggal yang ditempati ', 1),
(2, 'Status lahan tempat tinggal yang ditempati  ', 1),
(3, 'Luas Lantai  ', 1),
(4, 'Jenis Lantai ', 1),
(5, 'Jenis Dinding ', 1),
(6, 'Kondisi Dinding  ', 1),
(7, 'Jenis atap terluas ', 1),
(8, 'Kondisi atap ', 1),
(9, 'Jumlah kamar tidur ', 1),
(10, 'Sumber air minum', 1),
(11, 'Cara memperoleh air minum ', 1),
(12, 'Sumber penerangan utama', 1),
(13, 'Jika PLN daya yang terpasang', 1),
(14, 'Bahan bakar/energi utama untuk memasak ', 1),
(15, 'Penggunaan fasilitas buang air besar', 1),
(16, 'Jenis kloset ', 1),
(17, 'Tempat pembuangan akhir tinja ', 1),
(18, 'Status kehamilan', 2),
(19, 'Jenis cacat', 2),
(20, 'Penyakit kronis/menahun ', 2),
(21, 'Partisipasi sekolah ', 3),
(22, 'Jenjang pendidikan tinggi yang pernah/sedang diduduki', 3),
(23, 'Kelas tertinggi yang pernah/sedang diikuti ', 3),
(24, 'Ijazah tertinggi yang dimiliki', 3),
(25, 'Bekerja/membantu bekerja selama seminggu yang lalu', 4),
(26, 'Lapangan usaha dari pekerjaan utama', 4),
(27, 'Status kedudukan dalam pekerjaan utama ', 4),
(28, 'Rumah tangga memiliki sendiri asset bergerak ', 5),
(29, 'Rumah tangga memiliki asset tidak bergerak', 5),
(30, 'Jumlah ternak yang dimiliki ', 5),
(31, 'Memiliki usaha ', 5),
(32, 'Rumah tangga menjadi peserta program/memiliki kartu program ', 5);

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
  `IdKelurahan` int(11) NOT NULL,
  `NamaSLS` varchar(200) DEFAULT NULL,
  `Alamat` varchar(200) DEFAULT NULL,
  `NamaKRT` varchar(200) DEFAULT NULL,
  `JumlahART` int(10) UNSIGNED DEFAULT NULL,
  `JumlahKeluarga` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengenalantempat`
--

INSERT INTO `pengenalantempat` (`IdPengenalanTempat`, `IdKecamatan`, `IdKelurahan`, `NamaSLS`, `Alamat`, `NamaKRT`, `JumlahART`, `JumlahKeluarga`) VALUES
(40, 1, 32, '9/1', 'JL. KOL SUGIONO 9A ', 'Muhammad Fajar', NULL, NULL),
(44, 3, 55, '1/8', 'JL SIMPANG AKORDION NO 139', 'Adi Sutrisno', NULL, NULL),
(45, 3, 56, '5/3', 'JL HIU RAYA', 'Andik Wahyudi', NULL, NULL),
(46, 4, 50, '12/9', 'JL. PUTER SELATAN', 'Yunata Krishar D', NULL, NULL),
(47, 2, 45, '8/3', 'JL. TAPAK SIRING 74', 'Saminten', NULL, NULL),
(48, 5, 18, '8/3', 'JL MUHARTO 8', 'Sukiman', NULL, NULL),
(49, 1, 23, '6/8', 'JL MAYJEN SUNGKONO', 'Mochamaad Sholeh', NULL, NULL),
(50, 4, 39, '7/1', 'JL GUNUNG AGUNG 15B', 'Sungkono', NULL, NULL),
(51, 4, 39, '4/6', 'JL PISANG CANDI BARAT XI/55F', 'Suparto', NULL, NULL),
(52, 4, 39, '4/7', 'JL PISANG CANDI BARAT 66 C ', 'Asnan', NULL, NULL),
(53, 4, 50, '11/10', 'JL TRS MERGAN RAYA XIX 20', 'Joko Prasetyo', NULL, NULL),
(54, 1, 31, '3/6', 'JL KI AGENG GRIBIG II', 'Juari', NULL, NULL),
(55, 2, 27, '6/5', 'JL SUPRAPTO DALAM NO.17', 'Asroi Lailam', NULL, NULL),
(56, 4, 50, '12/3', 'JL. KAKAKTUA SELATAN NO 10', 'Budi Hariyanto', NULL, NULL),
(57, 2, 7, '7/3', 'JL RAIS 2/34', 'Budi Djaya Warno', NULL, NULL),
(58, 2, 7, '3/6', 'JL BARENG TENGAH 5D/1505 ', 'Dwi Setyo Mulyono', NULL, NULL),
(59, 3, 55, '1/4', 'Jalan Organ No.39', 'Witanto', NULL, NULL),
(60, 3, 34, '4/7', 'Jl Sudimoro 36', 'Sukirno', NULL, NULL),
(61, 5, 42, '16/9', 'JL SANAN 12 132', 'Solichudin', NULL, NULL),
(62, 3, 51, '4/1', 'JL RENANG NO 23', 'Ngari', NULL, NULL),
(63, 1, 29, '2/5', 'JL LESAN PURO GANG 6', 'Muhammad Solikin', NULL, NULL),
(64, 4, 50, '11/9', 'TJG PUTRA YUDHA 6 NO 65A', 'Sentot Kurniadi', NULL, NULL),
(65, 3, 51, '2/4', 'Jl. Renang', 'Dian Krisna Kuncoro', NULL, NULL),
(66, 4, 50, '6/10', 'JL MERGAN MUSOLLA 725', 'Rudi Hartono', NULL, NULL),
(67, 5, 18, '9/13', 'JL ZAENAL ZAKSE II / 25', 'Resiono', NULL, NULL),
(68, 5, 18, '4/1', 'Jl Ir H Juanda IX- B/30', 'Roni Purnomo', NULL, NULL),
(69, 5, 18, '2/7', 'JL JUANDA I A ', 'Winarko', NULL, NULL),
(70, 3, 17, '2/2', 'JL B SRI GADING 34', 'Mistartianto', NULL, NULL),
(71, 4, 15, '1/5', 'GADANG 3B NO 31', 'Imam Nurhadi', NULL, NULL),
(72, 1, 9, '5/1', 'Jl.gobes', 'Yasin', NULL, NULL);

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
-- Table structure for table `perorangan`
--

CREATE TABLE `perorangan` (
  `IdEkonomi` int(10) UNSIGNED NOT NULL,
  `NIK` int(10) UNSIGNED ZEROFILL NOT NULL,
  `IdTanggunganPendidikan` int(10) UNSIGNED DEFAULT NULL,
  `IdPengenalanTempat` int(10) UNSIGNED NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `NamaSLS` varchar(200) DEFAULT NULL,
  `Alamat` varchar(500) DEFAULT NULL,
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
  `LapanganUsaha` int(10) UNSIGNED DEFAULT NULL,
  `StatusPekerjaan` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perorangan`
--

INSERT INTO `perorangan` (`IdEkonomi`, `NIK`, `IdTanggunganPendidikan`, `IdPengenalanTempat`, `Nama`, `NamaSLS`, `Alamat`, `HubKRT`, `NoKK`, `JnsKel`, `Umur`, `StaKawin`, `AktaNikah`, `AdaDiKK`, `AdaKartuIdentitas`, `StaHamil`, `JenisCacat`, `PenyakitKronis`, `PartisipasiSekolah`, `PendidikanTertinggi`, `KelasTertinggi`, `IjazahTertinggi`, `StaBekerja`, `LapanganUsaha`, `StatusPekerjaan`) VALUES
(43, 4294967295, NULL, 0, 'Nur Fitri Lestari', '7/3', 'JL KH MALIK DALAM BARAN', 1, 1, 2, 48, 2, 2, 1, 27, 2, 1, 1, 3, 1, 8, 2, 1, 13, 1),
(44, 4294967295, NULL, 0, 'Sri Winarti', '7/1', 'JL KH MALIK DALAM BARAN', 2, 1, 2, 53, 2, 2, 1, 28, 2, 1, 1, 3, 4, 8, 3, 2, 21, 1),
(45, 4294967295, NULL, 0, 'Alif Firmansyah', '6/3', 'JL KH MALIK DALAM BARAN', 5, 1, 1, 10, 1, 1, 2, 29, 2, 1, 1, 3, 3, 4, 1, 2, 21, 2),
(46, 4294967295, NULL, 0, 'Eko Winarto', '7/3', 'JL KH MALIK DALAM BARAN', 3, 2, 1, 34, 2, 2, 1, 30, 2, 1, 1, 3, 7, 8, 4, 1, 19, 4),
(47, 4294967295, NULL, 0, 'Nurul Wulandari', '7/3', 'JL KH MALIK DALAM BARAN', 4, 2, 2, 24, 2, 2, 2, 31, 1, 1, 1, 3, 7, 8, 4, 1, 12, 4),
(48, 4294967295, NULL, 0, 'Ponari', '7/3', 'JL KH MALIK DALAM BARAN', 1, 1, 1, 30, 2, 1, 1, 32, 2, 1, 1, 3, 4, 8, 3, 1, 12, 4),
(49, 4294967295, NULL, 0, 'Novi Triyanti', '7/3', 'JL KH MALIK DALAM BARAN', 3, 1, 2, 28, 1, 1, 1, 33, 1, 1, 1, 3, 1, 8, 3, 2, 1, 1),
(50, 4294967295, NULL, 0, 'Bayu Sugara', '7/3', 'JL KH MALIK DALAM BARAN', 5, 1, 1, 7, 1, 1, 1, 34, 2, 1, 1, 1, 1, 1, 1, 2, 21, 8),
(51, 4294967295, NULL, 0, 'Muslihah', '7/3', 'JL KH MALIK DALAM BARAN', 2, 1, 2, 44, 2, 2, 1, 35, 2, 1, 1, 3, 1, 8, 2, 1, 12, 1),
(52, 4294967295, NULL, 0, 'Bunari', '7/3', 'JL KH MALIK DALAM BARAN', 1, 1, 1, 43, 2, 2, 1, 36, 2, 1, 1, 3, 1, 8, 2, 1, 6, 1),
(53, 4294967295, NULL, 0, 'Kasiati', '7/3', 'JL KH MALIK DALAM BARAN', 2, 1, 2, 40, 3, 2, 1, 37, 2, 1, 1, 3, 4, 8, 3, 1, 12, 4),
(54, 4294967295, NULL, 0, 'Waginah', '7/3', 'JL KH MALIK DALAM BARAN', 3, 1, 2, 28, 1, 1, 1, 38, 2, 1, 1, 3, 1, 8, 3, 2, 21, 8),
(55, 4294967295, NULL, 0, 'Wahyu Winarto', '7/3', 'JL KH MALIK DALAM BARAN', 5, 1, 1, 7, 1, 1, 2, 39, 2, 1, 1, 2, 1, 1, 1, 2, 21, 8),
(56, 4294967295, NULL, 0, 'Cahyono Adi', '7/3', 'JL KH MALIK DALAM BARAN', 2, 1, 1, 44, 2, 3, 1, 40, 2, 1, 1, 3, 1, NULL, 2, 1, 12, 1),
(59, 4294967295, NULL, 0, 'Joko Sasongko', '7/3', 'JL KH MALIK DALAM BARAN', 1, 1, 1, 45, 2, 2, 1, 43, 2, 1, 1, 3, 1, 8, 2, 1, 6, 1),
(60, 4294967295, NULL, 0, 'Sumirah', '7/3', 'JL KH MALIK DALAM BARAN', 2, 1, 2, 57, 2, 2, 1, 44, 2, 1, 1, 3, 1, 8, 2, 2, 21, 8),
(61, 4294967295, NULL, 0, 'Tutik Indrayani', '7/3', 'JL KH MALIK DALAM BARAN', 3, 1, 2, 31, 2, 2, 1, 45, 2, 1, 1, 3, 7, 8, 4, 1, 18, 4),
(62, 4294967295, NULL, 0, 'Ahmad Fauzi', '7/3', 'JL KH MALIK DALAM BARAN', 3, 1, 1, 23, 1, 1, 1, 46, 2, 1, 1, 3, 7, 8, 4, 2, 21, 8),
(63, 4294967295, NULL, 0, 'Ahmad Khoirudin Akbar', '7/3', 'JL KH MALIK DALAM BARAN', 3, 1, 1, 20, 1, 1, 2, 47, 2, 1, 1, 3, 7, 1, 3, 2, 21, 8),
(64, 4294967295, NULL, 0, 'Sistiani', '7/3', 'JL KH MALIK DALAM BARAN', 1, 1, 2, 63, 4, 1, 1, 48, 2, 1, 1, 3, 4, 1, 2, 1, 12, 2),
(65, 4294967295, NULL, 0, 'Supriadi', '7/3', 'JL KH MALIK DALAM BARAN', 1, 1, 1, 39, 2, 2, 1, 49, 2, 1, 1, 3, 7, 8, 4, 1, 21, 4),
(66, 4294967295, NULL, 0, 'Widyawati', '7/3', 'JL KH MALIK DALAM BARAN', 2, 1, 2, 34, 2, 2, 1, 50, 2, 1, 1, 3, 1, 8, 3, 2, 21, 8),
(67, 4294967295, NULL, 0, 'Deva Saputra', '7/3', 'JL KH MALIK DALAM BARAN', 3, 1, 1, 15, 1, 1, 1, 51, 2, 1, 1, 2, 4, 3, 2, 2, 21, 8),
(68, 4294967295, NULL, 0, 'Devi Nabila', '7/3', 'JL KH MALIK DALAM BARAN', 3, 1, 2, 12, 1, 1, 1, 52, 2, 1, 1, 2, 1, 6, 1, 2, 21, 8),
(69, 4294967295, NULL, 0, 'Natasha Maharani', '7/3', 'JL KH MALIK DALAM BARAN', 3, 1, 2, 4, 1, 1, 1, 53, 2, 1, 1, 1, 1, 1, 1, 2, 21, 8),
(70, 4294967295, NULL, 0, 'Riskyaatul Hasanah', '7/3', 'JL KH MALIK DALAM BARAN', 3, 1, 2, 17, 1, 1, 1, 54, 2, 1, 1, 2, 4, 2, 2, 2, 21, 1),
(71, 4294967295, NULL, 0, 'Sarni', '7/3', 'JL KH MALIK DALAM BARAN', 1, 1, 2, 70, 4, 1, 1, 55, 2, 1, 1, 3, 4, 8, 3, 2, 21, 1),
(72, 4294967295, NULL, 0, 'Ngadi', '7/3', 'JL KH MALIK DALAM BARAN', 1, 1, 1, 50, 2, 2, 1, 56, 2, 1, 1, 3, 1, 4, 1, 1, 21, 4),
(73, 4294967295, NULL, 0, 'Lilis Sumiarti', '7/3', 'JL KH MALIK DALAM BARAN', 2, 1, 2, 40, 2, 2, 1, 57, 2, 1, 1, 3, 1, 3, 1, 2, 21, 1),
(74, 4294967295, NULL, 0, 'Tika Sumardika', '7/3', 'JL KH MALIK DALAM BARAN', 3, 1, 1, 23, 1, 1, 1, 58, 2, 1, 1, 3, 7, 8, 3, 2, 21, 1);

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
(37, 1, 1, 40, 2, 1, 2, 4, 2, 3, 3, 2, 1, 1, 3, 1, 1, 2),
(41, 1, 1, 37, 9, 1, 2, 4, 2, 2, 12, 3, 1, 6, 3, 1, 1, 2),
(42, 1, 1, 24, 6, 1, 1, 1, 1, 2, 5, 1, 1, 2, 3, 1, 1, 2),
(43, 3, 1, 72, 4, 1, 2, 4, 2, 2, 3, 2, 1, 6, 3, 1, 1, 1),
(44, 1, 1, 30, 4, 1, 2, 4, 2, 2, 6, 3, 1, 1, 3, 1, 1, 4),
(45, 3, 1, 30, 6, 1, 2, 4, 2, 1, 3, 2, 1, 1, 3, 1, 1, 1),
(46, 1, 1, 90, 4, 1, 1, 5, 2, 3, 3, 2, 1, 2, 3, 1, 2, 3),
(47, 1, 88, 40, 2, 1, 2, 4, 2, 3, 3, 2, 1, 1, 3, 1, 1, 2),
(48, 1, 24, 24, 6, 1, 2, 5, 2, 2, 3, 2, 1, 2, 3, 3, 1, 4),
(49, 3, 30, 30, 2, 1, 2, 4, 2, 2, 3, 2, 1, 2, 3, 1, 1, 2),
(50, 2, 1, 50, 9, 4, 2, 4, 2, 2, 6, 3, 1, 6, 3, 3, 1, 4),
(51, 1, 87, 80, 6, 1, 2, 4, 2, 3, 5, 3, 1, 2, 3, 1, 1, 1),
(52, 2, 3, 20, 2, 1, 2, 4, 2, 2, 5, 3, 2, 6, 3, 3, 4, 4),
(53, 1, 72, 72, 2, 1, 2, 4, 2, 2, 3, 2, 1, 2, 3, 1, 1, 1),
(54, 5, 4, 17, 2, 1, 2, 4, 2, 2, 6, 3, 1, 1, 3, 1, 3, 3),
(55, 1, 3, 60, 6, 1, 2, 4, 2, 4, 6, 3, 1, 6, 3, 1, 2, 4),
(56, 3, 2, 50, 2, 1, 2, 4, 2, 2, 5, 3, 1, 1, 3, 1, 1, 4),
(57, 1, 1, 45, 2, 1, 2, 4, 2, 2, 6, 3, 1, 1, 3, 1, 1, 1),
(58, 5, 4, 40, 2, 1, 2, 4, 2, 2, 3, 3, 1, 6, 3, 4, 1, 6),
(59, 1, 1, 36, 6, 1, 2, 4, 2, 3, 6, 3, 1, 2, 3, 1, 1, 1),
(60, 1, 115, 90, 2, 1, 1, 4, 2, 3, 6, 3, 1, 1, 3, 1, 1, 3),
(61, 1, 40, 40, 6, 1, 2, 6, 1, 2, 6, 3, 1, 2, 3, 1, 3, 4),
(62, 1, 68, 60, 2, 1, 1, 1, 1, 4, 2, 1, 1, 1, 3, 1, 1, 2),
(63, 3, 1, 21, 2, 1, 2, 4, 2, 1, 6, 3, 1, 1, 3, 1, 1, 1),
(64, 1, 115, 50, 2, 1, 2, 4, 2, 2, 5, 3, 1, 1, 3, 1, 1, 3),
(65, 1, 40, 45, 2, 1, 2, 4, 2, 2, 6, 3, 1, 2, 3, 1, 3, 4),
(66, 1, 68, 40, 2, 1, 2, 4, 2, 2, 3, 1, 1, 1, 3, 1, 1, 2),
(67, 1, 1, 45, 2, 1, 2, 4, 2, 2, 5, 3, 1, 1, 3, 1, 1, 1),
(68, 3, 4, 24, 2, 1, 2, 4, 2, 2, 3, 2, 1, 6, 3, 1, 1, 1),
(69, 1, 1, 40, 2, 1, 2, 4, 2, 2, 3, 3, 1, 6, 3, 4, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `IdPetugas` int(10) UNSIGNED NOT NULL,
  `TglPemeriksa` date DEFAULT NULL,
  `IdPemeriksa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`IdPetugas`, `TglPemeriksa`, `IdPemeriksa`) VALUES
(32, '2019-12-24', 1),
(33, '2019-12-24', 1),
(34, '2019-12-24', 1),
(35, '2019-12-24', 1),
(36, '2019-12-24', 1),
(37, '2019-12-24', 1),
(38, '2019-12-24', 1),
(39, '2019-12-24', 1),
(40, '2019-12-24', 1),
(41, '2019-12-24', 1),
(42, '2019-12-24', 1),
(43, '2019-12-24', 1),
(44, '2019-12-24', 1),
(45, '2019-12-24', 1),
(46, '2019-12-24', 1),
(47, '2019-12-24', 1),
(48, '2019-12-25', 1),
(49, '2019-12-25', 1),
(50, '2019-12-25', 1),
(51, '2019-12-25', 1),
(52, '2019-12-25', 1),
(53, '2019-12-25', 1),
(54, '2019-12-25', 1),
(55, '2019-12-25', 1),
(56, '2019-12-25', 1),
(57, '2019-12-25', 1),
(58, '2019-12-25', 1),
(59, '2019-12-25', 1),
(60, '2019-12-25', 1),
(61, '2019-12-25', 1),
(62, '2019-12-25', 1),
(63, '2019-12-25', 1),
(64, '2019-12-25', 1),
(65, '2019-12-25', 1),
(66, '2019-12-25', 1),
(67, '2019-12-25', 1),
(68, '2019-12-25', 1),
(69, '2019-12-25', 1),
(70, '2019-12-25', 1),
(71, '2019-12-25', 1),
(72, '2019-12-25', 1),
(73, '2019-12-25', 1),
(74, '2019-12-25', 1),
(75, '2019-12-25', 1),
(76, '2019-12-25', 1),
(77, '2019-12-25', 1),
(78, '2019-12-25', 1),
(79, '2019-12-25', 1),
(80, '2019-12-25', 1),
(81, '2019-12-25', 1),
(82, '2019-12-25', 1),
(83, '2019-12-25', 1),
(84, '2019-12-25', 1),
(85, '2019-12-25', 1),
(86, '2019-12-25', 1),
(87, '2019-12-25', 1),
(88, '2019-12-25', 1),
(89, '2019-12-25', 1),
(90, '2019-12-25', 1),
(91, '2019-12-25', 1),
(92, '2019-12-25', 1),
(93, '2019-12-25', 1),
(94, '2019-12-25', 1),
(95, '2019-12-25', 1),
(96, '2019-12-25', 1);

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
(24, 0, 1, 0, 0, 0, 0, 0, 1, 0),
(28, 1, 0, 1, 0, 0, 0, 0, 0, 0),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 1, 0, 1, 0, 0, 0, 0, 1, 0),
(33, 0, 0, 0, 0, 1, 0, 0, 1, 0),
(34, 0, 1, 0, 0, 0, 0, 0, 1, 0),
(35, 0, 1, 0, 0, 0, 0, 0, 1, 0),
(36, 0, 1, 0, 0, 0, 0, 0, 1, 0),
(37, 0, 0, 0, 0, 0, 0, 1, 1, 0),
(38, 0, 0, 1, 0, 0, 0, 0, 1, 0),
(39, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(40, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(41, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(42, 0, 1, 0, 0, 0, 0, 0, 1, 0),
(43, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(46, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(47, 1, 1, 1, 0, 0, 0, 0, 1, 0),
(48, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 0, 0, 1, 0, 0, 0, 0, 1, 0),
(51, 1, 1, 1, 0, 0, 0, 0, 1, 0),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(56, 0, 0, 0, 0, 0, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id` int(11) NOT NULL,
  `label` varchar(600) NOT NULL,
  `id_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id`, `label`, `id_kriteria`) VALUES
(1, 'Milik Sendiri ', 1),
(2, 'Kontrak/Sewa ', 1),
(3, 'Bebas Sewa ', 1),
(4, 'Dinas ', 1),
(5, 'Lainnya ', 1),
(6, 'Milik sendiri ', 2),
(7, 'Milik orang lain ', 2),
(8, 'Tanah negara', 2),
(9, 'Lainnya ', 2),
(10, ' <=24 m2 ', 3),
(11, '24 m2', 3),
(12, '25 <luas/area <=27 m2 ', 3),
(13, '>28 m2', 3),
(14, 'Marmer/Granit', 4),
(15, 'Keramik', 4),
(16, 'Parket/vinil/permadani', 4),
(17, 'Ubin/tegel/teraso', 4),
(18, 'Kayu/papan kualitas tinggi ', 4),
(19, 'Semen/bata merah', 4),
(20, 'Bambu', 4),
(21, 'Kayu/papan kualitas rendah ', 4),
(22, 'Tanah ', 4),
(23, 'Lainnya', 4),
(24, 'Tembok ', 5),
(25, 'Plesteran anyaman bambu ', 5),
(26, 'Kayu', 5),
(27, 'Anyaman bambu ', 5),
(28, 'Batang kayu ', 5),
(29, 'Bambu ', 5),
(30, 'Lainnya ', 5),
(31, 'Bagus/kualitas tinggi', 6),
(32, 'Jelek/kualitas rendah', 6),
(33, 'Beton', 7),
(34, 'Keramik', 7),
(35, 'Genteng Metal ', 7),
(36, 'Genteng tanah liat ', 7),
(37, 'Asbes ', 7),
(38, 'Seng', 7),
(39, 'Sirap', 7),
(40, 'Bambu', 7),
(41, 'Jerami/ijuk/daun daunan/rumbia', 7),
(42, 'Lainnya', 7),
(43, 'Bagus/Kualitas tinggi ', 8),
(44, 'Jelek/Kualitas rendah', 8),
(45, '1 kamar', 9),
(46, '2 kamar', 9),
(47, '3 kamar', 9),
(48, '>3 kamar', 9),
(49, 'Air kemasan bermer', 10),
(50, 'Air isi ulang', 10),
(51, 'Ledeng meteran', 10),
(52, 'Ledeng eceran', 10),
(53, 'Sumur bor/pompa', 10),
(54, 'Sumur terlindungi', 10),
(55, 'Sumur tak terlindungi', 10),
(56, 'Mata air terlindungi', 10),
(57, 'Mata air tak terlindungi', 10),
(58, 'Air sungai/danau/waduk', 10),
(59, 'Air hujan', 10),
(60, 'Lainnya', 10),
(61, 'Membeli eceran', 11),
(62, 'Langganan', 11),
(63, 'Tidak membeli', 11),
(64, 'Listrik PLN', 12),
(65, 'Listrik non PLN', 12),
(66, 'Bukan listrik', 12),
(67, '450 watt', 13),
(68, '900 watt', 13),
(69, '1.300 watt', 13),
(70, '2.200 watt', 13),
(71, '> 2.200 watt', 13),
(72, 'tanpa meteran', 13),
(73, 'Listrik ', 14),
(74, 'Gas > 3 kg ', 14),
(75, 'Gas 3 Kg', 14),
(76, 'Gas kota / biogas', 14),
(77, 'Minyak tanah', 14),
(78, 'Briket', 14),
(79, 'Arang', 14),
(80, 'Kayu bakar', 14),
(81, 'Tidak memasak dirumah', 14),
(82, 'Sendiri', 15),
(83, 'Bersama', 15),
(84, 'Umum', 15),
(85, 'Tidak ada ', 15),
(86, 'Leher angsa', 16),
(87, 'Plengsengan', 16),
(88, 'Cemplung/cebluk', 16),
(89, 'Tidak pakai', 16),
(90, 'Tangki ', 17),
(91, 'SPAL', 17),
(92, 'Lubang tanah', 17),
(93, 'Kolam/sawah/danau/laut ', 17),
(94, 'Pantai/tanah lapang/kebun ', 17),
(95, 'Lainnya ', 17),
(96, 'Ya', 18),
(97, 'Tidak', 18),
(98, 'Tidak cacat ', 19),
(99, 'Tuna daksa/cacat tubuh ', 19),
(100, 'Tuna netra/buta ', 19),
(101, 'Tuna rungu ', 19),
(102, 'Tuna wicara ', 19),
(103, 'Tuna rungu dan wicara ', 19),
(104, 'Tuna netra dan cacat tubuh ', 19),
(105, 'Tuna netra, rungu dan wicara ', 19),
(106, 'Tuna rungu, wicara dan cacat tubuh', 19),
(107, 'Tuna rungu, wicara, netra dan cacat tubuh', 19),
(108, 'Cacat mental retardasi ', 19),
(109, 'Mantan penderita gangguan jiwa', 19),
(110, 'Cacat fisik dan mental ', 19),
(111, 'Tidak ada', 20),
(112, 'Hipertensi ', 20),
(113, 'Rematik ', 20),
(114, 'Asma ', 20),
(115, 'Masalah jantung ', 20),
(116, 'Diabetes/kencing manis ', 20),
(117, 'Tuberculosis (TBC) ', 20),
(118, 'Stroke ', 20),
(119, 'Kanker/tumor ganas ', 20),
(120, 'Lainnya (Gagal ginjal, paru-paru flek, dan sejenisnya) ', 20),
(121, 'Tidak/belum ', 21),
(122, 'Pernah sekolah ', 21),
(123, 'Masih sekolah ', 21),
(124, 'Tidak bersekolah lagi ', 21),
(125, 'SD/SDLB ', 22),
(126, 'Paket A ', 22),
(127, 'M.Ibtidayah ', 22),
(128, 'SMP/SMPLB ', 22),
(129, 'Paket B ', 22),
(130, 'M.Tsanawiyah ', 22),
(131, 'SMA/SMK/SMALB ', 22),
(132, 'Paket C ', 22),
(133, 'M.Aliyah ', 22),
(134, 'Pergurun tinggi ', 22),
(135, 'Kelas 1 dan 2', 23),
(136, 'Kelas 3 dan 4', 23),
(137, 'Kelas 5 dan 6', 23),
(138, 'Kelas 7 - tamat', 23),
(139, 'Tidak punya Ijazah ', 24),
(140, 'SD/Sederjat ', 24),
(141, 'SMP/Sederajat ', 24),
(142, 'SMA/Sederajat ', 24),
(143, 'D1/D2/D3 ', 24),
(144, 'D4/S1 ', 24),
(145, 'S2/S3 ', 24),
(146, 'Ya', 25),
(147, 'Tidak', 25),
(148, 'Pertanian, tanaman padi dan palawija ', 26),
(149, 'Hortikultura ', 26),
(150, 'Perkebunan ', 26),
(151, 'Perikann tangkap ', 26),
(152, 'Perikanan budidaya ', 26),
(153, 'Peternakan ', 26),
(154, 'Kehutanan dan pertanian lainnya ', 26),
(155, 'Pertambangan/penggalian ', 26),
(156, 'Industri pengolahan ', 26),
(157, 'Listrik dan gas ', 26),
(158, 'Bangunan/konstruksi ', 26),
(159, 'Perdagangan ', 26),
(160, 'Hotel dan rumah makan ', 26),
(161, 'Transportasi dan pergudangan ', 26),
(162, 'Informasi dan komunikasi ', 26),
(163, 'Keuangan dan asuransi ', 26),
(164, 'Jasa pendidikan ', 26),
(165, 'Jasa kesehatan ', 26),
(166, 'Jasa kemasyarakatan, pemerintahan dan perorangan ', 26),
(167, 'Pemulung ', 26),
(168, 'Lainnya ', 26),
(169, 'Berusaha sendiri ', 27),
(170, 'Berusaha dibantu buruh tidak tetap/tidak dibayar ', 27),
(171, 'Berusaha dibantu buruh tetap/dibayar ', 27),
(172, 'Buruh/karyawan/pegawai swasta ', 27),
(173, 'PNS/TNI/POLRI/BUMN/BUMND/anggota legislatif ', 27),
(174, 'Pekerja bebas pertanian ', 27),
(175, 'Pekerja bebas non pertanian ', 27),
(176, 'Pekerja keluarga/tidak dibayar ', 27),
(177, 'Tabung gas 5.5 kg atau lebih ', 28),
(178, 'Lemari es/kulkas ', 28),
(179, 'AC ', 28),
(180, 'Pemanas air (water heater) ', 28),
(181, 'Telepon ruma (PSTN) ', 28),
(182, 'Televisi ', 28),
(183, 'Emas/Perhiasan dan tabungan (senilai 10 gr atau lebih) ', 28),
(184, 'Komputer/laptop ', 28),
(185, 'Sepeda ', 28),
(186, 'Sepeda motor ', 28),
(187, 'Mobil ', 28),
(188, 'Perahu ', 28),
(189, 'Motor tempel ', 28),
(190, 'Perahu motor ', 28),
(191, 'Kapal ', 28),
(192, 'Lahan ', 29),
(193, 'Rumah ditempat lain ', 29),
(194, 'Sapi ', 30),
(195, 'Kerbau ', 30),
(196, 'Kuda ', 30),
(197, 'Babi ', 30),
(198, 'Kambing/domba ', 30),
(199, 'Ya ', 31),
(200, 'Tidak ', 31),
(201, 'Kartu keluarga sejahtera (KKS)/Kartu Perlindungan Sosial (KPS) ', 32),
(202, 'Kartu Indonesia Pintar (KIP)/Bantuan Siswa Miskin (BSM) ', 32),
(203, 'Kartu Indonesia Sehat (KIS)/BPJS kesehatan/JAMSOSTEK ', 32),
(204, 'BPJS kesehatan peserta mandiri ', 32),
(205, 'Jaminan sosial tenaga kerja (JAMSOSTEK)/ BPJS ketenagakerjaan ', 32),
(206, 'Asusransi kesehatan lainnya ', 32),
(207, 'Program keluarga harapan (PKH) ', 32),
(208, 'Beras untuk rakyat miskin ', 32),
(209, 'Kredit Usaha Rakyat (KUR) ', 32),
(210, 'sisa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id_Survey` int(10) UNSIGNED NOT NULL,
  `IdJenisPenerima` int(11) NOT NULL,
  `IdAset` int(10) UNSIGNED NOT NULL,
  `IdPengenalanTempat` int(10) UNSIGNED NOT NULL,
  `IdPerumahan` int(10) UNSIGNED NOT NULL,
  `IdPetugas` int(10) UNSIGNED NOT NULL,
  `IdEkonomi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id_Survey`, `IdJenisPenerima`, `IdAset`, `IdPengenalanTempat`, `IdPerumahan`, `IdPetugas`, `IdEkonomi`) VALUES
(47, 1, 0, 0, 0, 32, 43),
(48, 1, 0, 0, 0, 33, 44),
(49, 1, 0, 0, 0, 34, 45),
(50, 1, 0, 0, 0, 35, 46),
(51, 1, 0, 0, 0, 36, 47),
(52, 1, 0, 0, 0, 37, 48),
(53, 1, 0, 0, 0, 38, 49),
(54, 1, 0, 0, 0, 39, 50),
(55, 1, 0, 0, 0, 40, 51),
(56, 1, 0, 0, 0, 41, 52),
(57, 1, 0, 0, 0, 42, 53),
(58, 1, 0, 0, 0, 43, 54),
(59, 1, 0, 0, 0, 44, 55),
(60, 1, 0, 0, 0, 45, 56),
(61, 1, 0, 0, 0, 46, 57),
(62, 1, 0, 0, 0, 47, 58),
(63, 1, 0, 0, 0, 48, 59),
(64, 1, 0, 0, 0, 49, 60),
(65, 1, 0, 0, 0, 50, 61),
(66, 1, 0, 0, 0, 51, 62),
(67, 1, 0, 0, 0, 52, 63),
(68, 1, 0, 0, 0, 53, 64),
(69, 1, 0, 0, 0, 54, 65),
(70, 1, 0, 0, 0, 55, 66),
(71, 1, 0, 0, 0, 56, 67),
(72, 1, 0, 0, 0, 57, 68),
(73, 1, 0, 0, 0, 58, 69),
(74, 1, 0, 0, 0, 59, 70),
(75, 1, 0, 0, 0, 60, 71),
(76, 1, 0, 0, 0, 61, 72),
(77, 1, 0, 0, 0, 62, 73),
(78, 1, 0, 0, 0, 63, 74),
(79, 2, 28, 40, 37, 64, 0),
(83, 2, 32, 44, 41, 68, 0),
(84, 2, 33, 45, 42, 69, 0),
(85, 2, 34, 46, 43, 70, 0),
(86, 2, 35, 47, 44, 71, 0),
(87, 2, 36, 48, 45, 72, 0),
(88, 2, 37, 49, 46, 73, 0),
(89, 2, 38, 50, 47, 74, 0),
(90, 2, 39, 51, 48, 75, 0),
(91, 2, 40, 52, 49, 76, 0),
(92, 2, 41, 53, 50, 77, 0),
(93, 2, 42, 54, 51, 78, 0),
(94, 2, 43, 55, 52, 79, 0),
(95, 2, 44, 56, 53, 80, 0),
(96, 2, 45, 57, 54, 81, 0),
(97, 2, 46, 58, 55, 82, 0),
(98, 2, 47, 59, 56, 83, 0),
(99, 2, 48, 60, 57, 84, 0),
(100, 2, 49, 61, 58, 85, 0),
(101, 2, 50, 62, 59, 86, 0),
(102, 2, 51, 63, 60, 87, 0),
(103, 2, 52, 64, 61, 88, 0),
(104, 2, 53, 65, 62, 89, 0),
(105, 2, 54, 66, 63, 90, 0),
(106, 2, 55, 67, 64, 91, 0),
(107, 2, 56, 68, 65, 92, 0),
(108, 2, 57, 69, 66, 93, 0),
(109, 2, 58, 70, 67, 94, 0),
(110, 2, 59, 71, 68, 95, 0),
(111, 2, 60, 72, 69, 96, 0);

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
(37, NULL, NULL, NULL, NULL, NULL),
(41, NULL, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL, NULL),
(43, NULL, NULL, NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL, NULL),
(50, NULL, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL, NULL),
(54, NULL, NULL, NULL, NULL, NULL),
(55, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, NULL),
(57, NULL, NULL, NULL, NULL, NULL),
(58, NULL, NULL, NULL, NULL, NULL),
(59, NULL, NULL, NULL, NULL, NULL),
(60, NULL, NULL, NULL, NULL, NULL),
(61, NULL, NULL, NULL, NULL, NULL),
(62, NULL, NULL, NULL, NULL, NULL),
(63, NULL, NULL, NULL, NULL, NULL),
(64, NULL, NULL, NULL, NULL, NULL),
(65, NULL, NULL, NULL, NULL, NULL),
(66, NULL, NULL, NULL, NULL, NULL),
(67, NULL, NULL, NULL, NULL, NULL),
(68, NULL, NULL, NULL, NULL, NULL),
(69, NULL, NULL, NULL, NULL, NULL);

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
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekonomi`
--
ALTER TABLE `ekonomi`
  ADD PRIMARY KEY (`IdEkonomi`);

--
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenisusaha`
--
ALTER TABLE `jenisusaha`
  ADD PRIMARY KEY (`IdJenisUsaha`,`IdUsaha`),
  ADD KEY `JenisUsaha_FKIndex1` (`IdUsaha`);

--
-- Indexes for table `kartuidentitas`
--
ALTER TABLE `kartuidentitas`
  ADD PRIMARY KEY (`idKartuIdentitas`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`IdKecamatan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`IdKelurahan`),
  ADD KEY `Kelurahan_FKIndex1` (`IdKecamatan`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `perorangan`
--
ALTER TABLE `perorangan`
  ADD PRIMARY KEY (`IdEkonomi`,`NIK`),
  ADD KEY `Ekonomi_FKIndex2` (`IdTanggunganPendidikan`),
  ADD KEY `Keluarga_FKIndex2` (`IdEkonomi`);

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
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `IdAset` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `asetbergerak`
--
ALTER TABLE `asetbergerak`
  MODIFY `IdAsetBergerak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `asettidakbergerak`
--
ALTER TABLE `asettidakbergerak`
  MODIFY `IdAsetTidakBergerak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `ekonomi`
--
ALTER TABLE `ekonomi`
  MODIFY `IdEkonomi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indikator`
--
ALTER TABLE `indikator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenisusaha`
--
ALTER TABLE `jenisusaha`
  MODIFY `IdJenisUsaha` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kartuidentitas`
--
ALTER TABLE `kartuidentitas`
  MODIFY `idKartuIdentitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `IdKecamatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `IdKelurahan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
  MODIFY `IdPengenalanTempat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `IdPengguna` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perorangan`
--
ALTER TABLE `perorangan`
  MODIFY `IdEkonomi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `perumahan`
--
ALTER TABLE `perumahan`
  MODIFY `IdPerumahan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `IdPetugas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `IdProgram` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id_Survey` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `tanggunganpendidikan`
--
ALTER TABLE `tanggunganpendidikan`
  MODIFY `IdTanggunganPendidikan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ternak`
--
ALTER TABLE `ternak`
  MODIFY `IdTernak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `IdUsaha` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
