-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 08:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesit`
--

CREATE TABLE `perdoruesit` (
  `perdoruesiid` int(11) NOT NULL,
  `emri` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mbiemri` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datalindjes` date DEFAULT NULL,
  `nrpersonal` bigint(20) DEFAULT NULL,
  `telefoni` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fjalekalimi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roli` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perdoruesit`
--

INSERT INTO `perdoruesit` (`perdoruesiid`, `emri`, `mbiemri`, `datalindjes`, `nrpersonal`, `telefoni`, `email`, `fjalekalimi`, `roli`) VALUES
(1, 'Rinasi', 'Drenica', '1995-09-26', 323456789, '044555879', 'rinasdrenica@gmail.com', '123456', b'1'),
(3, 'Leon', 'Abimi', '1993-09-20', 423456789, '044999999', 'leonabimi@probitacademy.com ', '123456', b'0'),
(4, 'Kastriot', 'Bislimi', '1993-09-26', 123456789, '044696999', 'kastriotb@probitacademy.com ', '123456', b'0'),
(5, 'Arian', 'Shala', '1996-09-26', 123456789, '044999999', 'arianshala@probitacademy.com ', '123456', b'1'),
(6, 'Marigona', 'Mazreku', '1983-09-26', 123456789, '044899999', 'marigonam@gmail.com', '123456', b'0'),
(7, 'Altin', 'Bejta', '1999-09-26', 123456789, '044599999', 'altinbejta@gmail.com', '123456', b'1'),
(8, 'Lum', 'Pireva', '1983-09-26', 123456789, '044999999', 'lumpireva@tick-ks.com', '123456', b'0'),
(10, 'Arta', 'Bajrami', '1970-05-26', 123456789, '044500999', 'artab@gmail.com', '123456', b'1'),
(11, 'Amar', 'Krasniqi', '2004-07-29', 123456789, '044696665', 'Krasniqiamar04@gmail.Com', '123456', b'1'),
(24, 'Filan', 'Fisteku', '0000-00-00', 1245678, '23456543', 'fisteku199@gmail.com', '11111111', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `terminet`
--

CREATE TABLE `terminet` (
  `terminiid` int(11) NOT NULL,
  `emri` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefoni` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataterminit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terminet`
--

INSERT INTO `terminet` (`terminiid`, `emri`, `telefoni`, `email`, `dataterminit`) VALUES
(1, 'Flian', '044999999', 'filani@gmail.com', '2022-03-12'),
(2, 'Arian', '0455555555', 'arianshala@probitacademy.com ', '2022-03-23'),
(4, 'Lum', '045444444', 'lumpireva@tick-ks.com', '2022-03-23'),
(6, 'Filan', '0455555555', 'filanf@gmail.com', '2022-03-31'),
(7, 'Amar', '04777777', 'krasniqiamar04@gmail.com', '2022-03-23'),
(8, 'Amar', '1245678', 'amarkrasniqi582@gmail.com', '0000-00-00'),
(17, 'Amar', '1245678', 'krasniqiamar04@gmail.com', '0000-00-00'),
(21, 'Amar', '1245678', 'krasniqiamar04@gmail.com', '0000-00-00'),
(23, 'Amar', '1245678', 'krasniqiamar04@gmail.com', '2022-03-24'),
(24, 'Amar', '12345678654', 'krasniqiamar04@gmail.com', '2022-04-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  ADD PRIMARY KEY (`perdoruesiid`);

--
-- Indexes for table `terminet`
--
ALTER TABLE `terminet`
  ADD PRIMARY KEY (`terminiid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  MODIFY `perdoruesiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `terminet`
--
ALTER TABLE `terminet`
  MODIFY `terminiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
