-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 11:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shootshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `productID`, `userID`) VALUES
(7, 11, 1),
(8, 12, 1),
(9, 1, 1),
(10, 13, 1),
(11, 15, 1),
(12, 13, 4),
(13, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Ilir Sadiku', 'ilirsadiku@gmail.com', 'Complimenting the shoes', 'I have worn the shoes for a few days and can say they feel amazing ...');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `Id` int(11) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `action` longtext NOT NULL,
  `log_date` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`Id`, `userID`, `action`, `log_date`) VALUES
(1, '2', 'User: Eros Mehmeti with the ID: 2 has been registered', 'Sunday, 24th of April 2022, 10:54 PM'),
(2, '2', 'User: Eros Mehmeti with the ID: 2 logged in', 'Sunday, 24th of April 2022, 10:54 PM'),
(3, '1', 'User: Ilir Sadiku with the ID: 1 logged in', 'Sunday, 24th of April 2022, 10:55 PM'),
(4, '1', 'User: Ilir Sadiku with the ID: 1 has deleted: Jordan Max 200 with the ID: 4', 'Sunday, 24th of April 2022, 10:56 PM'),
(5, '1', 'User: Ilir Sadiku with the ID: 1 has deleted: Jordan Max 200 with the ID: 7', 'Sunday, 24th of April 2022, 10:56 PM'),
(6, '1', 'User: Ilir Sadiku with the ID: 1 has deleted: AJ 13 Retro with the ID: 3', 'Sunday, 24th of April 2022, 10:56 PM'),
(7, '1', 'User: Ilir Sadiku with the ID: 1 has put: AJ 13 Retro in the cart', 'Sunday, 24th of April 2022, 10:56 PM'),
(8, '1', 'User: Ilir Sadiku with the ID: 1 has put: Jordan Max 200 in the cart', 'Sunday, 24th of April 2022, 10:56 PM'),
(9, '1', 'User: Ilir Sadiku with the ID: 1 has removed: ', 'Sunday, 24th of April 2022, 10:56 PM'),
(10, '1', 'User: Ilir Sadiku with the ID: 1 has deleted: Jordan Max 200 with the ID: 6', 'Sunday, 24th of April 2022, 10:57 PM'),
(11, '1', 'User: Ilir Sadiku with the ID: 1 has put: AJ 13 Retro in the cart', 'Sunday, 24th of April 2022, 10:57 PM'),
(12, '1', 'User: Ilir Sadiku with the ID: 1 has removed: ', 'Sunday, 24th of April 2022, 10:57 PM'),
(13, '1', 'User: Ilir Sadiku with the ID: 1 has put: AJ 13 Retrol in the cart', 'Sunday, 24th of April 2022, 10:57 PM'),
(14, '1', 'User: Ilir Sadiku with the ID: 1 has removed: ', 'Sunday, 24th of April 2022, 10:57 PM'),
(15, '1', 'User: Ilir Sadiku with the ID: 1 has deleted:  with the ID: 2', 'Sunday, 24th of April 2022, 10:58 PM'),
(16, '1', 'User: Ilir Sadiku with the ID: 1 has inserted: AJ 1 Retro High Fusion ', 'Sunday, 24th of April 2022, 11:03 PM'),
(17, '1', 'User: Ilir Sadiku with the ID: 1 has deleted:  with the ID: 8', 'Sunday, 24th of April 2022, 11:03 PM'),
(18, '1', 'User: Ilir Sadiku with the ID: 1 has deleted:  with the ID: 5', 'Sunday, 24th of April 2022, 11:03 PM'),
(19, '1', 'User: Ilir Sadiku with the ID: 1 has put: AJ 13 Retro in the cart', 'Sunday, 24th of April 2022, 11:03 PM'),
(20, '1', 'User: Ilir Sadiku with the ID: 1 has removed: AJ 13 Retro', 'Sunday, 24th of April 2022, 11:03 PM'),
(21, '1', 'User: Ilir Sadiku with the ID: 1 has put: AJ 13 Retro in the cart', 'Sunday, 24th of April 2022, 11:04 PM'),
(22, '1', 'User: Ilir Sadiku with the ID: 1 has removed: AJ 13 Retro from the cart', 'Sunday, 24th of April 2022, 11:04 PM'),
(23, '1', 'User: Ilir Sadiku with the ID: 1 has inserted: Jordan 3 Bred', 'Sunday, 24th of April 2022, 11:06 PM'),
(24, '1', 'User: Ilir Sadiku with the ID: 1 has inserted: Jordan 3 Bred', 'Sunday, 24th of April 2022, 11:07 PM'),
(25, '1', 'User: Ilir Sadiku with the ID: 1 has deleted: Jordan 3 Bred with the ID: ', 'Sunday, 24th of April 2022, 11:07 PM'),
(26, '1', 'User: Ilir Sadiku with the ID: 1 has deleted: Jordan 3 Bred with the ID: ', 'Sunday, 24th of April 2022, 11:07 PM'),
(27, '1', 'User: Ilir Sadiku with the ID: 1 has updated: Jordan 3 with the ID: 10', 'Sunday, 24th of April 2022, 11:08 PM'),
(28, '1', 'User: Ilir Sadiku with the ID: 1 has deleted: Jordan 3 with the ID: ', 'Sunday, 24th of April 2022, 11:10 PM'),
(29, '1', 'User: Ilir Sadiku with the ID: 1 has deleted: Jordan 3 with the ID: 10', 'Sunday, 24th of April 2022, 11:11 PM'),
(30, '1', 'User: Ilir Sadiku with the ID: 1 has deleted: Jordan 3 Bred with the ID: 9', 'Sunday, 24th of April 2022, 11:11 PM'),
(31, '3', 'User: Dion Osmani with the ID: 3 has been registered', 'Sunday, 24th of April 2022, 11:11 PM'),
(32, '4', 'User: Sara Shaqiri with the ID: 4 has been registered', 'Sunday, 24th of April 2022, 11:12 PM'),
(33, '4', 'User: Sara Shaqiri with the ID: 4 logged in', 'Sunday, 24th of April 2022, 11:12 PM'),
(34, '1', 'User: Ilir Sadiku with the ID: 1 logged in', 'Sunday, 24th of April 2022, 11:12 PM'),
(35, '1', 'User: Ilir Sadiku with the ID: 1 has inserted: AJ 13 Retro Low', 'Sunday, 24th of April 2022, 11:12 PM'),
(36, '1', 'User: Ilir Sadiku with the ID: 1 has inserted: AJ 13 Retro Obisidian', 'Sunday, 24th of April 2022, 11:13 PM'),
(37, '1', 'User: Ilir Sadiku with the ID: 1 has inserted: AJ 1 Mid Metallic', 'Sunday, 24th of April 2022, 11:13 PM'),
(38, '1', 'User: Ilir Sadiku with the ID: 1 has inserted: AJ 13 Retro', 'Sunday, 24th of April 2022, 11:14 PM'),
(39, '1', 'User: Ilir Sadiku with the ID: 1 has inserted: Jordan One Take II', 'Sunday, 24th of April 2022, 11:14 PM'),
(40, '1', 'User: Ilir Sadiku with the ID: 1 has put: AJ 13 Retro Low in the cart', 'Sunday, 24th of April 2022, 11:14 PM'),
(41, '1', 'User: Ilir Sadiku with the ID: 1 has put: AJ 13 Retro Obisidian in the cart', 'Sunday, 24th of April 2022, 11:14 PM'),
(42, '1', 'User: Ilir Sadiku with the ID: 1 has put: AJ 13 Retro in the cart', 'Sunday, 24th of April 2022, 11:14 PM'),
(43, '1', 'User: Ilir Sadiku with the ID: 1 has put: AJ 1 Mid Metallic in the cart', 'Sunday, 24th of April 2022, 11:14 PM'),
(44, '1', 'User: Ilir Sadiku with the ID: 1 has put: Jordan One Take II in the cart', 'Sunday, 24th of April 2022, 11:14 PM'),
(45, '1', 'User: Ilir Sadiku with the ID: 1 logged in', 'Sunday, 24th of April 2022, 11:14 PM'),
(46, '4', 'User: Sara Shaqiri with the ID: 4 logged in', 'Sunday, 24th of April 2022, 11:15 PM'),
(47, '4', 'User: Sara Shaqiri with the ID: 4 has put: AJ 1 Mid Metallic in the cart', 'Sunday, 24th of April 2022, 11:15 PM'),
(48, '3', 'User: Dion Osmani with the ID: 3 logged in', 'Sunday, 24th of April 2022, 11:15 PM'),
(49, '3', 'User: Dion Osmani with the ID: 3 has put: AJ 13 Retro in the cart', 'Sunday, 24th of April 2022, 11:15 PM'),
(50, '1', 'User: Ilir Sadiku with the ID: 1 logged in', 'Sunday, 24th of April 2022, 11:15 PM'),
(51, '1', 'User: Dion Osmani with the ID 3 has been updated by the user: Ilir Sadiku with the ID: 1', 'Sunday, 24th of April 2022, 11:15 PM'),
(52, '1', 'User: Dion Osmani with the ID 3 has been updated by the user: Ilir Sadiku with the ID: 1', 'Sunday, 24th of April 2022, 11:15 PM'),
(53, '1', 'User: Dion Osmani with the ID 3 has been updated by the user: Ilir Sadiku with the ID: 1', 'Sunday, 24th of April 2022, 11:15 PM');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `name`, `price`, `image`) VALUES
(1, 'AJ 13 Retro', '190.00', '1p11.jpg'),
(11, 'AJ 13 Retro Low', '102.00', '2p2.jpg'),
(12, 'AJ 13 Retro Obisidian', '115.00', '12p3.jpg'),
(13, 'AJ 1 Mid Metallic', '87.00', '13p4.jpg'),
(14, 'AJ 13 Retro', '190.00', '14p11.jpg'),
(15, 'Jordan One Take II', '90.00', '15p14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` longtext NOT NULL,
  `updated_at` longtext NOT NULL,
  `last_access` longtext NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `lastname`, `email`, `password`, `created_at`, `updated_at`, `last_access`, `role`) VALUES
