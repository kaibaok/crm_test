-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 12:31 PM
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
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bimg_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `status`, `title`, `seo_link`, `bimg_detail`, `updated_at`, `created_at`) VALUES
(4, 1, 'asda', 'sd', '5b31b23218133_c81e728d9d4c2f636f067f89cc14862c.png', '2018-06-25 20:25:38', '2018-06-20 09:56:06'),
(5, 1, 'asd', 'asd', '5b31b229bf106_c4ca4238a0b923820dcc509a6f75849b.png', '2018-06-25 20:26:08', '2018-06-20 10:12:01'),
(6, 1, 'c', 'c', '5b31b23d5383a_eccbc87e4b5ce2fe28308fd9f2a7baf3.png', '2018-06-25 20:26:06', '2018-06-26 03:25:49'),
(7, 1, 'd', 'd', '5b31b2436268a_a87ff679a2f3e71d9181a67b7542122c.png', '2018-06-25 20:26:04', '2018-06-26 03:25:55'),
(8, 1, 'e', 'e', '5b31b248717db_e4da3b7fbbce2345d7772b0674a318d5.png', '2018-06-25 20:26:03', '2018-06-26 03:26:00');

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
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `updated_at`, `created_at`) VALUES
(1, 'hồng', '#d11aaa', '2018-06-14 03:41:27', '2017-08-15 03:47:39'),
(2, 'xanh duong', 'rgba(0,194,255,0.58)', '2017-08-15 06:58:51', '2017-08-15 06:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `discount_code`
--

CREATE TABLE `discount_code` (
  `id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL DEFAULT '0',
  `end_date` date NOT NULL,
  `percent` int(11) NOT NULL,
  `type_discount` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 : percent - 1 : money',
  `discount_price` int(11) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `discount_code`
--

INSERT INTO `discount_code` (`id`, `status`, `code`, `number`, `end_date`, `percent`, `type_discount`, `discount_price`, `updated_at`, `created_at`) VALUES
(1, 0, '123456', 2, '2018-07-31', 10, 0, 150, '2018-07-26 09:56:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eimg_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_open` datetime NOT NULL,
  `time_close` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `created_at`, `updated_at`, `title`, `eimg_detail`, `seo_link`, `time_open`, `time_close`, `status`, `desc`) VALUES
(1, '2018-06-20 09:17:08', '2018-06-22 02:38:17', 'asdasdsad', '5b2a2caeed28a_b4c2f263c742d7ce4565211b60e21568.jpg', 'test', '2018-06-05 16:00:00', '2018-06-23 16:00:00', 1, '<p>dasd</p>\r\n'),
(2, '2018-06-20 10:30:46', '2018-06-22 03:27:14', 'tesa', '5b2a2cd6ba749_b4c2f263c742d7ce4565211b60e21568.jpg', 'asd', '2018-06-09 17:00:00', '2018-07-27 17:00:00', 1, '<h3>GET IT NOW</h3>\r\n\r\n<h1>LIMITED OFFER</h1>\r\n\r\n<h5 class=\"hidden-xs\">HANDBAGS COLLECTION FOR WOMEN</h5>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL,
  `title1` text COLLATE utf8_unicode_ci,
  `title2` text COLLATE utf8_unicode_ci,
  `title3` text COLLATE utf8_unicode_ci,
  `title4` text COLLATE utf8_unicode_ci,
  `title5` text COLLATE utf8_unicode_ci,
  `title6` text COLLATE utf8_unicode_ci,
  `title7` text COLLATE utf8_unicode_ci,
  `title8` text COLLATE utf8_unicode_ci,
  `title9` text COLLATE utf8_unicode_ci,
  `title10` text COLLATE utf8_unicode_ci,
  `title11` text COLLATE utf8_unicode_ci,
  `title12` text COLLATE utf8_unicode_ci,
  `title13` text COLLATE utf8_unicode_ci,
  `title14` text COLLATE utf8_unicode_ci,
  `title15` text COLLATE utf8_unicode_ci,
  `himg1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg11` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg12` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg13` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg14` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `himg15` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link7` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link8` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link9` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link10` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link11` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link12` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link13` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link14` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link15` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `list_top` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_middle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_footer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `updated_at`, `created_at`, `title1`, `title2`, `title3`, `title4`, `title5`, `title6`, `title7`, `title8`, `title9`, `title10`, `title11`, `title12`, `title13`, `title14`, `title15`, `himg1`, `himg2`, `himg3`, `himg4`, `himg5`, `himg6`, `himg7`, `himg8`, `himg9`, `himg10`, `himg11`, `himg12`, `himg13`, `himg14`, `himg15`, `link1`, `link2`, `link3`, `link4`, `link5`, `link6`, `link7`, `link8`, `link9`, `link10`, `link11`, `link12`, `link13`, `link14`, `link15`, `list_top`, `list_middle`, `list_footer`) VALUES
(1, '2018-06-27 04:14:23', '0000-00-00 00:00:00', '<h4 class=\"text-uppercase\"><span style=\"color:#ffffff;\">exclusive</span></h4>\r\n\r\n<h2 class=\"text-uppercase\">bag&rsquo;s</h2>\r\n\r\n<h4 class=\"text-uppercase\"><span style=\"color:#ffffff;\">COLLECTION</span></h4>\r\n', '<h4 class=\"text-uppercase\"><span style=\"color:#ffffff;\">exclusive</span></h4>\r\n\r\n<h2 class=\"text-uppercase\">bag&rsquo;s</h2>\r\n\r\n<h4 class=\"text-uppercase\"><span style=\"color:#ffffff;\">COLLECTION</span></h4>\r\n', '<h4 class=\"text-uppercase\"><span style=\"color:#ffffff;\">exclusive</span></h4>\r\n\r\n<h2 class=\"text-uppercase\">bag&rsquo;s</h2>\r\n\r\n<h4 class=\"text-uppercase\"><span style=\"color:#ffffff;\">COLLECTION</span></h4>\r\n', '<h4 class=\"text-uppercase\"><span style=\"color:#ffffff;\">exclusive</span></h4>\r\n\r\n<h2 class=\"text-uppercase\">bag&rsquo;s</h2>\r\n\r\n<h4 class=\"text-uppercase\"><span style=\"color:#ffffff;\">COLLECTION</span></h4>\r\n', '<h2 class=\"text-uppercase\">men&#39;s</h2>\r\n\r\n<h3 class=\"text-uppercase\">collection</h3>\r\n', '<h2 class=\"text-uppercase\">women&#39;s</h2>\r\n\r\n<h3 class=\"text-uppercase\">collection</h3>\r\n', '', '<h5 class=\"text-uppercase\">all new</h5>\r\n\r\n<h3 class=\"text-uppercase\">SUMMER</h3>\r\n\r\n<h5 class=\"text-uppercase\">COLLECTION FOR MEN</h5>\r\n', '<h5 class=\"text-uppercase\">GET UP TO</h5>\r\n\r\n<h3>35%</h3>\r\n\r\n<h5 class=\"text-uppercase\">discount</h5>\r\n', '<h5 class=\"text-uppercase\">HOT OFFER <span> 25% </span> get it now</h5>\r\n', '<h5 class=\"text-uppercase\">trendy</h5>\r\n\r\n<h3 class=\"text-uppercase\">coat&#39;s</h3>\r\n\r\n<h5 class=\"text-uppercase\">FOR MEN</h5>\r\n', '<h5 class=\"text-uppercase\">brand new</h5>\r\n\r\n<h3 class=\"text-uppercase\">sunglass</h3>\r\n\r\n<h5 class=\"text-uppercase\">FOR WOMEN</h5>\r\n', '<h4 class=\"text-uppercase\">GET 25% OFF</h4>\r\n\r\n<h2 class=\"text-uppercase\">MEN&rsquo;S</h2>\r\n\r\n<h4 class=\"text-uppercase\">COLLECTION</h4>\r\n\r\n<p><a class=\"section-button\" href=\"/public/user/#\">shop now</a></p>\r\n', '<h3 class=\"text-uppercase\">EXCLUSIVE</h3>\r\n\r\n<h2 class=\"text-uppercase\">MEN&rsquo;S &amp; WOMEN&#39;s</h2>\r\n\r\n<h3 class=\"text-uppercase\">COLLECTION</h3>\r\n\r\n<p><a class=\"section-button\" href=\"/public/user/#\">shop now</a></p>\r\n', '<h4 class=\"text-uppercase\">GET 25% OFF</h4>\r\n\r\n<h2 class=\"text-uppercase\">WOMEN&rsquo;S</h2>\r\n\r\n<h4 class=\"text-uppercase\">COLLECTION</h4>\r\n\r\n<p><a class=\"section-button\" href=\"/public/user/#\">shop now</a></p>\r\n', '5b30b6ec4f8d8_6d283a0eb007683e94c72317741975ae.jpg', '5b30b6ec50879_a87ff679a2f3e71d9181a67b7542122c.jpg', '5b30b6ec51816_daa8f13c9d65da091604a1c944e47f3b.jpg', '5b30b6ec52ba1_eccbc87e4b5ce2fe28308fd9f2a7baf3.jpg', '5b30b7a2ec390_7a6f150b83091ce20c89368641f9a137.jpg', '5b30b722cb757_fbfba2e45c2045dc5cab22a5afe83d9d.jpg', '5b30b7a311790_edbab45572c72a5d9440b40bcc0500c0.jpg', '5b30b82d5de69_eccbc87e4b5ce2fe28308fd9f2a7baf3.jpg', '5b30b82d5f1f0_c81e728d9d4c2f636f067f89cc14862c.jpg', '5b30b82d5fd9f_c4ca4238a0b923820dcc509a6f75849b.jpg', '5b30b82d6056d_a87ff679a2f3e71d9181a67b7542122c.jpg', '5b30b82d61127_e4da3b7fbbce2345d7772b0674a318d5.jpg', '5b2cc181485a6_6d283a0eb007683e94c72317741975ae.jpg', '5b2cc1814966b_6d283a0eb007683e94c72317741975ae.jpg', '5b2cc1814a222_6d283a0eb007683e94c72317741975ae.jpg', 'http://link.com', 'link2', 'link 3', 'link 4', '', '', '', '', '', '', '', '', '', '', '', '1|2', '1|2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `list` text COLLATE utf8_unicode_ci,
  `list_sp` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `list`, `list_sp`, `created_at`, `updated_at`) VALUES
(1, '[{\"text\":\"5675\",\"href\":\"7567\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\",\"children\":[{\"text\":\"5675\",\"href\":\"222\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\",\"children\":[{\"text\":\"56757\",\"href\":\"\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"}]}]},{\"text\":\"aaa\",\"href\":\"\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\",\"children\":[{\"text\":\"5675\",\"href\":\"7567\",\"icon\":\"empty\",\"target\":\"_blank\",\"title\":\"\"}]}]', '[{\"text\":\"asd\",\"href\":\"asd\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\",\"children\":[{\"text\":\"aaa\",\"href\":\"\",\"target\":\"_self\"}]}]', '2018-06-25 00:00:00', '2018-07-04 20:07:48');

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
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `ord` int(11) NOT NULL,
  `nimg_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nimg_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_hot` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `id_cate`, `title`, `seo_link`, `short_desc`, `desc`, `created_at`, `updated_at`, `status`, `ord`, `nimg_list`, `nimg_detail`, `is_hot`) VALUES
