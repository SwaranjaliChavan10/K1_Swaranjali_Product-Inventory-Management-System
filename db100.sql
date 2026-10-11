-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2026 at 09:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db100`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(60) DEFAULT NULL,
  `pcategory` varchar(60) DEFAULT NULL,
  `pprice` double DEFAULT NULL,
  `pquantity` int(11) DEFAULT NULL,
  `pdes` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `pcategory`, `pprice`, `pquantity`, `pdes`, `user_id`) VALUES
(1, 'Milk', 'food', 200, 5, NULL, 10),
(3, 'mobile phone', 'Electronics', 1000, 5, NULL, 10),
(4, 'laptop', 'Electronics', 200000000, 4, 'xyzzzzzzzzz', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `username`, `password`) VALUES
(1, 'Swaranjali Chavan', 'chavanswaranjali9@gmail.com', 2147483647, 'swara', '$2y$10$0Ckl3VDUFabHnbEsPIiXp.i1RIqa7oOC9o3FJZkF6n5I9I9BqtIBi'),
(2, '', '', 0, '', '$2y$10$vkjvSFLX9ZYCi7DDk3Ydx.xUWF7J0h.kLas8nRfzuzf614IlZlDq6'),
(3, '', '', 0, '', '$2y$10$yN8hcpsX9GX2YelVLHMlzulTmrsExb9eCPektijG2BcXlQwL5pSBW'),
(4, 'tom', 'tom123@gmail.com', 2147483647, 'tommm', '$2y$10$lYAE/5psRX60v174CLqVa.GvrYGGpqGKobKVL0.QBomost4wGR7Ke'),
(5, 'tim', 'tom420@gmail.com', 915205425, 'to90', '$2y$10$E65I3Cg52NdaZDWtc86gUugGk00z7iQ8eOYlr/By.N0PoaNd3Vl6S'),
(6, 'tim1', 'tom4207@gmail.com', 2147483647, 'to907', '$2y$10$w1EBlOUqTeoVe5Za8xPHqu9fQwdVcLo0d7yK0qGyUsf4QKU.qNiXO'),
(7, 'Devisha', 'devisha@gmail.com', 123456, 'devi', '$2y$10$tIyZKwEnv551dCp2FqTrC.faOE7zmNLNr8sCtE/eyeh5oZkZvUO4W'),
(8, 'Poonam  Sonavane', 'poonam12@gmail.com', 12345678, 'poo12', '$2y$10$27Vj.5eeiYIXKYc7NDou9..SgyD0YIIfmjr.PEsL.mpvM4MLWD21W'),
(9, 'Poonam  Sonavane', 'poonam12@gmail.com', 12345678, 'poo12', '$2y$10$eLHV.nVL.YkzUpfMECppEOQac.JygsxcGafFo19OBOAM9NbTxmNBC'),
(10, 'rushali', 'rushali9@gmail.com', 789456, 'ru12', '$2y$10$Brw1ROtl8Q.97tXGG2yaZ.Sy6hnKCcS4UuCMNB7XJN/i.RrpOUfNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
