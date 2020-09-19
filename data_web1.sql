-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 19, 2020 at 08:12 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_web1`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `agent_id` int(11) NOT NULL,
  `business_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_industry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `agent_id`, `business_name`, `abn`, `type_of_industry`, `created_at`, `updated_at`) VALUES
(1, 9, 'gjghj', 'ghjghj', 'jghjghj', '2020-09-19 00:59:17', '2020-09-19 00:59:17'),
(2, 10, 'gjghj', 'ghjghj', 'jghjghj', '2020-09-19 01:00:08', '2020-09-19 01:00:08'),
(3, 11, 'nik', 'nik', 'nik', '2020-09-19 01:01:00', '2020-09-19 01:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_id`, `agent_id`, `address`, `abn`, `profile_pic`, `created_at`, `updated_at`) VALUES
(1, 19, NULL, 'address', 'abn', NULL, '2020-09-19 02:01:23', '2020-09-19 02:01:23'),
(2, 20, NULL, 'address', 'abn', NULL, '2020-09-19 02:02:30', '2020-09-19 02:02:30'),
(3, 21, 10, 'address', 'abn', NULL, '2020-09-19 02:04:40', '2020-09-19 02:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2020_09_17_113702_create_transactions_table', 2),
(13, '2020_09_18_060845_create_products_table', 4),
(16, '2020_09_17_115108_create_agent_tabel', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'tets 1', 5000.00, NULL, NULL),
(2, 'test 2', 1000.00, NULL, '2020-09-18 03:45:43'),
(3, 'gddg', 1210.00, '2020-09-18 01:25:57', '2020-09-18 03:43:45'),
(4, 'test', 125.00, '2020-09-18 01:28:11', '2020-09-18 03:43:37'),
(5, 'f', 10.00, '2020-09-18 01:43:15', '2020-09-18 01:43:15'),
(6, 'f', 10.00, '2020-09-18 01:43:36', '2020-09-18 01:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `amount` double(20,2) NOT NULL,
  `type` enum('d','w') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `state`, `email`, `role`, `email_verified_at`, `password`, `status_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fgdfg', NULL, NULL, 'admin@gmail.com', 2, NULL, '$2y$10$cZUsGKlLTuKrUAcAbqOeVeVIzRSw3CMiRFuFEHzwok6KD23Izpkxq', NULL, '91rZyIyhSwsFRuHaBjymSPag8SeQWgnvxAkmDfomSsVGBR8gglzUYZ9vjYLq', '2020-09-15 06:04:36', '2020-09-15 06:04:36'),
(2, 'nikul', NULL, NULL, 'nik@gmail.com', 4, NULL, '$2y$10$8b6qeS9iMmrPFJIUsCQIPuBqpUl9zMzD8wJhVA6yxzPnuWEK4FsLa', NULL, NULL, NULL, NULL),
(3, 'nik', NULL, NULL, 'agent@gmail.com', 3, NULL, '$2y$10$cZUsGKlLTuKrUAcAbqOeVeVIzRSw3CMiRFuFEHzwok6KD23Izpkxq', NULL, NULL, '2020-09-16 07:07:14', '2020-09-16 07:07:14'),
(4, 'nikul', NULL, NULL, 'test@gmail.com', 3, NULL, '$2y$10$Z9X83ZNiItdq2zMgkuFyXeDABQx5hTQTve2.ysxgpSKzt29f7p.8C', NULL, NULL, '2020-09-18 00:05:05', '2020-09-18 00:05:05'),
(5, 'gjghj', NULL, NULL, 'dfgd@df.gj', 3, NULL, '$2y$10$yuhhFs6xWL8pF23LcCRSZO8AQ/gQ/4nK0EluMbaaYp/GTlrZr7PnC', NULL, NULL, '2020-09-19 00:32:30', '2020-09-19 00:32:30'),
(6, 'gjghj', NULL, NULL, 'dfgd@df.gj1', 3, NULL, '$2y$10$YJeY.pS2NbxrFZSJewsgSuisWxG2SRcv6NnkdViHZxwjKxNaKcMqO', NULL, NULL, '2020-09-19 00:39:08', '2020-09-19 00:39:08'),
(7, 'gjghj', NULL, NULL, 'dfgd@df.fgh', 3, NULL, '$2y$10$FIxXKxNViT5mrcX6j.6o7el17eLzjoGVfvhgx4Kg0a6DnUjMiHrjC', NULL, NULL, '2020-09-19 00:43:31', '2020-09-19 00:43:31'),
(8, 'gjghj', NULL, NULL, 'dfgd@df.fgg', 3, NULL, '$2y$10$l1nPPmpY7A8IURPk.jMMPegMw5P9bGi4aEfqnSsHxLUqrN1JDaBAW', NULL, NULL, '2020-09-19 00:58:54', '2020-09-19 00:58:54'),
(9, 'gjghj', NULL, NULL, 'dfgd@df.fge', 3, NULL, '$2y$10$0Bv7iGRuv97GlFRDQGolCuf3Xnz8SGEhBBl4WSwnblJSHWq5/TOg2', NULL, NULL, '2020-09-19 00:59:17', '2020-09-19 00:59:17'),
(10, 'gjghj', NULL, NULL, 'dfgd@df.fgw', 3, NULL, '$2y$10$hLZ5ddgf9TompSPqYmdvUOCj1hJ/T9izzIWGoOdETf5NZRy9WIzsK', NULL, NULL, '2020-09-19 01:00:08', '2020-09-19 01:00:08'),
(11, 'nik', NULL, NULL, 'nikagent@gmail.com', 3, NULL, '$2y$10$07RoAN7s2jZ7J/dcw/yvfe28JNVxVC/sxbH4eQxXjKp1q3piThRUG', NULL, NULL, '2020-09-19 01:01:00', '2020-09-19 01:01:00'),
(12, 'nikul', NULL, NULL, 'testcustomer@gmail.com', 4, NULL, '$2y$10$GLsQdPmAWsJ.ieEmF9sTOeGP6gfADL2c6Jr.ewRPARvQN6wbNcOT2', NULL, NULL, '2020-09-19 01:34:25', '2020-09-19 01:34:25'),
(13, 'nikul', NULL, NULL, 'testcustomer1@gmail.com', 4, NULL, '$2y$10$IV1XTyHW1E4hymVLxGOzxO.8kO/Zno1If.G5dCbUSQnHIZRb96LxO', NULL, NULL, '2020-09-19 01:36:19', '2020-09-19 01:36:19'),
(14, 'nikul', NULL, NULL, 'testcustomer2@gmail.com', 4, NULL, '$2y$10$R1wsN3Kq5xMLH/4iCF.FVuTsnhnvTuGPnNsZnFE9QpFi2jAcmmi8G', NULL, NULL, '2020-09-19 01:37:00', '2020-09-19 01:37:00'),
(15, 'nikul', NULL, NULL, 'testcustomer3@gmail.com', 4, NULL, '$2y$10$RUtjqB5vy1OQ5juJ5U35iObACU6qsZAoK.WFemy3zgmXSzXkJ0iG6', NULL, NULL, '2020-09-19 01:37:19', '2020-09-19 01:37:19'),
(16, 'nikul', NULL, NULL, 'testcustomer4@gmail.com', 4, NULL, '$2y$10$FMaSg0/aLqJLvSQ.TZBYdOcse8xPJpOqpUonEemXWqWFjB254G7Ha', NULL, NULL, '2020-09-19 01:38:51', '2020-09-19 01:38:51'),
(17, 'nikul', NULL, NULL, 'testcustomer5@gmail.com', 4, NULL, '$2y$10$CfI2QpSMv4nIS1qWwtv0Zee1ksLeQhZsv6ozRuVXeCmicCcdTwmI.', NULL, NULL, '2020-09-19 01:39:17', '2020-09-19 01:39:17'),
(18, 'ghfg', NULL, NULL, 'dfg@dfgh.fm', 4, NULL, '$2y$10$dlPuXnmP7iT4AdDWmooOnONboh.MvaIDbzd423M.jVOxz9ohMaRcO', NULL, NULL, '2020-09-19 01:56:07', '2020-09-19 01:56:07'),
(19, 'ghfg', NULL, NULL, 'dfg@dfghm.fm', 4, NULL, '$2y$10$flT44bc9q2k/HyjaCI6Mvu1VWqMZqJ6COMerxWmwa3CISMCMIgK/W', NULL, NULL, '2020-09-19 02:01:23', '2020-09-19 02:01:23'),
(20, 'nik', NULL, NULL, 'nikcusto@gmail.com', 4, NULL, '$2y$10$YN6avFHk9GgjpXveZjgVX.qSq2/Hj9DTTgLitITCHGZtRN091sqBe', NULL, NULL, '2020-09-19 02:02:30', '2020-09-19 02:02:30'),
(21, 'tset', NULL, NULL, 'tset@njm.com', 4, NULL, '$2y$10$j9UOsQvA/wmDD40lR4IPd.npC0UFjlnF2UczZXN4m0Qt9Q7w.VmIu', NULL, NULL, '2020-09-19 02:04:40', '2020-09-19 02:04:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
