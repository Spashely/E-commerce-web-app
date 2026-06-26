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
-- Table structure for table `MG_Goods`
--

CREATE TABLE `MG_Goods` (
  `Name` varchar(30) NOT NULL,
  `Price` int(8) NOT NULL,
  `Description` text NOT NULL,
  `Availability` int(4) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Brand` varchar(15) NOT NULL,
  `id` int(3) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `MG_Goods`
--

INSERT INTO `MG_Goods` (`Name`, `Price`, `Description`, `Availability`, `Category`, `Brand`, `id`, `Image`) VALUES
('PlayStation 5', 699, 'The PlayStation 5 Digital Edition is the disc-free version of Sony’s next-generation console, offering the same powerful hardware and performance as the standard PS5 but without the Ultra HD Blu-ray drive. Its streamlined, symmetrical design is aimed at players who prefer a fully digital gaming experience. Powered by a custom AMD Ryzen Zen 2 CPU and RDNA 2 GPU, it delivers advanced graphics with real-time ray tracing and supports up to 4K resolution at 120Hz, HDR, and even 8K output on compatible displays. An ultra-high-speed SSD ensures dramatically reduced load times and smooth game transitions. The included DualSense wireless controller enhances immersion with adaptive triggers, haptic feedback, and a built-in microphone. All games, expansions, and media are downloaded directly from the PlayStation Store, and the console also supports streaming from major entertainment apps, making it both a gaming powerhouse and a versatile home media hub.', 10, 'Console', 'PlayStation', 1, 'ps5.jpg'),
('RTX 5090', 1599, 'The RTX 5090 Gigabyte is a high-end graphics card designed for enthusiasts and professionals who demand exceptional performance in gaming, content creation, and AI-driven workloads. Built on NVIDIA’s latest architecture, it delivers significant improvements in ray tracing, AI-powered rendering, and overall efficiency compared to previous generations. With an advanced cooling system engineered by Gigabyte, it maintains optimal temperatures even under heavy loads, ensuring stable performance during extended sessions. The card supports ultra-high resolutions, including 4K and 8K gaming, with high frame rates and enhanced visual fidelity. It also features expanded VRAM capacity for handling large textures and complex scenes, making it ideal for next-generation titles and demanding creative applications. Multiple display outputs and support for the latest connectivity standards provide flexibility for multi-monitor setups and high-refresh-rate displays. Combining cutting-edge technology with Gigabyte’s robust design, the RTX 5090 offers a premium solution for users seeking top-tier graphics performance.', 5, 'PC', 'Gigabyte', 2, 'gigab.png'),
('Xbox X Series', 459, 'The Xbox Series X is Microsoft’s flagship next-generation gaming console, built to deliver high performance, fast load times, and immersive visuals. Powered by a custom AMD Zen 2 CPU and RDNA 2 GPU, it offers true 4K gaming at up to 120 frames per second, with support for ray tracing and variable refresh rates for smoother, more realistic graphics. Its ultra-fast NVMe SSD enables near-instant loading and quick resume across multiple games, while the console’s backward compatibility allows you to play thousands of titles from previous Xbox generations with improved performance. The compact, tower-like design houses advanced cooling technology to maintain quiet operation even during demanding gameplay. With features like Xbox Game Pass integration, cloud gaming support, and a wide range of entertainment apps, the Xbox Series X serves as both a powerful gaming machine and a versatile home entertainment hub.\r\n\r\n\r\n', 15, 'Console', 'Xbox', 3, 'xboxs.png'),
('PlayStation 5 Disc', 749, 'The PlayStation 5 with disc drive is Sony’s flagship next-generation console, offering the same powerful performance as the Digital Edition but with the added versatility of an Ultra HD Blu-ray drive. This allows players to enjoy physical game discs, 4K UHD movies, and backward-compatible PS4 discs alongside digital downloads from the PlayStation Store. Powered by a custom AMD Ryzen Zen 2 CPU and RDNA 2 GPU, it delivers stunning visuals with real-time ray tracing, supports up to 4K resolution at 120Hz, HDR, and even 8K output on compatible displays. Its ultra-high-speed SSD ensures dramatically reduced load times and seamless transitions between games. The included DualSense wireless controller enhances immersion with adaptive triggers, haptic feedback, and a built-in microphone. Combining cutting-edge performance with the flexibility of physical media, the PS5 disc edition is ideal for gamers who want the best of both digital and disc-based gaming.\r\n\r\n\r\n', 25, 'Console', 'PlayStation', 4, 'ps5dsc.avif'),
('MSI Z-790', 199, 'The MSI Z790 is a high-performance motherboard series designed for Intel’s latest 12th, 13th, and 14th Gen Core processors, offering advanced features for gaming, content creation, and overclocking. Built on the Intel Z790 chipset, it supports DDR5 memory for faster speeds and improved efficiency, along with PCIe 5.0 for next-generation graphics cards and storage devices. MSI’s premium power delivery system ensures stable performance even under heavy workloads, while advanced cooling solutions, including extended heatsinks and optimized thermal pads, help maintain low temperatures. The board typically includes high-speed connectivity options such as multiple M.2 slots with PCIe Gen4/Gen5 support, USB 3.2 Gen 2x2 ports, and 2.5G LAN or Wi-Fi 6E for fast networking. With its robust build quality, customizable RGB lighting, and user-friendly BIOS, the MSI Z790 series is an excellent choice for enthusiasts looking to build a powerful and future-ready PC.', 20, 'PC', 'MSI', 7, 'z790.jpg'),
(' i7-13700k', 349, ' Powerful processor', 10, 'PC', 'Intel', 23, 'intel4.jpg'),
('Elden Ring', 49, 'Elden Ring — an atmospheric dark fantasy RPG set in a vast open world filled with dangerous enemies, hidden secrets, and unforgettable landscapes. The game combines challenging combat, deep exploration, and a rich mysterious story, giving players the freedom to forge their own path through a world shaped by fallen kingdoms, powerful demigods, and ancient magic.', 500, 'Game', 'FromSoftware', 24, 'elden1.jpg'),
('God of War Ragnarok', 49, 'God of War Ragnarök — an epic action-adventure game that follows Kratos and Atreus on a dangerous journey through the realms of Norse mythology as Ragnarök approaches. With cinematic storytelling, intense combat, emotional character development, and breathtaking environments, the game delivers a powerful mix of brutal battles, exploration, and a deeply personal father-son story.', 100, 'Game', 'SantaMonica', 25, 'gow1.jpg'),
('Abiotic Factor', 25, 'Abiotic Factor — a sci-fi survival crafting game set inside a massive underground research facility overrun by paranormal creatures, hostile soldiers, and interdimensional chaos. Play as a team of scientists using intelligence, creativity, and improvised technology to survive, build, explore, and uncover the secrets hidden deep within the facility.', 350, 'Game', 'DeepField', 26, 'abf1.jpg'),
('Pragmata', 59, 'Pragmata — a mysterious sci-fi action-adventure game set in a near-future lunar world. It follows a stranded astronaut and an android companion as they navigate an abandoned, eerie environment filled with unknown threats. Blending exploration, combat, and puzzle-like interactions, the game focuses on survival and uncovering the truth behind a silent, broken lunar colony.', 250, 'Game', 'Capcom', 27, 'pragmata1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MG_Goods`
--
ALTER TABLE `MG_Goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `MG_Goods`
--
ALTER TABLE `MG_Goods`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
