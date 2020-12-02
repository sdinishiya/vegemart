-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 08:37 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactNum` varchar(20) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `profilePic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `name`, `contactNum`, `address1`, `address2`, `city`, `profilePic`) VALUES
(114081887, 'Imashi Dissanayake', '+94715664936', '75/2', 'Bandarawella road', 'Badulla', 'default.png'),
(854706089, 'Imashi Dissanayake', '+94715329635', '75/2', 'Bandarawella road', 'Badulla', 'default.png'),
(866668846, 'Imashi Dissanayake', '+94715329635', '75/2', 'Bandarawella road', 'Badulla', 'default.png'),
(1226182646, 'Imashi Dissanayake', '+94715329635', '75/2', 'Bandarawella road', 'Badulla', 'businessman-daily-routine-concept-poster_1284-4997.jpg'),
(1948068667, 'Anushka Darshana', '+94715261562', '75/2', 'Kandy road', 'Badulla', 'buyer3.jpg'),
(2042920738, 'Imashi Dissanayake', '+94715664936', '75/2', 'Bandarawella road', 'Badulla', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `adID` int(10) NOT NULL,
  `productID` int(10) NOT NULL,
  `avdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `bidID` int(10) NOT NULL,
  `productID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `bidQuantity` int(4) NOT NULL,
  `bidPrice` int(4) NOT NULL,
  `amount` int(10) NOT NULL,
  `startTime` datetime(6) NOT NULL,
  `endTime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`bidID`, `productID`, `userID`, `bidQuantity`, `bidPrice`, `amount`, `startTime`, `endTime`) VALUES
(53, 887607505, 623188709, 250, 30, 30, '2020-12-02 19:17:36.000000', '0000-00-00 00:00:00.000000'),
(54, 887607506, 950516684, 250, 30, 30, '2020-12-02 19:24:34.000000', '0000-00-00 00:00:00.000000'),
(55, 887607507, 950516684, 250, 30, 30, '2020-12-02 19:24:45.000000', '0000-00-00 00:00:00.000000'),
(56, 887607508, 950516684, 250, 30, 30, '2020-12-02 19:24:53.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartItemID` int(11) NOT NULL,
  `userID` int(10) NOT NULL,
  `bidID` int(10) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartItemID`, `userID`, `bidID`, `productID`) VALUES
(16, 623188709, 53, 887607505);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(10) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `phoneNum` varchar(12) NOT NULL,
  `address1` varchar(20) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` text NOT NULL,
  `profilePic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `fName`, `lName`, `phoneNum`, `address1`, `address2`, `city`, `profilePic`) VALUES
(623188709, 'Anushka', 'Darshana11', '+94715261562', '75/2', 'Bandarawella road', 'Badullaa', 'default.png'),
(747801986, 'Imashi', 'Dissanayake', '+94715329635', '75/2', 'Bandarawella', 'Badull', 'default.png'),
(879365972, 'Imashi', 'Dissanayake', '+94715329635', '75/2', 'Bandarawella road', 'Badulla', 'default.png'),
(950516684, 'Anushka', 'Darshana', '+94715261562', '75/2', 'Bandarawella road', 'Badulla', 'default.png');

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
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `profilePic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliverer`
--

INSERT INTO `deliverer` (`delivererID`, `fName`, `lName`, `phoneNum`, `vehicle`, `vehicleNo`, `address1`, `address2`, `city`, `profilePic`) VALUES
(1944979718, 'Imashi', 'Dissanayake', '+947156649', 'bike', 'KC6466', '75/2', 'Bandarawella road', 'Badulla', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE `forum_posts` (
  `post_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_text` text NOT NULL,
  `post_create_time` datetime(6) NOT NULL,
  `post_owner` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_posts`
--

INSERT INTO `forum_posts` (`post_id`, `topic_id`, `post_text`, `post_create_time`, `post_owner`) VALUES
(7, 7, 'But not everyone has a proper knowledge or a big budget to start with an independent venture. If you are engaged in farming and are willing to start your independent business but don’t have much knowledge and resources to get started, we have come up with a simple solution – an online business that can ensure you a guaranteed income throughout the year. You need not be a graduate for this business, nor will you need a huge amount to be invested.', '2020-12-01 00:00:09.000000', 'Imashi Dissanayake'),
(8, 8, 'The lower leaves of my miniature tomato variety are turning yellow unfortunately. I have been fertilizing them with a citrus fertilizer, thinking that would be OK. They receive enough light (12 hrs), so I\'m afraid I have been overwatering them. Can they still be saved? I have watered them again after letting them dry out a bit till the leaves started to droop a little. What else can I do? Do have to plant new seeds?\r\n\r\nThanks!', '2020-12-01 00:00:42.000000', 'Darshana Vithanage'),
(12, 13, 'I was thrilled to find 3 yellow raspberry plants on sale at my local nursery in May. I planted them in a bare spot in my row of reds. They have struggled from the very start while my established reds are absolutely flourishing.', '2020-12-02 19:38:26.000000', 'Dinishiya Sutharshan');

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics`
--

CREATE TABLE `forum_topics` (
  `topic_id` int(11) NOT NULL,
  `topic_title` varchar(150) NOT NULL,
  `topic_create_time` datetime(6) NOT NULL,
  `topic_owner` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_topics`
--

INSERT INTO `forum_topics` (`topic_id`, `topic_title`, `topic_create_time`, `topic_owner`) VALUES
(7, 'How to start selling vegetables online', '2020-12-01 00:00:09.000000', 'Imashi Dissanayake'),
(8, 'Yellowing tomato leaves', '2020-12-01 00:00:42.000000', 'Darshana Vithanage'),
(13, 'Raspberries barely surviving. Reds flourishing', '2020-12-02 19:38:26.000000', 'Dinishiya Sutharshan');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logID` int(20) NOT NULL,
  `userID` int(20) NOT NULL,
  `userType` varchar(20) NOT NULL,
  `active_status` int(2) NOT NULL,
  `login_status` int(2) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logID`, `userID`, `userType`, `active_status`, `login_status`, `date_time`) VALUES
