-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 03:19 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websiteku`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactID` int(11) NOT NULL,
  `contactName` varchar(255) NOT NULL,
  `contactEmail` varchar(255) NOT NULL,
  `contactPhone` varchar(15) NOT NULL,
  `contactMessage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactID`, `contactName`, `contactEmail`, `contactPhone`, `contactMessage`) VALUES
(1, 'Novita', 'novita123@gmail.com', '1234567', 'Hai');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(100) DEFAULT NULL,
  `ProductPrice` int(25) DEFAULT NULL,
  `ProductImage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductPrice`, `ProductImage`) VALUES
(1, '', 0, ''),
(2, '', 0, ''),
(3, '', 0, ''),
(4, '', 0, ''),
(5, '', 0, ''),
(6, '', 0, ''),
(7, '', 0, ''),
(8, '', 0, ''),
(9, '', 0, ''),
(10, '', 0, ''),
(11, '', 0, ''),
(12, '', 0, ''),
(13, '', 0, ''),
(14, '', 0, ''),
(15, '', 0, ''),
(16, '', 0, ''),
(17, '', 0, ''),
(18, '', 0, ''),
(19, '', 0, ''),
(20, '', 0, ''),
(21, '', 0, ''),
(22, '', 0, ''),
(23, '', 0, ''),
(24, '', 0, ''),
(25, '', 0, ''),
(26, '', 0, ''),
(27, '', 0, ''),
(28, '', 0, ''),
(29, '', 0, ''),
(30, '', 0, ''),
(31, '', 0, ''),
(32, '', 0, ''),
(33, '', 0, ''),
(34, '', 0, ''),
(35, '', 0, ''),
(36, '', 0, ''),
(37, '', 0, ''),
(38, '', 0, ''),
(39, '', 0, ''),
(40, '', 0, ''),
(41, '', 0, ''),
(42, '', 0, ''),
(43, '', 0, ''),
(44, '', 0, ''),
(45, '', 0, ''),
(46, '', 0, ''),
(47, '', 0, ''),
(48, '', 0, ''),
(49, '', 0, ''),
(50, '', 0, ''),
(51, '', 0, ''),
(52, '', 0, ''),
(53, '', 0, ''),
(54, '', 0, ''),
(55, '', 0, ''),
(56, '', 0, ''),
(57, '', 0, ''),
(58, '', 0, ''),
(59, '', 0, ''),
(60, '', 0, ''),
(61, '', 0, ''),
(62, '', 0, ''),
(63, '', 0, ''),
(64, '', 0, ''),
(65, '', 0, ''),
(66, '', 0, ''),
(67, '', 0, ''),
(68, '', 0, ''),
(69, '', 0, ''),
(70, '', 0, ''),
(71, '', 0, ''),
(72, '', 0, ''),
(73, '', 0, ''),
(74, '', 0, ''),
(75, '', 0, ''),
(76, '', 0, ''),
(77, '', 0, ''),
(78, '', 0, ''),
(79, '', 0, ''),
(80, '', 0, ''),
(81, '', 0, ''),
(82, '', 0, ''),
(83, '', 0, ''),
(84, '', 0, ''),
(85, '', 0, ''),
(86, '', 0, ''),
(87, '', 0, ''),
(88, '', 0, ''),
(89, '', 0, ''),
(90, '', 0, ''),
(91, '', 0, ''),
(92, '', 0, ''),
(93, '', 0, ''),
(94, '', 0, ''),
(95, '', 0, ''),
(96, '', 0, ''),
(97, '', 0, ''),
(98, '', 0, ''),
(99, '', 0, ''),
(100, '', 0, ''),
(101, '', 0, ''),
(102, '', 0, ''),
(103, '', 0, ''),
(104, '', 0, ''),
(105, '', 0, ''),
(106, '', 0, ''),
(107, '', 0, ''),
(108, '', 0, ''),
(109, '', 0, ''),
(110, '', 0, ''),
(111, '', 0, ''),
(112, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Show Your Skin', 'sys@gmail.com', '$2y$10$Nqq/y251QX2Ccvb1Ax7hUuMqQSkG3yRLCxN2KPdetnSP3oaXVH70a'),
(4, 'Fatma', 'fatmanuris048@gmail.com', '$2y$10$JQBqep3vCbEgyDf.bEZmNOre7i13MiUSR./XrNYIchZJX9AD5B2TG'),
(5, 'Nisa', 'nisaaulyarahm@gmail.com', '564'),
(7, 'Novita', 'novita123@gmail.com', '$2y$10$p0dEPO68t1s0CwzPhiJKW.FHrZCm3KonXtGTZyJHDbjpPycVteg/a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
