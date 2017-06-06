-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 04:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_fruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

-- CREATE TABLE `categories` (
--   `id_category` int(10) UNSIGNED NOT NULL,
--   `name_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`, `created_at`, `updated_at`) VALUES
(1, 'Fruit', '2017-06-05 00:42:14', '2017-06-05 00:42:14'),
(2, 'Meat', '2017-06-05 00:48:29', '2017-06-05 00:48:29'),
(3, 'Vegetables', '2017-06-05 00:48:41', '2017-06-05 00:48:41'),
(4, 'Hoa Quả', '2017-06-05 00:49:25', '2017-06-05 00:49:25'),
(5, 'Rau', '2017-06-05 00:49:30', '2017-06-05 00:49:30'),
(6, 'Củ', '2017-06-05 00:49:36', '2017-06-05 00:49:36'),
(7, 'Hoa', '2017-06-05 00:49:47', '2017-06-05 00:49:47'),
(8, 'Quả', '2017-06-05 00:49:53', '2017-06-05 00:49:53'),
(9, 'Thịt', '2017-06-05 00:50:01', '2017-06-05 00:50:01'),
(11, 'Trái Cây', '2017-06-05 00:50:38', '2017-06-05 00:50:38'),
(12, 'Nước', '2017-06-05 02:39:14', '2017-06-05 02:39:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
