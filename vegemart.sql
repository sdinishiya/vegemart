-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 05:53 PM
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
  `adID` int(10) NOT NULL,
  `productID` int(10) NOT NULL,
  `ad_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`adID`, `productID`, `ad_description`) VALUES
(298727179, 801061918, ''),
(495287731, 0, ''),
(525770719, 2049725459, ''),
(554836706, 1584421164, ''),
(1011440299, 2078485380, ''),
(1017251638, 1738577475, ''),
(1018504831, 449947638, ''),
(1163672570, 2108944390, ''),
(1357002672, 889416063, 'lalalala'),
(1516053061, 85407899, ''),
(1781406871, 1543313718, ''),
(2015952070, 359773705, '');

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
(6, 'may', 'may', '12345', 'may', 'may', 'may', 'may.jpg', 'may'),
(7, 'ucsc', 'ucsc', '1234', 'ucsc', 'ucsc', 'ucsc', 'farmer4.jpg', 'ucsc'),
(8, 'imashi', 'Dissanayake', '12345678', 'imashi', 'imashi', 'imashi', 'farmer2.jpg', 'imashi'),
(9, 'Tom', 'Hanks', '8156384292', 'No. 4B', 'Brisbane', 'London', 'farmer8.jpg', 'tom'),
(10, 'Anushka', 'Darshana', '88888', '888', '888', 'Badulla', '', 'anuD'),
(11, 'Anu', 'Dar', '78888', '888', '888', 'Kandy', 'IMG-20171112-WA0019.jpg', 'ann'),
(12, 'anus', 'anus', '777', '888', '888', 'ba', 'default.png', '88'),
(13, 'aaa', 'aaa', '5555', '555', '555', 'Kandy', 'farmer2.jpg', '555'),
(14, 'aaa', 'aaa', '5555', '555', '555', 'Kandy', 'farmer2.jpg', '5555'),
(15, 'aaa', 'aaa', '5555', '555', '555', 'Kandy', 'farmer2.jpg', '55556'),
(16, 'anu', 'anu', '88', '88', '88', '88', '', '888888'),
(9069688, 'xx', 'xxx', 'x', 'x', 'x', 'x', 'default.png', 'x'),
(257475743, 'imashi', 'imashi', '12345', '40/A', 'ampitiya', 'Kandy', 'farmer1.jpg', 'imashii'),
(659729484, 'll', 'll', 'lll', 'lll', 'lll', 'lll', 'default.png', 'lll'),
(696475902, 'ww', 'ww', 'ww', 'ww', 'ww', 'ww', 'default.png', 'ww'),
(1155095894, 'aa', 'aa', '88', '88', '88', '88', 'default.png', '889999'),
(1173906003, 'y', 'y', 'y', 'y', 'y', 'y', 'IMG-20171112-WA0011.jpg', 'y'),
(1205322358, 'oo', 'oo', 'o', 'o', 'o', 'o', 'default.png', 'o');

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
(1324612143, 'zz', 'zz', 'zz', 'tuk', 'zz', 'zz', 'farmer2.jpg', 'zz'),
(1733883824, 'ppp', 'ppp', '9999', 'lorry', '9999', '999', 'farmer2.jpg', '9'),
(1862066397, 'Anushka', 'Darshana', '078888888', 'bike', '6999', '666', 'IMG-20171112-WA0010.', '55'),
(1952694509, 'oo', 'oo', 'oo', '555', '555', 'oo', 'farmer.jpg', 'oo');

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
  `adID_fk` int(100) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `sellerID`, `name`, `quantity`, `minPrice`, `imageName`, `address1`, `address2`, `city`, `adID_fk`, `description`, `date`) VALUES
(887607466, 257475743, 'potato', 300, 30, 'potato.jpg', '40/A', 'ampitiya', 'Kandy', 0, '', '0000-00-00'),
(887607467, 257475743, 'carrot', 60, 25, 'carrots.jpg', '40/A', 'ampitiya', 'Kandy', 0, '', '0000-00-00'),
(887607468, 257475743, 'Beans', 60, 25, 'beans.png', '40/A', 'ampitiya', 'Kandy', 0, '', '0000-00-00'),
(887607469, 257475743, 'cabbage', 60, 25, 'cabbage.jpg', '40/A', 'ampitiya', 'Kandy', 0, '', '0000-00-00'),
(887607470, 257475743, 'tomato', 60, 25, 'tomato.jpg', '40/A', 'ampitiya', 'Kandy', 0, '', '0000-00-00'),
(887607471, 257475743, 'beet', 60, 25, 'beetroot.jpg', '40/A', 'ampitiya', 'Kandy', 0, '', '0000-00-00');

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

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewID`, `userID`, `sellerID`, `review`, `dateTime`) VALUES
(4, 12, 8, '', '0000-00-00 00:00:00.000000'),
(5, 12, 8, '', '0000-00-00 00:00:00.000000'),
(6, 12, 8, '', '0000-00-00 00:00:00.000000'),
(7, 12, 8, '', '0000-00-00 00:00:00.000000'),
(8, 12, 8, '', '0000-00-00 00:00:00.000000'),
(9, 12, 8, '', '0000-00-00 00:00:00.000000'),
(10, 12, 8, '', '0000-00-00 00:00:00.000000'),
(11, 17, 0, '', '0000-00-00 00:00:00.000000'),
(25, 17, 16, 'anushka', '0000-00-00 00:00:00.000000'),
(26, 0, 0, 'anushka anushka', '0000-00-00 00:00:00.000000'),
(27, 1674681363, 16, 'aaa', '0000-00-00 00:00:00.000000');

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
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `userType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `userType`) VALUES
(9069688, 'y@y', '7694f4a66316e53c8cdd9d9954bd611d', 'seller'),
(206001399, '99@9', 'ac627ab1ccbdb62ec96e702f07f6425b', 'deliverer'),
(257475743, 'imashi@imashi.com', '8df5b615a66f91fd35831d1130ee5daf', 'seller'),
(659729484, 'll@ll', '5b54c0a045f179bcbbbc9abcb8b5cd4c', 'seller'),
(696475902, 'ww@ww', 'ad57484016654da87125db86f4227ea3', 'user'),
(1155095894, 'aa@qqqq', '2a38a4a9316c49e5a833517c45d31070', 'seller'),
(1173906003, 'y@y', '415290769594460e2e485922904f345d', 'seller'),
(1205322358, 'oo@o', 'd95679752134a2d9eb61dbd7b91c4bcc', 'seller'),
(1324612143, 'z@z', '25ed1bcb423b0b7200f485fc5ff71c8e', 'deliverer'),
(1733883824, 'ppp@ppppp', 'b706835de79a2b4e80506f582af3676a', 'deliverer'),
(1862066397, 'a@qqq', 'b53b3a3d6ab90ce0268229151c9bde11', 'deliverer'),
(1952694509, 'oo@OO', 'd95679752134a2d9eb61dbd7b91c4bcc', 'deliverer');

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
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=887607472;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