(83, 1, '2313213', 'aabbas', 'áđâs\r\ndá\r\nd\r\nád\r\ná\r\n                                                            ', '<p>asda</p>\r\n', '2018-07-19 03:23:44', '2018-07-19 10:23:44', 1, 9, '5b2244df63f75_c0e9d6ae30b739bf3fa54a71317779ae.jpg', '5b2244e82670f_104c87c133f36b2592329a926380bb89.jpg', 1),
(84, 2, 'aasdas', 'a', '<p>a</p>\r\n', '<p>a</p>\r\n', '2018-06-14 03:37:32', '2018-07-13 09:22:58', 1, 16, '5b22455cad845_104c87c133f36b2592329a926380bb89.jpg', '5b22455ddb2d1_c0e9d6ae30b739bf3fa54a71317779ae.jpg', 1),
(85, 1, '2313213', 'aabbas', '<p>asd</p>\r\n', '<p>asda</p>\r\n', '2018-06-14 03:35:21', '2018-07-13 09:23:37', 1, 8, '5b2244df63f75_c0e9d6ae30b739bf3fa54a71317779ae.jpg', '5b2244e82670f_104c87c133f36b2592329a926380bb89.jpg', 1),
(86, 2, 'a', 'a', '<p>a</p>\r\n', '<p>a</p>\r\n', '2018-06-14 03:37:32', '2018-07-13 09:22:58', 1, 15, '5b22455cad845_104c87c133f36b2592329a926380bb89.jpg', '5b22455ddb2d1_c0e9d6ae30b739bf3fa54a71317779ae.jpg', 1),
(87, 1, '2313213', 'aabbas', '<p>asd</p>\r\n', '<p>asda</p>\r\n', '2018-06-14 03:35:21', '2018-07-13 09:23:37', 1, 7, '5b2244df63f75_c0e9d6ae30b739bf3fa54a71317779ae.jpg', '5b2244e82670f_104c87c133f36b2592329a926380bb89.jpg', 1),
(88, 2, 'a', 'a', '<p>a</p>\r\n', '<p>a</p>\r\n', '2018-06-14 03:37:32', '2018-07-13 09:22:58', 1, 14, '5b22455cad845_104c87c133f36b2592329a926380bb89.jpg', '5b22455ddb2d1_c0e9d6ae30b739bf3fa54a71317779ae.jpg', 1),
(89, 1, '2313213', 'aabbas', '<p>asd</p>\r\n', '<p>asda</p>\r\n', '2018-06-14 03:35:21', '2018-07-13 09:23:37', 1, 6, '5b2244df63f75_c0e9d6ae30b739bf3fa54a71317779ae.jpg', '5b2244e82670f_104c87c133f36b2592329a926380bb89.jpg', 1),
(90, 2, 'a', 'a', '<p>a</p>\r\n', '<p>a</p>\r\n', '2018-06-14 03:37:32', '2018-07-13 09:22:58', 1, 13, '5b22455cad845_104c87c133f36b2592329a926380bb89.jpg', '5b22455ddb2d1_c0e9d6ae30b739bf3fa54a71317779ae.jpg', 1),
(91, 1, '2313213', 'aabbas', '<p>asd</p>\r\n', '<p>asda</p>\r\n', '2018-06-14 03:35:21', '2018-07-13 09:22:57', 1, 4, '5b2244df63f75_c0e9d6ae30b739bf3fa54a71317779ae.jpg', '5b2244e82670f_104c87c133f36b2592329a926380bb89.jpg', 1),
(92, 2, 'a', 'a', '<p>a</p>\r\n', '<p>a</p>\r\n', '2018-06-14 03:37:32', '2018-07-13 09:22:57', 1, 12, '5b22455cad845_104c87c133f36b2592329a926380bb89.jpg', '5b22455ddb2d1_c0e9d6ae30b739bf3fa54a71317779ae.jpg', 1),
(93, 1, '2313213', 'aabbas', '<p>asd</p>\r\n', '<p>asda</p>\r\n', '2018-06-14 03:35:21', '2018-07-13 09:23:37', 1, 2, '5b2244df63f75_c0e9d6ae30b739bf3fa54a71317779ae.jpg', '5b2244e82670f_104c87c133f36b2592329a926380bb89.jpg', 1),
(94, 2, 'a', 'a', '<p>a</p>\r\n', '<p>a</p>\r\n', '2018-07-19 03:48:18', '2018-07-19 10:48:18', 1, 11, '5b506c58bdedb_c0e9d6ae30b739bf3fa54a71317779ae.jpg', '5b506c729b3de_104c87c133f36b2592329a926380bb89.jpg', 1),
(95, 1, '2313213', 'aabbas', '<p>asd</p>\r\n', '<p>asda</p>\r\n', '2018-06-14 03:35:21', '2018-07-13 09:23:37', 1, 1, '5b2244df63f75_c0e9d6ae30b739bf3fa54a71317779ae.jpg', '5b2244e82670f_104c87c133f36b2592329a926380bb89.jpg', 1),
(96, 2, 'a', 'a', '<p>a</p>\r\n', '<p>a</p>\r\n', '2018-06-14 03:37:32', '2018-07-13 09:23:37', 1, 10, '5b22455cad845_104c87c133f36b2592329a926380bb89.jpg', '5b22455ddb2d1_c0e9d6ae30b739bf3fa54a71317779ae.jpg', 1),
(97, 1, '2313213', 'aabbas', '<p>asd</p>\r\n', '<p>asda</p>\r\n', '2018-06-14 03:35:21', '2018-07-13 09:23:37', 1, 0, '5b2244df63f75_c0e9d6ae30b739bf3fa54a71317779ae.jpg', '5b2244e82670f_104c87c133f36b2592329a926380bb89.jpg', 1),
(98, 2, 'a', 'a', '<p>a</p>\r\n', '<p>a</p>\r\n', '2018-06-14 03:37:32', '2018-07-13 09:23:37', 1, 3, '5b22455cad845_104c87c133f36b2592329a926380bb89.jpg', '5b22455ddb2d1_c0e9d6ae30b739bf3fa54a71317779ae.jpg', 1);

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
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `status`, `title`, `seo_link`, `updated_at`, `created_at`) VALUES
(1, 1, 'Tin khuyến mãi', '', '2018-05-23 02:31:35', '2017-01-03 03:29:20'),
(2, 1, 'Tin thông báo', 'a', '2018-06-14 03:37:47', '2017-01-03 03:29:26'),
(3, 1, 'Tin thời trang', '', '2018-05-23 21:20:18', '2017-01-03 03:29:22');

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
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `ord` int(11) NOT NULL,
  `pimg_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pimg_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pimg1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pimg2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pimg3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pimg4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pimg5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_new` tinyint(2) NOT NULL DEFAULT '0',
  `is_best_sell` tinyint(2) NOT NULL DEFAULT '0',
  `seo_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand` int(11) NOT NULL,
  `type_price` tinyint(4) NOT NULL DEFAULT '1',
  `discount` int(11) NOT NULL,
  `percent` int(11) NOT NULL,
  `size_xs` tinyint(4) NOT NULL DEFAULT '0',
  `size_s` tinyint(4) NOT NULL DEFAULT '0',
  `size_m` tinyint(4) NOT NULL DEFAULT '0',
  `size_l` tinyint(4) NOT NULL DEFAULT '0',
  `size_xl` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_cate`, `code_id`, `title`, `short_desc`, `desc`, `price`, `type`, `numbers`, `colors`, `limit_at`, `created_at`, `updated_at`, `status`, `ord`, `pimg_list`, `pimg_detail`, `pimg1`, `pimg2`, `pimg3`, `pimg4`, `pimg5`, `is_new`, `is_best_sell`, `seo_link`, `brand`, `type_price`, `discount`, `percent`, `size_xs`, `size_s`, `size_m`, `size_l`, `size_xl`) VALUES
(80, 1, '1530088642', 'san pham a', 'aa', '', 1, 1, 1, '1', '2018-05-23', '2018-05-23 09:13:26', '2018-07-03 21:04:29', 1, 12, '5b334ccad1c26_104c87c133f36b2592329a926380bb89.jpg', '', '', '', '', '', '', 1, 0, 'test', 4, 2, 0, 0, 0, 0, 0, 0, 0),
(81, 2, '1532484050', 'san pham b', ' mo ta ngan gon xuc tich\r\n                                                            \r\n                                                            ', '<p>mo ta dai</p>\r\n', 100, 1, 1, '1', '2018-05-23', '2018-05-23 09:13:26', '2018-07-24 19:00:59', 1, 11, '5b334cbb5aa6d_c0e9d6ae30b739bf3fa54a71317779ae.jpg', '5b4f14c02cda7_2c2316af3fae3a4dc685e67d0c7b2ff2.jpg', '5b501c60c84e7_d2833bc6eb8fd8e2c17cb1aaba8fcf2b.jpg', '5b501c60c8cb6_16aa0686a449ce5a6cf1a3fac49a3946.jpg', '5b501c60c9484_bdac18e013c96aa596e2e593012745c4.jpg', '5b501c60c9c57_23feaea8a5b1e4000e20fc8aa77f5164.jpg', '5b501c60ca427_f5e484c9b7506c65794bac15811b920f.jpg', 1, 1, 'test', 4, 3, 0, 0, 1, 0, 1, 1, 0);

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
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `status`, `title`, `seo_link`, `item_id`, `updated_at`, `created_at`) VALUES
(1, 1, 'Áo Len', 'ao-len', 1, '2018-07-22 19:04:04', '2017-01-03 03:29:22'),
(2, 1, 'Áo Thun', 'ao-thun', 1, '2018-07-22 19:03:57', '2017-01-03 03:29:22');

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
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_item`
--

