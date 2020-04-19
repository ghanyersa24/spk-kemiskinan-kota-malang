-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 08:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

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

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `kriteria` (`indikator_id` TINYINT) RETURNS LONGTEXT CHARSET utf8mb4 NO SQL
RETURN(
SELECT
    CONCAT(
        '[',
        GROUP_CONCAT(
            JSON_OBJECT(
                'kriteria_id',
                `kriteria`.`id`,
                'kriteria',
                `kriteria`.`kriteria`,
                'bobot_kriteria',
                `kriteria`.`bobot_kriteria`,
                'sub_kriteria',
                `sub_kriteria`(`kriteria`.`id`)               
            )
        ),
        ']'
    ) AS kriteria
FROM
    `kriteria`
WHERE
    `kriteria`.`indikator_id` = indikator_id
)$$

CREATE DEFINER=`root`@`localhost` FUNCTION `sub_kriteria` (`kriteria_id` TINYINT) RETURNS LONGTEXT CHARSET utf8mb4 NO SQL
RETURN (SELECT
        CONCAT(
        '[',
    GROUP_CONCAT(
        JSON_OBJECT(
            'sub_kriteria_id',`sub_kriteria`.`id`,
        	'sub_kriteria',`sub_kriteria`.`sub_kriteria`,
        	'bobot_sub',`sub_kriteria`.`bobot_sub`)
    ) ,
        ']'
    )AS sub_kriteria
FROM
    `sub_kriteria`
WHERE `sub_kriteria`.`kriteria_id`=kriteria_id)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE `aset` (
  `IdAset` int(10) UNSIGNED NOT NULL,
  `IdTernak` int(10) UNSIGNED NOT NULL,
  `IdAsetTidakBergerak` int(10) UNSIGNED NOT NULL,
  `IdProgram` int(10) UNSIGNED NOT NULL,
  `IdAsetBergerak` int(10) UNSIGNED NOT NULL,
  `IdJenisUsaha` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`IdAset`, `IdTernak`, `IdAsetTidakBergerak`, `IdProgram`, `IdAsetBergerak`, `IdJenisUsaha`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, '2020-04-16 14:05:14', '2020-04-16 16:33:56'),
(2, 2, 2, 2, 2, 1, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 3, 3, 3, 3, 2, '2020-04-16 18:06:59', '2020-04-16 18:06:59');

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
  `AdaKapal` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asetbergerak`
--

INSERT INTO `asetbergerak` (`IdAsetBergerak`, `AdaTabungGas`, `AdaLemariEs`, `AdaAC`, `AdaPemanas`, `AdaTelepon`, `AdaTv`, `AdaEmas`, `AdaLaptop`, `AdaSepeda`, `AdaMotor`, `AdaMobil`, `AdaPerahu`, `AdaMotorTempel`, `AdaPerahuMotor`, `AdaKapal`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, '2020-04-16 14:05:13', '2020-04-16 17:08:34'),
(2, 0, 1, 0, 0, 1, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-04-16 18:06:59', '2020-04-16 18:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `asettidakbergerak`
--

CREATE TABLE `asettidakbergerak` (
  `IdAsetTidakBergerak` int(10) UNSIGNED NOT NULL,
  `LuasAtb` tinyint(4) DEFAULT NULL,
  `RumahLain` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asettidakbergerak`
--

