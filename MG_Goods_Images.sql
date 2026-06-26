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
-- Table structure for table `MG_Goods_Images`
--

CREATE TABLE `MG_Goods_Images` (
  `id` int(3) NOT NULL,
  `Image_1` varchar(255) DEFAULT NULL,
  `Image_2` varchar(255) DEFAULT NULL,
  `Image_3` varchar(255) DEFAULT NULL,
  `Image_4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `MG_Goods_Images`
--

INSERT INTO `MG_Goods_Images` (`id`, `Image_1`, `Image_2`, `Image_3`, `Image_4`) VALUES
(1, 'ps5.jpg', 'ps5_2.avif', 'ps5_3.avif', 'ps5_4.jpg'),
(2, 'gigab.png', 'gigab2.webp', 'gigab3.jpg', 'gigab4.jfif'),
(3, 'xboxs.png', 'xboxs2.jpg', 'xboxs3.avif', 'xboxs4.jpg'),
(4, 'ps5dsc.avif', 'ps5dsc2.jfif', 'ps5dsc3.webp', 'ps5dsc4.avif'),
(7, 'z790.jpg', 'z7902.jpg', 'z7903.jpg', 'z7904.webp'),
(19, '123213.jpg', '123123.jfif', '22222.jfif', '333333.png'),
(23, 'intel4.jpg', 'intel3.jpg', 'intel2.webp', 'intel1.png'),
(24, 'elden1.jpg', 'elden2.png', 'elden3.jpg', 'elden4.jpg'),
(25, 'gow4.jpg', 'gow3.webp', 'gow2.jpg', 'gow1.jpg'),
(26, 'abf4.jpg', 'abf3.jpg', 'abf2.jpg', 'abf1.jpg'),
(27, 'pragmata4.jpg', 'pragmata3.jpg', 'pragmata2.jpg', 'pragmata1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MG_Goods_Images`
--
ALTER TABLE `MG_Goods_Images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `MG_Goods_Images`
--
ALTER TABLE `MG_Goods_Images`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
