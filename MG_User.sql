-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2026 at 02:55 PM
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
-- Table structure for table `MG_User`
--

CREATE TABLE `MG_User` (
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `MG_User`
--

INSERT INTO `MG_User` (`First_Name`, `Last_Name`, `Email`, `Password`) VALUES
('', '', '', ''),
('111', '1111', '111', '1111'),
('sorry', 'omg', 'balbalbla@gmail.com', '4321'),
('ia', 'ia', 'ia@ia.com', '123'),
('ia', 'ia', 'iiiii@i.i', '123'),
('la', 'la', 'la', 'la'),
('NNNNN', 'co', 'NNxo@gmail.com', '123456'),
('qqqq', 'qqqq', 'qqqq', 'qqqqq'),
('qqqq', 'qqqq', 'qqqq@gmail.com', 'qqqqq'),
('qu', 'qu', 'qu', 'qu'),
('Sandra ', 'Norman ', 'Sandra@email.com', 'blink28'),
('Test', 'Testing', 'test@test.com', 'testt1123'),
('Test1', 'Test1', 'testik@gmail.com', 'test'),
('123', '123', 'teston@test.com', '123'),
('Louisa', 'Norman', 'trying@yahoo.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MG_User`
--
ALTER TABLE `MG_User`
  ADD UNIQUE KEY `Email` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
