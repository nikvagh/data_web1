-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2020 at 01:03 PM
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
  `commission` double(20,2) NOT NULL,
  `profile_pic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership_status` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership_end` date NOT NULL,
  `wallet` double(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `agent_id`, `business_name`, `abn`, `type_of_industry`, `commission`, `profile_pic`, `address`, `membership_status`, `membership_end`, `wallet`, `created_at`, `updated_at`) VALUES
(1, 3, 'test1', 'abn', 'test', 22404.00, '160152901896.png', 'A108 Adam Street New York, NY 535022\r\nUnited States', 'enable', '2021-09-26', 12729980.00, NULL, NULL),
(2, 1, 'test', 'abn', 'test', 2000.00, '', 'address', 'enable', '2021-01-30', 20.00, NULL, NULL),
(3, 20, 'Aracely Wisoky', '3', 'Five!.', 0.00, 'test', 'Omnis quas temporibus eaque tempore omnis. Quos repellat ex amet aliquid et deserunt voluptas. At autem occaecati quas id autem. Ad dolor et in necessitatibus autem.', 'enable', '2009-03-11', 1328.00, '2020-10-06 00:19:38', '2020-10-06 00:19:38'),
(4, 21, 'Prof. Alycia Rutherford', '2', 'ME, and.', 0.00, 'test', 'Dolor omnis eum itaque dicta. Est sed voluptates asperiores illo. Rerum itaque qui qui enim laborum assumenda suscipit officia.', 'enable', '1980-12-19', 7603.00, '2020-10-06 00:19:38', '2020-10-06 00:19:38'),
(5, 30, 'test1111111', 'abn', 'sa', 0.00, '', '', 'enable', '0000-00-00', 0.00, '2020-10-21 01:52:22', '2020-10-21 01:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `agent_commission_rules`
--

DROP TABLE IF EXISTS `agent_commission_rules`;
CREATE TABLE IF NOT EXISTS `agent_commission_rules` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `to` double(20,2) NOT NULL,
  `from` double(20,2) NOT NULL,
  `earning_type` enum('percent','fixed_runt') COLLATE utf8mb4_unicode_ci NOT NULL,
  `earning` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent_commission_rules`
--

