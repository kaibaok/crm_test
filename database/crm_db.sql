-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2018 at 12:52 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `registered_date` datetime NOT NULL,
  `ship_date` date NOT NULL,
  `paid` tinyint(4) NOT NULL DEFAULT '1',
  `type` int(11) NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userid`, `name`, `email`, `address`, `phone`, `registered_date`, `ship_date`, `paid`, `type`, `note`) VALUES
(1, 7, 'tam hoai', 'asđá', '22/3 ha noi', 937472, '2017-02-01 09:00:00', '2017-02-25', 1, 1, 'luu y note'),
(2, 78, 'tam hoai123123', NULL, '22/3 ha noi', 937474556, '2017-02-01 09:00:00', '2017-02-25', 2, 2, 'luu y note');

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id` int(11) NOT NULL,
  `cartid` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'tránh mất dữ liệu khi không tìm thấy id',
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `cartid`, `id_product`, `name`, `price`, `amount`) VALUES
(1, 1, 73, 'SAN PHAM 1', 10, 12),
(2, 1, 74, 'SAN PHAM 2', 10000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `updated_at`, `created_at`) VALUES
(1, 'hồng', '#d11aaa', '2018-05-23 21:21:10', '2017-08-14 20:47:39'),
(2, 'xanh duong', 'rgba(0,194,255,0.58)', '2017-08-15 06:58:51', '2017-08-14 23:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `ord` int(11) NOT NULL,
  `img_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_hot` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `id_cate`, `title`, `short_desc`, `desc`, `created_at`, `updated_at`, `status`, `ord`, `img_list`, `img_detail`, `is_hot`) VALUES
