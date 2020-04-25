-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 01:12 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin1@gmail.com', '$2y$10$PmKo.tt3TdPff2S9v6p3WeWx/LpQ5UlFe4YhaZbZheJY4vX9m0umG', 'CWM8D88FyyXLDDRKAPy0O202heI0t6ES093odCmoPuhDQK4gnFWBHR3nduiX', '2018-09-27 04:19:26', '2018-09-27 04:19:26'),
(2, '3Q-TECH ADMIN', 'admin@3qtech.com', '$2y$10$2zqG51gSX4bwHVtEHp1P6O9cmzk1lNcgTngZl0WYv/VbCuV2msSRu', 'cpj1gczwdc7DJKbugAu0NijkEEdGonyXpBJ0nVbFJH9LhY6qSJ3Y8lgwi1Cg', '2018-09-27 05:05:46', '2018-09-27 05:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `price`, `quantity`, `total_amount`, `created_at`, `updated_at`) VALUES
(23, 2, 11, 214, 2, 428, '2018-09-09 12:46:57', '2018-09-09 12:47:42'),
(24, 2, 41, 536, 1, 536, '2018-09-09 12:47:01', '2018-09-09 12:47:01'),
(25, 2, 32, 620, 1, 620, '2018-09-09 12:47:15', '2018-09-09 12:47:15'),
(26, 2, 38, 374, 4, 1496, '2018-09-09 12:47:19', '2018-09-09 12:47:50'),
(39, 4, 5, 280, 1, 280, '2018-09-24 01:53:11', '2018-09-24 01:53:11'),
(40, 4, 10, 349, 4, 1396, '2018-09-24 01:53:26', '2018-09-24 01:53:42'),
(41, 4, 35, 305, 1, 305, '2018-09-24 01:55:11', '2018-09-24 01:55:11'),
(42, 4, 12, 309, 1, 309, '2018-09-24 01:55:21', '2018-09-24 01:55:21'),
(55, 1, 22, 266, 1, 266, '2018-09-27 08:14:21', '2018-09-27 08:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_types` tinyint(1) NOT NULL DEFAULT '1',
  `c_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `c_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'chair.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `has_types`, `c_description`, `is_active`, `c_image`, `created_at`, `updated_at`) VALUES
(1, 'eveniet', 1, 'Debitis hic et necessitatibus totam quia iure. Esse id optio maxime pariatur. Eligendi in cum ex mollitia nihil exercitationem in.', 1, 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(2, 'quis', 1, 'Ipsam et explicabo alias nihil temporibus. Porro provident nulla maiores alias. Et tempora ea est magni maxime tempore sapiente.', 1, 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(3, 'modi', 1, 'Excepturi magnam eaque vitae porro ipsum sit culpa laborum. Non eligendi sint temporibus. Cum dolores et libero quidem maiores. Similique omnis maiores in.', 0, 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(4, 'nisi', 0, 'Sed dicta occaecati dolor illum qui dolorem ea. Necessitatibus dolores nesciunt voluptatem nam. Officia fugit quisquam architecto id deleniti ut sit.', 1, 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(5, 'voluptatem', 0, 'Voluptatibus assumenda sed doloribus aut. Adipisci omnis et consequatur impedit. Praesentium natus iure atque ut.', 0, 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(6, 'tempora', 1, 'Quis aperiam cumque autem debitis aspernatur. Voluptatem nesciunt reprehenderit eos iste laudantium voluptatem est consequuntur. Iste quibusdam sequi molestiae dolores pariatur iusto veritatis eaque.', 1, 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(7, 'necessitatibus', 1, 'Maxime ab omnis eum tempora. Repellat tenetur odio totam et quo et. Dolorem explicabo eum magnam eos qui.', 0, 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(8, 'sint', 0, 'Explicabo cumque est quo possimus est. Rerum quia sapiente voluptatem voluptatibus. Repellendus vero cumque ab nobis facere et. Nihil tempora deserunt esse nihil molestiae.', 0, 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(9, 'eum', 0, 'Ut tenetur exercitationem mollitia aut consequatur est. Non iusto iusto magni nobis vero nesciunt reprehenderit. Voluptatum voluptatem dicta ea recusandae rerum eaque qui. Et sapiente libero et eum ut.', 0, 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(10, 'ipsam', 0, 'Quae eos consequuntur id ut. Repellat voluptas iusto accusamus odit reprehenderit autem. Quam odio assumenda suscipit esse ipsam eveniet ab commodi. Sint non id consequatur.', 1, 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(11, 'Mother Board', 1, 'Mother Boards for CPUs', 1, '8adad3acb1.jpg', '2018-09-21 01:28:59', '2018-09-21 01:28:59'),
(12, 'something', 1, 'asdf', 1, 'public/category/5.jpg', '2018-09-28 04:58:58', '2018-09-28 04:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `classification`
--

CREATE TABLE `classification` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_is_active` tinyint(1) NOT NULL,
  `class_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'chair.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classification`
--

INSERT INTO `classification` (`id`, `class_name`, `class_short_name`, `class_is_active`, `class_image`, `created_at`, `updated_at`) VALUES
(1, 'eaque', 'suscipit', 0, 'chair.jpg', '2018-08-17 00:11:19', '2018-08-17 00:11:19'),
(2, 'sed', 'quod', 1, 'chair.jpg', '2018-08-17 00:11:19', '2018-08-17 00:11:19'),
(3, 'harum', 'velit', 0, 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(4, 'quia', 'ducimus', 0, 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(5, 'nesciunt', 'aut', 0, 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(6, 'dinesh', 'dinu', 1, 'Prof.jpg', '2018-08-24 00:00:17', '2018-08-24 00:00:17'),
(7, 'Very Large Scale Integration', 'VLSI', 1, 'BMW+i8+Cars+HD+Wallpaper+2.jpg', '2018-09-21 01:27:44', '2018-09-21 01:27:44'),
(8, 'Small Scale Integration', 'SSI', 1, '2015_minions-1920x1080.jpg', '2018-09-24 02:08:17', '2018-09-24 02:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Feed Title', 'This is the feed content', '2018-09-18 18:30:00', '2018-09-12 18:30:00'),
(2, 'Feed Title', 'This is the feed content', '2018-09-09 18:30:00', '2018-09-12 18:30:00'),
(3, 'Feed Title', 'Feed content', '2018-09-12 00:51:59', '2018-09-12 00:51:59'),
(4, 'Feed Title', 'Feed content', '2018-09-12 00:52:15', '2018-09-12 00:52:15'),
(5, 'Feed Title', 'Feed content', '2018-09-12 00:57:14', '2018-09-12 00:57:14'),
(6, 'sachin', 'tendulkar', '2018-09-12 01:39:38', '2018-09-12 01:39:38'),
(7, 'Product Arrival', 'New technology ic chips arrivals', '2018-09-26 02:01:29', '2018-09-26 02:01:29'),
(8, 'This is news Feeds title', 'sdvysvbstctfvgybhnjkmlxdcfvghnjmk drcfvghnjmkl, cdrfvghnjkl', '2018-09-28 04:34:22', '2018-09-28 04:34:22'),
(9, 'This is news Feeds title', 'sdvysvbstctfvgybhnjkmlxdcfvghnjmk drcfvghnjmkl, cdrfvghnjkl', '2018-09-28 04:35:55', '2018-09-28 04:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2018_08_01_143922_create_categories_table', 1),
(26, '2018_08_01_145618_create_types_table', 1),
(27, '2018_08_01_150248_create_products_table', 1),
(28, '2018_08_01_151241_create_ratings_table', 1),
(29, '2018_08_02_141643_create_classification_table', 1),
(30, '2018_08_17_052349_create_stocks_table', 1),
(31, '2018_08_22_141331_create_orders_table', 2),
(32, '2018_08_22_141750_create_carts_table', 2),
(33, '2018_09_11_171819_create_feeds_table', 3),
(34, '2018_09_26_074123_create_refurbishes_table', 4),
(35, '2018_09_27_091648_create_admins_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(31, 1, 18, 3, 320, '2018-09-11 04:30:33', '2018-09-11 04:30:33'),
(32, 1, 21, 1, 563, '2018-09-11 04:30:33', '2018-09-11 04:30:33'),
(33, 1, 32, 1, 620, '2018-09-11 04:30:33', '2018-09-11 04:30:33'),
(34, 1, 45, 1, 506, '2018-09-11 04:30:33', '2018-09-11 04:30:33'),
(35, 1, 38, 1, 374, '2018-09-11 04:30:33', '2018-09-11 04:30:33'),
(36, 1, 18, 4, 320, '2018-09-12 01:35:35', '2018-09-12 01:35:35'),
(37, 1, 6, 3, 440, '2018-09-12 01:35:35', '2018-09-12 01:35:35'),
(38, 1, 6, 3, 440, '2018-09-21 01:12:27', '2018-09-21 01:12:27'),
(39, 1, 6, 1, 503, '2018-09-21 01:12:27', '2018-09-21 01:12:27'),
(40, 1, 6, 7, 503, '2018-09-21 01:17:21', '2018-09-21 01:17:21'),
(41, 4, 5, 1, 280, '2018-09-24 01:54:26', '2018-09-24 01:54:26'),
(42, 4, 10, 4, 349, '2018-09-24 01:54:26', '2018-09-24 01:54:26'),
(43, 1, 6, 1, 454, '2018-09-27 07:53:52', '2018-09-27 07:53:52'),
(44, 1, 6, 1, 454, '2018-09-27 07:54:48', '2018-09-27 07:54:48'),
(45, 1, 10, 1, 349, '2018-09-27 08:05:11', '2018-09-27 08:05:11'),
(46, 1, 10, 2, 349, '2018-09-27 08:05:53', '2018-09-27 08:05:53'),
(47, 3, 10, 2, 349, '2018-09-28 04:02:46', '2018-09-28 04:02:46'),
(48, 3, 54, 5, 50000, '2018-09-28 04:09:52', '2018-09-28 04:09:52'),
(49, 3, 54, 5, 50000, '2018-09-28 04:12:21', '2018-09-28 04:12:21'),
(50, 3, 54, 10, 50000, '2018-09-28 04:13:21', '2018-09-28 04:13:21'),
(51, 3, 54, 10, 50000, '2018-09-28 04:14:18', '2018-09-28 04:14:18'),
(52, 3, 54, 10, 50000, '2018-09-28 04:17:00', '2018-09-28 04:17:00'),
(53, 3, 54, 10, 50000, '2018-09-28 04:17:08', '2018-09-28 04:17:08'),
(54, 3, 54, 10, 50000, '2018-09-28 04:18:58', '2018-09-28 04:18:58'),
(55, 3, 54, 10, 50000, '2018-09-28 04:19:50', '2018-09-28 04:19:50'),
(56, 3, 54, 10, 50000, '2018-09-28 04:20:07', '2018-09-28 04:20:07'),
(57, 3, 54, 10, 50000, '2018-09-28 04:21:24', '2018-09-28 04:21:24'),
(58, 3, 55, 5, 300, '2018-09-28 04:24:56', '2018-09-28 04:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classification_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT '0',
  `p_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'chair.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `type_id`, `product_name`, `classification_id`, `price`, `discount`, `p_description`, `is_active`, `product_image`, `created_at`, `updated_at`) VALUES
(1, 5, 3, 'totam', 5, 532, 18, 'Voluptatem et non ipsa asperiores et voluptas. Fugit mollitia totam quia aut laudantium facere. Corrupti vero in harum sit numquam sint placeat.', 0, 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(2, 7, 11, 'voluptates', 1, 459, 0, 'Enim dolores deserunt reprehenderit fuga libero nulla adipisci. Nemo temporibus nemo fuga et optio non hic qui. Consequuntur error eius est quia necessitatibus neque. Ratione qui saepe temporibus.', 0, 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(3, 2, 9, 'et', 5, 358, 23, 'Velit nihil omnis rerum ea placeat modi consequatur. Dolores laudantium est quibusdam nam nam. Dolor voluptatem in velit.', 1, 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(4, 7, 15, 'quam', 3, 337, 28, 'Magnam autem et exercitationem nobis vitae provident. Ut repudiandae quisquam quidem non eum. Totam tenetur nobis velit accusamus.', 1, 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(5, 6, 15, 'molestias', 2, 280, 27, 'Molestiae repellendus sint velit et. Cumque provident quia molestiae nihil.', 1, 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(6, 10, 7, 'aut', 1, 454, 9, 'Fuga magni laudantium sed dolor. Nobis unde necessitatibus omnis necessitatibus qui ratione iste. Minima recusandae aspernatur magnam expedita sit voluptatem iste.', 0, 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(7, 2, 14, 'et', 2, 508, 20, 'Voluptas inventore et veritatis exercitationem. Sunt suscipit fugit numquam ut laudantium sapiente quibusdam. Accusamus ex nostrum eum est veritatis. Aut fugiat minima nemo impedit est quasi.', 1, 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(8, 4, 15, 'quod', 1, 504, 30, 'Impedit sit iure dolorem pariatur totam animi autem. Quo explicabo rerum sequi magni laborum libero neque. Ex itaque reiciendis in aut dignissimos voluptatem. Voluptas suscipit id ut qui asperiores dolorem cum dolor.', 1, 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(9, 2, 20, 'animi', 1, 222, 11, 'Suscipit nulla ea sed id qui. Sunt aut velit quod ipsa. Ut nulla ut temporibus quia. Eos eos perferendis deleniti sunt.', 1, 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(10, 10, 11, 'magnam', 2, 349, 15, 'In eius autem modi reprehenderit excepturi facilis. Quia fuga voluptatem dolorum temporibus iure vel et. Iure esse sint quibusdam quos. Quam soluta autem quaerat minima sed adipisci.', 1, 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(11, 10, 18, 'ab', 3, 214, 26, 'Rerum soluta quaerat et explicabo beatae non. Non ab ipsum voluptas esse cupiditate. Qui corrupti voluptas aperiam commodi dolor. Veritatis et omnis qui est occaecati ut natus.', 1, 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(12, 2, 13, 'delectus', 3, 309, 23, 'Est ipsa quia autem rerum quia inventore quod provident. Non ducimus nihil sapiente aliquid voluptatem voluptatem eos. Provident dignissimos nostrum delectus ut et optio velit. Delectus in debitis ut ut. Voluptas dignissimos doloremque illum.', 1, 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(13, 1, 16, 'itaque', 1, 570, 29, 'Sint consequatur atque omnis odio. Ut amet eligendi odio qui. Suscipit est sapiente sed ut qui illum. Totam consequatur quis veritatis ab sequi.', 0, 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(14, 9, 11, 'quibusdam', 3, 638, 29, 'Consequatur sed alias et aut consequatur totam. Sed animi nam facere tempore odio. Reprehenderit accusantium tempore beatae molestias aut animi voluptas. Dolor qui quia aut consequatur hic.', 0, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(15, 9, 7, 'et', 4, 417, 19, 'Cum voluptate rem unde est quia et sapiente maxime. Aspernatur et sit dolores natus rerum ea iusto. Cum voluptas porro accusantium sapiente neque voluptatibus.', 1, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(16, 9, 8, 'illum', 1, 359, 2, 'Saepe consequatur est recusandae laborum. Dolor accusamus eos qui quas quia voluptates sunt. Eius ullam explicabo neque aperiam id ut.', 1, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(17, 10, 6, 'voluptas', 2, 503, 29, 'Dolorem eveniet fuga non possimus ratione. Ut ut et similique. Deserunt deleniti et est perspiciatis. Fuga est id eligendi consequuntur maxime sunt. Repudiandae illo voluptatem dolorum consequatur est vel mollitia.', 1, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(18, 6, 4, 'exercitationem', 5, 320, 25, 'Molestias dicta hic totam sunt. Quia nihil cumque ullam hic et non. Omnis placeat facere et rerum sit dolorem voluptatibus. Culpa et sunt maiores delectus qui dolore.', 1, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(19, 5, 1, 'facilis', 5, 440, 1, 'Eaque quasi sit sed velit voluptatibus eos. Voluptate assumenda exercitationem sunt. In at eum quasi nobis. Quibusdam asperiores molestias odit voluptates minus dolor.', 0, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(20, 2, 17, 'corporis', 5, 457, 5, 'Sequi nihil est aut harum a libero. Quia ducimus aut est consequatur. Non dolorum error ea ratione officia quaerat consequatur. Ea eveniet autem quasi et corporis neque velit.', 1, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(21, 5, 13, 'quam', 4, 563, 23, 'Velit qui est numquam laborum. Fugit odio rerum facere vitae amet consequatur corrupti. Nisi sit atque enim vitae consequatur. Voluptates repellat consequatur aperiam deserunt expedita vel illum.', 1, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(22, 6, 14, 'et', 5, 266, 15, 'Esse aut exercitationem minus quaerat sunt quo et. Consequuntur deserunt consectetur nemo distinctio consequatur aut reprehenderit. Quis ea temporibus nesciunt voluptatem sint error. Laboriosam exercitationem et fugit quaerat.', 1, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(23, 8, 10, 'quis', 2, 287, 19, 'Reiciendis inventore laborum aut sint neque error. Vel nulla temporibus corrupti iusto eum labore hic. Assumenda dolores cum fugiat. Recusandae voluptatem tempora non molestiae sequi quia voluptatem.', 1, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(24, 9, 13, 'ipsa', 2, 418, 3, 'Doloribus quaerat consequatur facilis voluptas. Maiores illo ducimus ut libero molestias est numquam. Enim ipsum rerum molestiae in. Voluptatibus quisquam cum velit reprehenderit quos asperiores culpa.', 0, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(25, 6, 17, 'molestiae', 1, 620, 13, 'Maiores et repellendus mollitia et nam vero voluptas. Non quam suscipit numquam accusamus. Iusto totam rem iusto et praesentium. Possimus sit ea distinctio pariatur perferendis. Provident assumenda mollitia veniam voluptates.', 0, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(26, 5, 8, 'voluptas', 2, 222, 4, 'Sit dignissimos in itaque eum deleniti voluptatem accusamus repellendus. Accusantium repudiandae adipisci ut veritatis nisi ad illo. Sed impedit fugit ea suscipit harum et aut in. Sint fugiat illum provident.', 1, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(27, 5, 7, 'officiis', 2, 350, 24, 'Qui cumque consequatur voluptas qui enim assumenda et. Velit repudiandae sint at. Dolores reiciendis praesentium enim quod et tempore. Et hic accusamus explicabo iusto eligendi consequatur et.', 0, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(28, 1, 1, 'assumenda', 5, 493, 5, 'Similique iusto autem velit. Quia sed eos commodi natus. Non aliquid voluptate saepe ea laborum ea minus. Voluptas esse minus et.', 1, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(29, 1, 7, 'voluptas', 2, 440, 11, 'Dolorem dolorem delectus cupiditate et nihil possimus. Ipsum nihil et harum. Eos ipsam blanditiis quo est autem. Et magni minus ipsa cum illo.', 0, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(30, 8, 3, 'eum', 1, 401, 13, 'Dolore quis sint qui ratione. Optio nisi aliquid quis sed deleniti. Id id ut enim veniam. Accusamus eius est est et voluptatem exercitationem.', 0, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(31, 2, 8, 'nostrum', 3, 545, 30, 'Doloribus perspiciatis ratione recusandae sed sit. Soluta ut adipisci est nihil. Ratione esse alias saepe itaque aut qui beatae. Consequatur quia tenetur alias ut ut quibusdam officia.', 1, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(32, 5, 20, 'harum', 4, 620, 3, 'Aut et facilis non voluptatem qui et quia. Porro saepe in aut. Et hic sed dolorum corrupti alias consectetur. Aut doloremque accusamus quas eum.', 1, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(33, 6, 11, 'dolore', 2, 644, 30, 'Rerum fuga quas similique aspernatur. Ea harum numquam unde quae facilis voluptatum. Sunt ducimus eveniet iure voluptate qui quis quia.', 1, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(34, 3, 5, 'beatae', 1, 429, 27, 'Quia sit id in beatae voluptatibus exercitationem. Sit voluptatem nesciunt earum nobis nihil dolores nemo ratione.', 0, 'chair.jpg', '2018-08-17 00:11:22', '2018-08-17 00:11:22'),
(35, 8, 5, 'molestiae', 4, 305, 15, 'Qui eaque dolor fugiat dignissimos et sunt doloribus. Tenetur et sit doloremque accusantium eius sit. Consequuntur labore aut autem nulla cum eum facilis aliquam. Deleniti eos molestiae mollitia inventore odit sit repudiandae.', 0, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(36, 10, 14, 'vero', 5, 586, 4, 'Accusamus et et molestiae voluptas. Explicabo officiis magni fugiat corporis reprehenderit. Ipsum accusamus ipsam id fugiat temporibus vel dolorem dolorum. Distinctio et rerum voluptatibus suscipit non.', 0, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(37, 5, 14, 'eaque', 4, 535, 25, 'In libero quod magnam omnis ut. Consequatur nihil dicta alias magnam. Officiis ab voluptas cupiditate dolores ea id nesciunt.', 1, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(38, 10, 17, 'earum', 4, 374, 26, 'Ea sit hic sunt incidunt iste. Non qui autem officiis. Omnis similique itaque qui placeat ipsam est saepe. Doloremque dolores ut et aperiam.', 1, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(39, 3, 12, 'nam', 1, 402, 20, 'Tempore et eius tempora et qui vel quo qui. Perferendis quis saepe aut maiores. Accusamus ad quis non voluptatem quibusdam.', 1, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(40, 8, 10, 'voluptas', 4, 452, 2, 'Amet nobis et laboriosam voluptatum est omnis mollitia. Commodi molestiae quia natus voluptas laborum. Cupiditate quia natus non. Ea atque reiciendis odit hic odit provident.', 1, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(41, 9, 2, 'odit', 3, 536, 20, 'Non aut earum rerum aut beatae minima dolore hic. Rerum officiis ut laudantium dolorem. Et tempora voluptas ea quae. Qui esse molestiae sunt fuga.', 0, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(42, 2, 7, 'voluptates', 2, 510, 12, 'Nobis tempore aut labore corrupti voluptatem. Eum nobis et commodi qui ratione aut. Dolorem maiores expedita tempora. Quod voluptates atque et debitis.', 1, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(43, 9, 6, 'voluptas', 1, 497, 8, 'Voluptas enim non quae itaque ut. Ad aut non laudantium sit quo recusandae laborum. Ut totam voluptas ut rem molestias libero.', 0, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(44, 8, 19, 'voluptas', 1, 548, 4, 'Perspiciatis facilis ut velit sed numquam reiciendis enim. Reprehenderit veritatis vitae excepturi eos dolorum et eum. Culpa expedita est earum aut quia dolorem enim quis. Eos sapiente voluptate provident ut quod ut sequi.', 1, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(45, 2, 17, 'ea', 4, 506, 21, 'Qui voluptas ea in asperiores. Provident distinctio dolore consequatur beatae. Omnis itaque earum voluptas. Consectetur alias a quia.', 0, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(46, 3, 2, 'fugit', 2, 613, 25, 'Voluptatem dolorem nostrum nam ut veniam iusto. Voluptatibus nihil sed eos asperiores. Aut quibusdam quod voluptatem necessitatibus.', 0, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(47, 2, 7, 'est', 1, 259, 29, 'Assumenda odit illo ab ut. Unde sed molestias explicabo deleniti. Aut eum quis tempore incidunt voluptates harum quod. Alias cum similique eveniet soluta accusantium et ut.', 1, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(48, 4, 6, 'ut', 5, 508, 21, 'Quia consequatur fugiat consequatur autem praesentium sit optio vel. Quas et quaerat cumque at est ea aspernatur voluptatem.', 1, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(49, 5, 2, 'quos', 4, 309, 18, 'Ut officiis voluptas corrupti est in. Tempore voluptatibus porro numquam necessitatibus. Corporis perferendis hic aut nobis sunt aut sequi. Eum et magnam non laudantium quaerat illum.', 1, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(50, 8, 11, 'fugiat', 2, 510, 25, 'Tenetur et magnam molestiae qui eum quo. Atque vero dolores nisi inventore aut. Vero saepe eius vel officiis adipisci qui.', 1, 'chair.jpg', '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(51, 5, 12, 'sdf', 3, 790, 7, 'sd', 1, '1.jpg', '2018-09-26 12:10:13', '2018-09-26 12:10:13'),
(52, 5, 12, 'Yachu', 7, 200, 8, 'wfe', 1, 'abstract-brochure-template_1123-74.jpg', '2018-09-26 12:44:33', '2018-09-26 12:44:33'),
(53, 4, 8, 'Bammi', 1, 300, 2, 'asdkf', 1, '8adad3acb1.jpg', '2018-09-26 12:49:32', '2018-09-26 12:49:32'),
(54, 1, 16, 'Bios chip', 1, 50000, 8, 'event', 1, '8adad3acb1.jpg', '2018-09-28 04:08:09', '2018-09-28 04:08:09'),
(55, 3, 4, 'Diode', 1, 300, 4555, 'akdnfkn', 1, 'Cars%20HD%20Wallpapers%2028.jpg', '2018-09-28 04:22:54', '2018-09-28 04:22:54'),
(56, 4, 8, 'sifb', 2, 234, 6, 'askfjnji', 1, 'chair.jpg', '2018-09-28 04:47:50', '2018-09-28 04:47:50'),
(57, 3, 4, 'sifb', 2, 234, 6, 'askfjnji', 1, 'chair.jpg', '2018-09-28 04:49:20', '2018-09-28 04:49:20'),
(58, 4, 8, 'sifb', 2, 234, 6, 'askfjnji', 1, 'chair.jpg', '2018-09-28 04:50:36', '2018-09-28 04:50:36'),
(59, 3, 4, 'sifb', 2, 234, 6, 'askfjnji', 1, 'chair.jpg', '2018-09-28 04:51:41', '2018-09-28 04:51:41'),
(60, 4, 11, 'sachin', 1, 23, 2345, 'jsdhfb', 1, 'public/products/3.jpg', '2018-09-28 04:54:56', '2018-09-28 04:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refurbishes`
--

CREATE TABLE `refurbishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refurbishes`
--

INSERT INTO `refurbishes` (`id`, `user_id`, `product_name`, `category`, `price`, `description`, `image`, `brand`, `model`, `year`, `document`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Integrated Circuit', 'Electronic Products', '8000', 'sachin', 'public/refurbish/1.jpg', 'asdf', 'wqer', '2018-09-19', 'on', '0', '2018-09-26 07:35:44', '2018-09-26 07:35:44'),
(2, '1', 'Transistor', 'Electronic Products', '200', 'transistor', 'public/refurbish/8k-background-background-designs-for-websites-hd-resolution.jpg', 'asdf', 'qwer', '2018-09-28', 'on', '1', '2018-09-26 07:36:55', '2018-09-26 08:50:33'),
(3, '3', 'Transistor', 'Others', '330', 'something', 'public/refurbish/8adad3acb1.jpg', 'asdf', 'asdf', '2018-02-04', 'on', '1', '2018-09-28 04:04:27', '2018-09-28 04:28:27'),
(4, '3', 'Integrated Circuit', 'Electronic Products', '0', 'sdkjfn', 'public/refurbish/windows_blue_logo-wallpaper-1366x768.jpg', 'sdkf', 'sdn', '2018-09-21', 'on', '9', '2018-09-28 04:29:31', '2018-09-28 04:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `initial_stock` int(11) NOT NULL,
  `available_stock` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_id`, `initial_stock`, `available_stock`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 8, 54, 60, 1, '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(2, 34, 54, 6, 1, '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(3, 43, 43, 41, 1, '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(4, 37, 53, 38, 1, '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(5, 23, 34, 56, 1, '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(6, 14, 47, 59, 1, '2018-08-17 00:11:23', '2018-09-27 07:54:48'),
(7, 40, 51, 54, 1, '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(8, 48, 56, 32, 1, '2018-08-17 00:11:23', '2018-08-17 00:11:23'),
(9, 34, 33, 7, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(10, 44, 48, 34, 1, '2018-08-17 00:11:24', '2018-09-28 04:02:46'),
(11, 16, 0, 0, 0, '2018-08-17 00:11:24', '2018-09-05 06:29:34'),
(12, 34, 55, 36, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(13, 31, 55, 44, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(14, 7, 40, 18, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(15, 20, 51, 19, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(16, 16, 52, 25, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(17, 10, 41, 55, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(18, 3, 42, 41, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(19, 13, 56, 35, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(20, 17, 43, 21, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(21, 48, 43, 19, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(22, 29, 41, 1, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(23, 42, 34, 18, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(24, 6, 46, 37, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(25, 6, 31, 56, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(26, 22, 41, 33, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(27, 48, 60, 40, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(28, 16, 59, 22, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(29, 16, 38, 10, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(30, 26, 49, 6, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(31, 45, 58, 55, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(32, 24, 57, 32, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(33, 40, 45, 8, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(34, 28, 57, 42, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(35, 10, 39, 45, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(37, 50, 60, 26, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(38, 3, 54, 31, 1, '2018-08-17 00:11:24', '2018-08-17 00:11:24'),
(39, 38, 59, 50, 1, '2018-08-17 00:11:25', '2018-08-17 00:11:25'),
(40, 38, 35, 10, 1, '2018-08-17 00:11:25', '2018-08-17 00:11:25'),
(41, 18, 39, 33, 1, '2018-08-17 00:11:25', '2018-08-17 00:11:25'),
(42, 41, 45, 52, 1, '2018-08-17 00:11:25', '2018-08-17 00:11:25'),
(43, 19, 30, 15, 1, '2018-08-17 00:11:25', '2018-08-17 00:11:25'),
(44, 11, 50, 50, 0, '2018-08-17 00:11:25', '2018-09-21 01:44:34'),
(45, 11, 0, 0, 0, '2018-08-17 00:11:25', '2018-09-12 11:30:04'),
(46, 2, 39, 20, 1, '2018-08-17 00:11:25', '2018-08-17 00:11:25'),
(47, 5, 31, 6, 1, '2018-08-17 00:11:25', '2018-08-17 00:11:25'),
(48, 45, 31, 44, 1, '2018-08-17 00:11:25', '2018-08-17 00:11:25'),
(49, 48, 46, 52, 1, '2018-08-17 00:11:25', '2018-08-17 00:11:25'),
(50, 10, 45, 1, 1, '2018-08-17 00:11:25', '2018-08-17 00:11:25'),
(51, 53, 0, 0, 0, '2018-09-26 12:49:32', '2018-09-26 12:49:32'),
(52, 54, 50, 35, 0, '2018-09-28 04:08:09', '2018-09-28 04:21:24'),
(53, 55, 15, 10, 0, '2018-09-28 04:22:55', '2018-09-28 04:24:56'),
(54, 56, 0, 0, 0, '2018-09-28 04:47:50', '2018-09-28 04:47:50'),
(55, 57, 0, 0, 0, '2018-09-28 04:49:21', '2018-09-28 04:49:21'),
(56, 58, 0, 0, 0, '2018-09-28 04:50:36', '2018-09-28 04:50:36'),
(57, 59, 0, 0, 0, '2018-09-28 04:51:41', '2018-09-28 04:51:41'),
(58, 60, 0, 0, 0, '2018-09-28 04:54:57', '2018-09-28 04:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_products` tinyint(1) NOT NULL DEFAULT '1',
  `t_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'chair.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `category_id`, `type_name`, `has_products`, `t_description`, `type_image`, `created_at`, `updated_at`) VALUES
(1, 6, 'consequatur', 1, 'Est quidem culpa hic maxime magni ratione cupiditate modi. Labore aut quo laudantium dolores. A ut quam ratione vitae qui in. Ratione iure cumque in culpa blanditiis culpa.', 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(2, 2, 'mollitia', 0, 'Culpa rerum vel nemo sed saepe eum et rerum. Consequatur ut quia delectus optio suscipit est explicabo.', 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(3, 2, 'vitae', 0, 'Sint deserunt ut autem veritatis ut illum ut. Voluptatem est nam voluptate sit. Numquam consequatur sunt quis. Reprehenderit blanditiis rerum velit ipsam quia sunt.', 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(4, 3, 'sed', 0, 'Voluptatum exercitationem est voluptate at error iure. Sunt iusto perferendis quod. Molestiae accusantium facere omnis. Delectus provident error facilis odio harum suscipit.', 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(5, 7, 'est', 0, 'At similique animi rerum quos dolor. Voluptas eos blanditiis quia molestiae non aut. Magni eos qui maxime laborum et facere. Quia rerum voluptas temporibus fugit nesciunt fuga. Illum tempore perspiciatis est et neque.', 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(6, 6, 'quas', 0, 'Aut rerum eum harum exercitationem. Aut rerum distinctio qui fugit velit et itaque. Consequatur voluptatem eos laudantium neque tenetur et tempora.', 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(7, 8, 'maiores', 1, 'Corporis voluptatem ut incidunt harum tenetur autem. Eos officia velit maiores non et et iste tempora. Enim vel commodi sequi officiis laborum. Ullam non omnis vel eum. Impedit sunt impedit dolore qui.', 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(8, 4, 'voluptas', 1, 'Velit enim et occaecati magni. Quibusdam voluptates velit aspernatur corrupti. Perferendis distinctio distinctio fugit ut. Ex voluptas consequuntur magni suscipit amet provident.', 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(9, 8, 'error', 0, 'Sit voluptatem qui itaque quia voluptatibus est et. Magnam id ad rerum tempore amet. Ipsam eum sit aut labore et voluptas dignissimos labore. Qui et voluptate rem labore.', 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(10, 8, 'est', 0, 'Voluptates aut eveniet enim in eaque est quo sit. Voluptatem dolorem quam accusamus magni sunt iusto temporibus consequatur. Suscipit quidem sunt maiores porro. Molestias est est pariatur placeat eos aut. Ut culpa tempore dolores aut et repellat pariatur.', 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(11, 4, 'dicta', 1, 'Dolorum omnis ratione est voluptatem dolores. Eos ex repudiandae similique omnis sunt. Cupiditate officiis et est officia repudiandae. Eos accusamus facere commodi quo. Laboriosam eaque consectetur sequi illum omnis.', 'chair.jpg', '2018-08-17 00:11:20', '2018-08-17 00:11:20'),
(12, 5, 'reprehenderit', 0, 'Fugiat excepturi sit impedit quidem quidem adipisci. Quia nemo voluptas et aut suscipit nesciunt illo. Et veritatis non fuga est a. Nobis consequatur exercitationem ducimus fugiat necessitatibus eos.', 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(13, 3, 'quasi', 0, 'Doloremque sunt ut incidunt animi aut. Voluptas ad at ea. Hic enim id corporis non rem.', 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(14, 8, 'sequi', 0, 'Provident eos magnam saepe dolores sed minima. Aspernatur sint laborum reprehenderit tempora impedit culpa. Necessitatibus alias adipisci magni.', 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(15, 3, 'libero', 0, 'Corporis non nostrum fugiat voluptas. Qui esse eligendi quam. Eveniet porro harum consequuntur nesciunt suscipit. Blanditiis aut recusandae facere ut.', 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(16, 1, 'possimus', 1, 'Fuga aut soluta laboriosam eum in distinctio. Quo sint perspiciatis aut ut illum. Ducimus et est autem nihil aperiam et. Eos minima consectetur sed similique.', 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(17, 8, 'similique', 1, 'Rerum dolores voluptates perspiciatis dolore voluptatem. Et ullam molestiae aliquam non minima.', 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(18, 4, 'quidem', 0, 'Fugit consequatur ducimus possimus ut laboriosam recusandae dolor. In minima maxime dolorem asperiores quibusdam. Earum repellat quas quo enim est natus voluptatem repellat. Exercitationem consequatur vel tempora repudiandae.', 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(19, 6, 'maiores', 0, 'Pariatur nobis laborum eos ratione praesentium debitis saepe. Nihil laborum atque explicabo rerum quasi excepturi. Impedit doloremque ut tempore porro.', 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(20, 7, 'odio', 0, 'Dolorum fugiat rerum et eum nobis doloremque. Omnis quaerat vitae dolore quo. Ut error et quia incidunt non. Voluptatem et eum optio qui.', 'chair.jpg', '2018-08-17 00:11:21', '2018-08-17 00:11:21'),
(21, 11, 'Giri type', 1, 'something', '8adad3acb1.jpg', '2018-09-21 01:33:07', '2018-09-21 01:33:07'),
(22, 11, 'Monolithic ICs', 1, 'Monolithic ICs desc.......................', '483a45f22e547dfb791c8cb0897e4156.jpg', '2018-09-24 02:11:16', '2018-09-24 02:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_active`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Giri pai.U.', 'getgiri10@gmail.com', '$2y$10$fVL7P4VEEpaWpj4WiP81vel9PH7wHQLnYkvdsd0y6zfYQSrVhJRtq', 1, '9597002780', '73 krishna swamy naidu street, ammanpudur, podanur, coimbatore', 'BvgR1epVjkFdalm42BmxKoYE2w1ukyLrMKRg2MaqqR0bDfJ2Lx6GoIMtqVaG', '2018-08-22 07:17:06', '2018-09-26 11:12:57'),
(2, 'Giri', 'g@g.c', '$2y$10$UK8LCN/Trzwh7Mr6hEE.YOEb9f6sz4blnOtViqav8ibSBGTPBt0sy', 1, NULL, NULL, NULL, NULL, NULL),
(3, 'Dinu', 'dinu@gmail.com', '$2y$10$49vWwlC9EK9OjZk4euSneuyMImrYRNdULTjF1ZoKGN2BIM8TJ4L8W', 1, '098765432314', 'askdjf', 'jnXMGGYjj1sCxig1Oy4QAOoBWKN6jLLCtu7e9QweLUBRujkbLmcXcfuZ3gEw', '2018-09-24 01:45:30', '2018-09-28 04:00:35'),
(4, 'Gokul', 'goku@gmail.com', '$2y$10$IbeGPvzaC3OcMWZVhz0XR.nzHyYabMAQGt1RQmt9wqmC4LR17r6HG', 1, NULL, NULL, 'OdOIct8iuw68Mw6ozVZCKfFmlXNQOQJj0XnyLVp9TQRYxH7M6Be5L9lN7lmE', '2018-09-24 01:51:12', '2018-09-24 01:51:12'),
(5, 'dinez', 'dinez@gmail.com', '$2y$10$24A9JiQacXOElIl8.Tmhi.dyJagExMCt2plLnTd9Wb5hvGqKH.CaK', 1, NULL, NULL, NULL, '2018-09-24 05:02:45', '2018-09-24 05:02:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classification`
--
ALTER TABLE `classification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refurbishes`
--
ALTER TABLE `refurbishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `classification`
--
ALTER TABLE `classification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `refurbishes`
--
ALTER TABLE `refurbishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
