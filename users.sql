-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2022 at 12:56 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` varchar(4) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Pr` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `username`, `password`, `email`, `Pr`) VALUES
('4321', 'munirah', 'mazew_1', 'wezam', 'mazew_2@hotmail.com', 'u'),
('7252', 'Adam', 'Adam@600', 'A600@mad', 'Adam_600@hotmail.com', 'a'),
('7325', 'Nawal', 'Nony4@5', 'Nony2@kk', 'Nony_2000@hotmail.com', 'u'),
('7862', 'safwan', 'safwan700', 'backscho', 'Safwan_56@gmail.com', 'a'),
('8251', 'Ahmad', 'Mary_6', 'joke@hom', 'Maryu_7@hotmail.com', 'a'),
('8632', 'Nora', 'blackrose', 'bbrose@3', 'Blackrose.30@hotmail.com', 'u'),
('8634', 'Mona', 'moon_98', 'Mdon89', 'Moon@hotmail.com', 'u'),
('8653', 'jomanah', 'jojo_1988', 'jhffj88_', 'Najlaa_1988@hotmail.com', 'u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `ID` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
