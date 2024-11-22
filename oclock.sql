-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2024 at 03:52 PM
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
-- Database: `oclock`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_id`
--

CREATE TABLE `customer_id` (
  `cus_id` int(11) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `midde_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `phone_number` int(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items_tb`
--

CREATE TABLE `items_tb` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `item_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_tb`
--

CREATE TABLE `orders_tb` (
  `order_id` int(11) NOT NULL,
  `date_ordered` datetime NOT NULL,
  `order_status` enum('pending','shipped','delivered','cancelled') NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `user_name`, `pass_word`) VALUES
(1, '[value-2]', '[value-3]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_id`
--
ALTER TABLE `customer_id`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `items_tb`
--
ALTER TABLE `items_tb`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `item_name` (`item_name`);

--
-- Indexes for table `orders_tb`
--
ALTER TABLE `orders_tb`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_item_name` (`item_name`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_id`
--
ALTER TABLE `customer_id`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items_tb`
--
ALTER TABLE `items_tb`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_tb`
--
ALTER TABLE `orders_tb`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_id`
--
ALTER TABLE `customer_id`
  ADD CONSTRAINT `fk_cus_id` FOREIGN KEY (`cus_id`) REFERENCES `orders_tb` (`order_id`);

--
-- Constraints for table `orders_tb`
--
ALTER TABLE `orders_tb`
  ADD CONSTRAINT `fk_item_name` FOREIGN KEY (`item_name`) REFERENCES `items_tb` (`item_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