(1, 747801986, 'seller', 1, 1, '2020-12-02 18:52:23'),
(2, 0, 'seller', 1, 1, '2020-12-02 19:02:53'),
(3, 747801986, 'seller', 1, 1, '2020-12-02 19:10:53'),
(4, 623188709, 'user', 1, 1, '2020-12-02 19:16:58'),
(5, 950516684, 'user', 1, 1, '2020-12-02 19:24:18'),
(6, 747801986, 'seller', 1, 1, '2020-12-02 21:19:29'),
(7, 747801986, 'seller', 1, 1, '2020-12-02 21:19:52'),
(8, 623188709, 'user', 1, 1, '2020-12-02 22:24:59'),
(9, 623188709, 'user', 1, 1, '2020-12-02 22:48:22'),
(10, 623188709, 'user', 1, 1, '2020-12-02 22:50:09'),
(11, 623188709, 'user', 1, 1, '2020-12-02 23:37:18'),
(12, 747801986, 'seller', 1, 1, '2020-12-03 00:00:59'),
(13, 623188709, 'user', 1, 1, '2020-12-03 00:05:19'),
(14, 623188709, 'user', 1, 1, '2020-12-03 00:56:31');

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
(887607505, 747801986, 'beans', 1, 100, 'beans.png', '75/2', 'Bandarawella road', 'Badulla', 'These are quality products', '2020-12-17', '00:00:00', '2020-12-02 16:34:58.000000'),
(887607506, 747801986, 'cabbage', 1, 100, 'cabbage.jpg', '75/2', 'Bandarawella road', 'Badulla', 'Good', '2020-12-26', '00:00:00', '2020-12-02 16:35:41.000000'),
(887607507, 879365972, 'broccoli', 1, 100, 'broccoli.jpg', '75/2', 'Bandarawella road', 'Badulla', 'Fresh', '2020-12-23', '00:00:00', '2020-12-02 16:36:39.000000'),
(887607508, 879365972, 'carrot', 1, 100, 'carrot.jpg', '75/2', 'Bandarawella road', 'Badulla', 'Fresh', '2020-12-23', '00:00:00', '2020-12-02 16:37:50.000000');

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
  `userType` varchar(50) NOT NULL,
  `active_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `userType`, `active_status`) VALUES
(114081887, 'admin@gmail.com', '2d44afcd2d9f0c2985ab86ec9b870b16', 'admin', 1),
(623188709, 'anushka@gmail.com', '2d44afcd2d9f0c2985ab86ec9b870b16', 'user', 1),
(747801986, 'imashi@gmail.com', '2d44afcd2d9f0c2985ab86ec9b870b16', 'seller', 1),
(879365972, 'imashi1@gmail.com', '2d44afcd2d9f0c2985ab86ec9b870b16', 'seller', 1),
(950516684, 'anushka1@gmail.com', '2d44afcd2d9f0c2985ab86ec9b870b16', 'user', 1),
(1226182646, 'vithanage@gmail.com', '02514f6ebf10a9c2037894322b990c20', 'coadmin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`adID`);

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`bidID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartItemID`);

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
-- Indexes for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logID`);

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
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `bidID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `forum_topics`
--
ALTER TABLE `forum_topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=887607509;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6546555;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
