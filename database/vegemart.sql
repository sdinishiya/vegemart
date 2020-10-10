-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 08:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vegemart`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `adID` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`adID`, `date`, `description`) VALUES
(40617565, '0000-00-00', ''),
(236513889, '0000-00-00', ''),
(431911544, '0000-00-00', ''),
(562360163, '0000-00-00', ''),
(1169447677, '0000-00-00', ''),
(1271090235, '0000-00-00', ''),
(1719155431, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `sellerID` int(20) NOT NULL,
  `name` text NOT NULL,
  `quantity` int(10) NOT NULL,
  `minPrice` int(10) NOT NULL,
  `imageName` text NOT NULL,
  `address1` varchar(20) NOT NULL,
  `address2` varchar(20) NOT NULL,
  `address3` varchar(20) NOT NULL,
  `adID_fk` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `sellerID`, `name`, `quantity`, `minPrice`, `imageName`, `address1`, `address2`, `address3`, `adID_fk`, `date`) VALUES
(19, 10, 'cabbage', 250, 50, 'cabbage.jpg', '40/A', 'ampitiya', 'kandy', 1169447677, '0000-00-00'),
(20, 10, 'potato', 250, 50, 'potato.jpg', 'a', 'a', 'a', 1719155431, '0000-00-00'),
(21, 10, 'pumpkin', 200, 35, '', 'c', 'v', 'v', 0, '0000-00-00'),
(22, 10, 'broccali', 250, 1, 'broccoli.jpg', 'a', 'ampitiya', 'a', 236513889, '0000-00-00'),
(23, 10, 'a', 1, 1, 'Pumpkin.jpg', '', 'a', 'a', 40617565, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `email`, `token`) VALUES
(6, 'vegemartucsc@gmail.c', '7eeec79fc9b476d8fb50bcdadb6566235f7c9d15c602c'),
(7, 'vegemartucsc@gmail.c', '31933b5f0329e11a7d209f16744fcc945f7c9dea1adfc'),
(8, 'vegemartucsc@gmail.c', 'cea3df42bbb5561d3dcb733d7f1943815f7c9e3bd1de2'),
(9, 'vegemartucsc@gmail.c', 'f14e63f288e98554b722bc660609d1f95f7c9f4e65d4d'),
(10, 'vegemartucsc@gmail.c', '51e2a4c38e7533d74c8e3aa3bb3e3a865f7ca0c1068c4'),
(11, 'vegemartucsc@gmail.c', 'bb842b32a119bbb092cdbb136fbfb6395f7ca410f03ec'),
(12, 'vegemartucsc@gmail.c', '15165d25924ad99a34a68f641b013dda5f7ca415815d9'),
(13, 'vegemartucsc@gmail.c', '68c5be793d33cf50e7a33be63f1853e15f7ca417911e4'),
(14, 'vegemartucsc@gmail.c', 'd7eb05b1b1b7f9238d918fb9f94367cc5f7ca420d91f6'),
(15, 'vegemartucsc@gmail.c', '823a443c1c3a869accd73c956df0d1575f7cd59ce3a6f'),
(16, 'vegemartucsc@gmail.c', 'b3d115a4b1c92695d9d917ff20a8ac645f7cdfa7678e6'),
(17, 'vegemartucsc@gmail.c', 'c0acbafe8b2dd5b3e400be93a602ddd35f7ce01ebc17c'),
(20, 'vegemartucsc@gmail.com', '89cda7a1f3556c98c431e19fdb3254ea5f7de6f62daad');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNum` varchar(10) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` text NOT NULL,
  `profilePic` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fName`, `lName`, `email`, `phoneNum`, `street`, `city`, `profilePic`, `username`, `password`, `userType`) VALUES
(3, 'ucsc', 'ucsc', 'ucsc@ucsc.com', '1234', 'ucsc', 'ucsc', '', 'ucsc', 'd32934b31349d77e70957e057b1bcd28', 'seller'),
(4, 'imashi', 'imashi', 'imashi921a@gmail.com', '1234', 'imashi', 'imashi', '', 'imashi', '8df5b615a66f91fd35831d1130ee5daf', 'seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`adID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `adID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1719155432;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
