-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2022 at 09:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `itemName`, `description`, `quantity`, `price`, `img`) VALUES
(1, 'Antminer L7 (9.16Gh)', 'Model Antminer L7 (9.16Gh) from Bitmain mining Scrypt algorithm with a maximum hashrate of 9.16Gh/s for a power consumption of 3425W.', 3, '15000.00', '1AntminerL7.jpg'),
(2, 'Antminer S19j Pro (100Th)', 'Model Antminer S19j Pro (100Th) from Bitmain mining SHA-256 algorithm with a maximum hashrate of 100Th/s for a power consumption of 3050W.', 5, '16000.00', '2AntminerS19j.jpg'),
(3, 'Bitmain Antminer S19 Pro (110Th)', 'Antminer S19 Pro (110Th) from Bitmain mining SHA-256 algorithm with a maximum hashrate of 110Th/s for a power consumption of 3250W.                      ', 4, '16000.00', '3Avalon.jpg'),
(4, 'AvalonMiner 1126', 'Model AvalonMiner 1126 from Canaan mining SHA-256 algorithm with a maximum hashrate of 90Th/s for a power consumption of 3420W.', 2, '19000.00', '4Avalon.jpg'),
(5, 'Bitmain Antminer S17 (56Th)', 'Antminer S17 (56Th) from Bitmain mining SHA-256 algorithm with a maximum hashrate of 56Th/s for a power consumption of 2520W.', 1, '12000.00', '5Bitmain.jpg'),
(6, 'Bitmain Antminer S17 (53Th)', 'Antminer S17 (53Th) from mining SHA-256 algorithm with a maximum hashrate of 53Th/s for a power consumption of 2385W.', 6, '13000.00', '6Bitmain.jpg'),
(7, 'Bitmain Antminer S19 95th/s', 'Antminer S19 (95Th) from Bitmain mining SHA-256 algorithm with a maximum hashrate of 95Th/s for a power consumption of 3250W.\r\n', 3, '17000.00', '7Bitmain.jpg'),
(8, 'Bitmain Antminer S19 Pro (110Th)', 'Antminer S19 Pro (110Th) from Bitmain mining SHA-256 algorithm with a maximum hashrate of 110Th/s for a power consumption of 3250W.', 3, '19000.00', '8Bitmain.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` varchar(4) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `Pr` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `username`, `password`, `email`, `Pr`) VALUES
('1951', 'bushra', 'bushra_12', '$2y$10$vlJRiWniEZa1e4A62vALXuifn4BeIUvCKLYPBTC/lQkcYGOjggs82', 'bushra12@gmail.com', 'u'),
('2741', 'Admin', 'Admin', '$2y$10$ZH9wMHnpDfIbj4MiWfUPzeav3Pt0CxCGA6hd9.GQlFo40WaIgWG1K', 'ad@gmail.com', 'a'),
('5695', 'alghadeer', 'alghadeer_SH', '$2y$10$jdYYSz8GtcRolQDgz9GoI.u1FIsJXG1A/ulL/6Di9xBcpczF3VHd6', 'alghadeer90@gmail.com', 'u'),
('6318', 'layan', 'layan_m', '$2y$10$4grblDXd0HCg67Y7TMtWzemrRZjbEfYntQBURT8.YIGjy9n/s7PkG', 'layanM@gmail.com', 'u'),
('8089', 'Noor', 'noor_h', '$2y$10$gvdoBRq1TN.yavHz6l/1ZutqVKot07pym4edy65Tu9Xl/XyCtDT/a', 'noorH@gmail.com', 'u'),
('9994', 'asma', 'asma11', '$2y$10$G9widkF6ML8X.R4.OpOUnO2.VPK3QZeeigamiv9s8DPUM5WHuKTU2', 'asma11@gmail.com', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
