-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2018 at 12:49 PM
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
(1, 'hồng', '#d11aaa', '2018-06-14 03:41:27', '2017-08-14 20:47:39'),
(2, 'xanh duong', 'rgba(0,194,255,0.58)', '2017-08-15 06:58:51', '2017-08-14 23:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `news` (`id`, `id_cate`, `title`, `seo_link`, `short_desc`, `desc`, `created_at`, `updated_at`, `status`, `ord`, `img_list`, `img_detail`, `is_hot`) VALUES
(83, 1, '2313213', 'aabbas', '<p>asd</p>\r\n', '<p>asda</p>\r\n', '2018-06-14 03:35:21', '2018-06-14 03:35:21', 1, 0, '5b2244df63f75_c0e9d6ae30b739bf3fa54a71317779ae.jpg', '5b2244e82670f_104c87c133f36b2592329a926380bb89.jpg', 1),
(84, 0, 'a', 'a', '<p>a</p>\r\n', '<p>a</p>\r\n', '2018-06-14 03:37:32', '2018-06-14 03:37:39', 1, 0, '5b22455cad845_104c87c133f36b2592329a926380bb89.jpg', '5b22455ddb2d1_c0e9d6ae30b739bf3fa54a71317779ae.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `status`, `title`, `seo_link`, `updated_at`, `created_at`) VALUES
(0, 1, 'Tin thời trang', '', '2018-05-23 21:20:18', '2017-01-02 20:29:22'),
(1, 1, 'Tin khuyến mãi', '', '2018-05-23 02:31:35', '2017-01-02 20:29:20'),
(2, 1, 'Tin thông báo', 'a', '2018-06-14 03:37:47', '2017-01-02 20:29:26');

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
(80, 0, '1528944889', '5', '', '', 1, 1, 1, '1', '2018-05-23', '2018-05-23 02:13:26', '2018-06-13 20:24:02', 0, 5, '5b21dfd189018_b4c2f263c742d7ce4565211b60e21568.jpg', '', '', '', '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `status`, `title`, `seo_link`, `item_id`, `updated_at`, `created_at`) VALUES
(0, 1, 'Thức ăn thường', '', 1, '2018-05-23 21:20:18', '2017-01-02 20:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_item`
--

CREATE TABLE `product_item` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_item`
--

INSERT INTO `product_item` (`id`, `status`, `title`, `seo_link`, `updated_at`, `created_at`) VALUES
(1, 1, 'Áo Khoác', '', '2018-05-23 02:31:35', '2017-01-02 20:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `title`, `seo_link`, `created_at`, `updated_at`) VALUES
(1, 'Đặc Sắc', '', NULL, '2018-05-20 19:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `img_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `link`, `created_at`, `updated_at`, `status`, `img_detail`) VALUES
(83, '2313213', '', '2018-06-13 03:05:27', '2018-06-13 03:05:27', 1, '');

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
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_item`
--
ALTER TABLE `product_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

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
