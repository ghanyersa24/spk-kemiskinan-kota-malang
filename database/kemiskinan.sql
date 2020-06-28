-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2020 pada 05.15
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

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
-- Fungsi
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
-- Struktur dari tabel `aset`
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
-- Dumping data untuk tabel `aset`
--

INSERT INTO `aset` (`IdAset`, `IdTernak`, `IdAsetTidakBergerak`, `IdProgram`, `IdAsetBergerak`, `IdJenisUsaha`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, '2020-04-16 14:05:14', '2020-04-16 16:33:56'),
(2, 2, 2, 2, 2, 1, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 3, 3, 3, 3, 2, '2020-04-16 18:06:59', '2020-04-16 18:06:59'),
(4, 4, 4, 4, 4, 3, '2020-05-07 12:08:20', '2020-05-07 12:08:20'),
(5, 5, 5, 5, 5, 4, '2020-05-07 12:11:36', '2020-05-07 12:11:36'),
(6, 6, 6, 6, 6, 5, '2020-05-07 12:14:50', '2020-05-07 12:14:50'),
(7, 7, 7, 7, 7, 6, '2020-05-07 12:18:10', '2020-05-07 12:18:10'),
(8, 8, 8, 8, 8, 7, '2020-05-07 12:26:49', '2020-05-07 12:26:49'),
(9, 9, 9, 9, 9, 8, '2020-05-07 12:31:48', '2020-05-07 12:31:48'),
(10, 10, 10, 10, 10, 9, '2020-05-07 12:40:06', '2020-05-07 12:40:06'),
(11, 11, 11, 11, 11, 10, '2020-05-07 12:42:37', '2020-05-07 12:42:37'),
(12, 12, 12, 12, 12, 11, '2020-05-07 12:45:21', '2020-05-07 12:45:21'),
(13, 13, 13, 13, 13, 12, '2020-05-07 12:47:50', '2020-05-07 12:47:50'),
(14, 14, 14, 14, 14, 13, '2020-05-07 13:14:49', '2020-05-07 13:14:49'),
(15, 15, 15, 15, 15, 14, '2020-05-07 14:27:29', '2020-05-07 14:27:29'),
(16, 16, 16, 16, 16, 15, '2020-05-07 14:30:11', '2020-05-07 14:30:11'),
(17, 17, 17, 17, 17, 16, '2020-05-07 14:32:12', '2020-05-07 14:32:12'),
(18, 18, 18, 18, 18, 17, '2020-05-07 14:34:06', '2020-05-07 14:34:06'),
(19, 19, 19, 19, 19, 18, '2020-05-07 14:36:41', '2020-05-07 14:36:41'),
(20, 20, 20, 20, 20, 19, '2020-05-07 14:39:16', '2020-05-07 14:39:16'),
(21, 21, 21, 21, 21, 20, '2020-05-07 14:41:46', '2020-05-07 14:41:46'),
(22, 22, 22, 22, 22, 21, '2020-05-07 14:44:47', '2020-05-07 14:44:47'),
(23, 23, 23, 23, 23, 22, '2020-05-07 14:46:40', '2020-05-07 14:46:40'),
(24, 24, 24, 24, 24, 23, '2020-05-07 14:51:44', '2020-05-07 14:51:44'),
(25, 25, 25, 25, 25, 24, '2020-05-07 14:54:15', '2020-05-07 14:54:15'),
(26, 26, 26, 26, 26, 25, '2020-05-07 14:56:19', '2020-05-07 14:56:19'),
(27, 27, 27, 27, 27, 26, '2020-05-07 14:58:18', '2020-05-07 14:58:18'),
(28, 28, 28, 28, 28, 27, '2020-05-07 15:01:44', '2020-05-07 15:01:44'),
(29, 29, 29, 29, 29, 28, '2020-05-07 15:04:10', '2020-05-07 15:04:10'),
(30, 30, 30, 30, 30, 29, '2020-05-07 15:05:47', '2020-05-07 15:05:47'),
(31, 31, 31, 31, 31, 30, '2020-05-07 15:07:40', '2020-05-07 15:07:40'),
(32, 32, 32, 32, 32, 31, '2020-05-07 15:09:28', '2020-05-07 15:09:28'),
(33, 33, 33, 33, 33, 32, '2020-05-07 15:10:57', '2020-05-07 15:10:57'),
(34, 34, 34, 34, 34, 33, '2020-05-27 13:25:13', '2020-05-27 13:25:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `asetbergerak`
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
-- Dumping data untuk tabel `asetbergerak`
--

INSERT INTO `asetbergerak` (`IdAsetBergerak`, `AdaTabungGas`, `AdaLemariEs`, `AdaAC`, `AdaPemanas`, `AdaTelepon`, `AdaTv`, `AdaEmas`, `AdaLaptop`, `AdaSepeda`, `AdaMotor`, `AdaMobil`, `AdaPerahu`, `AdaMotorTempel`, `AdaPerahuMotor`, `AdaKapal`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, '2020-04-16 14:05:13', '2020-04-16 17:08:34'),
(2, 0, 1, 0, 0, 1, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-04-16 18:06:59', '2020-04-16 18:06:59'),
(4, 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 12:08:20', '2020-05-27 14:01:57'),
(5, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 12:11:36', '2020-05-07 12:11:36'),
(6, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 12:14:50', '2020-05-07 12:14:50'),
(7, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 12:18:10', '2020-05-07 12:18:10'),
(8, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-07 12:26:49', '2020-05-07 12:26:49'),
(9, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-07 12:31:48', '2020-05-07 12:31:48'),
(10, 1, 1, 1, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, '2020-05-07 12:40:06', '2020-05-07 12:40:06'),
(11, 1, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 12:42:37', '2020-05-27 16:09:27'),
(12, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, '2020-05-07 12:45:21', '2020-05-07 12:45:21'),
(13, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 12:47:50', '2020-05-07 12:47:50'),
(14, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 13:14:49', '2020-05-27 14:57:14'),
(15, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 14:27:29', '2020-05-07 14:27:29'),
(16, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 14:30:11', '2020-05-07 14:30:11'),
(17, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 14:32:12', '2020-05-07 14:32:12'),
(18, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, '2020-05-07 14:34:06', '2020-05-07 14:34:06'),
(19, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 14:36:41', '2020-05-07 14:36:41'),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 14:39:16', '2020-05-07 14:39:16'),
(21, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 14:41:46', '2020-05-07 14:41:46'),
(22, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 14:44:47', '2020-05-07 14:44:47'),
(23, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 14:46:40', '2020-05-07 14:46:40'),
(24, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 14:51:44', '2020-05-07 14:51:44'),
(25, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 14:54:15', '2020-05-07 14:54:15'),
(26, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, '2020-05-07 14:56:19', '2020-05-07 14:56:19'),
(27, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 14:58:18', '2020-05-27 16:23:19'),
(28, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 15:01:44', '2020-05-07 15:01:44'),
(29, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 15:04:10', '2020-05-07 15:04:10'),
(30, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, '2020-05-07 15:05:47', '2020-05-27 15:09:38'),
(31, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 15:07:40', '2020-05-07 15:07:40'),
(32, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, '2020-05-07 15:09:28', '2020-05-07 15:09:28'),
(33, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-07 15:10:57', '2020-05-07 15:10:57'),
(34, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, '2020-05-27 13:25:13', '2020-05-27 13:25:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `asettidakbergerak`
--

CREATE TABLE `asettidakbergerak` (
  `IdAsetTidakBergerak` int(10) UNSIGNED NOT NULL,
  `LuasAtb` tinyint(4) DEFAULT NULL,
  `RumahLain` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `asettidakbergerak`
--

INSERT INTO `asettidakbergerak` (`IdAsetTidakBergerak`, `LuasAtb`, `RumahLain`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '2020-04-16 14:05:13', '2020-04-16 14:05:13'),
(2, 0, 0, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 0, 0, '2020-04-16 18:06:59', '2020-04-16 18:06:59'),
(4, 88, 0, '2020-05-07 12:08:20', '2020-05-07 12:08:20'),
(5, 0, 0, '2020-05-07 12:11:36', '2020-05-07 12:11:36'),
(6, 24, 0, '2020-05-07 12:14:50', '2020-05-07 12:14:50'),
(7, 0, 0, '2020-05-07 12:18:10', '2020-05-07 12:18:10'),
(8, 30, 0, '2020-05-07 12:26:49', '2020-05-07 12:26:49'),
(9, 0, 0, '2020-05-07 12:31:48', '2020-05-07 12:31:48'),
(10, 98, 0, '2020-05-07 12:40:06', '2020-05-07 12:40:06'),
(11, 88, 0, '2020-05-07 12:42:37', '2020-05-07 12:42:37'),
(12, 24, 0, '2020-05-07 12:45:21', '2020-05-07 12:45:21'),
(13, 30, 0, '2020-05-07 12:47:50', '2020-05-07 12:47:50'),
(14, 0, 0, '2020-05-07 13:14:49', '2020-05-27 16:15:39'),
(15, 87, 0, '2020-05-07 14:27:29', '2020-05-07 14:27:29'),
(16, 0, 0, '2020-05-07 14:30:11', '2020-05-07 14:30:11'),
(17, 72, 0, '2020-05-07 14:32:12', '2020-05-07 14:32:12'),
(18, 0, 0, '2020-05-07 14:34:06', '2020-05-07 14:34:06'),
(19, 0, 0, '2020-05-07 14:36:41', '2020-05-07 14:36:41'),
(20, 0, 0, '2020-05-07 14:39:16', '2020-05-07 14:39:16'),
(21, 0, 0, '2020-05-07 14:41:46', '2020-05-07 14:41:46'),
(22, 0, 0, '2020-05-07 14:44:47', '2020-05-07 14:44:47'),
(23, 0, 0, '2020-05-07 14:46:40', '2020-05-07 14:46:40'),
(24, 115, 0, '2020-05-07 14:51:44', '2020-05-07 14:51:44'),
(25, 40, 0, '2020-05-07 14:54:15', '2020-05-07 14:54:15'),
(26, 68, 0, '2020-05-07 14:56:19', '2020-05-07 14:56:19'),
(27, 0, 0, '2020-05-07 14:58:18', '2020-05-27 16:23:19'),
(28, 115, 0, '2020-05-07 15:01:44', '2020-05-07 15:01:44'),
(29, 40, 0, '2020-05-07 15:04:10', '2020-05-07 15:04:10'),
(30, 68, 0, '2020-05-07 15:05:47', '2020-05-07 15:05:47'),
(31, 0, 0, '2020-05-07 15:07:40', '2020-05-07 15:07:40'),
(32, 0, 0, '2020-05-07 15:09:28', '2020-05-07 15:09:28'),
(33, 0, 0, '2020-05-07 15:10:57', '2020-05-07 15:10:57'),
(34, 0, 0, '2020-05-27 13:25:13', '2020-05-27 13:25:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekonomi`
--

CREATE TABLE `ekonomi` (
  `IdEkonomi` int(10) UNSIGNED NOT NULL,
  `IdKeluarga` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `indikator`
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
-- Dumping data untuk tabel `indikator`
--

INSERT INTO `indikator` (`id`, `indikator`, `bobot_indikator`, `tujuan`, `created_at`, `updated_at`) VALUES
(1, 'Kesehatan', 29.7258, 'individu', '2020-04-12 15:58:11', NULL),
(2, 'Pendidikan', 16.3781, 'individu', '2020-04-12 15:58:11', NULL),
(3, 'Ekonomi', 53.8961, 'individu', '2020-04-12 15:58:11', NULL),
(4, 'Perumahan', 66.6667, 'keluarga', '2020-04-19 15:53:33', NULL),
(5, 'Asset', 33.3333, 'keluarga', '2020-04-19 15:53:26', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisusaha`
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
-- Dumping data untuk tabel `jenisusaha`
--

INSERT INTO `jenisusaha` (`IdJenisUsaha`, `StaUsaha`, `JumlahPekerja`, `TempatUsaha`, `OmsetUsaha`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '', 0, '2020-04-16 15:03:13', '2020-04-16 16:34:06'),
(2, 2, 0, '', 0, '2020-04-16 18:06:59', '2020-04-16 18:06:59'),
(3, 2, 0, '', 0, '2020-05-07 12:08:20', '2020-05-07 12:08:20'),
(4, 2, 0, '', 0, '2020-05-07 12:11:36', '2020-05-07 12:11:36'),
(5, 1, 10, 'Warung Kelontong', 100000, '2020-05-07 12:14:50', '2020-05-07 12:14:50'),
(6, 2, 0, '', 0, '2020-05-07 12:18:10', '2020-05-07 12:18:10'),
(7, 2, 0, '', 0, '2020-05-07 12:26:49', '2020-05-07 12:26:49'),
(8, 2, 0, '', 0, '2020-05-07 12:31:48', '2020-05-07 12:31:48'),
(9, 2, 0, '', 0, '2020-05-07 12:40:06', '2020-05-07 12:40:06'),
(10, 2, 0, '', 0, '2020-05-07 12:42:37', '2020-05-07 12:42:37'),
(11, 2, 0, '', 0, '2020-05-07 12:45:21', '2020-05-07 12:45:21'),
(12, 2, 0, '', 0, '2020-05-07 12:47:50', '2020-05-07 12:47:50'),
(13, 1, 1, '3', 1, '2020-05-07 13:14:49', '2020-05-07 13:14:49'),
(14, 2, 0, '', 0, '2020-05-07 14:27:28', '2020-05-07 14:27:28'),
(15, 2, 0, '', 0, '2020-05-07 14:30:11', '2020-05-07 14:30:11'),
(16, 2, 0, '', 0, '2020-05-07 14:32:12', '2020-05-07 14:32:12'),
(17, 2, 0, '', 0, '2020-05-07 14:34:06', '2020-05-07 14:34:06'),
(18, 2, 0, '', 0, '2020-05-07 14:36:40', '2020-05-07 14:36:40'),
(19, 2, 0, '', 0, '2020-05-07 14:39:15', '2020-05-07 14:39:15'),
(20, 2, 0, '', 0, '2020-05-07 14:41:46', '2020-05-07 14:41:46'),
(21, 2, 0, '', 0, '2020-05-07 14:44:47', '2020-05-07 14:44:47'),
(22, 2, 0, '', 0, '2020-05-07 14:46:40', '2020-05-07 14:46:40'),
(23, 1, 13, 'Makanan', 500000, '2020-05-07 14:51:44', '2020-05-07 14:51:44'),
(24, 2, 0, '', 0, '2020-05-07 14:54:14', '2020-05-07 14:54:14'),
(25, 2, 0, '', 0, '2020-05-07 14:56:19', '2020-05-07 14:56:19'),
(26, 2, 0, '', 0, '2020-05-07 14:58:18', '2020-05-07 14:58:18'),
(27, 1, 16, 'Rental', 10000000, '2020-05-07 15:01:44', '2020-05-07 15:01:44'),
(28, 2, 0, '', 0, '2020-05-07 15:04:10', '2020-05-07 15:04:10'),
(29, 2, 0, '', 0, '2020-05-07 15:05:47', '2020-05-07 15:05:47'),
(30, 2, 0, '', 0, '2020-05-07 15:07:40', '2020-05-07 15:07:40'),
(31, 2, 0, '', 0, '2020-05-07 15:09:28', '2020-05-07 15:09:28'),
(32, 2, 0, '', 0, '2020-05-07 15:10:56', '2020-05-07 15:10:56'),
(33, 2, 0, '', 0, '2020-05-27 13:25:12', '2020-05-27 13:25:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartuidentitas`
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
-- Dumping data untuk tabel `kartuidentitas`
--

INSERT INTO `kartuidentitas` (`idKartuIdentitas`, `adaAktaKelahiran`, `adaKartuPelajar`, `adaKTP`, `adaSIM`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 1, 1, '2020-04-12 11:13:39', '2020-04-12 11:13:39'),
(2, 0, 0, 1, 1, '2020-04-12 11:13:55', '2020-04-12 11:13:55'),
(3, 0, 1, 0, 1, '2020-04-12 12:07:59', '2020-04-12 12:07:59'),
(4, 1, 0, 0, 0, '2020-04-12 16:21:49', '2020-04-12 16:21:49'),
(5, 1, 0, 0, 0, '2020-04-12 16:25:06', '2020-04-12 16:25:06'),
(6, 0, 0, 1, 0, '2020-05-07 06:14:02', '2020-05-07 06:14:02'),
(7, 0, 0, 1, 0, '2020-05-07 06:16:24', '2020-05-07 06:16:24'),
(8, 1, 0, 0, 0, '2020-05-07 06:19:16', '2020-05-07 06:19:16'),
(9, 1, 0, 0, 0, '2020-05-07 06:21:25', '2020-05-07 06:21:25'),
(10, 0, 0, 1, 0, '2020-05-07 06:34:04', '2020-05-07 06:34:04'),
(11, 0, 0, 1, 0, '2020-05-07 06:35:59', '2020-05-07 06:35:59'),
(12, 0, 0, 1, 0, '2020-05-07 12:05:53', '2020-05-07 12:05:53'),
(13, 1, 0, 0, 0, '2020-05-07 12:07:58', '2020-05-07 12:07:58'),
(14, 0, 0, 1, 0, '2020-05-07 12:11:33', '2020-05-07 12:11:33'),
(15, 0, 0, 1, 0, '2020-05-07 12:13:25', '2020-05-07 12:13:25'),
(16, 1, 0, 0, 0, '2020-05-07 12:15:32', '2020-05-07 12:15:32'),
(17, 0, 0, 1, 0, '2020-05-07 12:18:21', '2020-05-07 12:18:21'),
(18, 1, 0, 0, 0, '2020-05-07 12:21:06', '2020-05-07 12:21:06'),
(19, 0, 0, 1, 0, '2020-05-07 12:23:21', '2020-05-07 12:23:21'),
(20, 0, 0, 1, 0, '2020-05-07 12:26:30', '2020-05-07 12:26:30'),
(21, 0, 0, 1, 0, '2020-05-07 12:30:24', '2020-05-07 12:30:24'),
(22, 0, 0, 1, 0, '2020-05-07 12:33:12', '2020-05-07 12:33:12'),
(23, 0, 0, 1, 0, '2020-05-07 12:36:09', '2020-05-07 12:36:09'),
(24, 0, 0, 1, 0, '2020-05-07 12:38:36', '2020-05-07 12:38:36'),
(25, 0, 0, 1, 0, '2020-05-07 12:41:01', '2020-05-07 12:41:01'),
(26, 1, 0, 0, 0, '2020-05-07 12:43:31', '2020-05-07 12:43:31'),
(27, 1, 0, 0, 0, '2020-05-07 12:47:31', '2020-05-07 12:47:31'),
(28, 1, 0, 0, 0, '2020-05-07 12:52:25', '2020-05-07 12:52:25'),
(29, 1, 0, 0, 0, '2020-05-07 12:55:06', '2020-05-07 12:55:06'),
(30, 1, 0, 0, 0, '2020-05-07 12:57:44', '2020-05-07 12:57:44'),
(31, 1, 0, 0, 0, '2020-05-07 13:00:01', '2020-05-07 13:00:01'),
(32, 0, 0, 1, 0, '2020-05-07 13:01:57', '2020-05-07 13:01:57'),
(33, 0, 0, 1, 0, '2020-05-07 13:03:42', '2020-05-07 13:03:42'),
(34, 0, 0, 1, 0, '2020-05-07 13:07:14', '2020-05-07 13:07:14'),
(35, 0, 0, 1, 0, '2020-05-07 13:09:00', '2020-05-07 13:09:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `IdKecamatan` int(10) UNSIGNED NOT NULL,
  `NamaKecamatan` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
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
-- Struktur dari tabel `kriteria`
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
-- Dumping data untuk tabel `kriteria`
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
-- Struktur dari tabel `optionaset`
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
-- Struktur dari tabel `optionekonomi`
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
-- Struktur dari tabel `optionperumahan`
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
-- Struktur dari tabel `pengenalantempat`
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
-- Dumping data untuk tabel `pengenalantempat`
--

INSERT INTO `pengenalantempat` (`IdPengenalanTempat`, `IdKecamatan`, `IdKelurahan`, `NamaSLS`, `Alamat`, `NamaKRT`, `JumlahART`, `JumlahKeluarga`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1/3', 'Jalan', 'MUHAMMAD FAJAR', NULL, NULL, '2020-04-16 14:05:13', '2020-04-16 14:05:13'),
(2, 1, 55, '10/84', 'Aliqua Irure aut ve', 'Dolore ad nobis plac', NULL, NULL, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 5, 1, '1/1', 'AXSA', 'ADI SUTRISNO', NULL, NULL, '2020-04-16 18:06:59', '2020-04-16 18:06:59'),
(4, 3, 2, '8/9', 'Jalan Bunga kipas', 'Muhammad Fajar', NULL, NULL, '2020-05-07 12:08:20', '2020-05-07 12:08:20'),
(5, 2, 2, '8/4', 'Jalan bunga tulip', 'Adi Sutrisno', NULL, NULL, '2020-05-07 12:11:36', '2020-05-27 14:33:00'),
(6, 4, 8, '9/4', 'Jalan bunga lavender', 'Andik Wahyudi', NULL, NULL, '2020-05-07 12:14:50', '2020-05-07 12:14:50'),
(7, 2, 1, '10/1', 'Jalan ikan kakap', 'Yunata Krishar D', NULL, NULL, '2020-05-07 12:18:10', '2020-05-07 12:18:10'),
(8, 1, 3, '8/2', 'Jalan ikan piranha', 'Saminten', NULL, NULL, '2020-05-07 12:26:49', '2020-05-07 12:26:49'),
(9, 3, 5, '7/5', 'Jalan ikan tenggiri', 'Sukiman', NULL, NULL, '2020-05-07 12:31:48', '2020-05-07 12:31:48'),
(10, 4, 16, '7/9', 'JalanSukasari', 'Moch Sholeh', NULL, NULL, '2020-05-07 12:40:06', '2020-05-27 14:34:46'),
(11, 3, 3, '6/7', 'JalanPisangKipas', 'Sungkono', NULL, NULL, '2020-05-07 12:42:37', '2020-05-07 12:42:37'),
(12, 3, 3, '6/5', 'JalanKenangan', 'Suparto', NULL, NULL, '2020-05-07 12:45:21', '2020-05-07 12:45:21'),
(13, 3, 3, '6/5', 'KembangKipas', 'Asnan', NULL, NULL, '2020-05-07 12:47:50', '2020-05-07 12:47:50'),
(14, 1, 1, '5/8', 'Jalanarjosari', 'Joko Prasetiyo                                                                                      ', NULL, NULL, '2020-05-07 13:14:49', '2020-05-07 13:14:49'),
(15, 2, 3, '7/6', 'PisangKipasBarat', 'Juari', NULL, NULL, '2020-05-07 14:27:29', '2020-05-07 14:27:29'),
(16, 4, 14, '5/7', 'Candi', 'Asroi Lailam', NULL, NULL, '2020-05-07 14:30:11', '2020-05-07 14:30:11'),
(17, 3, 35, '5/6', 'Persanggahan1', 'Budi Hariyanto', NULL, NULL, '2020-05-07 14:32:12', '2020-05-07 14:32:12'),
(18, 3, 7, '3/2', 'IkanPiranha', 'Budi Djaya Warno', NULL, NULL, '2020-05-07 14:34:06', '2020-05-07 14:34:06'),
(19, 3, 18, '5/4', 'CandiPanggung', 'Dwi Setyo Mulyo', NULL, NULL, '2020-05-07 14:36:41', '2020-05-07 14:36:41'),
(20, 3, 13, '5/5', 'Jagakarsa', 'Witanto', NULL, NULL, '2020-05-07 14:39:16', '2020-05-07 14:39:16'),
(21, 3, 13, '5/5', 'Piranha', 'Sukirno', NULL, NULL, '2020-05-07 14:41:46', '2020-05-07 14:41:46'),
(22, 3, 14, '5/5', 'Kesamben', 'Solichudin', NULL, NULL, '2020-05-07 14:44:47', '2020-05-07 14:44:47'),
(23, 4, 1, '6/6', 'Kapodang', 'Ngari', NULL, NULL, '2020-05-07 14:46:40', '2020-05-07 14:46:40'),
(24, 1, 1, '5/5', 'SukarnoHatta', 'M. Solikin', NULL, NULL, '2020-05-07 14:51:44', '2020-05-07 14:51:44'),
(25, 3, 13, '8/1', 'Ngarin', 'Sentot Kurniadi', NULL, NULL, '2020-05-07 14:54:15', '2020-05-07 14:54:15'),
(26, 3, 3, '3/3', 'Balekambang', 'Dian Krisna Kuncoro', NULL, NULL, '2020-05-07 14:56:19', '2020-05-07 14:56:19'),
(27, 3, 1, '1/1', 'Rampal', 'Rudi Hartono', NULL, NULL, '2020-05-07 14:58:18', '2020-05-07 14:58:18'),
(28, 2, 3, '7/4', 'Rampal', 'Resiono', NULL, NULL, '2020-05-07 15:01:44', '2020-05-07 15:01:44'),
(29, 2, 1, '6/5', 'Jalan bunga kembang kertas', 'Roni Purnomo', NULL, NULL, '2020-05-07 15:04:10', '2020-05-07 15:04:10'),
(30, 2, 2, '2/2', 'Jalan bunga kembang kertas', 'Winarko', NULL, NULL, '2020-05-07 15:05:47', '2020-05-07 15:05:47'),
(31, 2, 3, '3/1', 'Jalan bunga kembang kertas', 'Mistarianto', NULL, NULL, '2020-05-07 15:07:40', '2020-05-07 15:07:40'),
(32, 2, 2, '3/4', 'KaretBivak', 'Imam Nurhadi', NULL, NULL, '2020-05-07 15:09:28', '2020-05-07 15:09:28'),
(33, 2, 2, '11/1', 'Jalan kerto aji', 'Yasin', NULL, NULL, '2020-05-07 15:10:56', '2020-05-07 15:10:56'),
(34, 4, 1, '10/12', 'JalanPisangKipasBarat', 'Adi Sutrisno', NULL, NULL, '2020-05-27 13:25:12', '2020-05-27 13:25:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
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
-- Struktur dari tabel `perorangan`
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
-- Dumping data untuk tabel `perorangan`
--

INSERT INTO `perorangan` (`IdEkonomi`, `NIK`, `IdTanggunganPendidikan`, `IdPengenalanTempat`, `Nama`, `NamaSLS`, `Alamat`, `HubKRT`, `NoKK`, `JnsKel`, `Umur`, `StaKawin`, `AktaNikah`, `AdaDiKK`, `AdaKartuIdentitas`, `StaHamil`, `JenisCacat`, `PenyakitKronis`, `PartisipasiSekolah`, `PendidikanTertinggi`, `KelasTertinggi`, `IjazahTertinggi`, `StaBekerja`, `LapanganUsaha`, `StatusPekerjaan`) VALUES
(1, 0000000076, NULL, 0, 'Sit soluta anim har', '9/4', 'In dolor atque earum', 2, 1, 1, 28, 1, 3, 1, 2, 2, 7, 1, 1, 4, 5, 4, 1, 2, 3),
(2, 0000000075, NULL, 0, 'Aliquam velit magna', '3/3', 'Quo tenetur qui labo', 6, 4, 1, 41, 2, 2, 2, 3, 1, 12, 8, 3, 10, 4, 4, 1, 13, 2),
(3, 4294967295, NULL, 0, 'NUR FITRI LESTARI', '1/5', 'sdfasfca', 2, 1, 2, 23, 2, 2, 1, 4, 2, 1, 1, 3, 1, 8, 2, 1, 13, 1),
(4, 0000002133, NULL, 0, 'SRI WINARTI', '1/2', 'FQDA', 1, 1, 2, 23, 1, 1, 2, 5, 2, 1, 1, 3, 4, 8, 3, 2, 21, 1),
(5, 4294967295, NULL, 0, 'Nur Fitri Lestari', '1/3', 'Jalan Bunga kipas', 1, 1, 2, 50, 2, 3, 1, 6, 2, 1, 1, 3, 1, 8, 2, 1, 13, 1),
(6, 4294967295, NULL, 0, 'Sri Winarti', '1/5', 'Jalan bunga tulip', 2, 1, 2, 53, 2, 3, 1, 7, 2, 1, 1, 3, 4, 8, 3, 2, 21, 1),
(7, 4294967295, NULL, 0, 'Alif Firmansyah', '4/2', 'Jalan bunga lavender', 5, 1, 1, 10, 1, 1, 1, 8, 2, 1, 1, 3, 3, 4, 1, 2, 21, 2),
(8, 4294967295, NULL, 0, 'Eko Winarto', '1/1', 'Jalan ikan kakap', 3, 2, 1, 34, 2, 3, 1, 9, 2, 1, 1, 3, 7, 8, 4, 1, 19, 4),
(9, 4294967295, NULL, 0, 'Nurul Wulandari', '1/2', 'Jalan ikan piranha', 4, 2, 2, 24, 2, 3, 2, 10, 1, 1, 1, 3, 7, 8, 4, 1, 12, 4),
(10, 4294967295, NULL, 0, 'Ponari', '1/5', 'Jalan ikan tenggiri', 1, 1, 1, 30, 2, 2, 1, 11, 2, 1, 1, 3, 4, 8, 3, 1, 12, 4),
(11, 4294967295, NULL, 0, 'Novi Triyanti                                                                                                                                                                                        ', '3/3', 'Jalan sukarno hatta', 3, 1, 2, 28, 1, 1, 1, 12, 1, 1, 1, 3, 1, 8, 2, 2, 1, 1),
(12, 4294967295, NULL, 0, 'Bayu Sugara                                                                                                                                                                                       ', '3/3', 'Jalan bunga andong', 5, 1, 1, 7, 1, 1, 1, 13, 2, 1, 1, 1, 1, 1, 1, 2, 21, 8),
(13, 4294967295, NULL, 0, 'Muslihah                                                                                                                                                                                      ', '7/2', 'Jalan bunga kembang kertas', 2, 1, 2, 44, 2, 2, 1, 14, 2, 1, 1, 3, 1, 8, 2, 1, 12, 1),
(14, 4294967295, NULL, 0, 'Bunari                                                                                                                                                                                          ', '5/2', 'Jalan kerto sentono', 1, 1, 2, 43, 2, 2, 1, 15, 2, 1, 1, 3, 1, 8, 2, 1, 6, 1),
(15, 4294967295, NULL, 0, 'Sumirah                                                                                                                                                                        ', '4/2', 'Jalan kerto asri', 2, 1, 2, 40, 3, 2, 1, 16, 2, 1, 1, 3, 4, 8, 3, 1, 12, 4),
(16, 4294967295, NULL, 0, 'Waginah                                                                                                                                                                  ', '2/7', 'Jalan kerto leksono', 3, 1, 2, 28, 1, 1, 1, 17, 2, 1, 1, 3, 1, 8, 2, 2, 21, 8),
(17, 4294967295, NULL, 0, 'Wahyu Winarto', '2/8', 'Jalan kerto aji', 5, 1, 1, 7, 1, 1, 2, 18, 2, 1, 1, 1, 1, 1, 1, 2, 21, 8),
(18, 4294967295, NULL, 0, 'Cahyono Adi', '3/9', 'Jalan candi panggung', 2, 1, 1, 44, 2, 3, 1, 19, 2, 1, 1, 3, 1, 8, 2, 1, 12, 1),
(19, 4294967295, NULL, 0, 'Joko Sasongko                                                                              ', '8/9', 'Jalan Jakarta', 1, 1, 1, 45, 2, 2, 1, 20, 2, 1, 1, 3, 1, 8, 2, 1, 6, 1),
(20, 4294967295, NULL, 0, 'Kasiati                                                                                                                                                                                                 ', '9/1', 'Jalan Bunga kipas', 2, 1, 2, 57, 2, 2, 1, 21, 2, 1, 1, 3, 1, 8, 2, 2, 21, 8),
(21, 4294967295, NULL, 0, 'Tutik Indrayani                                                                                                                                                                                         ', '6/9', 'Jalan bunga tulip', 3, 1, 2, 31, 2, 2, 1, 22, 2, 1, 1, 3, 7, 8, 4, 1, 18, 4),
(22, 4294967295, NULL, 0, 'Ahmad Fauzi                                                                                                                                                                                             ', '8/3', 'Jalan bunga lavender', 3, 1, 1, 23, 1, 1, 1, 23, 2, 1, 1, 3, 7, 8, 4, 2, 21, 8),
(23, 4294967295, NULL, 0, 'Ahmad Khoirudin Akbar                                                                                                                                                                                   ', '2/8', 'Jalan ikan kakap', 3, 1, 1, 20, 1, 1, 2, 24, 2, 1, 1, 3, 7, 1, 3, 2, 21, 8),
(24, 4294967295, NULL, 0, 'Sistiani                                                                                                                                                                                                ', '2/9', 'Jalan ikan piranha', 1, 1, 2, 63, 4, 1, 1, 25, 2, 1, 1, 3, 4, 1, 2, 1, 12, 2),
(25, 4294967295, NULL, 0, 'Supriadi                                                                                                                                                                                                ', '1/1', 'Jalan ikan tenggiri', 1, 1, 1, 39, 2, 2, 1, 26, 2, 1, 1, 3, 7, 8, 4, 1, 21, 4),
(26, 4294967295, NULL, 0, 'Widyawati                                                                                                                                                                                               ', '8/9', 'Jalan sukarno hatta', 2, 1, 2, 34, 2, 2, 1, 27, 2, 1, 1, 3, 1, 8, 2, 2, 21, 8),
(27, 4294967295, NULL, 0, 'Deva Saputra                                                                                                                                                                                            ', '1/7', 'Jalan bunga andong', 3, 1, 1, 15, 1, 1, 1, 28, 2, 1, 1, 2, 4, 3, 2, 2, 21, 8),
(28, 4294967295, NULL, 0, 'Devi Nabila                                                                                                                                                                                             ', '3/9', 'Jalan bunga kembang kertas', 3, 1, 2, 12, 1, 1, 1, 29, 2, 1, 1, 2, 1, 6, 1, 2, 21, 8),
(29, 4294967295, NULL, 0, 'Natasha Maharani                                                                                                                                                                                        ', '4/8', 'Jalan kerto sentono', 3, 1, 2, 4, 1, 1, 1, 30, 2, 1, 1, 1, 1, 1, 1, 2, 21, 8),
(30, 4294967295, NULL, 0, 'Riskyaatul Hasanah                                                                                                                                                                                      ', '7/9', 'Jalan kerto asri', 3, 1, 1, 17, 1, 1, 1, 31, 2, 1, 1, 2, 4, 2, 2, 2, 21, 1),
(31, 4294967295, NULL, 0, 'Sarni                                                                                                                                                                                                   ', '1/3', 'Jalan kerto leksono', 1, 1, 2, 70, 4, 1, 1, 32, 2, 1, 1, 3, 4, 8, 3, 2, 21, 1),
(32, 4294967295, NULL, 0, 'Ngadi                                                                                                                                                                                                   ', '7/4', 'Jalan kerto aji', 1, 1, 1, 50, 2, 2, 1, 33, 2, 1, 1, 3, 1, 4, 1, 1, 21, 4),
(33, 4294967295, NULL, 0, 'Lilis Sumiarti                                                                                                                                                                                          ', '3/8', 'Jalan candi panggung', 2, 1, 2, 40, 2, 2, 1, 34, 2, 1, 1, 3, 1, 3, 1, 2, 21, 1),
(34, 4294967295, NULL, 0, 'Tika Sumardika                                                                                                                                                                                          ', '8/3', 'Jalan Jakarta', 3, 1, 2, 23, 1, 1, 1, 35, 2, 1, 1, 3, 7, 8, 3, 2, 21, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perumahan`
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
-- Dumping data untuk tabel `perumahan`
--

INSERT INTO `perumahan` (`IdPerumahan`, `StaBangunan`, `StaLahan`, `LuasLantai`, `Lantai`, `Dinding`, `KondisiDinding`, `Atap`, `KondisiAtap`, `JumlahKamar`, `SumberAirminum`, `MemperolehAirminum`, `SumberPenerangan`, `Daya`, `BahanMasak`, `FasilitasBAB`, `Kloset`, `BuangTinja`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 30, 2, 1, 2, 4, 2, 3, 3, 2, 1, 1, 3, 1, 1, 2, '2020-04-16 14:05:13', '2020-04-16 14:05:13'),
(2, 5, 4, 9, 4, 4, 2, 6, 2, 2, 11, 1, 2, 6, 6, 1, 4, 3, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 1, 1, 30, 9, 1, 2, 4, 2, 2, 12, 3, 1, 6, 3, 1, 1, 2, '2020-04-16 18:06:59', '2020-04-16 18:06:59'),
(4, 1, 1, 40, 2, 1, 2, 4, 2, 3, 3, 2, 1, 1, 3, 1, 1, 2, '2020-05-07 12:08:20', '2020-05-07 12:08:20'),
(5, 1, 1, 40, 9, 1, 2, 4, 2, 2, 12, 3, 1, 6, 3, 1, 1, 2, '2020-05-07 12:11:36', '2020-05-27 14:37:00'),
(6, 1, 1, 24, 6, 1, 1, 1, 1, 2, 5, 1, 1, 2, 3, 1, 1, 2, '2020-05-07 12:14:50', '2020-05-07 12:14:50'),
(7, 3, 1, 72, 4, 1, 2, 4, 2, 2, 3, 2, 1, 6, 3, 1, 1, 1, '2020-05-07 12:18:10', '2020-05-27 14:12:52'),
(8, 1, 1, 30, 4, 1, 2, 4, 2, 2, 6, 3, 1, 1, 3, 1, 1, 4, '2020-05-07 12:26:49', '2020-05-07 12:26:49'),
(9, 3, 1, 30, 6, 1, 2, 4, 2, 1, 3, 2, 1, 1, 3, 1, 1, 1, '2020-05-07 12:31:48', '2020-05-07 12:31:48'),
(10, 1, 1, 90, 4, 1, 1, 5, 2, 3, 3, 2, 1, 2, 3, 1, 2, 3, '2020-05-07 12:40:06', '2020-05-07 12:40:06'),
(11, 1, 1, 40, 2, 1, 2, 4, 2, 3, 3, 2, 1, 1, 3, 1, 1, 2, '2020-05-07 12:42:37', '2020-05-07 12:42:37'),
(12, 1, 1, 24, 6, 1, 2, 5, 2, 2, 3, 2, 1, 2, 3, 3, 1, 4, '2020-05-07 12:45:21', '2020-05-07 12:45:21'),
(13, 3, 2, 30, 2, 1, 2, 4, 2, 2, 3, 2, 1, 2, 3, 1, 1, 2, '2020-05-07 12:47:50', '2020-05-07 12:47:50'),
(14, 2, 1, 50, 9, 4, 2, 4, 2, 2, 6, 3, 1, 6, 3, 3, 1, 4, '2020-05-07 13:14:49', '2020-05-07 13:14:49'),
(15, 1, 1, 80, 6, 1, 2, 4, 2, 3, 5, 3, 1, 2, 3, 1, 1, 1, '2020-05-07 14:27:29', '2020-05-07 14:27:29'),
(16, 2, 3, 20, 2, 1, 2, 4, 2, 2, 5, 3, 2, 6, 3, 3, 4, 4, '2020-05-07 14:30:11', '2020-05-07 14:30:11'),
(17, 1, 1, 72, 2, 1, 2, 4, 2, 2, 3, 2, 1, 2, 3, 1, 1, 1, '2020-05-07 14:32:12', '2020-05-07 14:32:12'),
(18, 5, 4, 17, 2, 1, 2, 4, 2, 2, 6, 3, 1, 1, 3, 1, 3, 3, '2020-05-07 14:34:06', '2020-05-07 14:34:06'),
(19, 1, 3, 60, 6, 1, 2, 4, 2, 4, 6, 3, 1, 6, 3, 1, 2, 4, '2020-05-07 14:36:41', '2020-05-07 14:36:41'),
(20, 3, 2, 50, 2, 1, 2, 4, 2, 2, 5, 3, 1, 1, 3, 1, 1, 4, '2020-05-07 14:39:16', '2020-05-07 14:39:16'),
(21, 1, 1, 45, 2, 1, 2, 4, 2, 2, 6, 3, 1, 1, 3, 1, 1, 1, '2020-05-07 14:41:46', '2020-05-07 14:41:46'),
(22, 5, 4, 40, 2, 1, 2, 4, 2, 2, 3, 3, 1, 6, 3, 4, 1, 6, '2020-05-07 14:44:47', '2020-05-07 14:44:47'),
(23, 1, 1, 36, 6, 1, 2, 4, 2, 3, 6, 3, 1, 2, 3, 1, 1, 1, '2020-05-07 14:46:40', '2020-05-27 15:05:17'),
(24, 1, 1, 115, 2, 1, 1, 4, 2, 3, 6, 3, 1, 1, 3, 1, 1, 3, '2020-05-07 14:51:44', '2020-05-27 15:06:16'),
(25, 1, 1, 40, 6, 1, 2, 6, 1, 2, 6, 3, 1, 2, 3, 1, 3, 4, '2020-05-07 14:54:15', '2020-05-07 14:54:15'),
(26, 1, 1, 60, 2, 1, 1, 1, 1, 4, 2, 1, 1, 1, 3, 1, 1, 2, '2020-05-07 14:56:19', '2020-05-07 14:56:19'),
(27, 3, 1, 21, 2, 1, 2, 4, 2, 1, 6, 3, 1, 1, 3, 1, 1, 1, '2020-05-07 14:58:18', '2020-05-07 14:58:18'),
(28, 1, 1, 50, 2, 1, 2, 4, 2, 2, 5, 3, 1, 1, 3, 1, 1, 3, '2020-05-07 15:01:44', '2020-05-07 15:01:44'),
(29, 1, 1, 45, 2, 1, 2, 4, 2, 2, 6, 3, 1, 2, 3, 1, 3, 4, '2020-05-07 15:04:10', '2020-05-07 15:04:10'),
(30, 1, 1, 40, 2, 1, 2, 4, 2, 2, 3, 1, 1, 1, 3, 1, 1, 2, '2020-05-07 15:05:47', '2020-05-07 15:05:47'),
(31, 1, 1, 45, 2, 1, 2, 4, 2, 2, 5, 3, 1, 1, 3, 1, 1, 1, '2020-05-07 15:07:40', '2020-05-07 15:07:40'),
(32, 3, 4, 24, 2, 1, 2, 4, 2, 2, 3, 2, 1, 6, 3, 1, 1, 1, '2020-05-07 15:09:28', '2020-05-07 15:09:28'),
(33, 1, 1, 40, 2, 1, 2, 4, 2, 2, 3, 3, 1, 6, 3, 4, 1, 6, '2020-05-07 15:10:57', '2020-05-07 15:10:57'),
(34, 1, 1, 40, 9, 1, 2, 4, 2, 2, 12, 3, 1, 6, 3, 1, 1, 2, '2020-05-27 13:25:13', '2020-05-27 13:25:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `IdPetugas` int(10) UNSIGNED NOT NULL,
  `TglPemeriksa` date DEFAULT NULL,
  `IdPemeriksa` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`IdPetugas`, `TglPemeriksa`, `IdPemeriksa`, `created_at`, `updated_at`) VALUES
(1, '2018-12-09', 1, '2020-04-12 11:13:55', '2020-04-12 11:13:55'),
(2, '1978-09-11', 1, '2020-04-12 12:07:59', '2020-04-12 12:07:59'),
(3, '2020-04-12', 1, '2020-04-12 16:21:49', '2020-04-12 16:21:49'),
(4, '2020-04-13', 1, '2020-04-12 16:25:07', '2020-04-12 16:25:07'),
(5, '2020-04-16', 1, '2020-04-16 14:05:14', '2020-04-16 14:05:14'),
(6, '1971-04-24', 1, '2020-04-16 15:03:14', '2020-04-16 15:03:14'),
(7, '2020-04-17', 1, '2020-04-16 18:06:59', '2020-04-16 18:06:59'),
(8, '2020-05-07', 1, '2020-05-07 06:14:02', '2020-05-07 06:14:02'),
(9, '2020-05-07', 1, '2020-05-07 06:16:24', '2020-05-07 06:16:24'),
(10, '2020-05-07', 1, '2020-05-07 06:19:16', '2020-05-07 06:19:16'),
(11, '2020-05-07', 1, '2020-05-07 06:21:25', '2020-05-07 06:21:25'),
(12, '2020-05-07', 1, '2020-05-07 06:34:04', '2020-05-07 06:34:04'),
(13, '2020-05-07', 1, '2020-05-07 06:35:59', '2020-05-07 06:35:59'),
(14, '2020-05-07', 1, '2020-05-07 12:05:53', '2020-05-07 12:05:53'),
(15, '2020-05-07', 1, '2020-05-07 12:07:58', '2020-05-07 12:07:58'),
(16, '2020-05-07', 1, '2020-05-07 12:08:20', '2020-05-07 12:08:20'),
(17, '2020-05-07', 1, '2020-05-07 12:11:33', '2020-05-07 12:11:33'),
(18, '2020-05-08', 1, '2020-05-07 12:11:36', '2020-05-07 12:11:36'),
(19, '2020-05-07', 1, '2020-05-07 12:13:25', '2020-05-07 12:13:25'),
(20, '2020-05-08', 1, '2020-05-07 12:14:50', '2020-05-07 12:14:50'),
(21, '2020-05-07', 1, '2020-05-07 12:15:32', '2020-05-07 12:15:32'),
(22, '2020-05-08', 1, '2020-05-07 12:18:10', '2020-05-07 12:18:10'),
(23, '2020-05-07', 1, '2020-05-07 12:18:21', '2020-05-07 12:18:21'),
(24, '2020-05-07', 1, '2020-05-07 12:21:06', '2020-05-07 12:21:06'),
(25, '2020-05-07', 1, '2020-05-07 12:23:21', '2020-05-07 12:23:21'),
(26, '2020-05-07', 1, '2020-05-07 12:26:30', '2020-05-07 12:26:30'),
(27, '2020-05-08', 1, '2020-05-07 12:26:49', '2020-05-07 12:26:49'),
(28, '2020-05-07', 1, '2020-05-07 12:30:24', '2020-05-07 12:30:24'),
(29, '2020-05-08', 1, '2020-05-07 12:31:48', '2020-05-07 12:31:48'),
(30, '2020-05-07', 1, '2020-05-07 12:33:12', '2020-05-07 12:33:12'),
(31, '2020-05-07', 1, '2020-05-07 12:36:09', '2020-05-07 12:36:09'),
(32, '2020-05-07', 1, '2020-05-07 12:38:36', '2020-05-07 12:38:36'),
(33, '2020-05-08', 1, '2020-05-07 12:40:06', '2020-05-07 12:40:06'),
(34, '2020-05-07', 1, '2020-05-07 12:41:01', '2020-05-07 12:41:01'),
(35, '2020-05-08', 1, '2020-05-07 12:42:37', '2020-05-07 12:42:37'),
(36, '2020-05-07', 1, '2020-05-07 12:43:31', '2020-05-07 12:43:31'),
(37, '2020-05-08', 1, '2020-05-07 12:45:21', '2020-05-07 12:45:21'),
(38, '2020-05-07', 1, '2020-05-07 12:47:31', '2020-05-07 12:47:31'),
(39, '2020-05-08', 1, '2020-05-07 12:47:50', '2020-05-07 12:47:50'),
(40, '2020-05-07', 1, '2020-05-07 12:52:25', '2020-05-07 12:52:25'),
(41, '2020-05-07', 1, '2020-05-07 12:55:06', '2020-05-07 12:55:06'),
(42, '2020-05-07', 1, '2020-05-07 12:57:44', '2020-05-07 12:57:44'),
(43, '2020-05-07', 1, '2020-05-07 13:00:01', '2020-05-07 13:00:01'),
(44, '2020-05-07', 1, '2020-05-07 13:01:57', '2020-05-07 13:01:57'),
(45, '2020-05-07', 1, '2020-05-07 13:03:42', '2020-05-07 13:03:42'),
(46, '2020-05-07', 1, '2020-05-07 13:07:14', '2020-05-07 13:07:14'),
(47, '2020-05-07', 1, '2020-05-07 13:09:00', '2020-05-07 13:09:00'),
(48, '2020-05-08', 1, '2020-05-07 13:14:49', '2020-05-07 13:14:49'),
(49, '2020-05-08', 1, '2020-05-07 14:27:29', '2020-05-07 14:27:29'),
(50, '2020-05-08', 1, '2020-05-07 14:30:11', '2020-05-07 14:30:11'),
(51, '2020-05-08', 1, '2020-05-07 14:32:12', '2020-05-07 14:32:12'),
(52, '2020-05-08', 1, '2020-05-07 14:34:06', '2020-05-07 14:34:06'),
(53, '2020-05-08', 1, '2020-05-07 14:36:41', '2020-05-07 14:36:41'),
(54, '2020-05-08', 1, '2020-05-07 14:39:16', '2020-05-07 14:39:16'),
(55, '2020-05-08', 1, '2020-05-07 14:41:46', '2020-05-07 14:41:46'),
(56, '2020-05-08', 1, '2020-05-07 14:44:47', '2020-05-07 14:44:47'),
(57, '2020-05-08', 1, '2020-05-07 14:46:40', '2020-05-07 14:46:40'),
(58, '2020-05-08', 1, '2020-05-07 14:51:44', '2020-05-07 14:51:44'),
(59, '2020-05-08', 1, '2020-05-07 14:54:15', '2020-05-07 14:54:15'),
(60, '2020-05-08', 1, '2020-05-07 14:56:19', '2020-05-07 14:56:19'),
(61, '2020-05-08', 1, '2020-05-07 14:58:18', '2020-05-07 14:58:18'),
(62, '2020-05-08', 1, '2020-05-07 15:01:44', '2020-05-07 15:01:44'),
(63, '2020-05-08', 1, '2020-05-07 15:04:10', '2020-05-07 15:04:10'),
(64, '2020-05-08', 1, '2020-05-07 15:05:47', '2020-05-07 15:05:47'),
(65, '2020-05-08', 1, '2020-05-07 15:07:40', '2020-05-07 15:07:40'),
(66, '2020-05-08', 1, '2020-05-07 15:09:28', '2020-05-07 15:09:28'),
(67, '2020-05-08', 1, '2020-05-07 15:10:57', '2020-05-07 15:10:57'),
(68, '2020-05-08', 1, '2020-05-27 13:25:13', '2020-05-27 13:25:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
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
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`IdProgram`, `StaKKS`, `StaKIP`, `StaKIS`, `StaBPJSMandiri`, `StaJamsostek`, `StaAsuransi`, `StaPkh`, `Raskin`, `StaKur`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 0, 0, 0, 0, 0, 1, 0, '2020-04-16 14:05:14', '2020-04-16 14:06:33'),
(2, 0, 1, 1, 0, 0, 1, 0, 1, 1, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 1, 0, 1, 0, 0, 0, 0, 0, 0, '2020-04-16 18:06:59', '2020-04-16 18:06:59'),
(4, 0, 1, 0, 0, 0, 0, 0, 1, 0, '2020-05-07 12:08:20', '2020-05-07 12:08:20'),
(5, 1, 0, 1, 0, 0, 0, 0, 0, 0, '2020-05-07 12:11:36', '2020-05-07 12:11:36'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-07 12:14:50', '2020-05-07 12:14:50'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-07 12:18:10', '2020-05-07 12:18:10'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-07 12:26:49', '2020-05-07 12:26:49'),
(9, 1, 0, 1, 0, 0, 0, 0, 1, 0, '2020-05-07 12:31:48', '2020-05-07 12:31:48'),
(10, 0, 0, 0, 0, 1, 0, 0, 1, 0, '2020-05-07 12:40:06', '2020-05-07 12:40:06'),
(11, 0, 1, 0, 0, 0, 0, 0, 1, 0, '2020-05-07 12:42:37', '2020-05-07 12:42:37'),
(12, 0, 1, 0, 0, 0, 0, 0, 1, 0, '2020-05-07 12:45:21', '2020-05-07 12:45:21'),
(13, 0, 1, 0, 0, 0, 0, 0, 1, 0, '2020-05-07 12:47:50', '2020-05-07 12:47:50'),
(14, 0, 0, 0, 0, 0, 0, 1, 1, 0, '2020-05-07 13:14:49', '2020-05-07 13:14:49'),
(15, 0, 0, 1, 0, 0, 0, 0, 1, 0, '2020-05-07 14:27:29', '2020-05-07 14:27:29'),
(16, 0, 0, 0, 0, 0, 0, 1, 0, 0, '2020-05-07 14:30:11', '2020-05-07 14:30:11'),
(17, 0, 1, 0, 0, 0, 0, 0, 1, 0, '2020-05-07 14:32:12', '2020-05-27 16:19:36'),
(18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2020-05-07 14:34:06', '2020-05-07 14:34:06'),
(19, 0, 1, 0, 0, 0, 0, 0, 1, 0, '2020-05-07 14:36:41', '2020-05-27 15:01:44'),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-07 14:39:16', '2020-05-07 14:39:16'),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-07 14:41:46', '2020-05-07 14:41:46'),
(22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2020-05-07 14:44:47', '2020-05-07 14:44:47'),
(23, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2020-05-07 14:46:40', '2020-05-07 14:46:40'),
(24, 1, 1, 1, 0, 0, 0, 0, 1, 0, '2020-05-07 14:51:44', '2020-05-07 14:51:44'),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-07 14:54:15', '2020-05-07 14:54:15'),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-07 14:56:19', '2020-05-07 14:56:19'),
(27, 0, 0, 1, 0, 0, 0, 0, 1, 0, '2020-05-07 14:58:18', '2020-05-27 16:23:19'),
(28, 1, 1, 1, 0, 0, 0, 0, 1, 0, '2020-05-07 15:01:44', '2020-05-07 15:01:44'),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-07 15:04:10', '2020-05-07 15:04:10'),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-07 15:05:47', '2020-05-07 15:05:47'),
(31, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-07 15:07:40', '2020-05-07 15:07:40'),
(32, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2020-05-07 15:09:28', '2020-05-07 15:09:28'),
(33, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2020-05-07 15:10:57', '2020-05-07 15:10:57'),
(34, 1, 0, 1, 0, 0, 0, 0, 0, 0, '2020-05-27 13:25:13', '2020-05-27 13:25:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kriteria`
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
-- Dumping data untuk tabel `sub_kriteria`
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
(26, 4, 'Tidak/belum ', 0, '2020-06-19 15:33:54', NULL),
(27, 4, 'Pernah sekolah ', 1.49085, '2020-06-19 15:33:22', NULL),
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
-- Struktur dari tabel `survey`
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
-- Dumping data untuk tabel `survey`
--

INSERT INTO `survey` (`id_Survey`, `IdJenisPenerima`, `IdAset`, `IdPengenalanTempat`, `IdPerumahan`, `IdPetugas`, `IdEkonomi`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, 0, 1, 1, 1, '2020-04-12 11:13:55', '2020-04-12 19:02:33'),
(2, 1, 0, 0, 0, 2, 2, 1, '2020-04-12 12:08:00', '2020-04-12 19:02:36'),
(3, 1, 0, 0, 0, 3, 3, 1, '2020-04-12 16:21:49', '2020-05-07 06:05:10'),
(4, 1, 0, 0, 0, 4, 4, 1, '2020-04-12 16:25:07', '2020-05-07 06:05:13'),
(5, 2, 1, 1, 1, 5, 0, 1, '2020-04-16 14:05:14', '2020-05-07 06:05:16'),
(6, 2, 2, 2, 2, 6, 0, 1, '2020-04-16 15:03:14', '2020-04-16 15:03:28'),
(7, 2, 3, 3, 3, 7, 0, 1, '2020-04-16 18:06:59', '2020-05-07 06:05:20'),
(8, 1, 0, 0, 0, 8, 5, 0, '2020-05-07 06:14:02', '2020-05-07 06:14:02'),
(9, 1, 0, 0, 0, 9, 6, 0, '2020-05-07 06:16:24', '2020-05-07 06:16:24'),
(10, 1, 0, 0, 0, 10, 7, 0, '2020-05-07 06:19:16', '2020-05-07 06:19:16'),
(11, 1, 0, 0, 0, 11, 8, 0, '2020-05-07 06:21:25', '2020-05-07 06:21:25'),
(12, 1, 0, 0, 0, 12, 9, 0, '2020-05-07 06:34:04', '2020-05-07 06:34:04'),
(13, 1, 0, 0, 0, 13, 10, 0, '2020-05-07 06:35:59', '2020-05-07 06:35:59'),
(14, 1, 0, 0, 0, 14, 11, 0, '2020-05-07 12:05:53', '2020-05-07 12:05:53'),
(15, 1, 0, 0, 0, 15, 12, 0, '2020-05-07 12:07:58', '2020-05-07 12:07:58'),
(16, 2, 4, 4, 4, 16, 0, 0, '2020-05-07 12:08:20', '2020-05-07 12:08:20'),
(17, 1, 0, 0, 0, 17, 13, 0, '2020-05-07 12:11:33', '2020-05-07 12:11:33'),
(18, 2, 5, 5, 5, 18, 0, 0, '2020-05-07 12:11:36', '2020-05-07 12:11:36'),
(19, 1, 0, 0, 0, 19, 14, 0, '2020-05-07 12:13:25', '2020-05-07 12:13:25'),
(20, 2, 6, 6, 6, 20, 0, 0, '2020-05-07 12:14:50', '2020-05-07 12:14:50'),
(21, 1, 0, 0, 0, 21, 15, 0, '2020-05-07 12:15:32', '2020-05-07 12:15:32'),
(22, 2, 7, 7, 7, 22, 0, 0, '2020-05-07 12:18:10', '2020-05-07 12:18:10'),
(23, 1, 0, 0, 0, 23, 16, 0, '2020-05-07 12:18:21', '2020-05-07 12:18:21'),
(24, 1, 0, 0, 0, 24, 17, 0, '2020-05-07 12:21:06', '2020-05-07 12:21:06'),
(25, 1, 0, 0, 0, 25, 18, 0, '2020-05-07 12:23:21', '2020-05-07 12:23:21'),
(26, 1, 0, 0, 0, 26, 19, 0, '2020-05-07 12:26:30', '2020-05-07 12:26:30'),
(27, 2, 8, 8, 8, 27, 0, 0, '2020-05-07 12:26:49', '2020-05-07 12:26:49'),
(28, 1, 0, 0, 0, 28, 20, 0, '2020-05-07 12:30:24', '2020-05-07 12:30:24'),
(29, 2, 9, 9, 9, 29, 0, 0, '2020-05-07 12:31:48', '2020-05-07 12:31:48'),
(30, 1, 0, 0, 0, 30, 21, 0, '2020-05-07 12:33:12', '2020-05-07 12:33:12'),
(31, 1, 0, 0, 0, 31, 22, 0, '2020-05-07 12:36:09', '2020-05-07 12:36:09'),
(32, 1, 0, 0, 0, 32, 23, 0, '2020-05-07 12:38:36', '2020-05-07 12:38:36'),
(33, 2, 10, 10, 10, 33, 0, 0, '2020-05-07 12:40:06', '2020-05-07 12:40:06'),
(34, 1, 0, 0, 0, 34, 24, 0, '2020-05-07 12:41:01', '2020-05-07 12:41:01'),
(35, 2, 11, 11, 11, 35, 0, 0, '2020-05-07 12:42:37', '2020-05-07 12:42:37'),
(36, 1, 0, 0, 0, 36, 25, 0, '2020-05-07 12:43:31', '2020-05-07 12:43:31'),
(37, 2, 12, 12, 12, 37, 0, 0, '2020-05-07 12:45:21', '2020-05-07 12:45:21'),
(38, 1, 0, 0, 0, 38, 26, 0, '2020-05-07 12:47:31', '2020-05-07 12:47:31'),
(39, 2, 13, 13, 13, 39, 0, 0, '2020-05-07 12:47:50', '2020-05-07 12:47:50'),
(40, 1, 0, 0, 0, 40, 27, 0, '2020-05-07 12:52:25', '2020-05-07 12:52:25'),
(41, 1, 0, 0, 0, 41, 28, 0, '2020-05-07 12:55:06', '2020-05-07 12:55:06'),
(42, 1, 0, 0, 0, 42, 29, 0, '2020-05-07 12:57:44', '2020-05-07 12:57:44'),
(43, 1, 0, 0, 0, 43, 30, 0, '2020-05-07 13:00:01', '2020-05-07 13:00:01'),
(44, 1, 0, 0, 0, 44, 31, 0, '2020-05-07 13:01:57', '2020-05-07 13:01:57'),
(45, 1, 0, 0, 0, 45, 32, 0, '2020-05-07 13:03:42', '2020-05-07 13:03:42'),
(46, 1, 0, 0, 0, 46, 33, 0, '2020-05-07 13:07:14', '2020-05-07 13:07:14'),
(47, 1, 0, 0, 0, 47, 34, 0, '2020-05-07 13:09:00', '2020-05-07 13:09:00'),
(48, 2, 14, 14, 14, 48, 0, 0, '2020-05-07 13:14:49', '2020-05-07 13:14:49'),
(49, 2, 15, 15, 15, 49, 0, 0, '2020-05-07 14:27:29', '2020-05-07 14:27:29'),
(50, 2, 16, 16, 16, 50, 0, 0, '2020-05-07 14:30:11', '2020-05-07 14:30:11'),
(51, 2, 17, 17, 17, 51, 0, 0, '2020-05-07 14:32:12', '2020-05-07 14:32:12'),
(52, 2, 18, 18, 18, 52, 0, 0, '2020-05-07 14:34:06', '2020-05-07 14:34:06'),
(53, 2, 19, 19, 19, 53, 0, 0, '2020-05-07 14:36:41', '2020-05-07 14:36:41'),
(54, 2, 20, 20, 20, 54, 0, 0, '2020-05-07 14:39:16', '2020-05-07 14:39:16'),
(55, 2, 21, 21, 21, 55, 0, 0, '2020-05-07 14:41:46', '2020-05-07 14:41:46'),
(56, 2, 22, 22, 22, 56, 0, 0, '2020-05-07 14:44:47', '2020-05-07 14:44:47'),
(57, 2, 23, 23, 23, 57, 0, 0, '2020-05-07 14:46:40', '2020-05-07 14:46:40'),
(58, 2, 24, 24, 24, 58, 0, 0, '2020-05-07 14:51:44', '2020-05-07 14:51:44'),
(59, 2, 25, 25, 25, 59, 0, 0, '2020-05-07 14:54:15', '2020-05-07 14:54:15'),
(60, 2, 26, 26, 26, 60, 0, 0, '2020-05-07 14:56:19', '2020-05-07 14:56:19'),
(61, 2, 27, 27, 27, 61, 0, 0, '2020-05-07 14:58:18', '2020-05-07 14:58:18'),
(62, 2, 28, 28, 28, 62, 0, 0, '2020-05-07 15:01:44', '2020-05-07 15:01:44'),
(63, 2, 29, 29, 29, 63, 0, 0, '2020-05-07 15:04:10', '2020-05-07 15:04:10'),
(64, 2, 30, 30, 30, 64, 0, 0, '2020-05-07 15:05:47', '2020-05-07 15:05:47'),
(65, 2, 31, 31, 31, 65, 0, 0, '2020-05-07 15:07:40', '2020-05-07 15:07:40'),
(66, 2, 32, 32, 32, 66, 0, 0, '2020-05-07 15:09:28', '2020-05-07 15:09:28'),
(67, 2, 33, 33, 33, 67, 0, 0, '2020-05-07 15:10:57', '2020-05-07 15:10:57'),
(68, 2, 34, 34, 34, 68, 0, 1, '2020-05-27 13:25:13', '2020-05-27 14:33:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggunganpendidikan`
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
-- Struktur dari tabel `ternak`
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
-- Dumping data untuk tabel `ternak`
--

INSERT INTO `ternak` (`IdTernak`, `JumlahSapi`, `JumlahKerbau`, `JumlahKuda`, `JumlahBabi`, `JumlahKambing`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 0, 0, 0, '2020-04-16 14:05:14', '2020-04-16 14:05:14'),
(2, 0, 0, 0, 0, 0, '2020-04-16 15:03:13', '2020-04-16 15:03:13'),
(3, 0, 0, 0, 0, 0, '2020-04-16 18:06:59', '2020-04-16 18:06:59'),
(4, 0, 0, 0, 0, 0, '2020-05-07 12:08:20', '2020-05-07 12:08:20'),
(5, 0, 0, 0, 0, 0, '2020-05-07 12:11:36', '2020-05-07 12:11:36'),
(6, 0, 0, 0, 0, 0, '2020-05-07 12:14:50', '2020-05-07 12:14:50'),
(7, 0, 0, 0, 0, 0, '2020-05-07 12:18:10', '2020-05-07 12:18:10'),
(8, 0, 0, 0, 0, 0, '2020-05-07 12:26:49', '2020-05-07 12:26:49'),
(9, 0, 0, 0, 0, 0, '2020-05-07 12:31:48', '2020-05-07 12:31:48'),
(10, 0, 0, 0, 0, 0, '2020-05-07 12:40:06', '2020-05-07 12:40:06'),
(11, 0, 0, 0, 0, 0, '2020-05-07 12:42:37', '2020-05-07 12:42:37'),
(12, 0, 0, 0, 0, 0, '2020-05-07 12:45:21', '2020-05-07 12:45:21'),
(13, 0, 0, 0, 0, 0, '2020-05-07 12:47:50', '2020-05-07 12:47:50'),
(14, 0, 0, 0, 0, 0, '2020-05-07 13:14:49', '2020-05-27 16:17:36'),
(15, 0, 0, 0, 0, 0, '2020-05-07 14:27:29', '2020-05-07 14:27:29'),
(16, 0, 0, 0, 0, 0, '2020-05-07 14:30:11', '2020-05-07 14:30:11'),
(17, 0, 0, 0, 0, 0, '2020-05-07 14:32:12', '2020-05-07 14:32:12'),
(18, 0, 0, 0, 0, 0, '2020-05-07 14:34:06', '2020-05-07 14:34:06'),
(19, 0, 0, 0, 0, 0, '2020-05-07 14:36:41', '2020-05-07 14:36:41'),
(20, 0, 0, 0, 0, 0, '2020-05-07 14:39:16', '2020-05-07 14:39:16'),
(21, 0, 0, 0, 0, 0, '2020-05-07 14:41:46', '2020-05-07 14:41:46'),
(22, 0, 0, 0, 0, 0, '2020-05-07 14:44:47', '2020-05-07 14:44:47'),
(23, 0, 0, 0, 0, 0, '2020-05-07 14:46:40', '2020-05-07 14:46:40'),
(24, 0, 0, 0, 0, 0, '2020-05-07 14:51:44', '2020-05-07 14:51:44'),
(25, 0, 0, 0, 0, 0, '2020-05-07 14:54:15', '2020-05-07 14:54:15'),
(26, 0, 0, 0, 0, 0, '2020-05-07 14:56:19', '2020-05-07 14:56:19'),
(27, 0, 0, 0, 0, 0, '2020-05-07 14:58:18', '2020-05-07 14:58:18'),
(28, 0, 0, 0, 0, 0, '2020-05-07 15:01:44', '2020-05-07 15:01:44'),
(29, 0, 0, 0, 0, 0, '2020-05-07 15:04:10', '2020-05-07 15:04:10'),
(30, 0, 0, 0, 0, 0, '2020-05-07 15:05:47', '2020-05-07 15:05:47'),
(31, 0, 0, 0, 0, 0, '2020-05-07 15:07:40', '2020-05-07 15:07:40'),
(32, 0, 0, 0, 0, 0, '2020-05-07 15:09:28', '2020-05-07 15:09:28'),
(33, 0, 0, 0, 0, 0, '2020-05-07 15:10:57', '2020-05-07 15:10:57'),
(34, 0, 0, 0, 0, 0, '2020-05-27 13:25:13', '2020-05-27 13:25:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` tinytext DEFAULT NULL,
  `role` enum('admin','dinas sosial','kelurahan','kecamatan') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `no_telp`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(7, NULL, '165150401111060', NULL, NULL, '$2y$10$XCDyN0POzlzxDI5moo4f4OH8paelV57QQlc/ZrEDnF9A8l1A4qeTu', 'admin', '2020-05-23 09:24:21', NULL),
(8, NULL, 'admin123456789012', NULL, NULL, '$2y$10$ujddxoiR0SdCp1ED7.a5Q.oSyS8bFzpNWBZv/rdmT.W7jxSiIo72y', 'admin', '2020-05-23 09:34:45', NULL),
(9, NULL, 'adminadminadmin', NULL, NULL, '$2y$10$QN8lu45tK6A94jpHW6/czu.BPjbtM1tmd2M30tKBkQpyo2Z0Lx2GW', 'admin', '2020-06-19 12:57:34', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vote`
--

CREATE TABLE `vote` (
  `survey_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vote`
--

INSERT INTO `vote` (`survey_id`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 9, '2020-06-22 17:39:32', '2020-06-22 17:39:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aset`
--
ALTER TABLE `aset`
  ADD PRIMARY KEY (`IdAset`);

--
-- Indeks untuk tabel `asetbergerak`
--
ALTER TABLE `asetbergerak`
  ADD PRIMARY KEY (`IdAsetBergerak`);

--
-- Indeks untuk tabel `asettidakbergerak`
--
ALTER TABLE `asettidakbergerak`
  ADD PRIMARY KEY (`IdAsetTidakBergerak`);

--
-- Indeks untuk tabel `ekonomi`
--
ALTER TABLE `ekonomi`
  ADD PRIMARY KEY (`IdEkonomi`);

--
-- Indeks untuk tabel `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenisusaha`
--
ALTER TABLE `jenisusaha`
  ADD PRIMARY KEY (`IdJenisUsaha`) USING BTREE;

--
-- Indeks untuk tabel `kartuidentitas`
--
ALTER TABLE `kartuidentitas`
  ADD PRIMARY KEY (`idKartuIdentitas`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`IdKecamatan`);

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`IdKelurahan`),
  ADD KEY `Kelurahan_FKIndex1` (`IdKecamatan`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kriteria_FKIndex1` (`indikator_id`);

--
-- Indeks untuk tabel `optionaset`
--
ALTER TABLE `optionaset`
  ADD PRIMARY KEY (`IdOptionAset`);

--
-- Indeks untuk tabel `optionekonomi`
--
ALTER TABLE `optionekonomi`
  ADD PRIMARY KEY (`IdOptionEkonomi`);

--
-- Indeks untuk tabel `optionperumahan`
--
ALTER TABLE `optionperumahan`
  ADD PRIMARY KEY (`IdOptionPerumahan`);

--
-- Indeks untuk tabel `pengenalantempat`
--
ALTER TABLE `pengenalantempat`
  ADD PRIMARY KEY (`IdPengenalanTempat`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`IdPengguna`);

--
-- Indeks untuk tabel `perorangan`
--
ALTER TABLE `perorangan`
  ADD PRIMARY KEY (`IdEkonomi`,`NIK`),
  ADD KEY `Ekonomi_FKIndex2` (`IdTanggunganPendidikan`),
  ADD KEY `Keluarga_FKIndex2` (`IdEkonomi`);

--
-- Indeks untuk tabel `perumahan`
--
ALTER TABLE `perumahan`
  ADD PRIMARY KEY (`IdPerumahan`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`IdPetugas`);

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`IdProgram`);

--
-- Indeks untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_kriteria_FKIndex1` (`kriteria_id`);

--
-- Indeks untuk tabel `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id_Survey`),
  ADD KEY `Survey_FKIndex5` (`IdEkonomi`),
  ADD KEY `Survey_FKIndex2` (`IdAset`);

--
-- Indeks untuk tabel `tanggunganpendidikan`
--
ALTER TABLE `tanggunganpendidikan`
  ADD PRIMARY KEY (`IdTanggunganPendidikan`);

--
-- Indeks untuk tabel `ternak`
--
ALTER TABLE `ternak`
  ADD PRIMARY KEY (`IdTernak`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`survey_id`,`user_id`),
  ADD KEY `users` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aset`
--
ALTER TABLE `aset`
  MODIFY `IdAset` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `asetbergerak`
--
ALTER TABLE `asetbergerak`
  MODIFY `IdAsetBergerak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `asettidakbergerak`
--
ALTER TABLE `asettidakbergerak`
  MODIFY `IdAsetTidakBergerak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `ekonomi`
--
ALTER TABLE `ekonomi`
  MODIFY `IdEkonomi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `indikator`
--
ALTER TABLE `indikator`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jenisusaha`
--
ALTER TABLE `jenisusaha`
  MODIFY `IdJenisUsaha` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `kartuidentitas`
--
ALTER TABLE `kartuidentitas`
  MODIFY `idKartuIdentitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `IdKecamatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `IdKelurahan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `optionaset`
--
ALTER TABLE `optionaset`
  MODIFY `IdOptionAset` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `optionekonomi`
--
ALTER TABLE `optionekonomi`
  MODIFY `IdOptionEkonomi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `optionperumahan`
--
ALTER TABLE `optionperumahan`
  MODIFY `IdOptionPerumahan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengenalantempat`
--
ALTER TABLE `pengenalantempat`
  MODIFY `IdPengenalanTempat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `IdPengguna` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perorangan`
--
ALTER TABLE `perorangan`
  MODIFY `IdEkonomi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `perumahan`
--
ALTER TABLE `perumahan`
  MODIFY `IdPerumahan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `IdPetugas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `IdProgram` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT untuk tabel `survey`
--
ALTER TABLE `survey`
  MODIFY `id_Survey` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `tanggunganpendidikan`
--
ALTER TABLE `tanggunganpendidikan`
  MODIFY `IdTanggunganPendidikan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ternak`
--
ALTER TABLE `ternak`
  MODIFY `IdTernak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD CONSTRAINT `kriteria_ibfk_1` FOREIGN KEY (`indikator_id`) REFERENCES `indikator` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD CONSTRAINT `sub_kriteria_ibfk_1` FOREIGN KEY (`kriteria_id`) REFERENCES `kriteria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `survey` FOREIGN KEY (`survey_id`) REFERENCES `survey` (`id_Survey`),
  ADD CONSTRAINT `users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
