-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 19, 2024 at 07:38 AM
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
-- Table structure for table `AccessoryProducts`
--

CREATE TABLE IF NOT EXISTS `AccessoryProducts` (
  `AccessoryProductID` int(11) NOT NULL,
  `AccessoryProductCode` varchar(10) NOT NULL,
  `AccessoryProductName` varchar(255) NOT NULL,
  `AccessoryDescription` text NOT NULL,
  `AccessoryCategoryID` int(11) NOT NULL,
  `AccessoryWholesalePrice` decimal(10,2) NOT NULL,
  `AccessoryListPrice` decimal(10,2) NOT NULL,
  `AccessorySize` varchar(255) DEFAULT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `AccessoryProducts`
--

INSERT INTO `AccessoryProducts` (`AccessoryProductID`, `AccessoryProductCode`, `AccessoryProductName`, `AccessoryDescription`, `AccessoryCategoryID`, `AccessoryWholesalePrice`, `AccessoryListPrice`, `AccessorySize`, `DateCreated`) VALUES
(1001, 'QEK', 'QuickHeat Electric Kettle', 'A fast-boiling electric kettle with an auto shut-off feature. Ideal for making tea, coffee, or instant noodles quickly.', 100, 30.00, 60.00, 'Small', '2024-10-19 03:04:23'),
(1002, 'SPK', 'Stainless Pro Kettle', 'Durable stainless steel electric kettle with precise temperature control. It heats water quickly and keeps it warm for a longer time.', 100, 35.00, 70.00, 'Medium', '2024-10-19 03:04:24'),
(1003, 'PMK', 'Portable Mini Kettle', 'Compact and lightweight electric kettle, perfect for travel or small spaces. It boils water quickly and shuts off automatically for safety.', 100, 25.00, 50.00, 'Large', '2024-10-19 03:04:33'),
(2001, 'CFP', 'Classic French Press', 'A glass French Press designed to deliver a rich, full-bodied coffee experience. The stainless steel filter ensures smooth brewing every time.', 200, 20.00, 40.00, 'Large', '2024-10-19 03:04:52'),
(2002, 'SSFP', 'Stainless Steel French Press', 'A sturdy stainless steel French Press that keeps your coffee hot longer. The double-wall construction ensures durability and consistent flavor.', 200, 25.00, 30.00, 'Small', '2024-10-19 03:04:53'),
(2003, 'TFP', 'Travel French Press', 'A portable French Press designed for coffee lovers on the go. It is lightweight and easy to clean, making it perfect for trips.', 200, 18.00, 36.00, 'Medium', '2024-10-19 03:04:54'),
(3001, 'PTIS', 'Premium Tea Infuser Set', 'A high-quality tea infuser set made of stainless steel and glass for a clean brew. It includes a fine mesh filter that prevents loose leaves from entering your drink.', 300, 15.00, 30.00, 'Medium', '2024-10-19 03:05:51'),
(3002, 'CTIS', 'Ceramic Tea Infuser Set', 'A beautifully designed ceramic tea infuser set with a large capacity. The fine mesh filter ensures that only the purest tea is poured into your cup.', 300, 18.50, 30.00, 'Large', '2024-10-19 03:05:56'),
(3003, 'PTI', 'Portable Tea Infuser', 'A travel-sized tea infuser made with durable plastic and a fine mesh filter. Perfect for brewing loose leaf tea wherever you go.', 300, 12.00, 30.00, 'Small', '2024-10-19 03:05:57'),
(4001, 'ECG', 'Electric Coffee Grinder', 'A powerful electric coffee grinder with adjustable grind settings. Its compact design saves space while providing consistent results.', 400, 30.00, 60.00, 'Small', '2024-10-19 03:10:31'),
(4002, 'MHG', 'Manual Hand Grinder', 'A traditional manual hand grinder with a ceramic burr for precise grinding. It is easy to use and perfect for coffee lovers who prefer a hands-on experience.', 400, 20.00, 40.00, 'Large', '2024-10-19 03:10:41'),
(4003, 'PBCG', 'Pro Burr Coffee Grinder', 'A professional-grade burr grinder with multiple grind settings. Designed for serious coffee enthusiasts, it delivers uniform grinds every time.', 400, 55.00, 70.00, 'Medium', '2024-10-19 03:10:42'),
(5001, 'CBP', 'Cold Brew Pitcher', 'A sleek cold brew coffee maker that provides smooth, rich coffee with less acidity. The easy-to-pour pitcher is perfect for serving and storing your brew.', 500, 25.00, 50.00, 'Medium', '2024-10-19 03:06:36'),
(5002, 'CCBM', 'Compact Cold Brew Maker', 'A compact cold brew maker designed for small kitchens or travel. It produces delicious cold brew coffee in just a few simple steps.', 500, 20.00, 30.00, 'Small', '2024-10-19 03:06:37'),
(5003, 'DCBS', 'Deluxe Cold Brew System', 'A deluxe cold brew system with dual filtration for an ultra-smooth brew. The large capacity is ideal for making coffee in batches for the week.', 500, 35.00, 70.00, 'Large', '2024-10-19 03:06:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AccessoryProducts`
--
ALTER TABLE `AccessoryProducts`
 ADD PRIMARY KEY (`AccessoryProductID`), ADD UNIQUE KEY `AccessoryProductCode` (`AccessoryProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
