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
-- Table structure for table `users`
--

-- CREATE TABLE `users` (
--   `id_user` int(10) UNSIGNED NOT NULL,
--   `name_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `email_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `password_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `permission_user` int(11) NOT NULL,
--   `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `email_user`, `password_user`, `permission_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Nguyen Hai Nam', 'namnh@nhanhoa.com.vn', '$2y$10$L3JsUXfYHWGMIhut8nsa6ex4r/mGlue3TQ5d4.Pzz4v8CLIIVcnae', 1, NULL, '2017-06-03 01:35:34', '2017-06-03 01:35:34'),
(5, 'name 1', 'name1@gmail.com', '$2y$10$juZfDLI4QXMA9NocFFJiW.gi8gEvrp.m8BaUzg2PzRRiclrBRR1Ta', 0, NULL, '2017-06-04 01:55:20', '2017-06-04 01:55:20'),
(6, 'name 2', 'name2@gmail.com', '$2y$10$9Ok1j9bowGmmwD1L/c2qpOz267p0Y7x/czrnB5wgRW4S7.TN74nhC', 0, NULL, '2017-06-04 01:56:46', '2017-06-04 01:56:46'),
(7, 'demo', 'demo@gmail.com', '$2y$10$xBwcyHv9SjQlS7iSkSgC8eK00jCT9a.7sNit868E6CN9lRjEfzttS', 0, NULL, '2017-06-04 01:57:21', '2017-06-04 01:57:21'),
(8, 'demo2', 'demo2@gmail.com', '$2y$10$zgnUtouXpKdIYTTweLXdEOjRMrvSeD.5SxJ1oglJWWecAAahetjXG', 1, NULL, '2017-06-04 01:57:41', '2017-06-04 01:57:41'),
(9, 'demo3', 'demo3@gmail.com', '$2y$10$oH1JO5/RoKolNJp5pWEvUebgHR5y6bj8zp.6JpfFiUzaMcc3oL.k6', 0, NULL, '2017-06-04 01:58:00', '2017-06-04 01:58:00'),
(10, 'rebecca', 'rebecca@gmail.com', '$2y$10$t2IWGeM72DKL7MUxExKr6OPOy33TEsSK1ZUfHg7TkCD16YUvx43EW', 1, NULL, '2017-06-04 01:58:13', '2017-06-04 01:58:13'),
(12, 'let do it', 'let@gmail.com', '$2y$10$HQ.KbIcJXS/T9vVjcq3Nxucs6ShKh.w5/y6xo80Kmzp65syKO7rf6', 1, NULL, '2017-06-04 01:58:43', '2017-06-04 03:08:19'),
(13, 'check', 'check@gmail.com', '$2y$10$g.ugK63fSMN31Aq7kUGEzeD9bGJvc10CrHNUXye7D1LYyezWWQ5/i', 1, NULL, '2017-06-04 01:59:08', '2017-06-04 01:59:08'),
(14, 'another one', 'another@gmail.com', '$2y$10$1iKXYHlV4mP/bs.pGX0xEuHuY6o9zdiNsvlF9cAkVbFvEatJxEk4K', 0, NULL, '2017-06-04 01:59:57', '2017-06-04 01:59:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_user_unique` (`email_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