(83, 1, '2313213', '<p>&aacute;das</p>\r\n', '<p>&aacute;da</p>\r\n', '2018-06-13 03:05:27', '2018-06-13 03:05:27', 1, 0, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `status`, `title`, `updated_at`, `created_at`) VALUES
(0, 1, 'Tin thời trang', '2018-05-23 21:20:18', '2017-01-02 20:29:22'),
(1, 1, 'Tin khuyến mãi', '2018-05-23 02:31:35', '2017-01-02 20:29:20'),
(2, 1, 'Tin thông báo', '2018-06-11 02:29:49', '2017-01-02 20:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `title`) VALUES
(0, 'User'),
(1, 'Admin'),
(2, 'Supper Admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL,
  `code_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8_unicode_ci,
  `desc` text COLLATE utf8_unicode_ci,
  `price` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `numbers` int(11) NOT NULL DEFAULT '0',
  `colors` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `limit_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `ord` int(11) NOT NULL,
  `img_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_new` tinyint(2) NOT NULL DEFAULT '0',
  `is_best_sell` tinyint(2) NOT NULL DEFAULT '0',
  `seo_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_cate`, `code_id`, `title`, `short_desc`, `desc`, `price`, `type`, `numbers`, `colors`, `limit_at`, `created_at`, `updated_at`, `status`, `ord`, `img_list`, `img_detail`, `img1`, `img2`, `img3`, `img4`, `img5`, `is_new`, `is_best_sell`, `seo_link`) VALUES
(76, 0, '1485404873', '1', NULL, '', 1111, 1, 11123123, '1', '2017-01-26', '2017-01-25 21:27:59', '2018-06-07 03:42:17', 0, 6, '', '', '', '', '', '', '', 0, 0, NULL),
(77, 0, '1527763437', '2', NULL, '', 1, 1, 1, '1', '2017-08-15', '2017-08-14 21:44:34', '2018-06-10 22:20:31', 1, 2, '', '', '', '', '', '', '', 1, 0, NULL),
(78, 0, '1502772292', '3', NULL, '', 1, 1, 1, '1', '2017-08-15', '2017-08-14 21:44:57', '2018-06-07 03:42:05', 1, 5, '', '', '', '', '', '', '', 0, 0, NULL),
(79, 0, '1528433214', '4', NULL, '', 1, 2, 1, '1', '2017-08-15', '2017-08-14 21:48:19', '2018-06-10 22:19:58', 0, 1, '', '', '', '', '', '', '', 0, 0, NULL),
(80, 0, '1527589794', '5', NULL, '', 1, 1, 1, '1|2', '2018-05-23', '2018-05-23 02:13:26', '2018-06-07 03:42:18', 0, 5, '', '', '', '', '', '', '', 0, 0, NULL),
(81, 0, '1527589794', '6', NULL, '', 1, 1, 1, '1|2', '2018-05-23', '2018-05-23 02:13:26', '2018-06-10 22:19:55', 0, 4, '', '', '', '', '', '', '', 0, 0, NULL),
(82, 0, '1527589794', '7', NULL, '', 1, 1, 1, '1|2', '2018-05-23', '2018-05-23 02:13:26', '2018-06-10 22:19:56', 0, 3, '', '', '', '', '', '', '', 0, 0, NULL),
(83, 0, '1528886487', '', '', '', 1, 1, 1, '', '2018-06-13', '2018-06-13 03:41:32', '2018-06-13 03:41:32', 0, 0, '', '', '', '', '', '', '', 0, 0, ''),
(84, 0, '1528886487', '', '', '', 1, 1, 1, '', '2018-06-13', '2018-06-13 03:43:42', '2018-06-13 03:43:42', 0, 0, '', '', '', '', '', '', '', 0, 0, ''),
(85, 0, '1528886487', '', '', '', 1, 1, 1, '', '2018-06-13', '2018-06-13 03:44:07', '2018-06-13 03:44:07', 0, 0, '', '', '', '', '', '', '', 0, 0, ''),
(86, 0, '1528886969', '', '', '', 0, 1, 1, '', '2018-06-13', '2018-06-13 03:49:46', '2018-06-13 03:49:46', 0, 0, '', '', '', '', '', '', '', 0, 0, ''),
(87, 0, '1528886969', '', '', '', 0, 1, 1, '', '2018-06-13', '2018-06-13 03:51:32', '2018-06-13 03:51:32', 0, 0, '', '', '', '', '', '', '', 0, 0, ''),
(88, 0, '1528887092', '', '', '', 0, 1, 0, '', '2018-06-13', '2018-06-13 03:51:37', '2018-06-13 03:51:37', 0, 0, '', '', '', '', '', '', '', 0, 0, ''),
(89, 0, '1528887097', '', '', '', 1, 1, 1, '', '2018-06-13', '2018-06-13 03:51:45', '2018-06-13 03:51:45', 0, 0, '', '', '', '', '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `status`, `title`, `item_id`, `updated_at`, `created_at`) VALUES
(0, 1, 'Thức ăn thường', 1, '2018-05-23 21:20:18', '2017-01-02 20:29:22'),
(1, 1, 'Nước giải khát1', 1, '2018-05-23 02:31:35', '2017-01-02 20:29:20'),
(2, 1, 'Thức ăn nhanh', 1, '2018-06-10 22:30:04', '2017-01-02 20:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_item`
--

CREATE TABLE `product_item` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_item`
--

INSERT INTO `product_item` (`id`, `status`, `title`, `updated_at`, `created_at`) VALUES
(1, 1, 'Áo Khoác', '2018-05-23 02:31:35', '2017-01-02 20:29:20'),
(2, 1, 'Áo Sơ mi', '2018-05-23 02:31:13', '2017-01-02 20:29:26'),
(3, 1, 'Áo Thun', '2018-06-10 22:29:59', '2017-01-02 20:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Đặc Sắc', NULL, '2018-05-20 19:58:21'),
(2, 'Xu Hướng', '2017-01-02 21:12:12', '2018-05-20 19:58:07'),
(3, 'Trẻ Trung', '2017-01-02 21:13:16', '2018-05-20 19:57:59'),
(4, 'Thanh Lịch', '2017-01-02 21:13:16', '2018-05-20 19:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `created_at`, `updated_at`, `remember_token`, `permission`) VALUES
(7, 'tam', 'kyra0590@gmail.com', '$2y$10$jLvBQdYmkVgz0aXAe0rxE.kqmy9nv.GgXBc3YlqO8FAlrlaxpjDRq', 0, '2016-12-14 01:26:26', '2018-06-07 19:46:07', 'gNqv2EpG81kFIvrGIuI6Iqn6V0bzEGqGSryekvbQT3ETw9GucjTiW5In6wxp', '2'),
(64, 'qa', 'qa@gmail.com', '$2y$10$w09IzlCtcOSD5eSij0SrXeheYNwTULJGGXb3WOFRtTcWbXEtnnRG.', 0, '2016-12-19 02:56:33', '2016-12-21 22:53:33', NULL, '1'),
(84, 'ádá', 'kyra05920@gmail.com', '$2y$10$0VuyiL9RVb3udTR2h3TiTudIXT8eGXkSUvYPID.90hKhQFDSIfmXC', 1, '2016-12-21 22:51:55', '2017-01-26 00:41:26', NULL, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `product_item`
--
ALTER TABLE `product_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_item`
--
ALTER TABLE `product_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