INSERT INTO `product_item` (`id`, `status`, `title`, `seo_link`, `updated_at`, `created_at`) VALUES
(1, 1, 'Áo Khoác', '', '2018-05-23 02:31:35', '2017-01-03 03:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
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
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `simg_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `link`, `created_at`, `updated_at`, `status`, `simg_detail`, `desc`) VALUES
(85, 'tét', 'aaaa', '2018-06-25 09:31:36', '2018-06-25 02:31:36', 1, '5b30b678a8ee2_c81e728d9d4c2f636f067f89cc14862c.jpg', '<div class=\"slider-content slider-text-1 text-left\">\r\n<div class=\"bounceInDown wow\">\r\n<h2>teeeeee</h2>\r\n</div>\r\n</div>\r\n\r\n<div class=\"hidden-xs slider-content slider-text-2 text-left\">\r\n<div class=\"bounceInDown wow\">\r\n<h1>abc</h1>\r\n</div>\r\n</div>\r\n\r\n<div class=\"hidden-xs slider-content slider-text-3 text-left\">\r\n<div class=\"bounceInDown wow\">\r\n<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie<br />\r\nconsequat vel illum dolore eu feugiat nulla facilisis at vero eros.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"hidden-sm hidden-xs slider-content slider-text-4 text-left\">\r\n<div class=\"bounceInUp wow\"><a class=\"slider-button\" href=\"#\">shop now</a></div>\r\n</div>\r\n'),
(86, 'asd', '', '2018-06-27 10:14:59', '2018-06-27 03:14:59', 1, '', '<div class=\"slider-content slider-text-1 text-left\">\r\n<div class=\"bounceInDown wow\">\r\n<h2><span style=\"background-color:#ffffff\">EXCLUSIVE COLLECTION {{$no}}</span></h2>\r\n</div>\r\n</div>\r\n\r\n<div class=\"hidden-xs slider-content slider-text-2 text-left\">\r\n<div class=\"bounceInDown wow\">\r\n<h1><span style=\"background-color:#8b4513\">SHIRT&rsquo;S FOR MEN</span></h1>\r\n</div>\r\n</div>\r\n\r\n<div class=\"hidden-xs slider-content slider-text-3 text-left\">\r\n<div class=\"bounceInDown wow\">\r\n<p><span style=\"background-color:#ffffff\">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</span><br />\r\n<span style=\"background-color:#ffffff\">consequat vel illum dolore eu feugiat nulla facilisis at vero eros.</span></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"hidden-sm hidden-xs slider-content slider-text-4 text-left\">\r\n<div class=\"bounceInUp wow\"><a class=\"slider-button\" href=\"#\">shop now</a></div>\r\n</div>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `status`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, 'aa', 'asdas', '2018-07-12 10:13:54', '2018-07-12 03:35:39');

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
  `permission` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `created_at`, `updated_at`, `remember_token`, `permission`, `phone`, `address`) VALUES
(7, 'tam', 'kyra0590@gmail.com', '$2y$10$jLvBQdYmkVgz0aXAe0rxE.kqmy9nv.GgXBc3YlqO8FAlrlaxpjDRq', 0, '2016-12-14 01:26:26', '2018-07-23 03:05:53', 'fPYe7p7hYDDTPlz5MJWBOvWgFJieRDWHI8rTHx8R7SiiXjowvvaqKDOGjqnH', '2', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

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
-- Indexes for table `discount_code`
--
ALTER TABLE `discount_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `discount_code`
--
ALTER TABLE `discount_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