INSERT INTO `agent_commission_rules` (`id`, `to`, `from`, `earning_type`, `earning`, `created_at`, `updated_at`) VALUES
(1, 10000.00, 5000.00, 'fixed_runt', '500', NULL, NULL),
(3, 15000.00, 10000.00, 'percent', '50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bonusrewards`
--

DROP TABLE IF EXISTS `bonusrewards`;
CREATE TABLE IF NOT EXISTS `bonusrewards` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bonusrewards`
--

INSERT INTO `bonusrewards` (`id`, `name`, `amount`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Rent assistance', '500', 'month', NULL, NULL),
(2, 'Life insurance', '20', 'month', NULL, NULL),
(3, 'Mortgage assistance', '900', 'month', NULL, NULL),
(4, 'Shop fitting package ', '20,000', 'yr', NULL, NULL),
(5, 'House insurance', '20', 'month', NULL, NULL),
(6, 'University scholarship assistance', '70', 'month', NULL, NULL),
(7, 'Factory renovation ', '20,000', 'yr', NULL, NULL),
(8, 'Income protection', '50', 'month', NULL, NULL),
(9, 'Car packages', '200', 'month', NULL, NULL),
(10, 'Funeral protection', '15', 'month', NULL, NULL),
(11, 'First Home owner assistance', '500', 'month', NULL, NULL),
(12, 'Home Renovation', '10,000', '', NULL, NULL),
(13, 'Energy saving package', '10,000', '', NULL, NULL),
(14, 'Medical package', '15,000', '', NULL, NULL),
(15, 'Bills assistance', '100', 'month', NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(18, '123456789', '02', 2020, '258', 'testdemo', NULL, NULL),
(19, '1111111111111111111111', '02', 2020, '258', 'testing card name1', NULL, NULL),
(20, '1212123121223122', '10', 2020, '258', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `charity`
--

DROP TABLE IF EXISTS `charity`;
CREATE TABLE IF NOT EXISTS `charity` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEO_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_registration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Member_names` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `need_funding` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background_check` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `charity`
--

INSERT INTO `charity` (`id`, `name`, `CEO_details`, `address`, `business_registration`, `Member_names`, `need_funding`, `background_check`, `created_at`, `updated_at`) VALUES
(1, 'demo1', 'CEO', 'sdf', 'test', 'a2, a1', 'demo', 'yes', '2020-09-30 22:59:57', NULL),
(2, 'test1', 'CEO', '131231312', 'test', 'asasasasas', 'asasasas', 'yes', '2020-10-21 01:19:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `Contac_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Contac_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Contac_id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'test', 'test@gmail.com', 'testing', 'testing', '2020-10-01 01:45:50', NULL),
(4, 'jay dev', 'viola.reichel@example.net', 'testing', 'demo test', '2020-11-04 00:49:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int NOT NULL AUTO_INCREMENT,
  `iso` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nicename` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `iso3` char(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `numcode` smallint DEFAULT NULL,
  `phonecode` int NOT NULL,
  `status` enum('Enable','Disable') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Enable',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`, `status`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93, 'Enable'),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355, 'Enable'),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213, 'Enable'),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684, 'Enable'),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376, 'Enable'),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244, 'Enable'),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264, 'Enable'),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0, 'Enable'),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268, 'Enable'),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54, 'Enable'),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374, 'Enable'),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297, 'Enable'),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61, 'Enable'),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43, 'Enable'),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994, 'Enable'),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242, 'Enable'),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973, 'Enable'),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880, 'Enable'),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246, 'Enable'),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375, 'Enable'),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32, 'Enable'),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501, 'Enable'),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229, 'Enable'),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441, 'Enable'),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975, 'Enable'),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591, 'Enable'),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387, 'Enable'),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267, 'Enable'),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0, 'Enable'),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55, 'Enable'),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246, 'Enable'),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673, 'Enable'),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359, 'Enable'),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226, 'Enable'),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257, 'Enable'),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855, 'Enable'),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237, 'Enable'),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1, 'Enable'),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238, 'Enable'),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345, 'Enable'),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236, 'Enable'),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235, 'Enable'),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56, 'Enable'),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86, 'Enable'),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61, 'Enable'),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672, 'Enable'),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57, 'Enable'),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269, 'Enable'),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242, 'Enable'),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242, 'Enable'),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682, 'Enable'),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506, 'Enable'),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225, 'Enable'),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385, 'Enable'),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53, 'Enable'),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357, 'Enable'),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420, 'Enable'),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45, 'Enable'),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253, 'Enable'),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767, 'Enable'),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809, 'Enable'),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593, 'Enable'),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20, 'Enable'),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503, 'Enable'),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240, 'Enable'),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291, 'Enable'),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372, 'Enable'),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251, 'Enable'),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500, 'Enable'),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298, 'Enable'),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679, 'Enable'),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358, 'Enable'),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33, 'Enable'),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594, 'Enable'),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689, 'Enable'),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0, 'Enable'),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241, 'Enable'),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220, 'Enable'),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995, 'Enable'),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49, 'Enable'),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233, 'Enable'),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350, 'Enable'),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30, 'Enable'),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299, 'Enable'),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473, 'Enable'),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590, 'Enable'),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671, 'Enable'),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502, 'Enable'),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224, 'Enable'),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245, 'Enable'),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592, 'Enable'),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509, 'Enable'),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0, 'Enable'),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39, 'Enable'),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504, 'Enable'),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852, 'Enable'),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36, 'Enable'),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354, 'Enable'),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91, 'Enable'),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62, 'Enable'),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98, 'Enable'),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964, 'Enable'),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353, 'Enable'),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972, 'Enable'),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39, 'Enable'),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876, 'Enable'),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81, 'Enable'),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962, 'Enable'),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7, 'Enable'),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254, 'Enable'),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686, 'Enable'),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850, 'Enable'),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82, 'Enable'),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965, 'Enable'),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996, 'Enable'),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856, 'Enable'),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371, 'Enable'),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961, 'Enable'),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266, 'Enable'),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231, 'Enable'),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218, 'Enable'),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423, 'Enable'),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370, 'Enable'),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352, 'Enable'),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853, 'Enable'),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389, 'Enable'),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261, 'Enable'),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265, 'Enable'),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60, 'Enable'),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960, 'Enable'),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223, 'Enable'),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356, 'Enable'),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692, 'Enable'),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596, 'Enable'),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222, 'Enable'),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230, 'Enable'),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269, 'Enable'),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52, 'Enable'),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691, 'Enable'),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373, 'Enable'),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377, 'Enable'),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976, 'Enable'),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664, 'Enable'),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212, 'Enable'),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258, 'Enable'),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95, 'Enable'),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264, 'Enable'),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674, 'Enable'),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977, 'Enable'),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31, 'Enable'),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599, 'Enable'),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687, 'Enable'),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64, 'Enable'),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505, 'Enable'),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227, 'Enable'),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234, 'Enable'),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683, 'Enable'),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672, 'Enable'),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670, 'Enable'),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47, 'Enable'),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968, 'Enable'),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92, 'Enable'),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680, 'Enable'),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970, 'Enable'),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507, 'Enable'),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675, 'Enable'),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595, 'Enable'),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51, 'Enable'),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63, 'Enable'),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0, 'Enable'),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48, 'Enable'),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351, 'Enable'),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787, 'Enable'),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974, 'Enable'),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262, 'Enable'),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40, 'Enable'),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70, 'Enable'),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250, 'Enable'),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290, 'Enable'),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869, 'Enable'),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758, 'Enable'),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508, 'Enable'),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784, 'Enable'),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684, 'Enable'),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378, 'Enable'),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239, 'Enable'),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966, 'Enable'),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221, 'Enable'),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381, 'Enable'),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248, 'Enable'),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232, 'Enable'),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65, 'Enable'),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421, 'Enable'),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386, 'Enable'),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677, 'Enable'),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252, 'Enable'),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27, 'Enable'),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0, 'Enable'),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34, 'Enable'),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94, 'Enable'),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249, 'Enable'),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597, 'Enable'),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47, 'Enable'),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268, 'Enable'),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46, 'Enable'),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41, 'Enable'),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963, 'Enable'),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886, 'Enable'),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992, 'Enable'),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255, 'Enable'),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66, 'Enable'),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670, 'Enable'),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228, 'Enable'),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690, 'Enable'),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676, 'Enable'),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868, 'Enable'),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216, 'Enable'),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90, 'Enable'),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370, 'Enable'),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649, 'Enable'),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688, 'Enable'),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256, 'Enable'),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380, 'Enable'),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971, 'Enable'),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44, 'Enable'),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1, 'Enable'),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1, 'Enable'),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598, 'Enable'),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998, 'Enable'),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678, 'Enable'),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58, 'Enable'),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84, 'Enable'),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284, 'Enable'),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340, 'Enable'),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681, 'Enable'),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212, 'Enable'),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967, 'Enable'),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260, 'Enable'),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263, 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `agent_id` int DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wallet` double(20,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_customer_id_foreign` (`customer_id`),
  KEY `customer_agent_id_foreign` (`agent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_id`, `agent_id`, `address`, `abn`, `name`, `profile_pic`, `created_at`, `updated_at`, `wallet`) VALUES
