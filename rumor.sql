-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 02:55 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$w1NRvZ.3uS5wJpGGvPrMrOvJf1WcTC1pdsT07DIkEnrWMjEermrBm', NULL, NULL, 'upload/admin/545029593admin.jpg', NULL, '2021-05-17 00:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `apponitments`
--

CREATE TABLE `apponitments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apponitments`
--

INSERT INTO `apponitments` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Name 1', 'upload/ambassador/621678456ambassador.jpg', '1', '2021-07-14 04:01:59', '2021-07-14 04:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `type` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `title`, `text`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 'upload/setting/banner/1227850552banner.jpg', 'Embrace Your Style', NULL, 1, 0, '2021-05-16 21:39:50', '2021-07-12 00:50:32'),
(2, 'upload/setting/banner/1155866205banner.jpg', 'Embrace Your Style', NULL, 1, 0, '2021-07-10 00:41:21', '2021-07-10 00:41:21'),
(3, 'upload/setting/banner/704343338banner.jpg', NULL, NULL, 1, 1, '2021-07-12 00:52:02', '2021-07-12 00:52:02'),
(4, 'upload/setting/banner/1618236739banner.jpg', NULL, NULL, 1, 1, '2021-07-12 00:58:06', '2021-07-12 00:58:06'),
(5, 'upload/setting/banner/540131839banner.jpg', NULL, NULL, 1, 1, '2021-07-12 01:58:14', '2021-07-12 01:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `blogcategories`
--

CREATE TABLE `blogcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogcategories`
--

INSERT INTO `blogcategories` (`id`, `category`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BlogCategory1', NULL, 1, '2021-06-05 22:36:18', '2021-06-05 22:36:18'),
(2, 'BlogCategory2', NULL, 1, '2021-06-05 22:36:28', '2021-06-05 22:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `image`, `title`, `detail`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'upload/blog/1914684708blog.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!', '&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!', 1, '2021-06-05 22:40:25', '2021-06-05 22:40:25'),
(2, 1, 'upload/blog/629222689blog.jpg', 'What is lorem ispim What is lorem ispim', 'What is lorem ispim What is lorem ispimWhat is lorem ispim What is lorem ispimWhat is lorem ispim What is lorem ispim', 1, '2021-06-05 22:55:47', '2021-06-05 22:55:47'),
(3, 2, 'upload/blog/647186510blog.jpg', 'What is lorem ispim What is lorem ispim', 'What is lorem ispim What is lorem ispimWhat is lorem ispim What is lorem ispimWhat is lorem ispim What is lorem ispim', 1, '2021-06-05 23:00:45', '2021-06-05 23:00:45'),
(4, 1, 'upload/blog/1484794097blog.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!', 'What is lorem ispim What is lorem ispimWhat is lorem ispim What is lorem ispim', 1, '2021-06-05 23:01:26', '2021-06-05 23:01:26'),
(5, 1, 'upload/blog/1721991219blog.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sequi!', 'What is lorem ispim What is lorem ispimWhat is lorem ispim What is lorem ispimWhat is lorem ispim What is lorem ispim', 1, '2021-06-05 23:03:31', '2021-06-05 23:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 'upload/category/777645940category.png', 1, '2021-05-17 07:38:57', '2021-06-07 03:39:11'),
(2, 'Tablet', 'upload/category/1267222000category.png', 1, '2021-06-04 05:59:35', '2021-06-07 03:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `phone`, `msg`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ashok', 'Mehta', 'ashok@gmail.com', '5443564', 'fgdud fuedsf dsauiof asfueas rfasudf uar arjfas dfuiaesrf ausrfd ur dsajf iuoer fjearyhsfdu uerh uweghr iuher ihwre ujuje jub ju uaher ', '0', NULL, NULL),
(2, 'Ashok Mehta', NULL, 'ashokmehta123y@gmail.com', '9813519397', 'sdfds', '0', '2021-07-14 05:14:22', '2021-07-14 05:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `expire_at` date NOT NULL,
  `card_value` double(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon`, `price`, `expire_at`, `card_value`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'D10', 10.00, '2021-07-30', 100.00, 'upload/coupon/1792475834Coupon.jpg', '1', '2021-05-20 19:43:01', '2021-07-15 06:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(50, '2014_10_12_000000_create_users_table', 1),
(51, '2014_10_12_100000_create_password_resets_table', 1),
(52, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(53, '2019_08_19_000000_create_failed_jobs_table', 1),
(54, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(55, '2021_05_11_233951_create_sessions_table', 1),
(56, '2021_05_12_005932_create_admins_table', 1),
(57, '2021_05_13_091222_create_categories_table', 1),
(58, '2021_05_13_150726_create_subcategories_table', 1),
(59, '2021_05_13_162357_create_modals_table', 1),
(60, '2021_05_14_043730_create_parts_table', 1),
(64, '2021_05_14_233020_create_coupons_table', 1),
(65, '2021_05_15_030047_create_blogcategories_table', 1),
(66, '2021_05_15_031734_create_blogs_table', 1),
(67, '2021_05_15_054500_create_subscribers_table', 1),
(68, '2021_05_15_064016_create_banners_table', 1),
(69, '2021_05_17_014812_create_pages_table', 1),
(70, '2021_05_17_014917_create_websites_table', 1),
(71, '2021_05_17_050009_create_contacts_table', 2),
(76, '2021_05_19_112217_create_apponitment_details_table', 4),
(78, '2021_05_20_044632_create_shippings_table', 5),
(79, '2021_05_20_045145_create_order_details_table', 5),
(80, '2021_05_20_063727_create_priceunits_table', 6),
(81, '2021_05_14_103039_create_products_table', 7),
(82, '2021_05_14_123014_create_productcolors_table', 7),
(83, '2021_05_14_160154_create_productvariations_table', 7),
(84, '2021_05_23_064157_create_vendors_table', 8),
(85, '2021_05_26_095808_create_carts_table', 9),
(86, '2021_05_26_102928_create_productreviews_table', 9),
(87, '2021_05_20_022520_create_orders_table', 10),
(88, '2021_06_11_020838_create_times_table', 11),
(89, '2021_05_19_105610_create_apponitments_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `modals`
--

CREATE TABLE `modals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modals`
--

INSERT INTO `modals` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'upload/model/658663046modal.jpg', 1, '2021-07-12 01:43:01', '2021-07-12 01:43:01'),
(5, 'upload/model/1992563801modal.jpg', 1, '2021-07-12 01:43:13', '2021-07-12 01:43:13'),
(6, 'upload/model/2066974463modal.jpg', 1, '2021-07-12 01:43:27', '2021-07-12 01:43:27'),
(7, 'upload/model/889341695modal.jpg', 1, '2021-07-12 01:43:34', '2021-07-12 01:43:34'),
(8, 'upload/model/27023368modal.jpg', 1, '2021-07-12 01:43:43', '2021-07-12 01:43:43'),
(9, 'upload/model/1179418771modal.jpg', 1, '2021-07-12 01:43:51', '2021-07-12 01:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `tracking_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ispaid` int(11) NOT NULL DEFAULT 0,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` double(8,2) NOT NULL,
  `tax` double(8,2) NOT NULL,
  `shipping_charge` double(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_value` int(11) DEFAULT NULL,
  `cart_value` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `about`, `term`, `price`, `policy`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About us', 'Term&nbsp;', 'Price', '<p>Privacy&nbsp;</p>', NULL, NULL, '2021-05-16 21:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ashokmehta123y@gmail.com', '$2y$10$hjO7GilbQlMj5ejx9Zjuxesi89VHtkgJvlmORgAfupXmOASruAZKG', '2021-07-15 15:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `priceunits`
--

CREATE TABLE `priceunits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productcolors`
--

CREATE TABLE `productcolors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sku` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productcolors`
--

INSERT INTO `productcolors` (`id`, `product_id`, `color`, `image`, `quantity`, `sku`, `created_at`, `updated_at`) VALUES
(1, 3, '#e30202', 'upload/productcolor/358118237productcolor.jpg', NULL, NULL, '2021-07-14 01:26:21', '2021-07-15 02:45:37'),
(2, 3, '#000000', 'upload/productcolor/1521119762productcolor.jpg', NULL, NULL, '2021-07-15 02:46:00', '2021-07-15 02:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productreviews`
--

INSERT INTO `productreviews` (`id`, `uid`, `pid`, `rating`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 4, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium similique incidunt quae delectus quaerat fugit et, labore, debitis perferendis quia, reiciendis libero neque ad sunt ducimus dolore corporis id quidem!', '2021-07-16 11:47:08', '2021-07-16 11:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `top_rated` int(11) DEFAULT NULL,
  `bestseller` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sku` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `short_desc`, `long_desc`, `category_id`, `subcategory_id`, `price`, `vendor_id`, `featured`, `top_rated`, `bestseller`, `quantity`, `sku`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Iphon 7', 'upload/product/1757145035product.png', NULL, NULL, 1, 1, 500, NULL, 1, NULL, NULL, NULL, NULL, 1, '2021-05-22 20:26:03', '2021-05-22 20:28:58'),
(2, 'iphon 10', 'upload/product/443425913product.jpg', NULL, NULL, 2, 3, 900, NULL, 1, 1, 1, NULL, NULL, 1, '2021-05-22 20:26:36', '2021-07-11 15:47:57'),
(3, 'Product3', 'upload/product/1357214168product.jpg', NULL, 'hello', 1, 2, 600, NULL, NULL, 1, 1, NULL, NULL, 1, '2021-06-11 14:16:28', '2021-07-15 03:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `productvariations`
--

CREATE TABLE `productvariations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `variation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sku` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productvariations`
--

INSERT INTO `productvariations` (`id`, `product_id`, `variation`, `image`, `price`, `quantity`, `sku`, `created_at`, `updated_at`) VALUES
(1, 2, '2gb/38gb', NULL, '100', NULL, NULL, '2021-06-04 04:11:09', '2021-06-04 04:11:09'),
(2, 1, '6gb/32gb', NULL, '500', NULL, NULL, '2021-06-04 06:18:50', '2021-06-04 06:18:50'),
(3, 3, 'XL', NULL, NULL, NULL, NULL, '2021-07-15 05:21:18', '2021-07-15 05:21:18'),
(4, 3, 'L', NULL, NULL, NULL, NULL, '2021-07-15 05:21:25', '2021-07-15 05:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AF0zSKsaii54QcEXOoMByL40P9lGG2kt6zO7jm6Q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'YTo1OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im5ldyI7YTowOnt9czozOiJvbGQiO2E6MDp7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2Fib3V0LXVzIjt9czo2OiJfdG9rZW4iO3M6NDA6InR6NzVpdmVTMnlGQkQ2RFBwck9CWU9IVlBCZlJWaXczWjFFQTQ1WEciO3M6NToic3RhdGUiO3M6NDA6IjEwamFPRzEydDcxV1dNYXlSZnlLamhDRTNCZ1E0MWNRdmNJSWVRZzMiO3M6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jYXJ0Ijt9fQ==', 1626429856),
('DfROshWjMwZsuPNgxnSpvIOlYQGP5iKBk6wweQTG', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiejZhdms1UmdvUHVOQThtamJEWDFwV1NjZlhyOFV4VE1LdVBiRURocyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0LzEvUHJvZHVjdDMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU6InN0YXRlIjtzOjQwOiJITHVWTklFVFNUS3F2a3VCcXBsdnowcTdPbkowZ29HZVhvMWpReVlRIjtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkZHRQc2pNWi9TaEJrSVExZ211N0dCdXdkcUtGUlEwblVtVjRLajZJdVREbDZ2THVtb3RGRUciO30=', 1626438169),
('f3IEzk3JbWXpLBdWaL0BUOlBmP8uJ9VR2RQxZnUH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVERwbUJVR0J4MjlUbmhyeWVUQzZaRE1zY3BmYnVuT2hab0JxN0tkTyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1626840297),
('gFL3O3G0YcJmo1rVmanTnLmybces8VTnW7nIF6dv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYmlDUFZGcjdoVzI0eFJLMGFpcGRUcWVsWENaTm5mZVVVd3ZYVkdRcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb29rLWJvb2siO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1626841351),
('qcWYF7ztc4iwMJTm2U7MdVpsJXCsPm0ymvXJxkjJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDNBMXhJcDRsQ3NyaE5QUk1HdjZ2WldHYkZZcnlBRkVZVjU3VnIyNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1626963694),
('QVGrO8mVeHcTU4QMnGMTmS4wp1fmcedpqvMb1SWW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNU9LQzdMMVlvMUlWZWpVRlJqMkdYbUJvUjZwRFZhNHl1T2hEWlZ2ZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1626963694);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcategory`, `image`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'specials', NULL, 1, 1, '2021-05-17 07:40:21', '2021-05-17 07:40:21'),
(2, 'Samsung', NULL, 2, 1, '2021-06-04 06:02:01', '2021-06-04 06:02:01'),
(3, 'MI', NULL, 2, 1, '2021-06-04 06:14:02', '2021-06-04 06:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'ashok@gmail.com', NULL, NULL),
(2, 'ashok@gmail.com', NULL, NULL),
(3, 'ashokmehta123y@gmail.com', '2021-07-15 14:44:04', '2021-07-15 14:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `times` time DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `times`, `unit`, `image`, `status`, `created_at`, `updated_at`) VALUES
(8, NULL, '9', 'upload/outlook/642207423outlook.jpg', 1, '2021-07-13 02:58:31', '2021-07-13 02:58:31'),
(9, NULL, '1', 'upload/outlook/536210481outlook.jpg', 1, '2021-07-13 03:27:45', '2021-07-13 03:27:45'),
(10, NULL, '2', 'upload/outlook/939582433outlook.jpg', 1, '2021-07-13 03:28:09', '2021-07-13 03:28:09'),
(11, NULL, '3', 'upload/outlook/115752959outlook.jpg', 1, '2021-07-13 03:28:35', '2021-07-13 03:49:22'),
(12, NULL, '4', 'upload/outlook/709026424outlook.jpg', 1, '2021-07-13 03:29:06', '2021-07-13 03:29:06'),
(13, NULL, '5', 'upload/outlook/1807658964outlook.jpg', 1, '2021-07-13 03:29:27', '2021-07-13 03:29:27'),
(14, NULL, '6', 'upload/outlook/1726636486outlook.jpg', 1, '2021-07-13 03:29:47', '2021-07-13 03:29:47'),
(15, NULL, '9', 'upload/outlook/1903324103outlook.jpg', 1, '2021-07-13 03:30:04', '2021-07-13 03:50:03'),
(16, NULL, '7', 'upload/outlook/555970059outlook.jpg', 1, '2021-07-13 03:30:05', '2021-07-13 03:48:13'),
(17, NULL, '8', 'upload/outlook/1650182856outlook.jpg', 1, '2021-07-13 03:30:28', '2021-07-13 03:30:28'),
(18, NULL, '8', 'upload/outlook/1394763077outlook.jpg', 1, '2021-07-13 03:30:41', '2021-07-13 03:30:41'),
(19, NULL, '8', 'upload/outlook/1878676681outlook.jpg', 1, '2021-07-13 03:30:52', '2021-07-13 03:30:52'),
(20, NULL, '8', 'upload/outlook/739301030outlook.jpg', 1, '2021-07-13 03:31:04', '2021-07-13 03:31:04'),
(21, NULL, '9', 'upload/outlook/651777301outlook.jpg', 1, '2021-07-13 03:50:36', '2021-07-13 03:50:36'),
(22, NULL, '9', 'upload/outlook/454314837outlook.jpg', 1, '2021-07-13 03:50:59', '2021-07-13 03:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `google_id`, `facebook_id`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', NULL, '$2y$12$dtPsjMZ/ShBkIQ1gmu7GBuwdqKFRQ0nUmV4Kj6IuTDl6vLumotFEG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-21 01:01:04', NULL),
(2, 'Ashok Mehta', 'ashokmehta123y@gmail.com', NULL, '$2y$10$OtCB.5zuH0G5ZtlOmLUxAePoB6seMDEl5/MBcpdIjV65y5yCtDPPK', NULL, NULL, '8FhjrXJvMJlM9o2aHnBxyR13QLxm7Fdl9Rw6IkLjiYq78TdTbbs1TuvG7I9u', NULL, NULL, NULL, NULL, '2021-06-11 16:14:19', '2021-06-11 16:14:19'),
(3, 'Ashok Mehta', 'ashokmehta@gmail.com', NULL, '$2y$10$Hp62HyrWU1GaSh7XVrvjdOWJWnSOtePU0tMLsKx1vxvnlBGvRWR2m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-11 16:22:08', '2021-06-11 16:22:08'),
(4, 'Ashok Mehta', 'ashokmehta1@gmail.com', NULL, '$2y$10$xB0syS10it2Hnpy1MMa//ObOVA0kNw0QJyH.9FhNZ3BvA4RQwwzja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-11 16:24:30', '2021-06-11 16:24:30'),
(5, 'Ashok Mehta', 'user1@gmail.com', NULL, '$2y$10$Gz.Oww2hOQO8T1rRHVMlquV77p.1F0MKL6hr6g67pMWizc39x6/Em', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-11 23:06:45', '2021-06-11 23:06:45'),
(6, 'Ashok Mehta', 'user2@gmail.com', NULL, '$2y$10$oNRqgq6JKEuRq3gtuj5DWuhdlQj.7zIWsNXoYCEuWorAeNMTcfjo.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-11 23:10:07', '2021-06-11 23:10:07'),
(7, 'Ashok Mehta', 'user3@gmail.com', NULL, '$2y$10$ot9I5U4L2WeBBcLOg8sbVuTgZuiJYyT0E3FGC9PkwcWk6UZ2hQUvq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-11 23:11:44', '2021-06-11 23:11:44'),
(8, 'Ashok Mehta', 'ashokmehta1234y@gmail.com', NULL, 'eyJpdiI6InhYOGpYQ3h1emd2QnZ6NTk3UlVta3c9PSIsInZhbHVlIjoiRlFud1pTRVJrUDk5cXVjb2pLN3luU2xGTUdLdHUycjJ5aEVDUGVIbXRoOD0iLCJtYWMiOiJmNDA0MmUwZjM4NTEzYWJlMWIxM2U2YmY2ZDQ0YWIzZjVhMmIyM2ZlZDg0NjllYzAzNTlkNGY2YWNmNzVlNDc3In0=', NULL, NULL, NULL, NULL, NULL, '103567842143466469198', NULL, '2021-07-16 09:23:49', '2021-07-16 09:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` float DEFAULT NULL,
  `vat` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `title`, `descr`, `keyword`, `url`, `phone1`, `email1`, `address1`, `facebook1`, `twitter1`, `instagram1`, `other1`, `phone2`, `email2`, `address2`, `facebook2`, `twitter2`, `instagram2`, `other2`, `shipping_charge`, `vat`, `image`, `created_at`, `updated_at`) VALUES
(1, 'What is lorem ispim', 'ewrtewt', 'Accessory1', 'https://falcontechnepal.com', '+6177645267', 'info@somervillecommunications.com', '376 Chelsea street, East Boston, 02128', 'https://mailtrap.io/', 'https://mailtrap.io/', 'https://mailtrap.io/', 'https://mailtrap.io/', '+6177645267', 'info@somervillecommunications.com', '52 Broadway, Somerville, MA, 02145', 'https://mailtrap.io/', 'https://mailtrap.io/', 'https://mailtrap.io/', 'https://mailtrap.io/', 10, 10, 'upload/setting/logo/21801924seeting.png', '2021-05-16 22:24:13', '2021-07-12 01:59:03');

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
-- Indexes for table `apponitments`
--
ALTER TABLE `apponitments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogcategories`
--
ALTER TABLE `blogcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modals`
--
ALTER TABLE `modals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `priceunits`
--
ALTER TABLE `priceunits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcolors`
--
ALTER TABLE `productcolors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productvariations`
--
ALTER TABLE `productvariations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apponitments`
--
ALTER TABLE `apponitments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogcategories`
--
ALTER TABLE `blogcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `modals`
--
ALTER TABLE `modals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `priceunits`
--
ALTER TABLE `priceunits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productcolors`
--
ALTER TABLE `productcolors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `productvariations`
--
ALTER TABLE `productvariations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
