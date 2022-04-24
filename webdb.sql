-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2022 at 08:21 PM
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
(3, 'Avalon A1166pro 81Th/s', 'Blockchain Miner Avalon A1166pro 81Th/s BTC Miner Canaan Miner 1066 1166 With PSU', 2, '18000.00', '3Avalon.jpg'),
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
('3623', 'Noor', 'noor_h', '$2y$10$rKB0Hzs6DS5toF0TVLczGOU5eJ1nwhPZS9hxx9J.JpA00lhCy1z9K', 'noorH@gmail.com', 'u'),
('3786', 'Ahmad', 'ahmd_906', '$2y$10$lPx5g6TPEaFtRtHIE/eUtuNmE3GEgT7vL5E75GmUWLLjyygPZQBs.', 'ahmd699@gmail.com', 'a'),
('4347', 'asma', 'asma11', '$2y$10$pIqMpQq0QuauJPJLk2rTo./KWCsH0Qhw7CCY62xCq4Ob2PJKl1pzm', 'asma11@gmail.com', 'u'),
('4796', 'alghadeer', 'alghadeer_SH', '$2y$10$AcvKpkIFLc3XKGz4g.5Ty.r9JWOg87EULP2gR6w7GKBIQ5vXQAQ4W', 'alghadeer90@gmail.com', 'u'),
('4890', 'bushra', 'bushra_12', '$2y$10$MRdcQN1VzLro9qm6TbnbaeF2o2AfomzWIA285gk/7LdJoQgLZBZey', 'bushra12@gmail.com', 'u'),
('4908', 'layan', 'layan_m', '$2y$10$mMcg5BtEtN7YcPveDxtbH.lSXNP3OVvVyKQ/8erg.bOieffbCzXt2', 'layanM@gmail.com', 'u'),
('5771', 'Adam', 'Adam@600', '$2y$10$aeL.hn.CUrOPEMaET.SpcuHbcm8Bkp2HCcnEZe.JehH0yjh4Aj6pq', 'Adam_600@hotmail.com', 'a'),
('7645', 'safwan', 'safwan700', '$2y$10$Ew1JAJTDM6v1bhGO/KMb/.YQZ1WUSMJ7GhZxeOm93Eg6QcVXNJGHC', 'Safwan_56@gmail.com', 'a');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
