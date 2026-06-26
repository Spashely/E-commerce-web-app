-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2026 at 02:54 PM
-- Server version: 10.11.13-MariaDB-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HNCWEBMR18`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `Email` text NOT NULL,
  `Password` varchar(20) NOT NULL,
  `First_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`Email`, `Password`, `First_Name`, `Last_Name`) VALUES
('admin1', 'adminpassword', '', ''),
('test@test.test', 'test', 'test', 'test'),
('testik', 'testik', 'testik', 'testik'),
('testik', 'testik', 'testik', 'testik'),
('', '', '', ''),
('', '', '', ''),
('123@123.123', '123', '11', '11'),
('Mbrown@gmail.com', 'Brown123', '', 'Brown'),
('test@test.test', 'test', 'test', 'test'),
('neblablabal@gmail.com', 'ne1234', 'nelox', 'ne228'),
('gleb.ua1104@gmail.com', '11k04g06S', 'Hlib', 'Kachurin'),
('Denis@gmail.com', '1230', 'Denis', 'XO'),
('admin', 'adminpassword', 'Admi', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
