-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2020 at 01:49 PM
-- Server version: 8.0.21
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
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `agent_id` int NOT NULL,
  `business_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_industry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership_status` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership_end` date NOT NULL,
  `wallet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `agent_id`, `business_name`, `abn`, `type_of_industry`, `commission`, `profile_pic`, `address`, `membership_status`, `membership_end`, `wallet`, `created_at`, `updated_at`) VALUES
(1, 3, 'test', 'abn', 'test', '22402', '', 'testing', 'enable', '2020-09-24', '1760', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carddetails`
--

DROP TABLE IF EXISTS `carddetails`;
CREATE TABLE IF NOT EXISTS `carddetails` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `card_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_year` year NOT NULL,
  `cvv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carddetails`
--

INSERT INTO `carddetails` (`id`, `card_number`, `expiry_month`, `expiry_year`, `cvv`, `card_name`, `created_at`, `updated_at`) VALUES
(2, '123123', '12', 2020, '123', 'testing', NULL, NULL),
(3, '1111222233334444', '06', 2025, '586', 'testing card name', NULL, NULL),
(4, '1111222233334444', '06', 2025, '586', 'testing card name', NULL, NULL),
(5, '1111222233334444', '06', 2025, '586', 'testing card name', NULL, NULL),
(6, '1111222233334444', '06', 2025, '586', 'testing card name', NULL, NULL),
(7, '11112222333', '05', 2020, '565', 'testing card name', NULL, NULL),
(8, '123456789', '05', 2025, '159', 'testing card name', NULL, NULL),
(9, '12525364828', '12', 2020, '159', 'card', NULL, NULL),
(10, '1234567890', '12', 2020, '258', 'aaa', NULL, NULL),
(11, '1234567890', '12', 2020, '258', 'testing card name', NULL, NULL),
(12, '123456', '02', 2020, '258', '2', NULL, NULL),
(13, '111111111', '02', 2020, '258', 'testdemo', NULL, NULL),
(14, '11111111111111111', '12', 2020, '258', 'testdemo', NULL, NULL),
(15, '1234567989', '12', 2020, '258', 'testdemo', NULL, NULL),
(16, '123456789', '2', 2020, '258', 'testdemo', NULL, NULL),
(17, '123456789', '02', 2020, '258', 'testdemo', NULL, NULL),
(18, '123456789', '02', 2020, '258', 'testdemo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `agent_id` int DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abn` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_customer_id_foreign` (`customer_id`),
  KEY `customer_agent_id_foreign` (`agent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_id`, `agent_id`, `address`, `abn`, `name`, `profile_pic`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '795 Folsom Ave, Suite 600\r\n            San Francisco, CA 94107', 'abn', 'test', '160077437191.png', NULL, NULL),
(6, 14, 3, 'sdfasasadsdsa', 'abn', 'demo1', NULL, '2020-09-25 00:42:18', '2020-09-24 20:17:17'),
(7, 16, 3, 'sdf', 'anb', 'demo1', NULL, '2020-09-24 20:17:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(52, '2014_10_12_000000_create_users_table', 1),
(53, '2014_10_12_100000_create_password_resets_table', 1),
(54, '2019_08_19_000000_create_failed_jobs_table', 1),
(55, '2020_09_03_070053_create_settings_table', 1),
(56, '2020_09_17_113702_create_transactions_table', 1),
(57, '2020_09_17_115045_create_customer_tabel', 1),
(59, '2020_09_18_060845_create_products_table', 1),
(60, '2020_09_21_070756_create_sales_table', 1),
(61, '2020_09_23_040913_carddetails', 1);

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
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'test', 20.00, '2020-09-25 05:36:37', '2020-09-25 05:36:37'),
(2, 'demo1', 30.00, '2020-09-25 05:36:45', '2020-09-25 05:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `agent_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `settings_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentcommission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms_conditions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `company_name`, `Email`, `mobile_number`, `address`, `agentcommission`, `terms_conditions`) VALUES
(1, 'test', 'admin@gmail.com', '1234567890', 'address', '10', '<p>test</p>');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `transactions_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `agent_id` int NOT NULL,
  `amount` double(20,2) NOT NULL,
  `type` enum('d','w') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposittype` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentcommission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`transactions_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transactions_id`, `customer_id`, `agent_id`, `amount`, `type`, `deposittype`, `agentcommission`, `commission`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 90.00, 'd', '2', '10', '10', '2020-09-24 05:39:16', NULL),
(3, 14, 3, 18000.00, 'd', '2', '2000', '10', '2020-09-25 00:43:18', NULL),
(4, 14, 3, 18000.00, 'd', '2', '2000', '10', '2020-09-25 00:43:24', NULL),
(5, 14, 3, 18000.00, 'd', '2', '2000', '10', '2020-09-25 00:43:48', NULL),
(6, 14, 3, 18000.00, 'd', '2', '2000', '10', '2020-09-25 00:45:11', NULL),
(7, 14, 3, 18000.00, 'd', '2', '2000', '10', '2020-09-25 00:46:50', NULL),
(8, 14, 3, 18000.00, 'd', '2', '2000', '10', '2020-09-25 00:47:59', NULL),
(9, 13, 3, 8568.00, 'd', '2', '952', '10', '2020-09-25 01:55:53', NULL),
(10, 14, 3, 18000.00, 'd', '2', '2000', '10', '2020-09-25 05:20:26', NULL),
(11, 14, 3, 1800.00, 'd', '2', '200', '10', '2020-09-25 05:21:17', NULL),
(13, 0, 3, 2000.00, 'w', '3', '0', '0', '2020-09-25 06:31:26', NULL),
(15, 0, 3, 200.00, 'w', '3', '0', '0', '2020-09-25 06:38:53', NULL),
(16, 0, 3, 20.00, 'w', '3', '0', '0', '2020-09-25 06:51:22', NULL),
(17, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-09-24 20:02:48', NULL),
(18, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-09-24 20:03:08', NULL),
(19, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-09-24 20:04:12', NULL),
(20, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-09-24 20:04:45', NULL),
(21, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-09-24 20:05:54', NULL),
(22, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-09-24 20:07:35', NULL),
(23, 2, 1, 810000.00, 'd', '2', '9000', '10', '2020-09-24 20:07:35', NULL),
(24, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-09-24 20:10:31', NULL),
(25, 0, 3, 20.00, 'w', '3', '0', '0', '2020-09-24 20:17:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `role`, `email_verified_at`, `password`, `status_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Valerie Schaden', NULL, 'sim.doyle@example.net', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'z9BgPvJNxHMkZuePHK9fWt0RKux8snqUziFmEuDDDjO3zJE6sAVQaTvxTKRJ', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(2, 'Kali Feest', NULL, 'viola.reichel@example.net', 4, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, '9dwShqrR0MkyC3Nj9JgrS2MyqgihsxqLcHNE5NJftoBD8zQQ0NHHd9fKB51P', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(3, 'Brycen Schuppe', NULL, 'becker.garett@example.org', 3, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'tQi8MRvj62WtEKcFFyUfoF1IGlTPBHl6PEkYQ3kma45AjiTjSMjz1xsZ642o', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(4, 'Brent Mante II', NULL, 'waelchi.florida@example.com', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'hW7nWaQOYmKkPM0uuovIui2sNmNW8XALIHu0v05pcTY1UHftwlWTpwvFr7g5', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(5, 'Kennedi Swift', NULL, 'zaria.corkery@example.com', 1, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'X99fRmp6LE', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(6, 'Josue Hagenes Jr.', NULL, 'quinton02@example.net', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'ZGjEaRoxni', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(7, 'Brian Jenkins', NULL, 'parisian.kip@example.net', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'ELU37LzYZK', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(8, 'Delta Volkman Jr.', NULL, 'cullen36@example.org', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'wWUx3gV7fo', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(9, 'Sonia Kuhn', NULL, 'mara05@example.net', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'XqDBJwG8dm', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(10, 'Mr. Kraig Huels DDS', NULL, 'ejenkins@example.org', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, '8OPFuq4uMS', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(14, 'demo1', '1234567890', 'testa@gmail.com', 4, NULL, '$2y$10$Am9dlZ.P68jQpWNVeUVlHuP6.eTKX1fppdoJmmOovbaxba6dzMBE2', NULL, NULL, '2020-09-25 00:42:18', '2020-09-24 20:17:17'),
(16, 'demo1', '1234567890', 'tesasst@gmail.com', 4, NULL, '$2y$10$zv895VSRfE30jxPJ/YxohOZZE5ETlpr4Fxiyb1wF3Hsg4qPjJKyhK', NULL, NULL, '2020-09-24 20:17:00', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
