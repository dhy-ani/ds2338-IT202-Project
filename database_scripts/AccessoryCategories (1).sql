-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Nov 16, 2024 at 05:38 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ds2338`
--

-- --------------------------------------------------------

--
-- Table structure for table `AccessoryCategories`
--

CREATE TABLE IF NOT EXISTS `AccessoryCategories` (
  `AccessoryCategoryID` int(11) NOT NULL,
  `AccessoryCategoryCode` varchar(255) NOT NULL,
  `AccessoryCategoryName` varchar(255) NOT NULL,
  `ShelfNumber` int(11) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `AccessoryCategories`
--

INSERT INTO `AccessoryCategories` (`AccessoryCategoryID`, `AccessoryCategoryCode`, `AccessoryCategoryName`, `ShelfNumber`, `DateCreated`) VALUES
(100, 'KET', 'Electric-Kettle', 1, '2024-10-19 03:00:17'),
(200, 'FPS', 'French Press', 5, '2024-10-19 03:00:18'),
(300, 'TIS', 'Tea Infuser Set', 2, '2024-10-19 03:00:19'),
(400, 'CGR', 'Coffee Grinder', 3, '2024-10-19 03:00:19'),
(500, 'CBM', 'Cold Brew Coffee Maker', 7, '2024-10-19 03:38:19'),
(600, 'VAR', 'FourTest', 4, '2024-11-01 16:31:42'),
(700, 'FAP', 'Filter and Pods', 4, '2024-11-01 18:26:33'),
(800, 'TEST', 'Testing step 7A', 4, '2024-11-15 23:31:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AccessoryCategories`
--
ALTER TABLE `AccessoryCategories`
 ADD PRIMARY KEY (`AccessoryCategoryID`), ADD UNIQUE KEY `AccessoryCategoryCode` (`AccessoryCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
