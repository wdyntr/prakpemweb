-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 04:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugaspemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(11) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Prodi` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama`, `Prodi`, `time`) VALUES
(121130222, 'Videlia', 'Sains Data', '2023-11-17 15:06:51'),
(121130258, 'Ayudia', 'Perencanaan Wilayah dan Kota', '2023-11-17 15:06:51'),
(121140156, 'Marsha ', 'T.IF', '2023-11-17 15:06:51'),
(121140184, 'Azzahra', 'Matematika', '2023-11-17 15:06:51'),
(121140190, 'Grayan', 'T.IF', '2023-11-17 15:06:51'),
(121140270, 'Wiwid', 'Desain Komunikasi Visual', '2023-11-17 15:06:51'),
(121145789, 'Caroline', 'Desain Komunikasi Visual', '2023-11-17 15:07:38'),
(121150258, 'Rayna', 'T.Industri', '2023-11-17 15:06:51'),
(121160123, 'Qwerty', 'T.Industri', '2023-11-17 15:06:51'),
(121165132, 'Serena', 'Fisika', '2023-11-17 15:06:51'),
(121165489, 'Wijaya', 'T.Fisika', '2023-11-17 15:06:51'),
(121180156, 'Chara', 'T.Industri', '2023-11-17 15:06:51'),
(121189470, 'Reins', 'Sains Data', '2023-11-17 15:06:51'),
(121198456, 'Rowan', 'T.Industri', '2023-11-17 15:06:51'),
(121230258, 'Abra', 'T.Mesin', '2023-11-17 15:06:51'),
(121320159, 'Pranadipa', 'Matematika', '2023-11-17 15:06:51'),
(121345658, 'Sia', 'T.Industri', '2023-11-17 15:08:20'),
(121456032, 'Wakwas', 'Biologi', '2023-11-18 07:29:34'),
(121456798, 'Jentakay', 'Desain Komunikasi Visual', '2023-11-17 15:07:48'),
(121459876, 'Ishaq', 'Sains Data', '2023-11-17 15:08:37'),
(121520321, 'Qira', 'T.IF', '2023-11-18 07:31:17'),
(121654120, 'Noahlrns', 'Desain Komunikasi Visual', '2023-11-18 10:58:31'),
(121654635, 'Mas Sung Jin Woo', 'T.IF', '2023-11-17 15:08:55'),
(121654987, 'Qisha', 'T.Mesin', '2023-11-18 07:33:19'),
(123654987, 'Bellion', 'T.Kimia', '2023-11-18 07:39:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD UNIQUE KEY `NIM` (`NIM`),
  ADD UNIQUE KEY `NIM_2` (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
