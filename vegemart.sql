-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 08:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
  `adID` int(10) NOT NULL,
  `productID` int(10) NOT NULL,
  `avdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`adID`, `productID`, `avdate`) VALUES
(0, 0, '0000-00-00'),
(327938200, 1460445931, '0000-00-00'),
(2007207040, 1937291008, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(10) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `phoneNum` varchar(10) NOT NULL,
  `address1` varchar(20) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` text NOT NULL,
  `profilePic` text NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `fName`, `lName`, `phoneNum`, `address1`, `address2`, `city`, `profilePic`, `username`) VALUES
(231067611, 'darshana', 'vithanage', '0715556893', '75/2', 'bandarawella', 'badulla', 'may.jpg', 'darshana'),
(1457947671, 'llll', ']', '0000000', ']', '000]', ']', 'back.png', ']'),
(1649681227, 'a', 'a', 'a', 'a', 'a', 'a', 'default.png', 'e'),
(1814794867, 'jala', 'jal', '555', '5', '55', '5', 'default.png', '5'),
(1961941923, 'kk', 'kk', 'k', 'k', 'k', 'k', 'default.png', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `deliverer`
--

CREATE TABLE `deliverer` (
  `delivererID` int(10) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `phoneNum` varchar(10) NOT NULL,
  `vehicle` varchar(10) NOT NULL,
  `vehicleNo` varchar(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `profilePic` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliverer`
--

INSERT INTO `deliverer` (`delivererID`, `fName`, `lName`, `phoneNum`, `vehicle`, `vehicleNo`, `city`, `profilePic`, `username`) VALUES
(81825894, 'Anushka', 'Darshana', '0715279016', 'bike', '3', '3', 'default.png', '5'),
(1377695894, 'Anushka', 'Darshana', '0715279016', 'bike', '3', '3', 'default.png', 'k'),
(2011630912, 'vithanage', 'darshana', '0556669989', 'tuk', 'KN-1238', 'badulla', 'default.png', 'vithanage');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(10) NOT NULL,
  `sellerID` int(20) NOT NULL,
  `name` text NOT NULL,
  `quantity` int(10) NOT NULL,
  `minPrice` int(10) NOT NULL,
  `imageName` text NOT NULL,
  `address1` varchar(20) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `exdate` date NOT NULL,
  `time` time NOT NULL,
  `datetime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `sellerID`, `name`, `quantity`, `minPrice`, `imageName`, `address1`, `address2`, `city`, `description`, `exdate`, `time`, `datetime`) VALUES
(887607488, 1961941923, 'k', 0, 0, 'White-Black-Logo (1).png', 'k', 'k', 'kk', 'k', '2020-11-06', '838:59:59', '0000-00-00 00:00:00.000000'),
(887607489, 1961941923, '6', 6, 6, 'LDS OC Tshirt_bela-01.png', '6', '6', '6', '6', '2020-11-13', '00:00:00', '0000-00-00 00:00:00.000000'),
(887607490, 1961941923, '5', 5, 5, 'TRAIN insane (15).png', '5', '5', '5', '5', '2020-11-06', '00:00:00', '0000-00-00 00:00:00.000000'),
(887607491, 1961941923, '6', 66, 6, 'Mountain Bike Travel_Adventure Illustration T-Shirt (5).png', '6', '6', '6', '6', '2020-11-06', '838:59:59', '0000-00-00 00:00:00.000000'),
(887607492, 1961941923, ';', 0, 0, 'add-button-with-plus-symbol-in-a-black-circle.png', '75/2', ';', 'Badulla', ';', '2020-11-06', '00:00:00', '0000-00-00 00:00:00.000000'),
(887607493, 1961941923, '2', 2, 2, 'TRAIN insane (15).png', '2', '2', '2', '2', '2020-11-25', '00:00:00', '0000-00-00 00:00:00.000000'),
(887607494, 1961941923, '3', 3, 3, 'TRAIN insane (14).png', '3', '3', '3', '3', '2020-11-26', '00:00:00', '2020-11-14 18:14:01.000000');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `sellerID` int(10) NOT NULL,
  `review` text NOT NULL,
  `dateTime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `userType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `userType`) VALUES
(81825894, '', 'e4da3b7fbbce2345d7772b0674a318d5', 'deliverer'),
(231067611, 'darshana@gmail.com', 'af63d3f32c07622be553999677b7924c', 'seller'),
(1377695894, 'anushka.daraaaashana01@gmail.com', '8ce4b16b22b58894aa86c421e8759df3', 'deliverer'),
(1457947671, '', '0fbd1776e1ad22c59a7080d35c7fd4db', 'seller'),
(1649681227, 'anushka.darshana01@gmail.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'user'),
(1814794867, 'jala@jala', 'e4da3b7fbbce2345d7772b0674a318d5', 'user'),
(1961941923, 'kk@kk', '8ce4b16b22b58894aa86c421e8759df3', 'seller'),
(2011630912, 'vithanage@gmail.com', '9e3669d19b675bd57058fd4664205d2a', 'deliverer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`adID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliverer`
--
ALTER TABLE `deliverer`
  ADD PRIMARY KEY (`delivererID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewID`);

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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=887607495;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
