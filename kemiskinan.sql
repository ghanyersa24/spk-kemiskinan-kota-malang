-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 07:52 PM
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `AdaKapal` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asettidakbergerak`
--

CREATE TABLE `asettidakbergerak` (
  `IdAsetTidakBergerak` int(10) UNSIGNED NOT NULL,
  `LuasAtb` varchar(255) DEFAULT NULL,
  `RumahLain` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id` int(11) NOT NULL,
  `id_subkriteria` int(11) NOT NULL,
  `bobot` double(10,9) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id`, `id_subkriteria`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 1, 0.045040340, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(2, 2, 0.038748627, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(3, 3, 0.038748627, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(4, 4, 0.026836224, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(5, 5, 0.130257860, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(6, 6, 0.026836224, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(7, 7, 0.045040340, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(8, 8, 0.077497254, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(9, 9, 0.130257860, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(10, 10, 0.154873848, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(11, 11, 0.092142600, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(12, 12, 0.053552014, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(13, 13, 0.031907704, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(14, 14, 0.005317951, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(15, 15, 0.005317951, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(16, 16, 0.005317951, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(17, 17, 0.005317951, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(18, 18, 0.005317951, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(19, 19, 0.005317951, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(20, 20, 0.026776007, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(21, 21, 0.092142600, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(22, 22, 0.154873848, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(23, 23, 0.026776007, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(24, 24, 0.007976926, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(25, 25, 0.007976926, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(26, 26, 0.013388003, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(27, 27, 0.013388003, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(28, 28, 0.046071300, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(29, 29, 0.038718462, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(30, 30, 0.038718462, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(31, 31, 0.015953852, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(32, 32, 0.150284231, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(33, 33, 0.003190770, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(34, 34, 0.003190770, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(35, 35, 0.003190770, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(36, 36, 0.003190770, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(37, 37, 0.003190770, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(38, 38, 0.026776007, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(39, 39, 0.023035650, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(40, 40, 0.023035650, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(41, 41, 0.038718462, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(42, 42, 0.038718462, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(43, 43, 0.015953852, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(44, 44, 0.150284231, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(45, 45, 0.154873848, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(46, 46, 0.092142600, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(47, 47, 0.053552014, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(48, 48, 0.031907704, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(49, 49, 0.023385475, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(50, 50, 0.023385475, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(51, 51, 0.023385475, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(52, 52, 0.023385475, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(53, 53, 0.023385475, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(54, 54, 0.023385475, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(55, 55, 0.117746414, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(56, 56, 0.117746414, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(57, 57, 0.202596691, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(58, 58, 0.202596691, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(59, 59, 0.340525760, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(60, 60, 0.340525760, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(61, 61, 0.070156424, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(62, 62, 0.070156424, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(63, 63, 1.321737731, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(64, 64, 0.217260270, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(65, 65, 0.021442444, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(66, 66, 0.208154984, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(67, 67, 0.123842351, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(68, 68, 0.071975474, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(69, 69, 0.014294963, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(70, 70, 0.014294963, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(71, 71, 0.014294963, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(72, 72, 0.208154984, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(73, 73, 0.042884888, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(74, 74, 0.042884888, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(75, 75, 0.071975474, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(76, 76, 0.071975474, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(77, 77, 0.061921176, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(78, 78, 0.061921176, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(79, 79, 0.061921176, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(80, 80, 0.061921176, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(81, 81, 0.416309967, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(82, 82, 0.070156424, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(83, 83, 0.117746414, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(84, 84, 0.202596691, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(85, 85, 0.340525760, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(86, 86, 0.070156424, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(87, 87, 0.117746414, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(88, 88, 0.202596691, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(89, 89, 0.340525760, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(90, 90, 0.070156424, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(91, 91, 0.070156424, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(92, 92, 0.640686211, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(93, 93, 0.227017173, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(94, 94, 0.227017173, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(95, 95, 0.227017173, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(96, 96, 3.430064837, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(97, 97, 0.857516209, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(98, 98, 1.540731540, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(99, 99, 0.545193455, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(100, 100, 0.454519345, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(101, 101, 0.454519345, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(102, 102, 0.454519345, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(103, 103, 0.977568147, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(104, 104, 0.454519345, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(105, 105, 2.190803379, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(106, 106, 2.190803379, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(107, 107, 2.190803379, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(108, 108, 0.977568147, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(109, 109, 0.977568147, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(110, 110, 0.977568147, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(111, 111, 0.746824819, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(112, 112, 2.156669754, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(113, 113, 1.253426843, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(114, 114, 0.517849106, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(115, 115, 0.517849106, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(116, 116, 0.517849106, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(117, 117, 0.517849106, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(118, 118, 0.517849106, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(119, 119, 0.517849106, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(120, 120, 0.517849106, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(121, 121, 0.919148794, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(122, 122, 0.546849977, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(123, 123, 0.189366561, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(124, 124, 0.317821697, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(125, 125, 0.568110861, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(126, 126, 0.568110861, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(127, 127, 0.568110861, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(128, 128, 0.337999041, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(129, 129, 0.337999041, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(130, 130, 0.337999041, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(131, 131, 0.196440401, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(132, 132, 0.196440401, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(133, 133, 0.196440401, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(134, 134, 0.351133138, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(135, 135, 1.704332582, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(136, 136, 1.013997124, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(137, 137, 0.589321203, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(138, 138, 0.351133138, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(139, 139, 3.174226404, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(140, 140, 0.944257147, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(141, 141, 0.944257147, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(142, 142, 1.097578573, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(143, 143, 0.217988768, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(144, 144, 0.217988768, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(145, 145, 0.217988768, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(146, 146, 4.486445841, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(147, 147, 9.999999999, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(148, 148, 0.498200715, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(149, 149, 0.091335737, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(150, 150, 0.498200715, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(151, 151, 0.498200715, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(152, 152, 0.498200715, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(153, 153, 0.091335737, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(154, 154, 0.091335737, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(155, 155, 0.091335737, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(156, 156, 0.091335737, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(157, 157, 0.091335737, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(158, 158, 1.714427004, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(159, 159, 1.714427004, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(160, 160, 0.091335737, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(161, 161, 0.091335737, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(162, 162, 0.091335737, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(163, 163, 0.091335737, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(164, 164, 0.091335737, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(165, 165, 0.091335737, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(166, 166, 0.091335737, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(167, 167, 2.881619419, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(168, 168, 2.881619419, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(169, 169, 1.587688369, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(170, 170, 1.889198689, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(171, 171, 0.218067766, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(172, 172, 0.218067766, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(173, 173, 0.218067766, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(174, 174, 0.548988167, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(175, 175, 0.548988167, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(176, 176, 1.587688369, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(177, 177, 0.011838553, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(178, 178, 0.011838553, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(179, 179, 0.011838553, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(180, 180, 0.011838553, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(181, 181, 0.011838553, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(182, 182, 0.724869502, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(183, 183, 0.011838553, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(184, 184, 0.011838553, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(185, 185, 0.724869502, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(186, 186, 0.011838553, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(187, 187, 0.011838553, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(188, 188, 0.011838553, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(189, 189, 0.011838553, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(190, 190, 0.011838553, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(191, 191, 0.011838553, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(192, 192, 0.479893135, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(193, 193, 0.479893135, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(194, 194, 0.088491705, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(195, 195, 0.026362848, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(196, 196, 0.026362848, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(197, 197, 0.255920363, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(198, 198, 0.152260489, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(199, 199, 0.137349563, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(200, 200, 0.412048689, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(201, 201, 0.399892862, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(202, 202, 0.207411404, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(203, 203, 0.207411404, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(204, 204, 0.082387462, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(205, 205, 0.082387462, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(206, 206, 0.082387462, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(207, 207, 0.399892862, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(208, 208, 0.713751910, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(209, 209, 0.399892862, '2020-04-05 16:28:08', '2020-04-05 16:28:08'),
(210, 210, 0.000000000, '2020-04-05 16:28:08', '2020-04-05 16:28:08');

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
  `id` int(11) NOT NULL,
  `label` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`id`, `label`, `created_at`, `updated_at`) VALUES
(1, 'Perumahan', '2020-04-05 16:27:38', '2020-04-05 16:27:38'),
(2, 'Kesehatan', '2020-04-05 16:27:38', '2020-04-05 16:27:38'),
(3, 'Pendidikan', '2020-04-05 16:27:38', '2020-04-05 16:27:38'),
(4, 'Ekonomi', '2020-04-05 16:27:38', '2020-04-05 16:27:38'),
(5, 'Asset', '2020-04-05 16:27:38', '2020-04-05 16:27:38');

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
  `OmsetUsaha` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `adaSIM` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `label` varchar(600) NOT NULL,
  `id_indikator` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `label`, `id_indikator`, `created_at`, `updated_at`) VALUES
(1, 'Status penguasaan bangunan tempat tinggal yang ditempati ', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(2, 'Status lahan tempat tinggal yang ditempati  ', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(3, 'Luas Lantai  ', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(4, 'Jenis Lantai ', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(5, 'Jenis Dinding ', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(6, 'Kondisi Dinding  ', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(7, 'Jenis atap terluas ', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(8, 'Kondisi atap ', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(9, 'Jumlah kamar tidur ', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(10, 'Sumber air minum', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(11, 'Cara memperoleh air minum ', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(12, 'Sumber penerangan utama', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(13, 'Jika PLN daya yang terpasang', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(14, 'Bahan bakar/energi utama untuk memasak ', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(15, 'Penggunaan fasilitas buang air besar', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(16, 'Jenis kloset ', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(17, 'Tempat pembuangan akhir tinja ', 1, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(18, 'Status kehamilan', 2, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(19, 'Jenis cacat', 2, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(20, 'Penyakit kronis/menahun ', 2, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(21, 'Partisipasi sekolah ', 3, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(22, 'Jenjang pendidikan tinggi yang pernah/sedang diduduki', 3, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(23, 'Kelas tertinggi yang pernah/sedang diikuti ', 3, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(24, 'Ijazah tertinggi yang dimiliki', 3, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(25, 'Bekerja/membantu bekerja selama seminggu yang lalu', 4, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(26, 'Lapangan usaha dari pekerjaan utama', 4, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(27, 'Status kedudukan dalam pekerjaan utama ', 4, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(28, 'Rumah tangga memiliki sendiri asset bergerak ', 5, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(29, 'Rumah tangga memiliki asset tidak bergerak', 5, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(30, 'Jumlah ternak yang dimiliki ', 5, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(31, 'Memiliki usaha ', 5, '2020-04-05 16:26:52', '2020-04-05 16:26:52'),
(32, 'Rumah tangga menjadi peserta program/memiliki kartu program ', 5, '2020-04-05 16:26:52', '2020-04-05 16:26:52');

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

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id` int(11) NOT NULL,
  `label` varchar(600) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id`, `label`, `id_kriteria`, `created_at`, `updated_at`) VALUES
(1, 'Milik Sendiri ', 1, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(2, 'Kontrak/Sewa ', 1, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(3, 'Bebas Sewa ', 1, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(4, 'Dinas ', 1, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(5, 'Lainnya ', 1, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(6, 'Milik sendiri ', 2, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(7, 'Milik orang lain ', 2, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(8, 'Tanah negara', 2, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(9, 'Lainnya ', 2, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(10, ' <=24 m2 ', 3, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(11, '24 m2', 3, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(12, '25 <luas/area <=27 m2 ', 3, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(13, '>28 m2', 3, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(14, 'Marmer/Granit', 4, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(15, 'Keramik', 4, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(16, 'Parket/vinil/permadani', 4, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(17, 'Ubin/tegel/teraso', 4, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(18, 'Kayu/papan kualitas tinggi ', 4, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(19, 'Semen/bata merah', 4, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(20, 'Bambu', 4, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(21, 'Kayu/papan kualitas rendah ', 4, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(22, 'Tanah ', 4, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(23, 'Lainnya', 4, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(24, 'Tembok ', 5, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(25, 'Plesteran anyaman bambu ', 5, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(26, 'Kayu', 5, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(27, 'Anyaman bambu ', 5, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(28, 'Batang kayu ', 5, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(29, 'Bambu ', 5, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(30, 'Lainnya ', 5, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(31, 'Bagus/kualitas tinggi', 6, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(32, 'Jelek/kualitas rendah', 6, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(33, 'Beton', 7, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(34, 'Keramik', 7, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(35, 'Genteng Metal ', 7, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(36, 'Genteng tanah liat ', 7, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(37, 'Asbes ', 7, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(38, 'Seng', 7, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(39, 'Sirap', 7, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(40, 'Bambu', 7, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(41, 'Jerami/ijuk/daun daunan/rumbia', 7, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(42, 'Lainnya', 7, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(43, 'Bagus/Kualitas tinggi ', 8, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(44, 'Jelek/Kualitas rendah', 8, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(45, '1 kamar', 9, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(46, '2 kamar', 9, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(47, '3 kamar', 9, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(48, '>3 kamar', 9, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(49, 'Air kemasan bermer', 10, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(50, 'Air isi ulang', 10, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(51, 'Ledeng meteran', 10, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(52, 'Ledeng eceran', 10, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(53, 'Sumur bor/pompa', 10, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(54, 'Sumur terlindungi', 10, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(55, 'Sumur tak terlindungi', 10, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(56, 'Mata air terlindungi', 10, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(57, 'Mata air tak terlindungi', 10, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(58, 'Air sungai/danau/waduk', 10, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(59, 'Air hujan', 10, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(60, 'Lainnya', 10, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(61, 'Membeli eceran', 11, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(62, 'Langganan', 11, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(63, 'Tidak membeli', 11, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(64, 'Listrik PLN', 12, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(65, 'Listrik non PLN', 12, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(66, 'Bukan listrik', 12, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(67, '450 watt', 13, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(68, '900 watt', 13, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(69, '1.300 watt', 13, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(70, '2.200 watt', 13, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(71, '> 2.200 watt', 13, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(72, 'tanpa meteran', 13, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(73, 'Listrik ', 14, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(74, 'Gas > 3 kg ', 14, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(75, 'Gas 3 Kg', 14, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(76, 'Gas kota / biogas', 14, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(77, 'Minyak tanah', 14, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(78, 'Briket', 14, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(79, 'Arang', 14, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(80, 'Kayu bakar', 14, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(81, 'Tidak memasak dirumah', 14, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(82, 'Sendiri', 15, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(83, 'Bersama', 15, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(84, 'Umum', 15, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(85, 'Tidak ada ', 15, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(86, 'Leher angsa', 16, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(87, 'Plengsengan', 16, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(88, 'Cemplung/cebluk', 16, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(89, 'Tidak pakai', 16, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(90, 'Tangki ', 17, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(91, 'SPAL', 17, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(92, 'Lubang tanah', 17, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(93, 'Kolam/sawah/danau/laut ', 17, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(94, 'Pantai/tanah lapang/kebun ', 17, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(95, 'Lainnya ', 17, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(96, 'Ya', 18, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(97, 'Tidak', 18, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(98, 'Tidak cacat ', 19, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(99, 'Tuna daksa/cacat tubuh ', 19, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(100, 'Tuna netra/buta ', 19, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(101, 'Tuna rungu ', 19, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(102, 'Tuna wicara ', 19, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(103, 'Tuna rungu dan wicara ', 19, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(104, 'Tuna netra dan cacat tubuh ', 19, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(105, 'Tuna netra, rungu dan wicara ', 19, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(106, 'Tuna rungu, wicara dan cacat tubuh', 19, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(107, 'Tuna rungu, wicara, netra dan cacat tubuh', 19, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(108, 'Cacat mental retardasi ', 19, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(109, 'Mantan penderita gangguan jiwa', 19, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(110, 'Cacat fisik dan mental ', 19, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(111, 'Tidak ada', 20, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(112, 'Hipertensi ', 20, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(113, 'Rematik ', 20, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(114, 'Asma ', 20, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(115, 'Masalah jantung ', 20, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(116, 'Diabetes/kencing manis ', 20, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(117, 'Tuberculosis (TBC) ', 20, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(118, 'Stroke ', 20, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(119, 'Kanker/tumor ganas ', 20, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(120, 'Lainnya (Gagal ginjal, paru-paru flek, dan sejenisnya) ', 20, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(121, 'Tidak/belum ', 21, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(122, 'Pernah sekolah ', 21, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(123, 'Masih sekolah ', 21, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(124, 'Tidak bersekolah lagi ', 21, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(125, 'SD/SDLB ', 22, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(126, 'Paket A ', 22, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(127, 'M.Ibtidayah ', 22, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(128, 'SMP/SMPLB ', 22, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(129, 'Paket B ', 22, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(130, 'M.Tsanawiyah ', 22, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(131, 'SMA/SMK/SMALB ', 22, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(132, 'Paket C ', 22, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(133, 'M.Aliyah ', 22, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(134, 'Pergurun tinggi ', 22, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(135, 'Kelas 1 dan 2', 23, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(136, 'Kelas 3 dan 4', 23, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(137, 'Kelas 5 dan 6', 23, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(138, 'Kelas 7 - tamat', 23, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(139, 'Tidak punya Ijazah ', 24, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(140, 'SD/Sederjat ', 24, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(141, 'SMP/Sederajat ', 24, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(142, 'SMA/Sederajat ', 24, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(143, 'D1/D2/D3 ', 24, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(144, 'D4/S1 ', 24, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(145, 'S2/S3 ', 24, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(146, 'Ya', 25, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(147, 'Tidak', 25, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(148, 'Pertanian, tanaman padi dan palawija ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(149, 'Hortikultura ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(150, 'Perkebunan ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(151, 'Perikann tangkap ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(152, 'Perikanan budidaya ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(153, 'Peternakan ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(154, 'Kehutanan dan pertanian lainnya ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(155, 'Pertambangan/penggalian ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(156, 'Industri pengolahan ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(157, 'Listrik dan gas ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(158, 'Bangunan/konstruksi ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(159, 'Perdagangan ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(160, 'Hotel dan rumah makan ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(161, 'Transportasi dan pergudangan ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(162, 'Informasi dan komunikasi ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(163, 'Keuangan dan asuransi ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(164, 'Jasa pendidikan ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(165, 'Jasa kesehatan ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(166, 'Jasa kemasyarakatan, pemerintahan dan perorangan ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(167, 'Pemulung ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(168, 'Lainnya ', 26, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(169, 'Berusaha sendiri ', 27, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(170, 'Berusaha dibantu buruh tidak tetap/tidak dibayar ', 27, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(171, 'Berusaha dibantu buruh tetap/dibayar ', 27, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(172, 'Buruh/karyawan/pegawai swasta ', 27, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(173, 'PNS/TNI/POLRI/BUMN/BUMND/anggota legislatif ', 27, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(174, 'Pekerja bebas pertanian ', 27, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(175, 'Pekerja bebas non pertanian ', 27, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(176, 'Pekerja keluarga/tidak dibayar ', 27, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(177, 'Tabung gas 5.5 kg atau lebih ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(178, 'Lemari es/kulkas ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(179, 'AC ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(180, 'Pemanas air (water heater) ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(181, 'Telepon ruma (PSTN) ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(182, 'Televisi ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(183, 'Emas/Perhiasan dan tabungan (senilai 10 gr atau lebih) ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(184, 'Komputer/laptop ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(185, 'Sepeda ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(186, 'Sepeda motor ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(187, 'Mobil ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(188, 'Perahu ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(189, 'Motor tempel ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(190, 'Perahu motor ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(191, 'Kapal ', 28, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(192, 'Lahan ', 29, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(193, 'Rumah ditempat lain ', 29, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(194, 'Sapi ', 30, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(195, 'Kerbau ', 30, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(196, 'Kuda ', 30, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(197, 'Babi ', 30, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(198, 'Kambing/domba ', 30, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(199, 'Ya ', 31, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(200, 'Tidak ', 31, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(201, 'Kartu keluarga sejahtera (KKS)/Kartu Perlindungan Sosial (KPS) ', 32, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(202, 'Kartu Indonesia Pintar (KIP)/Bantuan Siswa Miskin (BSM) ', 32, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(203, 'Kartu Indonesia Sehat (KIS)/BPJS kesehatan/JAMSOSTEK ', 32, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(204, 'BPJS kesehatan peserta mandiri ', 32, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(205, 'Jaminan sosial tenaga kerja (JAMSOSTEK)/ BPJS ketenagakerjaan ', 32, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(206, 'Asusransi kesehatan lainnya ', 32, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(207, 'Program keluarga harapan (PKH) ', 32, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(208, 'Beras untuk rakyat miskin ', 32, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(209, 'Kredit Usaha Rakyat (KUR) ', 32, '2020-04-05 15:12:10', '2020-04-05 15:12:10'),
(210, 'sisa', 0, '2020-04-05 15:12:10', '2020-04-05 15:12:10');

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

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `IdUsaha` int(10) UNSIGNED NOT NULL,
  `IdAset` int(10) UNSIGNED NOT NULL,
  `IdJenisUsaha` int(10) UNSIGNED DEFAULT NULL,
  `StaAtUsaha` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  MODIFY `IdAset` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asetbergerak`
--
ALTER TABLE `asetbergerak`
  MODIFY `IdAsetBergerak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asettidakbergerak`
--
ALTER TABLE `asettidakbergerak`
  MODIFY `IdAsetTidakBergerak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `idKartuIdentitas` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `IdPengenalanTempat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `IdPengguna` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perorangan`
--
ALTER TABLE `perorangan`
  MODIFY `IdEkonomi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perumahan`
--
ALTER TABLE `perumahan`
  MODIFY `IdPerumahan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `IdPetugas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `IdProgram` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id_Survey` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tanggunganpendidikan`
--
ALTER TABLE `tanggunganpendidikan`
  MODIFY `IdTanggunganPendidikan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ternak`
--
ALTER TABLE `ternak`
  MODIFY `IdTernak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `IdUsaha` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