(1, 2, 3, 'testing', '3', 'test', '160077437191.png', NULL, NULL, 0.00),
(6, 14, 3, 'address', 'abn', 'demo', NULL, NULL, NULL, 0.00),
(7, 13, 3, 'address', 'abn', 'testing', NULL, NULL, NULL, 0.00),
(10, 27, NULL, 'surat', 'abn', '', NULL, '2020-10-21 01:42:31', '2020-10-21 01:42:31', 0.00),
(9, 26, NULL, 'surat', '12345678', '', NULL, '2020-10-21 01:41:24', '2020-10-21 01:41:24', 0.00),
(11, 28, NULL, 'surat', 'sad', '', NULL, '2020-10-21 01:45:54', '2020-10-21 01:45:54', 0.00),
(12, 29, NULL, 'surat', 'abn', '', NULL, '2020-10-21 01:47:20', '2020-10-21 01:47:20', 0.00),
(13, 32, NULL, 'surat', 'abn', '', NULL, '2020-11-04 02:00:18', '2020-11-04 02:00:18', 0.00);

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
-- Table structure for table `galleryvideos`
--

DROP TABLE IF EXISTS `galleryvideos`;
CREATE TABLE IF NOT EXISTS `galleryvideos` (
  `video_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('v','s') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleryvideos`
--

INSERT INTO `galleryvideos` (`video_id`, `video`, `type`, `created_at`, `updated_at`) VALUES
(4, '160126554942.mp4', 'v', '2020-09-27 22:29:09', NULL),
(28, '160196723788.png', 's', '2020-10-06 01:23:57', NULL),
(27, '160196722980.jpeg', 's', '2020-10-06 01:23:49', NULL),
(26, '160196721880.jpeg', 's', '2020-10-06 01:23:38', NULL),
(25, '160196702211.png', 's', '2020-10-06 01:20:22', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(52, '2014_10_12_000000_create_users_table', 1),
(53, '2014_10_12_100000_create_password_resets_table', 1),
(54, '2019_08_19_000000_create_failed_jobs_table', 1),
(86, '2020_09_03_070053_create_settings_table', 15),
(56, '2020_09_17_113702_create_transactions_table', 1),
(80, '2020_09_17_115045_create_customer_tabel', 12),
(63, '2020_09_17_115108_create_agent_tabel', 2),
(59, '2020_09_18_060845_create_products_table', 1),
(60, '2020_09_21_070756_create_sales_table', 1),
(61, '2020_09_23_040913_carddetails', 1),
(65, '2020_09_26_092605_contact_us', 3),
(68, '2020_09_26_120955_galleryvideos', 4),
(69, '2020_09_28_072113_bonus_rewards', 5),
(77, '2020_09_28_090548_order_user', 10),
(78, '2020_09_28_102356_package_user', 11),
(75, '2020_09_30_104811_charity', 9),
(84, '2020_11_02_122639_create_agent_commission_rules_table', 13),
(85, '2020_11_04_044224_create_subscribes_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

DROP TABLE IF EXISTS `order_user`;
CREATE TABLE IF NOT EXISTS `order_user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` int NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `State` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Postcode/ZIP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_user`
--

INSERT INTO `order_user` (`id`, `fname`, `lname`, `country`, `address`, `State`, `City`, `Postcode/ZIP`, `Phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Kali Feest', 'meet', 3, 'testing', 'United States', 'Jerusalem', '123456', '0987456321', 'viola.reichel@example.net', '2020-10-04 23:16:27', NULL),
(2, 'Kali Feest', 'meet', 15, 'A108 Adam Street\r\nNew York, NY 535022\r\nUnited States', 'United States', 'New York', '123456', '0987456321', 'viola.reichel@example.net', '2020-10-04 23:19:36', NULL),
(3, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 22:23:15', NULL),
(4, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 22:24:49', NULL),
(5, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 22:26:00', NULL),
(6, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 22:26:50', NULL),
(7, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 22:30:04', NULL),
(8, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 22:30:55', NULL),
(9, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 22:33:03', NULL),
(10, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 22:39:12', NULL),
(11, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 22:41:44', NULL),
(12, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 22:42:12', NULL),
(13, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 22:43:30', NULL),
(14, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 23:10:03', NULL),
(15, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 23:17:23', NULL),
(16, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-09 23:26:05', NULL),
(17, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:11:00', NULL),
(18, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:31:40', NULL),
(19, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:37:04', NULL),
(20, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:44:21', NULL),
(21, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(22, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(23, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(24, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(25, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(26, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(27, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(28, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(29, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(30, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(31, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(32, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(33, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(34, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 01:49:04', NULL),
(35, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 03:02:11', NULL),
(36, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 03:02:11', NULL),
(37, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 03:02:11', NULL),
(38, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 03:06:05', NULL),
(39, 'jay', 'dev', 99, 'surat', 'surat', 'surat', '395010', '0987456321', 'viola.reichel@example.net', '2020-10-10 03:09:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `package_user`
--

DROP TABLE IF EXISTS `package_user`;
CREATE TABLE IF NOT EXISTS `package_user` (
  `PackageUser_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Package_id` int NOT NULL,
  `user_id` int NOT NULL,
  `quality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`PackageUser_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_user`
--

INSERT INTO `package_user` (`PackageUser_id`, `Package_id`, `user_id`, `quality`, `action_date`, `created_at`, `updated_at`) VALUES
(1, 4, 2, '1', '', '2020-10-04 23:16:27', NULL),
(2, 5, 2, '1', '', '2020-10-04 23:19:36', NULL),
(3, 5, 2, '2', '', '2020-10-09 05:03:16', NULL),
(4, 5, 2, '3', '', '2020-10-09 05:07:09', NULL),
(5, 5, 2, '3', '', '2020-10-09 05:07:28', NULL),
(6, 5, 2, '1', '', '2020-10-10 01:49:53', NULL),
(7, 5, 2, '1', '', '2020-10-10 01:51:11', NULL),
(8, 5, 2, '1', '', '2020-10-10 01:51:41', NULL),
(9, 5, 2, '1', '', '2020-10-10 01:52:16', NULL),
(10, 5, 2, '1', '', '2020-10-10 01:52:22', NULL),
(11, 5, 2, '1', '', '2020-10-10 01:52:47', NULL),
(12, 5, 2, '1', '', '2020-10-10 01:53:12', NULL),
(13, 5, 2, '1', '', '2020-10-10 01:54:06', NULL),
(14, 5, 2, '1', '', '2020-10-10 01:54:17', NULL),
(15, 5, 2, '1', '', '2020-10-10 01:54:41', NULL),
(16, 5, 2, '1', '', '2020-10-10 01:55:19', NULL),
(17, 5, 2, '1', '', '2020-10-10 01:55:31', NULL),
(18, 5, 2, '1', '', '2020-10-10 01:57:00', NULL),
(19, 5, 2, '1', '', '2020-10-10 01:57:18', NULL),
(20, 5, 2, '1', '', '2020-10-10 03:04:09', NULL),
(21, 5, 2, '1', '', '2020-10-10 03:04:35', NULL),
(22, 5, 2, '1', '', '2020-10-10 03:05:28', NULL),
(23, 5, 2, '1', '', '2020-10-10 03:06:54', NULL),
(24, 4, 2, '1', '', '2020-10-10 03:10:38', NULL);

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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('viola.reichel@example.net', '$2y$10$GWncTIxj8S5Ynifi0p5mCuArUVoVruq81jLUViH13e1UfzXezU.8G', '2020-11-05 06:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(20,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `amount`) VALUES
(3, 'Start', 5000.00),
(4, 'Base', 10000.00),
(5, 'Premium', 20000.00),
(6, 'Business', 50000.00),
(7, 'Silver', 100000.00),
(8, 'Gold', 200000.00),
(9, 'Platinum', 500000.00),
(10, 'Pro', 1000000.00);

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
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_ip1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_ip2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `company_name`, `Email`, `mobile_number`, `address`, `agentcommission`, `terms_conditions`, `twitter`, `facebook`, `instagram`, `skype`, `linkedin`, `map_key`, `map_ip1`, `map_ip2`, `copyright`) VALUES
(1, 'Data Web', 'dataweb@gmail.com', '+ 1234567890', 'A108 ADAM STREET NEW YORK, NY 535022 UNITED STATES', '10', '<h2>testing</h2>', 'https://twitter.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.skype.com/en/', 'https://in.linkedin.com/', 'AIzaSyBOX0wpm3iQ5107OdI-bB3YJ3Q27nkBurU', '40.7127837', '-74.0059413', 'Copyright © 2020.All Rights Reserved By Data Web.');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

DROP TABLE IF EXISTS `subscribes`;
CREATE TABLE IF NOT EXISTS `subscribes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'test@gamil.com', '2020-11-03 23:19:59', NULL),
(2, 'test@gamil.com', '2020-11-04 22:34:07', NULL),
(8, 'test@gamil.comasss', '2020-11-05 05:40:36', NULL),
(7, 'test@gamil.comass', '2020-11-05 05:40:22', NULL),
(6, 'test@gamil.comas', '2020-11-05 05:39:00', NULL),
(9, 'test@gamil.comsdasd', '2020-11-05 05:40:46', NULL),
(10, 'test@gamil.comassadd', '2020-11-05 05:42:27', NULL),
(11, 'test@gamil.comdasdd', '2020-11-05 05:43:12', NULL),
(12, 'fxcgbfgdfgdgffdg@dh.fghfgh', '2020-11-05 06:22:42', NULL),
(13, 'vcvchbhf@dsf.hk', '2020-11-05 06:28:00', NULL),
(14, 'dgdfgdfg@sdf.ghjtyg', '2020-11-05 06:28:48', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transactions_id`, `customer_id`, `agent_id`, `amount`, `type`, `deposittype`, `agentcommission`, `commission`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 90.00, 'w', '2', '10', '10', '2020-11-04 04:25:41', NULL),
(3, 14, 3, 18000.00, 'w', '2', '2000', '10', '2020-11-02 04:25:50', NULL),
(4, 14, 3, 18000.00, 'd', '2', '2000', '10', '2020-09-25 00:43:24', NULL),
(5, 14, 3, 18000.00, 'd', '2', '2000', '10', '2020-09-25 00:43:48', NULL),
(6, 14, 3, 18000.00, 'd', '2', '2000', '10', '2020-09-25 00:45:11', NULL),
(7, 14, 3, 18000.00, 'd', '2', '2000', '10', '2020-09-25 00:46:50', NULL),
(8, 14, 3, 18000.00, 'd', '2', '2000', '10', '2020-09-25 00:47:59', NULL),
(9, 13, 3, 8568.00, 'd', '2', '952', '10', '2020-09-25 01:55:53', NULL),
(10, 14, 3, 18000.00, 'd', '2', '2000', '10', '2020-09-25 05:20:26', NULL),
(11, 14, 3, 1800.00, 'd', '2', '200', '10', '2020-09-25 05:21:17', NULL),
(15, 0, 3, 200.00, 'w', '3', '0', '0', '2020-09-25 06:38:53', NULL),
(16, 0, 3, 20.00, 'w', '3', '0', '0', '2020-09-25 06:51:22', NULL),
(17, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-09-24 20:02:48', NULL),
(18, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-11-07 20:03:08', NULL),
(19, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-11-07 20:04:12', NULL),
(20, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-05-15 20:04:45', NULL),
(21, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-09-24 20:05:54', NULL),
(22, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-09-24 20:07:35', NULL),
(23, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-09-24 20:07:35', NULL),
(24, 2, 1, 81000.00, 'd', '2', '9000', '10', '2020-08-18 20:10:31', NULL),
(25, 0, 3, 20.00, 'w', '3', '0', '0', '2020-09-24 20:17:52', NULL),
(26, 0, 3, 1000.00, 'd', '3', '0', '0', '2019-12-04 23:13:13', NULL),
(51, 2, 1, 9000.00, 'd', '4', '100000', '10', '2020-10-02 07:21:02', NULL),
(52, 2, 1, 45000.00, 'd', '4', '5000', '10', '2020-10-02 07:22:29', NULL),
(53, 0, 3, 200.00, 'w', '3', '0', '0', '2019-06-13 00:38:50', NULL),
(54, 0, 3, 200.00, 'w', '3', '0', '0', '2020-10-03 00:39:20', NULL),
(55, 0, 3, 60.00, 'w', '3', '0', '0', '2020-10-03 00:39:58', NULL),
(56, 0, 3, 90000.00, 'w', '3', '0', '0', '2020-10-03 00:40:16', NULL),
(72, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:51:41', NULL),
(71, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:51:11', NULL),
(70, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:49:53', NULL),
(69, 2, 3, 9000.00, 'd', '4', '1000', '10', '2020-10-09 22:31:23', NULL),
(68, 2, 3, 9000.00, 'd', '4', '1000', '10', '2020-10-09 22:26:50', NULL),
(67, 2, 3, 9000.00, 'd', '4', '1000', '10', '2020-10-09 05:33:11', NULL),
(66, 2, 3, 9000.00, 'd', '4', '1000', '10', '2020-10-09 05:28:31', NULL),
(65, 1, 3, 9000.00, 'd', '4', '1000', '10', '2020-10-09 05:19:59', NULL),
(64, 2, 3, 9000.00, 'd', '4', '1000', '10', '2020-10-09 05:19:59', NULL),
(63, 2, 3, 9000.00, 'd', '4', '1000', '10', '2020-10-09 05:18:21', NULL),
(62, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-09 05:07:28', NULL),
(61, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-09 05:03:16', NULL),
(60, 0, 3, 90000.00, 'w', '3', '0', '0', '2020-10-06 03:12:08', NULL),
(59, 2, 1, 18000.00, 'd', '4', '2000', '10', '2020-10-04 23:19:36', NULL),
(58, 2, 1, 9000.00, 'd', '4', '1000', '10', '2020-10-04 23:16:27', NULL),
(57, 0, 3, 90000.00, 'w', '3', '0', '0', '2020-10-03 00:40:45', NULL),
(73, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:52:16', NULL),
(74, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:52:22', NULL),
(75, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:52:47', NULL),
(76, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:53:12', NULL),
(77, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:54:06', NULL),
(78, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:54:17', NULL),
(79, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:54:41', NULL),
(80, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:55:19', NULL),
(81, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:55:31', NULL),
(82, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:57:00', NULL),
(83, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 01:57:18', NULL),
(84, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 03:04:09', NULL),
(85, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 03:04:35', NULL),
(86, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 03:05:28', NULL),
(87, 2, 3, 18000.00, 'd', '4', '2000', '10', '2020-10-10 03:06:54', NULL),
(88, 2, 3, 9000.00, 'd', '4', '1000', '10', '2020-10-10 03:10:38', NULL),
(89, 0, 3, 20.00, 'w', '3', '0', '0', '2020-10-15 03:52:14', NULL),
(90, 2, 3, 18.00, 'd', '2', '2', '10', '2020-10-15 06:29:48', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `role`, `email_verified_at`, `password`, `status_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Valerie Schaden', NULL, 'sim.doyle@example.net', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'BsgOj68kbgtqY258CrXFjyAFKrI0zfFpIsW2ZHT7YhY2sgH84sQuldiadcjs', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(2, 'test', '0987456321', 'viola.reichel@example.net', 4, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'NgdbMNjiLYI5LyTPTRTO5fgtVtV0AUar6XEbOFwKHQUOziTPlrryVJUzCQgm', '2020-09-24 05:17:45', '2020-10-06 03:12:37'),
(3, 'Brycen Schuppe', NULL, 'becker.garett@example.org', 3, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, '7w8xgH3amCStvseYBpE5J0LMFvjtx0H3KskRYChNhaHRCX8Mptaq0MfHYPZK', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(4, 'Brent Mante II', NULL, 'waelchi.florida@example.com', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, '39jMbMzSbIJ5ow84SO9QCKfML24YDt7OzorCOy3egV8RNkkLf2ydmYD50Yee', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(5, 'Kennedi Swift', NULL, 'zaria.corkery@example.com', 1, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'X99fRmp6LE', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(6, 'Josue Hagenes Jr.', NULL, 'quinton02@example.net', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'ZGjEaRoxni', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(7, 'Brian Jenkins', NULL, 'parisian.kip@example.net', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'uAdY8cV4f4JHDzKMRHPJL3CZMIy8m4oYYEPlxN5PA0HbgjRtRnNIvgiUkm1l', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(8, 'Delta Volkman Jr.', NULL, 'cullen36@example.org', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'wWUx3gV7fo', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(9, 'Sonia Kuhn', NULL, 'mara05@example.net', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'XqDBJwG8dm', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(10, 'Mr. Kraig Huels DDS', NULL, 'ejenkins@example.org', 2, '2020-09-24 05:17:45', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, '8OPFuq4uMS', '2020-09-24 05:17:45', '2020-09-24 05:17:45'),
(24, 'test555', NULL, 'testing555@gmail.com', 3, NULL, '$2y$10$qPAsCbVdwV6kFiI5LyU5xu9OvV.y8uMffMpyHQrhPatRAVEbzflr6', NULL, NULL, '2020-10-20 23:16:49', '2020-10-20 23:16:49'),
(14, 'demo1', '1234567890', 'testa@gmail.com', 4, NULL, '$2y$10$Am9dlZ.P68jQpWNVeUVlHuP6.eTKX1fppdoJmmOovbaxba6dzMBE2', NULL, NULL, '2020-09-25 00:42:18', '2020-09-24 20:17:17'),
(16, 'demo1', '1234567890', 'tesasst@gmail.com', 4, NULL, '$2y$10$zv895VSRfE30jxPJ/YxohOZZE5ETlpr4Fxiyb1wF3Hsg4qPjJKyhK', NULL, NULL, '2020-09-24 20:17:00', '2020-10-06 03:12:56'),
(18, 'Trevor Emmerich', NULL, 'marvin.zachery@example.net', 2, '2020-10-01 05:41:34', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'Xwcu0HTzoq', '2020-10-01 05:41:34', '2020-10-01 05:41:34'),
(19, 'Pasquale Jakubowski', NULL, 'hoppe.jalyn@example.org', 2, '2020-10-01 05:59:14', '$2y$10$aSy/DtP13rEnji0IqtzETupUmYPoEwCt.w0e612x5wmsdtFtL9vbS', NULL, 'jgzEmA4lVV', '2020-10-01 05:59:14', '2020-10-01 05:59:14'),
(32, 'jay dev', NULL, 'viola.reichel@example.netasassadsasa', 4, NULL, '$2y$10$kO69NAuXbqp/LL4TeZFLcelrN8DrrU.GSGErm8EJTCT8Iq5XoagXG', NULL, NULL, '2020-11-04 02:00:18', '2020-11-04 02:00:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
