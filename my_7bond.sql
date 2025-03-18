-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2025 at 07:18 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_7bond`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `des_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `des_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `summary_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `summary_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `slug`, `title_en`, `title_ar`, `des_en`, `des_ar`, `summary_en`, `summary_ar`, `image`, `created_at`, `updated_at`) VALUES
(1, 'rami-abdou', 'Rami Abdou', 'مدونة 1', 'Elevate Your Sports Experience with Smet\'s Technology.\r\nAt Smet, we\'re passionate about sports. Our top-of-the-line electronic equipment and scoreboards are designed to make every game unforgettable. With precise monitoring and real-time updates, you\'ll be at the top of your game.\r\nWhy Smet is the Best Choice:\r\n\r\n\"Unmatched Accuracy: Keep track of every detail with our precise monitoring.\"\r\n\r\n\"Brilliant Displays: Enjoy clear visibility no matter the conditions.\"\r\n\"Built to Endure: Our equipment is made to last, game after game.\".\r\n\"Take your sports performance to new heights with Smet\'s advanced technology.\".', 'تفاصيل المدونة', 'Elevate Your Sports Experience with Smet\'s Technology.\r\nAt Smet, we\'re passionate about sports. Our top-of-the-line electronic equipment and scoreboards are designed to make every game unforgettable. With precise monitoring and real-time updates, you\'ll be at the top of your game.\r\nWhy Smet is the Best Choice:\r\n\r\n\"Unmatched Accuracy: Keep track of every detail with our precise monitoring.\"\r\n\r\n\"Brilliant Displays: Enjoy clear visibility no matter the conditions.\"\r\n\"Built to Endure: Our equipment is made to last, game after game.\".\r\n\"Take your sports performance to new heights with Smet\'s advanced technology.\".', 'اختصار تفاصيل المدونة', 'j7l5e52wGU5YiWaKuzuqFtX9EHcmwYVYFVqYBohN.jpg', '2023-05-02 22:56:28', '2024-12-06 12:56:52'),
(2, 'mohamed-fathy', 'Mohamed fathy', 'مدونة 2', 'Transforming Heavy Equipment with Smet\'s Electronic Solutions\r\nIn the realm of heavy equipment, efficiency and safety are paramount. Smet\'s advanced electronic solutions are engineered to withstand the toughest conditions, ensuring optimal performance and reliability. From construction machinery to mining equipment, Smet\'s products help operators achieve higher productivity and safety standards.\r\n\r\nWhy Choose Smet for Heavy Equipment?\r\n\r\nInnovation: Cutting-edge technology to keep your operations running smoothly.\r\n\r\nQuality: Robust and reliable products built to last.\r\n\r\nSupport: Comprehensive support and training for seamless integration.\r\n\r\nExperience the transformation with Smet\'s heavy equipment solutions and elevate your operations to new heights.', 'تفاصيل المدونة', 'Transforming Heavy Equipment with Smet\'s Electronic Solutions\r\nIn the realm of heavy equipment, efficiency and safety are paramount. Smet\'s advanced electronic solutions are engineered to withstand the toughest conditions, ensuring optimal performance and reliability. From construction machinery to mining equipment, Smet\'s products help operators achieve higher productivity and safety standards.\r\n\r\nWhy Choose Smet for Heavy Equipment?\r\n\r\nInnovation: Cutting-edge technology to keep your operations running smoothly.\r\n\r\nQuality: Robust and reliable products built to last.\r\n\r\nSupport: Comprehensive support and training for seamless integration.\r\n\r\nExperience the transformation with Smet\'s heavy equipment solutions and elevate your operations to new heights.', 'اختصار تفاصيل المدونة', 'e6sFLDROoGiZNJCR32g1uKObrqUIT1aG3Ki59Z4J.jpg', '2023-05-02 22:56:28', '2024-12-06 12:53:01'),
(3, 'ahmed-radwan', 'Ahmed Radwan', 'مدونة 3', 'Make Livestock Farming Easier with Smet\'s Tech\r\nHey farmers! Managing your livestock just got a whole lot easier with Smet\'s electronic solutions. We\'re all about making your life simpler and your farm more productive.\r\n\r\nWhy You\'ll Love Smet:\r\n\r\nLive Updates: Keep an eye on your animals in real-time.\r\n\r\nSave Time: Automate chores like feeding and watering.\r\n\r\nStay Safe: Protect your livestock with our advanced security systems.\r\n\r\nReady to take your farming to the next level? Smet\'s got the tech to help you do it.', 'تفاصيل المدونة', 'Make Livestock Farming Easier with Smet\'s Tech\r\nHey farmers! Managing your livestock just got a whole lot easier with Smet\'s electronic solutions. We\'re all about making your life simpler and your farm more productive.\r\n\r\nWhy You\'ll Love Smet:\r\n\r\nLive Updates: Keep an eye on your animals in real-time.\r\n\r\nSave Time: Automate chores like feeding and watering.\r\n\r\nStay Safe: Protect your livestock with our advanced security systems.\r\n\r\nReady to take your farming to the next level? Smet\'s got the tech to help you do it.', 'اختصار تفاصيل المدونة', 'nqsL9dC9xFlcvKdoWV3GjoCrorThq0fpDKASZHPM.jpg', '2023-05-02 22:56:28', '2024-12-06 12:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_en`, `title_ar`, `created_at`, `updated_at`) VALUES
(1, 'FIRE RATED ALUMINIUM COMPOSITE PANELS ', 'تصنيف 1', '2024-12-18 14:58:28', '2024-12-18 14:58:28'),
(2, 'CORPORATE IDENTITY ', 'تصنيف 2', '2024-12-18 20:59:59', '2024-12-18 20:59:59'),
(4, 'FACADE SYSTEMS', 'تصنيف 3', '2024-12-20 17:20:19', '2024-12-20 17:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` bigint UNSIGNED NOT NULL,
  `parent_id` int NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_id` int DEFAULT NULL,
  `gen` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `parent_id`, `code`, `child_id`, `gen`, `created_at`, `updated_at`) VALUES
(1, 9, 'SJKL%G1&#9', 21, 1, NULL, '2022-03-28 13:56:51'),
(2, 9, 'KKL%G1&#9', NULL, 1, NULL, '2022-03-10 14:56:51'),
(3, 9, 'MHmq%G1&#9', NULL, 1, NULL, '2022-03-28 13:56:51'),
(85, 8, 'hkmn%G1&#8', 16, 1, '2022-03-22 12:55:25', '2022-03-23 13:15:15'),
(86, 8, 'mhx%G1&#8', NULL, 1, '2022-03-22 12:55:25', '2022-03-22 12:55:25'),
(87, 8, 'ajlk%G1&#8', NULL, 1, '2022-03-22 12:55:25', '2022-03-22 12:55:25'),
(127, 16, 'xyz%G2&#16#P8', NULL, 2, '2022-03-23 14:53:18', '2022-03-23 14:53:18'),
(128, 16, 'jkl%G2&#16#P8', NULL, 2, '2022-03-23 14:53:18', '2022-03-23 14:53:18'),
(129, 16, 'mnb%G2&#16#P8', 17, 2, '2022-03-23 14:53:18', '2022-03-23 14:59:35'),
(130, 17, '2hdrjg2g%G3&#17#P16#P8', NULL, 3, '2022-03-23 15:00:05', '2022-03-23 15:00:05'),
(131, 17, 'Qa07jAWW%G3&#17#P16#P8', NULL, 3, '2022-03-23 15:00:05', '2022-03-23 15:00:05'),
(132, 17, 'Y3k3IFeC%G3&#17#P16#P8', 18, 3, '2022-03-23 15:00:05', '2022-03-23 15:02:49'),
(133, 18, '1mE1AIj3%G4&#18#P17#P16#P8', 19, 4, '2022-03-23 15:03:18', '2022-03-23 15:27:55'),
(134, 18, '70QeQFEm%G4&#18#P17#P16#P8', NULL, 4, '2022-03-23 15:03:18', '2022-03-23 15:03:18'),
(135, 18, 'jEdcF41w%G4&#18#P17#P16#P8', NULL, 4, '2022-03-23 15:03:18', '2022-03-23 15:03:18'),
(136, 19, '1aO5D40r%G5&#19#P18#P17#P16#P8', NULL, 5, '2022-03-23 15:29:53', '2022-03-23 15:29:53'),
(137, 19, 'dyGxLFOJ%G5&#19#P18#P17#P16#P8', 20, 5, '2022-03-23 15:29:54', '2022-03-23 15:42:28'),
(138, 19, 'MT9IVUim%G5&#19#P18#P17#P16#P8', NULL, 5, '2022-03-23 15:29:54', '2022-03-23 15:29:54'),
(142, 20, 'gN7TWiM0%G6&#20#P19#P18#P17#P16#P8', NULL, 6, '2022-03-27 10:07:54', '2022-03-27 10:07:54'),
(143, 20, 'P2RW5wY9%G6&#20#P19#P18#P17#P16#P8', NULL, 6, '2022-03-27 10:07:55', '2022-03-27 10:07:55'),
(144, 20, '4YvzFmkN%G6&#20#P19#P18#P17#P16#P8', 22, 6, '2022-03-27 10:07:55', '2022-03-29 11:08:23'),
(145, 21, 'A4rfbCM6%G2&#21#P9', NULL, 2, '2022-03-27 10:29:03', '2022-03-27 10:29:03'),
(146, 21, 'HaUCbQs4%G2&#21#P9', NULL, 2, '2022-03-27 10:29:03', '2022-03-27 10:29:03'),
(147, 21, 'bho6xQFk%G2&#21#P9', NULL, 2, '2022-03-27 10:29:03', '2022-03-27 10:29:03'),
(166, 22, 'QNFCdBYU%G7&#22#P20#P19#P18#P17#P16', NULL, 7, '2022-03-29 11:08:17', '2022-03-29 11:08:17'),
(167, 22, '7OsFmYMJ%G7&#22#P20#P19#P18#P17#P16', NULL, 7, '2022-03-29 11:08:17', '2022-03-29 11:08:17'),
(168, 22, 'LWW8XpCo%G7&#22#P20#P19#P18#P17#P16', NULL, 7, '2022-03-29 11:08:17', '2022-03-29 11:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(3, 'mahmoud', 'zaki@customer.com', NULL, 'asdsadasdasd', '2022-04-04 06:16:46', '2022-04-04 06:16:46'),
(4, 'aaaaaaaa yasta', 'M@M.COM', NULL, 'ASDASDASDSA', '2023-04-28 18:47:16', '2023-04-28 18:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_10_12_124343_create_products_table', 2),
(5, '2021_10_12_131107_create_product_galleries_table', 2),
(6, '2021_10_12_140432_laratrust_setup_tables', 3),
(7, '2021_10_13_133427_create_codes_table', 4),
(8, '2021_10_14_140850_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_paid` tinyint NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `name`, `address`, `phone`, `total`, `is_paid`, `code`, `payment_method`, `created_at`, `updated_at`) VALUES
(54, 9, 16, 'mahmoud', '25 شارع القاهرة', '01011941903', NULL, 1, 'hkmn%G1&#8', 'cash', '2022-03-23 14:53:18', '2022-03-23 14:53:23'),
(55, 9, 17, 'osama', '25 شارع القاهرة', '01011941903', NULL, 1, 'mnb%G2&#16#P8', 'cash', '2022-03-23 15:00:05', '2022-03-23 15:00:12'),
(56, 9, 18, 'nader', '25 شارع القاهرة', '01023658899', NULL, 1, 'Y3k3IFeC%G3&#17#P16#P8', 'cash', '2022-03-23 15:03:18', '2022-03-23 15:03:24'),
(57, 9, 19, 'karem', '25 شارع القاهرة', '012341', NULL, 1, '1mE1AIj3%G4&#18#P17#P16#P8', 'cash', '2022-03-23 15:29:53', '2022-03-23 15:30:06'),
(59, 9, 20, 'nour', '25 شارع القاهرة', '01011941903', NULL, 1, 'dyGxLFOJ%G5&#19#P18#P17#P16#P8', 'cash', '2022-03-27 10:07:54', '2022-03-27 10:08:20'),
(60, 9, 21, 'salah', '25 شارع القاهرة', '01011941903', NULL, 1, 'SJKL%G1&#9', 'cash', '2022-03-27 10:29:03', '2022-03-27 10:29:10'),
(69, 7, 22, 'sadsa', 'egypt', '+201011941903', '800', 1, '4YvzFmkN%G6&#20#P19#P18#P17#P16#P8', 'cash', '2022-03-29 11:08:17', '2022-03-29 11:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `des_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `des` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `features_text` text COLLATE utf8mb4_general_ci,
  `features_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `technical_data_text` text COLLATE utf8mb4_general_ci,
  `technical_data_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `advantage_text` text COLLATE utf8mb4_general_ci,
  `advantage_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `slug`, `category_id`, `title`, `title_ar`, `des_ar`, `des`, `price`, `image`, `features_text`, `features_image`, `technical_data_text`, `technical_data_image`, `advantage_text`, `advantage_image`, `created_at`, `updated_at`) VALUES
(1, 'ALUBOND-A1', 1, 'ALUBOND A1\r\n', NULL, NULL, ' Alubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process. Alubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core. Alubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n\r\nPanel Dimension STANDARD WIDTH: 1250mm AVAILABLE WIDTH: 1000mm, 1250mm, 1500mm STANDARD LENGTH: 3200mm, 4000mm AVAILABLE LENGTH: Custom order upto 11000mm AVAILABLE THICKNESS: 3mm, 4mm, 5mm, 6mm AVAILABLE SKIN THICKNES: 0.3mm – 0.5mm *Note: FR A1 Max Width 1500mm ', '', 'sv-2.jpg', '\r\nAlubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n', 'core-types-mirror-2.gif', NULL, 'alubonda2_technical-fr-a2.gif', 'Alubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\nABOUT OUR COMPANY\r\n\r\nAlubond has emerged as the world’s largest MCM & ACP Brand with a 25 Million sq.m production capacity across various production bases. Completely integrated with FR A1/A2/B1 Core & Granules Production, Coil Coating, Fire Rated Bonding Adhesives & Paint Production.\r\n\r\nQuick links\r\n\r\n    Products\r\n    Downloads\r\n    News\r\n    Colours & Finishes\r\n    Contact Us\r\n\r\nGlobal Presence\r\n\r\n    Alubond Global\r\n    Alubond USA\r\n    Alubond Canada\r\n    Alubond Qatar\r\n    Alubond Turkey\r\n    Alubond Egypt\r\n\r\nSubscribe to our Newsletter\r\n', 'core-types-mirror-2.gif', NULL, NULL),
(2, 'ALUBOND-A2', 1, 'ALUBOND A2\r\n', NULL, NULL, ' Alubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process. Alubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core. Alubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n\r\nPanel Dimension STANDARD WIDTH: 1250mm AVAILABLE WIDTH: 1000mm, 1250mm, 1500mm STANDARD LENGTH: 3200mm, 4000mm AVAILABLE LENGTH: Custom order upto 11000mm AVAILABLE THICKNESS: 3mm, 4mm, 5mm, 6mm AVAILABLE SKIN THICKNES: 0.3mm – 0.5mm *Note: FR A1 Max Width 1500mm ', '', 'sv-1.jpg', '\r\nAlubond A2 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n', 'core-types-mirror-2.gif', NULL, 'alubonda2_technical-fr-a2.gif', 'Alubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\nABOUT OUR COMPANY\r\n\r\nAlubond has emerged as the world’s largest MCM & ACP Brand with a 25 Million sq.m production capacity across various production bases. Completely integrated with FR A1/A2/B1 Core & Granules Production, Coil Coating, Fire Rated Bonding Adhesives & Paint Production.\r\n\r\nQuick links\r\n\r\n    Products\r\n    Downloads\r\n    News\r\n    Colours & Finishes\r\n    Contact Us\r\n\r\nGlobal Presence\r\n\r\n    Alubond Global\r\n    Alubond USA\r\n    Alubond Canada\r\n    Alubond Qatar\r\n    Alubond Turkey\r\n    Alubond Egypt\r\n\r\nSubscribe to our Newsletter\r\n', 'core-types-mirror-2.gif', NULL, NULL),
(3, 'Alubond-Euroclass-B', 1, 'Alubond Euroclass B\r\n', NULL, NULL, ' Alubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process. Alubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core. Alubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n\r\nPanel Dimension STANDARD WIDTH: 1250mm AVAILABLE WIDTH: 1000mm, 1250mm, 1500mm STANDARD LENGTH: 3200mm, 4000mm AVAILABLE LENGTH: Custom order upto 11000mm AVAILABLE THICKNESS: 3mm, 4mm, 5mm, 6mm AVAILABLE SKIN THICKNES: 0.3mm – 0.5mm *Note: FR A1 Max Width 1500mm ', '', 'sv-3.jpg', '\r\nAlubond Euroclass B – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n', 'core-types-mirror-2.gif', NULL, 'alubonda2_technical-fr-a2.gif', 'Alubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\nABOUT OUR COMPANY\r\n\r\nAlubond has emerged as the world’s largest MCM & ACP Brand with a 25 Million sq.m production capacity across various production bases. Completely integrated with FR A1/A2/B1 Core & Granules Production, Coil Coating, Fire Rated Bonding Adhesives & Paint Production.\r\n\r\nQuick links\r\n\r\n    Products\r\n    Downloads\r\n    News\r\n    Colours & Finishes\r\n    Contact Us\r\n\r\nGlobal Presence\r\n\r\n    Alubond Global\r\n    Alubond USA\r\n    Alubond Canada\r\n    Alubond Qatar\r\n    Alubond Turkey\r\n    Alubond Egypt\r\n\r\nSubscribe to our Newsletter\r\n', 'core-types-mirror-2.gif', NULL, NULL),
(4, 'automobile-showrooms', 2, 'automobile showrooms\r\n', NULL, NULL, ' Alubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process. Alubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core. Alubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n\r\nPanel Dimension STANDARD WIDTH: 1250mm AVAILABLE WIDTH: 1000mm, 1250mm, 1500mm STANDARD LENGTH: 3200mm, 4000mm AVAILABLE LENGTH: Custom order upto 11000mm AVAILABLE THICKNESS: 3mm, 4mm, 5mm, 6mm AVAILABLE SKIN THICKNES: 0.3mm – 0.5mm *Note: FR A1 Max Width 1500mm ', '', 'automobile_showrooms.jpg', '\r\nAlubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n', 'core-types-mirror-2.gif', NULL, 'alubonda2_technical-fr-a2.gif', 'Alubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\nABOUT OUR COMPANY\r\n\r\nAlubond has emerged as the world’s largest MCM & ACP Brand with a 25 Million sq.m production capacity across various production bases. Completely integrated with FR A1/A2/B1 Core & Granules Production, Coil Coating, Fire Rated Bonding Adhesives & Paint Production.\r\n\r\nQuick links\r\n\r\n    Products\r\n    Downloads\r\n    News\r\n    Colours & Finishes\r\n    Contact Us\r\n\r\nGlobal Presence\r\n\r\n    Alubond Global\r\n    Alubond USA\r\n    Alubond Canada\r\n    Alubond Qatar\r\n    Alubond Turkey\r\n    Alubond Egypt\r\n\r\nSubscribe to our Newsletter\r\n', 'core-types-mirror-2.gif', NULL, NULL),
(5, 'petrol-station', 2, 'petrol station\r\n', NULL, NULL, ' Alubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process. Alubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core. Alubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n\r\nPanel Dimension STANDARD WIDTH: 1250mm AVAILABLE WIDTH: 1000mm, 1250mm, 1500mm STANDARD LENGTH: 3200mm, 4000mm AVAILABLE LENGTH: Custom order upto 11000mm AVAILABLE THICKNESS: 3mm, 4mm, 5mm, 6mm AVAILABLE SKIN THICKNES: 0.3mm – 0.5mm *Note: FR A1 Max Width 1500mm ', '', 'petrol_station.jpg', '\r\nAlubond A2 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n', 'core-types-mirror-2.gif', NULL, 'alubonda2_technical-fr-a2.gif', 'Alubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\nABOUT OUR COMPANY\r\n\r\nAlubond has emerged as the world’s largest MCM & ACP Brand with a 25 Million sq.m production capacity across various production bases. Completely integrated with FR A1/A2/B1 Core & Granules Production, Coil Coating, Fire Rated Bonding Adhesives & Paint Production.\r\n\r\nQuick links\r\n\r\n    Products\r\n    Downloads\r\n    News\r\n    Colours & Finishes\r\n    Contact Us\r\n\r\nGlobal Presence\r\n\r\n    Alubond Global\r\n    Alubond USA\r\n    Alubond Canada\r\n    Alubond Qatar\r\n    Alubond Turkey\r\n    Alubond Egypt\r\n\r\nSubscribe to our Newsletter\r\n', 'core-types-mirror-2.gif', NULL, NULL),
(6, 'retail-outlets', 2, 'retail outlets\r\n', NULL, NULL, ' Alubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process. Alubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core. Alubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n\r\nPanel Dimension STANDARD WIDTH: 1250mm AVAILABLE WIDTH: 1000mm, 1250mm, 1500mm STANDARD LENGTH: 3200mm, 4000mm AVAILABLE LENGTH: Custom order upto 11000mm AVAILABLE THICKNESS: 3mm, 4mm, 5mm, 6mm AVAILABLE SKIN THICKNES: 0.3mm – 0.5mm *Note: FR A1 Max Width 1500mm ', '', 'retail_outlets.jpg', '\r\nAlubond Euroclass B – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n', 'core-types-mirror-2.gif', NULL, 'alubonda2_technical-fr-a2.gif', 'Alubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\nABOUT OUR COMPANY\r\n\r\nAlubond has emerged as the world’s largest MCM & ACP Brand with a 25 Million sq.m production capacity across various production bases. Completely integrated with FR A1/A2/B1 Core & Granules Production, Coil Coating, Fire Rated Bonding Adhesives & Paint Production.\r\n\r\nQuick links\r\n\r\n    Products\r\n    Downloads\r\n    News\r\n    Colours & Finishes\r\n    Contact Us\r\n\r\nGlobal Presence\r\n\r\n    Alubond Global\r\n    Alubond USA\r\n    Alubond Canada\r\n    Alubond Qatar\r\n    Alubond Turkey\r\n    Alubond Egypt\r\n\r\nSubscribe to our Newsletter\r\n', 'core-types-mirror-2.gif', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(5, 1, 'sv-1.jpg', '2025-03-18 04:39:19', '2025-03-18 04:39:19'),
(6, 2, 'sv-2.jpg', '2025-03-18 04:39:19', '2025-03-18 04:39:19'),
(7, 3, 'sv-3.jpg', '2025-03-18 04:39:19', '2025-03-18 04:39:19'),
(8, 1, 'slojevi-1.png', '2025-03-18 04:39:19', '2025-03-18 04:39:19'),
(9, 1, 'core-types-mirror-2.gif', '2025-03-18 04:39:19', '2025-03-18 04:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, NULL, NULL),
(2, 'moderator', 'Moderator', NULL, NULL, NULL),
(3, 'customer', 'Customer', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(3, 3, 'App\\User'),
(3, 5, 'App\\User'),
(3, 8, 'App\\User'),
(3, 9, 'App\\User'),
(3, 10, 'App\\User'),
(3, 11, 'App\\User'),
(3, 12, 'App\\User'),
(3, 13, 'App\\User'),
(3, 14, 'App\\User'),
(3, 15, 'App\\User'),
(3, 16, 'App\\User'),
(3, 17, 'App\\User'),
(3, 18, 'App\\User'),
(3, 19, 'App\\User'),
(3, 20, 'App\\User'),
(3, 21, 'App\\User'),
(3, 22, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `des_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `des_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '4.jpeg',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `slug`, `title_en`, `title_ar`, `des_en`, `des_ar`, `image`, `created_at`, `updated_at`) VALUES
(1, 'amsoil', 'AMSOIL.', 'امسويل', 'Unleash peak performance with AMSOIL premium lubricants: quality, protection, and efficiency for engines.', 'أطلق الأداء الأقصى مع زيوت التشحيم الفاخرة من AMSOIL: الجودة، الحماية، والكفاءة للمحركات', '5.jpeg', '2023-04-26 02:20:38', '2024-12-06 11:07:07'),
(2, 'sports-electronic-equipments', 'Sports electronic equipments.', 'الاجهزة الرياضية', 'Enhance sports performance with premium electronic equipment and scoreboards, ensuring accuracy and durability.', 'عزز الأداء الرياضي باستخدام الأجهزة الإلكترونية الممتازة ولوحات النتائج، لضمان الدقة والمتانة', '4.jpeg', '2023-04-26 02:20:38', '2024-12-06 11:03:44'),
(3, 'air-compressors-spare-parts', 'Air compressors & spare parts.', 'ضواغط الهواء وقطع الغيار', 'Distributor of top-quality industrial air compressors and genuine spare parts, ensuring smooth operations.', 'موزع لأفضل أنواع ضواغط الهواء الصناعية وقطع الغيار الأصلية، مما يضمن تشغيل سلس', '3.jpeg', '2023-04-26 02:20:38', '2024-12-06 11:01:10'),
(4, 'heavy-equipments-safety-devices-2', 'Heavy equipment\'s safety devices', 'اجهزة امان المعدات الثقيلة', 'Advanced Load Moment Indicators (LMI) enhance safety & efficiency for heavy machinery operations.', 'مؤشرات الحمل اللحظي المتقدمة (LMI) تعزز السلامة والكفاءة في عمليات المعدات الثقيلة.', '2.jpeg', '2023-04-26 02:20:38', '2024-12-06 10:55:42'),
(11, 'animal-livestock-solutions', 'Animal LIVESTOCK SOLUTIONS', 'حلول الثروة الحيوانية', 'Transform livestock farming with advanced electronic solutions, ensuring efficiency and safety.', 'تربية المواشي باستخدام الحلول الإلكترونية المتقدمة، مما يضمن الكفاءة والسلامة', '1.jpeg', '2024-12-06 11:12:14', '2024-12-06 11:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `team_section_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'favicon.png',
  `about_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_des` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_des_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_vid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `welcome_phrase_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_section_1_image1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_section_1_image2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_section_2_title_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_title_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_Subtitle_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_section_2_Subtitle_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_section_2_text_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_text_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_step1_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_step1_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_step2_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_step2_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_step3_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_step3_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_middel_banner_text_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_middel_banner_text_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `completed_projects` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `happy_clients` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `awards_won` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `phone`, `email`, `logo`, `team_section_image`, `favicon`, `about_title`, `about_des`, `about_des_ar`, `banner_vid`, `map`, `title_en`, `title_ar`, `banner`, `welcome_phrase_ar`, `address_en`, `address_ar`, `city_en`, `city_ar`, `country_en`, `country_ar`, `about_section_1_image1`, `about_section_1_image2`, `about_section_2_title_en`, `about_section_2_title_ar`, `about_section_2_Subtitle_en`, `about_section_2_Subtitle_ar`, `about_section_2_text_en`, `about_section_2_text_ar`, `about_section_2_step1_en`, `about_section_2_step1_ar`, `about_section_2_step2_en`, `about_section_2_step2_ar`, `about_section_2_step3_en`, `about_section_2_step3_ar`, `home_middel_banner_text_en`, `home_middel_banner_text_ar`, `completed_projects`, `happy_clients`, `awards_won`, `meta_title_en`, `meta_title_ar`, `meta_description_en`, `meta_description_ar`, `meta_keyword_en`, `meta_keyword_ar`, `created_at`, `updated_at`) VALUES
(1, '+971 50 525 5374', 'info@smetglobal.com', 'c4Jj1tnM4YtH7juRqvc6GsxOdk4AljPbS6Dg5b8R.png', 'C0izQvVvoVxOx6xoGlIjMSlA0g00qjVVzIm6yN1n.jpg', 'Iz9VoxQ2pQBbj69AiRtMtRBHVYexnmNBL9UZQwer.png', 'ماذا تعرف عنا', '<p>Welcome to SMET, where cutting-edge technology meets exceptional trading expertise. As a leading provider of comprehensive electronic solutions, we are dedicated to delivering innovative, high-quality products and services that cater to diverse industry needs. Our commitment to excellence extends beyond just electronics&mdash;we also excel in the trading sector, ensuring our clients have access to the finest goods and services available globally. Our team of skilled professionals brings together years of experience and a passion for technology to create solutions that not only meet but exceed expectations. From advanced electronic components and devices to seamless trading operations, SMET is your trusted partner in achieving success. Whether you&rsquo;re looking to enhance your business with the latest technological advancements or streamline your trading processes, we are here to provide you with the support and expertise you need. Join us on a journey of innovation and growth as we redefine the possibilities in electronic solutions and trading.</p>', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\"', 'P4WA0iehJMokrXx53PiMkVfKqTRjMVpVXi9HL26D.mp4', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3602.8570946896175!2d55.54650591501441!3d25.443040783782436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDI2JzM1LjAiTiA1NcKwMzInNTUuMyJF!5e0!3m2!1sen!2seg!4v1684587587169!5m2!1sen!2seg\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'We are a digital and branding company that believes in the power of creative strategy and along with great design.', 'سميت يوفر الحلول', 'gDevTAcN2P8sr9G6CFrafjXlXRxxDVcwXgsEIaJu.jpg', 'test_ar', 'LV-71-C El Hamriyah Free Zone - UAE Sharja, 41635, AE', 'الامارات', 'test', 'test_ar', 'test', 'test_ar', 'JlMRYpV75MDaAsxUEPGYtb5buHIUDmMXj1cx6MVy.jpg', 'XadchlI4hKhoxHKHhHYuaqDAYAwWrJIK57Ifl5Q6.jpg', 'Here are 3 working steps to organize our business projects', 'هناك 3 خطوات لتنظيم العمل', 'How It Works?', 'كيف يتم العمل', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare.', 'Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis.', 'Collect Data', 'تجميع البيانات', 'Data Analysis', 'تحليل البيانات', 'Finalize Product', 'المنتج النهائي', '<p>We are trusted by over 5000+ clients. Join them by using our services and grow your business</p>', '<p>نحن موثوقون من قبل أكثر من 5000 عميل. انضم إليهم باستخدام خدماتنا وقم بتنمية أعمالك</p>', '1000', '500', '150', 'test', 'test_ar', 'test', 'test_ar', 'test', 'test_ar', '2021-07-14 08:07:54', '2025-01-09 17:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `social_settings`
--

CREATE TABLE `social_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_settings`
--

INSERT INTO `social_settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'https://www.facebook.com/', '2021-07-14 08:07:54', '2022-04-03 07:34:27'),
(2, 'twitter', NULL, '2021-07-14 08:07:55', '2021-07-14 08:07:55'),
(3, 'whatsApp', NULL, '2021-07-14 08:07:55', '2021-07-14 08:07:55'),
(4, 'linkedIn', NULL, '2021-07-14 08:07:55', '2021-07-14 08:07:55'),
(5, 'pinterest', NULL, '2021-07-14 08:07:55', '2021-07-14 08:07:55'),
(6, 'instagram', 'https://www.instagram.com/', '2021-07-14 08:07:55', '2022-04-03 07:32:52'),
(7, 'youtube', 'https://www.youtube.com/', '2021-07-14 08:07:55', '2022-04-03 07:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `created_at`, `updated_at`, `email`) VALUES
(1, '2023-05-06 21:56:30', '2023-05-06 21:56:30', 'test@test.com'),
(2, '2023-05-06 21:57:30', '2023-05-06 21:57:30', 'M@M.COM');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `des_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `des_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `des_en`, `des_ar`, `title_en`, `title_ar`, `created_at`, `updated_at`) VALUES
(1, 'Nikolas Brooten', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus curabitur blandit.', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus curabitur blandit.', 'Sales Manager', 'مدير مبيعات', '2023-10-07 19:10:15', '2023-10-07 19:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generation` int DEFAULT NULL,
  `balance` double DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `code`, `generation`, `balance`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@app.com', '01011941903', NULL, '$2y$10$dMPdTRyR9h/lDLGa23mPPutaUHenrWz50MPY.crzN43REvPXVOvdK', '', NULL, 0, NULL, NULL, NULL),
(5, 'customer1000', 'customer1000@app.com', '01114785669', NULL, '$2y$10$Hf1SSrQszDOSwMr.G4gJEen93L8cS7.cDOG3769U7r7PwJpOknIUS', '', 1, 0, NULL, '2021-10-13 13:30:19', '2021-10-13 13:30:19'),
(8, 'amr', 'amr@customer.com', '321654987', NULL, '$2y$10$c8LAq77HHB6YMh/TcJQD9uYOtrBqWliXTRu71T0jAblHJ3E7Q0aBW', '', 1, 30, NULL, '2022-03-22 12:51:13', '2022-03-27 10:08:20'),
(9, 'omar', 'omar@customer.com', '2598422', NULL, '$2y$10$IA1hzTCjc6Gm5NhJMl/31eCJ6PYwKfHpoBkQY39Vzj6GwNOShocc2', '', 1, 0, NULL, '2022-03-22 12:51:13', '2022-03-28 13:56:51'),
(11, 'mohamed', 'mohamed@customer.com', '123456654', NULL, '$2y$10$5ARxQ1OACTzC5Pkz4JT7YO.bbTPo8Hh9GUcAYsvDQohEyc8qgQkIu', '', 1, 0, NULL, '2022-03-22 15:35:12', '2022-03-23 11:20:16'),
(12, 'ahmed', 'ahmed@customer.com', '0102255694', NULL, '$2y$10$9.YSOqNrstppj757sqveO.YYGd.WfR037qcIHX557ikCqablNshhy', '', 1, 0, NULL, '2022-03-23 11:01:12', '2022-03-23 11:01:12'),
(16, 'mahmoud', 'mahmoud@customer.com', '01011225985', NULL, '$2y$10$SMXxrpgq1KulTSh2S7EjLeHn.RGsemrM7U5dJgId/AD5b/5moVejS', 'hkmn%G1&#8', 2, NULL, NULL, '2022-03-23 13:15:15', '2022-03-23 15:00:12'),
(17, 'osama', 'osama@customer.com', '0102365488', NULL, '$2y$10$qeQT8RUQo5TcbyR8CpXlJOYwZlz9ZIrlqiIO/K4dx1rXgGz1Kc0Im', 'mnb%G2&#16#P8', 3, NULL, NULL, '2022-03-23 14:59:35', '2022-03-23 15:03:24'),
(18, 'nader', 'nader@customer.com', '01023659899', NULL, '$2y$10$XU6LSVngOGQeLuMQqbMM1OAScznrnJFz37ZgEtcLY1AYOm.UlMoYK', 'Y3k3IFeC%G3&#17#P16#P8', 4, NULL, NULL, '2022-03-23 15:02:49', '2022-03-23 15:30:06'),
(19, 'kareem', 'kareem@customer.com', '0102365488', NULL, '$2y$10$.7u/cBsJMcYfKnAuu2WTC.Gcc38mUB0kIIFxNQsYjLQ3L/pQEzW2W', '1mE1AIj3%G4&#18#P17#P16#P8', 5, NULL, NULL, '2022-03-23 15:27:55', '2022-03-23 15:43:00'),
(20, 'nour', 'nour@customer.com', '01023365988', NULL, '$2y$10$HSf6knxJFMAVubA7s9UdE.KWwOXgE1UgcUpxkYgISjq0eyMU1NLj2', 'dyGxLFOJ%G5&#19#P18#P17#P16#P8', 6, 0, NULL, '2022-03-23 15:42:28', '2022-03-23 15:42:28'),
(21, 'salah', 'salah@customer.com', '+20123456789', NULL, '$2y$10$pFxTqG/1KIWy36PgrgmiM.U25ZwlyS/5cEQoT4iJ6irkWGO6bZHPm', 'SJKL%G1&#9', 2, 0, NULL, '2022-03-27 10:28:32', '2022-03-27 10:28:32'),
(22, 'zaki', 'zaki@customer.com', '012365887', NULL, '$2y$10$0Lq/y4FcyUoGiRrC8tibjut4e1sBqIpbUFGB8hXRO48ikiRx7ZnIi', '4YvzFmkN%G6&#20#P19#P18#P17#P16#P8', 7, 0, NULL, '2022-03-27 15:02:46', '2022-03-27 15:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

CREATE TABLE `why_choose_us` (
  `id` int NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `des_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `des_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`id`, `title_en`, `title_ar`, `des_en`, `des_ar`, `created_at`, `updated_at`) VALUES
(1, 'Proven Reliability', 'موثوقية مثبتة', 'With a track record of reliability, you can trust us to deliver on our promises.', 'مع سجل موثوقية مثبت، يمكنك الوثوق بنا لتقديم ما نعد به', '2023-04-21 17:56:48', '2024-12-06 11:55:01'),
(2, 'Tailored Solutions', 'حلول مخصصة', 'We understand that each client has unique requirements, and we customize our solutions to meet those specific needs with precision and efficiency.', 'نفهم أن لكل عميل متطلبات فريدة، ونقوم بتخصيص حلولنا لتلبية هذه الاحتياجات بدقة وكفاءة.', '2023-04-21 17:56:48', '2024-12-06 11:54:21'),
(3, 'Expert Team', 'فريق خبير', 'Our knowledgeable and experienced team is always ready to assist you with any challenges and help you achieve your goals.', 'فريقنا المتمرس والخبير دائمًا جاهز لمساعدتك في مواجهة أي تحديات ومساعدتك في تحقيق أهدافك.', '2023-04-21 17:56:48', '2024-12-06 11:53:30'),
(4, 'Customer Satisfaction', 'رضا العملاء', 'Your success is our priority. We are dedicated to providing exceptional customer service and support.', 'نجاحك هو أولويتنا. نحن ملتزمون بتقديم خدمة عملاء ودعم استثنائي', '2023-04-21 17:56:48', '2024-12-06 11:52:41'),
(5, 'Quality Assurance', 'ضمان الجودة', 'Our products and services meet the highest standards of quality, ensuring reliability and performance.', 'منتجاتنا وخدماتنا تلتزم بأعلى معايير الجودة، مما يضمن موثوقية وأداء ممتازين', '2023-04-21 17:56:48', '2024-12-06 11:51:56'),
(7, 'Commitment to Innovation', 'الابتكار', 'We continually invest in the latest technologies to provide cutting-edge solutions tailored to your needs.', 'نحن نستثمر باستمرار في أحدث التقنيات لتقديم حلول متطورة تلبي احتياجاتك', '2024-12-06 11:46:13', '2024-12-06 11:51:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_settings`
--
ALTER TABLE `social_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_settings`
--
ALTER TABLE `social_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
