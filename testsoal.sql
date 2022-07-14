-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2022 at 10:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testsoal`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `Klasifikasi` (`penilaian` INT) RETURNS VARCHAR(10) CHARSET latin1  BEGIN
DECLARE klasifikasi VARCHAR (5);
IF penilaian >= 50 AND penilaian <= 70 THEN
SET klasifikasi = 'B';
ELSEIF penilaian >= 75 AND penilaian <= 90 THEN
SET klasifikasi = 'A';
ELSEIF penilaian >= 91 AND penilaian <= 100 THEN
SET klasifikasi = 'A+';

END IF;
       
RETURN klasifikasi;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `penilaian` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `jabatan`, `penilaian`) VALUES
(1, 'asep', 'staff', 70),
(2, 'saepul', 'staff', 50),
(3, 'suhardi', 'staff', 73),
(4, 'abdul', 'staff', 85),
(5, 'budi', 'supervisor', 92),
(6, 'dito', 'manager', 95),
(7, 'danar', 'staff', 81),
(8, 'atep', 'staff', 89),
(9, 'akang', 'leader', 91),
(10, 'usmin', 'staff', 75),
(11, 'saud', 'staff', 65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