(1, 'Ilir', 'Sadiku', 'ilirsadiku@gmail.com', '$2y$10$/t1LQJEKuX34B86MF6226.aZSPHZViG9xnmBE1hjsdh5TkEW4G31G', 'Sunday, 24th of April 2022, 10:27 PM', 'Sunday, 24th of April 2022, 10:49 PM', 'Sunday, 24th of April 2022, 11:15 PM', 'admin'),
(2, 'Eros', 'Mehmeti', 'erosmehmeti@gmail.com', '$2y$10$qplhtWAzGMOtryBaKFBEy.dWeV8b1fQOKxgjqpYiV92yi4BOtgF9i', 'Sunday, 24th of April 2022, 10:54 PM', '', 'Sunday, 24th of April 2022, 10:54 PM', 'user'),
(3, 'Dion', 'Osmani', 'dionosmani@gmail.com', '$2y$10$.I7xCk8km02Xy1geHPKs3unWfgvKG2xzR5PxEb2CdwueapX2quPqS', 'Sunday, 24th of April 2022, 11:11 PM', 'Sunday, 24th of April 2022, 11:15 PM', 'Sunday, 24th of April 2022, 11:15 PM', 'admin'),
(4, 'Sara', 'Shaqiri', 'sarashaqiri@gmail.com', '$2y$10$d1oPD552rk6wg6uI.QUE0eMXppM9hXcaT6CqYt8ypQ7LWVeuslkaO', 'Sunday, 24th of April 2022, 11:12 PM', '', 'Sunday, 24th of April 2022, 11:15 PM', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
