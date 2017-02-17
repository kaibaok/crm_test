-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2017 at 05:12 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 5.6.29-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `note` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userid`, `name`, `email`, `address`, `phone`, `registered_date`, `ship_date`, `paid`, `note`) VALUES
(1, 7, 'tam hoai', 'asđá', '22/3 ha noi', 937474556, '2017-02-01 09:00:00', '2017-02-25', 1, 'luu y note'),
(2, 78, 'tam hoai123123', NULL, '22/3 ha noi', 937474556, '2017-02-01 09:00:00', '2017-02-25', 2, 'luu y note');

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
  `desc` text COLLATE utf8_unicode_ci,
  `price` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `numbers` int(11) NOT NULL DEFAULT '0',
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
  `img5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_cate`, `code_id`, `title`, `desc`, `price`, `type`, `numbers`, `limit_at`, `created_at`, `updated_at`, `status`, `ord`, `img_list`, `img_detail`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(73, 0, '1485418610', 'SAN PHAM 1', '&lt;p&gt;1&lt;/p&gt;', 1, 1, 1, '2017-01-26', '2017-01-25 19:55:23', '2017-01-26 01:16:53', 1, 0, '58897c9ece002_f11596e4bb317e5397830600a6502747.jpg', '', '', '', '', '', ''),
(74, 0, '1485404863', 'SAN PHAM 2', '', 1, 1, 1, '2017-01-26', '2017-01-25 21:27:49', '2017-01-26 01:16:47', 0, 0, '', '', '', '', '', '', ''),
(75, 0, '1485415796', 'asdasd', '', 1, 1, 1, '2017-01-26', '2017-01-25 21:27:53', '2017-01-26 01:16:42', 0, 0, '5889a48738f9c_bb5338bfeb21db45215493d2770a792b.jpg', '5889a4eedcbba_b03c925498a97a81c446e3ef7231f336.jpg', '5889a4ef5aacf_bb5338bfeb21db45215493d2770a792b.jpg', '5889a62dc1f32_425066477bba89430fe37293e634bfc0.jpg', '5889a62dc2002_b03c925498a97a81c446e3ef7231f336.jpg', '5889a62dc207c_db7c91a46e971497efbc8ae7e36d1066.png', '5889a62dc2113_bb5338bfeb21db45215493d2770a792b.jpg'),
(76, 0, '1485404873', '333', '', 1111, 1, 11123123, '2017-01-26', '2017-01-25 21:27:59', '2017-01-26 01:16:47', 0, 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `status`, `title`, `updated_at`, `created_at`) VALUES
(0, 0, 'Thức ăn thường', '2017-01-26 01:16:40', '2017-01-02 20:29:22'),
(1, 0, 'Nước giải khát1', '2017-01-26 03:16:35', '2017-01-02 20:29:20'),
(2, 0, 'Thức ăn nhanh', '2017-01-26 01:16:45', '2017-01-02 20:29:26');

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
(1, 'cccccccccc', NULL, '2017-01-02 21:14:40'),
(2, 'bbbbbbbbb', '2017-01-02 21:12:12', '2017-01-02 21:14:34'),
(3, 'aaaaaaa', '2017-01-02 21:13:16', '2017-01-02 21:14:26');

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
(7, 'tam', 'kyra0590@gmail.com', '$2y$10$jLvBQdYmkVgz0aXAe0rxE.kqmy9nv.GgXBc3YlqO8FAlrlaxpjDRq', 0, '2016-12-14 01:26:26', '2017-02-16 20:50:21', 'i8wx6rvgGl6ZFcp5xCxFiG7Ms3UyhHfOa4e7CCNheq4EPERpBC0Odsgi7nxl', '2'),
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
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

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
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
