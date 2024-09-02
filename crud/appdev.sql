-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 02, 2024 at 10:01 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `Price` text NOT NULL,
  `Quantity` text NOT NULL,
  `Createat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updateat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Description`, `Price`, `Quantity`, `Createat`, `Updateat`) VALUES
(2, 'Scissors', 'Matalas', '200', '10', '2024-09-02 16:51:56', '2024-09-02 17:55:50'),
(4, 'Comb', 'Yellow', '10', '1', '2024-09-02 17:55:32', '2024-09-02 17:55:32'),
(5, 'Charger', '120Watts', '12', '1', '2024-09-02 17:57:16', '2024-09-02 17:57:16'),
(6, 'Flashlight', '10000 luminousity', '350', '1', '2024-09-02 17:57:47', '2024-09-02 17:57:47'),
(7, 'Water', '20 liters', '100', '1', '2024-09-02 17:58:20', '2024-09-02 17:58:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
