-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 09:10 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fame_technologies_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE `login1` (
  `email` varchar(150) NOT NULL,
  `pd` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`email`, `pd`) VALUES
('rachitaniranjan213@gmail.com', '123abcd'),
('m12@gmail.com', ''),
('maheswariniranjan@gmail.com', '123abcde'),
('rachitan10@gmail.com', '123456789'),
('something@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `img` char(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `contact`, `img`) VALUES
(19, 'Rachita123', 'N12', 'rachitaniranjan213@gmail.com', '2147483448', 'file_example_JPG_500kB.jpg'),
(20, 'Maheswari B', 'B', 'm12@gmail.com', '2147483647', 'download.jpg'),
(21, 'Maheswari N', 'B', 'maheswariniranjan@gmail.com', '2147483647', 'Maheswari download.jpg'),
(22, 'Rachita1', 'N', 'rachitan10@gmail.com', '2147483647', 'file_example_JPG_500kB.jpg'),
(23, 'something', 'N', 'something@gmail.com', '1234567890', 'somethingGraphic_Pave_ReadBetweenTheLines.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
