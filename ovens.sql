-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 12:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electric_oven`
--

-- --------------------------------------------------------

--
-- Table structure for table `ovens`
--

CREATE TABLE `ovens` (
  `id` int(11) NOT NULL,
  `first_name` text COLLATE utf8_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_id` date NOT NULL,
  `phone_number` varchar(280) COLLATE utf8_unicode_ci NOT NULL,
  `secondary_phone` varchar(280) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `serial_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` text COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adress` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `secondary_adress` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `product_model` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `nomed` text COLLATE utf8_unicode_ci NOT NULL,
  `user_status` text COLLATE utf8_unicode_ci NOT NULL,
  `oven_image` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ovens`
--
ALTER TABLE `ovens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ovens`
--
ALTER TABLE `ovens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
