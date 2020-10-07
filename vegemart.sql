-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 10:19 AM
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
(17, 'vegemartucsc@gmail.c', 'c0acbafe8b2dd5b3e400be93a602ddd35f7ce01ebc17c');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `street`, `city`, `pnumber`, `email`, `password`, `userType`) VALUES
(4, 'Anushk', 'Darshana', 'anushkaD', 'aojsopj', 'asjflajsf', 'alsjd', 'alsdj', 'aaaa', 'user'),
(5, 'Anushk', 'Darshana', 'anushkaD', 'aojsopj', 'asjflajsf', 'alsjd', 'alsdj', 'aaaa', 'user'),
(6, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'seller'),
(7, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'seller'),
(8, 'Anushk', 'Darshana', 'anushkaDa', 'aojsopj', 'asjflajsf', 'alsjd', 'alsdja', 'aaaa', 'seller'),
(11, 'Anushka', 'Darshana', 'anu', 'Badulla', 'Badulla', '455', '456', '7878', 'user'),
(15, '777', '777', '777', '777', '777', 'vegemartuc', 'vegemartucsc@gmail.com', '15de21c670ae7c3f6f3f1f37029303c9', 'user'),
(16, '222', '222', '222', '222', '222', '222', '222', 'bcbe3365e6ac95ea2c0343a2395834dd', 'seller'),
(17, '456', '456', '456', '456', '456', '456', '456', 'bcbe3365e6ac95ea2c0343a2395834dd', 'seller'),
(18, '888', '888', '888', '888', '888', '888', '888', '$2y$10$d23JwnD/a8KOeGepVeDXG.AcVb7blavfKLpRFTNlYAW', 'user'),
(19, '999', '999', '999', '999', '999', '999', '999', '$2y$10$99ikZwzg2vRiN8mvEdAjMOp23inRqpZ7qnXiU4OyiMV', 'user');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