INSERT INTO `asettidakbergerak` (`IdAsetTidakBergerak`, `LuasAtb`, `RumahLain`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '2020-04-16 14:05:13', '2020-04-16 14:05:13'),
(2, 0, 0, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 0, 0, '2020-04-16 18:06:59', '2020-04-16 18:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `ekonomi`
--

CREATE TABLE `ekonomi` (
  `IdEkonomi` int(10) UNSIGNED NOT NULL,
  `IdKeluarga` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `indikator`
--

CREATE TABLE `indikator` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `indikator` varchar(100) DEFAULT NULL,
  `bobot_indikator` float DEFAULT NULL,
  `tujuan` enum('individu','keluarga') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`id`, `indikator`, `bobot_indikator`, `tujuan`, `created_at`, `updated_at`) VALUES
(1, 'Kesehatan', 29.7258, 'individu', '2020-04-12 15:58:11', NULL),
(2, 'Pendidikan', 16.3781, 'individu', '2020-04-12 15:58:11', NULL),
(3, 'Ekonomi', 53.8961, 'individu', '2020-04-12 15:58:11', NULL),
(4, 'Perumahan', 66.6667, 'keluarga', '2020-04-19 15:53:33', NULL),
(5, 'Asset', 33.3333, 'keluarga', '2020-04-19 15:53:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenisusaha`
--

CREATE TABLE `jenisusaha` (
  `IdJenisUsaha` int(10) UNSIGNED NOT NULL,
  `StaUsaha` tinyint(4) NOT NULL,
  `JumlahPekerja` int(10) UNSIGNED DEFAULT NULL,
  `TempatUsaha` varchar(100) DEFAULT NULL,
  `OmsetUsaha` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenisusaha`
--

INSERT INTO `jenisusaha` (`IdJenisUsaha`, `StaUsaha`, `JumlahPekerja`, `TempatUsaha`, `OmsetUsaha`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '', 0, '2020-04-16 15:03:13', '2020-04-16 16:34:06'),
(2, 2, 0, '', 0, '2020-04-16 18:06:59', '2020-04-16 18:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `kartuidentitas`
--

CREATE TABLE `kartuidentitas` (
  `idKartuIdentitas` int(11) NOT NULL,
  `adaAktaKelahiran` int(11) NOT NULL,
  `adaKartuPelajar` int(11) NOT NULL,
  `adaKTP` int(11) NOT NULL,
  `adaSIM` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kartuidentitas`
--

INSERT INTO `kartuidentitas` (`idKartuIdentitas`, `adaAktaKelahiran`, `adaKartuPelajar`, `adaKTP`, `adaSIM`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 1, 1, '2020-04-12 11:13:39', '2020-04-12 11:13:39'),
(2, 0, 0, 1, 1, '2020-04-12 11:13:55', '2020-04-12 11:13:55'),
(3, 0, 1, 0, 1, '2020-04-12 12:07:59', '2020-04-12 12:07:59'),
(4, 1, 0, 0, 0, '2020-04-12 16:21:49', '2020-04-12 16:21:49'),
(5, 1, 0, 0, 0, '2020-04-12 16:25:06', '2020-04-12 16:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `IdKecamatan` int(10) UNSIGNED NOT NULL,
  `NamaKecamatan` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `IdKelurahan` int(10) UNSIGNED NOT NULL,
  `NamaKelurahan` varchar(50) DEFAULT NULL,
  `IdKecamatan` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `indikator_id` tinyint(3) UNSIGNED NOT NULL,
  `kriteria` varchar(100) DEFAULT NULL,
  `bobot_kriteria` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `indikator_id`, `kriteria`, `bobot_kriteria`, `created_at`, `updated_at`) VALUES
(1, 1, 'Status kehamilan', 4.86852, '2020-04-12 15:58:38', NULL),
(2, 1, 'Jenis Cacat', 8.83625, '2020-04-12 15:58:38', NULL),
(3, 1, 'Penyakit kronis/menahun ', 16.0211, '2020-04-12 15:58:38', NULL),
(4, 2, 'Partisipasi Sekolah', 2.00664, '2020-04-12 15:58:38', NULL),
(5, 2, 'Jenjang pendidikan tinggi yang pernah/sedang diduduki', 3.72081, '2020-04-12 15:58:38', NULL),
(6, 2, 'Kelas tertinggi yang pernah/sedang diikuti ', 3.72081, '2020-04-12 15:58:38', NULL),
(7, 2, 'Ijazah tertinggi yang dimiliki', 6.92981, '2020-04-12 15:58:38', NULL),
(8, 3, 'Bekerja/membantu bekerja selama seminggu yang lalu', 8.82714, '2020-04-12 15:58:38', NULL),
(9, 3, 'Lapangan usaha dari pekerjaan utama', 16.0211, '2020-04-12 15:58:38', NULL),
(10, 3, 'Status kedudukan dalam pekerjaan utama ', 29.0479, '2020-04-12 15:58:38', NULL),
(11, 4, 'Status Perumahan', 3.78241, '2020-04-12 15:58:38', NULL),
(12, 4, 'Luas Lantai ', 2.2486, '2020-04-12 15:58:38', NULL),
(13, 4, 'Jenis Lantai', 2.2486, '2020-04-12 15:58:38', NULL),
(14, 4, 'Dinding', 2.2486, '2020-04-12 15:58:38', NULL),
(15, 4, 'Atap', 2.2486, '2020-04-12 15:58:38', NULL),
(16, 4, 'Jumlah Kamar', 2.2486, '2020-04-12 15:58:38', NULL),
(17, 4, 'Sumber Air Minum', 9.88813, '2020-04-12 15:58:38', NULL),
(18, 4, 'Cara Memperoleh Air Minum', 9.88813, '2020-04-12 15:58:38', NULL),
(19, 4, 'Listrik', 6.04437, '2020-04-12 15:58:38', NULL),
(20, 4, 'Bahan Bakar', 6.04437, '2020-04-12 15:58:38', NULL),
(21, 4, 'Fasilitas BAB', 9.88813, '2020-04-12 15:58:38', NULL),
(22, 4, 'Tempat Pembuangan Akhir Tinja ', 9.88813, '2020-04-12 15:58:38', NULL),
(23, 5, 'Rumah tangga memiliki sendiri asset bergerak ', 2.93593, '2020-04-12 15:58:38', NULL),
(24, 5, 'Rumah tangga memiliki asset tidak bergerak', 2.93593, '2020-04-12 15:58:38', NULL),
(25, 5, 'Jumlah ternak yang dimiliki ', 5.129, '2020-04-12 15:58:38', NULL),
(26, 5, 'Memiliki usaha ', 8.5697, '2020-04-12 15:58:38', NULL),
(27, 5, 'Rumah tangga menjadi peserta program/memiliki kartu program ', 13.7628, '2020-04-12 15:58:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `optionaset`
--

CREATE TABLE `optionaset` (
  `IdOptionAset` int(10) UNSIGNED NOT NULL,
  `IdAset` int(10) UNSIGNED DEFAULT NULL,
  `Label` varchar(100) DEFAULT NULL,
  `IdKolom` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `optionekonomi`
--

CREATE TABLE `optionekonomi` (
  `IdOptionEkonomi` int(10) UNSIGNED NOT NULL,
  `Label` varchar(100) DEFAULT NULL,
  `IdKolom` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `optionperumahan`
--

CREATE TABLE `optionperumahan` (
  `IdOptionPerumahan` int(10) UNSIGNED NOT NULL,
  `Label` varchar(100) DEFAULT NULL,
  `IdKolom` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `JumlahKeluarga` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengenalantempat`
--

INSERT INTO `pengenalantempat` (`IdPengenalanTempat`, `IdKecamatan`, `IdKelurahan`, `NamaSLS`, `Alamat`, `NamaKRT`, `JumlahART`, `JumlahKeluarga`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1/3', 'Jalan', 'MUHAMMAD FAJAR', NULL, NULL, '2020-04-16 14:05:13', '2020-04-16 14:05:13'),
(2, 1, 55, '10/84', 'Aliqua Irure aut ve', 'Dolore ad nobis plac', NULL, NULL, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 5, 1, '1/1', 'AXSA', 'ADI SUTRISNO', NULL, NULL, '2020-04-16 18:06:59', '2020-04-16 18:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `IdPengguna` int(10) UNSIGNED NOT NULL,
  `KataSandi` varchar(100) NOT NULL,
  `NamaPengguna` varchar(30) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
(1, 0000000076, NULL, 0, 'Sit soluta anim har', '9/4', 'In dolor atque earum', 2, 1, 1, 28, 1, 3, 1, 2, 2, 7, 1, 1, 4, 5, 4, 1, 2, 3),
(2, 0000000075, NULL, 0, 'Aliquam velit magna', '3/3', 'Quo tenetur qui labo', 6, 4, 1, 41, 2, 2, 2, 3, 1, 12, 8, 3, 10, 4, 4, 1, 13, 2),
(3, 4294967295, NULL, 0, 'NUR FITRI LESTARI', '1/5', 'sdfasfca', 2, 1, 2, 23, 2, 2, 1, 4, 2, 1, 1, 3, 1, 8, 2, 1, 13, 1),
(4, 0000002133, NULL, 0, 'SRI WINARTI', '1/2', 'FQDA', 1, 1, 2, 23, 1, 1, 2, 5, 2, 1, 1, 3, 4, 8, 3, 2, 21, 1);

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
  `BuangTinja` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perumahan`
--

INSERT INTO `perumahan` (`IdPerumahan`, `StaBangunan`, `StaLahan`, `LuasLantai`, `Lantai`, `Dinding`, `KondisiDinding`, `Atap`, `KondisiAtap`, `JumlahKamar`, `SumberAirminum`, `MemperolehAirminum`, `SumberPenerangan`, `Daya`, `BahanMasak`, `FasilitasBAB`, `Kloset`, `BuangTinja`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 30, 2, 1, 2, 4, 2, 3, 3, 2, 1, 1, 3, 1, 1, 2, '2020-04-16 14:05:13', '2020-04-16 14:05:13'),
(2, 5, 4, 9, 4, 4, 2, 6, 2, 2, 11, 1, 2, 6, 6, 1, 4, 3, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 1, 1, 30, 9, 1, 2, 4, 2, 2, 12, 3, 1, 6, 3, 1, 1, 2, '2020-04-16 18:06:59', '2020-04-16 18:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `IdPetugas` int(10) UNSIGNED NOT NULL,
  `TglPemeriksa` date DEFAULT NULL,
  `IdPemeriksa` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`IdPetugas`, `TglPemeriksa`, `IdPemeriksa`, `created_at`, `updated_at`) VALUES
(1, '2018-12-09', 1, '2020-04-12 11:13:55', '2020-04-12 11:13:55'),
(2, '1978-09-11', 1, '2020-04-12 12:07:59', '2020-04-12 12:07:59'),
(3, '2020-04-12', 1, '2020-04-12 16:21:49', '2020-04-12 16:21:49'),
(4, '2020-04-13', 1, '2020-04-12 16:25:07', '2020-04-12 16:25:07'),
(5, '2020-04-16', 1, '2020-04-16 14:05:14', '2020-04-16 14:05:14'),
(6, '1971-04-24', 1, '2020-04-16 15:03:14', '2020-04-16 15:03:14'),
(7, '2020-04-17', 1, '2020-04-16 18:06:59', '2020-04-16 18:06:59');

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
  `StaKur` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`IdProgram`, `StaKKS`, `StaKIP`, `StaKIS`, `StaBPJSMandiri`, `StaJamsostek`, `StaAsuransi`, `StaPkh`, `Raskin`, `StaKur`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 0, 0, 0, 0, 0, 1, 0, '2020-04-16 14:05:14', '2020-04-16 14:06:33'),
(2, 0, 1, 1, 0, 0, 1, 0, 1, 1, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 1, 0, 1, 0, 0, 0, 0, 0, 0, '2020-04-16 18:06:59', '2020-04-16 18:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `kriteria_id` smallint(5) UNSIGNED NOT NULL,
  `sub_kriteria` varchar(100) DEFAULT NULL,
  `bobot_sub` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id`, `kriteria_id`, `sub_kriteria`, `bobot_sub`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ya', 3.65139, '2020-04-12 15:59:34', NULL),
(2, 1, 'Tidak', 1.21713, '2020-04-12 15:59:34', NULL),
(3, 2, 'Tidak cacat', 0.848014, '2020-04-12 15:59:34', NULL),
(4, 2, 'Tuna daksa/cacat tubuh', 0.284651, '2020-04-12 15:59:34', NULL),
(5, 2, 'Tuna netra/buta', 0.284651, '2020-04-12 15:59:34', NULL),
(6, 2, 'Tuna rungu', 0.284651, '2020-04-12 15:59:34', NULL),
(7, 2, 'Tuna wicara', 0.284651, '2020-04-12 15:59:34', NULL),
(8, 2, 'Tuna rungu dan wicara', 0.612221, '2020-04-12 15:59:34', NULL),
(9, 2, 'Tuna netra dan cacat tubuh', 0.284651, '2020-04-12 15:59:34', NULL),
(10, 2, 'Tuna netra, rungu dan wicara', 1.37203, '2020-04-12 15:59:34', NULL),
(11, 2, 'Tuna rungu, wicara dan cacat tubuh ', 1.37203, '2020-04-12 15:59:34', NULL),
(12, 2, 'Tuna rungu, wicara, netra dan cacat tubuh ', 1.37203, '2020-04-12 15:59:34', NULL),
(13, 2, 'Cacat mental retardasi ', 0.612221, '2020-04-12 15:59:34', NULL),
(14, 2, 'Mantan penderita gangguan jiwa ', 0.612221, '2020-04-12 15:59:34', NULL),
(15, 2, 'Cacat fisik dan mental ', 0.612221, '2020-04-12 15:59:34', NULL),
(16, 3, 'Tidak ada', 1.53754, '2020-04-12 15:59:34', NULL),
(17, 3, 'Hipertensi', 4.44009, '2020-04-12 15:59:34', NULL),
(18, 3, 'Rematik', 2.58052, '2020-04-12 15:59:34', NULL),
(19, 3, 'Asma', 1.06613, '2020-04-12 15:59:34', NULL),
(20, 3, 'Masalah jantung ', 1.06613, '2020-04-12 15:59:34', NULL),
(21, 3, 'Diabetes/kencing manis', 1.06613, '2020-04-12 15:59:34', NULL),
(22, 3, 'Tuberculosis (TBC) ', 1.06613, '2020-04-12 15:59:34', NULL),
(23, 3, 'Stroke', 1.06613, '2020-04-12 15:59:34', NULL),
(24, 3, 'Kanker/tumor ganas', 1.06613, '2020-04-12 15:59:34', NULL),
(25, 3, 'Lainnya (Gagal ginjal, paru-paru flek, dan sejenisnya)', 1.06613, '2020-04-12 15:59:34', NULL),
(26, 4, 'Tidak/belum ', 0.745426, '2020-04-12 15:59:34', NULL),
(27, 4, 'Pernah sekolah ', 0.745426, '2020-04-12 15:59:34', NULL),
(28, 4, 'Masih sekolah ', 0.192577, '2020-04-12 15:59:34', NULL),
(29, 4, 'Tidak bersekolah lagi ', 0.32321, '2020-04-12 15:59:34', NULL),
(30, 5, 'SD/SDLB ', 0.577742, '2020-04-12 15:59:34', NULL),
(31, 5, 'Paket A ', 0.577742, '2020-04-12 15:59:34', NULL),
(32, 5, 'M.Ibtidayah ', 0.577742, '2020-04-12 15:59:34', NULL),
(33, 5, 'SMP/SMPLB ', 0.343729, '2020-04-12 15:59:34', NULL),
(34, 5, 'Paket B ', 0.343729, '2020-04-12 15:59:34', NULL),
(35, 5, 'M.Tsanawiyah ', 0.343729, '2020-04-12 15:59:34', NULL),
(36, 5, 'SMA/SMK/SMALB ', 0.199771, '2020-04-12 15:59:34', NULL),
(37, 5, 'Paket C ', 0.199771, '2020-04-12 15:59:34', NULL),
(38, 5, 'M.Aliyah ', 0.199771, '2020-04-12 15:59:34', NULL),
(39, 5, 'Pergurun tinggi ', 0.357086, '2020-04-12 15:59:34', NULL),
(40, 6, 'Kelas 1 dan 2', 1.73323, '2020-04-12 15:59:34', NULL),
(41, 6, 'Kelas 3 dan 4', 1.03119, '2020-04-12 15:59:34', NULL),
(42, 6, 'Kelas 5 dan 6', 0.599312, '2020-04-12 15:59:34', NULL),
(43, 6, 'Kelas 7 - tamat', 0.357086, '2020-04-12 15:59:34', NULL),
(44, 7, 'Tidak punya Ijazah ', 3.22804, '2020-04-12 15:59:34', NULL),
(45, 7, 'SD/Sederjat ', 0.960265, '2020-04-12 15:59:34', NULL),
(46, 7, 'SMP/Sederajat ', 0.960265, '2020-04-12 15:59:34', NULL),
(47, 7, 'SMA/Sederajat ', 1.11619, '2020-04-12 15:59:34', NULL),
(48, 7, 'D1/D2/D3 ', 0.221684, '2020-04-12 15:59:34', NULL),
(49, 7, 'D4/S1 ', 0.221684, '2020-04-12 15:59:34', NULL),
(50, 7, 'S2/S3', 0.221684, '2020-04-12 15:59:34', NULL),
(51, 8, 'Ya', 2.20678, '2020-04-12 15:59:34', NULL),
(52, 8, 'Tidak', 6.62035, '2020-04-12 15:59:34', NULL),
(53, 9, 'Pertanian, tanaman padi dan palawija ', 0.516103, '2020-04-12 15:59:34', NULL),
(54, 9, 'Hortikultura ', 0.128128, '2020-04-12 15:59:34', NULL),
(55, 9, 'Perkebunan ', 0.516103, '2020-04-12 15:59:34', NULL),
(56, 9, 'Perikann tangkap ', 0.516103, '2020-04-12 15:59:34', NULL),
(57, 9, 'Perikanan budidaya ', 0.516103, '2020-04-12 15:59:34', NULL),
(58, 9, 'Peternakan ', 0.516103, '2020-04-12 15:59:34', NULL),
(59, 9, 'Kehutanan dan pertanian lainnya ', 0.128128, '2020-04-12 15:59:34', NULL),
(60, 9, 'Pertambangan/penggalian ', 0.128128, '2020-04-12 15:59:34', NULL),
(61, 9, 'Industri pengolahan ', 0.128128, '2020-04-12 15:59:34', NULL),
(62, 9, 'Listrik dan gas ', 0.128128, '2020-04-12 15:59:34', NULL),
(63, 9, 'Bangunan/konstruksi ', 2.22004, '2020-04-12 15:59:34', NULL),
(64, 9, 'Perdagangan ', 2.22004, '2020-04-12 15:59:34', NULL),
(65, 9, 'Hotel dan rumah makan ', 0.128128, '2020-04-12 15:59:34', NULL),
(66, 9, 'Transportasi dan pergudangan ', 0.128128, '2020-04-12 15:59:34', NULL),
(67, 9, 'Informasi dan komunikasi ', 0.128128, '2020-04-12 15:59:34', NULL),
(68, 9, 'Keuangan dan asuransi ', 0.128128, '2020-04-12 15:59:34', NULL),
(69, 9, 'Jasa pendidikan ', 0.128128, '2020-04-12 15:59:34', NULL),
(70, 9, 'Jasa kesehatan ', 0.128128, '2020-04-12 15:59:34', NULL),
(71, 9, 'Jasa kemasyarakatan, pemerintahan dan perorangan ', 0.128128, '2020-04-12 15:59:34', NULL),
(72, 9, 'Pemulung ', 3.73146, '2020-04-12 15:59:34', NULL),
(73, 9, 'Lainnya ', 3.73146, '2020-04-12 15:59:34', NULL),
(74, 10, 'Berusaha sendiri ', 0.696931, '2020-04-12 15:59:34', NULL),
(75, 10, 'Berusaha dibantu buruh tidak tetap/tidak dibayar ', 4.67875, '2020-04-12 15:59:34', NULL),
(76, 10, 'Berusaha dibantu buruh tetap/dibayar ', 0.696931, '2020-04-12 15:59:34', NULL),
(77, 10, 'Buruh/karyawan/pegawai swasta ', 0.696931, '2020-04-12 15:59:34', NULL),
(78, 10, 'PNS/TNI/POLRI/BUMN/BUMND/anggota legislatif ', 0.696931, '2020-04-12 15:59:34', NULL),
(79, 10, 'Pekerja bebas pertanian ', 4.02517, '2020-04-12 15:59:34', NULL),
(80, 10, 'Pekerja bebas non pertanian ', 4.02517, '2020-04-12 15:59:34', NULL),
(81, 10, 'Pekerja keluarga/tidak dibayar ', 13.5311, '2020-04-12 15:59:34', NULL),
(82, 11, 'Milik Sendiri ', 0.0907493, '2020-04-12 15:59:34', NULL),
(83, 11, 'Kontrak/Sewa ', 0.524129, '2020-04-12 15:59:34', NULL),
(84, 11, 'Bebas Sewa ', 0.304617, '2020-04-12 15:59:34', NULL),
(85, 11, 'Dinas ', 0.0907493, '2020-04-12 15:59:34', NULL),
(86, 11, 'Lainnya ', 0.880959, '2020-04-12 15:59:34', NULL),
(87, 11, 'Milik sendiri ', 0.181499, '2020-04-12 15:59:34', NULL),
(88, 11, 'Milik orang lain ', 0.304617, '2020-04-12 15:59:34', NULL),
(89, 11, 'Tanah negara', 0.524129, '2020-04-12 15:59:34', NULL),
(90, 11, 'Lainnya ', 0.880959, '2020-04-12 15:59:34', NULL),
(91, 12, '<=24 m2 ', 1.04744, '2020-04-12 15:59:34', NULL),
(92, 12, '24 m2', 0.623178, '2020-04-12 15:59:34', NULL),
(93, 12, '25 <luas/area <=27 m2 ', 0.362183, '2020-04-12 15:59:34', NULL),
(94, 12, '>28 m2', 0.215798, '2020-04-12 15:59:34', NULL),
(95, 13, 'Marmer/Granit', 0.0359663, '2020-04-16 15:39:51', NULL),
(96, 13, 'Keramik', 0.0359663, '2020-04-12 15:59:34', NULL),
(97, 13, 'Parket/vinil/permadani', 0.0359663, '2020-04-12 15:59:34', NULL),
(98, 13, 'Ubin/tegel/teraso', 0.0359663, '2020-04-12 15:59:34', NULL),
(99, 13, 'Kayu/papan kualitas tinggi ', 0.0359663, '2020-04-12 15:59:34', NULL),
(100, 13, 'Semen/bata merah', 0.0359663, '2020-04-12 15:59:34', NULL),
(101, 13, 'Bambu', 0.181091, '2020-04-12 15:59:34', NULL),
(102, 13, 'Kayu/papan kualitas rendah ', 0.623178, '2020-04-12 15:59:34', NULL),
(103, 13, 'Tanah ', 1.04744, '2020-04-12 15:59:34', NULL),
(104, 13, 'Lainnya', 0.181091, '2020-04-12 15:59:34', NULL),
(105, 14, 'Tembok ', 0.0539495, '2020-04-12 15:59:34', NULL),
(106, 14, 'Plesteran anyaman bambu ', 0.0539495, '2020-04-12 15:59:34', NULL),
(107, 14, 'Kayu', 0.0905456, '2020-04-12 15:59:34', NULL),
(108, 14, 'Anyaman bambu ', 0.0905456, '2020-04-12 15:59:34', NULL),
(109, 14, 'Batang kayu ', 0.311589, '2020-04-12 15:59:34', NULL),
(110, 14, 'Bambu ', 0.26186, '2020-04-12 15:59:34', NULL),
(111, 14, 'Lainnya ', 0.26186, '2020-04-12 15:59:34', NULL),
(112, 14, 'Bagus/kualitas tinggi', 0.107899, '2020-04-12 15:59:34', NULL),
(113, 14, 'Jelek/kualitas rendah', 1.0164, '2020-04-12 15:59:34', NULL),
(114, 15, 'Beton', 0.0215798, '2020-04-12 15:59:34', NULL),
(115, 15, 'Keramik', 0.0215798, '2020-04-12 15:59:34', NULL),
(116, 15, 'Genteng Metal ', 0.0215798, '2020-04-12 15:59:34', NULL),
(117, 15, 'Genteng tanah liat ', 0.0215798, '2020-04-12 15:59:34', NULL),
(118, 15, 'Asbes ', 0.0215798, '2020-04-12 15:59:34', NULL),
(119, 15, 'Seng', 0.181091, '2020-04-12 15:59:34', NULL),
(120, 15, 'Sirap', 0.208827, '2020-04-12 15:59:34', NULL),
(121, 15, 'Bambu', 0.208827, '2020-04-12 15:59:34', NULL),
(122, 15, 'Jerami/ijuk/daun daunan/rumbia', 0.208827, '2020-04-12 15:59:34', NULL),
(123, 15, 'Lainnya', 0.208827, '2020-04-12 15:59:34', NULL),
(124, 15, 'Bagus/Kualitas tinggi ', 0.107899, '2020-04-12 15:59:34', NULL),
(125, 15, 'Jelek/Kualitas rendah', 1.0164, '2020-04-12 15:59:34', NULL),
(126, 16, '1 kamar', 1.04744, '2020-04-12 15:59:34', NULL),
(127, 16, '2 kamar', 0.623178, '2020-04-12 15:59:34', NULL),
(128, 16, '3 kamar', 0.362183, '2020-04-12 15:59:34', NULL),
(129, 16, '>3 kamar', 0.215798, '2020-04-12 15:59:34', NULL),
(130, 17, 'Air kemasan bermerk', 0.15816, '2020-04-12 15:59:34', NULL),
(131, 17, 'Air isi ulang', 0.15816, '2020-04-12 15:59:34', NULL),
(132, 17, 'Ledeng meteran', 0.15816, '2020-04-12 15:59:34', NULL),
(133, 17, 'Ledeng eceran', 0.15816, '2020-04-12 15:59:34', NULL),
(134, 17, 'Sumur bor/pompa', 0.15816, '2020-04-12 15:59:34', NULL),
(135, 17, 'Sumur terlindungi', 0.15816, '2020-04-12 15:59:34', NULL),
(136, 17, 'Sumur tak terlindungi', 0.796342, '2020-04-12 15:59:34', NULL),
(137, 17, 'Mata air terlindungi', 0.796342, '2020-04-12 15:59:34', NULL),
(138, 17, 'Mata air tak terlindungi', 1.3702, '2020-04-12 15:59:34', NULL),
(139, 17, 'Air sungai/danau/waduk', 2.30304, '2020-04-12 15:59:34', NULL),
(140, 17, 'Air hujan', 1.3702, '2020-04-12 15:59:34', NULL),
(141, 17, 'Lainnya', 2.30304, '2020-04-12 15:59:34', NULL),
(142, 18, 'Membeli eceran', 0.474481, '2020-04-12 15:59:34', NULL),
(143, 18, 'Langganan', 0.474481, '2020-04-12 15:59:34', NULL),
(144, 18, 'Tidak membeli', 8.93917, '2020-04-12 15:59:34', NULL),
(145, 19, 'Listrik PLN', 1.46937, '2020-04-12 15:59:34', NULL),
(146, 19, 'Listrik non PLN', 0.145019, '2020-04-12 15:59:34', NULL),
(147, 19, 'Bukan listrik', 1.40779, '2020-04-12 15:59:34', NULL),
(148, 19, '450 watt', 0.83757, '2020-04-12 15:59:34', NULL),
(149, 19, '900 watt', 0.486784, '2020-04-12 15:59:34', NULL),
(150, 19, '1.300 watt', 0.0966796, '2020-04-12 15:59:34', NULL),
(151, 19, '2.200 watt', 0.0966796, '2020-04-12 15:59:34', NULL),
(152, 19, '> 2.200 watt', 0.0966796, '2020-04-12 15:59:34', NULL),
(153, 19, 'tanpa meteran', 1.40779, '2020-04-12 15:59:34', NULL),
(154, 20, 'Listrik ', 0.290039, '2020-04-12 15:59:34', NULL),
(155, 20, 'Gas > 3 kg ', 0.290039, '2020-04-12 15:59:34', NULL),
(156, 20, 'Gas 3 Kg', 0.486784, '2020-04-12 15:59:34', NULL),
(157, 20, 'Gas kota / biogas', 0.486784, '2020-04-12 15:59:34', NULL),
(158, 20, 'Minyak tanah', 0.418785, '2020-04-12 15:59:34', NULL),
(159, 20, 'Briket', 0.418785, '2020-04-12 15:59:34', NULL),
(160, 20, 'Arang', 0.418785, '2020-04-12 15:59:34', NULL),
(161, 20, 'Kayu bakar', 0.418785, '2020-04-12 15:59:34', NULL),
(162, 20, 'Tidak memasak dirumah', 2.81558, '2020-04-12 15:59:34', NULL),
(163, 21, 'Sendiri', 0.474481, '2020-04-12 15:59:34', NULL),
(164, 21, 'Bersama', 0.796342, '2020-04-12 15:59:34', NULL),
(165, 21, 'Umum', 1.3702, '2020-04-12 15:59:34', NULL),
(166, 21, 'Tidak ada ', 2.30304, '2020-04-12 15:59:34', NULL),
(167, 21, 'Leher angsa', 0.474481, '2020-04-12 15:59:34', NULL),
(168, 21, 'Plengsengan', 0.796342, '2020-04-12 15:59:34', NULL),
(169, 21, 'Cemplung/cebluk', 1.3702, '2020-04-12 15:59:34', NULL),
(170, 21, 'Tidak pakai', 2.30304, '2020-04-12 15:59:34', NULL),
(171, 22, 'Tangki ', 0.474481, '2020-04-12 15:59:34', NULL),
(172, 22, 'SPAL', 0.474481, '2020-04-12 15:59:34', NULL),
(173, 22, 'Lubang tanah', 4.33308, '2020-04-12 15:59:34', NULL),
(174, 22, 'Kolam/sawah/danau/laut ', 1.53536, '2020-04-12 15:59:34', NULL),
(175, 22, 'Pantai/tanah lapang/kebun ', 1.53536, '2020-04-12 15:59:34', NULL),
(176, 22, 'Lainnya ', 1.53536, '2020-04-12 15:59:34', NULL),
(177, 23, 'Tabung gas 5.5 kg atau lebih ', 2.18128, '2020-04-12 15:59:34', NULL),
(178, 23, 'Lemari es/kulkas ', 0.0234801, '2020-04-12 15:59:34', NULL),
(179, 23, 'AC ', 0.0234801, '2020-04-12 15:59:34', NULL),
(180, 23, 'Pemanas air (water heater) ', 0.0234801, '2020-04-12 15:59:34', NULL),
(181, 23, 'Telepon ruma (PSTN) ', 0.0234801, '2020-04-12 15:59:34', NULL),
(182, 23, 'Televisi ', 0.236446, '2020-04-12 15:59:34', NULL),
(183, 23, 'Emas/Perhiasan dan tabungan (senilai 10 gr atau lebih) ', 0.0234801, '2020-04-12 15:59:34', NULL),
(184, 23, 'Komputer/laptop ', 0.0234801, '2020-04-12 15:59:34', NULL),
(185, 23, 'Sepeda ', 0.236446, '2020-04-12 15:59:34', NULL),
(186, 23, 'Sepeda motor ', 0.0234801, '2020-04-12 15:59:34', NULL),
(187, 23, 'Mobil ', 0.0234801, '2020-04-12 15:59:34', NULL),
(188, 23, 'Perahu ', 0.0234801, '2020-04-12 15:59:34', NULL),
(189, 23, 'Motor tempel ', 0.0234801, '2020-04-12 15:59:34', NULL),
(190, 23, 'Perahu motor ', 0.0234801, '2020-04-12 15:59:34', NULL),
(191, 23, 'Kapal ', 0.0234801, '2020-04-12 15:59:34', NULL),
(192, 24, 'Lahan ', 1.46797, '2020-04-12 15:59:34', NULL),
(193, 24, 'Rumah ditempat lain ', 1.46797, '2020-04-12 15:59:34', NULL),
(194, 25, 'Sapi ', 0.569889, '2020-04-12 15:59:34', NULL),
(195, 25, 'Kerbau ', 0.569889, '2020-04-12 15:59:34', NULL),
(196, 25, 'Kuda ', 0.569889, '2020-04-12 15:59:34', NULL),
(197, 25, 'Babi ', 1.70967, '2020-04-12 15:59:34', NULL),
(198, 25, 'Kambing/domba ', 1.70967, '2020-04-12 15:59:34', NULL),
(199, 26, 'Ya ', 2.14242, '2020-04-12 15:59:34', NULL),
(200, 26, 'Tidak ', 6.42727, '2020-04-12 15:59:34', NULL),
(201, 27, 'Kartu keluarga sejahtera (KKS)/Kartu Perlindungan Sosial (KPS) ', 1.7042, '2020-04-12 15:59:34', NULL),
(202, 27, 'Kartu Indonesia Pintar (KIP)/Bantuan Siswa Miskin (BSM) ', 1.7042, '2020-04-12 15:59:34', NULL),
(203, 27, 'Kartu Indonesia Sehat (KIS)/BPJS kesehatan/JAMSOSTEK ', 1.7042, '2020-04-12 15:59:34', NULL),
(204, 27, 'BPJS kesehatan peserta mandiri ', 1.17919, '2020-04-12 15:59:34', NULL),
(205, 27, 'Jaminan sosial tenaga kerja (JAMSOSTEK)/ BPJS ketenagakerjaan ', 1.17919, '2020-04-12 15:59:34', NULL),
(206, 27, 'Asusransi kesehatan lainnya ', 1.17919, '2020-04-12 15:59:34', NULL),
(207, 27, 'Program keluarga harapan (PKH) ', 1.7042, '2020-04-12 15:59:34', NULL),
(208, 27, 'Beras untuk rakyat miskin ', 1.7042, '2020-04-12 15:59:34', NULL),
(209, 27, 'Kredit Usaha Rakyat (KUR) ', 1.7042, '2020-04-12 15:59:34', NULL);

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
  `IdEkonomi` int(10) UNSIGNED NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id_Survey`, `IdJenisPenerima`, `IdAset`, `IdPengenalanTempat`, `IdPerumahan`, `IdPetugas`, `IdEkonomi`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, 0, 1, 1, 1, '2020-04-12 11:13:55', '2020-04-12 19:02:33'),
(2, 1, 0, 0, 0, 2, 2, 1, '2020-04-12 12:08:00', '2020-04-12 19:02:36'),
(3, 1, 0, 0, 0, 3, 3, 0, '2020-04-12 16:21:49', '2020-04-12 16:21:49'),
(4, 1, 0, 0, 0, 4, 4, 0, '2020-04-12 16:25:07', '2020-04-12 16:25:07'),
(5, 2, 1, 1, 1, 5, 0, 0, '2020-04-16 14:05:14', '2020-04-16 14:05:14'),
(6, 2, 2, 2, 2, 6, 0, 1, '2020-04-16 15:03:14', '2020-04-16 15:03:28'),
(7, 2, 3, 3, 3, 7, 0, 0, '2020-04-16 18:06:59', '2020-04-16 18:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `tanggunganpendidikan`
--

CREATE TABLE `tanggunganpendidikan` (
  `IdTanggunganPendidikan` int(10) UNSIGNED NOT NULL,
  `IdEkonomi` int(10) UNSIGNED NOT NULL,
  `IdPengenalanTempat` int(10) UNSIGNED DEFAULT NULL,
  `NamaSekolah` varchar(200) DEFAULT NULL,
  `NISNNoKTM` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `JumlahKambing` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ternak`
--

INSERT INTO `ternak` (`IdTernak`, `JumlahSapi`, `JumlahKerbau`, `JumlahKuda`, `JumlahBabi`, `JumlahKambing`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 0, 0, 0, '2020-04-16 14:05:14', '2020-04-16 14:05:14'),
(2, 0, 0, 0, 0, 0, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 0, 0, 0, 0, 0, '2020-04-16 18:06:59', '2020-04-16 18:06:59');

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
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenisusaha`
--
ALTER TABLE `jenisusaha`
  ADD PRIMARY KEY (`IdJenisUsaha`) USING BTREE;

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `kriteria_FKIndex1` (`indikator_id`);

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
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_kriteria_FKIndex1` (`kriteria_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aset`
--
ALTER TABLE `aset`
  MODIFY `IdAset` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `asetbergerak`
--
ALTER TABLE `asetbergerak`
  MODIFY `IdAsetBergerak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `asettidakbergerak`
--
ALTER TABLE `asettidakbergerak`
  MODIFY `IdAsetTidakBergerak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ekonomi`
--
ALTER TABLE `ekonomi`
  MODIFY `IdEkonomi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indikator`
--
ALTER TABLE `indikator`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenisusaha`
--
ALTER TABLE `jenisusaha`
  MODIFY `IdJenisUsaha` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kartuidentitas`
--
ALTER TABLE `kartuidentitas`
  MODIFY `idKartuIdentitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `IdPengenalanTempat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `IdPengguna` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perorangan`
--
ALTER TABLE `perorangan`
  MODIFY `IdEkonomi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perumahan`
--
ALTER TABLE `perumahan`
  MODIFY `IdPerumahan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `IdPetugas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `IdProgram` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id_Survey` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tanggunganpendidikan`
--
ALTER TABLE `tanggunganpendidikan`
  MODIFY `IdTanggunganPendidikan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ternak`
--
ALTER TABLE `ternak`
  MODIFY `IdTernak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD CONSTRAINT `kriteria_ibfk_1` FOREIGN KEY (`indikator_id`) REFERENCES `indikator` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD CONSTRAINT `sub_kriteria_ibfk_1` FOREIGN KEY (`kriteria_id`) REFERENCES `kriteria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
